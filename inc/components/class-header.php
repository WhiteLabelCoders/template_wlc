<?php
namespace WLC\Components;

class Header {
	public function hooks() {
		add_action( 'wlc_header', array( get_class( $this ), 'logo' ), 7 );
		add_action( 'wlc_header', array( get_class( $this ), 'primary_menu' ), 9 );
	}
	public static function header_wrapper_open() {
		?>
			<div class="container">
			<?php
	}

	public static function logo() {
		?>
			<div class="site-header-logo-menu">
				<a href="<?php echo esc_html( home_url() ); ?>"><img src="<?php echo get_field( 'logo', 'option' ); ?>" alt=""></a>
			</div>
			<?php
	}

	public static function primary_menu() {
		wp_nav_menu(
			array(
				'theme_location'  => 'header_menu',
				'container_class' => 'site-header--navigation',
				'menu_id'         => '',
			)
		);
	}



}
