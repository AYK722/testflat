<?php
    global $body_class;
    global $page_assets;
    global $meta_title;
    global $meta_description;
    global $meta_keywords;
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
    <title><?php echo $meta_title ?: 'FLAT HACHINOHE | フラット八戸' ?></title>
    <meta name="description" content="<?php echo $meta_description ?: 'クロススポーツマーケティング株式会社は、民間と行政の本格的な連携による日本初の地域密着型多目的エリア「FLATHACHINOHE（フラット八戸）」を、2020年春の開業を目指し、青森県八戸市のJR八戸駅西地区に着工いたします。' ?>">
    <meta name="keywords" content="<?php echo $meta_keywords ?: '八戸,フラット,FLAT,フラット八戸,八戸アリーナ,フラットアリーナ,アイスアリーナ' ?>">
    <meta name="format-detection" content="telephone=no">

	<!-- OGP -->
	<meta property="og:locale" content="ja_JP">
	<meta property="og:type" content="website">
	<meta property="og:site_name" content="FLAT HACHINOHE | フラット八戸">
    <meta property="og:title" content="<?php echo $meta_title ?: 'FLAT HACHINOHE | フラット八戸' ?>">
    <meta property="og:description" content="<?php echo $meta_description ?: 'クロススポーツマーケティング株式会社は、民間と行政の本格的な連携による日本初の地域密着型多目的エリア「FLATHACHINOHE（フラット八戸）」を、2020年春の開業を目指し、青森県八戸市のJR八戸駅西地区に着工いたします。' ?>">
	<meta property="og:url" content="https://flathachinohe.com/">
	<meta property="og:image" content="https://flathachinohe.com/og_image.jpg">

	<!-- 共通CSS / JS -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:300,400,500,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo get_assets_path(); ?>/css/responsive.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_assets_path(); ?>/css/common.css">

	<!-- 個別CSS / JS -->
    <?php echo $page_assets; ?>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-128036866-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-128036866-1');
	</script>


    <?php wp_head(); ?>
</head>
<body class="<?php echo $body_class; ?>" onclick="try{querySelector('header .menu li.open').classList.remove('open')}catch(e){}">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5W3NF77"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<header>

	<div class="logo">
		<a href="/"><img src="<?php echo get_assets_path(); ?>/images/common/flat_logo.svg" alt="FLAT HACHINOHE | フラット八戸"></a>
	</div>

	<div class="menu">
		<nav>
			<ul>
				<li class="home"><a href="/">HOME</a></li>
				<li><a href="/news/">NEWS</a></li>
				<li><a href="/icerink/">アイスリンク利用</a></li>
				<li><a href="/events/">イベント情報</a></li>
				<li><a href="https://p-kashikan.jp/flathachinohe/" target="_blank">施設予約</a></li>
				<li><a href="/about/">施設概要</a></li>
				<li><a href="/prices/prices.pdf" target="_blank">料金表</a></li>
				<li><a href="/contact/">お問い合わせ</a></li>
			</ul>
		</nav>
		<button type="button" ontouchstart="this.parentNode.classList.toggle('open');event.preventDefault()">
			<i class="material-icons">menu</i>
			<i class="material-icons">close</i>
		</button>
	</div>

</header>
