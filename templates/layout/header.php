<header class="hd-bg">
  <div class="hd-top">
    <div class="container">
      <div class="hd-top-flex">
        <div class="mxh"><?= lay_mxh("mxh") ?></div>
        <marquee behavior="" direction=""><?= $company["slogan"] ?></marquee>
        <p><i class="fas fa-phone-alt"></i>Hotline / Zalo: <a href="tel:
          <?=preg_replace('/[^0-9]/','',$company['dienthoai']);?>">
          <?= $company['dienthoai'] ?></a></p>
        <p><i class="fas fa-calendar-alt"></i><?= date('d/m/Y', time()) ?></p>
      </div>
    </div>
  </div>
  <div class="hd-bot">
    <div class="container">
      <div class="hd-bot-flex">
        <?php 
          $img = _upload_hinhanh_l.$logolang["photo"];
         ?>
        <a href="" class="logo" ><img src="<?= $img ?>" alt="logo"></a>
        <?php include _template."layout/menu_top.php"; ?>
      </div>
    </div>
  </div>
</header>