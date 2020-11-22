<?php class Main_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function test($nipDosen)
    {
        $this->db->where('nip', $nipDosen);
        $query = $this->db->get('dosen');
        return $query;
    }


    function getDosenByNIP($arrayNipDosen)
    {
        $this->db->where_in('nip', $arrayNipDosen);
        // $this->db->order_by($arraySkorDosen, 'ASC');
        $query = $this->db->get('dosen');
        return $query;
    }


    // FUNCTION SEARCH
    function searchtitle($keyword, $toLowerKeyword)
    {

        // INSERT INTO PENCARIAN TABLE

        date_default_timezone_set('Asia/Jakarta');

        $data = array(
            'id' => bin2hex(random_bytes(5)),
            'keyword' => $toLowerKeyword,
            'waktu' => date('Y-m-d H:i:s'),
        );
        $this->db->insert('pencarian', $data);

        // Wordmark
        $wordMark = '/[{}()""!,.:?]/';

        // Get Stopwords From DB
        $query = $this->db->get('stopwords');
        foreach ($query->result_array() as $row) {
            $arrayStopwords[] = '/\b' . $row['stopwords'] . '\b/';
        }
        $stopWords = $arrayStopwords;
        $spasi = " ";


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
            $clear = preg_replace($stopWords, array(''), $removeKataImbuhan);



            // echo "<br>";
            // echo "<b>BERSIH</b><br>";
            // echo $clear;

            // Nilai awal (sebelum dipangkat)
            $sum = 0;
            // Nilai awal
            $pangkat_sum = 0;

            // Nilai awal (sebelum dipangkat)
            $cek = 0;
            $cek_after = 0;
            $ts = 0;



            // echo "<br><br>";
            // Get KATA and values
            foreach ($uniqueAbstrak_array as $kata) {
                if ($kata != "") {

                    // Get KATA and values

                    $this->db->where('kata_kata', $kata);
                    $query = $this->db->get('index');
                    if ($query->num_rows() > 0) {
                        foreach ($query->result_array() as $row) {
                            // echo $kata . " " . $row['idf'] . "<br>";
                            $idf = $row['idf'];
                        }
                        // Sebelum dipangkatkan
                        $sum += $idf;
                        // Setelah dipangkatkan
                        $pangkat_sum += pow($idf, 2);
                    }



                    if (strpos($toLowerKeyword, $kata) !== FALSE) {
                        $this->db->select('kata_kata, idf');
                        $this->db->where('kata_kata', $kata);
                        $query = $this->db->get('index');
                        if ($query->num_rows() > 0) {
                            foreach ($query->result_array() as $row) {

                                $xxx = pow($row['idf'], 2);
                                // echo "<b>" . $kata . " " . $row['idf'] . " " . $xxx . "</b><br>";
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


            // print_r($asf);
            // echo "<br><br>";
            // SUM sebelum dipangkat
            // echo "<b>SUM = $sum</b>";
            // echo "<br>";
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
                    // echo "Kata $kata = $hitungkoma_akhir <br>";
                } else {
                    // If kata is unavailable in DB
                    $hitungkoma_akhir = 0;
                    // echo "<b>Kata $row TIDAK ADA </b><br>";
                }
                $hitungkoma_awal += $hitungkoma_akhir;
                $hargaKataKunci += $idf;
            }

            // echo "<br>";
            // echo "<b>Hasil total = $hitungkoma_awal </b><br>";
            // echo "<b>Harga kata kunci = $hargaKataKunci </b><br>";
            $kali = $hargaKataKunci * $sum_sqrt;

            if ($kali == '') {
                $hasilAkhir = 0;
                // echo "<b>FIX NILAI AKHIR = $hasilAkhir </b>";
                // echo "<br><br>";
            } else {
                $hasilAkhir = sqrt($hitungkoma_awal / $kali);
                // echo "<b>FIX NILAI AKHIR = " . $hasilAkhir . "</b>";
                // echo "<br><br>";
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
        // print_r($ccc);

        $val = array_sum($ccc);
        // echo "<br><br>";

        // echo "<br><br>";
        // CHECK APAKAH HASIL PENCARIAN == 0 (TIDAK KETEMU)
        if ($val == '0') {
            echo '<h4 class="text-center">NOT FOUND</h4>';
        } else {
            // echo "<br><br>";
            foreach ($ccc as $DocId => $value) {
                if ($value != 0) {
                    $this->db->select('no_reg, judul_skripsi, abstrak, dp_satu, dp_dua');
                    $this->db->from('tugas_akhir ');
                    // $this->db->join('dosen a', 'c.dp_satu = a.nip');
                    // $this->db->join('dosen b', 'c.dp_dua = b.nip');
                    $this->db->where('no_reg', $DocId);
                    $query = $this->db->get();

                    if ($query->num_rows() > 0) {
                        foreach ($query->result_array() as $row) {
                            $judul = $row['judul_skripsi'];
                            $dosen_satu = $row['dp_satu'];
                            // $foto_dosen_satu = $row['foto_dosen_satu'];
                            $dosen_dua = $row['dp_dua'];
                            // $foto_dosen_dua = $row['foto_dosen_dua'];
                        }
                        // echo $judul . "<br>";
                        // echo $value . "<br>";
                        // echo $dosen_satu . "<br>";
                        // echo $dosen_dua . "<br>";
                    }
                    $vv[] = $dosen_satu;
                    $ww[] = $dosen_dua;

                    $bb = array_merge($vv, $ww);
                    $hasilDosen = array_count_values($bb);
                    arsort($hasilDosen);
                    // return $hasilDosen;
                    // echo "<br><br>";
                    // echo "<br><br>";
                    // echo "<br><br>";
                }
            }
            return $hasilDosen;
            // foreach ($hasilDosen as $namaDosen => $nilai) {
            //     return $hasilDosen;
            // }
        }

        echo "<br><br>";
    }
}
