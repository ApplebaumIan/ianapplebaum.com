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

echo '<div class="slider progressive-slider load lastworks_slider ' . $moduleclass_sfx . '">';

        if(count($articles)) { //<-- A1.

            echo '<div class="container">
	            <div class="row">
	                <div class="sliders-box">';

                        foreach($articles as $article) {

                            $images = json_decode($article->images);

                            echo '<div class="col-sm-12 col-md-12">
                              <div class="slid row">
                                <div class="col-sm-12 col-md-12">';

                                    if( $images->image_intro ){
                                        echo '<img src="' . JURI::base() . $images->image_intro . '" alt="' . htmlspecialchars($article->title) . '" />';
                                    }else{
                                        echo '<img src="' . JURI::base() . 'templates/' . $app->getTemplate() . '/images/carousel_default.jpg" alt="' . htmlspecialchars($article->title) . '" />';
                                    }

                                echo '</div>
                                <div class="slid-content col-sm-4 col-md-4">
                                  <h1 class="title">' . $article->title . '</h1>
                                  <div>' . $article->introtext . '</div>';

                                  if( $article->fulltext ){
                                      echo '<p><a href="' . ContentHelperRoute::getArticleRoute(  $article->id,  $article->catid ) . '" class="btn">' . JText::_('VG_READMORE') . '</a> <span class="arrow">&rarr;</span></p>';
                                  }

                                echo '</div>
                              </div>
                            </div>';

                        }

                    echo '</div>
                    <div class="slider-nav col-sm-4 col-md-4">
                        <div class="nav-box">
                          <a class="next" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="9px" height="16px" viewBox="0 0 9 16" enable-background="new 0 0 9 16" xml:space="preserve">
                              <polygon fill-rule="evenodd" clip-rule="evenodd" fill="#838383" points="1,0.001 0,1.001 7,8 0,14.999 1,15.999 9,8 "></polygon>
                            </svg>
                          </a>
                          <a class="prev" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="9px" height="16px" viewBox="0 0 9 16" enable-background="new 0 0 9 16" xml:space="preserve">
                              <polygon fill-rule="evenodd" clip-rule="evenodd" fill="#838383" points="8,15.999 9,14.999 2,8 9,1.001 8,0.001 0,8 "></polygon>
                            </svg>
                          </a>
                          <div class="pagination switches"></div>
                        </div>
                    </div>
                </div>
            </div>';


        }else{// .A1

            echo '<p class="alert">' . JText::_('VG_LASTWORKS_ALERT') . '</p>';

        }// .A1 -->

echo '</div>';