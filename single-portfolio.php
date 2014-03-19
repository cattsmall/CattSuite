<?php
/*
Single Post Template: Portfoli
Description: This part is optional, but helpful for describing the Post Template
*/

get_header('single'); ?>

<!-- content -->
<div class="content portfolio-page portfolio-single">
	<!-- portfolio work & blog -->
	<?php include(TEMPLATEPATH."/sidebar-2.php");?>
	<section class="nineteen-twentieths main-content-container">
		<section class="blog">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article <?php post_class(); ?>>
               <div class="post-content">
   					<header><h1><?php the_title();?> <span class="portfolio-post-year"><?php the_time('Y') ?></span></h1></header>
   					<?php the_content(); ?>
   					<p>
   						<?php
   						$source_meta = get_post_meta(get_the_ID(), 'source');
   						$outicon = '';
   						if(count($source_meta)) {
   							$sourcelink = $source_meta[0];
   							$outlink = '<a href="'.$sourcelink.'" class="btn btn-cta" target="_blank">Visit the website <i class="ss-icon ss-standard">&#xEE00;</i></a>';
   						}
   						echo $outlink;
   						?>
   						</p>
   					<?php
   					$args = array( 'post_type' => 'attachment', 'numberposts' => -1, 'post_status' => null, 'post_parent' => $post->ID ); 
   					$attachments = get_posts($args);
   					if ($attachments) {
   							foreach ( $attachments as $attachment ) {
   								echo '<figure class="item"><img src="'. wp_get_attachment_url( $attachment->ID) .'"></figure>';
   						}
   					}
   					?>
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

<?php get_footer('portfolio-inner'); ?>