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
