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

/********************************* SITE DATA *********************************/

$app = JFactory::getApplication();
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
<body class="fixed-header fullwidth">

<div class="page-box">
    <div class="page-box-content">

        <section id="main-component">
            <article class="content">

                <div class="container">
                    <div class="row" id="vg-mainbody">

                        <div class="col-sm-12 col-md-12 vg_component_box">

                            <div class="container-disabled">
                                <?php if(count($app->getMessageQueue())) : ?>
                                    <jdoc:include type="message" />
                                <?php endif; ?>
                                <jdoc:include type="component" />
                            </div>

                        </div>

                    </div>
                </div>

            </article>
        </section><!-- #main -->

    </div><!-- .page-box-content -->
</div><!-- .page-box -->

<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/bootstrap.min.js"></script>
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/price-regulator/jshashtable-2.1_src.js"></script>
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/price-regulator/jquery.numberformatter-1.2.3.js"></script>
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/price-regulator/tmpl.js"></script>
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/price-regulator/jquery.dependClass-0.1.js"></script>
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/price-regulator/draggable-0.1.js"></script>
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/price-regulator/jquery.slider.js"></script>
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/jquery.carouFredSel-6.2.1-packed.js"></script>
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/jquery.touchSwipe.min.js"></script>
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/jquery.elevateZoom-3.0.8.min.js"></script>
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/jquery.imagesloaded.min.js"></script>
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/jquery.appear.js"></script>
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/jquery.sparkline.min.js"></script>
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/jquery.easypiechart.min.js"></script>
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/jquery.easing.1.3.js"></script>
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/jquery.fancybox.pack.js"></script>
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/isotope.pkgd.min.js"></script>
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/jquery.knob.js"></script>
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/jquery.stellar.min.js"></script>
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/jquery.selectBox.min.js"></script>
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/jquery.tubular.1.0.js"></script>
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/SmoothScroll.js"></script>
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/country.js"></script>
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/spin.min.js"></script>
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/ladda.min.js"></script>
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/masonry.pkgd.min.js"></script>
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/morris.min.js"></script>
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/raphael.min.js"></script>
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/video.js"></script>
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/pixastic.custom.js"></script>
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/livicons-1.3.min.js"></script>
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/bootstrapValidator.min.js"></script>
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/bootstrap-datepicker.js"></script>
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/jplayer/jquery.jplayer.min.js"></script>
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/jplayer/jplayer.playlist.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&callback=initialize"></script>
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/main.js"></script>

<?php if( $vg_analytics ){ ?>
    <script>
        <?php echo $vg_analytics; ?>
    </script>
<?php } ?>

</body>
</html>