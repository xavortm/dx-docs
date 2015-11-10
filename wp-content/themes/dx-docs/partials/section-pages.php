<?php

$args = array(
	'title_li' => '',
	'post_type'=>'docs-page'
);

?>

<nav class="docs-pages">
	<ul class="pages-ul">
		<?php wp_list_pages( $args ); ?>
	</ul>
</nav>