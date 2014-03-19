<?php
/*
Template Name: Home
*/
get_header('home'); ?>

<!-- carousel -->
<!-- <section id="headerCarousel" class="carousel slide"> -->
	<!-- catt illust + text -->
	<!-- <article class="catt">
		<figure>
			<div class="body"></div> -->
			<!-- <figcaption>Looking for an experienced Graphic &amp; Web Designer? You’ve found one.</figcaption> -->
		<!-- </figure>
	</article> -->
	<!-- portfolio carousel -->
	<!-- <article class="carousel-inner">
		<figure class="item active"></figure>
		<figure class="item"></figure>
		<figure class="item"></figure>
		<figure class="item"></figure>
		<figure class="item"></figure>
		<figure class="item"></figure>
		<figure class="item"></figure>
	</article>
	<a class="left carousel-control ss-icon ss-standard" href="#headerCarousel" data-slide="prev">&#x25C5;</a>
	<a class="right carousel-control ss-icon ss-standard" href="#headerCarousel" data-slide="next">&#x25BB;</a>
</section> -->

<!-- content -->
<div class="content">
	<?php get_sidebar('skills'); ?>
	<!-- portfolio work & blog -->
	<section class="three-fourths main-content-container">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; ?>

		<?php else : ?>

			<h2>Not Found</h2>

		<?php endif; ?>
		<section class="portfolio">
			<header>
				<h2>Recent Work</h2>
				<a href="portfolio" class="seemore-link">see all</a>
			</header>
			<!-- query portfolio -->
			<?php query_posts('category_name=portfolio&showposts=2'); ?>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article <?php post_class('half'); ?>>
					<hgroup>
						<section class="post-thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></section>
							<?php 
							$link = get_permalink();
							$source_meta = get_post_meta(get_the_ID(), 'source');
							if(count($source_meta)) {
								$sourcelink = $source_meta[0];
								$outicon = '<a href="'.$sourcelink.'" rel="tooltip" data-title="Visit the website" target="_blank"><i class="ss-icon ss-standard">&#xEE00;</i></a>';
							}
							?>
							<h1><?php 
								if(has_category("Web Design")) {
									$categoryicon = '<i class="ss-icon ss-standard" rel="tooltip" data-title="Web Design">&#x1F30E;</i>';
									echo $categoryicon;
								}
								if(has_category("Mobile Design")) {
									$categoryicon = '<i class="ss-icon ss-standard" rel="tooltip" data-title="Mobile Design">&#x1F4F1;</i>';
									echo $categoryicon;
								}
								if(has_category("Print Design")) {
									$categoryicon = '<i class="ss-icon ss-symbolicons-block" rel="tooltip" data-title="Print Design">&#x1F4D6;</i>';
									echo $categoryicon;
								}
								if(has_category("Game Art &amp; Design")) {
									$categoryicon = '<i class="ss-icon ss-symbolicons-block" rel="tooltip" data-title="Game Art & Design">&#x1F3AE;</i>';
									echo $categoryicon;
								}
								 ?> <a href="<?php echo $link; ?>"><?php the_title(); ?></a> <?php echo $outicon; ?> <span class="portfolio-post-year"><?php the_time('Y') ?></span></h1>
					</hgroup>
					<?php the_excerpt(); ?>
				</article>
			<?php endwhile; ?>
			<div class="clearfix"></div>	
			<?php else : ?>
				<p>There are no portfolio posts.</p>
			<?php endif; ?>
		</section>
		<section class="blog">
			<header>
				<h2>Recent Blog Posts</h2>
				<a href="blog" class="seemore-link">see all</a>
				<!-- <span>Jump to blog tags:</span>
				<a href="index.php?cat=2" class="seemore-link">Web Design</a>
				<a href="index.php?cat=2" class="seemore-link">Art</a>
				<a href="index.php?cat=2" class="seemore-link">Advice</a>
				<a href="index.php?cat=2" class="seemore-link">Tips &amp; Tricks</a>
				<a href="index.php?cat=2" class="seemore-link">Updates</a> -->
			</header>
			<!-- query blog -->
			<?php query_posts('category_name=blog&showposts=4'); ?>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article <?php post_class(); ?>>
					<header><h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1></header>
					<section class="meta"><?php entry_meta(); ?></section>
					<?php the_excerpt(); ?>
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