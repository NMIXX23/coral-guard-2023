<?php
include('../terumbu.php');

$terumbu = new Terumbu();
error_reporting(0);
$data_koordinat = $terumbu->get_maps();
echo $data_koordinat;
?>