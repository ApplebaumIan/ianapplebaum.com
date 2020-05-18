<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_users
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>
<div class="registration-complete<?php echo $this->pageclass_sfx;?>">
	<?php if ($this->params->get('show_page_heading')) : ?>
        <div class="page-header">
            <div class="container">
                <h1 class="title">
                    <?php echo $this->escape($this->params->get('page_heading')); ?>
                </h1>
            </div>
        </div>
	<?php endif; ?>
</div>
