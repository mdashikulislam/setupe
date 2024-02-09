<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="<?php _e( get_option("website_description", "Let start to manage your social media so that you have more time for your business.") )?>" />
    <meta name="keywords" content="<?php _e( get_option("website_keyword", "social network, marketing, brands, businesses, agencies, individuals") )?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php _e( get_option("website_title", "All-you-need social media toolkit for your businesses") )?></title>

    <link rel="shortcut icon" href="<?php _e( get_option("website_favicon", base_url("assets/img/favicon.svg")) )?>" />
    <base href="<?php _ec(get_frontend_url()) ?>Assets/">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet">

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

    <!-- TEMPLATE CSS -->
    <link href="css/pink-theme.css" rel="stylesheet">

    <!-- RESPONSIVE CSS -->
    <link href="css/responsive.css" rel="stylesheet">
    <script src="js/jquery-3.7.0.min.js"></script>
    <script type="text/javascript">
        var PATH  = '<?php _ec( base_url()."/" )?>';
        var csrf = "<?php _ec( csrf_hash() ) ?>";
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

    <!-- LOGIN PAGE
    ============================================= -->
    <div id="login" class="bg--scroll login-section division">
        <div class="container">
            <div class="row justify-content-center">
                <!-- REGISTER PAGE WRAPPER -->
                <div class="col-lg-11">
                    <div class="register-page-wrapper r-16 bg--fixed">
                        <div class="row">
                            <!-- LOGIN PAGE TEXT -->
                            <div class="col-md-6">
                                <div class="register-page-txt color--white">

                                    <!-- Logo -->
<!--                                    <img class="img-fluid" src="--><?php //_ec( get_option("website_logo_color", base_url("assets/img/logo-color.svg")) )?><!--" alt="logo-image">-->

                                    <!-- Title -->
                                    <h2 class="s-42 w-700"><?php _e("Fast, Efficient and Productive")?></h2>
                                    <!-- Text -->
                                    <p class="p-md mt-25">
                                        <?php _e(__('There is a solution that supports you make the most out of your social media marketing campaigns and manage them with finesse.<br>Our platform can help simplify your work as well as improve your efficiency'), false)?>
                                    </p>

                                    <!-- Copyright -->
                                    <div class="register-page-copyright">
                                        <p class="p-sm"><?php _e("© Copyright 2023. All Rights Reserved")?></p>
                                    </div>

                                </div>
                            </div>	<!-- END LOGIN PAGE TEXT -->


                            <!-- LOGIN FORM -->
                            <div class="col-md-6">
                                <?php _ec( $content, false )?>
                            </div>	<!-- END LOGIN FORM -->
                        </div>  <!-- End row -->
                    </div>	<!-- End register-page-wrapper -->
                </div>	<!-- END REGISTER PAGE WRAPPER -->
            </div>	   <!-- End row -->
        </div>	   <!-- End container -->
    </div>	<!-- END LOGIN PAGE -->

</div>	<!-- END PAGE CONTENT -->

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
<!-- Custom Script -->
<script src="js/custom.js"></script>
<script src="js/core.js"></script>
</body>
</html>