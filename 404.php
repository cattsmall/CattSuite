<?php
/**
 * @package WordPress
 * @subpackage Catt_Theme
 */

get_header(); ?>

<!-- content -->
<div class="content">
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
				<canvas id="game-404-canvas">
					<img style="margin:0 150px;" src="http://cattsmall.com/wp-content/uploads/2011/05/catt8.jpeg" alt="" width="250" height="463" />
					<h3>WHAT DID YOU DO?!</h3>
					<p>Somehow you broke my website. I don't know what you did, but you'll pay. How, you ask?</p>

					<p>Well...</p>

					<p><a href="http://cattsmall.com/about/#wpcf7-f872-p2-o1">Send me an email</a> and tell me what you did.</p>
				</canvas>
         
            <!--[if !IE]> -->
            <section class="canvas-controls visible-tablet visible-phone">
               <p>On a phone or tablet? Use these controls.</p>
               <ul>
                  <li>
                     <button class="button-up"><i class="ss-icon ss-standard">&#x25B4;</i></button>
                  </li>
                  <li>
                     <button class="button-left"><i class="ss-icon ss-standard">&#x25C3;</i></button>
                  </li>
                  <li>
                     <button class="button-down"><i class="ss-icon ss-standard">&#x25BE;</i></button>
                  </li>
                  <li>
                     <button class="button-right"><i class="ss-icon ss-standard">&#x25B9;</i></button>
                  </li>
               </ul>
            </section>
            <!-- <![endif]-->
            
			</article>
		<?php endif; ?>
	</section>
	<div class="clearfix"></div>
</div>

<?php get_footer('404'); ?>