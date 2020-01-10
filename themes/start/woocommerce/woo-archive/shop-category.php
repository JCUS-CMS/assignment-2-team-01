<?php
if ( ! function_exists( 'swp_woo_shop_parent_category' ) ) :
	function swp_woo_shop_parent_category() {
		if ( apply_filters( 'swp_woo_shop_parent_category', true ) ) : ?>
			<div class="swp-archive-category">
				<?php
				global $product;
				$product_categories = function_exists( 'wc_get_product_category_list' ) ? wc_get_product_category_list( get_the_ID(), ',', '', '' ) : $product->get_categories( ',', '', '' );

				$product_categories = strip_tags( $product_categories );
				if ( $product_categories ) {
					list( $parent_cat ) = explode( ',', $product_categories );
					echo esc_html( $parent_cat );
				}
				?>
			</div> 
			<?php
		endif;
	}
endif;
swp_woo_shop_parent_category();

