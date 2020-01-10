<?php $item_prop = edd_add_schema_microdata() ? ' itemprop="name"' : ''; ?>
<?php if ( true == get_theme_mod( 'swp_edd_archive_title_linkable', true ) ) : ?>
	<h3<?php echo $item_prop; ?> class="edd_download_title">
		<a itemprop="url" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	</h3>
<?php else : ?>
	<h3<?php echo $item_prop; ?> class="edd_download_title">
		<?php the_title(); ?>
	</h3>
<?php endif; ?>
