<?php
include ("baglanti.php");

$username_err = "";
$email_err = "";
$parola_err = "";
$parolatkr_err = "";

if (isset($_POST["kaydet"])) {
    // Kullanıcı adı doğrulama
    if (empty($_POST["kullaniciadi"])) {
        $username_err = "Kullanıcı adı boş geçilemez.";
    } else if (strlen($_POST["kullaniciadi"]) < 6) {
        $username_err = "Kullanıcı adı en az 6 karakterden oluşmalıdır.";
    } else if (!preg_match('/^[a-z\d_]{5,20}$/i', $_POST["kullaniciadi"])) {
        $username_err = "Kullanıcı adı büyük küçük harf ve rakamdan oluşmalıdır.";
    } else {
        $username = $_POST["kullaniciadi"];
    }

    // Email Doğrulama
    if (empty($_POST["email"])) {
        $email_err = "Email alanı boş geçilemez.";
    } else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $email_err = "Geçersiz email formatı";
    } else {
        $email = $_POST["email"];
    }

    // Parola doğrulama kısmı
    if (empty($_POST["parola"])) {
        $parola_err = "Parola boş geçilemez.";
    } else {
        $parola = password_hash($_POST["parola"], PASSWORD_DEFAULT);
    }

    // Parola Tekrar Doğrulaması
    if (empty($_POST["parolatkr"])) {
        $parolatkr_err = "Parola tekrar kısmı boş geçilemez";
    } else if ($_POST["parolatkr"] !== $_POST["parola"]) {
        $parolatkr_err = "Parolalar eşleşmiyor.";
    } else {
        $parolatkr = $_POST["parolatkr"];
    }

    if (isset($username) && isset($email) && isset($parola)) {
        $ekle = "INSERT INTO kullanicilar (kullanici_adi, email, parola) VALUES ('$username','$email','$parola')";
        $calistirekle = mysqli_query($baglanti, $ekle);

        if ($calistirekle) {
            echo '<div class="alert alert-success" role="alert">
            Kayıt Başarılı Bir Şekilde Eklendi!
            </div>';
        } else {
            echo '<div class="alert alert-danger" role="alert">
            Kayıt eklenirken bir problem oluştu!
            </div>';
        }

        mysqli_close($baglanti);
    }
}
?>