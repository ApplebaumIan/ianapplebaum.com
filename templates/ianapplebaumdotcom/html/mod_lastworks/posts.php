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

echo '<div class="carousel-box load overflow lastworks_posts ' . $moduleclass_sfx . '" data-carousel-pagination="true" data-carousel-nav="false" data-carousel-one="true">';

        if(count($articles)) { //<-- A1.

            echo '<div class="row">
                <div class="carousel no-responsive">';

                foreach($articles as $article) {

                    $images = json_decode($article->images);

                    echo '<div class="post">
                        <h2 class="entry-title"><a href="' . ContentHelperRoute::getArticleRoute(  $article->id,  $article->catid ) . '">' . $article->title . '</a></h2>
                        <div class="entry-content">';

                            if( $images->image_intro ){
                                echo '<img src="' . JURI::base() . $images->image_intro . '" alt="' . htmlspecialchars($article->title) . '" />';
                            }

                            echo $article->introtext;

                            if( $article->fulltext ){
                                echo '<p><a href="' . ContentHelperRoute::getArticleRoute(  $article->id,  $article->catid ) . '">' . JText::_('VG_READMORE') . '</a> <span class="arrow">&rarr;</span></p>';
                            }

                    echo '</div>

                        <div class="entry-meta">
                            <span class="time">' . JText::sprintf('COM_CONTENT_PUBLISHED_DATE_ON', JHtml::_('date', $article->publish_up, JText::_('DATE_FORMAT_LC2'))) . '</span>
                            <span class="separator">|</span>
                            <span class="meta">' . JText::_('VG_POSTED_ON'). ' <a href="' . ContentHelperRoute::getCategoryRoute(  $article->catid ) . '">' . modLastWorksHelper::getCategoryLW( $article->catid ) . '</a></span>
                        </div>
                    </div>';
                }

                echo '</div>
            </div>';


        }else{// .A1

            echo '<p class="alert">' . JText::_('VG_LASTWORKS_ALERT') . '</p>';

        }// .A1 -->

    echo '<div class="clearfix"></div>
    <div class="pagination switches"></div>
</div>';