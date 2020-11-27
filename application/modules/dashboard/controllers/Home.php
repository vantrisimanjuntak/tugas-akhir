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

        $keyword = $this->input->post('judul_skripsi');
        $toLowerKeyword = strtolower($keyword);
        $query = $this->Main_model->searchtitle($keyword, $toLowerKeyword);
        if ($query) {
            foreach ($query as $nipDosen => $skorDosen) {
                $queryDosen = $this->Main_model->getDosenByNIP($nipDosen);
                foreach ($queryDosen->result_array() as $data) {
                }
                $c[] = array(
                    'nip' => $data['nip'],
                    'nama' => $data['nama'],
                    'foto' => $data['foto'],
                    'program_studi' => $data['program_studi'],
                    'skor' => $skorDosen
                );
            }
            $data['hasil'] = $c;
            $this->load->view('dashboard/search_result_view', $data);
        } else {
            $this->load->view('dashboard/not_found_view');
        }
    }








    function view_result()
    {



        $data = array(
            'nama' => 'Gasskeun',
            'kelas' => 'TF',
            'umur' => 24
        );


        print_r($data);
        echo "<br><br>";

        echo $data['nama'];
        // $nip = 10209011;
        // $nip =  10301028;
        // $data['nip'] = $this->Main_model->getDosenByNIP($nip);
        // print_r($data);
        // $this->load->view('dashboard/search_result_view', $data);
    }
}
