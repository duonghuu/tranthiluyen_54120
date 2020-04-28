<?php
	// phpinfo();
	@session_start();
	error_reporting(1);
	@define ( '_source' , '../sources/');
	@define('_lib', '../libraries/');
	@define ( '_template' , './templates/');
	include_once _lib."breadcrumb.php";
	$bread = new breadcrumb();
	include_once _lib."config.php";
	require_once _source."lang$lang.php";
	$bread->add(_trangchu,'//'.$config_url);
	include_once _lib."constant.php";
	include_once _lib."functions.php";
	include_once _lib."functions_for.php";
	include_once _lib."class.database.php";
	include_once _lib."functions_user.php";
	include_once _lib."functions_giohang.php";
	include_once _lib."file_requick.php";
	include_once _source."counter.php";
	// if(!empty($_POST) && $_POST["id_product"]!='' && $_POST["soluong"]!='' ){
	// 	include_once _lib."functions_giohang.php"; 	
	// 	if(addtocart(intval($_POST["id_product"]),intval($_POST["soluong"]),intval($_POST["color"]),intval($_POST["size"]))){
	// 		if($_POST["type"]!='' && $_POST["type"]=='thanh-toan'){
	// 			redirect("http://".$config_url."/thanh-toan.html");
	// 		}else{
	// 			redirect("http://".$config_url."/gio-hang.html");
	// 		}
	// 	}
	// }
?>

<!DOCTYPE html>

<html ⚡ lang="<?php echo $lang?>">

<head itemscope itemtype="http://schema.org/WebSite">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php include _template."layout/base_meta.php";?>

<?php include _template."layout/base_js_amp.php";?>

<?php include _template."layout/base_css.php";?>

</head>

<body>

<?php //include _template."layout/base_analytics.php";?>

<?php include _template."layout/header.php";?>

<?php include _template."layout/nav_mobile.php";?>

<main id="content" role="main" class="main commerce-listing">

<?php include _template.$template."_tpl.php";?>

</main>

<?php include _template."layout/footer.php";?>

<?php //include _template."layout/base_schema.php";?>

</body>

</html>