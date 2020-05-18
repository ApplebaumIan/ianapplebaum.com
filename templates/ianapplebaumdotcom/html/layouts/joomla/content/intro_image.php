<?php
/**
 * @package     Joomla.Site
 * @subpackage  Layout
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
$params  = $displayData->params;
?>
<?php $images = json_decode($displayData->images); ?>
<?php if (isset($images->image_intro) && !empty($images->image_intro)) : ?>
	<?php $imgfloat = (empty($images->float_intro)) ? $params->get('float_intro') : $images->float_intro; ?>
	<p>
        <figure class="align<?php echo htmlspecialchars($imgfloat); ?> entry-thumb">
            <div class="pull-<?php echo htmlspecialchars($imgfloat); ?> item-image">
                <img
                <?php if ($images->image_intro_caption):
                    echo 'class="caption"' . ' title="' . htmlspecialchars($images->image_intro_caption) . '"';
                endif; ?>
                src="<?php echo htmlspecialchars($images->image_intro); ?>" alt="<?php echo htmlspecialchars($images->image_intro_alt); ?>" itemprop="thumbnailUrl"/>
            </div>
        </figure>
    </p>
<?php endif; ?>
