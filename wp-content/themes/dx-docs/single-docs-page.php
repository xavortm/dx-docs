<?php get_header(); ?>

<div class="section-viewport">
	<aside class="viewport-aside">
		<?php get_template_part( 'partials/section', 'pages' ); ?>
	</aside><!-- /viewport-aside -->

	<main class="viewport-main main-wrapper">
		<?php get_template_part( 'partials/section', 'main' ); ?>
	</main><!-- /viewport-main -->
</div>

<?php get_footer(); ?>