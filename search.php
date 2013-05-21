<?php
/*
Template Name: Search Page
*/

get_header(); ?>

<!-- content -->
<div class="content">
	<!-- portfolio work & blog -->
	<?php get_sidebar(); ?>
	<section class="three-fourths blog-page">
		<section class="blog">
			<header><h2><?php printf( __( 'Search Results for: %s', 'twentytwelve' ), '<span>' . get_search_query() . '</span>' ); ?></h2></header>	
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article  <?php post_class(); ?>>
					<header><h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1></header>
					<section class="meta"><?php entry_meta(); ?></section>
					<?php the_excerpt(); ?>
				</article>
			<?php endwhile; ?>

			<?php else : ?>
				<p>Sorry, but nothing matched your search criteria.</p>
			<?php endif; ?>
		</section>
	</section>
	<div class="clearfix"></div>
</div>

<?php get_footer(); ?>