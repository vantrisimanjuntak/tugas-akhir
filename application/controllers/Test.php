<?php
class Test extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        echo 'User IP Address - ' . $_SERVER['REMOTE_ADDR'];
    }
}
