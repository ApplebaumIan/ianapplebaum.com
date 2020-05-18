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

echo '<div class="portfolio lastworks_portfolio ' . $moduleclass_sfx . '">';

        if(count($articles)) { //<-- A1.

            echo '<div class="btn-group filter-buttons filter-list">
                <button type="button" class="dropdown-toggle" data-toggle="dropdown">' . JText::_('VG_ALL') . '<span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#" data-filter="*" class="active">' . JText::_('VG_ALL') . '</a></li>';

                    foreach($categories as $category):
                        echo '<li><a href="#" data-filter=".mycat-' . $category->id . '">' . $category->title . '</a></li>';
                    endforeach;

                echo '</ul>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
            <div class="filter-elements">';

                    foreach($articles as $article) {

                        $images = json_decode($article->images);

                        echo '<div class="work-one mycat-' . $article->catid . '">
                            <div class="row">
                              <div class="work-title col-sm-9 col-md-9">
                                <h3 class="title"><a href="' . ContentHelperRoute::getArticleRoute(  $article->id,  $article->catid ) . '">' . $article->title . '</a></h3>
                                <div class="description">' . modLastWorksHelper::getCategoryLW( $article->catid ) . '</div>
                                <div>' . $article->introtext . '</div>
                              </div>
                              <div class="col-sm-3 col-md-3">
                                <a class="work-image" href="' . ContentHelperRoute::getArticleRoute(  $article->id,  $article->catid ) . '">';

                                    if( $images->image_intro ){
                                        echo '<img src="' . JURI::base() . $images->image_intro . '" alt="" />';
                                    }else{
                                        echo '<img src="' . JURI::base() . 'templates/' . $app->getTemplate() . '/images/portfolio_default.jpg" alt="" />';
                                    }

                                echo '</a>
                              </div>
                            </div>
                        </div>';

                    }

            echo '</div>';


        }else{// .A1

            echo '<p class="alert">' . JText::_('VG_LASTWORKS_ALERT') . '</p>';

        }// .A1 -->

echo '</div>';