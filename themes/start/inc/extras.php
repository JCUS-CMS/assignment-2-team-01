<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package start
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function start_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	//Site Layout class:
	$siteLayout = get_theme_mod( 'anaya_siteLayout_siteLayout' );
	if( $siteLayout == 'boxed' ) {
		$classes[] = 'boxed';
	} else {
		$classes[] = 'full-width';
	}

	
	return $classes;
}
add_filter( 'body_class', 'start_body_classes' );

if ( version_compare( $GLOBALS['wp_version'], '4.1', '<' ) ) :
	/**
	 * Filters wp_title to print a neat <title> tag based on what is being viewed.
	 *
	 * @param string $title Default title text for current view.
	 * @param string $sep Optional separator.
	 * @return string The filtered title.
	 */
	function start_wp_title( $title, $sep ) {
		if ( is_feed() ) {
			return $title;
		}

		global $page, $paged;

		// Add the blog name
		$title .= get_bloginfo( 'name', 'display' );

		// Add the blog description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) ) {
			$title .= " $sep $site_description";
		}

		// Add a page number if necessary:
		if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
			$title .= " $sep " . sprintf( esc_html__( 'Page %s', 'start' ), max( $paged, $page ) );
		}

		return $title;
	}
	add_filter( 'wp_title', 'start_wp_title', 10, 2 );

	/**
	 * Title shim for sites older than WordPress 4.1.
	 *
	 * @link https://make.wordpress.org/core/2014/10/29/title-tags-in-4-1/
	 * @todo Remove this function when WordPress 4.3 is released.
	 */
	function start_render_title() {
		?>
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<?php
	}
	add_action( 'wp_head', 'start_render_title' );
endif;



// Functions.php 

// Update CSS within in Admin
function start_admin() {
  wp_enqueue_style('start-admin-styles', get_template_directory_uri().'/start-admin.css');
}
add_action('admin_enqueue_scripts', 'start_admin');

// Disable Loader Icon
function startwp_disable_customizer_loader( $config ) {
	return wp_parse_args( array(
		'disable_loader'   => true,
	), $config );
}
add_filter( 'kirki/config', 'startwp_disable_customizer_loader' );	


// No Menu Set Default Text
function no_menu_set(){
	echo "Please assign a Menu to Primary Location";
}

// Kirki Filters
add_filter( 'kirki_start_webfonts_skip_hidden', '__return_false' );
add_filter( 'kirki_start_css_skip_hidden', '__return_false' );


// Customizer Styles
function start_customizer_css() {
	wp_enqueue_style( 'start_customizer_css', get_template_directory_uri() . '/inc/customizer/customizer-sections/css/start_customizer.css');
}
add_action( 'customize_controls_print_styles', 'start_customizer_css' );


// Comment Fields Placeholder
function start_comment_fields_placeholder( $fields ) {

	$commenter = wp_get_current_commenter();
	$req       = get_option( 'require_name_email' );
	$label     = $req ? '*' : ' ' . __( '(optional)', 'start' );
	$aria_req  = $req ? "aria-required='true'" : '';

	$fields['author'] =
		'<p class="comment-form-author">
			<input id="author" name="author" type="text" placeholder="' . esc_attr__( "Name", "start" ) . '" value="' . esc_attr( $commenter['comment_author'] ) .
		'" size="30" ' . $aria_req . ' />
		</p>';

	$fields['email'] =
		'<p class="comment-form-email">
			<input id="email" name="email" type="email" placeholder="' . esc_attr__( "Email", "start" ) . '" value="' . esc_attr( $commenter['comment_author_email'] ) .
		'" size="30" ' . $aria_req . ' />
		</p>';

	$fields['url'] =
		'<p class="comment-form-url">
			<input id="url" name="url" type="url"  placeholder="' . esc_attr__( "Website", "start" ) . '" value="' . esc_attr( $commenter['comment_author_url'] ) .
		'" size="30" />
			</p>';

	return $fields;
}
add_filter( 'comment_form_default_fields', 'start_comment_fields_placeholder' );


// Comment Field Textarea Placeholder
function start_textarea_placeholder( $comment_field ) {

  $comment_field =
    '<p class="comment-form-comment">
            <textarea required id="comment" name="comment" placeholder="' . esc_attr__( "Enter comment here...", "start" ) . '" cols="45" rows="8" aria-required="true"></textarea>
        </p>';

  return $comment_field;
}
add_filter( 'comment_form_field_comment', 'start_textarea_placeholder' );


// Comment Field Textarea Position
function start_textarea_position( $fields ) {
$comment_field = $fields['comment'];
unset( $fields['comment'] );
$fields['comment'] = $comment_field;
return $fields;
}
add_filter( 'comment_form_fields', 'start_textarea_position' );



// comments List Structure
function start_comment_list($comment, $args, $depth) {
if ( 'div' === $args['style'] ) {
    $tag       = 'div';
    $add_below = 'comment';
} else {
    $tag       = 'li';
    $add_below = 'div-comment';
}
?>

<<?php echo $tag ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ) ?> id="comment-<?php comment_ID() ?>">

<div class="main_comment">

<?php if ( 'div' != $args['style'] ) : ?>
    <div id="div-comment-<?php comment_ID() ?>" class="comment-body">
<?php endif; ?>
<div class="comment-author vcard">
    <?php if ( $args['avatar_size'] != 0 ) echo get_avatar( $comment, $args['avatar_size'] ); ?>
</div>
<?php if ( $comment->comment_approved == '0' ) : ?>
     <em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ); ?></em>
      <br />
<?php endif; ?>

<div class="comment-meta commentmetadata">
		<?php printf( __( '<cite class="fn">%s</cite>' ), get_comment_author_link() ); ?>
	<a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>">

    <?php
    /* translators: 1: date, 2: time */
    printf( __('<div class="dt">%1$s at %2$s</div>'), get_comment_date(),  get_comment_time() ); ?></a>
</div>

</div>

<div class="comment_text">
<?php comment_text(); ?>
</div>

<div class="er">
<div class="reply">
    <?php comment_reply_link( array_merge( $args, array( 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
</div>
<div class="edit">
	<?php edit_comment_link( __( 'Edit' ), '  ', '' );?>
</div>
<?php if ( 'div' != $args['style'] ) : ?>
</div>
</div>
<?php endif; ?>
<?php
}


// Meta Box 
class startwpsettingsMetabox {
	private $screen = array(
		'post',
		'page',
	);
	private $meta_fields = array(
		array(
			'label' => 'Header Layout',
			'id' => 'header_content_layout',
			'default' => 'customizer',
			'type' => 'select',
			'options' => array(
				'customizer' 	=> 'Customizer',
				'container' 	=> 'Boxed',
				'bg-stretched'  => 'BG Stretched',
				'full-width' 	=> 'Full Width',	
			),
		),

		array(
			'label' => 'Content Layout',
			'id' => 'content_layout',
			'default' => 'customizer',
			'type' => 'select',
			'options' => array(
				'customizer' 	=> 'Customizer',
				'container' 	=> 'Boxed',
				'bg-stretched'  => 'BG Stretched',
				'full-width' 	=> 'Full Width',
			),
		),

		array(
			'label' => 'Footer Layout',
			'id' => 'footer_content_layout',
			'default' => 'customizer',
			'type' => 'select',
			'options' => array(
				'customizer' 	=> 'Customizer',
				'container' 	=> 'Boxed',
				'bg-stretched'  => 'BG Stretched',
				'full-width' 	=> 'Full Width',	
			),
		),

		array(
			'label' => 'Copyright Layout',
			'id' => 'copyright_content_layout',
			'default' => 'customizer',
			'type' => 'select',
			'options' => array(
				'customizer' 	=> 'Customizer',
				'container' 	=> 'Boxed',
				'bg-stretched'  => 'BG Stretched',
				'full-width' 	=> 'Full Width',
			),
		),

		array(
			'label' => 'Select a Sidebar Layout',
			'id' => 'selectasidebarl_57316',
			'default' => 'Customizer',
			'type' => 'select',
			'options' => array(
				'Customizer',
				'Disable',
				'Left',
				'Right',
			),
		),
		array(
			'label' => 'Disable Conatiner Padding',
			'id' => 'disable_container_padding',
			'default' => 'Disable Padding',
			'type' => 'checkbox',
		),
		array(
			'label' => 'Disable Header',
			'id' => 'disableheader_94951',
			'default' => 'Disable Header',
			'type' => 'checkbox',
		),
		array(
			'label' => 'Disable Navigation',
			'id' => 'disablenavigati_49755',
			'default' => 'Disable Navigation',
			'type' => 'checkbox',
		),
		array(
			'label' => 'Disable Featured Image',
			'id' => 'disablefeatured_51092',
			'default' => 'Disable Featured Image',
			'type' => 'checkbox',
		),
		array(
			'label' => 'Disable Title',
			'id' => 'disabletitle_96814',
			'default' => 'Disable Title',
			'type' => 'checkbox',
		),
		array(
			'label' => 'Disable Footer',
			'id' => 'disablefooter_39975',
			'default' => 'Disable Footer',
			'type' => 'checkbox',
		),
		array(
			'label' => 'Disable Copyright',
			'id' => 'disablecopyrigh_51595',
			'default' => 'Disable Copyright',
			'type' => 'checkbox',
		),
	);
	public function __construct() {
		add_action( 'add_meta_boxes', array( $this, 'add_meta_boxes' ) );
		add_action( 'save_post', array( $this, 'save_fields' ) );
	}
	public function add_meta_boxes() {
		foreach ( $this->screen as $single_screen ) {
			add_meta_box(
				'startwpsettings',
				__( 'StartWP Settings', 'start' ),
				array( $this, 'meta_box_callback' ),
				$single_screen,
				'side',
				'core'
			);
		}
	}
	public function meta_box_callback( $post ) {
		wp_nonce_field( 'startwpsettings_data', 'startwpsettings_nonce' );
		$this->field_generator( $post );
	}
	public function field_generator( $post ) {
		$output = '';
		foreach ( $this->meta_fields as $meta_field ) {
			$label = '<label for="' . $meta_field['id'] . '">' . $meta_field['label'] . '</label>';
			$meta_value = get_post_meta( $post->ID, $meta_field['id'], true );
			if ( empty( $meta_value ) ) {
				$meta_value = $meta_field['default']; }
			switch ( $meta_field['type'] ) {
				case 'checkbox':
					$input = sprintf(
						'<label class="switch"><input %s id=" % s" name="% s" type="checkbox" value="1"><span class="startwp_switch round"></span></label>',
						$meta_value === '1' ? 'checked' : '',
						$meta_field['id'],
						$meta_field['id']
						);
					break;
				case 'select':
					$input = sprintf(
						'<select id="%s" name="%s">',
						$meta_field['id'],
						$meta_field['id']
					);
					foreach ( $meta_field['options'] as $key => $value ) {
						$meta_field_value = !is_numeric( $key ) ? $key : $value;
						$input .= sprintf(
							'<option %s value="%s">%s</option>',
							$meta_value === $meta_field_value ? 'selected' : '',
							$meta_field_value,
							$value
						);
					}
					$input .= '</select>';
					break;
				default:
					$input = sprintf(
						'<input %s id="%s" name="%s" type="%s" value="%s">',
						$meta_field['type'] !== 'color' ? 'style="width: 100%"' : '',
						$meta_field['id'],
						$meta_field['id'],
						$meta_field['type'],
						$meta_value
					);
			}
			$output .= $this->format_rows( $label, $input );
		}
		echo '<table class="form-table"><tbody>' . $output . '</tbody></table>';
	}
	public function format_rows( $label, $input ) {
		return '<tr><th>'.$label.'</th><td>'.$input.'</td></tr>';
	}
	public function save_fields( $post_id ) {
		if ( ! isset( $_POST['startwpsettings_nonce'] ) )
			return $post_id;
		$nonce = $_POST['startwpsettings_nonce'];
		if ( !wp_verify_nonce( $nonce, 'startwpsettings_data' ) )
			return $post_id;
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
			return $post_id;
		foreach ( $this->meta_fields as $meta_field ) {
			if ( isset( $_POST[ $meta_field['id'] ] ) ) {
				switch ( $meta_field['type'] ) {
					case 'email':
						$_POST[ $meta_field['id'] ] = sanitize_email( $_POST[ $meta_field['id'] ] );
						break;
					case 'text':
						$_POST[ $meta_field['id'] ] = sanitize_text_field( $_POST[ $meta_field['id'] ] );
						break;
				}
				update_post_meta( $post_id, $meta_field['id'], $_POST[ $meta_field['id'] ] );
			} else if ( $meta_field['type'] === 'checkbox' ) {
				update_post_meta( $post_id, $meta_field['id'], '0' );
			}
		}
	}
}
if (class_exists('startwpsettingsMetabox')) {
	new startwpsettingsMetabox;
};

// Meta boxes Global Variables
function startwp_globals(){
while ( have_posts() ) : the_post(); 
   global $specific_header_layout;
   global $specific_content_layout;
   global $specific_footer_layout;
   global $specific_copyright_layout;
   global $page_post_sidebar;
   global $container_padding;
   global $disable_header;
   global $disable_nav;
   global $disable_featured_image;
   global $disable_title;
   global $disable_footer;
   global $disable_copyright;

   $specific_header_layout =  get_post_meta( get_the_ID(), 'header_content_layout', true );
   $specific_content_layout =  get_post_meta( get_the_ID(), 'content_layout', true );
   $specific_footer_layout =  get_post_meta( get_the_ID(), 'footer_content_layout', true );
   $specific_copyright_layout =  get_post_meta( get_the_ID(), 'copyright_content_layout', true );
   $page_post_sidebar =  get_post_meta( get_the_ID(), 'selectasidebarl_57316', true );
   $container_padding =  get_post_meta( get_the_ID(), 'disable_container_padding', true );
   $disable_header =  get_post_meta( get_the_ID(), 'disableheader_94951', true );
   $disable_nav =  get_post_meta( get_the_ID(), 'disablenavigati_49755', true );
   $disable_featured_image =  get_post_meta( get_the_ID(), 'disablefeatured_51092', true );
   $disable_title =  get_post_meta( get_the_ID(), 'disabletitle_96814', true );
   $disable_footer =  get_post_meta( get_the_ID(), 'disablefooter_39975', true );
   $disable_copyright =  get_post_meta( get_the_ID(), 'disablecopyrigh_51595', true );
  endwhile; 
}
add_action('wp_head', 'startwp_globals');


// Start Layouts
function startwp_layout(){


	  global $page_post_sidebar;
	  $archive_sidebar = get_theme_mod( 'global_sidebar_col', 'right-sidebar' );
	  $singular_sidebar = get_theme_mod( 'singular_sidebar_col', 'right-sidebar' );

	  if($page_post_sidebar == 'Left'){	
	  	echo "left-sidebar"; 
	  } elseif ($page_post_sidebar == 'Right') { 
	  	echo "right-sidebar"; 
	  } elseif ($page_post_sidebar == 'Disable') { 
	  	echo "no-sidebar"; 
	  } elseif( is_singular() ) { 
	  	echo $singular_sidebar; 
	  } elseif( is_home() || is_archive() || is_search() ) { 
	  	echo $archive_sidebar; 
	  } elseif(is_404()) { 
	  	echo'page_404'; 
	  } elseif ($global_sidebar) { 
	  	echo $global_sidebar; 
	  } 

      // Disable Container Padding
      global $container_padding;
      if ($container_padding == 1) { 
      	echo " padding-zero"; 
      }      
}


// Header Content Layout
function header_notstretched(){
	global $specific_header_layout;
	$global_header_layout = get_theme_mod( 'global_header_content_layout', 'bg-stretched');

	if($specific_header_layout == 'container' || $specific_header_layout == 'full-width') {

		echo $specific_header_layout;

	} elseif($specific_header_layout == 'customizer' || empty($specific_header_layout)) {

		if($global_header_layout == 'container' || $global_header_layout == 'full-width'){
	    echo $global_header_layout;
	    }

	}

} // END FUNCTION

function header_stretched(){

	global $specific_header_layout;
	$global_header_layout = get_theme_mod( 'global_header_content_layout', 'bg-stretched');

	if($specific_header_layout == 'bg-stretched'){

		echo " container";

	} elseif($specific_header_layout == 'customizer' || empty($specific_header_layout)) {

		if($global_header_layout == 'bg-stretched'){
	    echo " container";
	    }

	}

} // END FUNCTION



// Content Layout
function content_notstretched(){

	global $specific_content_layout;
	$global_content_layout = get_theme_mod( 'global_content_layout', 'bg-stretched');

	if($specific_content_layout == 'container' || $specific_content_layout == 'full-width') {

		echo $specific_content_layout;

	} elseif($specific_content_layout == 'customizer' || empty($specific_content_layout) ) {

		if($global_content_layout == 'container' || $global_content_layout == 'full-width'){
	    echo $global_content_layout;
	    }

	}

} // END FUNCTION


function content_stretched(){

	global $specific_content_layout;
	$global_content_layout = get_theme_mod( 'global_content_layout', 'bg-stretched');

	// Content Layout
	if($specific_content_layout == 'bg-stretched'){

		echo " container";

	} elseif($specific_content_layout == 'customizer' || empty($specific_content_layout) ) {

		if($global_content_layout == 'bg-stretched'){
	    echo " container";
	    }

	}

} // END FUNCTION


// Footer Layout
function footer_notstretched(){

	global $specific_footer_layout;
	$global_footer_layout = get_theme_mod( 'global_footer_content_layout', 'bg-stretched');

	if($specific_footer_layout == 'container' || $specific_footer_layout == 'full-width') {

		echo $specific_footer_layout;

	} elseif($specific_footer_layout == 'customizer' || empty($specific_footer_layout) ) {

		if($global_footer_layout == 'container' || $global_footer_layout == 'full-width'){
	    echo $global_footer_layout;
	    }

	}

} // END FUNCTION



function footer_stretched(){

	global $specific_footer_layout;
	$global_footer_layout = get_theme_mod( 'global_footer_content_layout', 'bg-stretched');

	if($specific_footer_layout == 'bg-stretched'){

		echo " container";

	} elseif($specific_footer_layout == 'customizer' || empty($specific_footer_layout) ) {

		if($global_footer_layout == 'bg-stretched'){
	    echo " container";
	    }

	}

} // END FUNCTION


// Copyright Layout
function copyright_notstretched(){

	global $specific_copyright_layout;
	$global_copyright_layout = get_theme_mod( 'global_copyright_content_layout', 'bg-stretched');

	if($specific_copyright_layout == 'container' || $specific_copyright_layout == 'full-width') {

		echo $specific_copyright_layout;

	} elseif($specific_copyright_layout == 'customizer' || empty($specific_copyright_layout)  ) {

		if($global_copyright_layout == 'container' || $global_copyright_layout == 'full-width'){
	    echo $global_copyright_layout;
	    }

	}

} // END FUNCTION

function copyright_stretched(){

	global $specific_copyright_layout;
	$global_copyright_layout = get_theme_mod( 'global_copyright_content_layout', 'bg-stretched');

	// Content Layout
	if($specific_copyright_layout == 'bg-stretched'){

		echo " container";

	} elseif($specific_copyright_layout == 'customizer' || empty($specific_copyright_layout)  ) {

		if($global_copyright_layout == 'bg-stretched'){
	    echo " container";
	    }

	}

} // END FUNCTION




// Submenu div add
class start_navigation extends Walker_Nav_Menu
{
    function start_lvl( &$output, $depth = 1, $args = array() ) {
    	$newid = uniqid();
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<label for='drop-$newid' class='sub_toggle show_mobile'>+</label><input type='checkbox' id='drop-$newid' class='show_mobile'/><ul class='sub-menu'>\n";
    }

    function end_lvl( &$output, $depth = 1, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
    }
}


// Sticky Header Function
function startwp_sticky_header(){

    $swp_transparent_header = get_theme_mod( 'transparent_header');
    $swp_sticky_header = get_theme_mod( 'sticky_header');
    $swp_select_sticky_header = get_theme_mod( 'select_sticky_header', 'always_visible');

    if($swp_sticky_header == "1" && $swp_select_sticky_header == "always_visible"){
      echo "always_visible";
    } elseif ($swp_sticky_header == "1" && $swp_select_sticky_header == "visible_scroll_up") {
      echo "visible_scroll_up";
    } elseif ($swp_sticky_header == "1" && $swp_select_sticky_header == "visible_scroll_down") {
      echo "visible_scroll_down";
    } else{
     echo "masthead"; 
    }
}

// Sticky Header Script
function swp_sticky_header_script() {
$swp_sticky_header = get_theme_mod( 'sticky_header');   
$swp_sticky_script = get_theme_mod( 'select_sticky_header');
if($swp_sticky_header == "1" && $swp_sticky_script == "always_visible"){
?>
<script>
var lastKnownScrollY = 0;
var currentScrollY = 0;
var ticking = false;
var idOfHeader = 'always_visible';
var eleHeader = null;


const classes = {
  pinned: 'header-pin',
  nopinned: 'header-nopin',
};


function onScroll() {
  currentScrollY = window.pageYOffset;
  requestTick();
}


function requestTick() {
  if (!ticking) {
    requestAnimationFrame(update);
  }
  ticking = true;
}

function update() {
  if(currentScrollY < 100){
    nopin();
  } else if (currentScrollY >= 101) {
    pin();
  } 
  lastKnownScrollY = currentScrollY;
  ticking = false;
}

function nopin() {
  if (eleHeader.classList.contains(classes.pinned)) {
    eleHeader.classList.remove(classes.pinned);
    eleHeader.classList.add(classes.nopinned);
  }
}

function pin() {
  if (eleHeader.classList.contains(classes.nopinned)) {
    eleHeader.classList.remove(classes.nopinned);
    eleHeader.classList.add(classes.pinned);
  } else{
    eleHeader.classList.add(classes.pinned);
  }
}

window.onload = function(){
  eleHeader = document.getElementById(idOfHeader);
  document.addEventListener('scroll', onScroll, false);
}
</script>
<?php
} else if($swp_sticky_header == "1" && $swp_sticky_script == "visible_scroll_up"){ 
?>
<script>
var lastKnownScrollY = 0;
var currentScrollY = 0;
var ticking = false;
var idOfHeader = 'visible_scroll_up';
var eleHeader = null;


const classes = {
  pinned: 'header-pin',
  unpinned: 'header-unpin',
  nopinned: 'header-nopin',
};


function onScroll() {
  currentScrollY = window.pageYOffset;
  requestTick();
}


function requestTick() {
  if (!ticking) {
    requestAnimationFrame(update);
  }
  ticking = true;
}

function update() {
  if(currentScrollY < 100){
    nopin();
  } else if (currentScrollY < lastKnownScrollY && currentScrollY >= 101) {
    pin();
  } else if (currentScrollY > lastKnownScrollY) {
    unpin();
  }
  lastKnownScrollY = currentScrollY;
  ticking = false;
}

function nopin() {
  if (eleHeader.classList.contains(classes.pinned)) {
    eleHeader.classList.remove(classes.pinned);
    eleHeader.classList.add(classes.nopinned);
  }
}

function pin() {
  if (eleHeader.classList.contains(classes.unpinned) || eleHeader.classList.contains(classes.nopinned)) {
    eleHeader.classList.remove(classes.unpinned);
    eleHeader.classList.remove(classes.nopinned);
    eleHeader.classList.add(classes.pinned);
  } else{
    eleHeader.classList.add(classes.pinned);
  }
}


function unpin() {
  if (eleHeader.classList.contains(classes.pinned) || !eleHeader.classList.contains(classes.unpinned)) {
    eleHeader.classList.remove(classes.pinned);
    eleHeader.classList.remove(classes.nopinned);
    eleHeader.classList.add(classes.unpinned);
  }
}

window.onload = function(){
  eleHeader = document.getElementById(idOfHeader);
  document.addEventListener('scroll', onScroll, false);
}
</script>
<?php
} else if ($swp_sticky_header == "1" && $swp_sticky_script == "visible_scroll_down") {
?>
<script>
var lastKnownScrollY = 0;
var currentScrollY = 0;
var ticking = false;
var idOfHeader = 'visible_scroll_down';
var eleHeader = null;


const classes = {
  pinned: 'header-pin',
  unpinned: 'header-unpin',
  nopinned: 'header-nopin',
};


function onScroll() {
  currentScrollY = window.pageYOffset;
  requestTick();
}


function requestTick() {
  if (!ticking) {
    requestAnimationFrame(update);
  }
  ticking = true;
}

function update() {
  if(currentScrollY < 100){
    nopin();
  } else if (currentScrollY < lastKnownScrollY && currentScrollY >= 101) {
    unpin();
  } else if (currentScrollY > lastKnownScrollY) {
    pin();
  } 
  lastKnownScrollY = currentScrollY;
  ticking = false;
}


function nopin() {
  if (eleHeader.classList.contains(classes.unpinned)) {
    eleHeader.classList.remove(classes.unpinned);
    eleHeader.classList.add(classes.nopinned);
  }
}

function pin() {
  if (eleHeader.classList.contains(classes.unpinned) || eleHeader.classList.contains(classes.nopinned)) {
    eleHeader.classList.remove(classes.unpinned);
    eleHeader.classList.remove(classes.nopinned);
    eleHeader.classList.add(classes.pinned);
  } else{
    eleHeader.classList.add(classes.pinned);
  }
}


function unpin() {
  if (eleHeader.classList.contains(classes.pinned) || !eleHeader.classList.contains(classes.unpinned)) {
    eleHeader.classList.remove(classes.pinned);
    eleHeader.classList.remove(classes.nopinned);
    eleHeader.classList.add(classes.unpinned);
  }
}

window.onload = function(){
  eleHeader = document.getElementById(idOfHeader);
  document.addEventListener('scroll', onScroll, false);
}
     </script>
    <?php
}
} 
add_action('wp_head', 'swp_sticky_header_script');



// Kirki inline CSS in kirki File
// add_filter( 'kirki/dynamic_css/method', function() {
// 	return 'file';
// });