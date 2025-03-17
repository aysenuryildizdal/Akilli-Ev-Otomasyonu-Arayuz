
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">

   
   
   
   
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
    </head>
    <!-- Sing in  Form -->
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
              <img src="images/log2o.png" width="90px"  alt="">
              Hadi Bize Katıl
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
              <li class="nav-item <?php if($sayfa=="Ana Sayfa")echo"active"?>">
                <a class="nav-link" href="index.php">Ana Sayfa <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item <?php if($sayfa=="nasılsaholur")echo"active"?>">
                <a class="nav-link " href="nasıl.php">Nasıl Sahip Olurum ?</a>
              <li class="nav-item <?php if($sayfa=="Giriş Yap")echo"active"?>">
                <a class="nav-link" href="login.php"> <i class="fa fa-user" aria-hidden="true"></i> Giriş Yap</a>
              </li>
              <li class="nav-item<?php if($sayfa=="Giriş Admin")echo"active"?>">
                <a class="nav-link" href="page-login.php"> <i class="fa fa-user" aria-hidden="true"></i> Admin Giriş</a>
              </li>
              </form>
              
            </ul>
          </div>
        </nav>
  
        </div>