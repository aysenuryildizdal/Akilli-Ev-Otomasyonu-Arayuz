<?php
$sayfa = "Ana Sayfa";
include ("php/vt.php");
include("php/head.php");
$sorgu = $baglanti->prepare("SELECT * FROM anasayfa");
$sorgu2 = $baglanti->prepare("SELECT * FROM anasayfa WHERE ıd = 2 ");
$sorgu->execute();
$sorgu2->execute();
$sonuc2=$sorgu2->fetch();
$sonuc=$sorgu->fetch();
?>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-6 ">
                  <div class="detail-box">
                    <h1>
                      <?php echo $sonuc["ustbaslik"] ?>
                    </h1>
                    <p>
                    <?php echo $sonuc["aciklama"] ?>                      
                    </p>
                    <div class="btn-box">
                      <a href="nasıl.php" class="btn1">
                      <?php echo $sonuc["linkmetın"] ?>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/Slader.jpg" alt="">
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container ">
              <div class="row">
                <div class="col-md-6 ">
                  <div class="detail-box">
                    <h1>
                    <?php echo $sonuc2["ustbaslik"] ?>
                    </h1>
                    <p>
                    <?php echo $sonuc2["aciklama"] ?>
                    </p>
                    <div class="btn-box">
                      <a href="nasıl.php" class="btn1">
                      <?php echo $sonuc["linkmetın"] ?>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/slader2.jpg" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-6 ">
                  <div class="detail-box">
                    <h1>
                      EVİNİZİ AKILLI HALE <br>
                      GETİREBİLECEĞİNİZ AKSESUARLAR?
                    </h1>
                    <p>
                      AKILLI ANAHTARLAR<br>
                      AKILLI AMPULLER<br>
                      AKILLI ALARM SİSTEMLERİ<br>
                      AKILLI KAMERALAR<br>
                      AKILLI ISINMA VE ENERJİ SİSTEMLERİ<br>
                      AKILI BEYAZ EŞYALAR<br>
                    </p>
                    <div class="btn-box">
                      <a href="<?php echo $sonuc["link"] ?>" class="btn1">
                      <?php echo $sonuc["linkmetın"] ?>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/slader3.jpg" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <ol class="carousel-indicators">
          <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
          <li data-target="#customCarousel1" data-slide-to="1"></li>
          <li data-target="#customCarousel1" data-slide-to="2"></li>
        </ol>
      </div>

    </section>
    <!-- end slider section -->
  </div>


  

  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container  ">
      <div class="heading_container heading_center">
        <h2>
          Hakkım<span>ızda</span>
        </h2>
        <p>
        <?php echo $sonuc["hakkimizda"] ?>  
        </p>
        <img src="images/about-img.jpg" alt="">
      

      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- why section -->

  <section class="why_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Neden Bizi  <span>Seçmelisiniz?</span>
        </h2>
      </div>
      <div class="why_container">
        <div class="box">
          <div class="img-box">
            <img src="images/w1.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Güvenlik
            </h5>
            <p>
            <?php echo $sonuc["guven"] ?>  
            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/w2.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Uzaktan Erişim
            </h5>
            <p>
            <?php echo $sonuc["uzer"] ?>  
            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="images/w3.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Enerji Verimliliği
            </h5>
            <p>
            <?php echo $sonuc["enver"] ?>  
            </p>
        </div>
      </div>
      <div class="btn-box">
        <a href="<?php echo $sonuc["link"] ?>  ">
        <?php echo $sonuc["linkmetın"] ?>  
        </a>
      </div>
    </div>
  </section>

  <!-- end why section -->

  


  <!-- client section -->

  <section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center psudo_white_primary mb_45">
        <h2> 
          Müşterilerimiz <span>Ne Diyor?</span>
        </h2>
      </div>
      <div class="carousel-wrap ">
        <div class="owl-carousel client_owl-carousel">
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="images/foto.jpg" alt="" class="box-img">
              </div>
              <div class="detail-box">
                <div class="client_id">
                  <div class="client_info">
                    <h6>
                    <?php echo $sonuc["altlink"] ?>
                    </h6>
                    <p>
                      Konya
                    </p>
                  </div>
                </div>
                <p>
                <?php echo $sonuc["yorum"] ?>  
                 </p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="images/" alt="" class="box-img">
              </div>
              <div class="detail-box">
                <div class="client_id">
                  <div class="client_info">
                    <h6>
                    <?php echo $sonuc2["altlink"] ?>  
                    </h6>
                    <p>
                      Ankara
                    </p>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>
                <?php echo $sonuc2["yorum"] ?>  
                </p>
              </div>
           
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end client section -->

<?php
include("php/footer.php")
?>

  