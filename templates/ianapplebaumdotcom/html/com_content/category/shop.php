<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_content
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::addIncludePath(JPATH_COMPONENT . '/helpers');

$num_cols_ = 4;
?>

<?php if ($this->params->get('show_page_heading', 1)) : ?>
    <header class="page-header">
        <div class="container">
            <h1 class="title">
                <?php echo $this->escape($this->params->get('page_heading')); ?>
            </h1>
        </div>
    </header>
<?php endif; ?>

<?php if ($this->params->get('show_description', 1) || $this->params->def('show_description_image', 1)) : ?>
    <div class="category-desc clearfix">
        <?php if ($this->params->get('show_description_image') && $this->category->getParams()->get('image')) : ?>
            <img src="<?php echo $this->category->getParams()->get('image'); ?>"/>
        <?php endif; ?>
        <?php if ($this->params->get('show_description') && $this->category->description) : ?>
            <?php echo JHtml::_('content.prepare', $this->category->description, '', 'com_content.category'); ?>
        <?php endif; ?>
    </div>
<?php endif; ?>

<?php if (empty($this->lead_items) && empty($this->link_items) && empty($this->intro_items)) : ?>
    <?php if ($this->params->get('show_no_articles', 1)) : ?>
        <p><?php echo JText::_('COM_CONTENT_NO_ARTICLES'); ?></p>
    <?php endif; ?>
<?php endif; ?>

<div class="carousel products row">

    <?php $leadingcount = 0; ?>
    <?php if (!empty($this->lead_items)) : ?>
        <?php foreach ($this->lead_items as &$item) : ?>
            <div class="col-sm-12 col-md-12 product rotation">

                <?php
                $this->item = & $item;
                echo $this->loadTemplate('item');
                ?>

            </div>
            <?php $leadingcount++; ?>
        <?php endforeach; ?>
    <?php endif; ?>

    <?php
    $introcount = (count($this->intro_items));
    $counter = 0;
    ?>

    <?php if (!empty($this->intro_items)) : ?>
        <?php foreach ($this->intro_items as $key => &$item) : ?>
            <div class="col-sm-<?php echo round((12 / $num_cols_)); ?> col-md-<?php echo round((12 / $num_cols_)); ?> product rotation">

                <?php
                $this->item = & $item;
                echo $this->loadTemplate('item');
                ?>

                <?php $counter++; ?>
            </div><!-- end span -->
        <?php endforeach; ?>
    <?php endif; ?>

</div>

<?php if (!empty($this->link_items)) : ?>
    <div class="items-more">
        <?php echo $this->loadTemplate('links'); ?>
    </div>
<?php endif; ?>

<?php if (!empty($this->children[$this->category->id]) && $this->maxLevel != 0) : ?>
    <div class="cat-children">
        <?php if ($this->params->get('show_category_heading_title_text', 1) == 1) : ?>
            <h3> <?php echo JTEXT::_('JGLOBAL_SUBCATEGORIES'); ?> </h3>
        <?php endif; ?>
        <?php echo $this->loadTemplate('children'); ?> </div>
<?php endif; ?>
<?php if (($this->params->def('show_pagination', 1) == 1 || ($this->params->get('show_pagination') == 2)) && ($this->pagination->get('pages.total') > 1)) : ?>
    <div class="pagination-box">
        <?php echo $this->pagination->getPagesLinks(); ?>
        <?php if ($this->params->def('show_pagination_results', 1)) : ?>
            <i class="pagination-text"><?php echo $this->pagination->getPagesCounter(); ?></i>
        <?php endif; ?>
    </div>
<?php endif; ?>