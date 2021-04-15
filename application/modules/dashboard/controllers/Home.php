<?php class Home extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Main_model');
    }
    function index()
    {
        $data['title'] = "Portal Tugas Akhir";
        $this->load->view('home_view', $data);
    }
    function searchtitle()
    {

        $banyakSkripsi = $this->Main_model->banyakData();

        $keyword = $this->input->post('judul_skripsi');
        $toLowerKeyword = strtolower($keyword);
        $query = $this->Main_model->searchtitle($keyword, $toLowerKeyword);
        if ($query) {
            foreach ($query as $arrayNipDosen => $skorDosen) {
                $queryDosen = $this->Main_model->getDosenByNIP($arrayNipDosen);
                foreach ($queryDosen->result_array() as $data) {
                    $nip = $data['nip'];
                }
                $c[] = array(
                    'nip' => "$nip",
                    'nama' => $data['nama'],
                    'foto' => $data['foto'],
                    'program_studi' => $data['program_studi'],
                    'skor' => $skorDosen,
                    'skorPersen' => ($skorDosen / $banyakSkripsi) * 100
                );

                // INSERT TO HASIL_PENCARIAN TABLE
                $data = array(
                    'id' => bin2hex(random_bytes(10)),
                    'keyword' => $toLowerKeyword,
                    'dosen' => $data['nip'],
                    'skor' => ($skorDosen / $banyakSkripsi) * 100,

                );
                $this->db->insert('hasil_pencarian', $data);
            }
            $data['hasil'] = $c;

            // $data['persen'] = ($c / $banyakSkripsi) * 100;
            $this->load->view('dashboard/search_result_view', $data);
        } else {
            $this->load->view('dashboard/not_found_view');
        }
    }
    function countData()
    {
        $banyakSkripsi = $this->Main_model->banyakData();
        echo $banyakSkripsi;
    }
}
