<footer class="commerce-footer center">
  <nav class="mx-auto md-mb0 md-pt5 md-pb5">

    <ul class="list-amp-footer list-reset flex flex-wrap my0 md-pl4 md-pr4 md-mxn4">

      <li class="pt3 md-pt0 md-px4 col-12 md-col-3 lg-col-2">

          <h2 class="commerce-footer-header h7 pb2"><?php echo $company['ten'] ?></h2>
          
          <ul class="list-reset pb3 md-mx0">

          	  <li>
                <a class="text-decoration-none" href="/lien-he.html"><?php echo _diachi?>: <?php echo $company['diachi'] ?></a>
              </li>

              <li>
                <a class="text-decoration-none" href="tel:<?php echo preg_replace('/[^0-9]/','',$company['dienthoai']);?>"><?php echo _dienthoai?>: <?php echo $company['dienthoai'] ?></a>
              </li>

              <li>
                <a class="text-decoration-none" href="mailto:<?php echo $company['email'] ?>">Email: <?php echo $company['email'] ?></a>
              </li>

              <li>
                <a class="text-decoration-none" href="<?php echo $company['website'] ?>">Website: <?php echo $company['website'] ?></a>
              </li>

          </ul>

        <hr class="md-hide lg-hide col-12 mx0">

      </li>

      <li class="copyright-footer pt1 pb1 md-pt0 md-px4 col-12 md-col-3 lg-col-2">
		&copy; Copyright <?php echo date('Y',time()) ?> <?php echo $company['ten'] ?>, All Rights Reserved. Design by Nina.vn
      </li>
      
    </ul>
  </nav>
</footer>