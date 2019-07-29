<?php
/**
 * @package our
 **/?>
 <!DOCTYPE html>
 <html lang="en" "<?php language_attributes(); ?>">

 <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <!-- Custom CDN(s) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <!-- Adds .box for same height columns -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.0/jquery.matchHeight-min.js"></script>
    <!-- Adds CSS for slick slider -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.0/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.0/slick/slick-theme.css"/>
    <!-- Bootstrap Dropdown Hover CSS -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-dropdownhover.min.css" rel="stylesheet">
    <!-- Adds CSS for fancybox -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" rel="stylesheet">
    <!-- Custom Font(s) -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700|Roboto:400,700" rel="stylesheet">
    <!-- Adds JS for lazy -->
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.6/jquery.lazy.min.js"></script>
    <!-- Custom Script(s) -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/custom-scripts.js"></script>
    <!-- Bootstrap Dropdown Hover JS -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap-dropdownhover.min.js"></script>
    <!-- Adds JS for slick slider -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.0/slick/slick.min.js"></script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <a href="#0" class="btt-top">Top</a>
    <div class="container-fluid navigation-section">
        <div class="row ns-1">
            <div class="topbar">
                <div class="container align-right">
                    <div class="content">
                        <p class="white">FOR INFO CALL <a class="white" href="tel:850-913-2904"> 850-913-2904</a></p>
                        <div class="social">
                            <a href="https://www.facebook.com/BizInnoCtr/" target="blank"><img src="/wp-content/uploads/2018/06/facebook-icon.png" alt="Facebook Icon"></a>
                            <a href="https://twitter.com/BizInnoCtr" target="blank"><img src="/wp-content/uploads/2018/06/twitter-icon.png" alt="Twitter Icon"></a>
                            <a href="#" target="blank"><img src="/wp-content/uploads/2018/06/google-plus-logo.png" alt="Google Plus Icon"></a>
                            <a href="https://www.linkedin.com/company/bicpc" target="blank"><img src="/wp-content/uploads/2018/06/linkedin-logo.png" alt="LinkedIn Icon"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid bottom-level">
                <div class="container">
                    <div class="logo">
                        <a href="<?php echo get_home_url(); ?>"><img src="/wp-content/uploads/2018/06/header-logo.png" alt="BIC Logo"></a>
                        <a href="#"><img src="/wp-content/uploads/2018/06/gulfstate-cc-logo.png" alt="Gulf Coast State College Logo"></a>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 desktop-navbar">
                            <div class="toggle-section hidden-lg">
                                <button type="button" class="navbar-toggle collapsed">
                                  <span class="sr-only">Toggle navigation</span>
                                  <span class="icon-bar top-bar"></span>
                                  <span class="icon-bar middle-bar"></span>
                                  <span class="icon-bar bottom-bar"></span>
                              </button>
                          </div>
                          <nav id="primary-bootstrap-menu" class="navbar navbar-default navbar-desktop" data-hover="dropdown" data-animations="" role="navigation">
                            <?php wp_nav_menu( array( 'menu'=> 'primary', 'theme_location' => 'primary', 'depth' => 2, 'container' => 'div', 'container_class' => 'collapse navbar-collapse', 'container_id' => 'primary-navigation', 'menu_class' => 'nav navbar-nav', 'fallback_cb' => 'wp_bootstrap_navwalker::fallback', 'walker' => new wp_bootstrap_navwalker()) ); ?>
                        </nav>
                    </div>
                    <div class="col-xs-12 mobile-navbar">
                        <nav id="primary-bootstrap-menu" class="navbar navbar-default navbar-mobile" role="navigation">
                            <?php wp_nav_menu( array( 'menu'=> 'primary', 'theme_location' => 'primary', 'depth' => 2, 'container' => 'div', 'container_class' => 'navbar-collapse', 'container_id' => 'primary-navigation', 'menu_class' => 'nav navbar-nav', 'fallback_cb' => 'wp_bootstrap_navwalker::fallback', 'walker' => new wp_bootstrap_navwalker()) ); ?>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>