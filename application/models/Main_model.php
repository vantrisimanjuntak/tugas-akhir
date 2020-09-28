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

        $this->db->select('kata_kata');
        $query = $this->db->get('pecah_kata')->result_array();

        $wordMark = '/[{}()""!,.:?]/';
        $toLowerAbstrak = strtolower($abstrak);
        $clean = preg_replace($wordMark, "", $toLowerAbstrak);
        $explode = array_unique(explode(" ", $clean));

        // Banyak data
        $t = $this->db->get('sample');
        $banyakData =  $t->num_rows();
        // D/df

        foreach ($explode as $wordsAbstrak) {

            if ($wordsAbstrak != "") {
                $this->db->where('kata_kata', $wordsAbstrak);
                $query = $this->db->get('pecah_kata');
                // UPDATE TOTAL_DOKUMEN
                if ($query->num_rows() > 0) {
                    foreach ($query->result_array() as $row) {
                        $id = $row['id'];
                        $katakata = $row['kata_kata'];
                        $totalDokumen = $row['total_dokumen'];
                    }
                    $totalDokumen++;

                    $this->db->set('total_dokumen', $totalDokumen);
                    $this->db->where('kata_kata', $katakata);
                    $this->db->update('pecah_kata');
                } else {
                    $IdfBaru = log10($banyakData / 1);
                    $data = array(
                        'kata_kata' => $wordsAbstrak,
                        'no_doc' => $no_reg,
                        'total_dokumen' => 1,
                        'idf' => $IdfBaru,

                    );
                    $this->db->insert('pecah_kata', $data);
                }
            }
        }
        // UPDATE IDF
        $u = $this->db->get('pecah_kata')->result_array();
        foreach ($u as $row) {
            $idf = log10($banyakData / $row['total_dokumen']);
            $this->db->set('idf', $idf);
            $this->db->where('kata_kata', $row['kata_kata']);
            $this->db->update('pecah_kata');
        }




        // $wordMark = '/[{}()""!,.:?]/';
        // $toLowerAbstrak = strtolower($abstrak);
        // $clean = preg_replace($wordMark, "", $toLowerAbstrak);
        // $explode = array_unique(explode(" ", $clean));
        // foreach ($explode as $kata) {
        //     $this->db->select('kata_kata');
        //     $query = $this->db->get('pecah_kata');
        //     foreach ($query->result_array() as $row) {
        //         if ($kata == $row['kata_kata']) {
        //             echo $kata . " sama" . "<br>";
        //         } else {
        //             echo $kata . " beda" . "<br>";
        //         }
        //     }
        //     // if ($kata != "") {
        //     //     $data = array(
        //     //         'kata_kata' => $kata,
        //     //         'no_doc' => $no_reg,
        //     //     );
        //     //     // $this->db->insert('pecah_kata', $data);
        //     // }
        // }



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
            $this->db->select('kata_kata ,idf');
            $query = $this->db->get('pecah_kata');
            foreach ($query->result_array() as $row) {
                if (strpos($abstrakRemove2, $row['kata_kata']) !== FALSE) {
                    echo $row['kata_kata'] . " " . $row['idf'] . "<br>";
                    $a[] = $row['idf'];
                } else {
                    echo $row['kata_kata'] . " " . $tidak . "<br>";
                    $b[] = $row['idf'];
                }
            }
            $gabung = array_merge($a, $b);
            echo array_sum($gabung);
            echo "<br><br>";
            foreach ($query->result_array() as $r) {
                if (strpos($toLowerKeyword, $r['kata_kata']) !== FALSE) {
                    echo $r['kata_kata'] . " " . $r['idf'] . "<br>";
                    $p[] = $r['idf'];
                }
            }

            echo array_sum($p);
            echo "<br><br>";
            // $explodeKeyword = explode(" ", $toLowerKeyword);
            // print_r($explodeKeyword);
            // echo  "<br><br>";
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
