<?php
include("php/headlogin.php");
$sayfa = "Giriş Admin";
include("php/vt.php");
include("php/loginadmin.php");

// Butona basıldığında yönlendirme işlemi
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Kullanıcı adı ve parola doğrulaması yapılacak
    if (empty($username_err) && empty($parola_err)) {
        // Kullanıcı doğrulandıktan sonra yönlendirme yap
        header("Location: adminana.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Giriş Admin</title>
    <link rel="stylesheet" type="text/css" href="css/mainad.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <section class="material-half-bg">
        <div class="cover"></div>
    </section>
    <section class="login-content">
        <div class="logo">
            <h1>ControlPanel</h1>
        </div>
        <div class="login-box">
            <form class="login-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>Admin Giriş</h3>
                <div class="form-group">
                    Kullanıcı Adı
                    <label for="exampleInputEmail1" class="form-label"></label>
                    <input type="text" class="form-control <?php if (!empty($username_err)) {echo "is-invalid";} ?>" id="exampleInputEmail1" name="ad">
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        <?php echo $username_err; ?>
                    </div>
                    <div class="form-group">
                        Parola
                        <label for="exampleInputPassword1" class="form-label"></label>
                        <input type="password" class="form-control <?php if (!empty($parola_err)) {echo "is-invalid";} ?>" id="exampleInputPassword1" name="sıfre">
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            <?php echo $parola_err; ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="utility">
                            <div class="animated-checkbox">
                                <label>
                                    <input type="checkbox"><span class="label-text">Beni Hatırla</span>
                                </label>
                            </div>
                            <p class="semibold-text mb-2"><a href="#" data-toggle="flip">Şifreni mi Unuttun ?</a></p>
                        </div>
                    </div>
                    <div class="form-group btn-container">
                        <button type="submit" name="giris" class="btn btn-primary btn-block"><iclass="fa fa-sign-in fa-lg fa-fw"></i>Giriş</button>
                    </div>
            </form>
            <form class="forget-form" action="admin.php">
                <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Şifreni mi Unuttun ?</h3>
                <div class="form-group">
                    <label class="control-label">Mail</label>
                    <input class="form-control" type="text" placeholder="Email">
                </div>
                <div class="form-group btn-container">
                    <button class="btn btn-primary btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>RESET</button>
                </div>
                <div class="form-group mt-3">
                    <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Back to Login</a></p>
                </div>
            </form>
        </div>
        </div>
    </section>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/plugins/pace.min.js"></script>
    <script type="text/javascript">
        $('.login-content [data-toggle="flip"]').click(function() {
            $('.login-box').toggleClass('flipped');
            return false;
        });
    </script>
</body>

</html>
