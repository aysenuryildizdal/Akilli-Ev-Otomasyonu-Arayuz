<?php
$sayfa = "Giriş Yap";
include("php/headlogin.php");

// login.php içerisindeki işlevleri çağırın ve hata mesajlarını alın
include("php/login.php");
?>

<body>
    <script type="text/javascript" src="js/sweetalert2.all.min.js"></script>
    <div class="main">
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/slider-img.png" alt="sing up image"></figure>
                        <a href="Singup.php" class="signup-image-link">Hemen Üye Ol</a>
                    </div>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                        <h1>Giris Yap</h1>
                        <div class="mb-3">
                            Kullanıcı Adı
                            <label for="exampleInputEmail1" class="form-label"></label>
                            <input type="text" class="form-control <?php if (!empty($username_err)) {echo "is-invalid";} ?>" id="exampleInputEmail1" name="kullaniciadi">
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                <?php echo  $username_err; ?>
                            </div>
                        </div>

                        <div class="mb-3">
                            Parola
                            <label for="exampleInputPassword1" class="form-label"></label>
                            <input type="password" class="form-control <?php if (!empty($parola_err)) {echo "is-invalid";} ?>" id="exampleInputPassword1" name="parola">
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                <?php echo $parola_err; ?>
                            </div>
                        </div>
                        <button type="submit" name="giris" class="btn btn-primary">Giris</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
    <?php
    include("php/footlogin.php")
    ?>
</body>
