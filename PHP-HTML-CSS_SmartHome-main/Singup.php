<?php
include("php/headlogin.php");
include("php/kayit.php");
$sayfa = "Kayıt Ol";
$success_message = "";
$redirect_url = "login.php";
?>

<body>
    <div class="main">
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/signinmage.jpg" alt="sing up image"></figure>
                        <a href="login.php" class="signup-image-link">Zaten Üyeliğim Var</a>
                    </div>

                    <div class="signin-form">
                        <h1>Üye Kayıt</h1>
                        <?php
                        if (isset($_POST['kaydet'])) {
                            if (empty($username_err) && empty($email_err) && empty($parola_err) && empty($parolatkr_err)) {
                                $success_message = "Kayıt işleminiz başarıyla gerçekleşti.";
                                header("Location: $redirect_url");
                                exit();
                            } else {
                                echo '<div class="alert alert-danger">';
                                if (!empty($username_err)) {
                                    echo $username_err . '<br>';
                                }
                                if (!empty($email_err)) {
                                    echo $email_err . '<br>';
                                }
                                if (!empty($parola_err)) {
                                    echo $parola_err . '<br>';
                                }
                                if (!empty($parolatkr_err)) {
                                    echo $parolatkr_err . '<br>';
                                }
                                echo '</div>';
                            }
                        }
                        ?>
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                            <div class="mb-3">
                                Kullanıcı Adı
                                <input type="text" class="form-control <?php if (!empty($username_err)) {echo "is-invalid";} ?>" id="exampleInputEmail1" name="kullaniciadi">
                            </div>

                            <div class="mb-3">
                                Email adresi
                                <input type="email" class="form-control <?php if (!empty($email_err)) {echo "is-invalid";} ?>" id="exampleInputEmail1" name="email">
                            </div>

                            <div class="mb-3">
                                Parola
                                <input type="password" class="form-control <?php if (!empty($parola_err)) {echo "is-invalid";} ?>" id="exampleInputPassword1" name="parola">
                            </div>

                            <div class="mb-3">
                                Parola Tekrar
                                <input type="password" class="form-control <?php if (!empty($parolatkr_err)) {echo "is-invalid";} ?>" id="exampleInputPassword1" name="parolatkr">
                            </div>

                            <button type="submit" name="kaydet" class="btn btn-primary">KAYIT OL</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <?php
    include("php/footlogin.php");
    ?>
