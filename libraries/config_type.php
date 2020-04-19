<?php
$type = (string)(isset($_REQUEST['type'])) ? addslashes($_REQUEST['type']) : "";
$act = (string)(isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";
$act = explode('_',$act);
if(count($act>1)){
	$act = $act[1];
} else {
	$act = $act[0];
}

$config['type'] = array();
$config['title'] = array();
$config['ck'] = array();
switch($type){
//-------------san pham------------------
	case 'bat-dong-san':
	switch($act){
		case 'danhmuc':
		$config['type'] = array('ten','seo');
		$config['title'] = array('noibat'=>"Nổi bật",'tieubieu'=>"Hiện menu",'hinhanh2'=>"Icon");
		@define ( _width_thumb , 685 );
		@define ( _height_thumb , 710 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 685 );
		@define ( _height_thumb2 , 710 );
		@define ( _widthhinhanh_thumb , 40 );
		@define ( _heighthinhanh_thumb , 40 );
		@define ( _stylehinhanh_thumb , 2 );
		@define ( _widthhinhanh_thumb2 , 40 );
		@define ( _heighthinhanh_thumb2 , 40 );
		break;

		case 'list':
		$config['type'] = array('seo','ten');
		$config['title'] = array('noibat'=>"Nổi bật");
		@define ( _width_thumb , 300 );
		@define ( _height_thumb , 300 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 300 );
		@define ( _height_thumb2 , 300 );
		break;

		case 'cat':
		$config['type'] = array('seo','ten');
		@define ( _width_thumb , 250 );
		@define ( _height_thumb , 200 );
		@define ( _style_thumb , 1 );
		break;

		default:
		$config['type'] = array('seo','ten','mota','gia','noibat','danhmuc','list','hinhanh','noidung');
		$config['ck'] = array('mota2');
		$config['title'] = array('tieubieu'=>"Sản phẩm hot",'noibat'=>"Nổi bật",
			'spmoi'=>"Mới",'spbanchay'=>"Bán chạy","mota"=>"Mô tả","toado"=>"Iframe google map",
			"mota2"=>"Mô tả",'mattien'=>"Số người","dientich"=>"Giá","thuonghieu"=>"Thương hiệu",
			"vitri"=>"Vị trí");
		@define ( _width_thumb , 300 );
		@define ( _height_thumb , 230 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 600 );
		@define ( _height_thumb2 , 470 );
		break;
	}
	break;
//-------------san pham------------------
	case 'mausac':
	switch($act){
		default:
		$config['type'] = array('ten', 'color','noibat','hinhanh');
		$config['title']["noibat"] = "Dùng hình ảnh";
		@define ( _width_thumb , 200 );
		@define ( _height_thumb , 200 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 200 );
		@define ( _height_thumb2 , 200 );
		break;
	}
	break;
	case 'size':
	switch($act){
		default:
		$config['type'] = array('ten');
		@define ( _width_thumb , 400 );
		@define ( _height_thumb , 300 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 400 );
		@define ( _height_thumb2 , 300 );
		break;
	}
	break;
	case 'coupon':
	switch($act){
		default:
		$config['type'] = array('ten','gia');
		break;
	}
	break;
	case 'id_hientrang':
	case 'id_huong':
	switch($act){
		default:
		$config['type'] = array('ten');
		break;
	}
	break;
	case 'tailieu':
	switch($act){
		default:
		$config['type'] = array('seo','taptin','ten','mota');
		break;
	}
	break;
	case 'bntrong':
	switch($act){
		default:
		$config['type'] = array('hinhanh','ten');
		@define ( _width_thumb , 1366 );
		@define ( _height_thumb , 300 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 1366 );
		@define ( _height_thumb2 , 300 );
		break;
	}
	break;
	case 'thuonghieu':
	switch($act){
		default:
		$config['type'] = array('hinhanh2', 'hinhanh','ten','seo');
		$config['title'] = array('hinhanh2'=>'Icon', 'hinhanh'=>'Hình ảnh');
		@define ( _width_thumb , 590 );
		@define ( _height_thumb , 480 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 590 );
		@define ( _height_thumb2 , 480 );
		@define ( _width_thumb4 , 145 );
		@define ( _height_thumb4 , 110 );
		break;
	}
	break;
	case 'vi-sao':
	switch($act){
		default:
		$config['type'] = array('ten','hinhanh','home');
		@define ( _width_thumb , 70 );
		@define ( _height_thumb , 70 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 70);
		@define ( _height_thumb2 , 70 );
		break;
	}
	break;
	case 'txtvi-sao':
	switch($act){
		default:
		$config['type'] = array('hinhanh','ten','mota');
		@define ( _width_thumb , 680 );
		@define ( _height_thumb , 750 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 680 );
		@define ( _height_thumb2 , 750 );
		break;
	}
	break;
	case 'nhuong-quyen':
	switch($act){
		default:
		$config['type'] = array('seo','ten','ten2','mota','noibat','hinhanh','home','noidung');
		$config['title'] = array('ten'=>"Tiêu đề lớn",'ten2'=>"Tiêu đề nhỏ");
		@define ( _width_thumb , 400 );
		@define ( _height_thumb , 300 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 400);
		@define ( _height_thumb2 , 300 );
		break;
	}
	break;
	case 'txtnhuong-quyen':
	switch($act){
		default:
		$config['type'] = array('ten','ten2','mota');
		$config['title'] = array('ten'=>"Tiêu đề lớn",'ten2'=>"Tiêu đề nhỏ");
		break;
	}
	break;
	case 'cong-trinh':
	switch($act){
		case 'danhmuc':
		$config['type'] = array('seo','ten');
		break;
		default:
		$config['type'] = array('seo','ten','noidung','hinhanh','noibat','mota');
		@define ( _width_thumb , 400 );
		@define ( _height_thumb , 300 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 400);
		@define ( _height_thumb2 , 300 );
		break;
	}
	break;
	case 'tin-tuc':
	case 'chuoi-quan':
	case 'tuyen-dung':
	case 'chinh-sach':
	switch($act){
		case 'danhmuc':
		$config['type'] = array('seo','ten');
		break;
		default:
		$config['type'] = array('seo','ten','noidung','mota','hinhanh');
		if($type == "tin-tuc"){
			$config['type'][] = "noibat";	
		}
		@define ( _width_thumb , 400 );
		@define ( _height_thumb , 300 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 400);
		@define ( _height_thumb2 , 300 );
		break;
	}
	break;
	case 'loc-san-pham':
	switch($act){
		case 'danhmuc':
		$config['type'] = array('ten');
		break;
		default:
		$config['type'] = array('ten','danhmuc');
		break;
	}
	break;
	case 'hotline':
	case 'zalo':
	switch($act){
		default:
		$config['type'] = array('ten','link');
		$config['title'] = array('link'=>"SĐT",'chucvu'=>"Bộ phận");
		break;
	}
	break;
	case 'diachi':
	switch($act){
		default:
		$config['type'] = array('ten','mota');
		$config['title'] = array('mota'=>"Địa chỉ");
		break;
	}
	break;
	case 'tags':
	switch($act){
		default:
		$config['type'] = array('ten', 'link');
		break;
	}
	break;
//-------------tin tuc------------------
	case 'y-kien':
	switch($act){
		default:
		$config['type'] = array('ten','chucvu','hinhanh','mota');
		@define ( _width_thumb , 100 );
		@define ( _height_thumb , 100 );
		@define ( _style_thumb , 3 );
		@define ( _width_thumb2 , 100 );
		@define ( _height_thumb2 , 100 );
		break;
	}
	break;
	case 'the-manh':
	switch($act){
		default:
		$config['type'] = array('ten','hinhanh','mota');
		@define ( _width_thumb , 70 );
		@define ( _height_thumb , 70 );
		@define ( _style_thumb , 3 );
		@define ( _width_thumb2 , 70 );
		@define ( _height_thumb2 , 70 );
		break;
	}
	break;
	case 'thu-vien':
	switch($act){
		case 'danhmuc':
		$config['type'] = array('seo','ten','hinhanh','noibat');
		@define ( _width_thumb , 280 );
		@define ( _height_thumb , 280 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 600);
		@define ( _height_thumb2 , 600 );
		break;
		default:
		$config['type'] = array('ten','seo','noibat','hinhthem','home','hinhanh');
		@define ( _width_thumb , 600 );
		@define ( _height_thumb , 600 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 600);
		@define ( _height_thumb2 , 600 );
		break;
	}
	break;
	case 'txtthu-vien':
	switch($act){
		default:
		$config['type'] = array('mota');
		break;
	}
	break;
//-------------chinh sach / ho tro / cham soc khach hang------------------
	case 've-chung-toi':
	switch($act){
		default:
		$config['type'] = array('seo','ten','noidung');
		break;
	}
	break;

//-------------tin tuc------------------
//-------------Dạng photo------------------
	case 'logo':
	switch($act){
		default:
		@define ( _width_thumb2 , 150 );
		@define ( _height_thumb2 , 100 );
		break;
	}
	break;
	case 'dong':
	switch($act){
		default:
		@define ( _width_thumb , 100 );
		@define ( _height_thumb , 100 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 250 );
		@define ( _height_thumb2 , 250 );
		break;
	}
	break;
	case 'banner':
	switch($act){
		default:
		@define ( _width_thumb , 660 );
		@define ( _height_thumb , 120);
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 660 );
		@define ( _height_thumb2 , 120 );
		break;
	}
	break;
	case 'bgbn':
	switch($act){
		default:
		@define ( _width_thumb , 1366 );
		@define ( _height_thumb , 110 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 1366 );
		@define ( _height_thumb2 , 110 );
		break;
	}
	break;
	case 'bgft':
	switch($act){
		default:
		@define ( _width_thumb , 700 );
		@define ( _height_thumb , 500 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 700 );
		@define ( _height_thumb2 , 500 );
		break;
	}
	break;
	case 'banner_mobi':
	switch($act){
		default:
		@define ( _width_thumb , 600 );
		@define ( _height_thumb , 150 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 600 );
		@define ( _height_thumb2 , 150 );
		break;
	}
	break;
	case 'pupop':
	switch($act){
		default:
		@define ( _width_thumb2 , 550 );
		@define ( _height_thumb2 , 480 );
		@define ( _style_thumb2 , 1 );
		break;
	}
	break;
	case 'slider':
	case 'slider2':
	switch($act){
		default:
		@define ( _width_thumb , 1366 );
		@define ( _height_thumb , 530);
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 1366 );
		@define ( _height_thumb2 , 530);
		break;
	}
	break;
	case 'slidermb':
	switch($act){
		default:
		@define ( _width_thumb , 768 );
		@define ( _height_thumb , 300);
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 768 );
		@define ( _height_thumb2 , 300);
		break;
	}
	break;
	case 'letruot':
	switch($act){
		default:
		@define ( _width_thumb , 150 );
		@define ( _height_thumb , 390 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 150 );
		@define ( _height_thumb2 , 390 );
		break;
	}
	break;
	case 'doi-tac':
	switch($act){
		default:
		@define ( _width_thumb2 , 160 );
		@define ( _height_thumb2 , 100 );
		break;
	}
	break;
	case 'quang-cao':
	switch($act){
		default:
		@define ( _width_thumb , 1366 );
		@define ( _height_thumb , 400 );
		@define ( _style_thumb , 3 );
		@define ( _width_thumb2 , 1366 );
		@define ( _height_thumb2 , 400 );
		break;
	}
	break;
	case 'quang-cao2':
	switch($act){
		default:
		@define ( _width_thumb , 1366 );
		@define ( _height_thumb , 410 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 1366 );
		@define ( _height_thumb2 , 410 );
		break;
	}
	break;
//-------------Dạng 1 bài viết------------------
	case 'gioi-thieu':
	switch($act){
		default:
		$config['type'] = array('seo','noidung','ten','mota','ten2');
		$config['title'] = array('ten2'=>'Tiêu để nhỏ');
		@define ( _width_thumb , 585 );
		@define ( _height_thumb , 400 );
		@define ( _style_thumb , 1 );
		@define ( _width_thumb2 , 585 );
		@define ( _height_thumb2 , 400 );
		break;
	}
	break;
	
	case 'bang-gia':
	case 'lienhe':
	switch($act){
		default:
		$config['type'] = array('noidung');
		break;
	}
	break;
	case 'footer':
	switch($act){
		default:
		$config['type'] = array('noidung');
		break;
	}
	break;
//-------------tin tuc------------------

//--------------defaut main---------------
	default:
	$source = "";
	$template = "index";
	break;
}