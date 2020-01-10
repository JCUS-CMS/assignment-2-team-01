<?php
$search_excerpt = get_theme_mod( 'search_archive_content_excerpt', 'search_archive_excerpt' );
$search_btn_text = get_theme_mod( 'search_btn_text', 'Read More' );
$search_btn_position = get_theme_mod( 'search_archive_button_position', 'btn_left' );
$search_btn_icon_show_hide = get_theme_mod( 'search_archive_button_icon_toggle', '1' );
$search_btn_icon_position = get_theme_mod( 'search_archive_button_icon_position', 'icon_right' );
$search_btn_icon_left = get_theme_mod( 'search_archive_button_left_icon', '&#171;' );
$search_btn_icon_right = get_theme_mod( 'search_archive_button_right_icon', '&#187;' );
$search_blog_excerpt = get_theme_mod( 'search_archive_excerpt_length', '55');
?>

<div class="entry-content">
	<?php
	if($search_excerpt == 'search_archive_excerpt'){ 
		echo wp_trim_words( get_the_content(), $search_blog_excerpt ); 
	?>
	<span class="<?php echo $search_btn_position; ?>">	<a href="<?php the_permalink(); ?>" class="read-more"><?php if($search_btn_icon_show_hide == '1' && $search_btn_icon_position == 'icon_left'){ echo $search_btn_icon_left; } ?> <?php echo $search_btn_text; ?> <?php if($search_btn_icon_show_hide == '1' && $search_btn_icon_position == 'icon_right'){echo $search_btn_icon_right; }?></a></span>
	<?php } else{
	the_content();
	}
	
	wp_link_pages( array(
		'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'start' ),
		'after'  => '</div>',
	) );
	?>
</div>