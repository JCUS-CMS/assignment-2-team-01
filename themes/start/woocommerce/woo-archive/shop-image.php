<?php
if ( true == get_theme_mod( 'swp_shop_thumbnail_linkable', true ) ) :
	echo '<div class="swp-archive-image"><a href="' . esc_url( get_the_permalink() ) . '" class="swp-loop-product__link">';
		do_action( 'swp_woocommerce_show_product_loop_sale_flash' );
		do_action( 'swp_woocommerce_template_loop_product_thumbnail' );
	echo '</a></div>';
else : 
	echo '<div class="swp-archive-image">';
		do_action( 'swp_woocommerce_show_product_loop_sale_flash' );
		do_action( 'swp_woocommerce_template_loop_product_thumbnail' );
	echo '</div>';
endif;
?>