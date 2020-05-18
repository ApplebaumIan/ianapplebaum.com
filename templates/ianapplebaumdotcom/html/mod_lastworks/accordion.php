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

$count_ = 0;

echo '<div class="panel-group multi-collapse lastworks_accordion ' . $moduleclass_sfx . '" id="accordion-' . $id_ . '">';

        if(count($articles)) { //<-- A1.

            echo '';

                foreach($articles as $article) {

                    $images = json_decode($article->images);

                    if( $count_ == 0 ){
                        $opened_ = array(
                            'in',
                            'active'
                        );
                    }else{
                        $opened_ = array(
                            '',
                            ''
                        );
                    }

                    echo '<div class="panel panel-default ' . $opened_[1] . '" data-appear-animation="fadeInRightBig">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion-' . $id_ . '" href="#mod-' . $id_ . '-art-' . $article->id . '">' . $article->title . '</a>
                        </div>
                    </div>
                    <div id="mod-' . $id_ . '-art-' . $article->id . '" class="panel-collapse collapse ' . $opened_[0] . '">
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

                $count_++;

                }

            echo '';


        }else{// .A1

            echo '<p class="alert">' . JText::_('VG_LASTWORKS_ALERT') . '</p>';

        }// .A1 -->

echo '</div>';

$count_ = null;
$opened_ = null;