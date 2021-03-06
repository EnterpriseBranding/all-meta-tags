<?php
/**
 * Plugin Name: All Meta Tags
 * Plugin URI: https://github.com/ArthurGareginyan/all-meta-tags
 * Description: Easily and safely add your custom meta tags to the WordPress website's head section. This is a must have tool for authors and website's owners.
 * Author: Space X-Chimp
 * Author URI: https://www.spacexchimp.com
 * Version: 4.26
 * License: GPL3
 * Text Domain: all-meta-tags
 * Domain Path: /languages/
 *
 * Copyright 2015-2018 Space X-Chimp ( website : https://www.spacexchimp.com )
 *
 * This plugin is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This plugin is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this plugin. If not, see <http://www.gnu.org/licenses/>.
 *
 * ███████╗██████╗  █████╗  ██████╗███████╗    ██╗  ██╗      ██████╗██╗  ██╗██╗███╗   ███╗██████╗
 * ██╔════╝██╔══██╗██╔══██╗██╔════╝██╔════╝    ╚██╗██╔╝     ██╔════╝██║  ██║██║████╗ ████║██╔══██╗
 * ███████╗██████╔╝███████║██║     █████╗       ╚███╔╝█████╗██║     ███████║██║██╔████╔██║██████╔╝
 * ╚════██║██╔═══╝ ██╔══██║██║     ██╔══╝       ██╔██╗╚════╝██║     ██╔══██║██║██║╚██╔╝██║██╔═══╝
 * ███████║██║     ██║  ██║╚██████╗███████╗    ██╔╝ ██╗     ╚██████╗██║  ██║██║██║ ╚═╝ ██║██║
 * ╚══════╝╚═╝     ╚═╝  ╚═╝ ╚═════╝╚══════╝    ╚═╝  ╚═╝      ╚═════╝╚═╝  ╚═╝╚═╝╚═╝     ╚═╝╚═╝
 *
 */


/**
 * Prevent Direct Access
 */
defined( 'ABSPATH' ) or die( "Restricted access!" );

/**
 * Define global constants
 */
$plugin_data = get_file_data( __FILE__,
                              array(
                                     'name'    => 'Plugin Name',
                                     'version' => 'Version',
                                     'text'    => 'Text Domain'
                                   )
                            );
function spacexchimp_p004_define_constants( $constant_name, $value ) {
    $constant_name = 'SPACEXCHIMP_P004_' . $constant_name;
    if ( !defined( $constant_name ) )
        define( $constant_name, $value );
}
spacexchimp_p004_define_constants( 'FILE', __FILE__ );
spacexchimp_p004_define_constants( 'DIR', dirname( plugin_basename( __FILE__ ) ) );
spacexchimp_p004_define_constants( 'BASE', plugin_basename( __FILE__ ) );
spacexchimp_p004_define_constants( 'URL', plugin_dir_url( __FILE__ ) );
spacexchimp_p004_define_constants( 'PATH', plugin_dir_path( __FILE__ ) );
spacexchimp_p004_define_constants( 'SLUG', dirname( plugin_basename( __FILE__ ) ) );
spacexchimp_p004_define_constants( 'NAME', $plugin_data['name'] );
spacexchimp_p004_define_constants( 'VERSION', $plugin_data['version'] );
spacexchimp_p004_define_constants( 'TEXT', $plugin_data['text'] );
spacexchimp_p004_define_constants( 'PREFIX', 'spacexchimp_p004' );
spacexchimp_p004_define_constants( 'SETTINGS', 'spacexchimp_p004' );

/**
 * Load the plugin modules
 */
require_once( SPACEXCHIMP_P004_PATH . 'inc/php/core.php' );
require_once( SPACEXCHIMP_P004_PATH . 'inc/php/upgrade.php' );
require_once( SPACEXCHIMP_P004_PATH . 'inc/php/versioning.php' );
require_once( SPACEXCHIMP_P004_PATH . 'inc/php/enqueue.php' );
require_once( SPACEXCHIMP_P004_PATH . 'inc/php/functional.php' );
require_once( SPACEXCHIMP_P004_PATH . 'inc/php/controls.php' );
require_once( SPACEXCHIMP_P004_PATH . 'inc/php/page.php' );
require_once( SPACEXCHIMP_P004_PATH . 'inc/php/messages.php' );
