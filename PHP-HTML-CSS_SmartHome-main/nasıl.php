<?php
$sayfa = "nasılsaholur";
include ("php/vt.php");
include("php/head2.php");
$sorgu = $baglanti->prepare("SELECT * FROM nasılsahipolurum");
$sorgu->execute();
$sonuc=$sorgu->fetch();
$sorgu2 = $baglanti->prepare("SELECT * FROM nasılsahipolurum where ıd = 2");
$sorgu2->execute();
$sonuc2=$sorgu2->fetch();
$sorgu3 = $baglanti->prepare("SELECT * FROM nasılsahipolurum where ıd = 3");
$sorgu3->execute();
$sonuc3=$sorgu3->fetch();
$sorgu4 = $baglanti->prepare("SELECT * FROM nasılsahipolurum where ıd = 4");
$sorgu4->execute();
$sonuc4=$sorgu4->fetch();
?>
   
    <!-- end header section -->
  </div>

  <!-- why section -->

  <section class="why_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
        <?php echo $sonuc["baslık"] ?>
        </h2>
      </div>
      <div class="why_container">
        <div class="box">
          <div class="img-box">
            <img src="images/<?php echo $sonuc["foto"] ?>" alt="">
          </div>
          <div class="detail-box">
            <h4>
            <?php echo $sonuc["altbaslık"] ?>
            </h4>
            <br>
           
            <p>
            <h4></h4>
            <?php echo $sonuc["açıklama"] ?>
      </div>
            </p>
            <p>
            <div class="why_container">
        <div class="box">
          <div class="">
            <img src="images/<?php echo $sonuc2['foto']; ?>" alt="" style="max-width: 175px;">
          </div>
            <h4><?php echo $sonuc2["baslık"] ?></h4>
            <?php echo $sonuc2["açıklama"] ?>
        </p>
            <p>
            <div class="why_container">
        <div class="box">
          <div class="">
            <img src="images/<?php echo $sonuc3['foto']; ?>" alt="" style="max-width: 175px;">
          </div>
            <h4><?php echo $sonuc3["baslık"] ?></h4>
            <?php echo $sonuc3["açıklama"] ?>
            </p>
            <p>
            <div class="why_container">
        <div class="box">
          <div class="">
            <img src="images/<?php echo $sonuc4['foto']; ?>" alt="" style="max-width: 175px;">
          </div>
            <h4><?php echo $sonuc4["baslık"] ?></h4>
            <?php echo $sonuc4["açıklama"] ?>
 </p>
 <div class="btn-box">
        <a href="login.php">
        <?php echo $sonuc["linkmetin"] ?>
        </a>
      </div>
    </div>
  </section>

  <!-- end why section -->

<?php
include("php/footer.php");
?>