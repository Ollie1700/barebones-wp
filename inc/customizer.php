<?php
/**
 * When working with the WordPress customiser it is important to remember
 * it's split into three components: Sections -> Settings -> Controls.
 * A Section controls the clickable menus on the customiser screen,
 * a Setting controls the individual modifications of your theme,
 * and a Control controls the type of input that the user will
 * interact with.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function wpbp_customize_register( $wp_customize ) {

	#=======================
	# REMOVE UNUSED OPTIONS
	#=======================
	//$wp_customize->remove_section( '' );
	//$wp_customize->remove_setting( '' );
	//$wp_customize->remove_control( '' );

	#===========
	# SECTION 1
	#===========

}
add_action( 'customize_register', 'wpbp_customize_register' );
