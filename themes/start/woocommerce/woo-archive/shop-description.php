<?php
if ( ! function_exists( 'swp_woo_shop_product_short_description' ) ) :

	function swp_woo_shop_product_short_description() {
	?>
	<?php if ( has_excerpt() ) { ?>
		<div class="swp-archive-description">
			<?php the_excerpt(); ?>
		</div>
	<?php } ?>
	<?php
	}
endif;
swp_woo_shop_product_short_description();