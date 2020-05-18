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

$count_ = 0;
$classes_grid_ = array(
    'col-sm-6 col-md-6',
    'col-sm-3 col-md-3',
    'col-sm-3 col-md-3',
    'col-sm-3 col-md-3',
    'col-sm-3 col-md-3',
    'col-sm-3 col-md-3',
    'col-sm-3 col-md-3',
    'col-sm-6 col-md-6',
    'col-sm-3 col-md-3',
    'col-sm-3 col-md-3'
);

echo '<div class="lastworks_gallery_modern ' . $moduleclass_sfx . '">';

        if(count($articles)) { //<-- A1.

            echo '<div class="container">
                <div class="row">
                    <div class="content gallery col-sm-12 col-md-12">
                        <div id="gallery-modern" class="row">';

                            foreach($articles as $article) {

                                // reset count to use again the classes
                                if ( $count_ == 10 ) $count_ = 0;

                                $images = json_decode($article->images);

                                if( $images->image_fulltext ){
                                    $img_fulltext_ = JURI::base() . $images->image_fulltext;
                                }else{
                                    $img_fulltext_ = 'javascript:void(0)';
                                }

                                echo '<div class="images-box ' . $classes_grid_[$count_] . '">
                                    <a class="gallery-images" rel="fancybox[' . $id_ .']" href="' . $img_fulltext_ . '">';

                                        if( $images->image_intro ){
                                            echo '<img src="' . JURI::base() . $images->image_intro . '" alt="' . htmlspecialchars($article->title) . '" />';
                                        }else{
                                            echo '<img src="' . JURI::base() . 'templates/' . $app->getTemplate() . '/images/carousel_default.jpg" alt="' . htmlspecialchars($article->title) . '" />';
                                        }

                                        echo '<span class="bg-images"><i class="fa fa-search"></i></span>
                                    </a>
                                </div>';

                                $count_++;

                            }

                        echo '</div>
                    </div>
                </div>
            </div>';

        }else{// .A1

            echo '<p class="alert">' . JText::_('VG_LASTWORKS_ALERT') . '</p>';

        }// .A1 -->

echo '</div>';

$count_ = null;