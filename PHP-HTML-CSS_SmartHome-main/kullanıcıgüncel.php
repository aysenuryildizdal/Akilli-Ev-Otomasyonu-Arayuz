<?php
// Veritabanı bağlantı dosyasını dahil et
include ("php/vt.php");

// Form gönderildiğinde işlem yap
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // SQL UPDATE ifadesini hazırla
  $updateQuery = "UPDATE kullanicilar SET kullanici_adi=:kullanici_adi, email=:email, parola=:parola, kayit_tarihi=:kayit_tarihi";

  // İfadeyi hazırla
  $statement = $baglanti->prepare($updateQuery);

  // Parametre değerlerini bağla
  $statement->bindParam(':kullanici_adi', $_POST['kullanici_adi']);
  $statement->bindParam(':email', $_POST['email']);
  $statement->bindParam(':parola', $_POST['parola']);
  $statement->bindParam(':kayit_tarihi', $_POST['kayit_tarihi']);

  // İfadenin çalıştır
  if ($statement->execute()) {
    echo "ID: 2 başarıyla güncellendi.";
    // Yönlendirme
    header("Location: nasılgüncelle.php");
    exit(); // Scriptin çalışmasını durdur
  } else {
    echo "Veri güncellenirken hata oluştu.";
  }
}
?>
<!DOCTYPE html>
<html lang="tr">

<head>
  <meta name="description"
    content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
  <!-- Twitter meta-->
  <meta property="twitter:card" content="">
  <meta property="twitter:site" content="">
  <meta property="twitter:creator" content="">
  <!-- Open Graph Meta-->
  <meta property="og:type" content="">
  <meta property="og:site_name" content="">
  <meta property="og:title" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">
  <meta property="og:description"
    content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
  <title></title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Main CSS-->
  <link rel="stylesheet" type="text/css" href="css/mainad.css">
  <!-- Font-icon css-->
  <link rel="stylesheet" type="text/css"
    href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="app sidebar-mini rtl">
  <!-- Navbar-->
  <header class="app-header"><a class="app-header__logo" href="adminana.php">Admin</a>
    <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"
      aria-label="Hide Sidebar"></a>
    <!-- Navbar Right Menu-->
    <ul class="app-nav">
      <li class="app-search">
        <input class="app-search__input" type="search" placeholder="Search">
        <button class="app-search__button"><i class="fa fa-search"></i></button>
      </li>
      <!-- User Menu-->
      <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i
            class="fa fa-user fa-lg"></i></a>
        <ul class="dropdown-menu settings-menu dropdown-menu-right">
          <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-cog fa-lg"></i> Ayarlar</a></li>
          <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-user fa-lg"></i> profile</a></li>
          <li><a class="dropdown-item" href="page-login.html"><i class="fa fa-sign-out fa-lg"></i> Çıkış</a></li>
        </ul>
      </li>
    </ul>
  </header>
  <!-- Sidebar menu-->
  <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
  <aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="" alt="">
      <div>
        <p class="app-sidebar__user-name">Admin</p>
        <p class="app-sidebar__user-designation">Hoşgeldin</p>
      </div>
    </div>
    <ul class="app-menu">
      <li><a class="app-menu__item active" href="adminana.php"><i class="app-menu__icon fa fa-dashboard"></i><span
            class="app-menu__label">Dashboard</span></a></li>

      </li>
      <li class="treeview"><a class="app-menu__item" href="adminana.php" data-toggle="treeview"><i
            class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Sayfalar</span><i
            class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">

          <li><a class="treeview-item" href="adminanasay.php"><i class="icon fa fa-circle-o"></i> Ana Sayfa</a></li>
          <li><a class="treeview-item" href="adminnasıl"><i class="icon fa fa-circle-o"></i> Nasıl Sahip Olurum</a></li>
      </li>
      <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i
            class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Kullanıcılar</span><i
            class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
        <li><a class="treeview-item" href="adminkullanıcı.php"><i class="icon fa fa-circle-o"></i>ÜyeLer</a></li>
 
        </ul>
  </aside>
  <main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-th-list"></i>Üyeler Sayfası</h1>
        <p></p>
      </div>
      <ul class="app-breadcrumb breadcrumb side">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item">Tablolar</li>
        <li class="breadcrumb-item active"><a href="#">Veriler</a></li>
      </ul>
    </div>
    <div class="table table-hover table-bordered">
      <?php

      $query = "SELECT * FROM nasılsahipolurum";
      $statement = $baglanti->prepare($query);
      $statement->execute();
      $sonuc = $statement->fetch(PDO::FETCH_ASSOC);


      


      ?>
      <form action="#" method="post" style="max-width: 800px; margin: 0 auto;">
        <div class="form-group row">
          <div class="col-md-6">
            <label for="kullanici_adi">Başlık</label>
            <input type="text" id="kullanici_adi" name="kullanici_adi" required class="form-control"
              value="<?= $sonuc['kullanici_adi'] ?>">
          </div>
          <div class="col-md-6">
            <label for="email">E-Mail</label>
            <textarea id="email" name="email" required class="form-control"
              style="height: 150px;"><?= $sonuc['email'] ?></textarea>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-6">
            <label for="parola">Parola</label>
            <input type="text" id="parola" name="parola" required class="form-control" value="<?= $sonuc['parola'] ?>">
          </div>
          <div class="col-md-6">
            <label for="kayit_tarihi">Kayıt Tarihi</label>
            <input type="text" id="kayit_tarihi" name="kayit_tarihi" required class="form-control"
              value="<?= $sonuc['kayit_tarihi'] ?>">
          </div>
        </div>
        <input type="hidden" name="id" value="<?= $sonuc['id'] ?>">
        <div class="form-group row">
          <div class="col-md-12">
            <input type="submit" value="Güncelle" class="btn btn-primary">
          </div>
        </div>
      </form>

    </div>

  </main>
  <!-- Essential javascripts for application to work-->
  <script src="jsadmin/jquery-3.2.1.min.js"></script>
  <script src="jsadmin/popper.min.js"></script>
  <script src="jsadmin/bootstrap.min.js"></script>
  <script src="jsadmin/main.js"></script>
  <!-- The javascript plugin to display page loading on top-->
  <script src="jsadmin/plugins/pace.min.js"></script>
  <!-- Page specific javascripts-->
  <script type="text/javascript" src="jsadmin/plugins/chart.js"></script>
  <script type="text/javascript">
    var data = {
      labels: ["January", "February", "March", "April", "May"],
      datasets: [
        {
          label: "My First dataset",
          fillColor: "rgba(220,220,220,0.2)",
          strokeColor: "rgba(220,220,220,1)",
          pointColor: "rgba(220,220,220,1)",
          pointStrokeColor: "#fff",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(220,220,220,1)",
          data: [65, 59, 80, 81, 56]
        },
        {
          label: "My Second dataset",
          fillColor: "rgba(151,187,205,0.2)",
          strokeColor: "rgba(151,187,205,1)",
          pointColor: "rgba(151,187,205,1)",
          pointStrokeColor: "#fff",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(151,187,205,1)",
          data: [28, 48, 40, 19, 86]
        }
      ]
    };
    var pdata = [
      {
        value: 300,
        color: "#46BFBD",
        highlight: "#5AD3D1",
        label: "Complete"
      },
      {
        value: 50,
        color: "#F7464A",
        highlight: "#FF5A5E",
        label: "In-Progress"
      }
    ]

    var ctxl = $("#lineChartDemo").get(0).getContext("2d");
    var lineChart = new Chart(ctxl).Line(data);

    var ctxp = $("#pieChartDemo").get(0).getContext("2d");
    var pieChart = new Chart(ctxp).Pie(pdata);
  </script>
  <!-- Google analytics script-->
  <script type="text/javascript">
    if (document.location.hostname == 'pratikborsadiya.in') {
      (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
          (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date(); a = s.createElement(o),
          m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
      })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
      ga('create', 'UA-72504830-1', 'auto');
      ga('send', 'pageview');
    }
  </script>
</body>

</html>