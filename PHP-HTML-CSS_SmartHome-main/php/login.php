<?php
include("baglanti.php");

$username_err = "";
$parola_err = "";


if (isset($_POST["giris"])) {

    // Kullanıcı adı doğrulama
    if (empty($_POST["kullaniciadi"])) {
        $username_err = "Kullanıcı adı boş geçilemez.";
    }else {
        $username = $_POST["kullaniciadi"];
    }



    // Parola doğrulama kısmı
    if (empty($_POST["parola"])) {
        $parola_err = "Parola boş geçilemez.";
    } else {
        $parola = $_POST["parola"];
    }

   

    if (isset($username) && isset($parola)) {

        $secim = "SELECT * FROM kullanicilar  WHERE kullanici_adi = '$username' ";
        $calistir = mysqli_query($baglanti,$secim);
        $kayitsayisi = mysqli_num_rows($calistir); // ya sıfır ya bir 1-0

        if($kayitsayisi>0){
            $ilgilikayit = mysqli_fetch_assoc($calistir);
            $hashlisifre = $ilgilikayit["parola"];

            if(password_verify($parola, $hashlisifre)) {
                session_start();
                $_SESSION["kullanici_adi"] = $ilgilikayit["kullanici_adi"];
                $_SESSION["email"] = $ilgilikayit["email"];
                header("location: girindex.php");

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


