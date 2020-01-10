<?php
if ( true == get_theme_mod( 'swp_shop_title_linkable', true ) ) :
	echo '<div class="swp-archive-title"><a href="' . esc_url( get_the_permalink() ) . '" class="swp-loop-product__link">';
		do_action( 'swp_woocommerce_template_single_title' );
	echo '</a></div>';
else : 
	echo '<div class="swp-archive-title">';
		do_action( 'swp_woocommerce_template_single_title' );
	echo '</div>';
endif;
?>