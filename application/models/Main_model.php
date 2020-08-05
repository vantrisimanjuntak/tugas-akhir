<?php class Main_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    //function for dosen 
    function addlecture()
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


    // end function for dosen

    // function for skripsi
    function submitSkripsi()
    {
        $no_reg = $this->input->post('no_reg');
        $nim = $this->input->post('nim');
        $judulskripsi = $this->input->post('judulskripsi');
        $abstrak = $this->input->post('abstrak');
        $dp1 = $this->input->post('dp1');
        $dp2 = $this->input->post('dp2');

        $data = array(
            'no_reg' => $no_reg,
            'mahasiswa' => $nim,
            'judul_skripsi' => $judulskripsi,
            'abstrak' => $abstrak,
            'dp_satu' => $dp1,
            'dp_dua' => $dp2,
        );
        $this->db->insert('tugas_akhir', $data);
    }

    // function for search by title
    function searchtitle($keyword)
    {
        // cahnge keyword to lowercase
        $kecilKeyword = strtolower($keyword);

        // get data from DB

        $this->db->select('judul_skripsi, abstrak');
        $this->db->from('tugas_akhir');
        $res =  $this->db->get();
        foreach ($res->result_array() as $row) {
            echo '<b>' . $row["judul_skripsi"] . '</b>';
            echo "<br>";
            echo $row['abstrak'];
            echo "<br><br>";
            $abstrak  = $row['abstrak'];
            $kecilAbstrak = strtolower($abstrak);
            $total = substr_count($kecilAbstrak, $kecilKeyword);
            echo "Banyaknya kata $keyword dalam abstrak adalah :$total ";
            echo "<br><br><br>";
        }


        // $kecilKeyword = strtolower($keyword);
        // $text = "HARI INI kita Akan BELAJAR Apa yAng KeMARIN KITA peLajaRI";
        // // $lowerText = strtolower($text);
        // echo "<br>";
        // echo  $text;
        // $totalKeyword =  substr_count($text, $ke);
        // echo "<br>";
        // echo $totalKeyword;


        // $text = "Perkembangan jaringan Internet yang dipunggawai oleh perangkat CisCo dan jaringan Mikrotik";
        // $wordsText = explode(" ", $text);
        // $wordsKeyword = explode(" ", $keyword);

        // echo substr_count($text, $keyword);


        // $search_word = $keyword;
        // $count = "0";
        // for ($x = "0"; $x < strlen($text); $x++) {
        //     if (substr($text, $x, 1) == $search_word) {
        //         $count = $count + 1;
        //     }
        // }
        // echo $count . "\n";

        // $kata = array("HALO", "SEMUA", "Cisco", "dan", "Cisco");
        // // $arr1 = explode(" ", $keyword);
        // // $arr2 = explode(" ", $kata);

        // if (in_array($keyword, $kata)) {
        //     echo "ADA";
        // } else {
        //     echo "TIDAK ADA";
        // }
    }
    // end function for skripsi

    function checknim($nim)
    {
        $this->db->where('nim', $nim);
        $query = $this->db->get('mahasiswa');

        $this->db->where('mahasiswa', $nim);
        $dataExists = $this->db->get('tugas_akhir');

        if ($query->num_rows() > 0 && $dataExists->num_rows() == null) {
            echo '<i class="fa fa-check" aria-hidden="true" style="color:yellow"></i>';
            echo '<script>
                $("#judulskripsi, #abstrak, #dp1, #dp2, #btnSubmit").removeAttr("disabled", true);
                    </script>';
        } else if ($query->num_rows() > 0 && $dataExists->num_rows() > 0) {
            echo "SKRIPSI SUDAH DIINPUT";
        } else {
            echo '<i class="fa fa-times" aria-hidden="true">&nbsp;NIM TIDAK ADA</i>';
            echo '<script>
                $("#judulskripsi, #abstrak, #dp1, #dp2, #btnSubmit").prop("disabled", true);
                    </script>';
        }
    }
}
