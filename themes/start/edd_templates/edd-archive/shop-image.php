<?php if ( function_exists( 'has_post_thumbnail' ) && has_post_thumbnail( get_the_ID() ) ) : ?>
	<?php if ( true == get_theme_mod( 'swp_edd_archive_thumbnail_linkable', true ) ) : ?>
		<div class="edd_download_image">
			<a href="<?php the_permalink(); ?>">
				<?php echo get_the_post_thumbnail( get_the_ID(), 'thumbnail' ); ?>
			</a>
		</div>
	<?php else : ?>
		<div class="edd_download_image">
				<?php echo get_the_post_thumbnail( get_the_ID(), 'thumbnail' ); ?>
		</div>
	<?php endif; ?>
<?php endif; ?>
