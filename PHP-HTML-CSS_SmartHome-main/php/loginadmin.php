<?php
include("baglanti.php");

$username_err = "";
$parola_err = "";


if (isset($_POST["giris"])) {

    // Kullanıcı adı doğrulama
    if (empty($_POST["ad"])) {
        $username_err = "Kullanıcı adı boş geçilemez.";
    }else {
        $username = $_POST["ad"];
    }



    // Parola doğrulama kısmı
    if (empty($_POST["sıfre"])) {
        $parola_err = "Parola boş geçilemez.";
    } else {
        $parola = $_POST["sıfre"];
    }

   

    if (isset($username) && isset($parola)) {

        $secim = "SELECT * FROM kuladmin  WHERE ad = '$username' ";
        $calistir = mysqli_query($baglanti,$secim);
        $kayitsayisi = mysqli_num_rows($calistir); // ya sıfır ya bir 1-0

        if($kayitsayisi>0){
            $ilgilikayit = mysqli_fetch_assoc($calistir);
            $hashlisifre = $ilgilikayit["sıfre"];

            if(password_verify($parola, $hashlisifre)) {
                session_start();
                $_SESSION["ad"] = $ilgilikayit["ad"];
                $_SESSION["maıl"] = $ilgilikayit["maıl"];
                header("location:./admin.php");

            }else{
                echo '<div class="alert alert-danger" role="alert">
            Parola Yanlış!
            </div>';
            }


        }else{
            echo '<div class="alert alert-danger" role="alert">
            Kullanıcı Adı Yanlış!
            </div>';
        }


    

        mysqli_close($baglanti);
    }
}
?>


