<?php defined('BASEPATH') or exit('No direct script access allowed');
class Test extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('control/Control_model');
    }

    function index()
    {
        $data['stopwords'] =  $this->Control_model->getAllStopwords();
        $this->load->view('test_view', $data);
    }
}
