<?php
echo $tags = sprintf(
		'<span class="tags">' . 
		esc_html_x( 'Tags %s', 'post Tags', 'start' ),
		get_the_tag_list( '', esc_html__( ', ', 'start' ) ) . '</span>'
	);
?>