<?php

add_action( 'init', 'noosablockcon_register_social_menu' );
/**
 * Register Social Menu
 *
 * @since 1.0.0
 *
 * @return void
 */
function noosablockcon_register_social_menu() {
	register_nav_menu( 'social-menu', 'Social Menu' );
}

beans_add_smart_action( 'beans_header_before_markup', 'noosablockcon_social_menu' );
/**
 * Add social menu above the header.
 *
 * @since 1.0.0
 *
 * @return void
 */
function noosablockcon_social_menu() {
	if ( has_nav_menu( 'social-menu' ) ) {
		echo beans_open_markup( 'noosablockcon_social_menu-container', 'div', array( 'class' => 'beanschildstarter-social-menu' ) );
		wp_nav_menu( array(
			'menu'            => 'Social',
			'menu_class'      => 'uk-subnav uk-navbar-flip',
			'container'       => 'div',
			'container_class' => 'uk-container uk-container-center',
			'theme_location'  => 'social-menu',
			'beans_type'      => 'navbar'
		) );
		echo beans_close_markup( 'noosablockcon_social_menu-container', 'div' );
	}
}
