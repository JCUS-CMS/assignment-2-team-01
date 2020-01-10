<?php
	echo $cate = sprintf(
		'<span class="category">' .
		esc_html_x( 'Cat %s', 'post Category', 'start' ),
		get_the_category_list( esc_html__( ', ', 'start' ) ) . '</span>'
	);
?>