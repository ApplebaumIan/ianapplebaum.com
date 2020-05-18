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
<?php if ($this->item->state == 0 || strtotime($this->item->publish_up) > strtotime(JFactory::getDate())
	|| ((strtotime($this->item->publish_down) < strtotime(JFactory::getDate())) && $this->item->publish_down != '0000-00-00 00:00:00' )) : ?>
	<div class="system-unpublished">
<?php endif; ?>


<header class="entry-header">
	<h2 itemprop="name"class="entry-title">
		<?php if ($params->get('link_titles') && $params->get('access-view')) : ?>
			<a itemprop="url" href="<?php echo JRoute::_(ContentHelperRoute::getArticleRoute($this->item->slug, $this->item->catid)); ?>">
			<?php echo $this->escape($this->item->title); ?></a>
		<?php else : ?>
			<?php echo $this->escape($this->item->title); ?>
		<?php endif; ?>
	</h2>

</header>

<?php if( $images->image_intro ): ?>
    <p><figure class="align<?php echo $images->float_intro; ?> entry-thumb">
        <div class="pull-<?php echo htmlspecialchars($images->float_intro); ?> item-image">
            <?php if( $params->get('link_titles') ): ?>
                <a href="<?php echo JRoute::_(ContentHelperRoute::getArticleRoute($this->item->slug, $this->item->catid)); ?>">
            <?php endif; ?>
                <img itemprop="thumbnailUrl" alt="<?php echo htmlspecialchars($this->item->title); ?>" src="<?php echo JURI::base() . $images->image_intro; ?>" />
            <?php if( $params->get('link_titles') ): ?>
                </a>
            <?php endif; ?>
        </div>
    </figure></p>
<?php endif; ?>

<div class="entry-content">
	<?php if (!$params->get('show_intro')) : ?>
        <?php echo $this->item->event->afterDisplayTitle; ?>
    <?php endif; ?>
    <?php echo $this->item->event->beforeDisplayContent; ?>
    <?php echo $this->item->introtext; ?>

    <footer class="entry-meta">
        <?php // Todo Not that elegant would be nice to group the params ?>
        <?php $useDefList = ($params->get('show_modify_date') || $params->get('show_publish_date') || $params->get('show_create_date')
            || $params->get('show_hits') || $params->get('show_category') || $params->get('show_parent_category') || $params->get('show_author') ); ?>
        <?php if ($useDefList) : ?>
            <?php echo JLayoutHelper::render('joomla.content.info_block.block', array('item' => $this->item, 'params' => $params, 'position' => 'above')); ?>
        <?php endif; ?>
        <?php echo JLayoutHelper::render('joomla.content.icons', array('params' => $params, 'item' => $this->item, 'print' => false)); ?>
    </footer>

    <?php if ($useDefList) : ?>
        <?php echo JLayoutHelper::render('joomla.content.info_block.block', array('item' => $this->item, 'params' => $params, 'position' => 'below')); ?>
    <?php  endif; ?>
    <?php if ($params->get('show_readmore') && $this->item->readmore) :
	if ($params->get('access-view')) :
		$link = JRoute::_(ContentHelperRoute::getArticleRoute($this->item->slug, $this->item->catid));
	else :
		$menu = JFactory::getApplication()->getMenu();
		$active = $menu->getActive();
		$itemId = $active->id;
		$link1 = JRoute::_('index.php?option=com_users&view=login&Itemid=' . $itemId);
		$returnURL = JRoute::_(ContentHelperRoute::getArticleRoute($this->item->slug, $this->item->catid));
		$link = new JUri($link1);
		$link->setVar('return', base64_encode($returnURL));
	endif; ?>

	<p><a class="btn btn-default btn-sm" href="<?php echo $link; ?>">

        <?php if (!$params->get('access-view')) :
            echo JText::_('COM_CONTENT_REGISTER_TO_READ_MORE');
        elseif ($readmore = $this->item->alternative_readmore) :
            echo $readmore;
            if ($params->get('show_readmore_title', 0) != 0) :
            echo JHtml::_('string.truncate', ($this->item->title), $params->get('readmore_limit'));
            endif;
        elseif ($params->get('show_readmore_title', 0) == 0) :
            echo JText::sprintf('COM_CONTENT_READ_MORE_TITLE');
        else :
            echo JText::_('COM_CONTENT_READ_MORE');
            echo JHtml::_('string.truncate', ($this->item->title), $params->get('readmore_limit'));
        endif; ?>

        </a></p>

    <?php endif; ?>
</div>

<?php if ($this->item->state == 0 || strtotime($this->item->publish_up) > strtotime(JFactory::getDate())
	|| ((strtotime($this->item->publish_down) < strtotime(JFactory::getDate())) && $this->item->publish_down != '0000-00-00 00:00:00' )) : ?>
</div>
<?php endif; ?>

<?php echo $this->item->event->afterDisplayContent; ?>
