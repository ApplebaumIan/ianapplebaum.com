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

echo '<div class="padding-top-bottom-medium carousel-box load overflow lastworks_portfolio_miny ' . $moduleclass_sfx . '" data-carousel-pagination="true" data-carousel-nav="false" data-carousel-autoplay="true">
    <div class="clearfix"></div>';

            if(count($articles)) { //<-- A1.

                echo '<div class="row">
                    <div class="carousel no-responsive">';

                            foreach($articles as $article) {

                                $images = json_decode($article->images);



                                echo '<div class="col-sm-4 col-md-3">
                                    <div class="work mycat-' . $article->catid . '">
                                        <a href="' . ContentHelperRoute::getArticleRoute(  $article->id,  $article->catid ) . '" class="work">';

                                            if( $images->image_intro ){
                                                echo '<img src="' . JURI::base() . $images->image_intro . '" alt="" />';
                                            }else{
                                                echo '<img src="' . JURI::base() . 'templates/' . $app->getTemplate() . '/images/portfolio_default.jpg" alt="" />';
                                            }

                                            echo '<span class="shadow"></span>
                                            <div class="bg-hover"></div>
                                            <div class="work-title">
                                                <h3 class="title">' . $article->title . '</h3>
                                                <div class="description">' . modLastWorksHelper::getCategoryLW( $article->catid ) . '</div>
                                            </div>
                                        </a>
                                    </div>
                                </div>';

                            }

                    echo '</div>
                </div>
                <div>
                    <div class="pagination switches"></div>
                </div>';


            }else{// .A1

                echo '<p class="alert">' . JText::_('VG_LASTWORKS_ALERT') . '</p>';

            }// .A1 -->

    echo '</div>
</div>';