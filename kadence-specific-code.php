<?php

/**
 * @wordpress-plugin
 * Plugin Name:       Kadence Theme Specific Code
 * Plugin URI:        https://www.kntnt.com/
 * Description:       Modifies the Kadence Theme.
 * Version:           1.0.0
 * Author:            Thomas Barregren
 * Author URI:        https://www.kntnt.com/
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 */


defined( 'ABSPATH' ) || die;

// Depends on the mu-plugin Kntnt Remove Meta Boxes.
add_filter( 'kntnt-remove-meta-boxes', function ( $hide_meta_boxes ) {
    return array_merge_recursive( $hide_meta_boxes, [
        'post' => [
            '_kad_classic_meta_control',
        ],
    ] );
} );
