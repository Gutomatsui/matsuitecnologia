<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="pt-br"> <!--<![endif]-->

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- SITE META -->
    <title>Matsui tecnologia</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- FAVICONS -->
    <link rel="shortcut icon" href="{{ URL::to('public/favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ URL::to('public/apple-touch-icon.png') }}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ URL::to('public/apple-touch-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ URL::to('public/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ URL::to('public/apple-touch-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ URL::to('public/apple-touch-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ URL::to('public/apple-touch-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ URL::to('public/apple-touch-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ URL::to('public/apple-touch-icon-152x152.png') }}">

    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="{{ URL::to('public/css/settings.css')}}">
    <!-- REVOLUTION LAYERS STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ URL::to('public/css/layers.css')}}">
    <!-- REVOLUTION NAVIGATION STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ URL::to('public/css/navigation.css')}}">

    <!-- BOOTSTRAP STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ URL::to('public/css/bootstrap.css')}}">
    <!-- TEMPLATE STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ URL::to('public/css/style.css')}}">
    <!-- RESPONSIVE STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ URL::to('public/css/responsive.css')}}">
    <!-- CUSTOM STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ URL::to('public/css/custom.css')}}">

    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>

<body>

    <!-- PRELOADER -->
    <div id="loader">
        <div class="loader-container">
            <img src="{{ URL::to('public/images/load.gif')}}" alt="" class="loader-site spinner">
        </div>
    </div>
    <!-- END PRELOADER -->

    <div id="wrapper">
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 text-left cenmobile">
                        <div class="topmenu">
                            <span><i class="fa fa-envelope-o"></i> <a href="mailto:#">contato@matsuitecnologia.com.br</a></span>
                            <span><i class="fa fa-phone-square"></i>(13 98204-2274)</span>
                            <span class="hidden-xs"><i class="fa fa-comments-o"></i> <a href="hosting-chat.html">Online
                                    Chat</a></span>
                        </div><!-- end callus -->
                    </div>

                    <div class="col-md-6 col-sm-12 text-right cenmobile">
                        <div class="topmenu rightv">
                            <div class="dropdown">
                                <a class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="true">USD <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li><a href="#">TL</a></li>
                                    <li><a href="#">Euro</a></li>
                                </ul>
                            </div>
                            <span><a data-placement="bottom" data-toggle="tooltip" title="Australia" href="#"><img
                                        src="{{ URL::to('public/AU.png')}}" alt=""></a></span>
                            <span><a data-placement="bottom" data-toggle="tooltip" title="Turkish"
                                    href="#"><img src="{{ URL::to('public/TR.png')}}" alt=""></a></span>
                            <span><a data-placement="bottom" data-toggle="tooltip" title="Germany"
                                    href="#"><img src="{{ URL::to('public/DE.png')}}" alt=""></a></span>
                        </div><!-- end callus -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end topbar -->
        </div><!-- end topbar -->

        <header class="header">
            <div class="container-fluid">
                <nav class="navbar navbar-default yamm">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="index.html"><img src="{{ URL::to('public/logo.png')}}" alt=""></a>
                        </div>

                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li class="dropdown has-submenu active">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-haspopup="true" aria-expanded="false">Home <span
                                            class="fa fa-angle-down"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="index.html">Default Version</a></li>
                                        <li><a href="index-boxed.html">Boxed Version</a></li>
                                        <li><a href="index-dark.html">Home Dark Version</a></li>
                                        <li><a href="index-1.html">Home Version 1</a></li>
                                        <li><a href="index-2.html">Home Version 2</a></li>
                                        <li><a href="index-3.html">Home Version 3</a></li>
                                        <li><a href="index-4.html">Home Version 4</a></li>
                                        <li><a href="index-5.html">Home Version 5</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown has-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-haspopup="true" aria-expanded="false">Company <span
                                            class="fa fa-angle-down"></span></a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown"><a href="#" class="dropdown-toggle"
                                                data-toggle="dropdown" role="button" aria-expanded="false">Default
                                                Pages <span class="fa fa-angle-right"></span></a>
                                            <ul class="dropdown-menu show-left" role="menu">
                                                <li><a href="page-sidebar.html">Page Sidebar</a></li>
                                                <li><a href="page-fullwidth.html">Page Fullwidth</a></li>
                                                <li><a href="page-404.html">Page Not Found</a></li>
                                                <li><a href="page-sitemap.html">Page Sitemap</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#" class="dropdown-toggle"
                                                data-toggle="dropdown" role="button" aria-expanded="false">Blog
                                                Pages <span class="fa fa-angle-right"></span></a>
                                            <ul class="dropdown-menu show-left" role="menu">
                                                <li><a href="blog.html">Default Layout</a></li>
                                                <li><a href="blog-1.html">Grid Layout</a></li>
                                                <li><a href="blog-2.html">Grid Fullwidth</a></li>
                                                <li><a href="blog-3.html">List Layout</a></li>
                                                <li><a href="blog-single.html">Blog Single</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#" class="dropdown-toggle"
                                                data-toggle="dropdown" role="button" aria-expanded="false">Gallery
                                                Pages <span class="fa fa-angle-right"></span></a>
                                            <ul class="dropdown-menu show-left" role="menu">
                                                <li><a href="gallery.html">Default Gallery</a></li>
                                                <li><a href="gallery-1.html">Masonry Gallery</a></li>
                                                <li><a href="gallery-2.html">3 Col Gallery</a></li>
                                                <li><a href="gallery-3.html">4 Col Gallery</a></li>
                                                <li><a href="gallery-single.html">Gallery Single</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#" class="dropdown-toggle"
                                                data-toggle="dropdown" role="button" aria-expanded="false">Shop
                                                Pages <span class="fa fa-angle-right"></span></a>
                                            <ul class="dropdown-menu show-left" role="menu">
                                                <li><a href="shop.html">Default Shop</a></li>
                                                <li><a href="shop-cart.html">Shopping Cart</a></li>
                                                <li><a href="shop-single.html">Shop Single</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="page-about.html">About us</a></li>
                                        <li><a href="page-services.html">Services</a></li>
                                        <li><a href="page-team.html">Team Members</a></li>
                                        <li><a href="page-clients.html">Testimonials & Clients</a></li>
                                        <li><a href="page-contact.html">Contact us</a></li>
                                    </ul>
                                </li>
                                <li class="megamenu dropdown hasmenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-haspopup="true" aria-expanded="false">Web Hosting <span
                                            class="fa fa-angle-down"></span> <span
                                            class="label label-success hidden-xs">Hot</span></a>
                                    <ul class="dropdown-menu withbgcolor">
                                        <li>
                                            <div class="yamm-content clearfix">
                                                <div class="row">
                                                    <div class="col-md-4 col-sm-12 col-xs-12">
                                                        <div class="widget clearfix">
                                                            <div class="big-title">
                                                                <h3>Professional Web Hosting<br>
                                                                    <span>ALL Hosting Features</span>
                                                                </h3>
                                                            </div><!-- end big-title -->

                                                            <div class="email-widget">
                                                                <p>All IP addresses are used in the system are not
                                                                    included in the blacklist clean ip address system,
                                                                    so that no spam will not fall on dystem.</p>
                                                                <ul class="check-list">
                                                                    <li>Unlimited Bandwidth</li>
                                                                    <li>Unlimited Disk Usage</li>
                                                                    <li>Free/Instant Setup</li>
                                                                    <li>Anti-spam Protection</li>
                                                                    <li>Free 25 Email Account</li>
                                                                </ul><!-- end check -->
                                                            </div><!-- end email widget -->
                                                        </div>
                                                    </div><!-- end col -->
                                                    <div class="col-md-3 col-sm-12 col-xs-12">
                                                        <div class="widget clearfix">
                                                            <div class="widget-title">
                                                                <h4>Custom Pages</h4>
                                                            </div><!-- end widget-title -->

                                                            <div class="link-widget">
                                                                <ul>
                                                                    <li><a href="hosting-login.html">Customer Login</a>
                                                                    </li>
                                                                    <li><a href="hosting-affiliate.html">Affiliate &
                                                                            Partner</a></li>
                                                                    <li><a href="hosting-carrier.html">Carrier - Join
                                                                            Team</a></li>
                                                                    <li><a href="page-contact.html">Get In Touch</a>
                                                                    </li>
                                                                    <li><a href="hosting-support.html">Support
                                                                            Platform</a></li>
                                                                    <li><a href="hosting-chat.html">Live Chat
                                                                            Support</a></li>
                                                                    <li><a href="page-services.html">Custom
                                                                            Services</a></li>
                                                                    <li><a href="page-faqs.html">Knowledge Base</a>
                                                                    </li>
                                                                </ul><!-- end check -->
                                                            </div><!-- end link-widget -->
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-12 col-xs-12">
                                                        <div class="widget clearfix">
                                                            <div class="widget-title">
                                                                <h4>All Features</h4>
                                                            </div><!-- end widget-title -->

                                                            <div class="link-widget">
                                                                <ul>
                                                                    <li><a href="shortcode-pricing.html">Pricing
                                                                            Tables</a></li>
                                                                    <li><a href="shortcode-tabs.html">Tab Elements</a>
                                                                    </li>
                                                                    <li><a href="shortcode-accordion.html">Accordion &
                                                                            Toggle</a></li>
                                                                    <li><a href="shortcode-counts.html">Counts &
                                                                            Progress</a></li>
                                                                    <li><a href="shortcode-forms.html">Form Fields</a>
                                                                    </li>
                                                                    <li><a href="shortcode-service-boxes.html">Feature
                                                                            Boxes</a></li>
                                                                    <li><a
                                                                            href="shortcode-typography.html">Typography</a>
                                                                    </li>
                                                                    <li><a href="shortcode-alerts.html">Alerts &
                                                                            Buttons</a></li>
                                                                </ul><!-- end check -->
                                                            </div><!-- end link-widget -->
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-sm-12 col-xs-12">
                                                        <div class="widget clearfix">
                                                            <div class="widget-title">
                                                                <h4>All Packages</h4>
                                                            </div><!-- end widget-title -->

                                                            <div class="link-widget">
                                                                <ul>
                                                                    <li><a href="#">Web Hosting</a></li>
                                                                    <li><a href="#">WordPress Hosting</a></li>
                                                                    <li><a href="#">VPS Hosting</a></li>
                                                                    <li><a href="#">Cloud Server</a></li>
                                                                    <li><a href="#">Reseller Package</a></li>
                                                                    <li><a href="#">Buy Domain Name</a></li>
                                                                    <li><a href="#">Buy Email Service</a></li>
                                                                    <li><a href="#">Buy SSL Certificate</a></li>
                                                                </ul><!-- end check -->
                                                            </div><!-- end link-widget -->
                                                        </div><!-- end widget -->
                                                    </div>
                                                </div><!-- end row -->
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="hosting-reseller.html">Reseller</a></li>
                                <li class="megamenu dropdown hasmenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-haspopup="true" aria-expanded="false">Domain <span
                                            class="fa fa-angle-down"></span></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="yamm-content withbg clearfix">
                                                <div class="row">
                                                    <div class="col-md-8 col-md-offset-2">
                                                        <div class="widget clearfix text-center">
                                                            <div class="big-title">
                                                                <h3>Looking a premium quality<br>
                                                                    <span>Domain Name?</span>
                                                                </h3>
                                                            </div><!-- end big-title -->

                                                            <form class="checkdomain form-inline">
                                                                <div class="checkdomain-wrapper">
                                                                    <p>With our awesome domain name search form, you can
                                                                        search any <strong>domain names</strong> with
                                                                        tons of extensions, for example .com .net .org
                                                                        and more.</p>
                                                                    <div class="form-group">
                                                                        <label class="sr-only"
                                                                            for="domainnamehere-menu">Domain
                                                                            name</label>
                                                                        <input type="text" class="form-control"
                                                                            id="domainnamehere-menu"
                                                                            placeholder="Enter domain name here..">
                                                                        <button type="submit"
                                                                            class="btn btn-default"><i
                                                                                class="fa fa-search"></i>
                                                                            Search</button>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="clearfix"></div>
                                                                    <div class="checkbox checkbox-warning">
                                                                        <input id="domaincom-menu" type="checkbox"
                                                                            class="styled" checked>
                                                                        <label for="domaincom-menu">.com</label>
                                                                    </div>
                                                                    <div class="checkbox checkbox-warning">
                                                                        <input id="domainnet-menu" type="checkbox"
                                                                            class="styled" checked>
                                                                        <label for="domainnet-menu">.net</label>
                                                                    </div>
                                                                    <div class="checkbox checkbox-warning">
                                                                        <input id="domainorg-menu" type="checkbox"
                                                                            class="styled">
                                                                        <label for="domainorg-menu">.org</label>
                                                                    </div>
                                                                    <div class="checkbox checkbox-warning">
                                                                        <input id="domaintv-menu" type="checkbox"
                                                                            class="styled">
                                                                        <label for="domaintv-menu">.tv</label>
                                                                    </div>
                                                                    <div class="checkbox checkbox-warning">
                                                                        <input id="domaininfo-menu" type="checkbox"
                                                                            class="styled">
                                                                        <label for="domaininfo-menu">.info</label>
                                                                    </div>
                                                                    <div class="checkbox checkbox-warning">
                                                                        <input id="domainco-menu" type="checkbox"
                                                                            class="styled">
                                                                        <label for="domainco-menu">.co</label>
                                                                    </div>
                                                                    <div class="checkbox checkbox-warning">
                                                                        <input id="domainus-menu" type="checkbox"
                                                                            class="styled">
                                                                        <label for="domainus-menu">.us</label>
                                                                    </div>
                                                                    <div class="checkbox checkbox-warning">
                                                                        <input id="domaincc-menu" type="checkbox"
                                                                            class="styled">
                                                                        <label for="domaincc-menu">.cc</label>
                                                                    </div>
                                                                    <div class="checkbox checkbox-warning">
                                                                        <input id="domainmoda-menu" type="checkbox"
                                                                            class="styled">
                                                                        <label for="domainmoda-menu">.moda</label>
                                                                    </div>
                                                                    <div class="checkbox checkbox-warning">
                                                                        <input id="domainsale-menu" type="checkbox"
                                                                            class="styled">
                                                                        <label for="domainsale-menu">.sale</label>
                                                                    </div>
                                                                </div><!-- end checkdomain-wrapper -->
                                                            </form>
                                                        </div><!-- end widget -->
                                                    </div>
                                                </div><!-- end row -->
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="hosting-support.html">Support</a></li>
                            </ul>

                            <ul class="nav navbar-nav navbar-right hidden-xs">
                                <li class="dropdown searchmenu hasmenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-haspopup="true" aria-expanded="false"> Sign In <i
                                            class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu show-right">
                                        <li>
                                            <div id="custom-search-input">
                                                <div class="input-group col-md-12">
                                                    <input type="text" class="form-control input-lg"
                                                        placeholder="User name" />
                                                    <input type="password" class="form-control input-lg"
                                                        placeholder="Password" />
                                                    <label><a href="#">Forget Password?</a></label>
                                                    <button class="btn btn-primary btn-block">Login Account</button>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div><!--/.nav-collapse -->
                    </div><!--/.container-fluid -->
                </nav><!-- end nav -->
            </div><!-- end container -->
        </header><!-- end header -->

        <!-- começar o content -->
        @yield('content')

        <footer class="footer lb">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <div class="widget clearfix">
                            <div class="widget-title">
                                <h4>Hosting Packages</h4>
                            </div><!-- end widget-title -->

                            <div class="link-widget">
                                <ul class="check">
                                    <li><a href="#">Web Hosting</a></li>
                                    <li><a href="#">WordPress Hosting</a></li>
                                    <li><a href="#">VPS Hosting</a></li>
                                    <li><a href="#">Cloud Server</a></li>
                                    <li><a href="#">Reseller Package</a></li>
                                    <li><a href="#">Dedicated Hosting</a></li>
                                </ul><!-- end check -->
                            </div><!-- end link-widget -->
                        </div>

                        <hr>

                        <div class="widget clearfix">
                            <div class="widget-title">
                                <h4>Domain Names</h4>
                            </div><!-- end widget-title -->

                            <div class="link-widget">
                                <ul class="check">
                                    <li><a href="#">Buy a Domain</a></li>
                                    <li><a href="#">Premium Domain Names</a></li>
                                    <li><a href="#">Transfer Your Domain</a></li>
                                    <li><a href="#">Domain Marketplace</a></li>
                                </ul><!-- end check -->
                            </div><!-- end link-widget -->
                        </div>
                    </div><!-- end col -->

                    <div class="col-md-3 col-sm-12">
                        <div class="widget clearfix">
                            <div class="widget-title">
                                <h4>Company</h4>
                            </div><!-- end widget-title -->

                            <div class="link-widget">
                                <ul class="check">
                                    <li><a href="#">About HostHubs</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">Our Team Members</a></li>
                                    <li><a href="#">Worldwide Offices</a></li>
                                    <li><a href="#">Worldwide Meet Up</a></li>
                                    <li><a href="#">Awards & Reviews</a></li>
                                    <li><a href="#">HostHubs in Press</a></li>
                                    <li><a href="#">Carrers</a></li>
                                    <li><a href="#">User Guide</a></li>
                                    <li><a href="#">Knowledgebase</a></li>
                                    <li><a href="#">Affiliate</a></li>
                                </ul><!-- end check -->
                            </div><!-- end link-widget -->
                        </div>
                    </div><!-- end col -->

                    <div class="col-md-3 col-sm-12">
                        <div class="widget clearfix">
                            <div class="widget-title">
                                <h4>Support</h4>
                            </div><!-- end widget-title -->

                            <div class="link-widget">
                                <ul class="check">
                                    <li><a href="#">Get In Touch</a></li>
                                    <li><a href="#">Support Forums</a></li>
                                    <li><a href="#">Submit a Ticket</a></li>
                                    <li><a href="#">Video Tutorials</a></li>
                                    <li><a href="#">Live Chat Support</a></li>
                                </ul><!-- end check -->
                            </div><!-- end link-widget -->
                        </div>

                        <hr>

                        <div class="widget clearfix">
                            <div class="widget-title">
                                <h4>Domain Names</h4>
                            </div><!-- end widget-title -->

                            <div class="link-widget">
                                <ul class="check">
                                    <li><a href="#">Buy a Domain</a></li>
                                    <li><a href="#">Premium Domain Names</a></li>
                                    <li><a href="#">Transfer Your Domain</a></li>
                                    <li><a href="#">Domain Marketplace</a></li>
                                    <li><a href="#">Manage Domains</a></li>
                                </ul><!-- end check -->
                            </div><!-- end link-widget -->
                        </div>
                    </div><!-- end col -->

                    <div class="col-md-3 col-sm-12">
                        <div class="widget clearfix">
                            <div class="widget-title">
                                <h4>Email Newsletter</h4>
                            </div><!-- end widget-title -->

                            <div class="newsletter-widget">
                                <p>Subscribe our newsletter for discount and coupon codes</p>
                                <form>
                                    <input type="text" class="form-control input-lg" placeholder="Your name" />
                                    <input type="email" class="form-control input-lg" placeholder="Email" />
                                    <button class="btn btn-primary btn-block">Subscribe Now</button>
                                </form>
                            </div><!-- end newsletter -->
                        </div>

                        <hr>

                        <div class="widget clearfix">
                            <div class="widget-title">
                                <h4>Find us on</h4>
                            </div><!-- end widget-title -->
                            <div class="downloadbuttons clearfix">
                                <a href="#"><img src="{{ URL::to('public/appstore.png')}}" alt=""></a>
                                <a href="#"><img src="{{ URL::to('public/googlestore.png')}}" alt=""></a>
                            </div>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </footer><!-- end footer -->

        <div class="footer-distributed">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12 footer-left">
                        <div class="widget">
                            <img src="{{ URL::to('public/flogo.png')}}" alt="">
                            <p class="footer-links">
                                <a href="#">Home</a>
                                ·
                                <a href="#">Blog</a>
                                ·
                                <a href="#">Pricing</a>
                                ·
                                <a href="#">About</a>
                                ·
                                <a href="#">Faq</a>
                                ·
                                <a href="#">Contact</a>
                            </p>
                            <p class="footer-company-name">Company Name &copy; 2015</p>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12 footer-center">
                        <div class="widget">
                            <div>
                                <i class="fa fa-map-marker"></i>
                                <p>21 Revolution Street Paris, France</p>
                            </div>
                            <div>
                                <i class="fa fa-phone"></i>
                                <p>+1 555 123456</p>
                            </div>
                            <div>
                                <i class="fa fa-envelope-o"></i>
                                <p><a href="mailto:contato@matsuitecnologia.com.br">contato@matsuitecnologia.com.br</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12 footer-right">
                        <div class="widget">
                            <p class="footer-company-about">
                                <span>About the company</span>
                                Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit,
                                eut.
                            </p>
                            <div class="footer-icons">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-github"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end copyrights -->

        <div class="chat-wrapper">
            <div class="panel panel-primary">
                <div class="panel-heading" id="accordion">
                    <a class="btn btn-primary btn-block btn-xs" data-toggle="collapse" data-parent="#accordion"
                        href="#collapseOne">
                        <span class="fa fa-comments-o"></span> Customer Support
                    </a>
                </div>
                <div class="panel-collapse collapse" id="collapseOne">
                    <div class="panel-body">
                        <ul class="chat">
                            <li class="left clearfix">
                                <span class="chat-img">
                                    <img src="upload/client_01.png" alt="User Avatar"
                                        class="img-circle img-responsive alignleft" />
                                </span>
                                <div class="chat-body clearfix">
                                    <div class="chat-header">
                                        <strong class="primary-font">John DOE</strong> <small
                                            class="pull-right text-muted">
                                            <span class="fa fa-clock-o"></span>12 mins ago</small>
                                    </div>
                                    <p>Hello anyone here? I need to purchase web hosting!</p>
                                </div>
                            </li>

                            <li class="left clearfix">
                                <span class="chat-img">
                                    <img src="upload/client_01.png" alt="User Avatar"
                                        class="img-circle img-responsive alignleft" />
                                </span>
                                <div class="chat-body clearfix">
                                    <div class="chat-header">
                                        <strong class="primary-font supportstaff">Staff</strong> <small
                                            class="pull-right text-muted">
                                            <span class="fa fa-clock-o"></span>13 mins ago</small>
                                    </div>
                                    <p>Hey John! Welcome to the HostHubs support chat!</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="panel-footer">
                        <div class="input-group">
                            <input id="btn-input" type="text" class="form-control input-sm"
                                placeholder="Type your message here..." />
                            <span class="input-group-btn">
                                <button class="btn btn-default btn-sm" id="btn-chat">Send</button>
                            </span>
                        </div>
                    </div><!-- end panel-footer -->
                </div><!-- end panel-collapse -->
            </div><!-- end panel -->
        </div><!-- end chat-wrapper -->

        <div class="dmtop">Scroll to Top</div>
    </div><!-- end wrapper -->

    <!-- Main Scripts-->
    <script src="{{ URL::to('public/js/jquery.js')}}"></script>
    <script src="{{ URL::to('public/js/bootstrap.min.js')}}"></script>
    <script src="{{ URL::to('public/js/plugins.js')}}"></script>

    <!-- REVOLUTION JS FILES -->
    <script type="text/javascript" src="{{ URL::to('public/js/jquery.themepunch.tools.min.js')}}"></script>
    <script type="text/javascript" src="{{ URL::to('public/js/jquery.themepunch.revolution.min.js')}}"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS -->
    <script type="text/javascript" src="{{ URL::to('public/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <script type="text/javascript" src="{{ URL::to('public/js/extensions/revolution.extension.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{ URL::to('public/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script type="text/javascript" src="{{ URL::to('public/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script type="text/javascript" src="{{ URL::to('public/js/extensions/revolution.extension.migration.min.js')}}"></script>
    <script type="text/javascript" src="{{ URL::to('public/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script type="text/javascript" src="{{ URL::to('public/js/extensions/revolution.extension.parallax.min.js')}}"></script>
    <script type="text/javascript" src="{{ URL::to('public/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script type="text/javascript" src="{{ URL::to('public/js/extensions/revolution.extension.video.min.js')}}"></script>
    <script src="{{ URL::to('public/js/revslider_04.js')}}"></script>

</body>

</html>
