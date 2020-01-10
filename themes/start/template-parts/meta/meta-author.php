<?php
echo $byline = sprintf(
	'<span class="author vcard">' .
	esc_html_x( 'By %s', 'post author', 'start' ),
	'<a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
);
?>