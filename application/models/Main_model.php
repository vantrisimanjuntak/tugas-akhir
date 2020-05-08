<?php class Main_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    function add_supervisor()
    {
        $data = array(
            'nip' => $this->input->post('nip'),
            'nama' => $this->input->post('nama'),
            'program_studi' => $this->input->post('program_studi'),
            'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
            'foto' => $this->_uploadImage(),
        );
        if ($data == TRUE) {
            $this->db->insert('dosen', $data);
            $this->session->set_flashdata('success-message', '<div class="alert alert-primary custom-alert" role="alert">
            Berhasil menambahkan dosen <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          </div>');
            redirect('supervisor');
        } else {
            $this->session->set_flashdata('failed-message', '<div class="alert alert-danger" role="alert">
            A simple danger alert—check it out!</div>');
            redirect('supervisor');
        }
    }
    private function _uploadImage()
    {
        $config['upload_path'] = './assets/images/dosen_profile/';
        $config['allowed_types'] = 'png|jpeg|jpg|gif';
        $config['max_size'] = '2048';
        $config['max_width'] = '0';
        $config['max_height'] = '0';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors());
        } else {
            return $this->upload->data('file_name');
        }
    }
    function allProdi()
    {
        return $this->db->get('program_studi')->result_array();
    }
    function allLecture()
    {
        return $this->db->get('dosen')->result_array();
    }
    function submit_skripsi()
    {
        $data = array(
            'no_reg' => $this->input->post('no_reg'),
            'mahasiswa' => $this->input->post('nim'),
            'judul_skripsi' => $this->input->post('judul_skripsi'),
            'abstrak' => $this->input->post('abstrak'),
            'dp_satu' => $this->input->post('dp_satu'),
            'dp_dua' => $this->input->post('dp_dua'),
        );
        $this->db->insert('tugas_akhir', $data);
    }
}
