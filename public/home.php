<?php get_header(); ?>
<!-- container -->
<div class="container">
	<?php get_template_part('template-parts/kv'); ?>
	<!-- main -->
	<main class="main">
		<?php get_template_part('template-parts/home/about'); ?>
		<?php get_template_part('template-parts/home/news'); ?>
		<?php get_template_part('template-parts/home/menu'); ?>
		<?php //get_template_part('template-parts/home/equipment'); 
		?>
		<?php get_template_part('template-parts/home/service'); ?>
		<?php get_template_part('template-parts/home/access'); ?>
		<?php get_template_part('template-parts/home/contact'); ?>
	</main>
	<!-- /main -->
	<?php get_footer(); ?>
