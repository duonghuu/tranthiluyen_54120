<div class="commerce-title_cat"><?php echo $title_cat;?></div>

<section class="flex flex-wrap pb4 md-pb7">

<div class="col-12 md-col-6 px2 pt2 md-pl7 md-pt4">

<amp-carousel id="carousel-with-preview"
    width="1280"
    height="720"
    layout="responsive"
    type="slides">

    <amp-img src="/<?php echo _upload_sanpham_l.$row_detail["photo"]?>"
      width="1280"
      height="720"
      layout="responsive"
      ></amp-img>

      <?php foreach ($hinhthem as $k => $value) {?>
    <amp-img src="/<?php echo _upload_hinhthem_l.$value["photo"]?>"
      width="1280"
      height="720"
      layout="responsive"
      ></amp-img>
  <?php } ?>

  </amp-carousel>
  
  <amp-carousel class="carousel-preview"
    width="auto"
    height="48"
    layout="fixed-height"
    type="carousel">

    <button on="tap:carousel-with-preview.goToSlide(index=0)">
      <amp-img src="/<?php echo _upload_sanpham_l.$row_detail["photo"]?>"
        width="320"
        height="180"
        layout="responsive"
        ></amp-img>
    </button>

    <?php foreach ($hinhthem as $k => $value) {?>
    
    <button on="tap:carousel-with-preview.goToSlide(index=<?php echo $k + 1?>)">
      <amp-img src="/<?php echo _upload_hinhthem_l.$value["photo"]?>"
        width="320"
        height="180"
        layout="responsive"
        ></amp-img>
    </button>

    <?php } ?>
    
  </amp-carousel>

</div>

</section>

<div class="col-12 md-col-6 flex flex-wrap content-start px2 md-pl5 md-pr7 md-pt4">
        <div class="col-12 self-start pb2">
          <h1 class="h5 md-h4"><?php echo $row_detail['ten']?></h1>
          <div class="h6 md-h6"><?php echo _gia?>: <?php if($row_detail['gia']>0) echo number_format($row_detail['gia']).' VNĐ'; else echo _lienhe; ?></div>
          <div><?php echo _luotxem?>: <?php echo $row_detail['luotxem']?></div>
        </div>
        
        <div class="col-12 self-start pb2 desc-product-commerce-detail"><?php echo ampify($row_detail["mota"])?></div>
</div>

<div class="col-12 md-col-6 px2 md-pl7 commerce-product-desc">
    <h2 class="h5 md-h4"><?= _thongtinchitiet ?></h2>
    <div class="mt1 mb2 clearfix desc-product-commerce-detail"><?php echo ampify($row_detail["noidung"])?></div>
</div>

<amp-facebook-comments width=486 height=657
        layout="responsive"
        data-numposts="5"
        data-href="<?php echo getCurrentPageURL()?>">
    </amp-facebook-comments>

<hr>

<?php if(!empty($product)) { ?>

    <div class="commerce-title_cat"><?php echo $title_other;?></div>

<section class="grid grid-col-2">
  <?php foreach ($product as $key => $value) { ?>
  
    <a href="/<?php echo $value['type']?>/<?php echo $value['tenkhongdau']?>-<?php echo $value['id']?>.html" target="_self" class="commerce-listing-product text-decoration-none inline-block relative">
      <div class="flex flex-column justify-between">
        <div>
          <amp-img class="commerce-listing-product-image mb2" src="/<?php echo _upload_sanpham_l.$value['photo']?>" width="340" height="340" layout="responsive" alt="<?php echo $value['ten']?>" noloading=""><div placeholder="" class="commerce-loader"></div></amp-img>
          <h2 class="commerce-listing-product-name"><?php echo $value['ten']?></h2>
          <div class="commerce-listing-product-desc"><?php echo $value['mota']?></div>
        </div>
        <div class="commerce-listing-product-price mt1"><?php echo _gia?>: <?php if($value['gia']>0) echo number_format($value['gia']).' VNĐ'; else echo _lienhe; ?></div>
      </div>
    </a>
    
    <?php } ?>
</section>

<div class="pagination"><?php echo pagesListLimitadmin($url_link , $totalRows , $pageSize, $offset)?></div>

<?php } ?>