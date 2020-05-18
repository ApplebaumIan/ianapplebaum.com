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
            <div class="row filter-elements">';

                    foreach($articles as $article) {

                        $images = json_decode($article->images);



                        echo '<div class="work-element mycat-' . $article->catid . ' col-xs-12 col-sm-6 col-md-6">
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
                        </div>';

                    }

            echo '</div>';


        }else{// .A1

            echo '<p class="alert">' . JText::_('VG_LASTWORKS_ALERT') . '</p>';

        }// .A1 -->

echo '</div>';