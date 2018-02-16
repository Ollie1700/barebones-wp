<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function wpbp_file( $file ) {
	return get_template_directory_uri() . $file;
}

function wpbp_template( $slug ) {
	get_template_part( 'templates/wpbp', $slug );
}
