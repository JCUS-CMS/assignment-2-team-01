<?php
$content_excerpt = get_theme_mod( 'blog_archive_content_excerpt', 'blog_archive_excerpt' );
$btn_text = get_theme_mod( 'blog_btn_text', 'Read More' );
$btn_position = get_theme_mod( 'blog_archive_button_position', 'btn_left' );
$btn_icon_show_hide = get_theme_mod( 'blog_archive_button_icon_toggle', '1' );
$btn_icon_position = get_theme_mod( 'blog_archive_button_icon_position', 'icon_right' );
$btn_icon_left = get_theme_mod( 'blog_archive_button_left_icon', '&#171;' );
$btn_icon_right = get_theme_mod( 'blog_archive_button_right_icon', '&#187;' );
$blog_excerpt = get_theme_mod( 'blog_archive_excerpt_length', '55');
?>

<div class="entry-content">
	<?php
	if($content_excerpt == 'blog_archive_excerpt'){ 
		echo wp_trim_words( get_the_content(), $blog_excerpt ); 
	?>
	<span class="<?php echo $btn_position; ?>">	<a href="<?php the_permalink(); ?>" class="read-more"><?php if($btn_icon_show_hide == '1' && $btn_icon_position == 'icon_left'){ echo $btn_icon_left; } ?> <?php echo $btn_text; ?> <?php if($btn_icon_show_hide == '1' && $btn_icon_position == 'icon_right'){echo $btn_icon_right; }?></a></span>
	<?php } else{
	the_content();
	}
	
	wp_link_pages( array(
		'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'start' ),
		'after'  => '</div>',
	) );
	?>
</div>