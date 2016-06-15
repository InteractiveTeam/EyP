<!DOCTYPE html>
<html class="no-js" lang="<?php bloginfo('language'); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?><?php wp_title('-'); ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
    <link rel="apple-touch-icon" sizes="57x57" href="/wp-content/themes/ax-eyp/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/wp-content/themes/ax-eyp/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/wp-content/themes/ax-eyp/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/wp-content/themes/ax-eyp/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/wp-content/themes/ax-eyp/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/wp-content/themes/ax-eyp/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/wp-content/themes/ax-eyp/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/wp-content/themes/ax-eyp/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/wp-content/themes/ax-eyp/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/wp-content/themes/ax-eyp/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/wp-content/themes/ax-eyp/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/wp-content/themes/ax-eyp/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/wp-content/themes/ax-eyp/images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/wp-content/themes/ax-eyp/images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="/wp-content/themes/ax-eyp/css/normalize.css">
    <link rel="stylesheet" href="/wp-content/themes/ax-eyp/css/font-awesome.min.css">
    <link rel="stylesheet" href="/wp-content/themes/ax-eyp/css/ax-main.css">
    <link rel="stylesheet" href="/wp-content/themes/ax-eyp/css/ax-font.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script>window.jQuasdasdery || document.write('<script src="/wp-content/themes/ax-eyp/js/jquery-1.12.3.min.js"><\/script>')</script>
    <script src="/wp-content/themes/ax-eyp/js/ax-main.js"></script>
    <?php wp_head(); ?>
</head>
    <body>
    
    <section class="ax-cont-responsive">
        <div class="ax-nav-responsive">
            <i class="fa fa-times"></i>
            <nav>
                <div class="ax-cont-menu-responsive"></div>
            </nav>
        </div>    
    </section>              
            
    <main>
        <div class="ax-main">
            <section>
                <div class="ax-section ax-cont-header">
                   <header>
                       <div class="ax-header">
                           <div class="ax-menu-header">
                              <div class="ax-center">
                                  <div class="col span_7_of_12">
                                        <div class="ax-menu-col-1">
                                            <?php dynamic_sidebar("menu header"); ?> 
                                        </div>
                                   </div>
                                   <div class="col span_5_of_12 ax-cont-search-responsive">
                                        <div class="ax-link-prev">
                                            <?php dynamic_sidebar("contactenos"); ?> 
                                        </div>
                                        <div class="ax-social">
                                            <?php dynamic_sidebar("redes sociales"); ?> 
                                        </div>
                                   </div>
                                </div>
                           </div>
                           <div class="ax-center ax-mark-header">
                               <div class="ax-logo">
                                       <a href="<?php echo site_url(); ?>"><img alt="" src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" /></a>
                               </div>
                               <a href="#" class="ax-openMenu"><i class="fa fa-bars"></i></a>
                               <div class="ax-nav-header">
                                   <nav>
                                       <ul class="ax-menu-items">
                                           <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
                                       </ul>
                                   </nav>
                               </div>
                               <div class="ax-search">
                                   <i class="fa fa-search" aria-hidden="true"></i>
                                   <div class="ax-search-cont">
                                        <form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
                                          <div>
                                            <input type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
                                            <input type="submit" id="searchsubmit" value="Buscar" />
                                          </div>
                                        </form>
                                    </div>
                               </div>
                           </div>
                       </div>
                   </header>
                </div>
            </section>