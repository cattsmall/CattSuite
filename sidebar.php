<!-- sidebar -->
<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<section role="sidebar" class="one-fourth right blog-sidebar widget-area fixed">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
		<button class="btn absolute right top hidden-tablet-horiz">Show/Hide</button>
	</section>
<?php endif; ?>
