<?php
/**
 * @package WordPress
 * @subpackage Catt_Theme
 */

get_header('home'); ?>

<!-- content -->
<div class="content">
	<?php get_sidebar(); ?>
	<section class="three-fourths main-content-container">
		<!-- blog -->
		<!-- <section class="blog"> -->
			<?php if ( is_home() ) {
				query_posts( 'cat=-21' );
				} 
				else {
				query_posts( array ( 'category_name' => 'my-category-slug', 'posts_per_page' => -1 ) );
				} ?>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article <?php post_class('excerpt'); ?>>
					<header><h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1></header>
					<section class="meta"><?php entry_meta(); ?></section>
					<?php the_excerpt(); ?>
				</article>
			<?php endwhile; ?>

			<?php else : ?>
				<p>There are no blog posts.</p>
			<?php endif; ?>
		<!-- </section> -->
	</section>
	<div class="clearfix"></div>
</div>

<?php get_footer(); ?>