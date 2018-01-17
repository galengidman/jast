<?php

function jast_nothing_found() {

	return esc_html__( 'Nothing found.', 'jast' );

}

function jast_entry_meta() {

	?>

	<time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo get_the_date(); ?></time>
	<span class="sep"></span>
	<?php the_author_posts_link(); ?>
	<span class="sep"></span>
	<a href="<?php echo esc_url( get_comments_link() ); ?>"><?php comments_number(); ?></a>

	<?php

}
