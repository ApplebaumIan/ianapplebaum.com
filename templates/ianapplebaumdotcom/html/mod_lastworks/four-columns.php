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

echo '<div class="lastworks_fourcolumns ' . $moduleclass_sfx . '">';

        if(count($articles)) { //<-- A1.

            echo '<div class="features-promo carousel-box bottom-padding load overflow">
                <div class="vg-next-prev-controls">
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
                <div class="clearfix"></div>

                <div class="row">
                    <div class="carousel no-responsive">';

                        foreach($articles as $article) {

                            $images = json_decode($article->images);

                            echo '<div class="text-small features-block col-sm-3 col-md-3">';

                                if( $images->image_intro ){
                                    echo '<p><img src="' . JURI::base() . $images->image_intro . '" alt="' . htmlspecialchars($article->title) . '" /></p>';
                                }

                                echo $article->introtext;

                                if( $article->fulltext ){
                                    echo '<p class="margin-top-only-small"><a href="' . ContentHelperRoute::getArticleRoute(  $article->id,  $article->catid ) . '" class="btn">' . JText::_('VG_READMORE') . '</a></p>';
                                }

                            echo '</div>';

                        }

                    echo '</div>
                </div>
            </div><!-- .carousel-box -->';


        }else{// .A1

            echo '<p class="alert">' . JText::_('VG_LASTWORKS_ALERT') . '</p>';

        }// .A1 -->

    echo '<div class="clearfix"></div>
</div>';