<!doctype html>
<html lang="en" dir="<?php _ec( request_service("language")->dir )?>">
<head>

    <meta charset="utf-8">
    <meta name="keywords" content="<?php _ec( get_option("website_keyword", "social network, marketing, brands, businesses, agencies, individuals") )?>" />
    <meta name="description" content="<?php _ec( get_option("website_description", "Let start to manage your social media so that you have more time for your business.") )?>" />
    <meta name="author" content="stackposts.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php _ec( get_option("website_title", "#1 Social Media Management & Analysis Platform") )?></title>

    <!-- FAVICON AND TOUCH ICONS -->
    <link rel="shortcut icon" href="<?php _ec( get_option("website_favicon", base_url("assets/img/favicon.svg")) )?>" />

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
    <!-- <link href="css/blue-theme.css" rel="stylesheet"> -->
    <!-- <link href="css/crocus-theme.css" rel="stylesheet"> -->
    <!-- <link href="css/green-theme.css" rel="stylesheet"> -->
    <!-- <link href="css/magenta-theme.css" rel="stylesheet"> -->
    <link href="css/pink-theme.css" rel="stylesheet">
    <!-- <link href="css/purple-theme.css" rel="stylesheet"> -->
    <!-- <link href="css/skyblue-theme.css" rel="stylesheet"> -->
    <!-- <link href="css/red-theme.css" rel="stylesheet"> -->
    <!-- <link href="css/violet-theme.css" rel="stylesheet"> -->

    <!-- RESPONSIVE CSS -->
    <link href="css/responsive.css" rel="stylesheet">
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


                    <!-- HEADER BLACK LOGO -->
                    <div class="desktoplogo">
                        <a href="#hero-2" class="logo-black"><img src="images/logo-pink.png" alt="logo"></a>
                    </div>


                    <!-- HEADER WHITE LOGO -->
                    <div class="desktoplogo">
                        <a href="#hero-2" class="logo-white"><img src="images/logo-pink-white.png" alt="logo"></a>
                    </div>


                    <!-- MAIN MENU -->
                    <nav class="wsmenu clearfix">
                        <ul class="wsmenu-list nav-theme">


                            <!-- DROPDOWN SUB MENU -->
                            <li aria-haspopup="true"><a href="#" class="h-link">About <span class="wsarrow"></span></a>
                                <ul class="sub-menu">
                                    <li aria-haspopup="true"><a href="#lnk-1">Why Martex?</a></li>
                                    <li aria-haspopup="true"><a href="#lnk-2">Best Solutions</a></li>
                                    <li aria-haspopup="true"><a href="#lnk-3">How It Works</a></li>
                                    <li aria-haspopup="true"><a href="#lnk-4">Integrations</a></li>
                                    <li aria-haspopup="true"><a href="#reviews-1">Testimonials</a></li>
                                </ul>
                            </li>


                            <!-- SIMPLE NAVIGATION LINK -->
                            <li class="nl-simple" aria-haspopup="true"><a href="#features-12" class="h-link">Features</a></li>


                            <!-- MEGAMENU -->
                            <li aria-haspopup="true" class="mg_link"><a href="#" class="h-link">Pages <span class="wsarrow"></span></a>
                                <div class="wsmegamenu w-75 clearfix">
                                    <div class="container">
                                        <div class="row">

                                            <!-- MEGAMENU LINKS -->
                                            <ul class="col-md-12 col-lg-3 link-list">
                                                <li class="fst-li"><a href="about.html">About Us</a></li>
                                                <li><a href="team.html">Our Team</a></li>
                                                <li><a href="careers.html">Careers <span class="sm-info">4</span></a></li>
                                                <li><a href="career-role.html">Career Details</a></li>
                                                <li><a href="contacts.html">Contact Us</a></li>
                                            </ul>

                                            <!-- MEGAMENU LINKS -->
                                            <ul class="col-md-12 col-lg-3 link-list">
                                                <li><a href="features.html">Core Features</a></li>
                                                <li class="fst-li"><a href="projects.html">Our Projects</a></li>
                                                <li><a href="project-details.html">Project Details</a></li>
                                                <li><a href="reviews.html">Testimonials</a></li>
                                                <li><a href="download.html">Download Page</a></li>
                                            </ul>

                                            <!-- MEGAMENU LINKS -->
                                            <ul class="col-md-12 col-lg-3 link-list">
                                                <li class="fst-li"><a href="pricing-1.html">Pricing Page #1</a></li>
                                                <li><a href="pricing-1.html">Pricing Page #2</a></li>
                                                <li><a href="faqs.html">FAQs Page</a></li>
                                                <li><a href="help-center.html">Help Center</a></li>
                                                <li><a href="404.html">404 Page</a></li>
                                            </ul>

                                            <!-- MEGAMENU LINKS -->
                                            <ul class="col-md-12 col-lg-3 link-list">
                                                <li class="fst-li"><a href="blog-listing.html">Blog Listing</a></li>
                                                <li><a href="single-post.html">Single Blog Post</a></li>
                                                <li><a href="login-2.html">Login Page</a></li>
                                                <li><a href="signup-2.html">Signup Page</a></li>
                                                <li><a href="reset-password.html">Reset Password</a></li>
                                            </ul>

                                        </div>  <!-- End row -->
                                    </div>  <!-- End container -->
                                </div>  <!-- End wsmegamenu -->
                            </li>	<!-- END MEGAMENU -->


                            <!-- SIMPLE NAVIGATION LINK -->
                            <li class="nl-simple" aria-haspopup="true"><a href="pricing-1.html" class="h-link">Pricing</a></li>


                            <!-- SIMPLE NAVIGATION LINK -->
                            <li class="nl-simple" aria-haspopup="true"><a href="#faqs-3" class="h-link">FAQs</a></li>


                            <!-- SIGN IN LINK -->
                            <li class="nl-simple reg-fst-link mobile-last-link" aria-haspopup="true">
                                <a href="login-2.html" class="h-link">Sign in</a>
                            </li>


                            <!-- SIGN UP BUTTON -->
                            <li class="nl-simple" aria-haspopup="true">
                                <a href="signup-2.html" class="btn r-04 btn--theme hover--tra-black last-link">Sign up</a>
                            </li>


                        </ul>
                    </nav>	<!-- END MAIN MENU -->


                </div>
            </div>	<!-- END NAVIGATION MENU -->


        </div>     <!-- End header-wrapper -->
    </header>	<!-- END HEADER -->




    <!-- HERO-2
    ============================================= -->
    <section id="hero-2" class="bg--scroll hero-section">
        <div class="container">
            <div class="row d-flex align-items-center">


                <!-- HERO IMAGE -->
                <div class="col-md-6 order-last order-md-2">
                    <div class="hero-2-img wow fadeInRight">
                        <img class="img-fluid" src="images/hero-2-img.png" alt="hero-image">
                    </div>
                </div>


                <!-- HERO TEXT -->
                <div class="col-md-6 order-first order-md-2">
                    <div class="hero-2-txt wow fadeInLeft">

                        <!-- Title -->
                        <h2 class="s-56 w-700 color--black">Realize your digital potential with Martex</h2>

                        <!-- Text -->
                        <p class="p-lg">Tempor sapien sodales quaerat ipsum congue ipsum laoreet turpis neque
                            auctor turpis a vitae dolor luctus placerat magna and ligula cursus purus ipsum
                        </p>

                        <!-- HERO DIGITS -->
                        <div class="hero-digits">


                            <!-- DIGIT BLOCK #1 -->
                            <div id="hd-1-1" class="wow fadeInUp">
                                <div class="hero-digits-block">

                                    <!-- Digit -->
                                    <div class="block-digit">
                                        <h2 class="s-46 statistic-number color--black">2<span>x</span></h2>
                                    </div>

                                    <!-- Text -->
                                    <div class="block-txt">
                                        <p class="p-sm">Tempor sapien and quaerat placerat</p>
                                    </div>

                                </div>
                            </div>	<!-- END DIGIT BLOCK #1 -->


                            <!-- DIGIT BLOCK #2 -->
                            <div id="hd-1-2" class="wow fadeInUp">
                                <div class="hero-digits-block">

                                    <!-- Digit -->
                                    <div class="block-digit">
                                        <h2 class="s-46 statistic-number color--black">63<span>%</span></h2>
                                    </div>

                                    <!-- Text -->
                                    <div class="block-txt">
                                        <p class="p-sm">Ligula suscipit vitae and rutrum turpis</p>
                                    </div>

                                </div>
                            </div>	<!-- END DIGIT BLOCK #2 -->


                        </div>	<!-- END HERO DIGITS -->

                    </div>
                </div>	<!-- END HERO TEXT -->


            </div>    <!-- End row -->
        </div>	   <!-- End container -->
    </section>	<!-- END HERO-2 -->




    <!-- BRANDS-1
    ============================================= -->
    <div id="brands-1" class="py-100 brands-section">
        <div class="container">


            <!-- BRANDS CAROUSEL -->
            <div class="row">
                <div class="col text-center">
                    <div class="owl-carousel brands-carousel-6">


                        <!-- BRAND LOGO IMAGE -->
                        <div class="brand-logo">
                            <a href="#"><img class="img-fluid" src="images/brand-1.png" alt="brand-logo"></a>
                        </div>


                        <!-- BRAND LOGO IMAGE -->
                        <div class="brand-logo">
                            <a href="#"><img class="img-fluid" src="images/brand-2.png" alt="brand-logo"></a>
                        </div>


                        <!-- BRAND LOGO IMAGE -->
                        <div class="brand-logo">
                            <a href="#"><img class="img-fluid" src="images/brand-3.png" alt="brand-logo"></a>
                        </div>


                        <!-- BRAND LOGO IMAGE -->
                        <div class="brand-logo">
                            <a href="#"><img class="img-fluid" src="images/brand-4.png" alt="brand-logo"></a>
                        </div>


                        <!-- BRAND LOGO IMAGE -->
                        <div class="brand-logo">
                            <a href="#"><img class="img-fluid" src="images/brand-5.png" alt="brand-logo"></a>
                        </div>


                        <!-- BRAND LOGO IMAGE -->
                        <div class="brand-logo">
                            <a href="#"><img class="img-fluid" src="images/brand-6.png" alt="brand-logo"></a>
                        </div>


                        <!-- BRAND LOGO IMAGE -->
                        <div class="brand-logo">
                            <a href="#"><img class="img-fluid" src="images/brand-7.png" alt="brand-logo"></a>
                        </div>


                        <!-- BRAND LOGO IMAGE -->
                        <div class="brand-logo">
                            <a href="#"><img class="img-fluid" src="images/brand-8.png" alt="brand-logo"></a>
                        </div>


                        <!-- BRAND LOGO IMAGE -->
                        <div class="brand-logo">
                            <a href="#"><img class="img-fluid" src="images/brand-9.png" alt="brand-logo"></a>
                        </div>


                    </div>
                </div>
            </div>  <!-- END BRANDS CAROUSEL -->


        </div>	<!-- End container -->
    </div>	<!-- END BRANDS-1 -->




    <!-- DIVIDER LINE -->
    <hr class="divider">




    <!-- FEATURES-2
    ============================================= -->
    <section id="features-2" class="py-100 features-section division">
        <div class="container">


            <!-- SECTION TITLE -->
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-9">
                    <div class="section-title mb-70">

                        <!-- Title -->
                        <h2 class="s-50 w-700">Build a customer-centric marketing strategy</h2>

                        <!-- Text -->
                        <p class="s-21 color--grey">Ligula risus auctor tempus magna feugiat lacinia.</p>

                    </div>
                </div>
            </div>


            <!-- FEATURES-2 WRAPPER -->
            <div class="fbox-wrapper text-center">
                <div class="row row-cols-1 row-cols-md-3">


                    <!-- FEATURE BOX #1 -->
                    <div class="col">
                        <div class="fbox-2 fb-1 wow fadeInUp">

                            <!-- Image -->
                            <div class="fbox-img gr--whitesmoke h-175">
                                <img class="img-fluid" src="images/f_01.png" alt="feature-image">
                            </div>

                            <!-- Text -->
                            <div class="fbox-txt">
                                <h6 class="s-22 w-700">Cross-Platform</h6>
                                <p>Luctus egestas augue undo ultrice aliquam in lacus congue dapibus</p>
                            </div>

                        </div>
                    </div>	<!-- END FEATURE BOX #1 -->


                    <!-- FEATURE BOX #2 -->
                    <div class="col">
                        <div class="fbox-2 fb-2 wow fadeInUp">

                            <!-- Image -->
                            <div class="fbox-img gr--whitesmoke h-175">
                                <img class="img-fluid" src="images/f_05.png" alt="feature-image">
                            </div>

                            <!-- Text -->
                            <div class="fbox-txt">
                                <h6 class="s-22 w-700">Effortless Integration</h6>
                                <p>Tempor laoreet augue undo ultrice aliquam in lacusq luctus feugiat</p>
                            </div>

                        </div>
                    </div>	<!-- END FEATURE BOX #2 -->


                    <!-- FEATURE BOX #3 -->
                    <div class="col">
                        <div class="fbox-2 fb-3 wow fadeInUp">

                            <!-- Image -->
                            <div class="fbox-img gr--whitesmoke h-175">
                                <img class="img-fluid" src="images/f_02.png" alt="feature-image">
                            </div>

                            <!-- Text -->
                            <div class="fbox-txt">
                                <h6 class="s-22 w-700">Engagement Analytics</h6>
                                <p>Egestas luctus augue undo ultrice aliquam in lacus feugiat cursus</p>
                            </div>

                        </div>
                    </div>	<!-- END FEATURE BOX #3 -->


                </div>  <!-- End row -->
            </div>	<!-- END FEATURES-2 WRAPPER -->


        </div>     <!-- End container -->
    </section>	<!-- END FEATURES-2 -->




    <!-- DIVIDER LINE -->
    <hr class="divider">




    <!-- TEXT CONTENT
    ============================================= -->
    <section id="lnk-1" class="pt-100 ct-02 content-section division">
        <div class="container">


            <!-- SECTION CONTENT (ROW) -->
            <div class="row d-flex align-items-center">


                <!-- IMAGE BLOCK -->
                <div class="col-md-6">
                    <div class="img-block left-column wow fadeInRight">
                        <img class="img-fluid" src="images/img-06.png" alt="content-image">
                    </div>
                </div>


                <!-- TEXT BLOCK -->
                <div class="col-md-6">
                    <div class="txt-block right-column wow fadeInLeft">

                        <!-- Section ID -->
                        <span class="section-id">Data Integration</span>

                        <!-- Title -->
                        <h2 class="s-46 w-700">Create a workflow that works for you</h2>

                        <!-- Text -->
                        <p>Sodales tempor sapien quaerat ipsum undo congue laoreet turpis neque auctor turpis
                            vitae dolor luctus placerat magna and ligula cursus purus vitae purus an ipsum suscipit
                        </p>

                        <!-- Small Title -->
                        <h5 class="s-24 w-700">Enhance your personality</h5>

                        <!-- CONTENT BOX #1 -->
                        <div class="cbox-1 ico-15">

                            <div class="ico-wrap color--theme">
                                <div class="cbox-1-ico"><span class="flaticon-check"></span></div>
                            </div>

                            <div class="cbox-1-txt">
                                <p>Magna dolor luctus at egestas sapien</p>
                            </div>

                        </div>

                        <!-- CONTENT BOX #2 -->
                        <div class="cbox-1 ico-15">

                            <div class="ico-wrap color--theme">
                                <div class="cbox-1-ico"><span class="flaticon-check"></span></div>
                            </div>

                            <div class="cbox-1-txt">
                                <p>Cursus purus suscipit vitae cubilia magnis volute egestas vitae sapien
                                    turpis ultrice auctor congue varius magnis
                                </p>
                            </div>

                        </div>

                        <!-- CONTENT BOX #3 -->
                        <div class="cbox-1 ico-15">

                            <div class="ico-wrap color--theme">
                                <div class="cbox-1-ico"><span class="flaticon-check"></span></div>
                            </div>

                            <div class="cbox-1-txt">
                                <p class="mb-0">Volute turpis dolores and sagittis congue</p>
                            </div>

                        </div>

                    </div>
                </div>	<!-- END TEXT BLOCK -->


            </div>	<!-- END SECTION CONTENT (ROW) -->


        </div>	   <!-- End container -->
    </section>	<!-- END TEXT CONTENT -->




    <!-- FEATURES-12
    ============================================= -->
    <section id="features-12" class="shape--bg shape--white-500 pt-100 features-section division">
        <div class="container">
            <div class="row d-flex align-items-center">


                <!-- TEXT BLOCK -->
                <div class="col-md-5">
                    <div class="txt-block left-column wow fadeInRight">

                        <!-- Section ID -->
                        <span class="section-id">One-Stop Solution</span>

                        <!-- Title -->
                        <h2 class="s-46 w-700">Smart solutions, real-time results</h2>

                        <!-- List -->
                        <ul class="simple-list">

                            <li class="list-item">
                                <p>Tempor sapien quaerat undo ipsum laoreet purus and sapien dolor ociis ultrice
                                    ipsum aliquam undo congue dolor cursus congue varius magnis
                                </p>
                            </li>

                            <li class="list-item">
                                <p class="mb-0">Cursus purus suscipit  vitae cubilia magnis diam volute egestas
                                    sapien ultrice auctor
                                </p>
                            </li>

                        </ul>

                        <!-- Button -->
                        <a href="#banner-3" class="btn btn-sm r-04 btn--tra-black hover--theme">
                            Get started now
                        </a>

                    </div>
                </div>	<!-- END TEXT BLOCK -->


                <!-- FEATURES-12 WRAPPER -->
                <div class="col-md-7">
                    <div class="fbox-12-wrapper wow fadeInLeft">
                        <div class="row">


                            <div class="col-md-6">

                                <!-- FEATURE BOX #1 -->
                                <div id="fb-12-1" class="fbox-12 bg--white-100 block-shadow r-12 mb-30">

                                    <!-- Icon -->
                                    <div class="fbox-ico ico-50">
                                        <div class="shape-ico color--theme">

                                            <!-- Vector Icon -->
                                            <span class="flaticon-graphics"></span>

                                            <!-- Shape -->
                                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                                <path  d="M69.8,-23C76.3,-2.7,57.6,25.4,32.9,42.8C8.1,60.3,-22.7,67,-39.1,54.8C-55.5,42.7,-57.5,11.7,-48.6,-11.9C-39.7,-35.5,-19.8,-51.7,5.9,-53.6C31.7,-55.6,63.3,-43.2,69.8,-23Z" transform="translate(100 100)" />
                                            </svg>

                                        </div>
                                    </div>	<!-- End Icon -->

                                    <!-- Text -->
                                    <div class="fbox-txt">
                                        <h5 class="s-19 w-700">Market Research</h5>
                                        <p>Porta semper lacus and cursus feugiat at primis ultrice a ligula auctor</p>
                                    </div>

                                </div>

                                <!-- FEATURE BOX #2 -->
                                <div id="fb-12-2" class="fbox-12 bg--white-100 block-shadow r-12">

                                    <!-- Icon -->
                                    <div class="fbox-ico ico-50">
                                        <div class="shape-ico color--theme">

                                            <!-- Vector Icon -->
                                            <span class="flaticon-graphic"></span>

                                            <!-- Shape -->
                                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                                <path  d="M69.8,-23C76.3,-2.7,57.6,25.4,32.9,42.8C8.1,60.3,-22.7,67,-39.1,54.8C-55.5,42.7,-57.5,11.7,-48.6,-11.9C-39.7,-35.5,-19.8,-51.7,5.9,-53.6C31.7,-55.6,63.3,-43.2,69.8,-23Z" transform="translate(100 100)" />
                                            </svg>

                                        </div>
                                    </div>	<!-- End Icon -->

                                    <!-- Text -->
                                    <div class="fbox-txt">
                                        <h5 class="s-19 w-700">Digital Marketing</h5>
                                        <p>Porta semper lacus and cursus feugiat at primis ultrice a ligula auctor</p>
                                    </div>

                                </div>


                            </div>


                            <div class="col-md-6">


                                <!-- FEATURE BOX #3 -->
                                <div id="fb-12-3" class="fbox-12 bg--white-100 block-shadow r-12 mb-30">

                                    <!-- Icon -->
                                    <div class="fbox-ico ico-50">
                                        <div class="shape-ico color--theme">

                                            <!-- Vector Icon -->
                                            <span class="flaticon-idea"></span>

                                            <!-- Shape -->
                                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                                <path  d="M69.8,-23C76.3,-2.7,57.6,25.4,32.9,42.8C8.1,60.3,-22.7,67,-39.1,54.8C-55.5,42.7,-57.5,11.7,-48.6,-11.9C-39.7,-35.5,-19.8,-51.7,5.9,-53.6C31.7,-55.6,63.3,-43.2,69.8,-23Z" transform="translate(100 100)" />
                                            </svg>

                                        </div>
                                    </div>	<!-- End Icon -->

                                    <!-- Text -->
                                    <div class="fbox-txt">
                                        <h5 class="s-19 w-700">User Experience</h5>
                                        <p>Porta semper lacus and cursus feugiat at primis ultrice a ligula auctor</p>
                                    </div>

                                </div>

                                <!-- FEATURE BOX #4 -->
                                <div id="fb-12-4" class="fbox-12 bg--white-100 block-shadow r-12">

                                    <!-- Icon -->
                                    <div class="fbox-ico ico-50">
                                        <div class="shape-ico color--theme">

                                            <!-- Vector Icon -->
                                            <span class="flaticon-search-engine-1"></span>

                                            <!-- Shape -->
                                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                                <path  d="M69.8,-23C76.3,-2.7,57.6,25.4,32.9,42.8C8.1,60.3,-22.7,67,-39.1,54.8C-55.5,42.7,-57.5,11.7,-48.6,-11.9C-39.7,-35.5,-19.8,-51.7,5.9,-53.6C31.7,-55.6,63.3,-43.2,69.8,-23Z" transform="translate(100 100)" />
                                            </svg>

                                        </div>
                                    </div>	<!-- End Icon -->

                                    <!-- Text -->
                                    <div class="fbox-txt">
                                        <h5 class="s-19 w-700">SEO Services</h5>
                                        <p>Porta semper lacus and cursus feugiat at primis ultrice a ligula auctor</p>
                                    </div>

                                </div>


                            </div>


                        </div>
                    </div>	<!-- End row -->
                </div>	<!-- END FEATURES-12 WRAPPER -->


            </div>    <!-- End row -->
        </div>     <!-- End container -->
    </section>	<!-- END FEATURES-12 -->




    <!-- TEXT CONTENT
    ============================================= -->
    <section class="py-100 ct-02 content-section division">
        <div class="container">


            <!-- SECTION CONTENT (ROW) -->
            <div class="row d-flex align-items-center">


                <!-- IMAGE BLOCK -->
                <div class="col-md-6">
                    <div class="img-block left-column wow fadeInRight">
                        <img class="img-fluid" src="images/img-13.png" alt="content-image">
                    </div>
                </div>


                <!-- TEXT BLOCK -->
                <div class="col-md-6">
                    <div class="txt-block right-column wow fadeInLeft">


                        <!-- TEXT BOX -->
                        <div class="txt-box">

                            <!-- Title -->
                            <h5 class="s-24 w-700">Solution that grows with you</h5>

                            <!-- Text -->
                            <p>Sodales tempor sapien quaerat ipsum undo congue laoreet turpis neque auctor turpis
                                vitae dolor luctus placerat magna and ligula cursus purus vitae purus an ipsum suscipit
                            </p>

                        </div>	<!-- END TEXT BOX -->


                        <!-- TEXT BOX -->
                        <div class="txt-box mb-0">

                            <!-- Title -->
                            <h5 class="s-24 w-700">Connect your data sources</h5>

                            <!-- Text -->
                            <p>Tempor sapien sodales quaerat ipsum undo congue laoreet turpis neque auctor turpis
                                vitae dolor luctus placerat magna and ligula cursus purus an ipsum vitae suscipit
                                purus
                            </p>

                            <!-- List -->
                            <ul class="simple-list">

                                <li class="list-item">
                                    <p>Tempor sapien quaerat an ipsum laoreet purus and sapien dolor an ultrice ipsum
                                        aliquam undo congue dolor cursus
                                    </p>
                                </li>

                                <li class="list-item">
                                    <p class="mb-0">Cursus purus suscipit vitae cubilia magnis volute egestas vitae
                                        sapien turpis ultrice auctor congue magna placerat
                                    </p>
                                </li>

                            </ul>

                        </div>	<!-- END TEXT BOX -->


                    </div>
                </div>	<!-- END TEXT BLOCK -->


            </div>	<!-- END SECTION CONTENT (ROW) -->


        </div>	   <!-- End container -->
    </section>	<!-- END TEXT CONTENT -->




    <!-- TEXT CONTENT
    ============================================= -->
    <section id="lnk-2" class="bg--white-400 py-100 ct-04 content-section division">
        <div class="container">


            <!-- SECTION CONTENT (ROW) -->
            <div class="row d-flex align-items-center">


                <!-- TEXT BLOCK -->
                <div class="col-md-6 order-last order-md-2">
                    <div class="txt-block left-column wow fadeInRight">


                        <!-- CONTENT BOX #1 -->
                        <div class="cbox-2 process-step">

                            <!-- Icon -->
                            <div class="ico-wrap">
                                <div class="cbox-2-ico bg--theme color--white">1</div>
                                <span class="cbox-2-line"></span>
                            </div>

                            <!-- Text -->
                            <div class="cbox-2-txt">
                                <h5 class="s-22 w-700">Extensions & Addons</h5>
                                <p>Ligula risus auctor tempus feugiat dolor lacinia nemo purus in lipsum purus sapien
                                    quaerat a primis viverra tellus vitae luctus dolor ipsum neque ligula quaerat
                                </p>
                            </div>

                        </div>	<!-- END CONTENT BOX #1 -->


                        <!-- CONTENT BOX #2 -->
                        <div class="cbox-2 process-step">

                            <!-- Icon -->
                            <div class="ico-wrap">
                                <div class="cbox-2-ico bg--theme color--white">2</div>
                                <span class="cbox-2-line"></span>
                            </div>

                            <!-- Text -->
                            <div class="cbox-2-txt">
                                <h5 class="s-22 w-700">Improved Productivity</h5>
                                <p>Ligula risus auctor tempus feugiat dolor lacinia nemo purus in lipsum purus sapien
                                    quaerat a primis viverra tellus vitae luctus dolor ipsum neque ligula quaerat
                                </p>
                            </div>

                        </div>	<!-- END CONTENT BOX #2 -->


                        <!-- CONTENT BOX #3 -->
                        <div class="cbox-2 process-step">

                            <!-- Icon -->
                            <div class="ico-wrap">
                                <div class="cbox-2-ico bg--theme color--white">3</div>
                            </div>

                            <!-- Text -->
                            <div class="cbox-2-txt">
                                <h5 class="s-22 w-700">Customizable Dashboard</h5>
                                <p class="mb-0">Ligula risus auctor tempus feugiat dolor lacinia nemo purus in lipsum
                                    purus sapien quaerat a primis viverra tellus vitae luctus dolor ipsum neque ligula
                                    quaerat
                                </p>
                            </div>

                        </div>	<!-- END CONTENT BOX #3 -->


                    </div>
                </div>	<!-- END TEXT BLOCK -->


                <!-- IMAGE BLOCK -->
                <div class="col-md-6 order-first order-md-2">
                    <div class="img-block wow fadeInLeft">
                        <img class="img-fluid" src="images/tablet-02.png" alt="content-image">
                    </div>
                </div>


            </div>	<!-- END SECTION CONTENT (ROW) -->


        </div>	   <!-- End container -->
    </section>	<!-- END TEXT CONTENT -->




    <!-- TEXT CONTENT
    ============================================= -->
    <section class="pt-100 ct-02 content-section division">
        <div class="container">


            <!-- SECTION CONTENT (ROW) -->
            <div class="row d-flex align-items-center">


                <!-- IMAGE BLOCK -->
                <div class="col-md-6">
                    <div class="img-block left-column wow fadeInRight">
                        <img class="img-fluid" src="images/img-05.png" alt="content-image">
                    </div>
                </div>


                <!-- TEXT BLOCK -->
                <div class="col-md-6">
                    <div class="txt-block right-column wow fadeInLeft">

                        <!-- Section ID -->
                        <span class="section-id">Easy Onboarding</span>

                        <!-- Title -->
                        <h2 class="s-46 w-700">Achieve more with better workflows</h2>

                        <!-- Text -->
                        <p>Nemo ipsam egestas volute turpis egestas ipsum and purus sapien ultrice an aliquam quaerat
                            ipsum augue turpis sapien cursus congue magna purus quaerat at ligula purus egestas magna
                            cursus undo varius purus magnis sapien quaerat
                        </p>

                        <!-- Small Title -->
                        <h5 class="s-24 w-700">Get more done in less time</h5>

                        <!-- List -->
                        <ul class="simple-list">

                            <li class="list-item">
                                <p>Sapien quaerat tempor an ipsum laoreet purus and sapien dolor an ultrice ipsum
                                    aliquam undo congue cursus dolor
                                </p>
                            </li>

                            <li class="list-item">
                                <p class="mb-0">Purus suscipit cursus vitae cubilia magnis volute egestas vitae
                                    sapien turpis ultrice auctor congue magna placerat
                                </p>
                            </li>

                        </ul>

                    </div>
                </div>	<!-- END TEXT BLOCK -->


            </div>	<!-- END SECTION CONTENT (ROW) -->


        </div>	   <!-- End container -->
    </section>	<!-- END TEXT CONTENT -->




    <!-- TEXT CONTENT
    ============================================= -->
    <section class="py-100 ct-01 content-section division">
        <div class="container">


            <!-- SECTION CONTENT (ROW) -->
            <div class="row d-flex align-items-center">


                <!-- TEXT BLOCK -->
                <div class="col-md-6 order-last order-md-2">
                    <div class="txt-block left-column wow fadeInRight">

                        <!-- Section ID -->
                        <span class="section-id">Easy Integration</span>

                        <!-- Title -->
                        <h2 class="s-46 w-700">Plug your essential tools in few clicks</h2>

                        <!-- List -->
                        <ul class="simple-list">

                            <li class="list-item">
                                <p>Cursus purus suscipit vitae cubilia magnis volute egestas vitae sapien turpis
                                    sodales magna undo aoreet primis
                                </p>
                            </li>

                            <li class="list-item">
                                <p class="mb-0">Tempor sapien quaerat an ipsum laoreet purus and sapien dolor an
                                    ultrice ipsum aliquam undo congue dolor cursus purus congue and ipsum purus sapien
                                    a blandit
                                </p>
                            </li>

                        </ul>

                    </div>
                </div>	<!-- END TEXT BLOCK -->


                <!-- IMAGE BLOCK -->
                <div class="col-md-6 order-first order-md-2">
                    <div class="img-block right-column wow fadeInLeft">
                        <img class="img-fluid" src="images/img-02.png" alt="content-image">
                    </div>
                </div>


            </div>	<!-- END SECTION CONTENT (ROW) -->


        </div>	   <!-- End container -->
    </section>	<!-- END TEXT CONTENT -->




    <!-- IMAGE CONTENT
    ============================================= -->
    <section id="lnk-3" class="bg--white-400 ct-10 content-section division">
        <div class="section-overlay pt-100">
            <div class="container">


                <!-- SECTION TITLE -->
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-9">
                        <div class="section-title mb-70">

                            <!-- Title -->
                            <h2 class="s-50 w-700">Track the progress towards objectives with key results</h2>

                            <!-- Text -->
                            <p class="s-21">Ligula risus auctor tempus magna feugiat lacinia.</p>

                        </div>
                    </div>
                </div>


                <!-- IMAGE BLOCK -->
                <div class="row">
                    <div class="col">
                        <div class="img-block video-preview wow fadeInUp">

                            <!-- Play Icon -->
                            <a class="video-popup2" href="https://www.youtube.com/watch?v=7e90gBu4pas">
                                <div class="video-btn video-btn-xl bg--theme">
                                    <div class="video-block-wrapper"><span class="flaticon-play-button"></span></div>
                                </div>
                            </a>

                            <!-- Preview Image -->
                            <img class="img-fluid" src="images/dashboard-01.png" alt="video-preview">

                        </div>
                    </div>
                </div>


            </div>	   <!-- End container -->
        </div>     <!-- End section overlay -->
    </section>	<!-- END IMAGE CONTENT -->




    <!-- STATISTIC-1
    ============================================= -->
    <div id="statistic-1" class="py-100 statistic-section division">
        <div class="container">


            <!-- STATISTIC-1 WRAPPER -->
            <div class="statistic-1-wrapper">
                <div class="row justify-content-md-center row-cols-1 row-cols-md-3">


                    <!-- STATISTIC BLOCK #1 -->
                    <div class="col">
                        <div id="sb-1-1" class="wow fadeInUp">
                            <div class="statistic-block">

                                <!-- Digit -->
                                <div class="statistic-block-digit text-center">
                                    <h2 class="s-46 statistic-number"><span class="count-element">89</span>k</h2>
                                </div>

                                <!-- Text -->
                                <div class="statistic-block-txt color--grey">
                                    <p class="p-md">Porta justo integer and velna vitae auctor</p>
                                </div>

                            </div>
                        </div>
                    </div>	<!-- END STATISTIC BLOCK #1 -->


                    <!-- STATISTIC BLOCK #2 -->
                    <div class="col">
                        <div id="sb-1-2" class="wow fadeInUp">
                            <div class="statistic-block">

                                <!-- Digit -->
                                <div class="statistic-block-digit text-center">
                                    <h2 class="s-46 statistic-number"><span class="count-element">76</span>%</h2>
                                </div>

                                <!-- Text -->
                                <div class="statistic-block-txt color--grey">
                                    <p class="p-md">Ligula magna suscipit vitae and rutrum</p>
                                </div>

                            </div>
                        </div>
                    </div>	<!-- END STATISTIC BLOCK #2 -->


                    <!-- STATISTIC BLOCK #3 -->
                    <div class="col">
                        <div id="sb-1-3" class="wow fadeInUp">
                            <div class="statistic-block">

                                <!-- Digit -->
                                <div class="statistic-block-digit text-center">
                                    <h2 class="s-46 statistic-number">
                                        <span class="count-element">4</span>.<span class="count-element">93</span>
                                    </h2>
                                </div>

                                <!-- Text -->
                                <div class="statistic-block-txt color--grey">
                                    <p class="p-md">Sagittis congue augue egestas an egestas</p>
                                </div>

                            </div>
                        </div>
                    </div>	<!-- END STATISTIC BLOCK #3 -->


                </div>  <!-- End row -->
            </div>	<!-- END STATISTIC-1 WRAPPER -->


        </div>	 <!-- End container -->
    </div>	 <!-- END STATISTIC-1 -->




    <!-- DIVIDER LINE -->
    <hr class="divider">




    <!-- FEATURES-5
    ============================================= -->
    <section id="features-5" class="pt-100 features-section division">
        <div class="container">


            <!-- SECTION TITLE -->
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-9">
                    <div class="section-title mb-70">

                        <!-- Title -->
                        <h2 class="s-50 w-700">Reach your audience through social media marketing</h2>

                        <!-- Text -->
                        <p class="s-21 color--grey">Ligula risus auctor tempus magna feugiat lacinia.</p>

                    </div>
                </div>
            </div>


            <!-- FEATURES-5 WRAPPER -->
            <div class="fbox-wrapper text-center">
                <div class="row d-flex align-items-center">


                    <!-- FEATURE BOX #1 -->
                    <div class="col-md-6">
                        <div class="fbox-5 fb-1 bg--white-400 r-16 wow fadeInUp">

                            <!-- Text -->
                            <div class="fbox-txt order-last order-md-2">
                                <h5 class="s-26 w-700">Marketing Integrations</h5>
                                <p>Aliquam a augue suscipit luctus diam neque purus ipsum neque and dolor primis libero</p>
                            </div>

                            <!-- Image -->
                            <div class="fbox-5-img order-first order-md-2">
                                <img class="img-fluid" src="images/f_06.png" alt="feature-image">
                            </div>

                        </div>
                    </div>	<!-- END FEATURE BOX #1 -->


                    <!-- FEATURE BOX #2 -->
                    <div class="col-md-6">
                        <div class="fbox-5 fb-2 bg--white-400 r-16 wow fadeInUp">

                            <!-- Image -->
                            <div class="fbox-5-img">
                                <img class="img-fluid" src="images/f_04.png" alt="feature-image">
                            </div>

                            <!-- Text -->
                            <div class="fbox-txt">
                                <h5 class="s-26 w-700">Enhance Engagement</h5>
                                <p>Aliquam a augue suscipit luctus diam neque purus ipsum neque and dolor primis libero</p>
                            </div>

                        </div>
                    </div>	<!-- END FEATURE BOX #2 -->


                </div>  <!-- End row -->
            </div>	<!-- END FEATURES-5 WRAPPER -->


        </div>     <!-- End container -->
    </section>	<!-- END FEATURES-5 -->




    <!-- TEXT CONTENT
    ============================================= -->
    <section id="lnk-4" class="pt-100 ct-01 content-section division">
        <div class="container">


            <!-- SECTION TITLE -->
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-9">
                    <div class="section-title mb-80">

                        <!-- Title -->
                        <h2 class="s-50 w-700">The Complete Solutions</h2>

                        <!-- Text -->
                        <p class="s-21 color--grey">Ligula risus auctor tempus magna feugiat lacinia.</p>

                    </div>
                </div>
            </div>


            <!-- SECTION CONTENT (ROW) -->
            <div class="row d-flex align-items-center">


                <!-- TEXT BLOCK -->
                <div class="col-md-6 order-last order-md-2">
                    <div class="txt-block left-column wow fadeInRight">


                        <!-- CONTENT BOX #1 -->
                        <div class="cbox-4">

                            <!-- Icon & Title -->
                            <div class="box-title">
                                <span class="flaticon-paper-sizes color--theme"></span>
                                <h5 class="s-22 w-700">Built-in automation</h5>
                            </div>

                            <!-- Text -->
                            <div class="cbox-4-txt">
                                <p>Quaerat sodales sapien blandit purus primis purus ipsum cubilia laoreet augue
                                    luctus and magna dolor luctus egestas an ipsum sapien primis vitae volute and
                                    magna turpis
                                </p>
                            </div>

                        </div>	<!-- END CONTENT BOX #1 -->


                        <!-- CONTENT BOX #2 -->
                        <div class="cbox-4">

                            <!-- Icon & Title -->
                            <div class="box-title">
                                <span class="flaticon-layers-1 color--theme"></span>
                                <h5 class="s-22 w-700">Automatic workflows</h5>
                            </div>

                            <!-- Text -->
                            <div class="cbox-4-txt">
                                <p>Quaerat sodales sapien blandit purus primis purus ipsum cubilia laoreet augue
                                    luctus and magna dolor luctus egestas an ipsum sapien primis vitae volute and
                                    magna turpis
                                </p>
                            </div>

                        </div>	<!-- END CONTENT BOX #2 -->


                        <!-- CONTENT BOX #3 -->
                        <div class="cbox-4">

                            <!-- Icon & Title -->
                            <div class="box-title">
                                <span class="flaticon-pie-chart color--theme"></span>
                                <h5 class="s-22 w-700">Real-time analytics</h5>
                            </div>

                            <!-- Text -->
                            <div class="cbox-4-txt">
                                <p class="mb-0">Quaerat sodales sapien blandit purus primis purus ipsum cubilia laoreet
                                    augue luctus and magna dolor luctus egestas an ipsum sapien primis vitae volute and
                                    magna turpis
                                </p>
                            </div>

                        </div>	<!-- END CONTENT BOX #3 -->


                    </div>
                </div>	<!-- END TEXT BLOCK -->


                <!-- IMAGE BLOCK -->
                <div class="col-md-6 order-first order-md-2">
                    <div class="img-block right-column wow fadeInLeft">
                        <img class="img-fluid" src="images/img-03.png" alt="content-image">
                    </div>
                </div>


            </div>	<!-- END SECTION CONTENT (ROW) -->


        </div>	   <!-- End container -->
    </section>	<!-- END TEXT CONTENT -->




    <!-- TEXT CONTENT
    ============================================= -->
    <section class="pt-100 ct-03 content-section division">
        <div class="container">
            <div class="row d-flex align-items-center">


                <!-- IMAGE BLOCK -->
                <div class="col-md-6 col-lg-7">
                    <div class="img-block left-column wow fadeInRight">
                        <img class="img-fluid" src="images/img-14.png" alt="content-image">
                    </div>
                </div>


                <!-- TEXT BLOCK -->
                <div class="col-md-6 col-lg-5">
                    <div class="txt-block right-column wow fadeInLeft">

                        <!-- Section ID -->
                        <span class="section-id">Engagement Analytics</span>

                        <!-- Title -->
                        <h2 class="s-46 w-700">Data-driven digital marketing</h2>

                        <!-- List -->
                        <ul class="simple-list">

                            <li class="list-item">
                                <p>Tempor sapien quaerat undo ipsum laoreet purus and sapien dolor ociis ultrice
                                    ipsum aliquam undo congue dolor cursus congue varius magnis
                                </p>
                            </li>

                            <li class="list-item">
                                <p class="mb-0">Cursus purus suscipit vitae cubilia magnis diam volute egestas
                                    sapien ultrice auctor
                                </p>
                            </li>

                        </ul>

                    </div>
                </div>	<!-- END TEXT BLOCK -->


            </div>    <!-- End row -->
        </div>	   <!-- End container -->
    </section>	<!-- END TEXT CONTENT -->




    <!-- INTEGRATIONS-1
    ============================================= -->
    <section id="integrations-1" class="py-100 integrations-section">
        <div class="container">


            <!-- SECTION TITLE -->
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="section-title mb-70">

                        <!-- Title -->
                        <h2 class="s-50 w-700">Automate your workflow with our integrations</h2>

                        <!-- Text -->
                        <p class="s-21 color--grey">Ligula risus auctor tempus magna feugiat lacinia.</p>

                    </div>
                </div>
            </div>


            <!-- INTEGRATIONS-1 WRAPPER -->
            <div class="integrations-1-wrapper">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 rows-2">


                    <!-- TOOL #1 -->
                    <div class="col">
                        <a href="#" class="in_tool it-1 r-12 mb-30 wow fadeInUp">

                            <!-- Icon -->
                            <div class="in_tool-logo-wrap">
                                <div class="in_tool-logo ico-60">
                                    <img class="img-fluid" src="images/png_icons/tool-1.png" alt="brand-logo">
                                </div>
                            </div>

                            <!-- Text -->
                            <div class="in_tool-txt">
                                <h6 class="s-20 w-700">Zapier</h6>
                                <p class="p-sm">Share findings</p>
                            </div>

                        </a>
                    </div>	<!-- END FEATURE BOX #1 -->


                    <!-- TOOL #2 -->
                    <div class="col">
                        <a href="#" class="in_tool it-2 r-12 mb-30 wow fadeInUp">

                            <!-- Icon -->
                            <div class="in_tool-logo-wrap">
                                <div class="in_tool-logo ico-60">
                                    <img class="img-fluid" src="images/png_icons/tool-2.png" alt="brand-logo">
                                </div>
                            </div>

                            <!-- Text -->
                            <div class="in_tool-txt">
                                <h6 class="s-20 w-700">Google Analytics</h6>
                                <p class="p-sm">Share findings</p>
                            </div>

                        </a>
                    </div>	<!-- END FEATURE BOX #2 -->


                    <!-- TOOL #3 -->
                    <div class="col">
                        <a href="#" class="in_tool it-3 r-12 mb-30 wow fadeInUp">

                            <!-- Icon -->
                            <div class="in_tool-logo-wrap">
                                <div class="in_tool-logo ico-60">
                                    <img class="img-fluid" src="images/png_icons/tool-3.png" alt="brand-logo">
                                </div>
                            </div>

                            <!-- Text -->
                            <div class="in_tool-txt">
                                <h6 class="s-20 w-700">Amplitude</h6>
                                <p class="p-sm">Share findings</p>
                            </div>

                        </a>
                    </div>	<!-- END FEATURE BOX #3 -->


                    <!-- TOOL #4 -->
                    <div class="col">
                        <a href="#" class="in_tool it-4 r-12 mb-30 wow fadeInUp">

                            <!-- Icon -->
                            <div class="in_tool-logo-wrap">
                                <div class="in_tool-logo ico-60">
                                    <img class="img-fluid" src="images/png_icons/tool-4.png" alt="brand-logo">
                                </div>
                            </div>

                            <!-- Text -->
                            <div class="in_tool-txt">
                                <h6 class="s-20 w-700">Hubspot</h6>
                                <p class="p-sm">Share findings</p>
                            </div>

                        </a>
                    </div>	<!-- END FEATURE BOX #4 -->


                    <!-- TOOL #5 -->
                    <div class="col">
                        <a href="#" class="in_tool it-5 r-12 mb-30 wow fadeInUp">

                            <!-- Icon -->
                            <div class="in_tool-logo-wrap">
                                <div class="in_tool-logo ico-60">
                                    <img class="img-fluid" src="images/png_icons/tool-5.png" alt="brand-logo">
                                </div>
                            </div>

                            <!-- Text -->
                            <div class="in_tool-txt">
                                <h6 class="s-20 w-700">MailChimp</h6>
                                <p class="p-sm">Import data</p>
                            </div>

                        </a>
                    </div>	<!-- END FEATURE BOX #5 -->


                    <!-- TOOL #6 -->
                    <div class="col">
                        <a href="#" class="in_tool it-6 r-12 mb-30 wow fadeInUp">

                            <!-- Icon -->
                            <div class="in_tool-logo-wrap">
                                <div class="in_tool-logo ico-60">
                                    <img class="img-fluid" src="images/png_icons/tool-6.png" alt="brand-logo">
                                </div>
                            </div>

                            <!-- Text -->
                            <div class="in_tool-txt">
                                <h6 class="s-20 w-700">Slack</h6>
                                <p class="p-sm">Share findings</p>
                            </div>

                        </a>
                    </div>	<!-- END FEATURE BOX #6 -->


                    <!-- TOOL #7 -->
                    <div class="col">
                        <a href="#" class="in_tool it-7 r-12 wow fadeInUp">

                            <!-- Icon -->
                            <div class="in_tool-logo-wrap">
                                <div class="in_tool-logo ico-60">
                                    <img class="img-fluid" src="images/png_icons/tool-7.png" alt="brand-logo">
                                </div>
                            </div>

                            <!-- Text -->
                            <div class="in_tool-txt">
                                <h6 class="s-20 w-700">Dropbox</h6>
                                <p class="p-sm">Import data</p>
                            </div>

                        </a>
                    </div>	<!-- END FEATURE BOX #7 -->


                    <!-- TOOL #8 -->
                    <div class="col">
                        <a href="#" class="in_tool it-8 r-12 wow fadeInUp">

                            <!-- Icon -->
                            <div class="in_tool-logo-wrap">
                                <div class="in_tool-logo ico-60">
                                    <img class="img-fluid" src="images/png_icons/tool-8.png" alt="brand-logo">
                                </div>
                            </div>

                            <!-- Text -->
                            <div class="in_tool-txt">
                                <h6 class="s-20 w-700">Trello</h6>
                                <p class="p-sm">Share findings</p>
                            </div>

                        </a>
                    </div>	<!-- END FEATURE BOX #8 -->


                    <!-- TOOL #9 -->
                    <div class="col">
                        <a href="#" class="in_tool it-9 r-12 wow fadeInUp">

                            <!-- Icon -->
                            <div class="in_tool-logo-wrap">
                                <div class="in_tool-logo ico-60">
                                    <img class="img-fluid" src="images/png_icons/tool-9.png" alt="brand-logo">
                                </div>
                            </div>

                            <!-- Text -->
                            <div class="in_tool-txt">
                                <h6 class="s-20 w-700">Google Drive</h6>
                                <p class="p-sm">Import data</p>
                            </div>

                        </a>
                    </div>	<!-- END FEATURE BOX #9 -->


                </div>
            </div>	<!-- END INTEGRATIONS-1 WRAPPER -->


            <!-- MORE BUTTON -->
            <div class="row">
                <div class="col">
                    <div class="more-btn text-center mt-60 wow fadeInUp">
                        <a href="integrations.html" class="btn btn--tra-black hover--theme">View all integrations</a>
                    </div>
                </div>
            </div>


        </div>     <!-- End container -->
    </section>	<!-- END INTEGRATIONS-1 -->




    <!-- TESTIMONIALS-1
    ============================================= -->
    <section id="reviews-1" class="pt-100 shape--06 shape--gr-whitesmoke reviews-section">
        <div class="container">


            <!-- SECTION TITLE -->
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-9">
                    <div class="section-title mb-70">

                        <!-- Title -->
                        <h2 class="s-50 w-700">Our Happy Customers</h2>

                        <!-- Text -->
                        <p class="s-21 color--grey">Ligula risus auctor tempus magna feugiat lacinia.</p>

                    </div>
                </div>
            </div>


            <!-- TESTIMONIALS CONTENT -->
            <div class="row">
                <div class="col">
                    <div class="owl-carousel owl-theme reviews-1-wrapper">


                        <!-- TESTIMONIAL #1 -->
                        <div class="review-1 bg--white-100 block-shadow r-08">

                            <!-- Quote Icon -->
                            <div class="review-ico ico-65"><span class="flaticon-quote"></span></div>

                            <!-- Text -->
                            <div class="review-txt">

                                <!-- Text -->
                                <p>Etiam sapien sagittis congue augue a massa varius egestas ultrice varius magna
                                    a tempus aliquet undo cursus suscipit
                                </p>

                                <!-- Author -->
                                <div class="author-data clearfix">

                                    <!-- Avatar -->
                                    <div class="review-avatar">
                                        <img src="images/review-author-1.jpg" alt="review-avatar">
                                    </div>

                                    <!-- Data -->
                                    <div class="review-author">
                                        <h6 class="s-18 w-700">Scott Boxer</h6>
                                        <p class="p-sm">@scott_boxer</p>
                                    </div>

                                </div>	<!-- End Author -->

                            </div>	<!-- End Text -->

                        </div>	<!-- END TESTIMONIAL #1 -->


                        <!-- TESTIMONIAL #2 -->
                        <div class="review-1 bg--white-100 block-shadow r-08">

                            <!-- Quote Icon -->
                            <div class="review-ico ico-65"><span class="flaticon-quote"></span></div>

                            <!-- Text -->
                            <div class="review-txt">

                                <!-- Text -->
                                <p>At sagittis congue augue diam egestas magna an ipsum vitae purus ipsum primis
                                    and cubilia laoreet augue egestas a luctus donec ltrice ligula porta augue magna
                                    suscipit lectus gestas
                                </p>

                                <!-- Author -->
                                <div class="author-data clearfix">

                                    <!-- Avatar -->
                                    <div class="review-avatar">
                                        <img src="images/review-author-2.jpg" alt="review-avatar">
                                    </div>

                                    <!-- Data -->
                                    <div class="review-author">
                                        <h6 class="s-18 w-700">Joel Peterson</h6>
                                        <p class="p-sm">Internet Surfer</p>
                                    </div>

                                </div>	<!-- End Author -->

                            </div>	<!-- End Text -->

                        </div>	<!-- END TESTIMONIAL #2 -->


                        <!-- TESTIMONIAL #3 -->
                        <div class="review-1 bg--white-100 block-shadow r-08">

                            <!-- Quote Icon -->
                            <div class="review-ico ico-65"><span class="flaticon-quote"></span></div>

                            <!-- Text -->
                            <div class="review-txt">

                                <!-- Text -->
                                <p>Mauris gestas magnis a sapien etiam sapien congue an augue egestas and ultrice
                                    vitae purus diam an integer congue magna ligula egestas magna suscipit
                                </p>

                                <!-- Author -->
                                <div class="author-data clearfix">

                                    <!-- Avatar -->
                                    <div class="review-avatar">
                                        <img src="images/review-author-3.jpg" alt="review-avatar">
                                    </div>

                                    <!-- Data -->
                                    <div class="review-author">
                                        <h6 class="s-18 w-700">Marisol19</h6>
                                        <p class="p-sm">@marisol19</p>
                                    </div>

                                </div>	<!-- End Author -->

                            </div>	<!-- End Text -->

                        </div>	<!-- END TESTIMONIAL #3 -->


                        <!-- TESTIMONIAL #4 -->
                        <div class="review-1 bg--white-100 block-shadow r-08">

                            <!-- Quote Icon -->
                            <div class="review-ico ico-65"><span class="flaticon-quote"></span></div>

                            <!-- Text -->
                            <div class="review-txt">

                                <!-- Text -->
                                <p>Mauris donec a magnis sapien etiam pretium a congue augue volutpat lectus
                                    aenean magna and undo mauris lectus laoreet tempor egestas rutrum
                                </p>

                                <!-- Author -->
                                <div class="author-data clearfix">

                                    <!-- Avatar -->
                                    <div class="review-avatar">
                                        <img src="images/review-author-4.jpg" alt="review-avatar">
                                    </div>

                                    <!-- Data -->
                                    <div class="review-author">
                                        <h6 class="s-18 w-700">Leslie D.</h6>
                                        <p class="p-sm">Web Developer</p>
                                    </div>

                                </div>	<!-- End Author -->

                            </div>	<!-- End Text -->

                        </div>	<!-- END TESTIMONIAL #4 -->


                        <!-- TESTIMONIAL #5 -->
                        <div class="review-1 bg--white-100 block-shadow r-08">

                            <!-- Quote Icon -->
                            <div class="review-ico ico-65"><span class="flaticon-quote"></span></div>

                            <!-- Text -->
                            <div class="review-txt">

                                <!-- Text -->
                                <p>An augue cubilia undo laoreet magna suscipit egestas ipsum lectus purus ipsum
                                    and primis augue an ultrice ligula egestas suscipit a lectus gestas auctor tempus
                                    feugiat impedit
                                </p>

                                <!-- Author -->
                                <div class="author-data clearfix">

                                    <!-- Avatar -->
                                    <div class="review-avatar">
                                        <img src="images/review-author-5.jpg" alt="review-avatar">
                                    </div>

                                    <!-- Data -->
                                    <div class="review-author">
                                        <h6 class="s-18 w-700">Jennifer Harper</h6>
                                        <p class="p-sm">App Developer</p>
                                    </div>

                                </div>	<!-- End Author -->

                            </div>	<!-- End Text -->

                        </div>	<!-- END TESTIMONIAL #5 -->


                        <!-- TESTIMONIAL #6 -->
                        <div class="review-1 bg--white-100 block-shadow r-08">

                            <!-- Quote Icon -->
                            <div class="review-ico ico-65"><span class="flaticon-quote"></span></div>

                            <!-- Text -->
                            <div class="review-txt">

                                <!-- Text -->
                                <p>An augue cubilia laoreet undo magna ipsum semper suscipit egestas magna ipsum
                                    ligula a vitae purus and ipsum primis cubilia magna suscipit
                                </p>

                                <!-- Author -->
                                <div class="author-data clearfix">

                                    <!-- Avatar -->
                                    <div class="review-avatar">
                                        <img src="images/review-author-6.jpg" alt="review-avatar">
                                    </div>

                                    <!-- Data -->
                                    <div class="review-author">
                                        <h6 class="s-18 w-700">Jonathan Barnes</h6>
                                        <p class="p-sm">jQuery Programmer</p>
                                    </div>

                                </div>	<!-- End Author -->

                            </div>	<!-- End Text -->

                        </div>	<!-- END TESTIMONIAL #6 -->


                        <!-- TESTIMONIAL #7 -->
                        <div class="review-1 bg--white-100 block-shadow r-08">

                            <!-- Quote Icon -->
                            <div class="review-ico ico-65"><span class="flaticon-quote"></span></div>

                            <!-- Text -->
                            <div class="review-txt">

                                <!-- Text -->
                                <p>Augue egestas porta tempus volutpat egestas augue cubilia laoreet a magna
                                    suscipit luctus dolor blandit vitae purus neque tempus an aliquet porta gestas
                                    rutrum blandit vitae
                                </p>

                                <!-- Author -->
                                <div class="author-data clearfix">

                                    <!-- Avatar -->
                                    <div class="review-avatar">
                                        <img src="images/review-author-7.jpg" alt="review-avatar">
                                    </div>

                                    <!-- Data -->
                                    <div class="review-author">
                                        <h6 class="s-18 w-700">Mike Harris</h6>
                                        <p class="p-sm">Graphic Designer</p>
                                    </div>

                                </div>	<!-- End Author -->

                            </div>	<!-- End Text -->

                        </div>	<!-- END TESTIMONIAL #7 -->


                        <!-- TESTIMONIAL #8 -->
                        <div class="review-1 bg--white-100 block-shadow r-08">

                            <!-- Quote Icon -->
                            <div class="review-ico ico-65"><span class="flaticon-quote"></span></div>

                            <!-- Text -->
                            <div class="review-txt">

                                <!-- Text -->
                                <p>Augue at vitae purus tempus egestas volutpat augue undo cubilia laoreet magna
                                    suscipit luctus dolor blandit at purus tempus feugiat impedit
                                </p>

                                <!-- Author -->
                                <div class="author-data clearfix">

                                    <!-- Avatar -->
                                    <div class="review-avatar">
                                        <img src="images/review-author-8.jpg" alt="review-avatar">
                                    </div>

                                    <!-- Data -->
                                    <div class="review-author">
                                        <h6 class="s-18 w-700">Evelyn Martinez</h6>
                                        <p class="p-sm">WordPress Consultant</p>
                                    </div>

                                </div>	<!-- End Author -->

                            </div>	<!-- End Text -->

                        </div>	<!-- END TESTIMONIAL #8 -->


                    </div>
                </div>
            </div>	<!-- END TESTIMONIALS CONTENT -->


        </div>	   <!-- End container -->
    </section>	<!-- END TESTIMONIALS-1 -->




    <!-- FAQs-3
    ============================================= -->
    <section id="faqs-3" class="pt-100 faqs-section">
        <div class="container">


            <!-- SECTION TITLE -->
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-9">
                    <div class="section-title mb-70">

                        <!-- Title -->
                        <h2 class="s-50 w-700">Questions & Answers</h2>

                        <!-- Text -->
                        <p class="s-21 color--grey">Ligula risus auctor tempus magna feugiat lacinia.</p>

                    </div>
                </div>
            </div>


            <!-- FAQs-3 QUESTIONS -->
            <div class="faqs-3-questions">
                <div class="row">


                    <!-- QUESTIONS HOLDER -->
                    <div class="col-lg-6">
                        <div class="questions-holder">


                            <!-- QUESTION #1 -->
                            <div class="question mb-35 wow fadeInUp">

                                <!-- Question -->
                                <h5 class="s-22 w-700"><span>1.</span> Getting started with Martex</h5>

                                <!-- Answer -->
                                <p class="color--grey">Etiam amet mauris suscipit in odio integer congue metus
                                    and vitae arcu mollis blandit ultrice ligula egestas magna suscipit lectus magna
                                    suscipit luctus blandit and laoreet
                                </p>

                            </div>


                            <!-- QUESTION #2 -->
                            <div class="question mb-35 wow fadeInUp">

                                <!-- Question -->
                                <h5 class="s-22 w-700"><span>2.</span> What's inside the package?</h5>

                                <!-- Answer -->
                                <p class="color--grey">An enim nullam tempor sapien gravida donec ipsum and enim
                                    porta justo integer at velna vitae auctor integer congue undo magna laoreet
                                    augue pretium purus pretium ligula
                                </p>

                            </div>


                            <!-- QUESTION #3 -->
                            <div class="question mb-35 wow fadeInUp">

                                <!-- Question -->
                                <h5 class="s-22 w-700"><span>3.</span> How do I choose a plan?</h5>

                                <!-- Answer -->
                                <ul class="simple-list color--grey">

                                    <li class="list-item">
                                        <p>Fringilla risus, luctus mauris orci auctor purus ligula euismod pretium
                                            purus pretium rutrum tempor sapien
                                        </p>
                                    </li>

                                    <li class="list-item">
                                        <p>Nemo ipsam egestas volute undo turpis purus lipsum primis aliquam sapien
                                            quaerat sodales pretium a purus
                                        </p>
                                    </li>

                                </ul>

                            </div>


                        </div>
                    </div>	<!-- END QUESTIONS HOLDER -->


                    <!-- QUESTIONS WRAPPER -->
                    <div class="col-lg-6">
                        <div class="questions-holder">


                            <!-- QUESTION #4 -->
                            <div class="question mb-35 wow fadeInUp">

                                <!-- Question -->
                                <h5 class="s-22 w-700"><span>4.</span> How does Martex handle my privacy?</h5>

                                <!-- Answer -->
                                <p class="color--grey">Quaerat sodales sapien euismod blandit purus a purus
                                    ipsum primis in cubilia laoreet augue luctus dolor luctus
                                </p>

                                <!-- Answer -->
                                <p class="color--grey">An enim nullam tempor sapien gravida donec congue metus.
                                    Vitae arcu mollis blandit integer nemo volute velna
                                </p>

                            </div>


                            <!-- QUESTION #5 -->
                            <div class="question mb-35 wow fadeInUp">

                                <!-- Question -->
                                <h5 class="s-22 w-700"><span>5.</span> I have an issue with my account</h5>

                                <!-- Answer -->
                                <p class="color--grey">Cubilia laoreet augue egestas and luctus donec curabite
                                    diam vitae dapibus libero and quisque gravida donec neque blandit justo
                                    aliquam molestie nunc sapien justo
                                </p>

                            </div>


                            <!-- QUESTION #6 -->
                            <div class="question mb-35 wow fadeInUp">

                                <!-- Question -->
                                <h5 class="s-22 w-700"><span>6.</span> Can I cancel at anytime?</h5>

                                <!-- Answer -->
                                <p class="color--grey">An enim nullam tempor sapien gravida donec ipsum and enim
                                    porta justo integer at velna vitae auctor integer congue undo magna laoreet
                                    augue pretium purus pretium ligula
                                </p>

                            </div>


                        </div>
                    </div>	<!-- END QUESTIONS HOLDER -->


                </div>  <!-- End row -->
            </div>	<!-- END FAQs-3 QUESTIONS -->


            <!-- MORE QUESTIONS LINK -->
            <div class="row">
                <div class="col">
                    <div class="more-questions mt-40">
                        <div class="more-questions-txt bg--white-400 r-100">
                            <p class="p-lg">Have any questions?
                                <a href="contacts.html" class="color--theme">Get in Touch</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>


        </div>	   <!-- End container -->
    </section>	<!-- END FAQs-3 -->




    <!-- BANNER-3
    ============================================= -->
    <section id="banner-3" class="pt-100 banner-section">
        <div class="container">


            <!-- BANNER-3 WRAPPER -->
            <div class="banner-3-wrapper bg--03 bg--scroll r-16">
                <div class="banner-overlay">
                    <div class="row">


                        <!-- BANNER-3 TEXT -->
                        <div class="col">
                            <div class="banner-3-txt color--white">

                                <!-- Title -->
                                <h2 class="s-48 w-700">Starting with Martex is easy, fast and free</h2>

                                <!-- Text -->
                                <p class="p-xl">It only takes a few clicks to get started</p>

                                <!-- Button -->
                                <a href="signup-1.html" class="btn r-04 btn--theme hover--tra-white">Get srarted - it's free</a>

                                <!-- Button Text -->
                                <p class="p-sm btn-txt ico-15">
                                    <span class="flaticon-check"></span> Free for 14 days, no credit card required.
                                </p>

                            </div>
                        </div>	<!-- END BANNER-3 TEXT -->


                    </div>   <!-- End row -->
                </div>   <!-- End banner overlay -->
            </div>    <!-- END BANNER-3 WRAPPER -->


        </div>     <!-- End container -->
    </section>	<!-- END BANNER-3 -->





    <!-- MODAL WINDOW (NEWSLETTER FORM)
    ============================================= -->
    <div id="modal-2" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">


                <!-- CLOSE BUTTON -->
                <button type="button" class="btn-close ico-10 white-color" data-bs-dismiss="modal" aria-label="Close">
                    <span class="flaticon-cancel"></span>
                </button>


                <!-- MODAL CONTENT -->
                <div class="modal-body text-center">


                    <!-- IMAGE -->
                    <div class="modal-body-img">
                        <img class="img-fluid" src="images/modal-newsletter-violet.jpg" alt="content-image">
                    </div>


                    <!-- NEWSLETTER FORM -->
                    <div class="modal-body-content">

                        <!-- Title -->
                        <h5 class="s-24 w-700">Stay up to date with our news, ideas and updates</h5>

                        <!-- Form -->
                        <form class="newsletter-form">

                            <div class="input-group">
                                <input type="email" autocomplete="off" class="form-control" placeholder="Your email address" required id="s-email">
                                <span class="input-group-btn">
											<button type="submit" class="btn btn--theme hover--theme">Subscribe Now</button>
										</span>
                            </div>

                            <!-- Newsletter Form Notification -->
                            <label for="s-email" class="form-notification"></label>

                        </form>

                    </div>	<!-- END NEWSLETTER FORM -->


                </div>	<!-- END MODAL CONTENT -->


            </div>
        </div>
    </div>	<!-- END MODAL WINDOW (NEWSLETTER FORM) -->




    <!-- MODAL WINDOW (REQUEST FORM)
    ============================================= -->
    <div id="modal-3" class="modal auto-off fade" tabindex="-1" role="dialog" aria-labelledby="modal-3">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">


                <!-- CLOSE BUTTON -->
                <button type="button" class="btn-close ico-10 white-color" data-bs-dismiss="modal" aria-label="Close">
                    <span class="flaticon-cancel"></span>
                </button>


                <!-- MODAL CONTENT -->
                <div class="modal-body">
                    <div class="container">
                        <div class="row">


                            <!-- BACKGROUND IMAGE -->
                            <div class="col-md-5 bg-img d-none d-sm-flex align-items-end"></div>


                            <!-- REQUEST FORM -->
                            <div class="col-md-7">
                                <div class="modal-body-content">

                                    <!-- TEXT -->
                                    <div class="request-form-title">

                                        <!-- Title 	-->
                                        <h3 class="s-28 w-700">Get started for Free!</h3>

                                        <!-- Text -->
                                        <p class="color--grey">Aliquam augue suscipit, luctus neque purus ipsum
                                            neque dolor primis libero
                                        </p>

                                    </div>

                                    <!-- FORM -->
                                    <form name="requestForm" class="row request-form">

                                        <!-- Form Input -->
                                        <div class="col-md-12">
                                            <input type="text" name="name" class="form-control name" placeholder="Enter Your Name*" autocomplete="off" required>
                                        </div>

                                        <!-- Form Input -->
                                        <div class="col-md-12">
                                            <input type="email" name="email" class="form-control email" placeholder="Enter Your Email*" autocomplete="off" required>
                                        </div>

                                        <!-- Form Button -->
                                        <div class="col-md-12 form-btn">
                                            <button type="submit" class="btn btn--theme hover--tra-black submit">Get Started Now</button>
                                        </div>

                                        <!-- Form Message -->
                                        <div class="col-md-12 request-form-msg">
                                            <span class="loading"></span>
                                        </div>

                                    </form>	<!-- END FORM -->

                                </div>
                            </div>	<!-- END REQUEST FORM -->


                        </div>
                    </div>
                </div>	<!-- END MODAL CONTENT -->


            </div>
        </div>
    </div>	<!-- END MODAL WINDOW (REQUEST FORM) -->




    <!-- FOOTER-3
    ============================================= -->
    <footer id="footer-3" class="pt-100 footer">
        <div class="container">


            <!-- FOOTER CONTENT -->
            <div class="row">


                <!-- FOOTER LOGO -->
                <div class="col-xl-3">
                    <div class="footer-info">
                        <img class="footer-logo" src="images/logo-pink.png" alt="footer-logo">
                    </div>
                </div>


                <!-- FOOTER LINKS -->
                <div class="col-sm-4 col-md-3 col-xl-2">
                    <div class="footer-links fl-1">

                        <!-- Title -->
                        <h6 class="s-17 w-700">Company</h6>

                        <!-- Links -->
                        <ul class="foo-links clearfix">
                            <li><p><a href="about.html">About Us</a></p></li>
                            <li><p><a href="careers.html">Careers</a></p></li>
                            <li><p><a href="blog-listing.html">Our Blog</a></p></li>
                            <li><p><a href="contacts.html">Contact Us</a></p></li>
                        </ul>

                    </div>
                </div>	<!-- END FOOTER LINKS -->


                <!-- FOOTER LINKS -->
                <div class="col-sm-4 col-md-3 col-xl-2">
                    <div class="footer-links fl-2">

                        <!-- Title -->
                        <h6 class="s-17 w-700">Product</h6>

                        <!-- Links -->
                        <ul class="foo-links clearfix">
                            <li><p><a href="features.html">Integration</a></p></li>
                            <li><p><a href="reviews.html">Customers</a></p></li>
                            <li><p><a href="pricing-1.html">Pricing</a></p></li>
                            <li><p><a href="help-center.html">Help Center</a></p></li>
                        </ul>

                    </div>
                </div>	<!-- END FOOTER LINKS -->


                <!-- FOOTER LINKS -->
                <div class="col-sm-4 col-md-3 col-xl-2">
                    <div class="footer-links fl-3">

                        <!-- Title -->
                        <h6 class="s-17 w-700">Legal</h6>

                        <!-- Links -->
                        <ul class="foo-links clearfix">
                            <li><p><a href="terms.html">Terms of Use</a></p></li>
                            <li><p><a href="privacy.html">Privacy Policy</a></p></li>
                            <li><p><a href="cookies.html">Cookie Policy</a></p></li>
                            <li><p><a href="#">Site Map</a></p></li>
                        </ul>

                    </div>
                </div>	<!-- END FOOTER LINKS -->


                <!-- FOOTER LINKS -->
                <div class="col-sm-6 col-md-3">
                    <div class="footer-links fl-4">

                        <!-- Title -->
                        <h6 class="s-17 w-700">Connect With Us</h6>

                        <!-- Mail Link -->
                        <p class="footer-mail-link ico-25">
                            <a href="mailto:yourdomain@mail.com">hello@yourdomain.com</a>
                        </p>

                        <!-- Social Links -->
                        <ul class="footer-socials ico-25 text-center clearfix">
                            <li><a href="#"><span class="flaticon-facebook"></span></a></li>
                            <li><a href="#"><span class="flaticon-twitter"></span></a></li>
                            <li><a href="#"><span class="flaticon-github"></span></a></li>
                            <li><a href="#"><span class="flaticon-dribbble"></span></a></li>
                        </ul>

                    </div>
                </div>	<!-- END FOOTER LINKS -->


            </div>	<!-- END FOOTER CONTENT -->


            <hr>	<!-- FOOTER DIVIDER LINE -->


            <!-- BOTTOM FOOTER -->
            <div class="bottom-footer">
                <div class="row row-cols-1 row-cols-md-2 d-flex align-items-center">


                    <!-- FOOTER COPYRIGHT -->
                    <div class="col">
                        <div class="footer-copyright"><p class="p-sm">&copy; 2023 Martex. <span>All Rights Reserved</span></p></div>
                    </div>


                    <!-- FOOTER SECONDARY LINK -->
                    <div class="col">
                        <div class="bottom-secondary-link ico-15 text-end">
                            <p class="p-sm"><a href="https://themeforest.net/user/dsathemes/portfolio">Made with
                                    <span class="flaticon-heart"></span> by @DSAThemes</a>
                            </p>
                        </div>
                    </div>


                </div>  <!-- End row -->
            </div>	<!-- END BOTTOM FOOTER -->


        </div>     <!-- End container -->
    </footer>   <!-- END FOOTER-3 -->




</div>	<!-- END PAGE CONTENT -->




<!-- EXTERNAL SCRIPTS
============================================= -->
<script src="js/jquery-3.7.0.min.js"></script>
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


<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->
<!--
<script>
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-XXXXX-X']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
</script>
-->


</body>




</html>