<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Minimal Shop Theme">
<meta name="keywords" content="responsive, retina ready, html5, css3, shop, market, onli store, bootstrap theme" />
<meta name="author" content="KingStudio.ro">

<!-- favicon -->
<link rel="icon" href="images/favicon.png">
<!-- page title -->
<title>MS - Minimal Shop Theme</title>
<!-- bootstrap css -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- css -->
<link href="css/style.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">
<!-- fonts -->
<link href="https://fonts.googleapis.com/css?family=Rubik:400,500,700,900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lily+Script+One" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href='fonts/FontAwesome.otf' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/linear-icons.css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body>

<!-- preloader -->
<div id="preloader">
    <div class="spinner spinner-round"></div>
</div>
<!-- / preloader -->

<div id="top"></div>

<!-- header -->
<header>

    <!-- nav -->
    <nav class="navbar navbar-default nav-sec navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo"></a>
            </div><!-- / navbar-header -->
            <div class="secondary-nav">
                <a href="login-register.html" class="my-account space-right"><i class="fa fa-user"></i></a>
                <a href="shopping-cart.html" class="shopping-cart"><i class="fa fa-shopping-cart"></i> <span class="cart-badge">2</span></a>
            </div>
            <div class="navbar-collapse collapse text-center">
                <ul class="nav navbar-nav">
                    <li><a href="index.html"><span>HOME</span></a></li>
                    <li><a href="about.html"><span>ABOUT</span></a></li>
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span>BLOG</span> <span class="dropdown-icon"></span></a>
                    <ul class="dropdown-menu animated zoomIn fast">
                        <li><a href="blog.html"><span>BLOG FULLWIDTH</span></a></li>
                        <li><a href="blog-masonry.html"><span>BLOG MASONRY</span></a></li>
                        <li><a href="blog-sidebar.html"><span>BLOG SIDEBAR</span></a></li>
                        <li><a href="single-post-full.html"><span>POST FULLWIDTH</span></a></li>
                        <li><a href="single-post.html"><span>POST SIDEBAR</span></a></li>
                    </ul>
                    </li>
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span>SHOP</span> <span class="dropdown-icon"></span></a>
                    <ul class="dropdown-menu animated zoomIn fast">
                        <li><a href="shop.html"><span>FULL WIDTH</span></a></li>
                        <li><a href="shop-right.html"><span>RIGHT SIDEBAR</span></a></li>
                        <li><a href="shop-left.html"><span>LEFT SIDEBAR</span></a></li>
                        <li><a href="shop-masonry.html"><span>MASONRY</span></a></li>
                        <li><a href="single-product.html"><span>SINGLE PRODUCT</span></a></li>
                        <li><a href="single-product2.html"><span>SINGLE PRODUCT 2</span></a></li>
                        <li><a href="single-product3.html"><span>SINGLE PRODUCT 3</span></a></li>
                    </ul>
                    </li>
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span>PAGES</span> <span class="dropdown-icon"></span></a>
                    <ul class="dropdown-menu animated zoomIn fast">
                        <li class="active"><a href="faq.html"><span>FAQ</span></a></li>
                        <li><a href="shopping-cart.html"><span>SHOPPING CART</span></a></li>
                        <li><a href="login-register.html"><span>LOGIN / REGISTER</span></a></li>
                        <li><a href="my-account.html"><span>MY ACCOUNT</span></a></li>
                        <li><a href="checkout.html"><span>CHECKOUT</span></a></li>
                        <li><a href="404.html"><span>404 PAGE</span></a></li>
                        <li><a href="components.html"><span>COMPONENTS</span></a></li>
                    </ul>
                    </li>
                    <li><a href="contact.html"><span>CONTACT</span></a></li>
                </ul>
            </div><!--/ nav-collapse -->
        </div><!-- / container -->
    </nav>
    <!-- / nav -->

    <!-- header-banner -->
    <div id="header-banner">
        <div class="banner-content single-page text-center">
            <div class="banner-border">
                <div class="banner-info">
                    <h1>FAQ</h1>
                    <p>Frequently Asked Questions</p>
                </div><!-- / banner-info -->
            </div><!-- / banner-border -->
        </div><!-- / banner-content -->
    </div>
    <!-- / header-banner -->
</header>
<!-- / header -->

<!-- content -->

<!-- faq -->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2 class="hide">Frequently Asked Qiastions</h2>
                <div class="panel-group tabbed">
                    <div class="panel">
                    <div class="panel-heading">
                        <a class="panel-title" data-toggle="collapse" href="#panel1">Do you ship Woldwide?</a>
                    </div>
                    <div id="panel1" class="panel-collapse collapse in">
                        <div class="panel-body text-gray">
                        Curabitur convallis nunc urna, sit amet pulvinar neque commodo in. Fusce vel ex sed nisi consequat molestie a quis massa. Maecenas vel dictum magna. Aenean non mauris accumsan massa efficitur molestie vel.
                        </div>
                    </div>
                    </div><!-- / panel -->
                </div><!-- / panel-group -->

                <div class="panel-group tabbed">
                    <div class="panel">
                    <div class="panel-heading">
                        <a class="panel-title collapsed" data-toggle="collapse" href="#panel2">How much will the delivery cost me?</a>
                    </div>
                    <div id="panel2" class="panel-collapse collapse">
                        <div class="panel-body text-gray">
                        Praesent euismod, odio ac malesuada placerat, urna nunc molestie nunc, nec auctor tortor diam tincidunt nibh. Nam vitae mauris ut turpis semper.
                        </div>
                    </div>
                    </div><!-- / panel -->
                </div><!-- / panel-group -->

                <div class="panel-group tabbed">
                    <div class="panel">
                    <div class="panel-heading">
                        <a class="panel-title collapsed" data-toggle="collapse" href="#panel3">How long does it take for an order to arrive?</a>
                    </div>
                    <div id="panel3" class="panel-collapse collapse">
                        <div class="panel-body text-gray">
                        Duis faucibus dignissim nibh at venenatis. Integer lacus nibh, auctor non viverra at, iaculis eu nulla. Integer sed enim vitae turpis finibus imperdiet in et turpis. Vestibulum vulputate consectetur hendrerit. Etiam egestas, dui ut luctus semper, libero neque interdum magna, sit amet tincidunt nisl lacus et tortor.
                        </div>
                    </div>
                    </div><!-- / panel -->
                </div><!-- / panel-group -->

                <div class="panel-group tabbed">
                    <div class="panel">
                    <div class="panel-heading">
                        <a class="panel-title collapsed" data-toggle="collapse" href="#panel4">How can I check my order's status?</a>
                    </div>
                    <div id="panel4" class="panel-collapse collapse">
                        <div class="panel-body text-gray">
                        Etiam placerat, ante eu tempus tincidunt, ante purus interdum eros, non pulvinar libero risus at sapien. Nullam ex velit, semper quis dolor ac, aliquam fringilla urna. Duis vitae felis id odio cursus volutpat. Vestibulum tristique placerat leo. Ut dapibus vel diam at malesuada. Fusce commodo lorem posuere erat dapibus tincidunt. Morbi eget sapien sed tellus sodales porta.
                        </div>
                    </div>
                    </div><!-- / panel -->
                </div><!-- / panel-group -->

                <div class="panel-group tabbed">
                    <div class="panel">
                    <div class="panel-heading">
                        <a class="panel-title collapsed" data-toggle="collapse" href="#panel5">How can I cancel an order?</a>
                    </div>
                    <div id="panel5" class="panel-collapse collapse">
                        <div class="panel-body text-gray">
                        Fusce quam risus, tincidunt ac erat eu, condimentum vestibulum mauris.
                        </div>
                    </div>
                    </div><!-- / panel -->
                </div><!-- / panel-group -->

            </div><!-- / accordions-left -->

            <div class="col-sm-6">

                <div class="panel-group tabbed">
                    <div class="panel">
                    <div class="panel-heading">
                        <a class="panel-title collapsed" data-toggle="collapse" href="#panel6">Which payment methods are accepted?</a>
                    </div>
                    <div id="panel6" class="panel-collapse collapse">
                        <div class="panel-body text-gray">
                        Mauris pretium egestas felis, at venenatis nibh iaculis a. Nulla facilisi. Nullam a purus arcu. Cras viverra velit ac turpis laoreet, et aliquam nisi auctor. Nam sed dignissim nisi. Ut orci lacus, sagittis quis est eu tristique.
                        </div>
                    </div>
                    </div><!-- / panel -->
                </div><!-- / panel-group -->

                <div class="panel-group tabbed">
                    <div class="panel">
                    <div class="panel-heading">
                        <a class="panel-title collapsed" data-toggle="collapse" href="#panel7">Am I required to register before placing an order?</a>
                    </div>
                    <div id="panel7" class="panel-collapse collapse">
                        <div class="panel-body text-gray">
                        CCurabitur luctus luctus libero, nec dapibus risus congue in. Vivamus vehicula blandit mi sit amet mattis. Ut euismod, diam nec mollis posuere.
                        </div>
                    </div>
                    </div><!-- / panel -->
                </div><!-- / panel-group -->

                <div class="panel-group tabbed">
                    <div class="panel">
                    <div class="panel-heading">
                        <a class="panel-title collapsed" data-toggle="collapse" href="#panel8">How do I change my email address?</a>
                    </div>
                    <div id="panel8" class="panel-collapse collapse">
                        <div class="panel-body text-gray">
                        Praesent magna urna, tincidunt sodales sapien nec, pretium vehicula turpis. Nulla interdum ex vitae volutpat tristique. Integer sodales sit amet ipsum vitae euismod. In vehicula, magna ut sollicitudin consequat, nulla metus dapibus lorem, in dapibus risus turpis ut ante. Vivamus vitae feugiat tellus.
                        </div>
                    </div>
                    </div><!-- / panel -->
                </div><!-- / panel-group -->

                <div class="panel-group tabbed">
                    <div class="panel">
                    <div class="panel-heading">
                        <a class="panel-title collapsed" data-toggle="collapse" href="#panel9">I forgot my password, how do I get a new one?</a>
                    </div>
                    <div id="panel9" class="panel-collapse collapse">
                        <div class="panel-body text-gray">
                        Nam ac consequat elit, in luctus quam. Ut vulputate, est ut feugiat varius, erat massa porttitor turpis, et dictum metus ante non libero. Pellentesque cursus dolor sem. Proin venenatis id lectus at porta. Mauris ultrices pretium ultrices. Morbi scelerisque urna tellus, vitae auctor arcu maximus vel. Suspendisse nec nisl vitae eros scelerisque rhoncus.
                        </div>
                    </div>
                    </div><!-- / panel -->
                </div><!-- / panel-group -->

                <div class="panel-group tabbed">
                    <div class="panel">
                    <div class="panel-heading">
                        <a class="panel-title collapsed" data-toggle="collapse" href="#panel10">Are my payments secure?</a>
                    </div>
                    <div id="panel10" class="panel-collapse collapse">
                        <div class="panel-body text-gray">
                        Vestibulum suscipit vehicula neque, in fringilla ligula. Sed non pellentesque ante.
                        </div>
                    </div>
                    </div><!-- / panel -->
                </div><!-- / panel-group -->

            </div><!-- / accordions-right -->
        </div><!-- / row -->
    </div><!-- / container -->
</section>
<!-- / about -->

<!-- / content -->

<!-- scroll to top -->
<a href="#top" class="scroll-to-top page-scroll is-hidden" data-nav-status="toggle"><i class="fa fa-angle-up"></i></a>
<!-- / scroll to top -->

<!-- footer -->
<footer class="light-footer">
    <div class="widget-area">
        <div class="container">
            <div class="row">

                <div class="col-md-4 widget">
                    <div class="about-widget">
                        <div class="widget-title-image">
                            <img src="images/logo2.png" alt="">
                        </div>
                        <p>Vivamus consequat lacus quam, nec egestas quam egestas sit amet. Suspendisse et risus gravida tellus aliquam ullamcorper. Pellentesque elit dolor, ornare ut lorem nec, convallis nibh accumsan lacus morbi leo lipsum.</p>
                    </div><!-- / about-widget -->
                </div><!-- / widget -->
                <!-- / first widget -->

                <div class="col-md-2 widget">
                    <div class="widget-title">
                        <h4>BRANDS</h4>
                    </div>
                    <div class="link-widget">
                        <div class="info">
                            <a href="#x">Brand 1</a>
                        </div>
                        <div class="info">
                            <a href="#x">Brand 2</a>
                        </div>
                        <div class="info">
                            <a href="#x">Brand 3</a>
                        </div>
                        <div class="info">
                            <a href="#x">Brand 4</a>
                        </div>
                    </div>
                </div><!-- / widget -->
                <!-- / second widget -->

                <div class="col-md-2 widget">
                    <div class="widget-title">
                        <h4>SUPPORT</h4>
                    </div>
                    <div class="link-widget">
                        <div class="info">
                            <a href="#x">Terms & Conditions</a>
                        </div>
                        <div class="info">
                            <a href="#x">Shipping & Return</a>
                        </div>
                        <div class="info">
                            <a href="faq.html">F.A.Q</a>
                        </div>
                        <div class="info">
                            <a href="contact.html">Contact</a>
                        </div>
                    </div>
                </div><!-- / widget -->
                <!-- / third widget -->

                <div class="col-md-4 widget">
                    <div class="widget-title">
                        <h4>CONTACT</h4>
                    </div>
                    <div class="contact-widget">
                        <div class="info">
                            <p><i class="lnr lnr-map-marker"></i><span>Miami, S Miami Ave, SW 20th, Store No.1</span></p>
                        </div>
                        <div class="info">
                            <a href="tel:+0123456789"><i class="lnr lnr-phone-handset"></i><span>+0123 456 789</span></a>
                        </div>
                        <div class="info">
                            <a href="mailto:hello@yoursite.com"><i class="lnr lnr-envelope"></i><span>office@yoursite.com</span></a>
                        </div>
                        <div class="info">
                            <i class="lnr lnr-thumbs-up"></i>
                            <span class="social text-left">
                                <a class="no-margin" href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </span>
                        </div>
                    </div><!-- / contact-widget -->
                </div><!-- / widget -->
                <!-- / fourth widget -->

            </div><!-- / row -->
        </div><!-- / container -->
    </div><!-- / widget-area -->
    <div class="footer-info">
        <div class="container">
                <div class="pull-left copyright">
                    <p><strong>© MS - MINIMAL SHOP THEME</strong></p>
                </div>
                <span class="pull-right">
                    <img src="images/visa.png" alt="">
                    <img src="images/mastercard.png" alt="">
                    <img src="images/discover.png" alt="">
                    <img src="images/paypal.png" alt="">
                </span>
        </div><!-- / container -->
    </div><!-- / footer-info -->
</footer>
<!-- / footer -->

<!-- javascript -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<!-- sticky nav -->
<script src="js/jquery.easing.min.js"></script>
<script src="js/scrolling-nav-sticky.js"></script>
<!-- / sticky nav -->

<!-- hide nav -->
<script src="js/hide-nav.js"></script>
<!-- / hide nav -->

<!-- preloader -->
<script src="js/preloader.js"></script>
<!-- / preloader -->

<!-- / javascript -->
</body>

</html>