<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Minimal Shop Theme">
    <meta name="keywords" content="responsive, retina ready, html5, css3, shop, market, online store, bootstrap theme"/>
    <meta name="author" content="KingStudio.ro">

    <!-- favicon -->
    <link rel="icon" href="{{ asset('minimal_shop/images/favicon.png') }}">
    <!-- page title -->
    <title>{{ env('APP_NAME') }}</title>
    <!-- bootstrap css -->
    <link href="{{ asset('minimal_shop/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- css -->
    <link href="{{ asset('minimal_shop/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('minimal_shop/css/animate.css') }}" rel="stylesheet">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,500,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lily+Script+One" rel="stylesheet">
    <link href="{{ asset('minimal_shop/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('minimal_shop/fonts/FontAwesome.otf')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('minimal_shop/css/linear-icons.css') }}">

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
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route('home') }}"><img
                        src="{{ asset('minimal_shop/images/logo.png') }}" alt="logo"></a>
            </div><!-- / navbar-header -->
            <div class="secondary-nav">
                <a href="/register" class="my-account space-right"><i class="fa fa-user"></i></a>
                <a href="{{ route('shopping-cart') }}" class="shopping-cart"><i class="fa fa-shopping-cart"></i> <span
                        class="cart-badge">2</span></a>
            </div>
            <div class="navbar-collapse collapse text-center">
                <ul class="nav navbar-nav">
                    <li><a href="{{ route('home') }}"><span>HOME</span></a></li>
                    <li><a href="{{ route('about') }}"><span>ABOUT</span></a></li>
                    {{--                    <li class="dropdown">--}}
                    {{--                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"--}}
                    {{--                           aria-expanded="false"><span>BLOG</span> <span class="dropdown-icon"></span></a>--}}
                    {{--                        <ul class="dropdown-menu animated zoomIn fast">--}}
                    {{--                            <li><a href="blog.html"><span>BLOG FULLWIDTH</span></a></li>--}}
                    {{--                            <li><a href="blog-masonry.html"><span>BLOG MASONRY</span></a></li>--}}
                    {{--                            <li><a href="blog-sidebar.html"><span>BLOG SIDEBAR</span></a></li>--}}
                    {{--                            <li><a href="single-post-full.html"><span>POST FULLWIDTH</span></a></li>--}}
                    {{--                            <li><a href="single-post.html"><span>POST SIDEBAR</span></a></li>--}}
                    {{--                        </ul>--}}
                    {{--                    </li>--}}
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false"><span>SHOP</span> <span class="dropdown-icon"></span></a>
                        <ul class="dropdown-menu animated zoomIn fast">
                            <li class="active"><a href="{{ url('/') }}"><span>FULL WIDTH</span></a></li>
                            {{--<li class="active"><a href="shop.html"><span>FULL WIDTH</span></a></li>--}}
                            {{--<li><a href="shop-right.html"><span>RIGHT SIDEBAR</span></a></li>--}}
                            {{--<li><a href="shop-left.html"><span>LEFT SIDEBAR</span></a></li>--}}
                            {{--<li><a href="shop-masonry.html"><span>MASONRY</span></a></li>--}}
                            <li><a href="{{ route('product') }}"><span>SINGLE PRODUCT</span></a></li>
                            {{--<li><a href="single-product2.html"><span>SINGLE PRODUCT 2</span></a></li>--}}
                            {{--<li><a href="single-product3.html"><span>SINGLE PRODUCT 3</span></a></li>--}}
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false"><span>PAGES</span> <span class="dropdown-icon"></span></a>
                        <ul class="dropdown-menu animated zoomIn fast">
                            <li><a href="{{ route('faq') }}"><span>FAQ</span></a></li>
                            <li><a href="{{ route('shopping-cart') }}"><span>SHOPPING CART</span></a></li>
                            <li><a href="/register"><span>LOGIN / REGISTER</span></a></li>
                            <li><a href="{{ route('my-account') }}"><span>MY ACCOUNT</span></a></li>
                            <li><a href="{{ route('checkout') }}"><span>CHECKOUT</span></a></li>
                            <li><a href=" {{ route('404') }}"><span>404 PAGE</span></a></li>
                            <li><a href="{{ route('components') }}"><span>COMPONENTS</span></a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('contact') }}"><span>CONTACT</span></a></li>
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
                    <h1>Ally Cats Crafts</h1>
                    <p>Custom Crocheted Creations</p>
                </div><!-- / banner-info -->
            </div><!-- / banner-border -->
        </div><!-- / banner-content -->
    </div>
    <!-- / header-banner -->
</header>
<!-- / header -->

<!-- content -->

<!-- shop section -->
<section id="shop" class="space-top-30">
    <div class="container">
        @yield('content')
    </div><!-- / container -->
</section>
<!-- / shop section -->

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
                            {{--<img src="{{ asset('minimal_shop/images/logo2.png') }}" alt="">--}}
                        </div>
                        <p>Crocheting is a fun hobby that allows you to make beautiful, unique, and practical creations.
                            Plus, it's good for you! Once you have a handle on a few different stitches and techniques,
                            crocheting can be meditative and relaxing, which can reduce stress and anxiety. However,
                            there's a learning curve for any new hobby.</p>
                    </div><!-- / about-widget -->
                </div><!-- / widget -->
                <!-- / first widget -->

                <div class="col-md-2 widget">
                </div>

                {{--                <div class="col-md-2 widget">--}}
                {{--                    <div class="widget-title">--}}
                {{--                        <h4>BRANDS</h4>--}}
                {{--                    </div>--}}
                {{--                    <div class="link-widget">--}}
                {{--                        <div class="info">--}}
                {{--                            <a href="#">Brand 1</a>--}}
                {{--                        </div>--}}
                {{--                        <div class="info">--}}
                {{--                            <a href="#">Brand 2</a>--}}
                {{--                        </div>--}}
                {{--                        <div class="info">--}}
                {{--                            <a href="#">Brand 3</a>--}}
                {{--                        </div>--}}
                {{--                        <div class="info">--}}
                {{--                            <a href="#">Brand 4</a>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div><!-- / widget -->--}}
                <!-- / second widget -->

                <div class="col-md-2 widget">
                    <div class="widget-title">
                        <h4>SUPPORT</h4>
                    </div>
                    <div class="link-widget">
                        <div class="info">
                            <a href="#">Terms & Conditions</a>
                        </div>
                        <div class="info">
                            <a href="#">Shipping & Return</a>
                        </div>
                        <div class="info">
                            <a href="{{ route('faq') }}">F.A.Q</a>
                        </div>
                        <div class="info">
                            <a href="{{ route('contact') }}">Contact</a>
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
                            <p><i class="lnr lnr-map-marker"></i><span>Vancouver WA, USA</span>
                            </p>
                        </div>
                        <div class="info">
                            <a href="tel:+015147143164"><i
                                    class="lnr lnr-phone-handset"></i><span>1.541.714.3164</span></a>
                        </div>
                        <div class="info">
                            <a href="mailto:contact.allycatscrafts@gmail.com"><i class="lnr lnr-envelope"></i><span>contact.allycatscrafts@gmail.com</span></a>
                        </div>
                        {{--                        <div class="info">--}}
                        {{--                            <i class="lnr lnr-thumbs-up"></i>--}}
                        {{--                            <span class="social text-left">--}}
                        {{--                                <a class="no-margin" href="#"><i class="fa fa-facebook"></i></a>--}}
                        {{--                                <a href="#"><i class="fa fa-twitter"></i></a>--}}
                        {{--                                <a href="#"><i class="fa fa-google-plus"></i></a>--}}
                        {{--                                <a href="#"><i class="fa fa-linkedin"></i></a>--}}
                        {{--                                <a href="#"><i class="fa fa-pinterest"></i></a>--}}
                        {{--                            </span>--}}
                        {{--                        </div>--}}
                    </div><!-- / contact-widget -->
                </div><!-- / widget -->
                <!-- / fourth widget -->

            </div><!-- / row -->
        </div><!-- / container -->
    </div><!-- / widget-area -->
    <div class="footer-info">
        <div class="container">
            <div class="pull-left copyright">
                <p><strong>©ALLY CATS CRAFTS - all rights reserved - 2021 </strong></p>
            </div>
            <span class="pull-right">
                {{--<img src="{{ asset('minimal_shop/images/visa.pngs')}}" alt="">--}}
                {{--<img src="{{ asset('minimal_shop/images/mastercard.pngs')}}" alt="">--}}
                {{--<img src="{{ asset('minimal_shop/images/discover.pngs')}}" alt="">--}}
                {{--<img src="{{ asset('minimal_shop/images/paypal.pngs')}}" alt="">--}}
                </span>
        </div><!-- / container -->
    </div><!-- / footer-info -->
</footer>
<!-- / footer -->

<!-- javascript -->
<script src="{{ asset('minimal_shop/js/jquery.min.js')}}"></script>

<!-- sticky nav -->
<script src="{{ asset('minimal_shop/js/jquery.easing.min.js')}}"></script>
<script src="{{ asset('minimal_shop/js/scrolling-nav-sticky.js')}}"></script>
<!-- / sticky nav -->

<!-- hide nav -->
<script src="{{ asset('minimal_shop/js/hide-nav.js')}}"></script>
<!-- / hide nav -->

<script>
    $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>

<!-- shuffle grid-resizer -->
<script src="{{ asset('minimal_shop/js/jquery.shuffle.min.js')}}"></script>
<script src="{{ asset('minimal_shop/js/custom.js')}}"></script>
<!-- / shuffle grid-resizer -->

<!-- preloader -->
<script src="{{ asset('minimal_shop/js/preloader.js')}}"></script>
<!-- / preloader -->

<!-- / javascript -->
</body>

</html>
