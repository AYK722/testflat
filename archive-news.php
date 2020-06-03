<?php

/*
Template Name: news
*/


get_header();

?>

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/news.css">
<main class="Contents">

<div class="Head">

	<div class="pankuzu">
		<ul>
			<li><a href="/"><i class="material-icons">home</i></a></li>
			<li><a href="/news/">NEWS</a></li>
		</ul>
	</div>

	<div class="title">
		<h1>
			<span lang="ja">お知らせ</span>
			<span lang="en">NEWS</span>
		</h1>
	</div>

</div>



<div class="News index">
	
	<div class="list">

        <ul>
            <?php
                $arg = array('post_type' => 'news');
                $news_posts = new WP_Query($arg);
            ?>
            <?php foreach($news_posts->posts as $post): ?>
                <li>
                <?php //var_dump($post); ?>
                <a href="<?php the_permalink(); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/news/sampleimage_thum.jpg" alt="">
                    <?php the_title(); ?>
                    <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y/m/d'); ?></time>
                    <small><?php the_excerpt(); ?></small>
				</a>
                </li>
            <?php endforeach; ?>
		</ul>
	</div>

<?php 
    if ( function_exists( 'pagination' ) ) :
        pagination( $wp_query->max_num_pages, get_query_var( 'paged' ) );
    endif; 
?>
	<div class="pager">
		<ul>
			<li><a href="#">1</a></li>
			<li><a href="#">2</a></li>			
			<li class="selected">3</li>
			<li><a href="#">4</a></li>
			<li><a href="#">5</a></li>
			<li><a href="#">6</a></li>
			<li><a href="#">7</a></li>
			<li><a href="#">8</a></li>
			<li><a href="#">9</a></li>
			<li><a href="#">10</a></li>
			<li><a href="#">11</a></li>
			<li><a href="#">12</a></li>
			<li><a href="#">13</a></li>
			<li><a href="#">14</a></li>
			<li><a href="#">15</a></li>
			<li><a href="#">16</a></li>
			<li><a href="#">17</a></li>
			<li><a href="#">18</a></li>
			<li><a href="#">19</a></li>
			<li><a href="#">20</a></li>
			<li><a href="#">21</a></li>
			<li><a href="#">22</a></li>
			<li><a href="#">23</a></li>		
		</ul>
	</div>
	
</div>

</main>

<?php get_footer(); ?>
