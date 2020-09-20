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
        $this->db->insert('sample', $data);
        $wordMark = '/[{}()""!,.:?]/';
        $toLowerAbstrak = strtolower($abstrak);
        $wordMark = '/[{}()""!,.:?]/';
        $clean = preg_replace($wordMark, "", $toLowerAbstrak);
        $explode = array_unique(explode(" ", $clean));
        foreach ($explode as $kata) {
            $data = array(
                'kata_kata' => $kata,
                'no_doc' => $no_reg,
            );
            $this->db->insert('pecah_kata', $data);
        }
        $ada = 1;
        $tidak = 0;
        $this->db->select('abstrak');
        $sample = $this->db->get('sample');
        foreach ($sample->result_array() as $row) {
            $per_abstrak = strtolower(preg_replace($wordMark, "", $row['abstrak']));
            echo $per_abstrak  . "<br>";
            $this->db->select('kata_kata');
            $query = $this->db->get('pecah_kata')->result_array();
            foreach ($query as $row) {
                $seluruh_data = $row['kata_kata'];
                if ($seluruh_data != "") {
                    if (strpos($per_abstrak, $seluruh_data) !== FALSE) {
                        echo "Kata " . $seluruh_data . " = " . $ada . "<br>";
                        $m[] = $seluruh_data . $ada;
                    } else {
                        echo "Kata " . $seluruh_data . " = " . $tidak . "<br>";
                        $n[] = $seluruh_data . $tidak;
                    }
                }
            }
        }
        $p = array_merge($m, $n);
        $q = array_count_values($p);


        $banyakDokumen = $sample->num_rows();
        foreach ($q as $key => $value) {
            $belakang = substr($key, -1);
            if ($belakang == 1) {
                // $akar = substr($key, 0, -1);
                echo "Banyak dokumen yang mengandung kata " . substr($key, 0, -1) . " =" . round(sqrt($value))   . "<br>";
                $this->db->set('total_dokumen', round(sqrt($value)));
                $this->db->where('kata_kata', substr($key, 0, -1));
                $this->db->update('pecah_kata');
            }
        }
        // echo "<b>SELURUH KATA</b><br>";
    }

    // function for search by title
    function searchtitle($keyword)
    {
        $toLowerKeyword = strtolower($keyword);
        $wordMark = '/[{}()""!,.:?]/';
        $stopWords = ['adalah', 'oleh', 'pada', 'ini', 'dan', 'yang', 'sebagai', 'sebuah', 'yaitu', 'untuk', 'selain', 'adalah', 'itu', 'dengan', 'ada', 'tentang', 'bagi', 'dalam',  'judul_skripsi', 'abstrak'];

        $num_doc = 1;

        $this->db->select('judul_skripsi, abstrak');
        $this->db->from('sample');
        $res = $this->db->get();

        foreach ($res->result_array() as $row) {
            echo "<b>Dokumen  " . $num_doc++ . "</b><br>";
            echo "<b>DOKUMEN ASLI</b><br>";
            $judulskripsi = $row['judul_skripsi'];
            $abstrakskripsi = $row['abstrak'];
            echo $judulskripsi . "<br>";
            echo $abstrakskripsi . "<br><br>";
            echo "<b>BERSIH</b><br>";
            $judulKecil = strtolower($judulskripsi);
            $abstrakKecil = strtolower($abstrakskripsi);
            $judulRemove = preg_replace($wordMark, "", $judulKecil);
            $abstrakRemove = preg_replace($wordMark, "", $abstrakKecil);
            $abstrakRemove2 = str_replace($stopWords, "", $abstrakRemove);
            $unikAbstrak = array_unique(explode(" ", $abstrakRemove2));
            $ada = 1;
            $tidak = 0;
            foreach ($unikAbstrak as $kata) {
                echo $kata . " ";
            }
            echo "<br><br>";
            echo "<b>Pecahan Kata</b><br>";
            // KUMPULAN SELURUH KATA-KATA
            $this->db->select('kata_kata');
            $kata = $this->db->get('pecah_kata');
            foreach ($kata->result_array() as $row) {
                echo $row['kata_kata'] . "<br>";
            }
        }
    }


    // end function for search by title
    // end function for skripsi

    function checknim($nim)
    {
        $this->db->where('nim', $nim);
        $query = $this->db->get('mahasiswa');

        $this->db->where('mahasiswa', $nim);
        $dataExists = $this->db->get('sample');

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
