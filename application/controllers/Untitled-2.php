<?php class Main_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    // Function Search
    function searchtitle($keyword, $toLowerKeyword)
    {
        // Insert into Pencarian Table
        date_default_timezone_set('Asia/Jakarta');
        $data = array(
            'id' => bin2hex(random_bytes(5)),
            'keyword' => $toLowerKeyword,
            'waktu' => date('Y-m-d H:i:s'),
        );
        $this->db->insert('pencarian', $data);

        // Wordmark
        $wordMark = '/[{}()""!,.:?]/';

        // Get Stopword From DB
        $query = $this->db->get('stopword');
        foreach ($query->result_array() as $row) {
            $arrayStopwords[] = '/\b' . $row['stopword'] . '\b/';
        }
        $stopWord = $arrayStopwords;

        // Get Kata Imbuhan & Kata Dasar
        $this->db->select('kata_imbuhan, kata_dasar');
        $this->db->from('kata_imbuhan');
        $query = $this->db->get();
        foreach ($query->result_array() as $row) {
            $kataImbuhan[] = $row['kata_imbuhan'];
            $kataDasar[]  = $row['kata_dasar'];
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

                $this->db->like('term', $kata);
                $query = $this->db->get('index');
                if ($query->num_rows() > 0) {
                    foreach ($query->result_array() as $row) {
                    }
                }
                echo $kata . " " . " " . $row['idf'] . " "  . $banyakKata . "<br>";
            }
        }
    }
    function banyakData()
    {
        return $this->db->count_all_results('tugas_akhir');
    }
}
