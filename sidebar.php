<div id="sidebar-primary" class="sidebar">

	<?php if ( is_active_sidebar( 'primary' ) ) : ?>

		<?php dynamic_sidebar( 'primary' ); ?>

	

		<!-- Create some custom HTML or call the_widget().  It's up to you. -->

	<?php endif; ?>

</div>