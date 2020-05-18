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

echo '<div class="filter-box accordions-filter lastworks_accordion ' . $moduleclass_sfx . '">';

        if(count($articles)) { //<-- A1.

            echo '<div class="btn-group filter-buttons filter-list">
                <button type="button" class="dropdown-toggle" data-toggle="dropdown">
                  All <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#" data-filter="*" class="active">' . JText::_('VG_ALL') . '</a></li>';

                    foreach($categories as $category):
                        echo '<li><a href="#" data-filter=".mycat-' . $category->id . '">' . $category->title . '</a></li>';
                    endforeach;

            echo '</ul>
                <div class="clearfix"></div>
            </div>
            <div class="panel-group filter-elements" id="accordion-' . $id_ . '">';

            foreach($articles as $article) {

                $images = json_decode($article->images);

                echo '<div class="panel panel-default panel-bg mycat-' . $article->catid . '">
                  <div class="panel-heading">
                    <div class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion-' . $id_ . '" href="#mod-' . $id_ . '-art-' . $article->id . '">
                        ' . $article->title . '
                      </a>
                    </div>
                  </div>
                  <div id="mod-' . $id_ . '-art-' . $article->id . '" class="panel-collapse collapse">
                    <div class="panel-body">';

                        echo $article->introtext;

                        if( $images->image_intro ){
                            echo '<img src="' . JURI::base() . $images->image_intro . '" alt="' . htmlspecialchars($article->title) . '" />';
                        }

                        if( $article->fulltext ){
                            echo '<p><a href="' . ContentHelperRoute::getArticleRoute(  $article->id,  $article->catid ) . '">' . JText::_('VG_READMORE') . '</a></p>';
                        }

                    echo '</div>
                  </div>
                </div>';

            }

            echo '</div>';


        }else{// .A1

            echo '<p class="alert">' . JText::_('VG_LASTWORKS_ALERT') . '</p>';

        }// .A1 -->

echo '</div>';