<?php
include("php/vt.php");

if (isset($_GET['id'])) {
    $tablo = $_GET['tablo'];
    $id = $_GET['id'];
    $sorgu = $baglanti->prepare("DELETE FROM kullanicilar WHERE id=:id");
    $sonuc = $sorgu->execute(["id" => $id]);   
    if ($sonuc) {
        header("location:adminkullanıcı.php");
        die();
    }
}
?>
