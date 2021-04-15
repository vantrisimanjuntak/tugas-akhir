<?php class Control extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('control/Control_model');
    }


    // For Auth
    function login()
    {
        $data['title'] = 'Login';
        $this->load->view('control/login_control_view', $data);
    }
    function checklogin()
    {
        $data['title'] = 'Login';
        $username = sha1($this->input->post('username'));
        $password = sha1($this->input->post('password'));
        $ip_address =  $_SERVER['REMOTE_ADDR'];
        date_default_timezone_set('Asia/Jakarta');
        $timelogin = date('Y-m-d H:i:s');


        if ($username == NULL || $password == NULL) {
            echo "<script>
            alert('USERNAME ATAU PASSWORD KOSONG');
            window.location.href = '/searching/control/login';
            </script>";
        } else {
            $query = $this->Control_model->login($username, $password, $timelogin, $ip_address);
            if ($query) {
                redirect('control');
            } else {
                $this->session->set_flashdata(
                    'failed',
                    '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    Username dan Password salah!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>'
                );
                $this->load->view('control/login_control_view', $data);
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
            $data['stopwords'] = $this->Control_model->getAllStopword();
            $data['session_access_user'] = $this->session->userdata('alias');
            $data['countSkripsi'] = $this->db->count_all_results('tugas_akhir');
            $data['countDosen'] = $this->db->count_all_results('dosen');
            $data['countMhs'] = $this->db->count_all_results('mahasiswa');
            $data['countIdx'] = $this->db->count_all_results('index');
            // $data['details_skripsi_prodi'] = $this->Control_model->details_skripsi_prodi();
            $this->load->view('control/index', $data);
        } else {
            echo "<script>
            alert('SILAHKAN LOGIN TERLEBIH DAHULU');
            window.location.href = '/searching/control/login';
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
        } else {
            echo "<script>
            alert('SILAHKAN LOGIN TERLEBIH DAHULU');
            window.location.href = '/searching/control/login';
            </script>";
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
        $queryAddLecture = $this->Control_model->addLecture($nip, $nama, $prodi, $pendidikan_terakhir);
        if ($queryAddLecture == TRUE) {
            $this->session->set_flashdata('flash',  'ditambahkan');
            redirect('control/lecture');
        } else {
            echo "ERROR";
        }
    }
    function editLecture($nip)
    {

        $nama = $this->input->post('nama');
        $prodi = $this->input->post('program_studi');
        $pendidikan_terakhir = $this->input->post('pendidikan_terakhir');

        $queryUpdate = $this->Control_model->editLecture($nip, $nama, $prodi, $pendidikan_terakhir);
        if ($queryUpdate) {
            $this->session->set_flashdata('flash', 'diubah');
            redirect('control/lecture');
        } else {
            echo "<script>
            alert('ERROR');
            window.location.href = '/searching/control/lecture';
            </script>";
        }
    }
    function deleteLecture($nip)
    {

        $queryDelete = $this->Control_model->deleteLecture($nip);
        if ($queryDelete) {
            $this->session->set_flashdata('flash', 'dihapus');
            redirect('control/lecture');
        }
    }


    // For Skripsi
    function skripsi()
    {
        if ($this->session->userdata('username')) {
            $data['title'] = 'Control | Portal Tugas Akhir';
            $data['allSkripsi'] = $this->Control_model->getAllSkripsi();
            $data['allDosen'] = $this->Control_model->getAllDosen();
            $data['session_access_user'] = $this->session->userdata('alias');
            $data['program_studi'] = $this->Control_model->getAllProdi();
            $this->load->view('control/skripsi', $data);
        } else {
            echo "<script>
            alert('SILAHKAN LOGIN TERLEBIH DAHULU');
            window.location.href = '/searching/control/login';
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
        $program_studi = $this->input->post('program_studi');

        $abstrakLowerCase = strtolower($abstrak);
        $judulSkripsiLowerCase = strtolower($judulskripsi);
        $wordMark = '/[{}()""º°\'!,.;:?]/'; #PENAMBAHAN TITIK KOMA

        $removeAbstrakfromWordmark = preg_replace($wordMark, "", $abstrakLowerCase);
        $removeJudulSkripsifromWordmark = preg_replace($wordMark, "", $judulSkripsiLowerCase);

        $queryGetStopwords = $this->Control_model->getAllStopword();
        foreach ($queryGetStopwords->result_array() as $row) {
            $arrayStopwords[] = '/\b' . $row['stopword'] . '\b/';
        }
        $clearAbstrak = preg_replace($arrayStopwords, array(''), $removeAbstrakfromWordmark);
        $clearJudulSkripsi = preg_replace($arrayStopwords, array(''), $removeJudulSkripsifromWordmark);

        $mergeData =  $clearJudulSkripsi . " " . $clearAbstrak;
        // echo $mergeData;


        $querySubmitSkripsi =  $this->Control_model->submitSkripsi($no_reg, $nim, $judulskripsi, $abstrak, $dp1, $dp2, $mergeData, $program_studi);
        if ($querySubmitSkripsi) {
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('control/skripsi');
        } else {
            return FALSE;
        }
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
        if ($this->session->userdata('username')) {
            $nim = $this->input->post('nim');
            $nama = $this->input->post('nama');
            $program_studi = $this->input->post('program_studi');

            $queryAddMahasiswa = $this->Control_model->addMahasiswa($nim, $nama, $program_studi);
            if ($queryAddMahasiswa) {
                $this->session->set_flashdata('flash', 'ditambah');
                redirect('control/mahasiswa');
            } else {
                return FALSE;
            }
        }
    }
    function editMahasiswa($nim)
    {
        $nama = $this->input->post('nama');
        $program_studi = $this->input->post('program_studi');

        // echo $nama . " " . $program_studi;

        $queryEditMahasiswa = $this->Control_model->editMahasiswa($nama, $program_studi, $nim);
        if ($queryEditMahasiswa) {
            $this->session->set_flashdata('flash', 'diubah');
            redirect('control/mahasiswa');
        } else {
            return FALSE;
        }
    }
    function deleteMahasiswa($nim)
    {
        $queryDeleteMahasiswa = $this->Control_model->deleteMahasiswa($nim);
        if ($queryDeleteMahasiswa) {
            $this->session->set_flashdata('flash', 'dihapus');
            redirect('control/mahasiswa');
        }
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
                window.location.href = '/searching/control/imbuhan';
                </script>";
            } else {
                $input = $this->Control_model->addImbuhan($kata_imbuhan, $kata_dasar);
                if ($input) {

                    echo "<script> 
                    alert('Data Berhasil Diinput');
                    window.location.href='/searching/control/imbuhan';
                    </script>";
                } else {
                    echo "<script> 
                    alert('Data Sudah Ada');
                    window.location.href='/searching/control/imbuhan';
                    </script>";
                }
            }
        } else {
            echo "<script>
            alert('SILAHKAN LOGIN TERLEBIH DAHULU');
            window.location.href = '/searching/control/login';
            </script>";
        }
    }
    function deleteImbuhan($id)
    {
        $execute = $this->Control_model->deleteImbuhan($id);
        if ($execute) {
            echo "<script> 
            alert('Berhasil Dihapus');
            window.location.href='/searching/control/imguhan';
            </script>";
        } else {
            echo "<script> 
            alert('DATA TIDAK ADA');
            window.location.href='/searching/control/imbuhan';
            </script>";
        }
    }


    // For Stopwords

    function stopword()
    {
        $data['title'] = 'Control | Portal Tugas Akhir';
        $data['allStopword'] = $this->Control_model->getAllStopword();
        $data['session_access_user'] = $this->session->userdata('alias');
        $this->load->view('control/stopword', $data);
    }
    function addStopword()
    {
        $stopword = strtolower($this->input->post('stopword'));

        if ($stopword === " ") {
            echo "<script>
            alert('FORM ADA YANG KOSONG');
            window.location.href = '/searching/control/stopwords';
            </script>";
        } else {
            $queryAdd = $this->Control_model->addStopword($stopword);
            if ($queryAdd) {
                echo "<script> 
                alert('Data Berhasil Diinput');
                window.location.href='/searching/control/stopword';
                </script>";
            } else {
                echo "<script> 
                alert('Data Sudah Ada');
                window.location.href='/searching/control/stopword';
                </script>";
            }
        }
    }
    function deleteStopword($id)
    {
        $queryDelete =  $this->Control_model->deleteStopword($id);
        if ($queryDelete) {
            echo "<script> 
            alert('Berhasil Dihapus');
            window.location.href='/searching/control/stopword';
            </script>";
        } else {
            echo "<script> 
            alert('DATA TIDAK ADA');
            window.location.href='/searching/control/stopword';
            </script>";
        }
    }
}
