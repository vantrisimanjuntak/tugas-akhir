<?php class Control extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('control/Control_model');
    }


    function login()
    {
        $data['title'] = 'Login';
        $this->load->view('control/login_control_view', $data);
    }
    function checklogin()
    {
        $username = $this->input->post('username');
        $password = sha1($this->input->post('password'));
        date_default_timezone_set('Asia/Jakarta');
        $timelogin = date('Y-m-d H:i:s');


        if ($username == NULL || $password == NULL) {
            echo "<script>
            alert('USERNAME ATAU PASSWORD KOSONG');
            window.location.href = '/tugas-akhir/control/login';
            </script>";
        } else {
            $query = $this->Control_model->login($username, $password, $timelogin);
            if ($query) {
                redirect('control');
            } else {
                $this->session->set_flashdata(
                    'failed',
                    '<i class="fa fa-info-circle" aria-hidden="true" style="color: white;"></i>&nbsp<b>Username </b>dan <b>Password</b> salah'
                );
                $this->load->view('control/login_control_view');
            }
        }
    }
    function logout()
    {
        $this->session->sess_destroy();
        redirect('control/login');
    }
    function index()
    {
        if ($this->session->userdata('username')) {
            $data['title'] = 'Control | Portal Tugas Akhir';
            $data['allImbuhan'] = $this->Control_model->getAllImbuhan();
            $data['stopwords'] = $this->Control_model->getAllStopwords();
            $data['session_access_user'] = $this->session->userdata('alias');
            $data['countSkripsi'] = $this->db->count_all_results('tugas_akhir');
            $data['countDosen'] = $this->db->count_all_results('dosen');
            $this->load->view('control/index', $data);
        } else {
            echo "<script>
            alert('SILAHKAN LOGIN TERLEBIH DAHULU');
            window.location.href = '/tugas-akhir/control/login';
            </script>";
        }
    }
    // For Lecture
    function lecture()
    {
        if ($this->session->userdata('username')) {
            $data['title'] = 'Control | Portal Tugas Akhir';
            $data['dosen'] = $this->Control_model->getAllDosen();
            $data['prodi'] = $this->Control_model->getAllProdi();
            $data['session_access_user'] = $this->session->userdata('alias');
            $this->load->view('control/dosen', $data);
        }
    }
    function checknip()
    {
        $nip = $this->input->post('nip');
        if ($nip != '') {
            $this->Control_model->checknip($nip);
        } else {
            echo "NIP KOSONG";
        }
    }
    function addLecture()
    {
        $nip = $this->input->post('nip');
        $nama = $this->input->post('nama');
        $prodi = $this->input->post('program_studi');
        $pendidikan_terakhir = $this->input->post('pendidikan_terakhir');
        $this->Control_model->addLecture($nip, $nama, $prodi, $pendidikan_terakhir);
        redirect('control/lecture');
    }


    // For Skripsi
    function skripsi()
    {
        if ($this->session->userdata('username')) {
            $data['title'] = 'Control | Portal Tugas Akhir';
            $data['allSkripsi'] = $this->Control_model->getAllSkripsi();
            $data['allDosen'] = $this->Control_model->getAllDosen();
            $data['session_access_user'] = $this->session->userdata('alias');
            $this->load->view('control/skripsi', $data);
        } else {
            echo "<script>
            alert('SILAHKAN LOGIN TERLEBIH DAHULU');
            window.location.href = '/tugas-akhir/control/login';
            </script>";
        }
    }
    function submitSkripsi()
    {
        $no_reg = $this->input->post('no_reg');
        $nim = $this->input->post('nim');
        $judulskripsi = $this->input->post('judul_skripsi');
        $abstrak = $this->input->post('abstrak');
        $dp1 = $this->input->post('dp_satu');
        $dp2 = $this->input->post('dp_dua');

        $abstrakLowerCase = strtolower($abstrak);
        $wordMark = '/[{}()""!,.:?]/';
        $removeAbstrakfromWordmark = preg_replace($wordMark, "", $abstrakLowerCase);

        $queryGetStopwords = $this->Control_model->getAllStopwords();
        foreach ($queryGetStopwords->result_array() as $row) {
            $arrayStopwords[] = '/\b' . $row['stopwords'] . '\b/';
        }
        $clearAbstrak = preg_replace($arrayStopwords, array(''), $removeAbstrakfromWordmark);


        $this->Control_model->submitSkripsi($no_reg, $nim, $judulskripsi, $abstrak, $dp1, $dp2, $clearAbstrak);

        redirect('control/skripsi');
    }
    function checknim()
    {
        $nim = $this->input->post('nim');
        if ($nim != '') {
            $this->Control_model->checknim($nim);
        } else {
            echo "NIM KOSONG";
        }
    }

    //For Mahasiswa 
    function mahasiswa()
    {
        if ($this->session->userdata('username')) {
            $data['title'] = 'Control | Portal Tugas Akhir';
            $data['allMahasiswa'] = $this->Control_model->getAllMahasiswa();
            $data['prodi'] = $this->Control_model->getAllProdi();
            $data['session_access_user'] = $this->session->userdata('alias');
            $this->load->view('control/mahasiswa', $data);
        }
    }
    function checkNIMBeforeAdd()
    {
        $nim = $this->input->post('nim');
        if ($nim != '') {
            $this->Control_model->checkNIMBeforeAdd($nim);
        } else {
            echo "NIM KOSONG";
        }
    }
    function addMahasiswa()
    {
    }




    // For Imbuhan
    function imbuhan()
    {
        if ($this->session->userdata('username')) {
            $data['title'] = 'Control | Portal Tugas Akhir';
            $data['allImbuhan'] = $this->Control_model->getAllImbuhan();
            $data['session_access_user'] = $this->session->userdata('alias');
            $this->load->view('control/imbuhan', $data);
        }
    }


    function addImbuhan()
    {
        if ($this->session->userdata('username')) {
            $kata_imbuhan = strtolower($this->input->post('kata_imbuhan'));
            $kata_dasar = strtolower($this->input->post('kata_dasar'));

            if ($kata_dasar == NULL && $kata_imbuhan == NULL) {
                echo "<script>
                alert('FORM ADA YANG KOSONG');
                window.location.href = '/tugas-akhir/control/imbuhan';
                </script>";
            } else {
                $input = $this->Control_model->addImbuhan($kata_imbuhan, $kata_dasar);
                if ($input) {

                    echo "<script> 
                    alert('Data Berhasil Diinput');
                    window.location.href='/tugas-akhir/control/imbuhan';
                    </script>";
                } else {
                    echo "<script> 
                    alert('Data Sudah Ada');
                    window.location.href='/tugas-akhir/control/imbuhan';
                    </script>";
                }
            }
        } else {
            echo "<script>
            alert('SILAHKAN LOGIN TERLEBIH DAHULU');
            window.location.href = '/tugas-akhir/control/login';
            </script>";
        }
    }
    function deleteImbuhan($id)
    {
        $execute = $this->Control_model->deleteImbuhan($id);
        if ($execute) {
            echo "<script> 
            alert('Berhasil Dihapus');
            window.location.href='/tugas-akhir/control/imguhan';
            </script>";
        } else {
            echo "<script> 
            alert('DATA TIDAK ADA');
            window.location.href='/tugas-akhir/control/imbuhan';
            </script>";
        }
    }


    // For Stopwords

    function stopwords()
    {
        $data['title'] = 'Control | Portal Tugas Akhir';
        $data['allStopwords'] = $this->Control_model->getAllStopwords();
        $data['session_access_user'] = $this->session->userdata('alias');
        $this->load->view('control/stopwords', $data);
    }
    function addStopwords()
    {
        $stopwords = strtolower($this->input->post('stopwords'));

        if ($stopwords === " ") {
            echo "<script>
            alert('FORM ADA YANG KOSONG');
            window.location.href = '/tugas-akhir/control/stopwords';
            </script>";
        } else {
            $queryAdd = $this->Control_model->addStopwords($stopwords);
            if ($queryAdd) {
                echo "<script> 
                alert('Data Berhasil Diinput');
                window.location.href='/tugas-akhir/control/stopwords';
                </script>";
            } else {
                echo "<script> 
                alert('Data Sudah Ada');
                window.location.href='/tugas-akhir/control/stopwords';
                </script>";
            }
        }
    }
    function deleteStopwords($id)
    {
        $queryDelete =  $this->Control_model->deleteStopwords($id);
        if ($queryDelete) {
            echo "<script> 
            alert('Berhasil Dihapus');
            window.location.href='/tugas-akhir/control/stopwords';
            </script>";
        } else {
            echo "<script> 
            alert('DATA TIDAK ADA');
            window.location.href='/tugas-akhir/control/stopwords';
            </script>";
        }
    }
}
