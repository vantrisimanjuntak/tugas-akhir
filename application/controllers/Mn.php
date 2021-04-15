<?php class Mn extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }
    function index()
    {
        $text = 'SIMULASI MONITORING NILAI TEGANGAN RMS, ARUS RMS, DAYA, FAKTOR DAYA, FREKUENSI MENGGUNAKAN LABVIEW SECARA REALTIME
        Seperti yang diketahui, sistem digital telah digunakan dalam kehidupan sehari-hari atau dalam bidang industri saat ini karena lebih bermaanfaat dibandingkan dengan sistem analog. Karena pentingnya pengembangan system digital, banyak prangkat digital yang baru yang telah didesain secara kompleks. Beberapa perangkat yang disebut mikroprosesor, mikrokontroler atau microchip. Hal ini sangat penting untuk memiliki kinerja kecepatan yang sangat tinggi di semua prengkat. Dalam penelitian ini dirancang sebuah alat yaitu, Arichmetic Logic Unit atau bisa disebut juga dengan ALU. Merupakan bagian penting dari Field Programmable Gate Arrays atau bisa disebut juga dengan FPGA, ALU pada umumnya memiliki fungsi untuk melakukan perhitungan aritmatika dan logika. Berdasarkan dari hasil pengujian alat yang telah dilakukan dapat disimpulkan, bahwa perancangan pada Arichmetic Logic Unit pada Spartan 2 FPGA. dengan operasi aritmatika yang dilakukan adalah operasi ADDER (A + B) dan SUBTRACTOR (A – B), operasi logika yang dilakukan adalah operasi OR (A OR B) dan AND (A AND B). Sudah disimulasikan dan diimplementasikan dengan hasil yang sesuai spesifikasi dari rancangan. Kata kunci: Arichmetic Logic Unit 8 bit, Penjumlah, pengurang, AND, OR, Spartan 2 FPGA.';

        echo $text;
        $qyu = explode(" ", $text);
        $z = array_count_values($qyu);

        echo "<br><br>";
        foreach ($z as $kata => $banyakKata) {
            $this->db->where('term', "$kata");
            $query = $this->db->get('index');
            foreach ($query->result_array() as $row) {
                echo $kata . " " . $row['idf'] . " " . $banyakKata . "<br>";
            }
        }
    }
}
