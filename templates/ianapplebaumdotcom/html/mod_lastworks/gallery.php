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
$app 		= JFactory::getApplication();
//$document   = JFactory::getDocument();
//$document->addScript(JURI::base() . 'templates/' . $app->getTemplate() . '/js/jquery.carouFredSel-6.2.1-packed.js');
//$document->addScript(JURI::base() . 'templates/' . $app->getTemplate() . '/js/jquery.fancybox.pack.js');

echo '<div class="carousel-box bottom-padding load lastworks_gallery ' . $moduleclass_sfx . '">
        <div class="clearfix"></div>';

        if(count($articles)) { //<-- A1.

            echo '<div class="row">
                <div class="carousel no-responsive gallery">';

                    foreach($articles as $article) {

                        $images = json_decode($article->images);

                        if( $images->image_intro ){
                            $img_intro_ = '<img src="' . JURI::base() . $images->image_intro . '" alt="" />';
                        }else{
                            $img_intro_ = '<img src="' . JURI::base() . 'templates/' . $app->getTemplate() . '/images/carousel_default.jpg" alt="" />';
                        }

                        if( $images->image_fulltext ){
                            $img_full_ = JURI::base() . $images->image_fulltext;
                        }else{
                            $img_full_ = 'javascript:void(0)';
                        }

                        echo '<div class="col-sm-4 col-md-3">
                            <a class="gallery-images" rel="fancybox_' . $id_ . '" href="' . $img_full_ . '">
                                ' . $img_intro_ . '
                                <span class="bg-images"><i class="fa fa-search"></i></span>
                            </a>
                        </div>';

                    }

            echo '</div>
            </div>';


        }else{// .A1

            echo '<p class="alert">' . JText::_('VG_LASTWORKS_ALERT') . '</p>';

        }// .A1 -->

echo '</div>
<div class="clearfix"></div>';