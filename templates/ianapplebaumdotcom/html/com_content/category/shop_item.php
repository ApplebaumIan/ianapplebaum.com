<?php
/**
 * @package     Joomla.Site
 * @subpackage  Layout
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;?>
<?php
// Create a shortcut for params.
$params = $this->item->params;
$images  = json_decode($this->item->images);
JHtml::addIncludePath(JPATH_COMPONENT.'/helpers/html');
$canEdit = $this->item->params->get('access-edit');
JHtml::_('behavior.framework');
?>

    <div class="default">

        <?php if( $images->image_intro ): ?>
            <a class="modal-link product-image" href="javascript:void(0)">
                <img itemprop="thumbnailUrl" alt="<?php echo htmlspecialchars($this->item->title); ?>" src="<?php echo JURI::base() . $images->image_intro; ?>" />
            </a>
        <?php endif; ?>

        <div class="product-description">
            <div class="vertical">
                <h3 class="product-name">
                    <a href="<?php echo JRoute::_(ContentHelperRoute::getArticleRoute($this->item->slug, $this->item->catid)); ?>">
                        <?php echo $this->item->title; ?>
                    </a>
                </h3>
            </div>
        </div>

    </div>

    <div class="product-hover blog-shop-item">
        <h3 class="product-name">
            <a class="modal-link" href="<?php echo JRoute::_(ContentHelperRoute::getArticleRoute($this->item->slug, $this->item->catid)); ?>">
                <?php echo $this->item->title; ?>
            </a>
        </h3>
        <?php if( $images->image_intro ): ?>
            <a class="modal-link product-image" href="<?php echo JRoute::_(ContentHelperRoute::getArticleRoute($this->item->slug, $this->item->catid)); ?>">
                <img width="70" height="70" alt="<?php echo htmlspecialchars($this->item->title); ?>" src="<?php echo JURI::base() . $images->image_intro; ?>" />
            </a>
        <?php endif; ?>
        <div>
            <?php echo $this->item->introtext; ?>
        </div>

        <div class="text-center">
            <?php echo $this->item->event->afterDisplayContent; ?>
        </div>

    </div>