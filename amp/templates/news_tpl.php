<div class="commerce-title_cat"><?php echo $title_cat;?></div>

<section class="commerce-blog-wrapper col-12 md-col-8 px2 pt2 pb3 md-px4 md-pt1 md-pb3">

  <?php foreach ($tintuc as $key => $value) { ?>
      
      <article>
  <amp-img class="mb3" src="/<?php echo _upload_tintuc_l.$value['photo']?>" srcset="/<?php echo _upload_tintuc_l.$value['photo']?>" width="750" height="427" layout="responsive" alt="<?php echo $value['ten']?>" noloading="">
<div placeholder="" class="commerce-loader"></div>  </amp-img>
  <div class="mb3 md-mx0">
    <h2 class="h6"><?php echo $value['ten']?></h2>
    <time datetime="<?php echo date('d-m-Y',$value['ngaytao']) ?>" class="block mb2">Ngày đăng: <?php echo date('d-m-Y',$value['ngaytao']) ?></time>
    <p class="mb2"><?php echo $value['mota']?></p>
    <a href="/<?php echo $value['type']?>/<?php echo $value['tenkhongdau']?>-<?php echo $value['id']?>.html" class="commerce-blog-link inline-block h7 md-mb4"><?php echo _xemthem ?></a>
  </div>
</article>
  
  <?php } ?>
  
</section>

<div class="pagination"><?php echo pagesListLimitadmin($url_link , $totalRows , $pageSize, $offset)?></div>
