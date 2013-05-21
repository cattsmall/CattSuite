<?php
/**
 * @package WordPress
 * @subpackage Catt_Theme
 */

get_header(); ?>

<!-- content -->
<div class="content">
	<!-- portfolio work & blog -->
	<?php get_sidebar(); ?>
	<section class="three-fourths blog-page">
		<section class="blog">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article  <?php post_class(); ?>>
					<header><h1><?php the_title(); ?></h1></header>
					<section class="meta"><?php entry_meta(); ?></section>
					<?php the_content(); ?>
				</article>
			<?php endwhile; ?>

			<?php else : ?>
				<p>There are no blog posts.</p>
			<?php endif; ?>
		</section>
	</section>
	<div class="clearfix"></div>
</div>

<?php get_footer(); ?>