<?php
/**
 * @package     Joomla.Cms
 * @subpackage  Layout
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('JPATH_BASE') or die;

JLoader::register('TagsHelperRoute', JPATH_BASE . '/components/com_tags/helpers/route.php');

?>
<?php if (!empty($displayData)) : ?>
    <p>
        <?php foreach ($displayData as $i => $tag) : ?>
            <?php if (in_array($tag->access, JAccess::getAuthorisedViewLevels(JFactory::getUser()->get('id')))) : ?>
                <?php $tagParams = new JRegistry($tag->params); ?>
                <?php $link_class = $tagParams->get('tag_link_class', 'btn btn-default btn-xs'); ?>
                <span itemprop="keywords">
                    <a class="<?php echo $link_class; ?>" href="<?php echo JRoute::_(TagsHelperRoute::getTagRoute($tag->tag_id . '-' . $tag->alias)) ?>">
                        <?php echo $this->escape($tag->title); ?>
                    </a>
                </span>
            <?php endif; ?>
        <?php endforeach; ?>
	</p>
<?php endif; ?>
