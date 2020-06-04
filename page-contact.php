<?php
/*
Template Name: contact
*/

get_header();

?>

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/contact.css">
<main class="Contents">

<div class="Head">

	<div class="pankuzu">
		<ul>
			<li><a href="/"><i class="material-icons">home</i></a></li>
			<li><a href="/contact/">お問い合わせ</a></li>
		</ul>
	</div>

	<div class="title">
		<h1>
			<span lang="ja">お問い合わせ</span>
			<span lang="en">CONTACT</span>
		</h1>
	</div>

</div>


<div class="Contact">

	<div class="form">
        <?php
            //echo do_shortcode('[contact-form-7 id="133" title="テストフォーム"]');
            echo do_shortcode('[mwform_formkey key="138"]');
        ?>
    </div>

	<div class="phone">
		<h3><span>お電話・FAXは</span><span>以下よりお問い合わせください。</span></h3>

		<dl>
			<dt><i class="material-icons">phone</i></dt>
			<dd><a href="tel:0178-20-7821">0178-20-7821</a></dd>
			<dt><i class="material-icons">local_printshop</i></dt>
			<dd>0178-20-7822</dd>
		</dl>
	</div>


</div>

</main>

<?php get_footer(); ?>
