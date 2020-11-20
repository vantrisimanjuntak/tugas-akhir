<?php class Main_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    // DOSEN
    function addlecture()
    {
        $data = array(
            'nip' => $this->input->post('nip'),
            'nama' => $this->input->post('nama'),
            'program_studi' => $this->input->post('program_studi'),
            'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
            'foto' => $this->_uploadImage(),
        );
        if ($data == TRUE) {
            $this->db->insert('dosen', $data);
        }
    }

    private function _uploadImage()
    {
        $config['upload_path'] = './assets/images/dosen_profile/';
        $config['allowed_types'] = 'png|jpeg|jpg|gif';
        $config['max_size'] = '2048';
        $config['max_width'] = '0';
        $config['max_height'] = '0';
        $config['file_name'] = $this->input->post('nip');

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors());
        } else {
            return $this->upload->data('file_name');
        }
    }

    function allProdi()
    {
        return $this->db->get('program_studi')->result_array();
    }

    function allLecture()
    {
        $this->db->order_by('nama', 'ASC');
        return $this->db->get('dosen')->result_array();
    }



    // MAHASISWA
    function checknim($nim)
    {
        // CHECK IF MAHASISWA IS AVAILABLE
        $this->db->select('nim');
        $this->db->from('mahasiswa');
        $this->db->where('nim', $nim);
        $queryMahasiswa = $this->db->get();

        // check if the MAHASISWA has submitted the SKRIPSI
        $this->db->select('mahasiswa');
        $this->db->from('sample');
        $this->db->where('mahasiswa', $nim);
        $querySubmit = $this->db->get();

        // JIKA MAHASISWA ADA DAN SKRIPSI BELUM DIINPUT
        if ($queryMahasiswa->num_rows() > 0 && $querySubmit->num_rows() == null) {
            echo '<i class="fa fa-check" aria-hidden="true" style="color:yellow"></i>';
            echo '<script>
                $("#judulskripsi, #abstrak, #dp1, #dp2, #btnSubmit").removeAttr("disabled", true);
                    </script>';
        }
        // JIKA MAHASISWA ADA DAN SKRIPSI SUDAH DIINPUT 
        else if ($queryMahasiswa->num_rows() > 0 && $querySubmit->num_rows() > 0) {
            echo "SKRIPSI SUDAH DIINPUT";
        }
        // JIKA MAHASISWA TIDAK ADA 
        else {
            echo '<i class="fa fa-times" aria-hidden="true">&nbsp;NIM TIDAK ADA</i>';
            echo '<script>
                $("#judulskripsi, #abstrak, #dp1, #dp2, #btnSubmit").prop("disabled", true);
                    </script>';
        }
    }



    // SKRIPSI
    function submitSkripsi()
    {
        $no_reg = $this->input->post('no_reg');
        $nim = $this->input->post('nim');
        $judulskripsi = $this->input->post('judulskripsi');
        $abstrak = $this->input->post('abstrak');
        $dp1 = $this->input->post('dp1');
        $dp2 = $this->input->post('dp2');

        $data = array(
            'no_reg' => $no_reg,
            'mahasiswa' => $nim,
            'judul_skripsi' => $judulskripsi,
            'abstrak' => $abstrak,
            'dp_satu' => $dp1,
            'dp_dua' => $dp2
        );
        $this->db->insert('sample', $data);

        // BANYAK DATA SKRIPSI
        $getDataSkripsi = $this->db->get('sample');
        $totalSkripsi = $getDataSkripsi->num_rows();

        // MENGHILANGKAN STOPWORD
        $wordMark = '/[{}()""!,.:?]/';

        // Mengubah abstrak menjadi huruf kecil
        $toLowerAbstrak = strtolower($abstrak);
        // Mengubah stopword ABSTRAK menjadi SPASI
        $clean = preg_replace($wordMark, "", $toLowerAbstrak);
        $clear = preg_replace(array('/\bbadanya\b/', '/\boleh\b/', '/\bini\b/', '/\bitu\b/', '/\byang\b/', '/\bsebagai\b/', '/\bsebuah\b/', '/\byaitu\b/', '/\bdi\b/', '/\bselain\b/', '/\badalah\b/', '/\bdengan\b/'), array(''), $clean);



        // GET KATA IMBUHAN
        $this->db->select('kata_imbuhan, kata_dasar');
        $this->db->from('kata_imbuhan');
        $queryKataImbuhan = $this->db->get();
        foreach ($queryKataImbuhan->result_array() as $row) {
            $kataImbuhan[] = $row['kata_imbuhan'];
            $kataDasar[] = $row['kata_dasar'];
        }
        $search = $kataImbuhan;
        $replace = $kataDasar;

        // Change Kata Imbuhan to Kata Dasar in ABSTRAK

        $removeKataImbuhan = str_replace($search, $replace, $clear);


        // Mengubah ABSTRAK menjadi array
        $arrayAbstrak = array_unique(explode(" ", $removeKataImbuhan));
        foreach ($arrayAbstrak as $kata) {
            // Check if KATA is not empty
            if ($kata != "") {
                $this->db->where('kata_kata', $kata);
                $cekKataKata = $this->db->get('index');
                // Cek If kata is available
                if ($cekKataKata->num_rows() > 0) {
                    foreach ($cekKataKata->result_array() as $row) {
                        $id = $row['id'];
                        $katakata = $row['kata_kata'];
                        $totalDokumen = $row['total_dokumen'];
                    }
                    $totalDokumen++;

                    $this->db->set('total_dokumen', $totalDokumen);
                    $this->db->where('kata_kata', $katakata);
                    $this->db->update('index');
                } else {
                    // If kata is unavailable
                    $IdfBaru = log10($totalSkripsi / 1);
                    $data = array(
                        'kata_kata' => $kata,
                        'no_doc' => $no_reg,
                        'total_dokumen' => 1,
                        'idf' => $IdfBaru,
                    );
                    $this->db->insert('index', $data);
                }
            }
        }
        // UPDATE IDF
        $queryTableIndex = $this->db->get('index')->result_array();
        foreach ($queryTableIndex as $row) {
            $idf = log10($totalSkripsi / $row['total_dokumen']);
            $this->db->set('idf', $idf);
            $this->db->where('kata_kata', $row['kata_kata']);
            $this->db->update('index');
        }
    }


    // FUNCTION SEARCH
    function searchtitle($keyword)
    {
        date_default_timezone_set('Asia/Jakarta');


        // To Lower Keyword
        $toLowerKeyword = strtolower($keyword);
        // Wordmark
        $wordMark = '/[{}()""!,.:?]/';
        // Get Stopwords
        $query = $this->db->get('stopwords');
        foreach ($query->result_array() as $row) {
            $kumpulanStopwords[] = $row['stopwords'];
        }
        $stopWords = $kumpulanStopwords;
        $spasi = " ";

        // Insert Pencarian and Dosen to DB
        $data = array(
            'id' => bin2hex(random_bytes(5)),
            'keyword' => $toLowerKeyword,
            'waktu' => date('Y-m-d H:i:s'),
            // 'dosen' => $namaDosen,
            // 'nilai' => $nilai,
        );
        $this->db->insert('pencarian', $data);





        // Get Kata Imbuhan & Kata Dasar
        $this->db->select('kata_imbuhan, kata_dasar');
        $this->db->from('kata_imbuhan');
        $query = $this->db->get();
        foreach ($query->result_array() as $row) {
            $kataImbuhan[] = $row['kata_imbuhan'];
            $kataDasar[] = $row['kata_dasar'];
        }
        $search = $kataImbuhan;
        $replace = $kataDasar;

        $num_doc = 1;

        $this->db->select('judul_skripsi, abstrak, no_reg, dp_satu, dp_dua');
        $this->db->from('tugas_akhir');
        $query = $this->db->get();

        foreach ($query->result_array() as $row) {

            $namaDokumen = "<b>Dokumen " . $num_doc++ . "</b>";
            $idDokumen = $row['no_reg'];
            // echo $namaDokumen . "<br>";
            // echo "<b>DOKUMEN ASLI</b><br>";
            $judulskripsi = $row['judul_skripsi'];
            $abstrakskripsi = $row['abstrak'];
            $dosen1 = $row['dp_satu'];
            $dosen2 = $row['dp_dua'];
            // echo $judulskripsi . "<br>";
            // echo $abstrakskripsi . "<br>";
            $judulKecil = strtolower($judulskripsi);
            $abstrakKecil = strtolower($abstrakskripsi);
            $judulRemove = preg_replace($wordMark, "", $judulKecil);
            $abstrakRemove = preg_replace($wordMark, "", $abstrakKecil);
            $removeKataImbuhan = str_replace($search, $replace, $abstrakRemove);
            $uniqueAbstrak_array = array_unique(explode(" ", $removeKataImbuhan));
            $clear = preg_replace(array('/\bbadanya\b/', '/\boleh\b/', '/\bini\b/', '/\bitu\b/', '/\byang\b/', '/\bsebagai\b/', '/\bsebuah\b/', '/\byaitu\b/', '/\bdi\b/', '/\bselain\b/', '/\badalah\b/'), array(''), $removeKataImbuhan);


            echo "<br>";
            echo "<b>BERSIH</b><br>";
            echo $clear;

            // Nilai awal (sebelum dipangkat)
            $sum = 0;
            // Nilai awal
            $pangkat_sum = 0;



            // echo "<br><br>";
            // Get KATA and values
            foreach ($uniqueAbstrak_array as $kata) {
                if ($kata != "") {
                    $this->db->where('kata_kata', $kata);
                    $query = $this->db->get('index');
                    if ($query->num_rows() > 0) {
                        foreach ($query->result_array() as $row) {
                            echo $kata . " " . $row['idf'] . "<br>";
                            $idf = $row['idf'];
                        }
                        // Sebelum dipangkatkan
                        $sum += $idf;
                        // Setelah dipangkatkan
                        $pangkat_sum += pow($idf, 2);
                    }
                }
            }
            // Nilai awal (sebelum dipangkat)
            $cek = 0;
            $cek_after = 0;
            $ts = 0;
            foreach ($uniqueAbstrak_array as $kata) {
                if ($kata != "") {
                    if (strpos($toLowerKeyword, $kata) !== FALSE) {
                        $this->db->select('kata_kata, idf');
                        $this->db->where('kata_kata', $kata);
                        $query = $this->db->get('index');
                        if ($query->num_rows() > 0) {
                            foreach ($query->result_array() as $row) {

                                $xxx = pow($row['idf'], 2);
                                echo "<b>" . $kata . " " . $row['idf'] . " " . $xxx . "</b><br>";
                            }
                            // Hasil pencarian sebelum dipangkat
                            $cek += $row['idf'];
                            // Hasil pencarian setelah dipangkat
                            $cek_after += pow($row['idf'], 2);
                        }
                    }
                    $asf = array($namaDokumen => $cek);
                }
            }
            print_r($asf);
            echo "<br><br>";
            // SUM sebelum dipangkat
            echo "<b>SUM = $sum</b>";
            echo "<br>";
            // SUM setelah dipangkat
            $sum_sqrt = sqrt($pangkat_sum);
            // echo "<b>SUM Sqrt = " . $sum_sqrt . "</b>";
            // echo "<br>";
            // Nilai Kata Kunci sebelum dipangkat
            // echo "<b>Nilai Kata Kunci = $cek </b>";
            // Nilai Kata Kunci setelah dipangkat
            // echo "<br>";
            // echo "<b>Nilai Kata Kunci Sqrt = " . sqrt($cek_after) . "</b><br>";
            $arrayToLowerKeyword = explode(" ", $toLowerKeyword);
            $hitungkoma_awal = 0;
            $hargaKataKunci = 0;

            // Change Keyword to arrays
            foreach ($arrayToLowerKeyword as $row) {
                $this->db->select('kata_kata, idf');
                $this->db->from('index');
                $this->db->where('kata_kata', $row);
                $query = $this->db->get();

                // Check if array is available in DB
                if ($query->num_rows() > 0) {
                    foreach ($query->result_array() as $row) {
                        $idf = $row['idf'];
                        $kata = $row['kata_kata'];
                    }
                    // $hitungkoma_akhir adalah berapa banyak kata(kata kunci) didalam array abstrak (per judul) * $idf
                    $hitungkoma_akhir = substr_count($removeKataImbuhan, $kata) * $idf;
                    // If $kata is available in DB
                    echo "Kata $kata = $hitungkoma_akhir <br>";
                } else {
                    // If kata is unavailable in DB
                    $hitungkoma_akhir = 0;
                    echo "<b>Kata $row TIDAK ADA </b><br>";
                }
                $hitungkoma_awal += $hitungkoma_akhir;
                $hargaKataKunci += $idf;
            }

            echo "<br>";
            echo "<b>Hasil total = $hitungkoma_awal </b><br>";
            echo "<b>Harga kata kunci = $hargaKataKunci </b><br>";
            $kali = $hargaKataKunci * $sum_sqrt;

            if ($kali == '') {
                $hasilAkhir = 0;
                echo "<b>FIX NILAI AKHIR = $hasilAkhir </b>";
                echo "<br><br>";
            } else {
                $hasilAkhir = sqrt($hitungkoma_awal / $kali);
                echo "<b>FIX NILAI AKHIR = " . $hasilAkhir . "</b>";
                echo "<br><br>";
            }

            $namaDokumenArray = array(
                'idDokumen' => $idDokumen,
                'hasil_akhir' => $hasilAkhir,
                'dosen_satu' => $dosen1,
                'dosen_dua' => $dosen2,
            );

            $x[] = $namaDokumenArray;
        }
        echo "<b>Hasil Pencarian</b>";
        echo "<br><br>";
        $ccc = array_column($x, 'hasil_akhir', 'idDokumen');
        // MENGAMBIL 2 LIMIT
        arsort($ccc);
        print_r($ccc);

        $val = array_sum($ccc);
        echo "<br><br>";

        echo "<br><br>";
        // CHECK APAKAH HASIL PENCARIAN == 0 (TIDAK KETEMU)
        if ($val == '0') {
            echo '<h4 class="text-center">NOT FOUND</h4>';
        } else {
            // echo "<br><br>";
            foreach ($ccc as $DocId => $value) {
                if ($value != 0) {
                    $this->db->select('no_reg, judul_skripsi, abstrak, a.nama AS dp_satu, b.nama AS dp_dua, a.foto AS foto_dosen_satu, b.foto AS foto_dosen_dua');
                    $this->db->from('tugas_akhir c');
                    $this->db->join('dosen a', 'c.dp_satu = a.nip');
                    $this->db->join('dosen b', 'c.dp_dua = b.nip');
                    $this->db->where('no_reg', $DocId);
                    $query = $this->db->get();

                    if ($query->num_rows() > 0) {
                        foreach ($query->result_array() as $row) {
                            $judul = $row['judul_skripsi'];
                            $dosen_satu = $row['dp_satu'];
                            $foto_dosen_satu = $row['foto_dosen_satu'];
                            $dosen_dua = $row['dp_dua'];
                            $foto_dosen_dua = $row['foto_dosen_dua'];
                        }
                        echo $judul . "<br>";
                        echo $value . "<br>";
                        echo $dosen_satu . "<br>";
                        echo $dosen_dua . "<br>";
                    }
                    $vv[] = $dosen_satu;
                    $ww[] = $dosen_dua;

                    $bb = array_merge($vv, $ww);
                    $hasilDosen = array_count_values($bb);
                    arsort($hasilDosen);
                    // return $hasilDosen;
                    echo "<br><br>";
                    echo "<br><br>";
                    echo "<br><br>";
                }
            }
            foreach ($hasilDosen as $namaDosen => $nilai) {
                return $hasilDosen;
            }
        }

        echo "<br><br>";
    }
}
