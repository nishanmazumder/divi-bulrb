<?php
/*
Plugin Name: Divi Blurb
Plugin URI:  bdsoftcreation.com
Description: divi extension
Version:     1.0.0
Author:      Nishan M
Author URI:  bdsoftcreation.com
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: dibl-divi-blurb
Domain Path: /languages

Divi Blurb is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

Divi Blurb is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Divi Blurb. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
*/


if ( ! function_exists( 'dibl_initialize_extension' ) ):
/**
 * Creates the extension's main class instance.
 *
 * @since 1.0.0
 */
function dibl_initialize_extension() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/DiviBlurb.php';
}
add_action( 'divi_extensions_init', 'dibl_initialize_extension' );
endif;
