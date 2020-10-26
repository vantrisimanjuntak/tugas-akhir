<?php class Main_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    //function for dosen 
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
        $query = $this->db->get('dosen');
        return $query->result_array();
    }


    // end function for dosen

    // function for skripsi
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
            'dp_dua' => $dp2,
        );
        $this->db->insert('tugas_akhir', $data);

        $this->db->select('kata_kata');
        $query = $this->db->get('pecah_kata')->result_array();

        $wordMark = '/[{}()""!,.:?]/';
        $toLowerAbstrak = strtolower($abstrak);
        $clean = preg_replace($wordMark, "", $toLowerAbstrak);
        $explode = array_unique(explode(" ", $clean));

        // Banyak data
        $t = $this->db->get('tugas_akhir');
        $banyakData =  $t->num_rows();
        // D/df

        foreach ($explode as $wordsAbstrak) {

            if ($wordsAbstrak != "") {
                $this->db->where('kata_kata', $wordsAbstrak);
                $query = $this->db->get('pecah_kata');
                // UPDATE TOTAL_DOKUMEN
                if ($query->num_rows() > 0) {
                    foreach ($query->result_array() as $row) {
                        $id = $row['id'];
                        $katakata = $row['kata_kata'];
                        $totalDokumen = $row['total_dokumen'];
                    }
                    $totalDokumen++;

                    $this->db->set('total_dokumen', $totalDokumen);
                    $this->db->where('kata_kata', $katakata);
                    $this->db->update('pecah_kata');
                } else {

                    $IdfBaru = log10($banyakData / 1);
                    $data = array(

                        'kata_kata' => $wordsAbstrak,
                        'no_doc' => $no_reg,
                        'total_dokumen' => 1,
                        'idf' => $IdfBaru,

                    );
                    $this->db->insert('pecah_kata', $data);
                }
            }
        }
        // UPDATE IDF
        $u = $this->db->get('pecah_kata')->result_array();
        foreach ($u as $row) {
            $idf = log10($banyakData / $row['total_dokumen']);
            $this->db->set('idf', $idf);
            $this->db->where('kata_kata', $row['kata_kata']);
            $this->db->update('pecah_kata');
        }
    }

    // function for search by title
    function searchtitle($keyword)
    {
        $toLowerKeyword = strtolower($keyword);
        $wordMark = '/[{}()""!,.:?]/';
        $stopWords = ['adalah', 'oleh', 'pada', 'ini', 'dan', 'yang', 'sebagai', 'sebuah', 'yaitu', 'untuk', 'selain', 'adalah', 'itu', 'dengan', 'ada', 'tentang', 'bagi', 'dalam',  'judul_skripsi', 'abstrak'];

        $num_doc = 1;

        $this->db->select('judul_skripsi, abstrak, no_reg, dp_satu, dp_dua');
        $this->db->from('tugas_akhir');
        $res = $this->db->get();

        foreach ($res->result_array() as $row) {
            $namaDokumen = "<b>Dokumen " . $num_doc++ . "</b>";
            $idDokumen = $row['no_reg'];
            echo $namaDokumen . "<br>";
            echo "<b>DOKUMEN ASLI</b><br>";
            $judulskripsi = $row['judul_skripsi'];
            $abstrakskripsi = $row['abstrak'];
            $dosen1 = $row['dp_satu'];
            $dosen2 = $row['dp_dua'];
            echo $judulskripsi . "<br>";
            echo $abstrakskripsi . "<br><br>";
            echo "<b>BERSIH</b><br>";
            $judulKecil = strtolower($judulskripsi);
            $abstrakKecil = strtolower($abstrakskripsi);
            $judulRemove = preg_replace($wordMark, "", $judulKecil);
            $abstrakRemove = preg_replace($wordMark, "", $abstrakKecil);
            $abstrakRemove2 = str_replace($stopWords, "", $abstrakRemove);
            $unikAbstrak = array_unique(explode(" ", $abstrakRemove2));
            $ada = 1;
            $tidak = 0;
            foreach ($unikAbstrak as $kata) {
                echo $kata . " ";
            }
            echo "<br><br>";
            echo "<b>Banyak Kata</b>";

            echo "<br><br>";
            echo "<b>Pecahan Kata</b><br>";

            // nilai awal (sebelum dipangkat)
            $sum = 0;
            // nilai awal (setelah dipangkat)
            $pangkat_sum = 0;
            // KUMPULAN SELURUH KATA-KATA
            foreach ($unikAbstrak as $kata) {
                if ($kata != "") {
                    $this->db->where('kata_kata', $kata);
                    $query = $this->db->get('pecah_kata');
                    if ($query->num_rows() > 0) {
                        foreach ($query->result_array() as $row) {
                            // $ho = pow($row['idf'], 2); // $ho = nilai $row['idf'] yang dipangkatdua kan
                            echo $kata . " " . $row['idf']  .   "<br>";
                            $idf = $row['idf'];
                        }
                        // sebelum dipangkatkan
                        $sum += $idf;
                        // setelah dipangkatkan
                        $pangkat_sum += pow($idf, 2);
                    }
                }
            }
            // nilai awal (sebelum dipangkat)
            $cek = 0;
            // nilai awal (setelah dipangkat)
            $cek_after = 0;
            $ts = 0;
            // echo  "<br><br>";
            foreach ($unikAbstrak as $kata) {
                if ($kata != "") {
                    if (strpos($toLowerKeyword, $kata) !== FALSE) {
                        $this->db->select('kata_kata, idf');
                        $this->db->where('kata_kata', $kata);
                        $query = $this->db->get('pecah_kata');
                        if ($query->num_rows() > 0) {
                            foreach ($query->result_array() as $row) {
                                $xxx = pow($row['idf'], 2);

                                echo "<b>" . $kata . " " . $row['idf'] . " " . $xxx . "</b><br>";
                            }
                            // Hasil pencarian sebelum dipangkat
                            $cek += $row['idf'];
                            // Hasil pencarian setelah dipangkat
                            $cek_after += pow($row['idf'], 2);
                            // $ts += $xxx;
                        }
                    }
                    $asf = array($namaDokumen =>  $cek);
                }
            }

            print_r($asf);
            echo "<br><br>";
            // SUM sebelum dipangkat
            echo "<b>SUM = $sum </b>";
            echo "<br>";
            // SUM setelah dipangkat
            $sum_sqrt = sqrt($pangkat_sum);
            echo "<b>SUM Sqrt = " . $sum_sqrt  . "</b>";
            echo  "<br>";
            // Nilai Kata Kunci sebelum dipangkat
            echo "<b>Nilai Kata Kunci = " . $cek . "</b>";
            // Nilai Kata Kunci setelah dipangkat
            echo "<br>";
            echo "<b>Nilai Kata Kunci Sqrt = " . sqrt($cek_after)    . "</b><br>";
            $arrayToLowerKeyword = explode(" ", $toLowerKeyword);
            $hitungkoma_awal = 0;
            $hargaKataKunci = 0;
            foreach ($arrayToLowerKeyword as $key) {
                $this->db->select('kata_kata, idf');
                $this->db->from('pecah_kata');
                $this->db->where('kata_kata', $key);
                $query = $this->db->get();
                if ($query->num_rows() > 0) {
                    foreach ($query->result_array() as $row) {
                        $idf = $row['idf'];
                    }
                    $hitungkoma_akhir = substr_count($abstrakRemove2, $key) * $idf;

                    echo "Kata $key = " . $hitungkoma_akhir . "<br>";
                } else {
                    echo "Kata $key = " . substr_count($abstrakRemove2, $key) * $idf . "<br>";
                }
                $hitungkoma_awal += $hitungkoma_akhir;
                $hargaKataKunci += $row['idf'];
            }
            echo "<br>";
            echo "<b>Hasil total = $hitungkoma_awal </b><br>";
            echo "<b>Harga kata kunci =$hargaKataKunci </b><br>";
            $kali = $hargaKataKunci * $sum_sqrt;
            $hasilAkhir = sqrt($hitungkoma_awal / $kali);
            echo "<b>FIX NILAI AKHIR = " . $hasilAkhir . "</b>";
            echo  "<br><br>";



            $namaDokumenArray = array(
                // 'idDokumen' => $idDokumen,
                'idDokumen' => $idDokumen,
                'hasil_akhir' => $hasilAkhir,
                // 'nilaiKataKunci' => $cek,
                'dosen_satu' => $dosen1,
                'dosen_dua' => $dosen2,
            );

            // print_r($namaDokumenArray);
            // echo "<br>";
            $x[] = $namaDokumenArray;
            // print_r($x);
        }
        // echo "<br><br><br>";
        echo "<b>Hasil Pencarian</b><br>";
        // print_r(array_slice($x, 12));
        $ccc =  array_column($x, 'hasil_akhir', 'idDokumen');
        // MENGAMBIL 2 LIMIT
        $ow = array_slice($ccc, 0, 3);

        // MENGURUTKAN DARI YANG BESAR -> KECIL;
        arsort($ow);

        foreach ($ow as $idDokumen => $nilaiCari) {
            $this->db->select('no_reg, judul_skripsi, abstrak, a.nama AS dp_satu, b.nama AS dp_dua, a.foto AS foto_dosen_satu, b.foto AS foto_dosen_dua');
            $this->db->from('tugas_akhir c');
            $this->db->join('dosen a', 'c.dp_satu = a.nip');
            $this->db->join('dosen b', 'c.dp_dua = b.nip');
            $this->db->where('no_reg', $idDokumen);
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
                echo $dosen_satu . "<br>";
                echo $foto_dosen_satu . "<br>";
                echo $foto_dosen_dua . "<br>";
                echo $dosen_dua . "<br>";
            }
        }
        echo "<br><br><br>";
    }


    // end function for search by title
    // end function for skripsi

    function checknim($nim)
    {
        $this->db->where('nim', $nim);
        $query = $this->db->get('mahasiswa');

        $this->db->where('mahasiswa', $nim);
        $dataExists = $this->db->get('tugas_akhir');

        if ($query->num_rows() > 0 && $dataExists->num_rows() == null) {
            echo '<i class="fa fa-check" aria-hidden="true" style="color:yellow"></i>';
            echo '<script>
                $("#judulskripsi, #abstrak, #dp1, #dp2, #btnSubmit").removeAttr("disabled", true);
                    </script>';
        } else if ($query->num_rows() > 0 && $dataExists->num_rows() > 0) {
            echo "SKRIPSI SUDAH DIINPUT";
        } else {
            echo '<i class="fa fa-times" aria-hidden="true">&nbsp;NIM TIDAK ADA</i>';
            echo '<script>
                $("#judulskripsi, #abstrak, #dp1, #dp2, #btnSubmit").prop("disabled", true);
                    </script>';
        }
    }
}
