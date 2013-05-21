<?php
/*
Template Name: Sales
*/
get_header(); ?>

<!-- content -->
<div class="content">
	<section <?php post_class('three-fourths auto-margin blog-page'); ?>>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<header class="special-title"><h1><?php the_title(); ?></h1></header>
			<?php the_content(); ?>
		<?php endwhile; ?>

		<?php else : ?>
			<p>There are no blog posts.</p>
		<?php endif; ?>
	</section>
	<div class="clearfix"></div>
</div>

<?php get_footer(); ?>