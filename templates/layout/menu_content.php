<?php /* 
<i class="fas fa-home"></i> 
*/
?>
<li class="<?php if($source=='index') echo 'active'; ?>"><a href=""><?= _trangchu ?></a></li>
<li class="<?php if($com=='gioi-thieu') echo 'active'; ?>"><a href="gioi-thieu.html">
  <?= _gioithieu ?></a></li>
<?php /* 
<li class="<?php if($com=='bat-dong-san') echo 'active'; ?>"><a href="bat-dong-san.html"><?= _sanpham ?></a>
  <?= for2cap('product_danhmuc','product_list','bat-dong-san','bat-dong-san','','/')?>
</li> 
*/?>
<li class="<?php if($com == 'dich-vu') echo 'active'; ?>"><a href="dich-vu.html"><?= _dichvu ?></a></li>
<li class="<?php if($com == 'tin-tuc') echo 'active'; ?>"><a href="tin-tuc.html"><?= _tintuc ?></a></li>
<li class="<?php if($com == 'tuyen-dung') echo 'active'; ?>"><a href="tuyen-dung.html">
  <?= _tuyendung ?></a></li>
<li class="<?php if($com == 'nhu-cau-khach-hang') echo 'active'; ?>">
  <a href="nhu-cau-khach-hang.html">Nhu cầu khách hàng</a></li>
<li class="<?php if($com == 'lien-he') echo 'active'; ?>"><a href="lien-he.html">
  <?= _lienhe ?> 24/7</a></li>
<?php /* 
<?= for1('news_danhmuc','nang-luc','nang-luc','')?>
  */?>