<?php

$host= "localhost";
$kullanici="root";
$parola="";
$vt="smart_home";

$baglanti = mysqli_connect($host,$kullanici,$parola,$vt);

if (!$baglanti) {
    die("Bağlantı hatası: " . mysqli_connect_error());
}



?>