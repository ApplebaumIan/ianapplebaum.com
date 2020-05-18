<?php
/**
 * @package		Joomla.Site
 * @subpackage	Templates.vg_stability
 * @copyright	Copyright (C) 2014 Valentin Garcia - http://www.htmgarcia.com - All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
defined('_JEXEC') or die;
?>
<!doctype html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
    <meta charset="utf-8">
    <meta class="viewport" name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo JText::_('VG_404'); ?></title>

    <!-- Google fonts -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Arimo:400,700,400italic,700italic">

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
            font-family:'Arimo', sans-serif;
        }
    </style>

</head>
<body class="page-404 fixed-header fullwidth">

<div class="page-box">
    <div class="page-box-content">

        <section id="main">
            <article class="container">

                <div class="row">
                    <div class="col-sm-6 col-md-6">
                        <div class="box-404 bg">
                            <h1><?php echo JText::_('VG_404'); ?></h1>
                            <h2><?php echo JText::_('VG_NOT_FOUND'); ?></h2>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <p><img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/logo.svg" alt="" /></p>
                        <h3><?php echo JText::_('VG_404_DESC'); ?></h3>
                        <p><a class="btn btn-default" href="<?php echo JURI::base(); ?>"><?php echo JText::_('VG_404_HOME'); ?></a></p>
                    </div>
                </div>

            </article>
        </section><!-- #main -->

    </div><!-- .page-box-content -->
</div><!-- .page-box -->

</body>
</html>