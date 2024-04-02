<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />

    <!-- Stylesheets
	============================================= -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700|Roboto:300,400,500,700&display=swap" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="style.css" type="text/css" />

    <!-- One Page Module Specific Stylesheet -->
    <link rel="stylesheet" href="css/onepage.css" type="text/css" />
    <!-- / -->

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <link rel="stylesheet" href="css/dark.css" type="text/css" />
    <link rel="stylesheet" href="css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="css/one-page/et-line.css" type="text/css" />
    <link rel="stylesheet" href="css/animate.css" type="text/css" />
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

    <link rel="stylesheet" href="css/one-page/fonts.css" type="text/css" />

    <link rel="stylesheet" href="css/custom.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Document Title
	============================================= -->
    <title>Uitsig Kersmark</title>
</head>

<body class="stretched">
    <!-- Document Wrapper
	============================================= -->
    <div id="wrapper" class="clearfix">
        <!-- Header
		============================================= -->
        <header id="header" class="full-header border-full-header header-size-custom" data-sticky-shrink="false" data-sticky-class="not-dark" data-sticky-offset="full" data-sticky-offset-negative="100">
            <div id="header-wrap">
                <div class="container">
                    <div class="header-row">
                        <!-- Logo
						============================================= -->
                        <div id="logo">
                            <a href="#" class="standard-logo" data-href="#wrapper" data-dark-logo="images/Uitsig_Kersmark.jpg"><img src="images/Uitsig_Kersmark.jpg" alt="Uitsig Kersmark" /></a>
                            <a href="#" class="retina-logo" data-href="#wrapper" data-dark-logo="images/Uitsig_Kersmark.jpg"><img src="images/Uitsig_Kersmark.jpg" alt="Uitsig Kersmark" /></a>
                        </div>
                        <!-- #logo end -->

                        <!-- <div class="header-misc">

							<div class="side-panel-trigger header-misc-icon">
								<a href="#"><i class="icon-ellipsis-v"></i></a>
							</div>

						</div> -->

                        <div id="primary-menu-trigger">
                            <svg class="svg-trigger" viewBox="0 0 100 100">
                                <path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path>
                                <path d="m 30,50 h 40"></path>
                                <path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path>
                            </svg>
                        </div>

                        <!-- Primary Navigation
						============================================= -->
                        <nav class="primary-menu">
                            <ul class="one-page-menu menu-container" data-easing="easeInOutExpo" data-speed="1250" data-offset="65">
                                <li class="menu-item">
                                    <a href="#" class="menu-link" data-href="#wrapper">
                                        <div><?= $content['menu']['Home']; ?></div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="#" class="menu-link" data-href="#section-vendor">
                                        <div><?= $content['menu']['Vendor_Application']; ?></div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="#" class="menu-link" data-href="#section-contact">
                                        <div><?= $content['menu']['Contact']; ?></div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class="button button-3d button-rounded button-dirtygreen" style="padding: 8px 15px;" href="<?= base_url($lang_switch); ?>" class="menu-link">
                                        <div><?= strtoupper($lang_switch); ?></div>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <!-- #primary-menu end -->
                    </div>
                </div>
            </div>
            <div class="header-wrap-clone"></div>
        </header>
        <!-- #header end -->

        <!-- Content
		============================================= -->
        <section id="content">
            <div class="content-wrap py-0">
                <div id="section-about" class="center">
                    <div class="container clearfix">
                        <p>
                            <img src="images/Uitsig_Kersmark.jpg" alt="Uitsig Kersmark" />
                        </p>
                        <h1 class="font-weight-bold font-body opm-medium-word" style="line-height: 1.3em">
                            <?= $content['heading']['H1']; ?>
                        </h1>

                        <h2 class="mx-auto bottommargin font-body" style="
                                    max-width: 700px;
                                    font-size: 40px;
                                    line-height: 1.2em;
                                ">
                            <?= $content['heading']['Date']; ?><br />
                            <span style="font-size: 0.8em;font-weight: normal;"><?= $content['heading']['Time']; ?></span>
                        </h2>

                        <p class="lead mx-auto" style="max-width: 800px"><?= $content['heading']['Intro1']; ?></p>
                        <p class="lead mx-auto bottommargin" style="max-width: 800px"><?= $content['heading']['Intro2']; ?></p>

                        <!-- <p class="bottommargin" style="font-size: 16px">
                            <a href="#" data-scrollto="#section-services" data-easing="easeInOutExpo" data-speed="1250" data-offset="70" class="more-link">Vendor Application
                                <i class="icon-angle-right"></i></a>
                        </p> -->
                        <div class="clear"></div>
                    </div>
                </div>

                <div id="section-contact" class="page-section pt-0" style="padding-bottom: 0">
                    <div class="row mx-0 bottommargin-lg align-items-stretch">
                        <div class="col-lg-8 col-md-6 px-0">
                            <div class="gmap h-100">
                                <iframe frameborder="0" style="border: 0; height: 100%" src="https://www.google.com/maps/embed/v1/place?key=<?= $google_api; ?>" allowfullscreen>
                                </iframe>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" style="background-color: #f5f5f5">
                            <div class="col-padding">
                                <h3 class="font-body font-weight-normal ls1">
                                    <?= $content['contact']['Heading']; ?>
                                </h3>

                                <div style="
                                            font-size: 16px;
                                            line-height: 1.7;
                                        ">
                                    <address style="line-height: 1.7"><?= $content['contact']['Address']; ?></address>

                                    <div class="clear topmargin-sm"></div>

                                    <abbr title="<?= $content['contact']['Phone_title']; ?>"><strong><?= $content['contact']['Phone_text']; ?>:</strong></abbr>
                                    <a href="tel:+27219194220">+27 (0)21 919 4220</a><br />
                                    <abbr title="<?= $content['contact']['Email_title']; ?>"><strong><?= $content['contact']['Email_text']; ?>:</strong></abbr>                                    
                                    <?php
                                    $attributes = ['title' => 'Website Contact'];
                                    echo safe_mailto('kersmark@uitsigkerk.co.za', 'kersmark@uitsigkerk.co.za', $attributes);
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SECTION: VENDOR-->
                <div id="section-vendor" class="page-section pt-0">
                    <div class="container clearfix">
                        <h2 class="mx-auto bottommargin font-body center" style="max-width: 700px; font-size: 40px; line-height: 1.2em;">
                            <?= $content['vendor']['Heading']; ?>
                        </h2>
                        <div class="col-mb-50">
                            <h3><?= $content['vendor_step1']['Heading']; ?></h3>
                            <div class="col-md-12">
                                <div class="accordion accordion-border clearfix" data-state="closed">
                                    <?php
                                    foreach ($content['vendor_step1'] as $key => $step) {
                                        if (!is_array($step)) {
                                            continue;
                                        }
                                    ?>
                                        <div class="accordion-header">
                                            <div class="accordion-icon">
                                                <i class="accordion-closed icon-ok-circle"></i>
                                                <i class="accordion-open icon-remove-circle"></i>
                                            </div>
                                            <div class="accordion-title">
                                                <?= $step['heading']; ?>
                                            </div>
                                        </div>
                                        <div class="accordion-content" style="display: none">
                                            <?= $step['text']; ?>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <h3><?= $content['vendor_step2']['Heading']; ?></h3>
                                    <p><?= $content['vendor_step2']['Text']; ?></p>
                                </div>

                                <div class="col-md-12">
                                    <!-- <a href="PRODUKTELYS.xlsx" class="button button-desc button-3d button-rounded button-blue center"><?= $content['vendor_step2']['Button_Product_List']; ?></a> -->

                                    <!-- <a href="https://forms.gle/PafqiFCY7LdAKRPM8" class="button button-desc button-3d button-rounded button-default center"><?= $content['vendor_step2']['Button_Vendor_App']; ?></a> -->
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            // echo "<pre>";
            // print_r($content);
            // echo "</pre>";
            ?>
        </section>
        <!-- #content end -->

        <!-- Footer
		============================================= -->
        <footer id="footer" class="dark border-0">
            <div id="copyrights">
                <div class="container center clearfix">
                    Copyrights &copy; <?= date("Y"); ?> NG Kerk Uitsig Gemeente | All Rights Reserved
                </div>
            </div>
        </footer>
        <!-- #footer end -->
    </div>
    <!-- #wrapper end -->

    <!-- Go To Top
	============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>

    <!-- JavaScripts
	============================================= -->
    <script src="js/jquery.js"></script>
    <script src="js/plugins.min.js"></script>
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyAf9RjGBfasEEV3Dg8YVkBpVA1VgmebarU"></script>

    <!-- Footer Scripts
	============================================= -->
    <script src="js/functions.js"></script>
</body>

</html>