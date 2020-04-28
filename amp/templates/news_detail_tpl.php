

<amp-img src="/<?php echo _upload_tintuc_l.$row_detail['photo']?>" srcset="/<?php echo _upload_tintuc_l.$row_detail['photo']?>" width="750" height="427" layout="responsive" alt="<?php echo $row_detail['ten']?>" noloading="">
<div placeholder="" class="commerce-loader"></div>      </amp-img>

<section class="commerce-blog-wrapper col-12 md-col-8 px2 pt2 pb3 md-px4 md-pt1 md-pb3">

<div class="">
        <div class="commerce-title_cat"><?php echo $title_cat;?></div>
        <time datetime="<?php echo date('d-m-Y',$row_detail['ngaytao']) ?>" class="block mb2 mt1"><?php echo date('d-m-Y',$row_detail['ngaytao']) ?></time>
        <p class="mb5"><?php echo $row_detail['mota']?></p>
      </div>

      <section class=""><?php echo ampify($row_detail["noidung"])?></section>

  </section>
  
  <amp-facebook-comments width=486 height=657
        layout="responsive"
        data-numposts="5"
        data-href="<?php echo getCurrentPageURL()?>">
    </amp-facebook-comments>

    <div class="commerce-title_cat"><?php echo $title_other;?></div>

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