<?php
/**
 * @package WordPress
 * @subpackage Catt_Theme
 */

get_header('single'); ?>

<!-- content -->
<div class="content">
	<!-- portfolio work & blog -->
	<?php get_sidebar(); ?>
	<section class="three-fourths">
		<section class="blog">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article <?php post_class(); ?>>
               <div class="post-content">
   					<header><h1><?php the_title(); ?></h1></header>
   					<section class="meta"><?php entry_meta(); ?> - <a href="<?php echo esc_url( home_url( '/' ) ); ?>blog">Back to all blog posts</a></section>
   					<?php the_content(); ?>
               </div>
					<?php comments_template( '', true ); ?>
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