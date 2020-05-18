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

// CSS and JS
//$app 		= JFactory::getApplication();
//$document   = JFactory::getDocument();
//$document->addScript(JURI::base() . 'templates/' . $app->getTemplate() . '/js/jquery.carouFredSel-6.2.1-packed.js');

echo '<div class="respond-carousel">
    <div class="carousel-box load lastworks_testimonials ' . $moduleclass_sfx . '" data-carousel-pagination="true" data-carousel-one="true" data-carousel-nav="false">
        <div class="row">
            <div class="carousel">';

            if(count($articles)) { //<-- A1.

                foreach($articles as $article) {

                    $images = json_decode($article->images);

                    echo '<div class="respond respond-blockquote border white col-sm-12 col-md-12">';

                        echo $article->introtext;

                        if( $article->fulltext ){
                            echo '<p><a href="' . ContentHelperRoute::getArticleRoute(  $article->id,  $article->catid ) . '">' . JText::_('VG_READMORE') . '</a></p>';
                        }

                    echo '</div>';

                }

            }else{// .A1

                echo '<p class="alert">' . JText::_('VG_LASTWORKS_ALERT') . '</p>';

            }// .A1 -->

            echo '</div>
        </div>
        <div class="clearfix"></div>
        <div class="pagination switches"></div>
    </div>
</div>
<p><br/><br/></p>';