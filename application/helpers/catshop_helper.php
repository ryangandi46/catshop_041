<?php
defined('BASEPATH') or exit('No direct script access allowed'); 

function tgl($d){
    return date('l, d F Y', strtotime($d));
}

/* function grade($nilai){
    if($nilai >= 80) $grade="A";
    else


    return $grade;
}*/

?>