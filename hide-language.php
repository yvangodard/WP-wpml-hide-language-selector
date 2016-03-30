<?php
/*
  Plugin Name:  Hide the WPML language selector if only one language is active
  Description:  Hide with CSS selectors the WPML language selector if only one language is active
  Plugin URI:   http://wpml.org/forums/topic/hide-the-language-selector-if-only-one-language-is-active/
  Version:      1.0
  Author:       Yvan GODARD
  Author URI:   http://www.yvangodard.me
 
  /*
  This program is free software; you can redistribute it and/or
  modify it under the terms of the GNU General Public License
  as published by the Free Software Foundation; either version 2
  of the License, or (at your option) any later version.
 
  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.
 
  You should have received a copy of the GNU General Public License
  along with this program; if not, write to the Free Software
  Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 */
 
 // remove language selector if only one language
add_action('wp_head', 'wpml_hide_langs');
function wpml_hide_langs() {
    $languages = icl_get_languages('skip_missing=1');
     
    //if it is equal to one, hiding the flags.
    if(count($languages) == 1 ) {
        echo '<style type="text/css" media="screen">#lang_sel_list { display: none; }</style>';
    }
}