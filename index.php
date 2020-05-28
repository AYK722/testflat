<?php

$body_class = 'index';
$page_assets = '<link rel="stylesheet" type="text/css" href="'.get_assets_path().'/css/index.css">';

$meta_title = 'FLAT HACHINOHE';
$meta_description = 'FLAT HACHINOHEは、青森県八戸市のJR八戸駅西地区に設立された、多くの市民に愛され「氷都・八戸」のシンボルであるアイスホッケー、アイススケートを中心とした様々なスポーツをはじめ、学校教育や地域行事にも活用していただくなど、すべての人に開かれた優れたユーティリティを備える、日本初となる真の多目的空間となります。';
$meta_keywords = '八戸,フラット,FLAT,フラット八戸、八戸アリーナ、フラットアリーナ、アイスアリーナ';

get_header();
?>


<main class="Contents">

<div class="Index">

	<div class="main">

		<div class="logo">
        <h1><img src="<?php echo get_assets_path(); ?>/images/common/flat_logo.svg" alt="FLAT HACHINOHE | フラット八戸"></h1>
		</div>

		<div class="visual">
        <img src="<?php echo get_assets_path(); ?>/images/index/main.jpg" alt="">
		</div>

		<div class="news" id="news">
			<dl>
				<dt>NEWS</dt>
				<dd class="news-item active">
					<time datetime="2020-03-21">2020.03.21</time>
					<a href="/news/detail/">【STARS ON ICE】出演予定スケーター第3弾発表！</a>
				</dd>
				<dd class="news-item">
					<time datetime="2020-03-21">2020.02.15</time>
					<a href="/news/detail/">【お知らせ】ここにお知らせが入りますここにお知らせが入ります</a>
				</dd>
				<dd class="news-item">
					<time datetime="2020-03-21">2020.01.01</time>
					<a href="/news/detail/">【イベント名イベント名】テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</a>
				</dd>
			</dl>
			<a class="fl8-btn-black" href="/news">全てのNEWSを見る</a>
		</div>

	</div>



	<div class="body">
		<div class="events">
			<h2>イベント情報</h2>
			<ul>
				<li>
					<span class="icon"><i class="material-icons">directions_run</i>スポーツ</span>
					<a href="/events/detail/">
					<time>2020.03.21</time>
					イベント名が入ります。ダミーダミーダミーダミー
					</a>
				</li>
				<li>
					<span class="icon"><i class="material-icons">record_voice_over</i>コンサート</span>
					<a href="/events/detail/">
					<time>2020.03.21</time>
					イベント名が入ります。ダミーダミーダミーダミー
					</a>
				</li>
				<li>
					<span class="icon"><i class="material-icons">directions_run</i>スポーツ</span>
					<a href="/events/detail/">
					<time>2020.03.21</time>
					イベント名が入ります。ダミーダミーダミーダミー
					</a>
				</li>
				<li>
					<span class="icon"><i class="material-icons">record_voice_over</i>コンサート</span>
					<a href="/events/detail/">
					<time>2020.03.21</time>
					イベント名が入ります。ダミーダミーダミーダミー
					</a>
				</li>
			</ul>
			<a class="fl8-btn-black" href="/events/">全てのイベント情報を見る</a>
		</div>
		<div class="about">
			<h2>施設概要</h2>
			<div class="summary">
				<h3>FLAT八戸とは？</h3>
				<p>
					FLAT HACHINOHEは、青森県八戸市のJR八戸駅西地区に建設予定です。<br>
					多くの市民に愛され「氷都・八戸」のシンボルであるアイスホッケー、アイススケートを中心とした様々なスポーツをはじめ、学校教育や地域行事にも活用していただくなど、すべての人に開かれた優れたユーティリティを備える、日本初となる真の多目的空間となります。
				</p>
			</div>
			<a class="fl8-btn-black" href="/about/">コンセプトを詳しく見る</a>
		</div>
		<div class="sponsor">
			<h2>SPONSORED</h2>
			<ul>
				<li>
					<a href="https://www2.panasonic.biz/ls/lighting/" target="_blank">
                    <img src="<?php echo get_assets_path(); ?>/images/index/sponsor_logo_panasonic.png" alt="パナソニック">
					</a>
				</li>
				<li>
					<a href="https://www.toda.co.jp/" target="_blank">
						<img src="<?php echo get_assets_path(); ?>/images/index/sponsor_logo_toda.png" alt="戸田建設">
				</li>
				<li>
					<a href="http://www.denon-eng.co.jp/" target="_blank">
						<img src="<?php echo get_assets_path(); ?>/images/index/sponsor_logo_denon.png" alt="電音エンジニアリング">
				</li>
				<li>
					<a href="https://pro.bose.com/ja_jp/products/spaces/sports.html" target="_blank">
						<img src="<?php echo get_assets_path(); ?>/images/index/sponsor_logo_bose.png" alt="BOSE">
				</li>
				<li>
					<a href="https://aomori-energy.co.jp/" target="_blank">
						<img src="<?php echo get_assets_path(); ?>/images/index/sponsor_logo_aomori.png" alt="青森県民エナジー">
				</li>
				<li>
					<a href="https://shinseibt.co.jp/" target="_blank">
						<img src="<?php echo get_assets_path(); ?>/images/index/sponsor_logo_shinsei.png" alt="新生ビルテクノ株式会社">
					</a>
				</li>
			</ul>
		</div>
	</div>

</div>

<script src="<?php echo get_assets_path(); ?>/js/news.js"></script>

</main>

<?php get_footer(); ?>
