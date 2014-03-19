<?php
/*
Template Name: About
*/
get_header(); ?>

<!-- content -->
<div class="content">
	<!-- portfolio work & blog -->
	<section class="three-fourths auto-margin blog-page about main-content-container">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>

			<?php else : ?>
				<p>There are no blog posts.</p>
			<?php endif; ?>
	</section>
	<div class="clearfix"></div>
</div>

<?php get_footer(); ?>