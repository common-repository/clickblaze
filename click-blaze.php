<?php
/*
Plugin Name: Click Blaze
Plugin URI: https://clickblaze.io
Description: Display customizable header notification bar anywhere on your website. Notify website visitors to special offers, product promotions, events and more.
Version: 1.0
Author: Steven Soehl
Author URI: https://www.stevensoehl.com/
License: A "Slug" license name e.g. GPL2
*/

/*  Copyright 2018  Steven Soehl  (email : stevensoehl@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

function clickblaze_desc_links ($links, $file) {

               if ( plugin_basename( __FILE__ ) == $file ) {
                  $row_meta = array(
                    'settings'    => '<a href="' . esc_url(  admin_url() . 'options-general.php?page=clickblaze_settings' ) . '" target="_blank" aria-label="' . esc_attr__( 'Plugin Settings', 'clickblaze' ) . '" style="">' . esc_html__( 'Settings', 'clickblaze' ) . '</a>',
                    'website'    => '<a href="' . esc_url( 'https://clickblaze.io' ) . '" target="_blank" aria-label="' . esc_attr__( 'GO PRO', 'clickblaze' ) . '" style="font-weight:bold;">' . esc_html__( 'GO PRO', 'clickblaze' ) . '</a>'
                  );

                  return array_merge( $links, $row_meta );
              }
               return (array) $links;
       }

add_filter('plugin_row_meta', 'clickblaze_desc_links', 10, 2);

include('inc/init.php');

?>
