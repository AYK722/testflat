<?php

get_header();

?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/news.css">
<main class="Contents">

<div class="Head">

	<div class="pankuzu">
		<ul>
			<li><a href="/"><i class="material-icons">home</i></a></li>
			<li><a href="/news/">NEWS</a></li>
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
		</ul>
	</div>

	<div class="title">
		<h1>
			<span lang="ja">お知らせ</span>
			<span lang="en">NEWS</span>
		</h1>
	</div>

</div>


<div class="News detail">

	<h2>
        <?php the_title(); ?>
<time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y/m/d'); ?></time>
	</h2>

	<div class="body">
		<p>
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/news/sampleimage.jpg" alt="">
		</p>
	
        <p><?php the_content(); ?>
            <?php //the_excerpt(); ?>
		</p>	
	</div>

</div>

</main>
<?php get_footer(); ?>
