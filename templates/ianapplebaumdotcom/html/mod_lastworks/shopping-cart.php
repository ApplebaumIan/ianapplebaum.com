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

echo '<div class="lastworks_cart ' . $moduleclass_sfx . '">';

        if(count($articles)) { //<-- A1.

            echo '<div class="carousel-box bottom-padding bottom-padding-mini load overflow">
                <div class="vg-next-prev-controls-cart">
                    <div class="no-margin">
                        <a class="next" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="9px" height="16px" viewBox="0 0 9 16" enable-background="new 0 0 9 16" xml:space="preserve">
                                  <polygon fill-rule="evenodd" clip-rule="evenodd" fill="#fcfcfc" points="1,0.001 0,1.001 7,8 0,14.999 1,15.999 9,8 "></polygon>
                                </svg>
                        </a>
                        <a class="prev" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="9px" height="16px" viewBox="0 0 9 16" enable-background="new 0 0 9 16" xml:space="preserve">
                                  <polygon fill-rule="evenodd" clip-rule="evenodd" fill="#fcfcfc" points="8,15.999 9,14.999 2,8 9,1.001 8,0.001 0,8 "></polygon>
                                </svg>
                        </a>
                    </div>
                </div>
                <div class="clearfix"></div>

                <div class="row">
                    <div class="carousel products">';

                        foreach($articles as $article) {

                            $images = json_decode($article->images);

                            echo '<div class="col-sm-3 col-md-3 product rotation">
                                <div class="default">
                                    <a href="' . ContentHelperRoute::getArticleRoute(  $article->id,  $article->catid ) . '" class="product-image">';
                                        
                                        if( $images->image_intro ){
                                            echo '<img src="' . JURI::base() . $images->image_intro . '" alt="' . htmlspecialchars($article->title) . '" width="270" height="270" />';
                                        }else{
                                            echo '<img src="' . JURI::base() . 'templates/' . $app->getTemplate() . '/images/carousel_default.jpg" alt="' . htmlspecialchars($article->title) . '" />';
                                        }
                                        
                                    echo '</a>
                                    <div class="product-description">
                                        <div class="vertical">
                                            <h3 class="product-name">
                                                <a href="' . ContentHelperRoute::getArticleRoute(  $article->id,  $article->catid ) . '">' . $article->title . '</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-hover">
                                    <h3 class="product-name">
                                        <a href="' . ContentHelperRoute::getArticleRoute(  $article->id,  $article->catid ) . '">' . $article->title . '</a>
                                    </h3>
                                    <a href="' . ContentHelperRoute::getArticleRoute(  $article->id,  $article->catid ) . '" class="product-image">';
                                        
                                        if( $images->image_intro ){
                                            echo '<img src="' . JURI::base() . $images->image_intro . '" alt="' . htmlspecialchars($article->title) . '" width="270" height="270" />';
                                        }else{
                                            echo '<img src="' . JURI::base() . 'templates/' . $app->getTemplate() . '/images/carousel_default.jpg" alt="' . htmlspecialchars($article->title) . '" />';
                                        }
                                        
                                    echo '</a>
                                    <div>' . $article->introtext . '</div>
                                    <div class="actions">
                                        <a href="' . ContentHelperRoute::getArticleRoute(  $article->id,  $article->catid ) . '" class="add-cart">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve">
                                                  <g>
                                                      <path fill="#1e1e1e" d="M15.001,4h-0.57l-3.707-3.707c-0.391-0.391-1.023-0.391-1.414,0c-0.391,0.391-0.391,1.023,0,1.414L11.603,4
                                                      H4.43l2.293-2.293c0.391-0.391,0.391-1.023,0-1.414s-1.023-0.391-1.414,0L1.602,4H1C0.448,4,0,4.448,0,5s0.448,1,1,1
                                                      c0,2.69,0,7.23,0,8c0,1.104,0.896,2,2,2h10c1.104,0,2-0.896,2-2c0-0.77,0-5.31,0-8c0.553,0,1-0.448,1-1S15.554,4,15.001,4z
                                                      M13.001,14H3V6h10V14z"></path>
                                                      <path fill="#1e1e1e" d="M11.001,13c0.553,0,1-0.447,1-1V8c0-0.553-0.447-1-1-1s-1,0.447-1,1v4C10.001,12.553,10.448,13,11.001,13z"></path>
                                                      <path fill="#1e1e1e" d="M8,13c0.553,0,1-0.447,1-1V8c0-0.553-0.448-1-1-1S7,7.447,7,8v4C7,12.553,7.448,13,8,13z"></path>
                                                      <path fill="#1e1e1e" d="M5,13c0.553,0,1-0.447,1-1V8c0-0.553-0.447-1-1-1S4,7.447,4,8v4C4,12.553,4.448,13,5,13z"></path>
                                                  </g>
                                                </svg>
                                        </a>
                                        <a href="' . ContentHelperRoute::getArticleRoute(  $article->id,  $article->catid ) . '" class="add-compare" style="width:95px;">
                                            ' . JText::_('VG_READMORE') . '
                                        </a>
                                    </div><!-- .actions -->
                                </div><!-- .product-hover -->
                            </div><!-- .product -->';

                        }

                    echo '</div>
                </div>
            </div><!-- .carousel-box -->';


        }else{// .A1

            echo '<p class="alert">' . JText::_('VG_LASTWORKS_ALERT') . '</p>';

        }// .A1 -->

    echo '<div class="clearfix"></div>
</div>';