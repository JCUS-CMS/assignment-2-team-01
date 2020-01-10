<?php
/* StartWP Settings Page */
class startwp_Settings_Page {
	public function __construct() {
		add_action( 'admin_menu', array( $this, 'wph_create_settings' ), 10 );
	}
	public function wph_create_settings() {
		$page_title = 'StartWP Theme Dashboard';
		$menu_title = 'StartWP';
		$capability = 'manage_options';
		$slug = 'startwp';
		$callback = array($this, 'wph_settings_content');
		add_theme_page($page_title, $menu_title, $capability, $slug, $callback);
	}
	public function wph_settings_content() {
		global $startwp_version;
	?>
		<div class="swp-wrap">
			 <h1><?php  echo 'StartWP Theme' . '<span class="version"> - v'.  $startwp_version. '</span>'; ?></h1>

			<p><?php _e('Thanks for installing StartWP theme. You might be interested in extending StartWP with the following extension.', 'start' ); ?></p>
        
        <div class="col-half right-padding">

            <h2><?php _e( 'StartWP Extended - (Beta)', 'start' ); ?></h2>
            <h4><?php _e( '<i>This plugin is in beta right now, please test and provide feedback.</i>', 'start' ); ?></h4>
            <p><?php _e('Install this extenssion to add more features & functionality to StartWP theme. There will be modules available for you to enable & extend the functionality of the theme. Right now we got WooCommerce Module, more to come. And it\'s FREE like the theme.', 'start'); ?></p>
            <?php
        Startwp_Plugin_Install::install_plugin_button( 'startwp-extended', 'startwp-extended.php', 'StartWP Extended' );
        ?>
        </div>
        <!-- <div class="col-half left-padding"> -->
            <!-- <h2 class="startwp_hf"><?php //_e( 'Documentation', 'start' ); ?></h2> -->
            <p><?php //_e('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.', 'start'); ?></p>
            <?php //_e('<a class="button-primary" href="'. admin_url( 'customize.php?autofocus[control]=startwp_customColorScheme' ) .'" target="_blank">Customize Site</a>', 'start'); ?>
        <!-- </div> -->

		</div> 


	<?php
	}
	
}
new startwp_Settings_Page();