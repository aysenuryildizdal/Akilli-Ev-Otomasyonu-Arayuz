<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/slider-bg.jpg" type="">

  <title> Smarthome </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>

<body class="sub_page">
  <div class="hero_area">
    <div class="hero_bg_box">
      <div class="bg_img_box">

        <img src="images/slider2.jpg" alt="">
      </div>
    </div>
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.php">
            <span>
              <img src="images/log2o.png" width="90px" alt="">
              SİZİN EVİNİZ
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
              <li class="nav-item <?php if ($sayfa == "Ana Sayfa")
                echo "active" ?>">
                  <a class="nav-link" href="girindex.php">Ana Sayfa <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item <?php if ($sayfa == "kontrol")
                echo "active" ?>">
                  <a class="nav-link " href="./kontrol.php">EV KONTROL
                    <?php
              session_start();
              if (isset($_SESSION["kullanici_adi"])) {
                ?>
                <li class="dropdown" style="display: flex; align-items: center;">
                  <a class="nav-item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"
                    style="display: flex; align-items: center; font-size: 1.1rem; color: white; transition: color 0.3s;">
                    <i class="fa fa-user fa-lg" style="margin-right: 0.3rem;"></i> <span style="font-weight: bold;">
                      Hoşgeldin, <?php echo $_SESSION["kullanici_adi"]; ?></span> <i class="fa fa-caret-down"
                      style="margin-left: 0.3rem;"></i>
                  </a>
                  <ul class="dropdown-menu settings-menu dropdown-menu-right" style="font-size: 0.9rem;">
                    <li><a class="dropdown-item" href="./login.php"
                        style="display: flex; align-items: center; transition: color 0.3s; color: #333;">
                        <i class="fa fa-sign-out fa-lg" style="margin-right: 0.3rem;"></i> Çıkış</a>
                    </li>
                  </ul>
                </li>
                <?php
              }
              ?>

              <style>
                .nav-item:hover,
                .dropdown-item:hover {
                  color: #007bff !important;
                }
              </style>


              </form>

            </ul>
          </div>
        </nav>

      </div>
    </header>