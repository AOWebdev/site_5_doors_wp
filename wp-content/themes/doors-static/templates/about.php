<?php
// Template Name: О компании
get_header();
?>
<!-- О компании -->
<div class="about-company" style="background-image: url(<?= CFS()->get('about_bg'); ?>)">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<img src="<?= CFS()->get('about_img'); ?>" alt="О компании">
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</div>
<?php get_header('advantages'); ?>
<!-- Технический паспорт -->
<div class="pasport" style="background-image: url(<?= CFS()->get('about_passport_bg'); ?>)">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2><?= CFS()->get('about_pasport_title'); ?></h2>
				<p><?= CFS()->get('about_pasport_text'); ?></p>
				<a href="<?= CFS()->get('about_passport_open'); ?>" class="btn" target="_blank"><?= CFS()->get('about_passport_button_btn'); ?></a>
				<a href="<?= CFS()->get('about_passport_download'); ?>" class="btn" download=""><?= CFS()->get('about_passport_button_download'); ?></a>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>