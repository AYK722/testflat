<?php

get_header();

?>

<main class="Contents">

<div class="Index">

	<div class="main">

		<div class="logo">
        <h1><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/flat_logo.svg" alt="FLAT HACHINOHE | フラット八戸"></h1>
		</div>

		<div class="visual">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/index/main.jpg" alt="">
		</div>

		<div class="news" id="news">
			<dl>
                <dt>NEWS</dt>
                <?php
                    $arg = array('category_name' => 'news');
                    $news_posts = get_posts($arg);
                ?>
                <?php foreach ($news_posts as $post): ?>
				<dd class="news-item">
                <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </dd>
                <?php endforeach; ?>
			</dl>
			<a class="fl8-btn-black" href="/news">全てのNEWSを見る</a>
		</div>

	</div>



	<div class="body">
		<div class="events">
			<h2>イベント情報</h2>
            <ul>
                <?php
                    $arg = array('category_name' => 'events');
                    $event_posts = get_posts($arg);
                ?>
                <?php foreach($event_posts as $post): ?>
                <li>
					<span class="icon"><i class="material-icons">record_voice_over</i>コンサート</span>
                    <a href="<?php the_permalink(); ?>">
                    <time><?php the_time('Y.m.d'); ?></time>
                    <?php the_title(); ?>
					</a>
				</li>
                <?php endforeach; ?>
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
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/index/sponsor_logo_panasonic.png" alt="パナソニック">
					</a>
				</li>
				<li>
					<a href="https://www.toda.co.jp/" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/assete/images/index/sponsor_logo_toda.png" alt="戸田建設">
				</li>
				<li>
					<a href="http://www.denon-eng.co.jp/" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/index/sponsor_logo_denon.png" alt="電音エンジニアリング">
				</li>
				<li>
					<a href="https://pro.bose.com/ja_jp/products/spaces/sports.html" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/index/sponsor_logo_bose.png" alt="BOSE">
				</li>
				<li>
					<a href="https://aomori-energy.co.jp/" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/index/sponsor_logo_aomori.png" alt="青森県民エナジー">
				</li>
				<li>
					<a href="https://shinseibt.co.jp/" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/index/sponsor_logo_shinsei.png" alt="新生ビルテクノ株式会社">
					</a>
				</li>
			</ul>
		</div>
	</div>

</div>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/news.js"></script>

</main>

<?php get_footer(); ?>
