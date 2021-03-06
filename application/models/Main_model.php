<?php class Main_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    function getDosenByNIP($arrayNipDosen)
    {
        $this->db->where_in('nip', "$arrayNipDosen");
        $query = $this->db->get('dosen');
        return $query;
    }

    function banyakData()
    {
        return $this->db->count_all_results('tugas_akhir');
    }

    // Fungsi Pencarian
    function searchtitle($keyword, $toLowerKeyword)
    {
        // Input data ke tabel Pencarian
        date_default_timezone_set('Asia/Jakarta');
        $data = array(
            'id' => bin2hex(random_bytes(5)),
            'keyword' => $toLowerKeyword,
            'waktu' => date('Y-m-d H:i:s'),
        );
        $this->db->insert('pencarian', $data);

        // Wordmark
        $wordMark = '/[{}()""!,.:?]/';

        // Ambil data Stopwords dari DB
        $query = $this->db->get('stopword');
        foreach ($query->result_array() as $row) {
            $arrayStopwords[] = '/\b' . $row['stopword'] . '\b/';
        }
        $stopWord = $arrayStopwords;

        // Ambil data Kata Imbuhan & Kata Dasar
        $this->db->select('kata_imbuhan, kata_dasar');
        $this->db->from('kata_imbuhan');
        $query = $this->db->get();
        foreach ($query->result_array() as $row) {
            $kataImbuhan[] = $row['kata_imbuhan'];
            $kataDasar[] = $row['kata_dasar'];
        }
        $search = $kataImbuhan;
        $replace = $kataDasar;

        // Nomor Dokumen
        $num_doc = 1;

        $this->db->select('judul_skripsi, abstrak, no_reg, dp_satu, dp_dua');
        $this->db->from('tugas_akhir');
        $query = $this->db->get();
        foreach ($query->result_array() as $row) {
            $namaDokumen = "<b>Dokumen " . $num_doc++ . "</b>";
            $idDokumen = $row['no_reg'];
            echo $namaDokumen . "<br>";
            echo "<b>DOKUMEN ASLI</b><br>";
            $judulskripsi = $row['judul_skripsi'];
            $abstrakskripsi = $row['abstrak'];
            $dosen1 = $row['dp_satu'];
            $dosen2 = $row['dp_dua'];
            echo $judulskripsi . "<br>";
            echo $abstrakskripsi . "<br>";
            $judulKecil = strtolower($judulskripsi);
            $abstrakKecil = strtolower($abstrakskripsi);
            $judulRemove = preg_replace($wordMark, "", $judulKecil);
            $abstrakRemove = preg_replace($wordMark, "", $abstrakKecil);

            $mergeData = $judulRemove . " " . $abstrakRemove;
            $removeKataImbuhan = str_replace($search, $replace, $mergeData);
            $uniqueAbstrak_array = array_unique(explode(" ", $removeKataImbuhan));
            $s = array_count_values(explode(" ", $removeKataImbuhan));
            $clear = preg_replace($stopWord, array(''), $removeKataImbuhan);

            echo "<br>";
            echo "<b>Bersih</b><br>";
            echo $clear . "<br><br>";
            $sum = 0;
            $pangkat_sum = 0;
            $cek = 0;
            $cek_after = 0;

            echo "<br><br>";

            foreach ($s as $kata => $banyakKata) {
                if ($kata != "") {
                    // Ambil data Kata dan nilainya dari DB
                    $this->db->where('term', "$kata");
                    $query = $this->db->get('index');
                    if ($query->num_rows() > 0) {
                        foreach ($query->result_array() as $row) {
                        }
                        $W_Dokumen = $row['idf'] * $banyakKata;
                        echo $kata . " " . round($row['idf'], 3) . " " . $banyakKata . " = " . round($W_Dokumen, 3)  . "<br>";

                        // Bobot sebelum dipangkatkan
                        $sum += $W_Dokumen;
                        // Bobot setelah dipangkatkan
                        $pangkat_sum += pow($W_Dokumen, 2);
                    }
                    // Untuk REGEX PREG_REPLACE
                    $regex_ToLowerKeyword = '/\b' . $toLowerKeyword . '\b/';
                    $regex_kata = '/\b' . $kata . '\b/';

                    if (preg_match($regex_ToLowerKeyword, $regex_kata)) {
                        $this->db->select('term, idf');
                        $this->db->where('term', $regex_kata);
                        $query = $this->db->get('index');

                        if ($query->num_rows() > 0) {
                            foreach ($query->result_array() as $row) {
                                $xxx = pow($row['idf'], 2);
                                echo "<b>" . $regex_kata . " JANCUK" . $row['idf'] . " " . $xxx . "</b><br>";
                            }
                            // Hasil pencarian sebelum dipangkatkan
                            $cek += $row['idf'];
                            $cek_after += pow($row['idf'], 2);
                        }
                    }
                    $asf = array($namaDokumen => $cek);
                }
            }
            print_r($asf);
            echo "<br><br>";
            // SUM sebelum dipangkatkan
            echo "<b>Total Bobot Dokumen = " . round($sum, 3) . "</b>";
            echo "<br>";
            // SUM setelah dipangkatkan
            $sum_sqrt = sqrt($pangkat_sum);
            echo "<b>Panjang Bobot Dokumen  = " . round($sum_sqrt, 3)  . "</b>";
            echo "<br>";
            // Nilai Kata Kunci sebelum dipangkat
            echo "<b>Nilai Kata Kunci = $cek</b>";
            echo "<br>";
            // Nilai kata kunci setelah dipangkatkan
            echo "<b>Nilai Kata Kunci Sqrt = " . sqrt($cek_after) . "</b><br>";
            $arrayToLowerKeyword = explode(" ", $toLowerKeyword);
            $hitungkoma_awal = 0;
            $hargaKataKunci = 0;

            // Ubah Kata Kunci ke array
            foreach ($arrayToLowerKeyword as $row) {
                $this->db->select('term, idf');
                $this->db->from('index');
                $this->db->where('term', $row);
                $query = $this->db->get();

                // Cek apakah array diatas ada pada DB
                if ($query->num_rows() > 0) {
                    foreach ($query->result_array() as $row) {
                        $idf = $row['idf'];
                        $kata = $row['term'];
                    }
                    // $hitungkoma_akhir adalah berapa banyak kata (kata kunci) didalam array abstrak (per judul) * $idf
                    $hitungkoma_akhir = substr_count($removeKataImbuhan, $kata) * pow($idf, 2);
                    // echo "<b>" . $hitungkoma_akhir . "</b><br>";
                    // echo "<b>" . $kata . " " . round($idf, 3) . "</b><br>";
                    // $p = round($idf, 3);
                    $pangkatKataKunci = pow($idf, 2);

                    // echo $pangkatKataKunci . "<br>";

                    // Jika $kata ada dalam DB
                    echo "Kata <b>$kata = " . round($pangkatKataKunci, 3) . "</b><br>";
                } else {
                    // Jika $kata tidak ada dalam DB
                    $hitungkoma_akhir = 0;
                    $pangkatKataKunci = 0;
                    echo "<b>Kata $row TIDAK ADA</b>";
                }
                $hitungkoma_awal += $hitungkoma_akhir;
                $hargaKataKunci += $pangkatKataKunci;
            }
            echo "<br>";
            echo "<b>Hasil total = $hitungkoma_awal </b><br>";
            echo "Panjang Bobot Kata Kunci = " . round(sqrt($hargaKataKunci),3)  . "</b><br>";
            $kali = sqrt($hargaKataKunci) * $sum_sqrt;

            if ($kali == '') {
                $hasilAkhir = 0;
                echo "<b>FIX NILAI AKHIR = $hasilAkhir </b>";
                echo "<br><br>";
            } else {
                $akar_hitungkoma_awal = sqrt($hitungkoma_awal);
                $end = round(sqrt($hargaKataKunci), 3) * round($sum_sqrt, 3);
                $mm = sqrt($hargaKataKunci) * $sum_sqrt;

                echo "<b> COSIM = " . round(sqrt($hargaKataKunci), 3) . " " . round($sum_sqrt, 3)  . "=" . round($mm, 3) . "</b><br>";
                $nn = $hitungkoma_awal / round($mm, 3);
                echo "<b>FIX NILAI AKHIR = " . round($nn, 3)  .  "</b>";
                echo "<br><br>";
            }
            $namaDokumenArray = array(
                'idDokumen' => $idDokumen,
                'hasil_akhir' => $nn,
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
            return FALSE;
        } else {
            foreach ($ccc as $DocId => $value) {
                if ($value != 0) {
                    $this->db->select('no_reg, judul_skripsi, abstrak, dp_satu, dp_dua');
                    $this->db->from('tugas_akhir');
                    $this->db->where('no_reg', "$DocId");
                    $query = $this->db->get();

                    if ($query->num_rows() > 0) {
                        foreach ($query->result_array() as $row) {
                            $judul = $row['judul_skripsi'];
                            $dosen_satu = $row['dp_satu'];
                            $dosen_dua = $row['dp_dua'];
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
                    echo "<br><br>";
                    echo "<br><br>";
                    echo "<br><br>";
                }
            }
            return $hasilDosen;
        }
        echo "<br><br>";
    }
}
