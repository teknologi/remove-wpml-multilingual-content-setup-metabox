<?php
/**
 * Plugin Name: Remove Multilingual Content Setup Metabox
 * Description: Removes the 'Multilingual content Setup' metabox defined by WPML for all users.
 * Version: 1.0.0
 * Plugin URI: https://github.com/teknologi/remove-wpml-multilingual-content-setup-metabox
 * Author: Hans Czajkowski Jørgensen
 * Text Domain: remove_wpml_multilingual_content_setup_metabox
 * Domain Path: /languages
 * License:     GPL2

 * Remove Multilingual Content Setup Metabox is free software: you can redistribute
 * it and/or modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation, either version 2 of the
 * License, or any later version.
*
 * Remove Multilingual Content Setup Metabox is distributed in the hope that it will
 * be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.

 * You should have received a copy of the GNU General Public License
 * along with Remove Multilingual Content Setup Metabox. If not, see
 * https://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html.
 */
namespace Tekno_Remove_Multilingual_Content_Setup_Metabox;

if ( !defined( 'ABSPATH' ) )
    exit;

// https://wpml.org/forums/topic/how-to-remove-multilingual-content-setup-metabox/#post-54646

function disable_icl_metabox() {
    global $post;
    if ( $post ) {
        \remove_meta_box('icl_div_config',$post->posttype,'normal');
    }
}

add_action('admin_head', 'Tekno_Remove_Multilingual_Content_Setup_Metabox\disable_icl_metabox',99);

?>