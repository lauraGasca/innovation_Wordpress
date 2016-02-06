<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

    <title><?php wp_title('|', true, 'right');?> <?php bloginfo('name'); ?></title>

    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!-- Cargando la Hoja de Estilos  -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" >
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png">

    <!--================================= Style Sheets =================================-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800italic,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300,100' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,200,100,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css' rel='stylesheet' type='text/css'>
    <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css' rel='stylesheet' type='text/css'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css' rel='stylesheet' type='text/css'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.transitions.css' rel='stylesheet' type='text/css'>
    <link href='https://cdn.jsdelivr.net/prettyphoto/3.1.6/css/prettyPhoto.css' rel='stylesheet' type='text/css'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.0.2/css/hover-min.css' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/global.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/strokegap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/animate.css">

    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/settings.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/responsive.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/main.css">

    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>

    <!-- Pingbacks -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>

    <?php wp_head(); ?>


</head>
<body <?php body_class(); ?> data-spy="scroll" data-target="#sticktop" data-offset="70">

<!-- preloader -->
<div id="wrapper">
    <!--Header Section Start Here -->
    <header id="header">
        <div class="primary-header">
            <div class="container">
                <div class="row ">
                    <ul class="contact-detail2 col-xs-5 col-sm-4 pull-left">
                        <li><a href="tel://4611324925"><i class="fa fa-phone hidden-xs"></i> (461)132-4925 </a> </li>
                    </ul>
                    <ul class="contact-detail2 col-xs-7 col-sm-5 pull-left">
                        <li><a><i class="fa fa-envelope-o hidden-xs"></i> contacto@aitecsa.com.mx</a> </li>
                    </ul>
                    <div class="social-links col-xs-12 col-sm-3 pull-right">
                        <ul class="social-icons hidden-xs pull-right">
                            <li> <a href="https://www.facebook.com/aitecsa" target="_blank"><i class="fa fa-facebook-square"></i></a> </li>
                            <!--<li> <a href="http://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a> </li>
                            <li> <a href="http://pinterest.com" target="_blank"><i class="fa fa-pinterest"></i></a> </li>
                            <li> <a href="http://dribble.com/" target="_blank"><i class="fa fa-skype"></i></a> </li>-->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar navbar-default" role="navigation">
            <div class="container">

                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="col-xs-6 col-sm-2 navbar-brand" title="Welcome to Matrix">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/AITECSA-logo-s2.png">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <?php
                    wp_nav_menu(array(
                        'theme_location'  => 'menu-principal',
                        'container'       => 'nav',
                        'menu_class'      => 'nav navbar-nav',
                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>'
                    ));
                    ?>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </div>
    </header>
    <!-- Header Section End Here -->

    <!-- Site Content -->
    <div id="main">
        <!--Breadcrumb Section Start Here-->
        <div class="breadcrumb-section" id="contact">
            <div class="container">
                <div class="row breadcrumbs">
                    <div class="col-xs-12 col-sm-8 col-md-8">
                        <h1><?php if ( is_category() ): single_cat_title(); elseif ( is_tag() ) : single_tag_title(); elseif ( is_day() ) : _e('Archivo', 'amk');?>: <?php the_date(); elseif ( is_month() ) : _e('Archivo', 'amk');?>: <?php the_date('F Y'); elseif ( is_year() ) : _e('Archivo', 'amk');?>: <?php the_date('Y');  elseif ( is_search() ) : _e('Resultados para', 'amk');?>: <?php echo the_search_query();  elseif ( is_author() ) : _e('Artículos por', 'amk');?>: <?php $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author)); echo $curauth->display_name;  elseif ( is_404() ) : _e('Error 404', 'amk');?>: <?php _e('Página no encontrada', 'amk'); else: bloginfo('name'); endif; ?></h1>
                    </div>
                </div>
            </div>
        </div>
        <!--Breadcrumb Section End Here-->