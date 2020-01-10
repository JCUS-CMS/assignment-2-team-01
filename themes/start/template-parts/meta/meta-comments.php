<?php
	if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<span class="comments-link">';
		comments_popup_link( esc_html__( 'Leave a comment', 'start' ), esc_html__( '1 Comment', 'start' ), esc_html__( '% Comments', 'start' ) );
		echo '</span>';
	}
?>