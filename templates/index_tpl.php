<div class="gioithieu">
  <div class="container">
    <div class="gioithieu__title">
      <p><?= $gioithieu["ten2"] ?></p>
      <h2><a href="gioi-thieu.html"><?= $gioithieu["ten"] ?></a></h2>
    </div>
    <div class="gioithieu__text">
      <?= $gioithieu["mota"] ?>
    </div>
  </div>
</div>
<div class="visao">

  <figure><img src="<?= _upload_hinhanh_l.$txtvisao["thumb"] ?>" alt="<?= $txtvisao["ten"] ?>"></figure>
  <div class="visao-box">
    <div class="idx-tit">
      <h4><span><?= $txtvisao["ten"] ?></span></h4>
    </div>
    <p class="title-desc"><?= $txtvisao["mota"] ?></p>
    <ul>
      <?php foreach ($visao as $key => $value) {
        $img = _upload_tintuc_l.$value["thumb"];
      ?>
      <li>
        <figure><img src="<?= $img ?>" alt="<?= $value["ten"] ?>"></figure>
        <h4><?= $value["ten"] ?></h4>
      </li>
    <?php } ?>
    </ul>
  </div>
</div>

<div class="spnoibat">
  <div class="container">
    <div class="idx-tit">
      <h4><span>Sản phẩm cà phê</span></h4>
    </div>
    <style>

    </style>
    <!-- Nav pills -->
    <ul class="nav nav-pills">
      <li class="nav-item">
        <a class="nav-link active" data-toggle="pill" href="#sp-tatca">Tất cả</a>
      </li>
      <?php foreach ($product_danhmuc as $kdm => $vdm) {
        $iden = "sp-".$vdm["tenkhongdau"].$vdm["id"];
       ?>
      <li class="nav-item">
        <a class="nav-link" data-toggle="pill" href="#<?= $iden ?>"><?= $vdm["ten"] ?></a>
      </li>
    <?php } ?>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
      <div class="tab-pane active" id="sp-tatca">
        <div class="product-grid">
          <?php 
          $spnoibat=get_result("select ten$lang as ten,tenkhongdau,id,type,gia,giakm,thumb,photo from
           #_product where type='san-pham' and noibat>0 and hienthi>0
            order by stt asc limit 0,12");
          foreach ($spnoibat as $key => $value) {
            showProduct($value);
          }
           ?>
        </div>
      </div>
      <?php foreach ($product_danhmuc as $kdm => $vdm) {
        $iden = "sp-".$vdm["tenkhongdau"].$vdm["id"];
        $spnoibat=get_result("select ten$lang as ten,tenkhongdau,id,type,gia,giakm,thumb,photo from
         #_product where type='san-pham' and id_danhmuc='".$vdm["id"]."' and noibat>0 and hienthi>0 
          order by stt asc limit 0,12");
       ?>
      <div class="tab-pane fade" id="<?= $iden ?>">
        <div class="product-grid">
          <?php 
          foreach ($spnoibat as $key => $value) {
            showProduct($value);
          }
           ?>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</div>

<div class="nhuongquyen">
  <div class="container">
    <div class="idx-tit">
      <h4><span><?= $txtnhuongquyen["ten"] ?></span></h4>
    </div>
    <p class="subtitle"><?= $txtnhuongquyen["ten2"] ?></p>
    <div class="idx-desc"><?= $txtnhuongquyen["mota"] ?></div>
    <div class="nhuongquyen-main">
      <?php foreach ($nhuongquyen as $key => $value) { 
          $s = sprintf('%02d', $key+1);
          $img = _upload_tintuc_l.$value["thumb"];
        ?>
        <div class="nhuongquyen-item">
          <a href="<?= get_url($value,'nhuong-quyen') ?>">
            <figure><img src="<?= $img ?>" alt="<?= $value["ten"] ?>"></figure>
            <div class="info">
              <strong><?= $s ?></strong>
              <span><?= $value["ten2"] ?></span>
              <h5><?= $value["ten"] ?></h5>
              <p><?= catchuoi($value["mota"],250) ?></p>
            </div>
          </a>
        </div>
      <?php } ?>
    </div>
  </div>
</div>

<div class="web-slider-main quangcao">
  <?php foreach ($quangcao as $key => $value) { 
    $img = _upload_hinhanh_l.$value["thumb"];
    ?>
  <div class="quangcao-item"><a href="<?= $value["link"] ?>">
    <img src="<?= $img ?>" alt="<?= $value["ten"] ?>"></a></div>  
  <?php } ?>
</div>

<div class="thuvien">
  <div class="container">
    <div class="idx-tit">
      <h4><a href="thu-vien.html">Album ảnh</a></h4>
    </div>
    <div class="idx-desc thuvien-desc"><?= $txtthuvien["mota"] ?></div>
    <div class="thuvien-grid">
      <?php foreach ($thuvien as $key => $value) {
        $img = _upload_tintuc_l.$value["thumb"];
       ?>
        
      <div class="gri<?= $key+1 ?>">
        <a href="<?= get_url($value,"thu-vien") ?>">
          <img src="<?= $img ?>" alt="<?= $value["ten"] ?>">
          <h5><?= $value["ten"] ?></h5>
        </a>
      </div>
     <?php } ?>
    </div>
  </div>
</div>

<div class="tin-video">

  <div class="container">
    <div class="tin-video-flex">
      <div class="video-bg">
        <div class="title">Video clip</div>
        <div id="video-idx"></div>
        <select class="form-control" id="lstvideo" name="lstvideo">
          <option value="">Video ...</option>
          <?php foreach($video as $v) { ?>
          <option value="<?= getYoutubeIdFromUrl($v["link"]) ?>"><?= $v["ten"] ?></option>
          <?php } ?>
        </select>
      </div>
      <div class="tin-bg">
        <div class="title">Tin tức nổi bật</div>
        <div class="tinnb-main">

          <?php foreach ($tinnb as $key => $value) { 
$img = _upload_tintuc_l.$value["thumb"];
            ?>
            <div class="tinnb-item"><a href="<?= get_url($value,"tin-tuc") ?>">
                <figure><img src="<?= $img ?>" alt="<?= $value["ten"] ?>"></figure>
                <div class="info">
                  <h5><?= $value["ten"] ?></h5>
                  <div class="postdate"><span><?= date('d/m/Y',$value["ngaytao"]) ?></span></div>
                  <p><?= catchuoi($value["mota"],200) ?></p>
                </div>
              </a></div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="themanh">

  <div class="container">
    <div class="themanh-main">
      <?php foreach ($themanh as $key => $value) { ?>
        
      
      <div class="themanh-item">
        <article>
          <figure><img src="<?= _upload_tintuc_l.$value["thumb"] ?>" alt="<?= $value["ten"] ?>"></figure>
          <div class="info">
            <p><strong><?= $value["ten"] ?></strong></p>
            <p><?= $value["mota"] ?></p>
          </div>
        </article>
      </div>
      <?php } ?>
    </div>
  </div>
</div>