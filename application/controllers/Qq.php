<?php class Qq extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    function index()
    {
        $m = "Halo Semua Semua 2 2 2 2";
        $n = explode(" ", $m);

        $z = array_count_values($n);
        foreach ($z as $q => $a) {
            echo $q . " " . $a . "<br>";
        }
    }
}
