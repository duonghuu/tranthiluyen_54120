<meta charset="utf-8">
<title itemprop='name'><?php if($title!='') echo $title; else echo $company['title']?></title>
<meta name="description" content="<?php if($description!='') echo seo_entities($description); else echo $company['description']?>" />
<meta name="keywords" content="<?php if($keywords!='') echo seo_entities($keywords); else echo $company['keywords']?>" />
<meta name="robots" content="index, follow" />
<meta name="author" content="<?php echo $company['ten']?>" />
<meta http-equiv="content-language" content="vi" />
<link rel="canonical" href="<?php echo getCurrentPageURL()?>" />
<link href="/<?php echo _upload_hinhanh_l.$company['faviconthumb']?>" rel="shortcut icon" type="image/x-icon" />
<meta property="og:image" content="<?=$images_facebook?>" />
<meta property="og:title" content="<?=$title_facebook?>" />
<meta property="og:url" content="<?=$url_facebook?>" />
<meta property="og:site_name" content="http://<?=$config_url?>/" />
<meta property="og:description" content="<?=$description_facebook?>" />
<meta property="og:type" content="website" />
<meta property="og:site_name" content="<?=$company['ten']?>" />
<!-- <meta property="fb:app_id" content="917571318303635" />-->
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />