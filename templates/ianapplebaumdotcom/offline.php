<?php
/**
 * @package		Joomla.Site
 * @subpackage	Templates.vg_stability
 * @copyright	Copyright (C) 2014 Valentin Garcia - http://www.htmgarcia.com - All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
defined('_JEXEC') or die;

/****************************** IF DS DEPRECATED ******************************/

if( !defined('DS') ){
    define( 'DS', DIRECTORY_SEPARATOR );
}

/********************************* USER *********************************/

$app = JFactory::getApplication();

// Add JavaScript Frameworks
JHtml::_('bootstrap.framework');

require_once JPATH_ADMINISTRATOR . '/components/com_users/helpers/users.php';

$twofactormethods = UsersHelper::getTwoFactorMethods();

/********************************* SITE DATA *********************************/

$sitename = $app->getCfg('sitename');

$itemid = JRequest::getVar('Itemid');
$menu = JFactory::getApplication()->getMenu();
$active = $menu->getItem($itemid);
$params = $menu->getParams( $active->id );
$pageclass = $params->get( 'pageclass_sfx' );

/****************************** MODULE POSITIONS ******************************/

require('includes' . DIRECTORY_SEPARATOR . 'module_positions.php');

/********************************* PARAMS *************************************/

require('includes' . DIRECTORY_SEPARATOR . 'template_params.php');

// Disable some js files and load again (this, to force to load for all pages always)
unset($this->_scripts[JURI::root(true) . '/media/jui/js/jquery.min.js']);
unset($this->_scripts[JURI::root(true) . '/media/jui/js/jquery-migrate.min.js']);
unset($this->_scripts[JURI::root(true) . '/media/jui/js/jquery-noconflict.js']);
?>
<!doctype html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
    <meta charset="utf-8">
    <meta class="viewport" name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="<?php echo $this->baseurl; ?>/media/jui/js/jquery.min.js"></script>
    <script src="<?php echo $this->baseurl; ?>/media/jui/js/jquery-noconflict.js"></script>

    <jdoc:include type="head" />

    <!-- Google fonts -->
    <link rel="stylesheet" href="<?php echo $vg_fontlink_1; ?>">

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/buttons/buttons.css">
    <link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/buttons/social-icons.css">
    <link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/jslider.css">
    <link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/settings.css">
    <link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/jquery.fancybox.css">
    <link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/animate.css">
    <link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/video-js.min.css">
    <link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/morris.css">
    <link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/ladda.min.css">
    <link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/datepicker.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/style.css">

    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/responsive.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/customizer/pages.css">
    <link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/customizer/home-pages-customizer.css">

    <!-- IE Styles-->
    <link rel='stylesheet' href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/ie/ie.css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <link rel='stylesheet' href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/ie/ie8.css">
    <![endif]-->

    <link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/joomla.css">
    <style>
        body,
        input,
        button,
        select,
        textarea {
            font-family:<?php echo strip_tags($vg_fontfamily_1); ?>;
        }
        <?php echo $vg_css; ?>
    </style>

</head>
<body class="body-bg-img under-construction">

<div class="page-box">

    <header class="header header-three">
        <div class="header-wrapper">
            <div class="container">
                <div class="row">
                    <div class="logo-box col-sm-12 col-md-12">
                        <div class="logo">
                            <?php if( $vg_logo_type == 'image' ): ?>
                                <a href="<?php echo JURI::base(); ?>">
                                    <img src="<?php echo $vg_logo_image; ?>" alt="<?php echo htmlspecialchars( $sitename ); ?>" class="logo-img" />
                                </a>
                            <?php else: ?>
                                <?php echo $vg_logo_text; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div><!--.row -->
            </div>
        </div><!-- .header-wrapper -->
    </header><!-- .header -->

    <section id="main">
        <div class="container">
            <div class="row">
                <div class="count-down-box col-sm-12 col-md-8">
                    <div id="count-down"></div>
                </div>

                <div class="coming-text col-sm-12 col-md-4">

                    <?php if(count($app->getMessageQueue())) : ?>
                        <jdoc:include type="message" />
                    <?php endif; ?>

                    <form action="<?php echo JRoute::_('index.php', true); ?>" method="post" id="sent-email">
                        <fieldset class="input">
                            <p id="form-login-username">
                                <label for="username"><?php echo JText::_('JGLOBAL_USERNAME'); ?></label>
                                <input name="username" id="username" type="text" class="inputbox" alt="<?php echo JText::_('JGLOBAL_USERNAME'); ?>" size="18" />
                            </p>
                            <p id="form-login-password">
                                <label for="passwd"><?php echo JText::_('JGLOBAL_PASSWORD'); ?></label>
                                <input type="password" name="password" class="inputbox" size="18" alt="<?php echo JText::_('JGLOBAL_PASSWORD'); ?>" id="passwd" />
                            </p>
                            <?php if (count($twofactormethods) > 1) : ?>
                                <p id="form-login-secretkey">
                                    <label for="secretkey"><?php echo JText::_('JGLOBAL_SECRETKEY'); ?></label>
                                    <input type="text" name="secretkey" class="inputbox" size="18" alt="<?php echo JText::_('JGLOBAL_SECRETKEY'); ?>" id="secretkey" />
                                </p>
                            <?php endif; ?>

                            <?php if (JPluginHelper::isEnabled('system', 'remember')) : ?>
                                <p>
                                    <?php echo JText::_('JGLOBAL_REMEMBER_ME'); ?>
                                    <input type="checkbox" name="remember" class="inputbox" value="yes" alt="<?php echo JText::_('JGLOBAL_REMEMBER_ME'); ?>" id="remember" />
                                </p>
                                <?php endif; ?>

                            <p id="submit-buton">
                                <input type="submit" name="Submit" class="btn btn-default" value="<?php echo JText::_('JLOGIN'); ?>" />
                            </p>
                            <input type="hidden" name="option" value="com_users" />
                            <input type="hidden" name="task" value="user.login" />
                            <input type="hidden" name="return" value="<?php echo base64_encode(JUri::base()); ?>" />
                            <?php echo JHtml::_('form.token'); ?>
                        </fieldset>
                    </form>

                </div>
            </div>
        </div><!-- .container -->
    </section><!-- #main -->

</div><!-- .page-box -->

<footer id="footer" class="footer-two">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="social col-sm-12 col-md-12">
                    <?php if ($app->get('offline_image') && file_exists($app->get('offline_image'))) : ?>
                        <p class="text-center"><img src="<?php echo $app->get('offline_image'); ?>" alt="<?php echo htmlspecialchars($app->get('sitename')); ?>" /></p>
                    <?php endif; ?>

                    <?php if ($app->get('display_offline_message', 1) == 1 && str_replace(' ', '', $app->get('offline_message')) != '') : ?>
                        <p class="text-center">
                            <?php echo $app->get('offline_message'); ?>
                        </p>
                    <?php elseif ($app->get('display_offline_message', 1) == 2 && str_replace(' ', '', JText::_('JOFFLINE_MESSAGE')) != '') : ?>
                        <p class="text-center">
                            <?php echo JText::_('JOFFLINE_MESSAGE'); ?>
                        </p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div><!-- .footer-top -->
</footer>

<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/bootstrap.min.js"></script>
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/country.js"></script>
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/main.js"></script>

<script>
jQuery(document).ready(function(){
    //Country
    if (jQuery.fn.county){
        jQuery('#count-down').county({
            endDateTime: new Date('<?php echo JText::_('VG_LAUNCH_DATE'); ?>'),
            reflection: false
        }).addClass('count-loaded');
    }
});
</script>

<?php if( $vg_analytics ){ ?>
    <script>
        <?php echo $vg_analytics; ?>
    </script>
<?php } ?>

</body>
</html>