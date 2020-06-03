<?php

/*
Template Name: events
*/

get_header();

?>

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/events.css">
<main class="Contents">

<div class="Head">

	<div class="pankuzu">
		<ul>
			<li><a href="/"><i class="material-icons">home</i></a></li>
			<li><a href="/events/">EVENT</a></li>
		</ul>
	</div>

	<div class="title">
		<h1>
			<span lang="ja">イベント情報</span>
			<span lang="en">EVENT</span>
		</h1>
	</div>

</div>



<div class="Events index">
	
	<div class="icons">
		<dl>
			<dt><i class="material-icons">directions_run</i></dt>
			<dd>スポーツ</dd>
			<dt><i class="material-icons">record_voice_over</i></dt>
			<dd>コンサート</dd>
		</dl>
	</div>
	<h2>2020年4月のイベント</h2>
    
    <?php
        $arg = array('post_type' => 'events');
        $events_posts = new WP_Query($arg);
    ?>
    <?php foreach($events_posts->posts as $post): ?>
	<ul>
		<li>
             <?php if (get_field('custom_rb') == 'コンサート') : ?>
				<span class="icon"><i class="material-icons">record_voice_over</i></span>
            <?php else : ?>
                <span class="icon"><i class="material-icons">directions_run</i></span>
            <?php endif; ?>
            <a href="<?php the_permalink(); ?>">
                <time><?php the_time('Y年m月d日'); ?></time>
                <?php the_field('flex_content_text'); ?>
			</a>
		</li>
    </ul>
    <?php endforeach; ?>
</div>

</main>


<?php get_footer(); ?>
