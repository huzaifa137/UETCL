<!DOCTYPE html>
<html lang="zxx">
    

<head>        

        <!-- Meta -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">

        <!-- Title -->
        <title>..:: Taqwa Library ::..</title>

        <!-- Favicon -->
        <link href="/assets/images/libraria-logo-v3.png" rel="icon" type="image/x-icon" />

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CLato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <link href="/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        
        <!-- Mobile Menu -->
        <link href="/assets/css/mmenu.css" rel="stylesheet" type="text/css" />
        <link href="/assets/css/mmenu.positioning.css" rel="stylesheet" type="text/css" />
        
        <!-- Accordion Stylesheet -->
        <link rel="stylesheet" type="text/css" href="/assets/css/jquery.accordion.css">
        
        <!-- Stylesheet -->
        <link href="/assets/style.css" rel="stylesheet" type="text/css" />

        <script src="https://kit.fontawesome.com/2da7c40e91.js" crossorigin="anonymous"></script>

    </head>

    <body>

        <!-- Start: Header Section -->
        <header id="header-v1" class="navbar-wrapper inner-navbar-wrapper">
            <div class="container">
                <div class="row">
                    <nav class="navbar navbar-default">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="navbar-header">
                                    <div class="navbar-brand">
                                        <h1>
                                            <a href="{{route('home')}}">
                                                <img src="/assets/images/libraria-logo-v3.png" alt="LIBRARIA" />
                                            </a>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <!-- Header Topbar -->
                                <div class="header-topbar hidden-sm hidden-xs">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="topbar-info">
                                                <a href="tel:+ 256-700574979"><i class="fa fa-phone"></i>+ 256-700574979</a>
                                                <span>/</span>
                                                <a href="mailto:info@taqwalibrary.me"><i class="fa fa-envelope"></i>TAQWALIBRARY123@GMAIL.COM</a>
                                            </div>
                                        </div>
                                      
                                    </div>
                                </div>
                                <div class="navbar-collapse hidden-sm hidden-xs">
                                    <ul class="nav navbar-nav">
                                        <li class="dropdown active">
                                            <a data-toggle="dropdown" class="dropdown-toggle disabled" href="{{route('home')}}">Home</a>
                                        </li>
                                        <li class="dropdown">
                                            <a data-toggle="dropdown" class="dropdown-toggle disabled" href="{{route('all')}}">Books</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="{{route('all')}}">All Books</a></li>
                                                <li><a href="{{route('All_Arabic_Books')}}">Arabic Books</a></li>
                                                <li><a href="{{route('All_English_Books')}}">English Books</a></li>
                                                <li><a href="{{route('All_Luganda_Books')}}">Luganda Books</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{route('about-us')}}">About us</a></li>
                                        <li><a href="{{route('contact')}}">Contact us</a></li>
                                        {{-- <li class="dropdown">
                                            <a data-toggle="dropdown" class="dropdown-toggle disabled" href="news-events-list-view.html">News &amp; Events</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="news-events-list-view.html">News &amp; Events List View</a></li>
                                                <li><a href="news-events-detail.html">News &amp; Events Detail</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a data-toggle="dropdown" class="dropdown-toggle disabled" href="#">Pages</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="cart.html">Cart</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="signin.html">Signin/Register</a></li>
                                                <li><a href="404.html">404/Error</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a data-toggle="dropdown" class="dropdown-toggle disabled" href="blog.html">Blog</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="blog.html">Blog Grid View</a></li>
                                                <li><a href="blog-detail.html">Blog Detail</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="services.html">Services</a></li>
                                        <li><a href="contact.html">Contact</a></li> --}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="mobile-menu hidden-lg hidden-md">
                            <a href="#mobile-menu"><i class="fa fa-navicon"></i></a>
                            <div id="mobile-menu">
                                <ul>
                                    <li class="mobile-title">
                                        <h4>Navigation</h4>
                                        <a href="#" class="close"></a>
                                    </li>
                                    <li>
                                        <a href="{{route('home')}}">Home</a>
        
                                    </li>
                                    <li>
                                        <a href="#">Books</a>
                                        <ul>
                                            <li><a href="{{route('all')}}">All Books</a></li>
                                            <li><a href="{{route('All_Arabic_Books')}}">Arabic Books</a></li>
                                            <li><a href="{{route('All_English_Books')}}">English Books</a></li>
                                            <li><a href="{{route('All_Luganda_Books')}}">Luganda Books</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{route('about-us')}}">About us</a></li>
                                    <li><a href="{{route('contact')}}">Contact us</a></li> 
                                    {{-- <li>
                                        <a href="news-events-list-view.html">News &amp; Events</a>
                                        <ul>
                                            <li><a href="news-events-list-view.html">News &amp; Events List View</a></li>
                                            <li><a href="news-events-detail.html">News &amp; Events Detail</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Pages</a>
                                        <ul>
                                            <li><a href="cart.html">Cart</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                            <li><a href="signin.html">Signin/Register</a></li>
                                            <li><a href="404.html">404/Error</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="blog.html">Blog</a>
                                        <ul>
                                            <li><a href="blog.html">Blog Grid View</a></li>
                                            <li><a href="blog-detail.html">Blog Detail</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li> --}}
                                    
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!-- End: Header Section -->

            @yield('about_us_information');

 <!-- Start: Footer -->
 <footer class="site-footer">
    <div class="container">
        <div id="footer-widgets">
            <div class="row">
                <div class="col-md-4 col-sm-6 widget-container">
                    <div id="text-2" class="widget widget_text">
                        <h3 class="footer-widget-title">About &nbsp; Taqwa Library</h3>
                        <span class="underline left"></span>
                        <div class="textwidget">
                            We ask your Du’a for the Ulama, Scholars, Students of Knowledge, Authors and Speakers whose works have been posted on this website, and for us. May Allah سُبْحَانَهُۥ وَتَعَالَىٰ make this website beneficial for all.                         </div>
                        <address>
                            <div class="info">
                                <i class="fa fa-location-arrow"></i>
                                <span>Coral Close, Kampala, Uganda</span>
                            </div>
                            <div class="info">
                                <i class="fa fa-envelope"></i>
                                <span><a href="mailto:info@taqwalibrary.me">info@taqwalibrary.me</a></span>
                            </div>
                            <div class="info">
                                <i class="fa fa-phone"></i>
                                <span><a href="tel:+256700574979">+ 256-700574979</a></span>
                            </div>
                        </address>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 widget-container">
                    <div id="nav_menu-2" class="widget widget_nav_menu">
                        <h3 class="footer-widget-title">Quick Links</h3>
                        <span class="underline left"></span>
                        <div class="menu-quick-links-container">
                            <ul id="menu-quick-links" class="menu">
                                <li><a href="{{route('home')}}">Home</a></li>
                                <li><a href="{{('all')}}">Books</a></li>
                                <li><a href="{{route('about-us')}}">About us</a></li>
                                <li><a href="{{route('contact')}}">Contact us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="clearfix hidden-lg hidden-md hidden-xs tablet-margin-bottom"></div>
                <div class="col-md-2 col-sm-6 widget-container">
                    <div id="text-4" class="widget widget_text">
                        <h3 class="footer-widget-title">Timing</h3>
                        <span class="underline left"></span>
                        <div class="timming-text-widget">
                            <time datetime="2017-02-13">Mon - Fri</time>
                            <time datetime="2017-02-13">24/7 hr</time>
                        </div>
                    </div>			
                </div>
                <div class="col-md-4 col-sm-6 widget-container">
                    <div class="widget twitter-widget">
                        <h3 class="footer-widget-title">Lastly</h3>
                        <span class="underline left"></span>
                        <div id="twitter-feed">
                            <ul>
                                
                                    <p>“The life of this world is made up of three days: yesterday has gone with all that was done; tomorrow, you may never reach; but today is for you so do what you should do today.” <br> <b> Imaam Hasan Al Basri</b></p>
                                    <br>
                                    <p style="font-size: 1.5em">اَلسَّلاَ مُ عَلَيْكُمْ وَرَحْمَةُ اللهِ وَبَرَكَا تُهُ</p>
                            </ul>
                        </div>
                    </div>			
                </div>
            </div>
        </div>                
    </div>
    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="footer-text col-md-3">
                    <p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
                </div>
                <div class="col-md-9 pull-right">
                    <ul>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a href="{{route('all')}}">BOOKS</a></li>
                        <li><a href="{{route('about-us')}}">ABOUT US</a></li>
                        <li><a href="{{route('contact')}}">Contact us</a></li>
                        {{-- <li><a href="news-events-list-view.html">News &amp; Events</a></li>
                        <li><a href="#">Kids &amp; Teens</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="#">Research</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="contact.html">Contact</a></li> --}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End: Footer -->

<!-- jQuery Latest Version 1.x -->
<script type="text/javascript" src="/assets/js/jquery-1.12.4.min.js"></script>

<!-- jQuery UI -->
<script type="text/javascript" src="/assets/js/jquery-ui.min.js"></script>

<!-- jQuery Easing -->
<script type="text/javascript" src="/assets/js/jquery.easing.1.3.js"></script>

<!-- Bootstrap -->
<script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>

<!-- Mobile Menu -->
<script type="text/javascript" src="/assets/js/mmenu.min.js"></script>

<!-- Harvey - State manager for media queries -->
<script type="text/javascript" src="/assets/js/harvey.min.js"></script>

<!-- Waypoints - Load Elements on View -->
<script type="text/javascript" src="/assets/js/waypoints.min.js"></script>

<!-- Facts Counter -->
<script type="text/javascript" src="/assets/js/facts.counter.min.js"></script>

<!-- MixItUp - Category Filter -->
<script type="text/javascript" src="/assets/js/mixitup.min.js"></script>

<!-- Owl Carousel -->
<script type="text/javascript" src="/assets/js/owl.carousel.min.js"></script>

<!-- Accordion -->
<script type="text/javascript" src="/assets/js/accordion.min.js"></script>

<!-- Responsive Tabs -->
<script type="text/javascript" src="/assets/js/responsive.tabs.min.js"></script>

<!-- Responsive Table -->
<script type="text/javascript" src="/assets/js/responsive.table.min.js"></script>

<!-- Masonry -->
<script type="text/javascript" src="/assets/js/masonry.min.js"></script>

<!-- Carousel Swipe -->
<script type="text/javascript" src="/assets/js/carousel.swipe.min.js"></script>

<!-- bxSlider -->
<script type="text/javascript" src="/assets/js/bxslider.min.js"></script>

<!-- Custom Scripts -->
<script type="text/javascript" src="/assets/js/main.js"></script>

</body>


</html>