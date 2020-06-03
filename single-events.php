<?php

get_header();

?>

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/events.css">
<main class="Contents">

<div class="Head">

	<div class="pankuzu">
		<ul>
			<li><a href="/"><i class="material-icons">home</i></a></li>
			<li><a href="/events/">EVENT</a></li>
            <li><a href="<?php the_permalink(); ?>"><?php the_field('custom_title'); ?></a></li>
		</ul>
	</div>

	<div class="title">
		<h1>
			<span lang="ja">イベント情報</span>
			<span lang="en">EVENT</span>
		</h1>
	</div>

</div>



<div class="Events detail">

	<h2>
        <?php the_field('flex_content_text'); ?>
        <?php if( get_field('custom_rb') == 'コンサート'): ?>
            <span class="icon"><i class="material-icons">record_voice_over</i>コンサート</span>
        <?php else : ?>
            <span class="icon"><i class="material-icons">directions_run</i>スポーツ</span>
        <?php endif; ?>
	</h2>

	<div class="body">
         <?php
            //$arg = array('post_type' => 'events');
            $arg = get_field('flex');
            $event_posts = get_posts($arg);
        ?>
        <?php foreach($event_posts as $post): ?>
        <p>
            <?php echo get_field('flex_gallery'); ?>
        </p>
        <?php endforeach; ?>
		<p>
        <img class="alignleft" src="<?php echo get_template_directory_uri(); ?>/assets/images/events/sampleimage.jpg" alt="">
			体育施設、スポーツアリーナ、そして「FLAT」へ。<br>
			<br>
			私たちは、スポーツが本来持っている普遍的・社会的な価値を多くの方々へ広く伝え、市場自体を活性化し大きくしていくという考え方で、様々な事業に取り組んでいます。そのアプローチのひとつに、スポーツアリーナの運営があります。スポーツビジネスに携わる総合的な事業者として施設の設計・運営までフェアに関わっていくことは、「スポーツが持つ力で日本の未来をより良くしていきたい」という私たちのビジョンを具現化し得る、大切な取り組みだと考えています。
		</p>
		<p>
			<img class="aligncenter" src="<?php echo get_template_directory_uri(); ?>/assets/images/events/sampleimage.jpg" alt="">
			体育施設、スポーツアリーナ、そして「FLAT」へ。<br>
			<br>
			私たちは、スポーツが本来持っている普遍的・社会的な価値を多くの方々へ広く伝え、市場自体を活性化し大きくしていくという考え方で、様々な事業に取り組んでいます。そのアプローチのひとつに、スポーツアリーナの運営があります。スポーツビジネスに携わる総合的な事業者として施設の設計・運営までフェアに関わっていくことは、「スポーツが持つ力で日本の未来をより良くしていきたい」という私たちのビジョンを具現化し得る、大切な取り組みだと考えています。
		</p>
	
		<p>
			<img class="alignright" src="<?php echo get_template_directory_uri(); ?>/assets/images/events/sampleimage.jpg" alt="">
			体育施設、スポーツアリーナ、そして「FLAT」へ。<br>
			<br>
			私たちは、スポーツが本来持っている普遍的・社会的な価値を多くの方々へ広く伝え、市場自体を活性化し大きくしていくという考え方で、様々な事業に取り組んでいます。そのアプローチのひとつに、スポーツアリーナの運営があります。スポーツビジネスに携わる総合的な事業者として施設の設計・運営までフェアに関わっていくことは、「スポーツが持つ力で日本の未来をより良くしていきたい」という私たちのビジョンを具現化し得る、大切な取り組みだと考えています。
		</p>
	
		<p>
			<img class="alignnone" src="<?php echo get_template_directory_uri(); ?>/assets/images/events/sampleimage.jpg" alt="">
			体育施設、スポーツアリーナ、そして「FLAT」へ。<br>
			<br>
			私たちは、スポーツが本来持っている普遍的・社会的な価値を多くの方々へ広く伝え、市場自体を活性化し大きくしていくという考え方で、様々な事業に取り組んでいます。そのアプローチのひとつに、スポーツアリーナの運営があります。スポーツビジネスに携わる総合的な事業者として施設の設計・運営までフェアに関わっていくことは、「スポーツが持つ力で日本の未来をより良くしていきたい」という私たちのビジョンを具現化し得る、大切な取り組みだと考えています。
		</p>
	</div>
	
	<div class="toindex">
		<a class="fl8-btn-white back" href="/events/">全てのイベント情報へ戻る</a>
	</div>

</div>

</main>

<?php get_footer(); ?>
