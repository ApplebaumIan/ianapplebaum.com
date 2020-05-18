<?php
/**
 * @package		Joomla.Site
 * @subpackage	Templates.vg_progressive
 * @copyright	Copyright (C) 2014 Valentin Garcia - http://www.htmgarcia.com - All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
defined('_JEXEC') or die;

//mymenu
function modChrome_mymenu($module, &$params, &$attribs){

	echo $module->content;
	
}

//bartop
function modChrome_bartop($module, &$params, &$attribs){

    echo $module->content;

    echo '<script>
    jQuery(document).ready(function(){
        jQuery("body").addClass("hidden-top");
    });
    </script>';

}

//top
function modChrome_top($module, &$params, &$attribs){

    echo $module->content;

}

//heading
function modChrome_heading($module, &$params, &$attribs){

    $title_class_ = '';

    // check class suffix
    $moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

    // Title white
    if( strstr($moduleclass_sfx, 'title-white') ){
        $title_class_ .= ' title-white';
    }

    // Title center
    if( strstr($moduleclass_sfx, 'title-center') ){
        $title_class_ .= ' text-center';
    }

    if( $module->showtitle ){
        echo '<div class="title-box ' . $title_class_ . '"><h1 class="title">' . $module->title . '</h1></div>';
    }

    echo $module->content;

}

//sidebar
function modChrome_sidebar($module, &$params, &$attribs){

    echo '<aside class="widget list">';

        if( $module->showtitle ){
            echo '<div class="title-box"><h2 class="title">' . $module->title . '</h2></div>';
        }

        echo $module->content;

        echo '<div class="clearfix"></div>
    </aside>';

}

//footer
function modChrome_footer($module, &$params, &$attribs){

    if( $module->showtitle ){
		echo '<div class="title-block"><h3 class="title">' . $module->title . '</h3></div>';
	}
	
	echo $module->content;
	
}