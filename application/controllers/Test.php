<?php
class Test extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('control/Control_model');
    }

    function index()
    {


        $judul = 'PENGARUH DEFLEKTOR PENGARAH ALIRAN DAN VARIASI SUDUT SUDU TURBIN AIR POROS VERTIKAL ALIRAN DATAR TERHADAP KINERJA TURBIN';

        $abstrak = 'Aliran sungai dan saluran irigasi memiliki potensi untuk dikembangkan menjadi pembangkit energi listrik atau penggerak mekanik yang terbarukan dan ramah lingkungan. Turbin kinetik mampu beroperasi pada kecepatan aliran antara 0,01 – 2,5 m/s, sehingga dapat diterapkan untuk aliran sungai dan saluran irigasi. Tujuan penelitian ini adalah mengetahui pengaruh penggunaan pemandu arah aliran dan variasi sudut sudu turbin untuk mengetahui kombinasi dari keduanya yang mampu bekerja lebih optimal. Metode penelitian yang dilakukan adalah dengan eksperimen dan pengamatan langsung di lapangan dengan prototipe turbin air poros vertikal aliran datar dengan variasi deflektor pengarah aliran dan sudut sudu. Sudut sudu turbin divariasikan mulai 15, 25, dan 35 dengan penggunaan pemandu arah aliran 1/2 dan 1/4 aliran. Hasil penelitian menunjukkan bahwa turbin air dengan variasi sudut sudu 15, 25 dan 35 mengalami kenaikan performa pada penggunaan deflektor 1/2 aliran berturut-turut dari 3,303; 4,846; dan 5,394 watt. Pada penggunaan deflektor 1/4 aliran, daya yang dihasilkan turbin mengalami sedikit penurunan dari 15, 25 dan 35, berturut-turut 5,971; 5,411; dan 4,850 watt. Dari penelitian yang dilakukan dapat disimpulkan bahwa dengan mengubah posisi deflektor pemandu arah aliran dari 1/2 menjadi 1/4 aliran pada turbin air kinetik poros vertikal ini dapat meningkatkan kinerja turbin dengan daya keluaran. Kombinasi deflektor pemandu aliran dan sudut sudu yang mampu menghasilkan performa maksimal adalah kombinasi penggunaan defektor 1/4 aliran dan sudut sudu 15 dengan daya sebesar 5.971 watt dan efisiensi 42,54. Kata kunci: turbin kinetik, turbin savonius, poros vertikal, deflector, performa turbin';

        $merge = strtolower($judul . " " . $abstrak);
        $wordMark = '/[{}()""º°\'!,.:?]/';


        $hmm = preg_replace($wordMark, "", $merge);
        $arrayKata = explode(" ", $hmm);
        foreach ($arrayKata as $row) {
            echo $row . " ";
        }

        $queryGetStopwords = $this->Control_model->getAllStopword()->result_array();
        // print_r($queryGetStopwords);

        foreach ($queryGetStopwords as $row) {
            $arrayStopwords[] = '/\b' . $row['stopword'] . '\b/';
        }
        $clear = preg_replace($arrayStopwords, array(''), $hmm);
        echo "<br><br>";
        echo $clear;
        echo "<br><br>";
        $this->db->select('kata_imbuhan, kata_dasar');
        $this->db->from('kata_imbuhan');
        $queryKataImbuhan = $this->db->get();
        foreach ($queryKataImbuhan->result_array() as $row) {
            $kataImbuhan[] = $row['kata_imbuhan'];
            $kataDasar[] = $row['kata_dasar'];
        }
        $search = $kataImbuhan;
        $replace = $kataDasar;

        $removeKataImbuhan = str_replace($search, $replace, $clear);
        echo $removeKataImbuhan;

        echo "<br><br>";
        echo "<br><br>";
        echo "Hitung banyak kata <br>";
        $qq = explode(" ", $removeKataImbuhan);

        // print_r(array_count_values($arrayKata));

        print_r(array_count_values($qq));
    }
}
