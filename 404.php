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
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article  <?php post_class(); ?>>
				<header><h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1></header>
				<section class="meta"><?php entry_meta(); ?></section>
				<?php the_excerpt(); ?>
			</article>
		<?php endwhile; ?>

		<?php else : ?>
			<article  <?php post_class(); ?>>
				<img style="margin:0 150px;" src="http://cattsmall.com/wp-content/uploads/2011/05/catt8.jpeg" alt="" width="250" height="463" />
				<h3>WHAT DID YOU DO?!</h3>
				<p>Somehow you broke my website. I don't know what you did, but you'll pay. How, you ask?</p>

				<p>Well...</p>

				<p><a href="http://cattsmall.com/about/#wpcf7-f872-p2-o1">Send me an email</a> and tell me what you did.</p>
			</article>
		<?php endif; ?>
	</section>
	<div class="clearfix"></div>
</div>

<?php get_footer(); ?>