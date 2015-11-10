<div class="main-content">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry' ); ?>>
		<h1 class='entry-title'><?php the_title(); ?></h1>
		<div class="entry-content"><?php the_content(); ?> </div>
	</article>
<?php endwhile; else : ?>
	<p class='notice'><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
</div><!-- /main-content -->