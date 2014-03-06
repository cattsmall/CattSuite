<?php
/*
Template Name: Portfolio
*/
get_header('portfolio'); ?>

<!-- content -->
<div class="content portfolio-page">
	<?php get_sidebar('left'); ?>
	<section class="four-fifths right">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; ?>

		<?php else : ?>

			<h2>Not Found</h2>

		<?php endif; ?>
		<!-- web -->
		<section id="web">
			<header>
				<h2><i class="ss-icon ss-standard">&#x1F30E;</i> Web Design</h2>
			</header>
			<?php query_posts('category_name=web-design-portfolio'); ?>
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
		<!-- mobile -->
		<section id="mobile">
			<header>
				<h2><i class="ss-icon ss-standard">&#x1F4F1;</i> Mobile Design</h2>
			</header>
			<?php query_posts('category_name=mobile-design-portfolio'); ?>
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
		<!-- print -->
		<section id="print">
			<header>
				<h2><i class="ss-icon ss-symbolicons-block">&#x1F4D6;</i> Print Design</h2>
			</header>
			<?php query_posts('category_name=print-design-portfolio'); ?>
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
		<!-- game -->
		<section id="game">
			<header>
				<h2><i class="ss-icon ss-symbolicons-block">&#x1F3AE;</i> Game Art &amp; Design</h2>
			</header>
			<?php query_posts('category_name=game-art-portfolio'); ?>
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
	</section>
	<div class="clearfix"></div>
</div>

<?php get_footer('portfolio'); ?>