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

$app 		= JFactory::getApplication();

echo '<div class="lastworks_team ' . $moduleclass_sfx . '">';

        if(count($articles)) { //<-- A1.

            echo '<div class="row text-center">';

                foreach($articles as $article) {

                    $images = json_decode($article->images);

                    echo '<div class="col-sm-3 col-md-3 rotation employee">
                        <div class="default">
                            <div class="image">';

                                if( $images->image_intro ){
                                    echo '<img src="' . JURI::base() . $images->image_intro . '" alt="' . htmlspecialchars($article->title) . '" />';
                                }else{
                                    echo '<img src="' . JURI::base() . 'templates/' . $app->getTemplate() . '/images/carousel_default.jpg" alt="' . htmlspecialchars($article->title) . '" />';
                                }

                            echo '</div>
                            <div class="description">
                                <div class="vertical">
                                    <h3 class="name">' . $article->title . '</h3>
                                    <div>' . $article->introtext . '</div>
                                </div>
                            </div>
                        </div>
                        <div class="employee-hover">
                            <h3 class="name">' . $article->title . '</h3>
                            <div>' . $article->introtext . '</div>
                            <div>' . $article->fulltext . '</div>
                        </div>
                    </div>';

                }

            echo '</div>';


        }else{// .A1

            echo '<p class="alert">' . JText::_('VG_LASTWORKS_ALERT') . '</p>';

        }// .A1 -->

    echo '<div class="clearfix"></div>
</div>';