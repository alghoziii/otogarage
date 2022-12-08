<?php
$config = mysqli_connect("localhost","root","","otogarage_2209");
if (!$config){
    die ('Gagal terhubung ke MySQLi: '.mysqli_connect_error());
}
    //koneksi database
$server = "localhost";
$user = "root";
$password = "";
$database = "otogarage_2209";


    //buat koneksi

$koneksi = mysqli_connect($server, $user, $password, $database) or die(mysqli_error($koneksi));
?>