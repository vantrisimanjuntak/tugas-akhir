<?php class Control_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    function login($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $queryLogin = $this->db->get('superuser');
        if ($queryLogin->num_rows() > 0) {
            foreach ($queryLogin->result_array() as $row) {
                $sess = array(
                    'username' => $row['username'],
                    'password' => $row['password'],
                    'alias' => $row['alias']
                );
                $this->session->set_userdata($sess);
            }
            return TRUE;
        } else {
            return FALSE;
        }
    }

    // For Dosen
    function getAllDosen()
    {
        $this->db->select('*');
        $this->db->from('dosen');
        $this->db->join('program_studi', 'program_studi.kd_program_studi = dosen.program_studi');
        $query = $this->db->get();
        return $query->result_array();
    }
    function checknip($nip)
    {
        $this->db->select('nip');
        $this->db->from('dosen');
        $this->db->where('nip', $nip);
        $queryCheckNIP = $this->db->get();

        if ($queryCheckNIP->num_rows() > 0) {
            echo "DATA SUDAH DIINPUT";
            echo
                '<script>
                $("#nama, #program_studi, #pendidikan_terakhir, #foto, #tambah").prop("disabled", true);
                </script>';
        } else {
            echo '<i class="fa fa-check" aria-hidden="true" style="color:yellow"></i>';
            echo
                '<script>$("#nama, #program_studi, #pendidikan_terakhir, #foto, #tambah").prop("disabled", false);</script>';
        }
    }
    function addLecture($nip, $nama, $prodi, $pendidikan_terakhir)
    {
        $data = array(
            'nip' => $nip,
            'nama' => $nama,
            'program_studi' => $prodi,
            'pendidikan_terakhir' => $pendidikan_terakhir,
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
    function deleteDosen()
    {
    }
    function getAllProdi()
    {
        return $this->db->get('program_studi')->result_array();
    }

    // For Skripsi
    function getAllSkripsi()
    {
        return $this->db->get('sample')->result_array();
    }

    // For Imbuhan
    function getAllImbuhan()
    {
        $queryGetAllImbuhan = $this->db->get('kata_imbuhan')->result_array();
        return $queryGetAllImbuhan;
    }

    function addImbuhan($kata_imbuhan, $kata_dasar)
    {
        $this->db->select('kata_imbuhan, kata_dasar');
        $this->db->from('kata_imbuhan');
        $this->db->where('kata_imbuhan', $kata_imbuhan);
        $this->db->where('kata_dasar', $kata_dasar);
        $queryImbuhan = $this->db->get();

        if ($queryImbuhan->num_rows() > 0) {
            return FALSE;
        } else {
            $data = array(
                'id' => bin2hex(random_bytes(2)),
                'kata_imbuhan' => $kata_imbuhan,
                'kata_dasar' => $kata_dasar
            );
            $this->db->insert('kata_imbuhan', $data);
            return TRUE;
        }
    }
    function deleteImbuhan($id)
    {
        $this->db->where('id', $id);
        $queryGetImbuhan = $this->db->get('kata_imbuhan');
        if ($queryGetImbuhan->num_rows() > 0) {
            $this->db->where('id', $id);
            $this->db->delete('kata_imbuhan');
            return TRUE;
        } else {
            return FALSE;
        }
    }

    // For Stopwords
    function getAllStopwords()
    {
        $queryGetAllStopwords = $this->db->get('stopwords')->result_array();
        return $queryGetAllStopwords;
    }
    function addStopwords($stopwords)
    {
        $this->db->where('stopwords', $stopwords);
        $query = $this->db->get('stopwords');

        if ($query->num_rows() > 0) {
            return FALSE;
        } else {
            $data = array('stopwords' => $stopwords);
            $this->db->insert('stopwords', $data);
            return TRUE;
        }
    }
    function deleteStopwords($id)
    {
        $this->db->where('id', $id);
        $queryGetStopwords = $this->db->get('stopwords');
        if ($queryGetStopwords->num_rows() > 0) {
            $this->db->where('id', $id);
            $this->db->delete('stopwords');
            return TRUE;
        } else {
            return FALSE;
        }
    }
}
