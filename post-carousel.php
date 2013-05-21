<!-- carousel -->
<section <?php post_class('carousel slide'); ?>>
	<!-- portfolio carousel -->
	<article class="carousel-inner">
		<?php
		$args = array( 'post_type' => 'attachment', 'numberposts' => -1, 'post_status' => null, 'post_parent' => $post->ID ); 
		$attachments = get_posts($args);
		if ($attachments) {
				foreach ( $attachments as $attachment ) {
					echo '<figure class="item"><img src="'. wp_get_attachment_url( $attachment->ID) .'"></figure>';
			}
		}
		?>
	</article>
	<a class="left carousel-control ss-icon ss-standard" href=".carousel.post-<?php the_ID(); ?>" data-slide="prev">&#x25C5;</a>
	<a class="right carousel-control ss-icon ss-standard" href=".carousel.post-<?php the_ID(); ?>" data-slide="next">&#x25BB;</a>
</section>
