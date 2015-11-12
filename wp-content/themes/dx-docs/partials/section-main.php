<div class="main-content">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<span class="button edit-page"><?php _e( 'Edit Page', THEME_DOMAIN ); ?></span>

	<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry' ); ?>>
		<h1 class='entry-title'><?php the_title(); ?></h1>
		<div class="entry-content visual" id="editor-visual"><?php the_content(); ?></div>

		<?php if( current_user_can( 'edit_pages' ) ) : ?>
			<div class='entry-content editor is-hidden' id="editor-markdown"><!-- empty --></div>
		<?php endif; ?>

	</article>
<?php endwhile; else : ?>
	<p class='notice'><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
</div><!-- /main-content -->