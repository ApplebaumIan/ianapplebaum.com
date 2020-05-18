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


/********************************* FUNCTIONS *********************************/

require('includes' . DIRECTORY_SEPARATOR . 'functions.php');

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
	<!-- terminal -->
	 <link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/terminal.js/terminal.css">
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
        #top-box,
        .carousel-box .next:hover,
        .carousel-box .prev:hover,
        .product .product-hover,
        #footer .up:hover,
        .btn,
        .btn:visited,
        .slider .slider-nav,
        .panel-group .active.panel .panel-heading > .panel-title > a,
        .panel-group .active.panel .panel-heading > .panel-title > a:hover,
        .banner-set .pagination a:hover,
        .employee .employee-hover,
        .carousel-box .pagination a:hover,
        .sidebar .menu li.active > a,
        .pagination > li > a:hover,
        .pagination > li > a:focus,
        .sidebar .tags a:hover,
        .sidebar .banners .banner-text,
        #catalog .category-img .description,
        .product-bottom .related-products header:before,
        .slider.rs-slider .tparrows,
        .slider.rs-slider .tparrows:hover,
        .toolbar .sort-catalog .dropdown-toggle,
        .toolbar .grid-list .grid,
        .toolbar .grid-list .list,
        .toolbar .up-down,
        .toolbar .up-down.active,
        .toolbar .grid-list a.grid:hover,
        .toolbar .grid-list a.list:hover,
        .pagination > .active > a,
        .pagination > .active > span,
        .pagination > .active > span:hover,
        .sidebar .tags a,
        .sidebar .menu li.parent > a .open-sub:before,
        .sidebar .menu li.parent > a .open-sub:after,
        .panel-group .panel-default .panel-heading > .panel-title > a:before,
        .panel-group .panel-default .panel-heading > .panel-title > a:after,
        .new-radio.checked span,
        .list .product .actions a:hover,
        .product-page .col-md-7 .actions a:hover,
        .product-page .image-box .thumblist-box .prev:hover,
        .product-page .image-box .thumblist-box .next:hover,
        .accordion-tab > li > a .open-sub:before,
        .accordion-tab > li > a .open-sub:after,
        .products-tab .accordion-tab > li > a .open-sub:before,
        .products-tab .accordion-tab > li > a .open-sub:after,
        .sidebar .calendar-wrap caption,
        .btn-group.open .btn.dropdown-toggle,
        .product .limit-offer,
        .product .not-rotation-actions,
        .fancybox-nav span:hover,
        .header .primary .navbar .btn-navbar .icon-bar,
        .progressive-slider-two .pagination a,
        .progressive-slider-two .pagination a:hover,
        .progressive-slider-two .pagination .selected {
            background-color: <?php echo $vg_color; ?>;
        }
        .slider .slider-nav {
            background-color: <?php echo templateVG::hex2rgba($vg_color,.97); ?>;
        }
        .product .limit-offer,
        .product .not-rotation-actions {
            background-color: <?php echo templateVG::hex2rgba($vg_color,.9); ?>;
        }
        .btn:hover,
        .btn:focus,
        .btn:active,
        .btn.active,
        .btn.disabled,
        .btn[disabled] {
            background-color: <?php echo templateVG::hex2rgba($vg_color,.8); ?>;
        }
        #catalog .category-img .description,
        .toolbar .sort-catalog .dropdown-toggle,
        .toolbar .grid-list .grid,
        .toolbar .grid-list .list,
        .toolbar .up-down,
        .toolbar .up-down.active,
        .pagination > .active > a,
        .pagination > .active > span,
        .pagination > .active > span:hover,
        .sidebar .tags a,
        .btn-group.open .btn.dropdown-toggle {
            background-color: <?php echo templateVG::hex2rgba($vg_color,.7); ?>;
        }
        .sidebar .banners .banner-text {
            background-color: <?php echo templateVG::hex2rgba($vg_color,.65); ?>;
        }
        .slider.rs-slider .tparrows,
        .product-page .add-cart-form .number .regulator a:hover,
        .progressive-slider-two .pagination a {
            background-color: <?php echo templateVG::hex2rgba($vg_color,.5); ?>;
        }
        .pricing .bottom-box {
            background-color: <?php echo templateVG::hex2rgba($vg_color,.05); ?>;
        }
        .pricing:before {
            background-color: <?php echo templateVG::hex2rgba($vg_color,.06); ?>;
        }
        .pricing .options li,
        .pricing .bottom-box {
            border-color: <?php echo templateVG::hex2rgba($vg_color,.1); ?>;
        }
        .header .cart-header .dropdown-toggle,
        #footer .newsletter input:focus + .submit,
        .icon,
        .big-icon,
        .big-icon:visited,
        .service .icon,
        .close:hover,
        .close:focus,
        .img-thumbnail:hover .bg-images i:before,
        .box-404 h1,
        .gallery-images:hover .bg-images i:before,
        .features-block .header-box .icon-box,
        .features-block .header-box,
        .sidebar .newsletter input:focus + .submit,
        .sidebar .section .selected .close:hover,
        .package .title a,
        .package .price-box .price,
        .package .price-box .icon,
        .pricing .title a,
        .pricing .options li span,
        .pricing .options li.active,
        .banner-set .next:hover,
        .banner-set .prev:hover,
        .btn.btn-border,
        .btn.btn-border .caret,
        .product-remove:hover,
        .one-page .header .primary .navbar .nav .active {
            color: <?php echo $vg_color; ?>;
        }
        .pricing .bottom-box .more {
            color: <?php echo templateVG::hex2rgba($vg_color,.7); ?>;
        }
        .pricing .options li {
            color: <?php echo templateVG::hex2rgba($vg_color,.4); ?>;
        }
        .phone-header a svg path,
        .search-header a svg path,
        .product .actions a svg path,
        .sidebar .wishlist .add-cart:hover path,
        .header .cart-header .dropdown-toggle .icon svg path,
        .search-active .search-submit svg path,
        .new-checkbox svg polygon,
        .product-bottom .related-products li .button-box .wishlist:hover svg path,
        .jslider .jslider-pointer svg path,
        .rating-box .rating svg polygon,
        .search-result .search-form .search-submit svg path {
            fill: <?php echo $vg_color; ?>;
        }
        @media (max-width: 979px) {
            .header .primary .navbar .nav > .parent.active > a,
            .header .primary .navbar .nav > .parent.active:hover > a,
            .header .primary .navbar .nav .open-sub span,
            .accordion-tab > li.active > a,
            .accordion-tab > li.active > a:hover,
            .accordion-tab > li.active > a:focus,
            .accordion-tab > li.active:hover > a,
            .products-tab .accordion-tab > li.active > a,
            .products-tab .accordion-tab > li.active:hover > a {
                background-color: <?php echo $vg_color; ?>;
            }
            .header .primary .navbar .nav > .parent.active > a,
            .header .primary .navbar .nav > .parent.active:hover > a {
                border-color: <?php echo $vg_color; ?>;
            }
        }
        <?php echo $vg_css; ?>
    </style>

</head>
<body class="<?php echo $pageclass; ?> fixed-header <?php echo $vg_layout; ?>" style="<?php echo $vg_bodybg; ?>">

<span id="block0"></span>

<div class="page-box">
<div class="page-box-content">

<?php if( $this->countModules('top') ): ?>
    <div id="top-box">
        <div class="container">
            <jdoc:include type="modules" name="top" style="bartop" />
        </div>
    </div>
<?php endif; ?>

<header class="header header-two">
    <div class="header-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-md-2 col-lg-3 logo-box">
                    <div class="logo">
                        <?php if( $vg_logo_type == 'image' ): ?>
                            <a href="<?php echo JURI::base(); ?>">
                                <img src="<?php echo $vg_logo_image; ?>" alt="<?php echo htmlspecialchars( $sitename ); ?>" class="logo-img" />
                            </a>
                        <?php else: ?>
                            <?php echo $vg_logo_text; ?>
                        <?php endif; ?>
                    </div>
                </div><!-- .logo-box -->

                <div class="col-xs-6 col-md-10 col-lg-9 right-box">
                    <div class="right-box-wrapper">

                        <div class="header-icons">

                            <?php if( $vg_searchpos ): ?>
                                <div class="search-header hidden-600">
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve">
                        <path d="M12.001,10l-0.5,0.5l-0.79-0.79c0.806-1.021,1.29-2.308,1.29-3.71c0-3.313-2.687-6-6-6C2.687,0,0,2.687,0,6
                            s2.687,6,6,6c1.402,0,2.688-0.484,3.71-1.29l0.79,0.79l-0.5,0.5l4,4l2-2L12.001,10z M6,10c-2.206,0-4-1.794-4-4s1.794-4,4-4
                            s4,1.794,4,4S8.206,10,6,10z"></path>
                                            <image href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/png-icons/search-icon.png" alt="" width="16" height="16" style="vertical-align: top;">
                    </svg>
                                    </a>
                                </div><!-- .search-header -->
                            <?php endif; ?>

                            <?php if( $vg_phonepos ): ?>
                                <div class="phone-header hidden-600">
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve">
                        <path d="M11.001,0H5C3.896,0,3,0.896,3,2c0,0.273,0,11.727,0,12c0,1.104,0.896,2,2,2h6c1.104,0,2-0.896,2-2
                            c0-0.273,0-11.727,0-12C13.001,0.896,12.105,0,11.001,0z M8,15c-0.552,0-1-0.447-1-1s0.448-1,1-1s1,0.447,1,1S8.553,15,8,15z
                            M11.001,12H5V2h6V12z"></path>
                                            <image href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/png-icons/phone-icon.png" alt="" width="16" height="16" style="vertical-align: top;">
                    </svg>
                                    </a>
                                </div><!-- .phone-header -->
                            <?php endif; ?>

                        </div><!-- .header-icons -->

                        <div class="primary">
                            <div class="navbar navbar-default" role="navigation">

                                <button type="button" class="navbar-toggle btn-navbar collapsed" data-toggle="collapse" data-target=".primary .navbar-collapse">
                                    <span class="text"><?php echo JText::_('VG_MENU'); ?></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>

                                <nav class="collapse collapsing navbar-collapse">

                                    <?php if( $this->countModules('menu') )://START MAIN MENU ?>
                                        <jdoc:include type="modules" name="menu" style="mymenu" />
                                    <?php else: ?>
                                        <p class="alert"><?php echo JText::_('VG_MENU_ALERT'); ?></p>
                                    <?php endif;//END MAIN MENU ?>

                                </nav>

                            </div>
                        </div><!-- .primary -->
                    </div>
                </div>

                <?php if( $vg_phonepos ): ?>
                    <div class="phone-active col-sm-9 col-md-9">
                        <a href="#" class="close"><span><?php echo JText::_('VG_CLOSE'); ?></span>×</a>

                        <?php if( $this->countModules('phone') ): ?>
                            <jdoc:include type="modules" name="phone" style="top" />
                        <?php else: ?>
                            <p class="vg-alert-position"><?php echo JText::_('VG_PHONE_ALERT'); ?></p>
                        <?php endif; ?>

                    </div>
                <?php endif; ?>

                <?php if( $vg_searchpos ): ?>
                    <div class="search-active col-sm-9 col-md-9">
                        <a href="#" class="close"><span><?php echo JText::_('VG_CLOSE'); ?></span>×</a>

                        <?php if( $this->countModules('search') ): ?>
                            <jdoc:include type="modules" name="search" style="top" />
                        <?php else: ?>
                            <p class="vg-alert-position"><?php echo JText::_('VG_SEARCH_ALERT'); ?></p>
                        <?php endif; ?>

                    </div>
                <?php endif; ?>

            </div><!--.row -->
        </div>
    </div><!-- .header-wrapper -->
</header><!-- .header -->

<div class="slider rs-slider">
    <div class="tp-banner-container">
        <div class="tp-banner">
            <jdoc:include type="modules" name="slide" style="top" />
        </div>
    </div>
</div>

<jdoc:include type="modules" name="carousel" style="top" />

<section id="main">
<article class="content">
<div class="container">

    <?php if( $this->countModules('heading-a') or $this->countModules('heading-b') or $this->countModules('heading-c') or $this->countModules('heading-d') ):// <-- C1. HEADING ?>

        <div class="row" id="vg-heading">

            <?php if( $this->countModules('heading-a') )://<-- HEADING-A ?>

                <div class="<?php echo $contentheading; ?>">

                    <jdoc:include type="modules" name="heading-a" style="heading" />

                </div>

            <?php endif;//HEADING-A --> ?>
            <?php if( $this->countModules('heading-b') )://<-- HEADING-B ?>

                <div class="<?php echo $contentheading; ?>">

                    <jdoc:include type="modules" name="heading-b" style="heading" />

                </div>

            <?php endif;//HEADING-B --> ?>
            <?php if( $this->countModules('heading-c') )://<-- HEADING-C ?>

                <div class="<?php echo $contentheading; ?>">

                    <jdoc:include type="modules" name="heading-c" style="heading" />

                </div>

            <?php endif;//HEADING-C --> ?>
            <?php if( $this->countModules('heading-d') )://<-- HEADING-D ?>

                <div class="<?php echo $contentheading; ?>">

                    <jdoc:include type="modules" name="heading-d" style="heading" />

                </div>

            <?php endif;//HEADING-D --> ?>

        </div>

    <?php endif;//HEADING .C1 --> ?>

    <?php if( $this->countModules('bodytop-a') or $this->countModules('bodytop-b') or $this->countModules('bodytop-c') or $this->countModules('bodytop-d') ):// <-- C2. BODYTOP ?>

        <span id="block1"></span>

        <div class="row" id="vg-bodytop">

            <?php if( $this->countModules('bodytop-a') )://<-- BODYTOP-A ?>

                <div class="<?php echo $contentbodytop; ?>">

                    <jdoc:include type="modules" name="bodytop-a" style="heading" />

                </div>

            <?php endif;//BODYTOP-A --> ?>
            <?php if( $this->countModules('bodytop-b') )://<-- BODYTOP-B ?>

                <div class="<?php echo $contentbodytop; ?>">

                    <jdoc:include type="modules" name="bodytop-b" style="heading" />

                </div>

            <?php endif;//BODYTOP-B --> ?>
            <?php if( $this->countModules('bodytop-c') )://<-- BODYTOP-C ?>

                <div class="<?php echo $contentbodytop; ?>">

                    <jdoc:include type="modules" name="bodytop-c" style="heading" />

                </div>

            <?php endif;//BODYTOP-C --> ?>
            <?php if( $this->countModules('bodytop-d') )://<-- BODYTOP-D ?>

                <div class="<?php echo $contentbodytop; ?>">

                    <jdoc:include type="modules" name="bodytop-d" style="heading" />

                </div>

            <?php endif;//BODYTOP-D --> ?>

        </div>

    <?php endif;//BODYTOP .C2 --> ?>

</div>

<span id="block2"></span>

<div class="container">
    <div class="row" id="vg-mainbody">

        <?php if( $this->countModules('bodyleft') )://<-- LEFT ?>

            <div class="<?php echo $bodyright[0]; ?>">

                <jdoc:include type="modules" name="bodyleft" style="sidebar" />

            </div>

        <?php endif;//LEFT --> ?>

        <div class="<?php echo $bodyright[1]; ?> vg_component_box">

            <div class="container-disabled">
                <?php if(count($app->getMessageQueue())) : ?>
                    <jdoc:include type="message" />
                <?php endif; ?>
                <jdoc:include type="component" />
            </div>

        </div>

        <?php if( $this->countModules('bodyright') )://<-- RIGHT ?>

            <div class="<?php echo $bodyright[2]; ?>">

                <jdoc:include type="modules" name="bodyright" style="sidebar" />

            </div>

        <?php endif;//RIGHT --> ?>

    </div>
</div>

<?php if( $this->countModules('bodybottom-a') or $this->countModules('bodybottom-b') or $this->countModules('bodybottom-c') or $this->countModules('bodybottom-d') ):// <-- C3. BODYBOTTOM ?>

    <span id="block3"></span>

    <div style="background-color:<?php echo $vg_bodybottom_hex; ?>" class="full-width-box cm-padding-bottom-36 <?php echo ($vg_bodybottom_img) ? 'background-image-available' : ''; ?>" id="vg-bodybottom">

        <?php if($vg_bodybottom_img): ?>
            <div class="fwb-bg fwb-paralax" data-stellar-background-ratio="0.5"
                 style="background-image: url(<?php echo $this->baseurl . '/' . $vg_bodybottom_img . ')' ?>">
                <div class="overlay"></div>
            </div>
        <?php endif; ?>

        <?php if($vg_bodybottom_video): ?>
            <div class="fwb-bg fwb-video band-16">
                <?php echo $vg_bodybottom_video; ?>
            </div>
        <?php endif; ?>

        <div class="container">
            <div class="row">

                <?php if( $this->countModules('bodybottom-a') )://<-- BODYBOTTOM-A ?>

                    <div class="<?php echo $contentbodybottom; ?>">

                        <jdoc:include type="modules" name="bodybottom-a" style="heading" />

                    </div>

                <?php endif;//BODYBOTTOM-A --> ?>
                <?php if( $this->countModules('bodybottom-b') )://<-- BODYBOTTOM-B ?>

                    <div class="<?php echo $contentbodybottom; ?>">

                        <jdoc:include type="modules" name="bodybottom-b" style="heading" />

                    </div>

                <?php endif;//BODYBOTTOM-B --> ?>
                <?php if( $this->countModules('bodybottom-c') )://<-- BODYBOTTOM-C ?>

                    <div class="<?php echo $contentbodybottom; ?>">

                        <jdoc:include type="modules" name="bodybottom-c" style="heading" />

                    </div>

                <?php endif;//BODYBOTTOM-C --> ?>
                <?php if( $this->countModules('bodybottom-d') )://<-- BODYBOTTOM-D ?>

                    <div class="<?php echo $contentbodybottom; ?>">

                        <jdoc:include type="modules" name="bodybottom-d" style="heading" />

                    </div>

                <?php endif;//BODYBOTTOM-D --> ?>

            </div>
        </div>
    </div>

<?php endif;//BODYBOTTOM .C3 --> ?>

<?php if( $this->countModules('inner-a') or $this->countModules('inner-b') or $this->countModules('inner-c') or $this->countModules('inner-d') ):// <-- C3. INNER ?>

    <span id="block4"></span>

    <div style="background-color:<?php echo $vg_inner_hex; ?>" class="full-width-box cm-padding-bottom-36 <?php echo ($vg_inner_img) ? 'background-image-available' : ''; ?>" id="vg-inner">

        <?php if($vg_inner_img): ?>
            <div class="fwb-bg fwb-paralax" data-stellar-background-ratio="0.5"
                 style="background-image: url(<?php echo $this->baseurl . '/' . $vg_inner_img . ')' ?>">
                <div class="overlay"></div>
            </div>
        <?php endif; ?>

        <?php if($vg_inner_video): ?>
            <div class="fwb-bg fwb-video band-16">
                <?php echo $vg_inner_video; ?>
            </div>
        <?php endif; ?>

        <div class="container">
            <div class="row">

                <?php if( $this->countModules('inner-a') )://<-- INNER-A ?>

                    <div class="<?php echo $contentinner; ?>">

                        <jdoc:include type="modules" name="inner-a" style="heading" />

                    </div>

                <?php endif;//INNER-A --> ?>
                <?php if( $this->countModules('inner-b') )://<-- INNER-B ?>

                    <div class="<?php echo $contentinner; ?>">

                        <jdoc:include type="modules" name="inner-b" style="heading" />

                    </div>

                <?php endif;//INNER-B --> ?>
                <?php if( $this->countModules('inner-c') )://<-- INNER-C ?>

                    <div class="<?php echo $contentinner; ?>">

                        <jdoc:include type="modules" name="inner-c" style="heading" />

                    </div>

                <?php endif;//INNER-C --> ?>
                <?php if( $this->countModules('inner-d') )://<-- INNER-D ?>

                    <div class="<?php echo $contentinner; ?>">

                        <jdoc:include type="modules" name="inner-d" style="heading" />

                    </div>

                <?php endif;//INNER-D --> ?>

            </div>
        </div>
    </div>

<?php endif;//INNER .C4 --> ?>

<?php if( $this->countModules('showcase') )://<-- .C6 ?>

    <span id="block5"></span>

    <div style="background-color:<?php echo $vg_showcase_hex; ?>" class="full-width-box cm-padding-bottom-36 <?php echo ($vg_showcase_img) ? 'background-image-available' : ''; ?>" id="vg-showcase">

        <?php if($vg_showcase_img): ?>
            <div class="fwb-bg fwb-paralax" data-stellar-background-ratio="0.5"
                 style="background-image: url(<?php echo $this->baseurl . '/' . $vg_showcase_img . ')' ?>">
                <div class="overlay"></div>
            </div>
        <?php endif; ?>

        <?php if($vg_showcase_video): ?>
            <div class="fwb-bg fwb-video band-16">
                <?php echo $vg_showcase_video; ?>
            </div>
        <?php endif; ?>

        <div class="container">
            <div class="row-fluid">
                <jdoc:include type="modules" name="showcase" style="heading" />
            </div>
        </div>

    </div>

<?php endif;// .C6 --> ?>

<?php if( $this->countModules('user-a') or $this->countModules('user-b') or $this->countModules('user-c') or $this->countModules('user-d') ):// <-- C5. USER ?>

    <span id="block6"></span>

    <div style="background-color:<?php echo $vg_user_hex; ?>" class="full-width-box <?php echo ($vg_user_img) ? 'background-image-available' : ''; ?>" id="vg-user">

        <?php if($vg_user_img): ?>
            <div class="fwb-bg fwb-paralax" data-stellar-background-ratio="0.5"
                 style="background-image: url(<?php echo $this->baseurl . '/' . $vg_user_img . ')' ?>">
                <div class="overlay"></div>
            </div>
        <?php endif; ?>

        <?php if($vg_user_video): ?>
            <div class="fwb-bg fwb-video band-16">
                <?php echo $vg_user_video; ?>
            </div>
        <?php endif; ?>

        <div class="container">
            <div class="row">

                <?php if( $this->countModules('user-a') )://<-- USER-A ?>

                    <div class="<?php echo $contentuser; ?>">

                        <jdoc:include type="modules" name="user-a" style="heading" />

                    </div>

                <?php endif;//USER-A --> ?>
                <?php if( $this->countModules('user-b') )://<-- USER-B ?>

                    <div class="<?php echo $contentuser; ?>">

                        <jdoc:include type="modules" name="user-b" style="heading" />

                    </div>

                <?php endif;//USER-B --> ?>
                <?php if( $this->countModules('user-c') )://<-- USER-C ?>

                    <div class="<?php echo $contentuser; ?>">

                        <jdoc:include type="modules" name="user-c" style="heading" />

                    </div>

                <?php endif;//USER-C --> ?>
                <?php if( $this->countModules('user-d') )://<-- USER-D ?>

                    <div class="<?php echo $contentuser; ?>">

                        <jdoc:include type="modules" name="user-d" style="heading" />

                    </div>

                <?php endif;//USER-D --> ?>

            </div>
        </div>
    </div>

<?php endif;//USER .C5 --> ?>

<?php if( $this->countModules('box') )://<-- .C8 ?>

    <span id="block7"></span>

    <div style="background-color:<?php echo $vg_box_hex; ?>" id="cm-video-bg" class="full-width-box <?php echo ($vg_box_img) ? 'background-image-available' : ''; ?>">

        <?php if($vg_box_img): ?>
            <div class="fwb-bg fwb-paralax" data-stellar-background-ratio="0.5"
                 style="background-image: url(<?php echo $this->baseurl . '/' . $vg_box_img . ')' ?>">
                <div class="overlay"></div>
            </div>
        <?php endif; ?>

        <?php if($vg_box_video): ?>
            <div class="fwb-bg fwb-video band-16">
                <?php echo $vg_box_video; ?>
            </div>
        <?php endif; ?>

        <div class="container">
            <div class="row">
                <jdoc:include type="modules" name="box" style="heading" />
            </div>
        </div>

    </div>

<?php endif;// .C8 --> ?>

<?php if( $this->countModules('karma') )://<-- .C9 ?>

    <span id="block8"></span>

    <div style="background-color:<?php echo $vg_karma_hex; ?>" class="full-width-box cm-padding-bottom-36 <?php echo ($vg_karma_img) ? 'background-image-available' : ''; ?>" id="vg-karma">

        <?php if($vg_karma_img): ?>
            <div class="fwb-bg fwb-paralax" data-stellar-background-ratio="0.5"
                 style="background-image: url(<?php echo $this->baseurl . '/' . $vg_karma_img . ')' ?>">
                <div class="overlay"></div>
            </div>
        <?php endif; ?>

        <?php if($vg_karma_video): ?>
            <div class="fwb-bg fwb-video band-16">
                <?php echo $vg_karma_video; ?>
            </div>
        <?php endif; ?>

        <div class="container">
            <div class="row-fluid">
                <jdoc:include type="modules" name="karma" style="heading" />
            </div>
        </div>

    </div>

<?php endif;// .C9 --> ?>

<?php if( $this->countModules('team') )://<-- .C10 ?>

    <span id="block9"></span>
    <div style="background-color:<?php echo $vg_team_hex; ?>" class="full-width-box cm-padding-bottom-36 <?php echo ($vg_team_img) ? 'background-image-available' : ''; ?>" id="vg-team">

        <?php if($vg_team_img): ?>
            <div class="fwb-bg fwb-paralax" data-stellar-background-ratio="0.5"
                 style="background-image: url(<?php echo $this->baseurl . '/' . $vg_team_img . ')' ?>">
                <div class="overlay"></div>
            </div>
        <?php endif; ?>

        <?php if($vg_team_video): ?>
            <div class="fwb-bg fwb-video band-16">
                <?php echo $vg_team_video; ?>
            </div>
        <?php endif; ?>

        <div class="container">
            <div class="row-fluid">
                <jdoc:include type="modules" name="team" style="heading" />
            </div>
        </div>

    </div>

<?php endif;// .C10 --> ?>

<?php if( $this->countModules('bottom-a') or $this->countModules('bottom-b') or $this->countModules('bottom-c') or $this->countModules('bottom-d') ):// <-- C11. BOTTOM ?>

    <span id="block10"></span>

    <div style="background-color:<?php echo $vg_bottom_hex; ?>" class="cm-padding-bottom-36 <?php echo ($vg_bottom_img) ? 'background-image-available' : ''; ?>" id="vg-bottom">

        <?php if($vg_bottom_img): ?>
            <div class="fwb-bg fwb-paralax" data-stellar-background-ratio="0.5"
                 style="background-image: url(<?php echo $this->baseurl . '/' . $vg_bottom_img . ')' ?>">
                <div class="overlay"></div>
            </div>
        <?php endif; ?>

        <?php if($vg_bottom_video): ?>
            <div class="fwb-bg fwb-video band-16">
                <?php echo $vg_bottom_video; ?>
            </div>
        <?php endif; ?>

        <div class="container">
            <div class="row">

                <?php if( $this->countModules('bottom-a') )://<-- BOTTOM-A ?>

                    <div class="<?php echo $contentbottom; ?>">

                        <jdoc:include type="modules" name="bottom-a" style="heading" />

                    </div>

                <?php endif;//BOTTOM-A --> ?>
                <?php if( $this->countModules('bottom-b') )://<-- BOTTOM-B ?>

                    <div class="<?php echo $contentbottom; ?>">

                        <jdoc:include type="modules" name="bottom-b" style="heading" />

                    </div>

                <?php endif;//BOTTOM-B --> ?>
                <?php if( $this->countModules('bottom-c') )://<-- BOTTOM-C ?>

                    <div class="<?php echo $contentbottom; ?>">

                        <jdoc:include type="modules" name="bottom-c" style="heading" />

                    </div>

                <?php endif;//BOTTOM-C --> ?>
                <?php if( $this->countModules('bottom-d') )://<-- BOTTOM-D ?>

                    <div class="<?php echo $contentbottom; ?>">

                        <jdoc:include type="modules" name="bottom-d" style="heading" />

                    </div>

                <?php endif;//BOTTOM-D --> ?>

            </div>
        </div>
    </div>

<?php endif;//BOTTOM .C11 --> ?>

</article>
</section><!-- #main -->

</div><!-- .page-box-content -->
</div><!-- .page-box -->

<footer id="footer">
    <div class="footer-top">
        <span id="block11"></span>

        <?php if( $this->countModules('footer-a') or $this->countModules('footer-b') or $this->countModules('footer-c') or $this->countModules('footer-d') ):// <-- C11. FOOTER ?>

            <div id="vg-footer">

                <div class="container">
                    <div class="row sidebar">

                        <?php if( $this->countModules('footer-a') )://<-- FOOTER-A ?>

                            <aside class="<?php echo $contentfooter; ?>">

                                <jdoc:include type="modules" name="footer-a" style="footer" />

                            </aside>

                        <?php endif;//FOOTER-A --> ?>
                        <?php if( $this->countModules('footer-b') )://<-- FOOTER-B ?>

                            <aside class="<?php echo $contentfooter; ?>">

                                <jdoc:include type="modules" name="footer-b" style="footer" />

                            </aside>

                        <?php endif;//FOOTER-B --> ?>
                        <?php if( $this->countModules('footer-c') )://<-- FOOTER-C ?>

                            <aside class="<?php echo $contentfooter; ?>">

                                <jdoc:include type="modules" name="footer-c" style="footer" />

                            </aside>

                        <?php endif;//FOOTER-C --> ?>
                        <?php if( $this->countModules('footer-d') )://<-- FOOTER-D ?>

                            <aside class="<?php echo $contentfooter; ?>">

                                <jdoc:include type="modules" name="footer-d" style="footer" />

                            </aside>

                        <?php endif;//FOOTER-D --> ?>

                    </div>
                </div>
            </div>

        <?php endif;//FOOTER .C11 --> ?>

    </div><!-- .footer-top -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="copyright col-xs-12 col-sm-3 col-md-3">
                    <?php echo $vg_copy; ?>
                </div>

                <?php if( $this->countModules('footer-a') or $this->countModules('footer-b') or $this->countModules('footer-c') or $this->countModules('footer-d') ):// <-- C12. FOOTER ?>

                    <?php if( $this->countModules('footer-e') )://<-- FOOTER-E ?>

                        <aside class="<?php echo $contentfooter2; ?>">

                            <jdoc:include type="modules" name="footer-e" style="footer" />

                        </aside>

                    <?php endif;//FOOTER-E --> ?>
                    <?php if( $this->countModules('footer-b') )://<-- FOOTER-F ?>

                        <aside class="<?php echo $contentfooter2; ?>">

                            <jdoc:include type="modules" name="footer-f" style="footer" />

                        </aside>

                    <?php endif;//FOOTER-F --> ?>

                <?php endif;//FOOTER .C12 --> ?>

                <div class="col-xs-12 col-sm-3 col-md-3">

                    <?php if( $vg_top ){ ?>
                        <a href="#" class="up">
                            <span class="glyphicon glyphicon-arrow-up"></span>
                        </a>
                    <?php } ?>

                </div>
            </div>
        </div>
    </div><!-- .footer-bottom -->
</footer>
<div class="clearfix"></div>

<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/bootstrap.min.js"></script>
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/terminal.js/terminal.js"></script>
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
<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/main.js"></script>

<?php if( $vg_analytics ){ ?>
    <script>
        <?php echo $vg_analytics; ?>
    </script>
<?php } ?>

<jdoc:include type="modules" name="debug" style="none" />

</body>
</html>