<!doctype html>
<html lang="en" dir="<?php _ec(request_service("language")->dir) ?>">
<head>

    <meta charset="utf-8">
    <meta name="keywords"
          content="<?php _ec(get_option("website_keyword", "social network, marketing, brands, businesses, agencies, individuals")) ?>"/>
    <meta name="description"
          content="<?php _ec(get_option("website_description", "Let start to manage your social media so that you have more time for your business.")) ?>"/>
    <meta name="author" content="stackposts.com"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php _ec(get_option("website_title", "#1 Social Media Management & Analysis Platform")) ?></title>
    <base href="<?php _ec(get_frontend_url()) ?>Assets/">

    <link rel="shortcut icon" href="<?php _ec(get_option("website_favicon", base_url("assets/img/favicon.svg"))) ?>"/>

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700&amp;display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;display=swap"
          rel="stylesheet">

    <!-- BOOTSTRAP CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- FONT ICONS -->
    <link href="css/flaticon.css" rel="stylesheet">

    <!-- PLUGINS STYLESHEET -->
    <link href="css/menu.css" rel="stylesheet">
    <link id="effect" href="css/dropdown-effects/fade-down.css" media="all" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet">
    <link href="css/owl.carousel.min.css" rel="stylesheet">
    <link href="css/owl.theme.default.min.css" rel="stylesheet">
    <link href="css/lunar.css" rel="stylesheet">

    <!-- ON SCROLL ANIMATION -->
    <link href="css/animate.css" rel="stylesheet">

    <link href="css/pink-theme.css" rel="stylesheet">
    <!-- RESPONSIVE CSS -->
    <link href="css/responsive.css" rel="stylesheet">
    <script src="js/jquery-3.7.0.min.js"></script>
    <script type="text/javascript">
        var PATH = '<?php _ec(base_url() . "/")?>';
        var csrf = "<?php _ec(csrf_hash()) ?>";
    </script>
</head>
<body>

<!-- PRELOADER SPINNER
============================================= -->
<div id="loading" class="loading--theme">
    <div id="loading-center"><span class="loader"></span></div>
</div>


<!-- PAGE CONTENT
============================================= -->
<div id="page" class="page font--jakarta">


    <!-- HEADER
    ============================================= -->
    <header id="header" class="tra-menu navbar-dark white-scroll">
        <div class="header-wrapper">


            <!-- MOBILE HEADER -->
            <div class="wsmobileheader clearfix">
                <span class="smllogo"><img src="images/logo-pink.png" alt="mobile-logo"></span>
                <a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
            </div>


            <!-- NAVIGATION MENU -->
            <div class="wsmainfull menu clearfix">
                <div class="wsmainwp clearfix">

                    <?php if (uri("segment", 1) == ""): ?>
                        <!-- HEADER WHITE LOGO -->
                        <div class="desktoplogo">
                            <a href="#" class="logo-white"><img
                                        src="<?php _ec(get_option("website_logo_light", base_url("assets/img/logo-light.svg"))) ?>"
                                        alt="logo"></a>
                        </div>

                    <?php else: ?>
                        <!-- HEADER BLACK LOGO -->
                        <div class="desktoplogo">
                            <a href="#" class="logo-black"><img
                                        src="<?php _ec(get_option("website_logo_color", base_url("assets/img/logo-color.svg"))) ?>"
                                        alt="logo"></a>
                        </div>
                    <?php endif ?>

                    <!-- MAIN MENU -->
                    <nav class="wsmenu clearfix">
                        <ul class="wsmenu-list nav-theme">
                            <li class="nl-simple" aria-haspopup="true"><a href="<?php _ec( base_url() )?>" class="h-link"><?php _e("Home")?></a></li>
                            <li class="nl-simple" aria-haspopup="true"><a href="<?php _ec( base_url("features") )?>" class="h-link"><?php _e("Features")?></a></li>
                            <?php if (find_modules("payment")): ?>
                            <li class="nl-simple" aria-haspopup="true"><a href="<?php _ec( base_url("pricing") )?>" class="h-link"><?php _e("Pricing")?></a></li>
                            <?php endif ?>
                            <li class="nl-simple" aria-haspopup="true"><a href="<?php _ec( base_url("faqs") )?>" class="h-link"><?php _e("FAQs")?></a></li>
                            <?php if (find_modules("blog_manager")): ?>
                            <li class="nl-simple" aria-haspopup="true"><a href="<?php _ec( base_url("blogs") )?>" class="h-link"><?php _e("Blogs")?></a></li>
                            <?php endif ?>
                            <?php if ( get_option("signup_status", 1) ): ?>
                            <li class="nl-simple reg-fst-link mobile-last-link" aria-haspopup="true">
                                <a href="<?php _ec( base_url("login") )?>" class="h-link"><?php _e("Login")?></a>
                            </li>
                            <li class="nl-simple" aria-haspopup="true">
                                <a href="<?php _ec( base_url("signup") )?>" class="btn r-04 btn--theme hover--tra-black last-link"><?php _e("Sign up")?></a>
                            </li>
                            <?php endif ?>
                        </ul>
                    </nav>    <!-- END MAIN MENU -->


                </div>
            </div>    <!-- END NAVIGATION MENU -->


        </div>     <!-- End header-wrapper -->
    </header>    <!-- END HEADER -->

    <?php _ec( $content )?>
    <!-- FOOTER-3
    ============================================= -->
    <footer id="footer-3" class="pt-100 footer">
        <div class="container">
            <!-- FOOTER CONTENT -->
            <div class="row">
                <!-- FOOTER LOGO -->
                <div class="col-xl-4">
                    <div class="footer-info">
                        <img class="footer-logo" src="<?php _ec( get_option("website_logo_color", base_url("assets/img/logo-color.svg")) )?>" alt="footer-logo">
                        <div class="footer-contact-info mt-4">
                            <p><?php _e("Helping you execute a comprehensive marketing plan, manage your brands by scheduling your posts to optimize performance on many social media platforms")?></p>
                        </div>
                    </div>
                </div>


                <!-- FOOTER LINKS -->
                <div class="col-sm-4 col-md-4 col-xl-2">
                    <div class="footer-links fl-1">

                        <!-- Title -->
                        <h6 class="s-17 w-700"><?php _e("Quick links")?></h6>

                        <!-- Links -->
                        <ul class="foo-links clearfix">
                            <li><p><a href="<?php _ec( base_url("faqs") )?>"><?php _e("FAQs")?></a></p></li>
                            <?php if (find_modules("blog_manager")): ?>
                            <li><p><a href="<?php _ec( base_url("blogs") )?>"><?php _e("Blog")?></a></p></li>
                            <?php endif ?>
                            <li><p><a href="<?php _ec( base_url("login") )?>"><?php _e("Login")?></a></p></li>
                            <li><p><a href="<?php _ec( base_url("signup") )?>"><?php _e("Signup")?></a></p></li>
                        </ul>

                    </div>
                </div>    <!-- END FOOTER LINKS -->


                <!-- FOOTER LINKS -->
                <div class="col-sm-4 col-md-4 col-xl-2">
                    <div class="footer-links fl-2">

                        <!-- Title -->
                        <h6 class="s-17 w-700"><?php _e("Useful Links")?></h6>

                        <!-- Links -->
                        <ul class="foo-links clearfix">
                            <li><p><a href="<?php _e( base_url("terms_of_service") )?>"><?php _e("Terms of Use")?></a></p></li>
                            <li><p><a href="<?php _e( base_url("privacy_policy") )?>"><?php _e("Privacy Policy")?></a></p></li>
                        </ul>

                    </div>
                </div>    <!-- END FOOTER LINKS -->
               
            </div>    <!-- END FOOTER CONTENT -->
            <hr>    <!-- FOOTER DIVIDER LINE -->
            <!-- BOTTOM FOOTER -->
            <div class="bottom-footer">
                <div class="row row-cols-1 row-cols-md-2 d-flex align-items-center">

                    <!-- FOOTER COPYRIGHT -->
                    <div class="col">
                        <div class="footer-copyright"><p class="p-sm"><?php _e("© Copyright 2023. All Rights Reserved")?></p></div>
                    </div>
                </div>  <!-- End row -->
            </div>    <!-- END BOTTOM FOOTER -->


        </div>     <!-- End container -->
    </footer>   <!-- END FOOTER-3 -->


</div>    <!-- END PAGE CONTENT -->


<!-- EXTERNAL SCRIPTS
============================================= -->

<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<script src="js/jquery.easing.js"></script>
<script src="js/jquery.appear.js"></script>
<script src="js/menu.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/pricing-toggle.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/request-form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/lunar.js"></script>
<script src="js/wow.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flat-ui/2.3.0/js/flat-ui.min.js"></script>

<!-- Custom Script -->
<script src="js/custom.js"></script>


</body>


</html>