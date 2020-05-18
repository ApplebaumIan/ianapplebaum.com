<?php
/**
 * @autor       Valentin Garcia
 * @website     www.htmgarcia.com
 * @package		Joomla.Site
 * @subpackage	mod_lastworks
 * @copyright	Copyright (C) 2014 Valentin Garcia. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

//CSS and JS
//$app 		= JFactory::getApplication();
//$document   = JFactory::getDocument();
//$document->addScript(JURI::base() . 'templates/' . $app->getTemplate() . '/js/jquery.carouFredSel-6.2.1-packed.js');

echo '<div class="banner-set banner-set-mini load lastworks_carousel_miny banner-set-no-pagination load ' . $moduleclass_sfx . '">';

        if(count($articles)) { //<-- A1.

            echo '<div class="container">
            <div class="banners">';

                foreach($articles as $article) {

                    $images = json_decode($article->images);

                    echo '<a href="' . ContentHelperRoute::getArticleRoute(  $article->id,  $article->catid ) . '" class="banner">';

                        if( $images->image_intro ){
                            echo '<img src="' . JURI::base() . $images->image_intro . '" alt="' . htmlspecialchars($article->title) . '" />';
                        }

                        echo '<h2 class="title">' . $article->title . '</h2>
                    </a>';

                }

            echo '</div>
            <div class="clearfix"></div>
            </div>';


        }else{// .A1

            echo '<p class="alert">' . JText::_('VG_LASTWORKS_ALERT') . '</p>';

        }// .A1 -->

        echo '<div class="nav-box">
                <div class="container">
                    <a class="prev" href="#"><span class="glyphicon glyphicon-arrow-left"></span></a>
                    <div class="pagination switches"></div>
                    <a class="next" href="#"><span class="glyphicon glyphicon-arrow-right"></span></a>
                </div>
        </div>
</div>
<div class="clearfix"></div>';