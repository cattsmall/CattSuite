<?php
/*
Single Post Template: Portfolio
Description: This part is optional, but helpful for describing the Post Template
*/

get_header('single'); ?>

<!-- content -->
<div class="content">
	<!-- portfolio work & blog -->
	<?php include(TEMPLATEPATH."/sidebar-2.php");?>
	<section class="three-fourths right">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article <?php post_class('portfolio'); ?>>
				<?php include (TEMPLATEPATH . '/post-carousel.php' ); ?>
				<section>
					<header>
						<?php 
						$link = get_permalink();
						$source_meta = get_post_meta(get_the_ID(), 'source');
						$outicon = '';
						if(count($source_meta)) {
							$sourcelink = $source_meta[0];
							$outicon = '<a href="'.$sourcelink.'" rel="tooltip" data-title="Visit the website" target="_blank"><i class="ss-icon ss-standard">&#xEE00;</i></a>';
						}
						?>
						<h1><a href="<?php echo $link; ?>"><?php the_title(); ?></a> <?php echo $outicon; ?> <span class="portfolio-post-year"><?php the_time('Y') ?></span></h1>
					</header>
					<div>
						<?php the_excerpt(); ?>
					</div>
				</section>
				<div class="clearfix"></div>
			</article>
		<?php endwhile; ?>
		<div class="clearfix"></div>	
		<?php else : ?>
			<p>There are no portfolio posts.</p>
		<?php endif; ?>
	</section>
	<div class="clearfix"></div>
</div>

<?php get_footer(); ?>