<?php 
if($source=="index"){
    $spnoibat=get_result("select mota$lang as mota,ten$lang as ten,tenkhongdau,id,thumb,photo
        ,type,ngaytao,luotxem from #_product where type='bat-dong-san' and noibat>0 and hienthi>0 order by stt asc");
    // $gioithieu=get_fetch("select ten$lang as ten,ten2$lang as ten2,mota$lang as mota from #_about 
    //     where type='gioi-thieu' ");
}
    // $video=get_result("select id,ten$lang as ten,tenkhongdau,link
    //  from #_video where hienthi=1 and type='video' order by stt");
    $quangcao=get_result("select ten$lang as ten,mota$lang as mota,link,photo,thumb
     from #_slider where hienthi=1 and type='quang-cao' order by stt");
$thongtin=get_result("select mota$lang as mota,ten$lang as ten,tenkhongdau,id,thumb,photo
    ,type,ngaytao,luotxem from #_news where type='thong-tin' and hienthi>0 order by stt asc");
$logolang = get_fetch("select photo as photo from #_background where type='logo'");
// $bannerlang = get_fetch("select photo as photo from #_background where type='banner'");
$ftlogo=get_fetch("select photo from #_about where type='footer' ");
// $bgbnlang = get_fetch("select photo as photo from #_background where type='bgbn'");
// $tutags = get_result("select id,ten$lang as ten,link from #_news where type='tags'
 // and hienthi=1 order by stt asc");
// $hotline = get_result("select id,ten$lang as ten,chucvu,link from #_news where
//  type='hotline' and hienthi=1 order by stt asc");
// $diachi = get_result("select id,ten$lang as ten,mota$lang as mota from #_news 
// where type='diachi' and hienthi=1 order by stt asc");
// $yahoo = get_result("select * from #_yahoo where type='yahoo' and hienthi=1 order by stt asc");
// $lkweb = get_result("select link,ten from #_lkweb where type='lkweb' and hienthi=1 order by stt asc");


