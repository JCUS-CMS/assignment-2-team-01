<?php $item_prop = edd_add_schema_microdata() ? ' itemprop="name"' : ''; ?>
<h3<?php echo $item_prop; ?> class="edd_download_title">
	<?php the_title(); ?>
</h3>
