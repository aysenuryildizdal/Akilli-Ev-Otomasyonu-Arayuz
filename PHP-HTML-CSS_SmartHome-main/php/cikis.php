<?php

session_start();

$_SESSION = array();  //SESSİON İÇİNİ BOŞALTTIK var olan verileri sessiondan temizledik
session_destroy();
header("location:login.php");    //bizi giriş sayfasına yönlendirdi


?>