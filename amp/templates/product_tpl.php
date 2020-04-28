<div class="commerce-title_cat"><?php echo $title_cat;?></div>

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