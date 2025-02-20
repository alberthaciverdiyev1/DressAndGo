<!DOCTYPE html>
<html lang="zxx">
<head>
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="eCommerce,shop,fashion">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--====== Title ======-->
    <title>Shared on THEMELOCK.COM - Pesco - eCommerce HTML Template</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" type="image/png">
    <!--====== Google Fonts ======-->
    <link href="https://fonts.googleapis.com/css2?family=Aoboshi+One&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
    <!--====== Flaticon css ======-->
    <link rel="stylesheet" href="{{asset('fonts/flaticon/flaticon_pesco.css')}}">
    <!--====== FontAwesome css ======-->
    <link rel="stylesheet" href="{{asset('fonts/fontawesome/css/all.min.css')}}">
    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--====== Slick-popup css ======-->
    <link rel="stylesheet" href="{{asset('vendor/slick/slick.css')}}">
    <!--====== Nice Select css ======-->
    <link rel="stylesheet" href="{{asset('vendor/nice-select/css/nice-select.css')}}">
    <!--====== Magnific-popup css ======-->
    <link rel="stylesheet" href="{{asset('vendor/magnific-popup/dist/magnific-popup.css')}}">
    <!--====== Jquery UI css ======-->
    <link rel="stylesheet" href="{{asset('vendor/jquery-ui/jquery-ui.min.css')}}">
    <!--====== Animate css ======-->
    <link rel="stylesheet" href="{{asset('vendor/aos/aos.css')}}">
    <!--====== Default css ======-->
    <link rel="stylesheet" href="{{asset('css/web/default.css')}}">
    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{asset('css/web/style.css')}}">
    <style>
        .nav-item.dropdown:hover .dropdown-menu {
            display: block;
        }
        .dropdown-menu {
            display: none;
        }
    </style>
</head>
<body>
<!--====== Preloader ======-->
<div class="preloader">
    <div class="loader">
        <img src="{{asset('images/loader.gif')}}" alt="Loader">
    </div>
</div>
<!--====== Start Overlay ======-->
<div class="offcanvas__overlay"></div>
<!--====== Start Sidemenu-wrapper-cart Area ======-->
<div class="sidemenu-wrapper-cart">
    <div class="sidemenu-content">
        <div class="widget widget-shopping-cart">
            <h4>My cart</h4>
            <div class="sidemenu-cart-close"><i class="far fa-times"></i></div>
            <div class="widget-shopping-cart-content">
                <ul class="pesco-mini-cart-list">
                    <li class="sidebar-cart-item">
                        <a href="#" class="remove-cart"><i class="far fa-trash-alt"></i></a>
                        <a href="#">
                            <img src="{{asset('images/products/cart-1.jpg')}}" alt="cart image">
                            leggings with mesh panels
                        </a>
                        <span class="quantity">1 × <span><span class="currency">$</span>940.00</span></span>
                    </li>
                    <li class="sidebar-cart-item">
                        <a href="#" class="remove-cart"><i class="far fa-trash-alt"></i></a>
                        <a href="#">
                            <img src="{{asset('images/products/cart-2.jpg')}}" alt="cart image">
                            Summer dress with belt
                        </a>
                        <span class="quantity">1 × <span><span class="currency">$</span>940.00</span></span>
                    </li>
                    <li class="sidebar-cart-item">
                        <a href="#" class="remove-cart"><i class="far fa-trash-alt"></i></a>
                        <a href="#">
                            <img src="{{asset('images/products/cart-3.jpg')}}" alt="cart image">
                            Floral print sundress
                        </a>
                        <span class="quantity">1 × <span><span class="currency">$</span>940.00</span></span>
                    </li>
                    <li class="sidebar-cart-item">
                        <a href="#" class="remove-cart"><i class="far fa-trash-alt"></i></a>
                        <a href="#">
                            <img src="{{asset('images/products/cart-4.jpg')}}" alt="cart image">
                            Sheath Gown Red Colors
                        </a>
                        <span class="quantity">1 × <span><span class="currency">$</span>940.00</span></span>
                    </li>
                </ul>
                <div class="cart-mini-total">
                    <div class="cart-total">
                        <span><strong>Subtotal:</strong></span> <span class="amount">1 × <span><span class="currency">$</span>940.00</span></span>
                    </div>
                </div>
                <div class="cart-button-box">
                    <a href="checkout.html" class="theme-btn style-one">Proceed to checkout</a>
                </div>
            </div>
        </div>
    </div>
</div><!--====== End Sidemenu-wrapper-cart Area ======-->
<!--====== Start Header Section ======-->
<header class="header-area">
    <!--===  Search Header Main  ===-->
    <div class="search-header-main">
        <div class="container">
            <!--===  Search Header Inner  ===-->
            <div class="search-header-inner">
                <!--=== Site Branding  ===-->
                <div class="site-branding">
                    <a href="{{route('home')}}" class="brand-logo"><img src="{{asset('images/logo/logo-main.png')}}" alt="Logo"></a>
                </div>
                <!--===  Product Search Category  ===-->
                <div class="product-search-category">
                    <form action="#">
                        <select class="wide">
                            <option>All Categories</option>
                            <option>Man Shirts</option>
                            <option>Denim Jeans</option>
                            <option>Casual Suit</option>
                            <option>Summer Dress</option>
                            <option>Sweaters</option>
                            <option>Jackets</option>
                        </select>
                        <div class="form-group">
                            <input type="text" placeholder="Enter Search Products">
                            <button class="search-btn"><i class="far fa-search"></i></button>
                        </div>
                    </form>
                </div>
                <!--===  Hotline Support  ===-->
                <div class="hotline-support item-rtl">
                    <div class="icon">
                        <i class="flaticon-support"></i>
                    </div>
                    <div class="info">
                        <span>24/7 Support</span>
                        <h5><a href="tel:+941234567894">+94 123 4567 894</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===  Header Navigation  ===-->
    <div class="header-navigation style-one">
        <div class="container">
            <!--=== Primary Menu ===-->
            <div class="primary-menu">
                <div class="site-branding d-lg-none d-block">
                    <a href="{{route('home')}}" class="brand-logo"><img src="{{asset('images/logo/logo-main.png')}}" alt="Logo"></a>
                </div>
                <!--=== Nav Inner Menu ===-->
                <div class="nav-inner-menu">
                    <!--=== Main Category ===-->
{{--                    <div class="main-categories-wrap d-none d-lg-block">--}}
{{--                        <a class="categories-btn-active" href="#">--}}
{{--                            <span class="fas fa-list"></span><span class="text">Products Category<i class="fas fa-angle-down"></i></span>--}}
{{--                        </a>--}}
{{--                        <div class="categories-dropdown-wrap categories-dropdown-active">--}}
{{--                            <div class="categori-dropdown-item">--}}
{{--                                <ul>--}}
{{--                                    <li>--}}
{{--                                        <a href="shops.html"> <img src="{{asset(('images/icon/shirt.png'))}}" alt="Shirts">Man Shirts</a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="shops.html"> <img src="{{asset('images/icon/denim.png')}}" alt="Jeans">Denim Jeans</a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="shops.html"> <img src="{{asset('images/icon/suit.png')}}" alt="Suit">Casual Suit</a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="shops.html"> <img src="{{asset('images/icon/dress.png')}}" alt="Dress">Summer Dress</a>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <a href="shops.html"> <img src="{{asset('images/icon/sweaters.png')}}" alt="Sweaters">Sweaters</a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <div class="more_slide_open">--}}
{{--                                <div class="categori-dropdown-item">--}}
{{--                                    <ul>--}}
{{--                                        <li>--}}
{{--                                            <a href="#"><img src="{{asset('images/icon/jacket.png')}}" alt="Jackets">Jackets</a>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="more_categories"><span class="icon"></span> <span>Show more...</span></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <!--=== Pesco Nav Main ===-->
                    <div class="pesco-nav-main">
                        <!--=== Pesco Nav Menu ===-->
                        <div class="pesco-nav-menu">
                            <!--=== Responsive Menu Search ===-->
                            <div class="nav-search mb-40 d-block d-lg-none">
                                <div class="form-group">
                                    <input type="search" class="form_control" placeholder="Search Here" name="search">
                                    <button class="search-btn"><i class="far fa-search"></i></button>
                                </div>
                            </div>
                            <!--=== Responsive Menu Tab ===-->
                            <div class="pesco-tabs style-three d-block d-lg-none">
                                <ul class="nav nav-tabs mb-30">
                                    <li>
                                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#nav1">Menu</button>
                                    </li>
                                    <li>
                                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#nav2">Category</button>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="nav1">
                                        <nav class="main-menu">
                                            <ul>
                                                <li class="menu-item has-children"><a href="#">Home</a>
                                                </li>
                                                <li class="menu-item has-children"><a href="#">Shop</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="shops-grid.html">Shop Grid</a></li>
                                                        <li><a href="shops.html">Shop left Sidebar</a></li>
                                                        <li><a href="shops-right-sidebar.html">Shop Right Sidebar</a></li>
                                                        <li><a href="shop-details.html">Product Details</a></li>
                                                        <li><a href="cart.html">Cart</a></li>
                                                        <li><a href="checkout.html">Checkout</a></li>
                                                        <li><a href="wishlists.html">Wishlist</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item has-children"><a href="#">Blog</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="blogs.html">Our Blog</a></li>
                                                        <li><a href="blog-details.html">Blog Details</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item has-children"><a href="#">Pages</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="about-us.html">About Us</a></li>
                                                        <li><a href="faq.html">Faqs</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item"><a href="contact.html">Contact</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="tab-pane fade" id="nav2">
                                        <div class="categori-dropdown-item">
                                            <ul>
                                                <li>
                                                    <a href="shops.html"> <img src="{{asset('images/icon/shirt.png')}}" alt="Shirts">Man Shirts</a>
                                                </li>
                                                <li>
                                                    <a href="shops.html"> <img src="{{asset('images/icon/denim.png')}}" alt="Jeans">Denim Jeans</a>
                                                </li>
                                                <li>
                                                    <a href="shops.html"> <img src="{{asset('images/icon/suit.png')}}" alt="Suit">Casual Suit</a>
                                                </li>
                                                <li>
                                                    <a href="shops.html"> <img src="{{asset('images/icon/dress.png')}}" alt="Dress">Summer Dress</a>
                                                </li>
                                                <li>
                                                    <a href="shops.html"> <img src="{{asset('images/icon/sweaters.png')}}" alt="Sweaters">Sweaters</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--===  Hotline Support  ===-->
                            <div class="hotline-support d-flex d-lg-none mt-30">
                                <div class="icon">
                                    <i class="flaticon-support"></i>
                                </div>
                                <div class="info">
                                    <span>24/7 Support</span>
                                    <h5><a href="tel:+941234567894">+94 123 4567 894</a></h5>
                                </div>
                            </div>
                            <!--=== Main Menu ===-->
                            <nav class="main-menu d-none d-lg-block">
                                <ul>
                                    <li class="menu-item"><a href="{{route('home')}}">Home</a>  </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="{{ route('shopList') }}" id="navbarDropdown" role="button" aria-expanded="false">
                                            Rent
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li><a class="dropdown-item" href="#">Toy geyimləri</a></li>
                                            <li><a class="dropdown-item" href="#">Gəlinlik</a></li>
                                            <li><a class="dropdown-item" href="#">Milli paltarlar</a></li>
                                            <li><a class="dropdown-item" href="#">Gündəlik geyimlər</a></li>
                                        </ul>
                                    </li>

                                    <li class="menu-item"><a href="{{route('home')}}">Blog</a>   </li>
                                    <li class="menu-item"><a href="{{route('home')}}">About Us</a>   </li>
                                    <li class="menu-item"><a href="{{route('contact')}}">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <!--=== Nav Right Item ===-->
                <div class="nav-right-item style-one">
                    @auth
                        <ul>
                            <li>
                                <div class="deals d-lg-block d-none"><i class="far fa-fire-alt"></i>Deal</div>
                            </li>
                            <li>
                                <div class="wishlist-btn d-lg-block d-none"><i class="far fa-heart"></i><span class="pro-count">12</span></div>
                            </li>
                            <li>
                                <div class="cart-button d-flex align-items-center">
                                    <div class="icon">
                                        <i class="fas fa-shopping-bag"></i><span class="pro-count">01</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    @else
                        <a href="{{route('login')}}" class="theme-btn style-one">Login</a>
                    @endauth

                    <div class="navbar-toggler d-block d-lg-none">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header><!--====== End Header Section ======-->
<!--====== Main Bg  ======-->
<main class="main-bg">
    @yield('content')
</main>
<!--====== Start Footer Main  ======-->
<footer class="footer-main">
    <!--=== Footer Bg Wrapper  ===-->
    <div class="footer-bg-wrapper gray-bg">
        <div class="footer-shape shape-one"><span><img src="{{asset('images/footer/shape-1.png')}}" alt="shape"></span></div>
        <svg id="footer-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 75" fill="none">
            <path d="M1888.99 40.9061C1901.65 33.5506 1917.87 10.0999 1920 0.000160217L2.48878 0.110695C-18.5686 5.37782 100.829 31.8098 104.136 32.5745C126.908 37.8407 182.163 45.7157 196.02 59.5798C199.049 62.6106 214.802 72.2205 222.15 72.2205C228.696 72.2205 237.893 62.3777 241.388 59.5798C254.985 48.6964 317.621 62.748 338.154 55.5577C378.089 41.5729 396.6 21.3246 452.148 27.4033C469.55 29.3076 497.787 39.4201 516.467 36.022C529.695 33.6155 539.612 26.7953 554.369 23.9558C576.978 19.6057 584.786 12.6555 612.371 13.0388C629.18 13.2724 648.084 27.6499 658.6 33.8673C672.059 41.8242 673.268 47.0554 692.77 41.4805C711.954 35.9964 746.756 38.27 766.852 40.0441C779.483 41.1593 819.866 52.3111 831.458 47.8009C837.236 45.5528 840.64 43.5162 847.537 41.3369C869.486 34.402 905.397 34.0022 929.946 38.6077C947.224 41.8489 987.666 45.9365 999.721 52.9722C1005.16 56.1489 1004.78 60.6539 1010.35 63.6019C1018.09 67.7037 1021.56 68.3083 1029.01 67.4803C1042.77 65.9505 1045.29 61.7272 1056.86 58.1434C1090.94 47.59 1121.71 32.7536 1160.52 26.5415C1182.98 22.9457 1193.92 36.1401 1209.04 41.4806C1240.16 52.468 1262.92 57.9972 1299.78 49.2374C1331.73 41.6466 1369.13 23.3813 1405.73 23.3813C1419.55 23.3813 1427.96 32.734 1435.31 37.4585C1451.38 47.7919 1467 56.9943 1493.89 56.9943C1532.36 56.9943 1544.2 49.9853 1574.29 39.0386C1588.58 33.8384 1616.86 22.826 1635.73 23.3813C1651.4 23.8424 1656.97 43.603 1667.89 48.6629C1683.26 55.7835 1710.61 49.5903 1723.88 43.7789C1736.22 38.3771 1758.43 20.6985 1777.29 30.1327C1788.48 35.7274 1794.71 53.9926 1801.12 61.5909C1815.62 78.7687 1819.96 77.5598 1843.05 68.4859C1861.58 61.2028 1873.63 49.8315 1888.99 40.9061Z" fill="#FFFAF3"/>
        </svg>
        <!--=== Footer Widget Area  ===-->
        <div class="footer-widget-area pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-sm-6">
                        <!--=== Footer Widget  ===-->
                        <div class="footer-widget about-company-widget mb-40" data-aos="fade-up" data-aos-delay="10" data-aos-duration="1000">
                            <div class="widget-content">
                                <a href="{{route('home')}}" class="footer-logo"><img src="{{asset('images/logo/logo-main.png')}}" alt="Brand Logo"></a>
                                <p>Pesco is an exciting International brand we provide high quality cloths</p>
                                <ul class="ct-info-list mb-30">
                                    <li>
                                        <i class="fas fa-envelope"></i>
                                        <a href="mailto:info@mydomain.com">info@mydomain.com</a>
                                    </li>
                                    <li>
                                        <i class="fas fa-phone-alt"></i>
                                        <a href="mailto:info@mydomain.com">info@mydomain.com</a>
                                    </li>
                                </ul>
                                <ul class="social-link">
                                    <li>
                                        <span>Find Us:</span>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-sm-6">
                        <!--=== Footer Widget ===-->
                        <div class="footer-widget footer-nav-widget mb-40" data-aos="fade-up" data-aos-delay="15" data-aos-duration="1200">
                            <div class="widget-content">
                                <h4 class="widget-title">Customer Services</h4>
                                <ul class="widget-menu">
                                    <li><img src="{{asset('images/icon/star-3.svg')}}" alt="star icon"><a href="#">Collections & Delivery</a></li>
                                    <li><img src="{{asset('images/icon/star-3.svg')}}" alt="star icon"><a href="#">Returns & Refunds</a></li>
                                    <li><img src="{{asset('images/icon/star-3.svg')}}" alt="star icon"><a href="#">Terms & Conditions</a></li>
                                    <li><img src="{{asset('images/icon/star-3.svg')}}" alt="star icon"><a href="#">Delivery Return</a></li>
                                    <li><img src="{{asset('images/icon/star-3.svg')}}" alt="star icon"><a href="#">Store Locations</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-sm-6">
                        <!--=== Footer Widget ===-->
                        <div class="footer-widget footer-nav-widget mb-40" data-aos="fade-up" data-aos-delay="20" data-aos-duration="1400">
                            <div class="widget-content">
                                <h4 class="widget-title">Quick Link</h4>
                                <ul class="widget-menu">
                                    <li><img src="images/icon/star-3.svg" alt="star icon"><a href="#">Privacy Policy</a></li>
                                    <li><img src="images/icon/star-3.svg" alt="star icon"><a href="#">Terms Of Use</a></li>
                                    <li><img src="images/icon/star-3.svg" alt="star icon"><a href="#">FAQ</a></li>
                                    <li><img src="images/icon/star-3.svg" alt="star icon"><a href="#">Contact</a></li>
                                    <li><img src="images/icon/star-3.svg" alt="star icon"><a href="#">Login / Register</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <!--=== Footer Widget  ===-->
                        <div class="footer-widget footer-recent-post-widget" data-aos="fade-up" data-aos-delay="25" data-aos-duration="1600">
                            <h4 class="widget-title">Recent Post</h4>
                            <div class="widget-content">
                                <div class="recent-post-item">
                                    <div class="thumb">
                                        <img src="images/footer/recent-post-1.png" alt="post thumb">
                                    </div>
                                    <div class="content">
                                        <h4><a href="blog-details.html">Tips on Finding Affordable Fashion Gems Online</a></h4>
                                        <span><a href="blog-details.html">July 11, 2023</a></span>
                                    </div>
                                </div>
                                <div class="recent-post-item">
                                    <div class="thumb">
                                        <img src="images/footer/recent-post-2.png" alt="post thumb">
                                    </div>
                                    <div class="content">
                                        <h4><a href="blog-details.html">Mastering the Art of Fashion E-commerce Marketing</a></h4>
                                        <span><a href="blog-details.html">JUly 11, 2024</a></span>
                                    </div>
                                </div>
                                <div class="recent-post-item">
                                    <div class="thumb">
                                        <img src="images/footer/recent-post-3.png" alt="post thumb">
                                    </div>
                                    <div class="content">
                                        <h4><a href="blog-details.html">Must-Have Trends You Can Shop Online Now</a></h4>
                                        <span><a href="blog-details.html">July 11, 2024</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--=== Footer Copyright  ===-->
        <div class="copyright-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="copyright-text">
                            <p>&copy; 2024. All rights reserved by <span>Pixelfit</span></p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="payment-method text-lg-end">
                            <a href="#"><img src="images/footer/payment-method.png" alt="payment-method"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer><!--====== End Footer Main  ======-->
<!--====== Back To Top  ======-->
<div class="back-to-top" ><i class="far fa-angle-up"></i></div>
<!--====== Jquery js ======-->
<script src="{{asset('vendor/jquery-3.7.1.min.js')}}"></script>
<!--====== Bootstrap js ======-->
<script src="{{asset('vendor/popper/popper.min.js')}}"></script>
<!--====== Bootstrap js ======-->
<script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--====== Slick js ======-->
<script src="{{asset('vendor/slick/slick.min.js')}}"></script>
<!--====== Magnific js ======-->
<script src="{{asset('vendor/magnific-popup/dist/jquery.magnific-popup.min.js')}}"></script>
<!--====== Nice-select js ======-->
<script src="{{asset('vendor/nice-select/js/jquery.nice-select.min.js')}}"></script>
<!--====== Jquery Ui js ======-->
<script src="{{asset('vendor/jquery-ui/jquery-ui.min.js')}}"></script>
<!--====== SimplyCountdown js ======-->
<script src="{{asset('vendor/simplyCountdown.min.js')}}"></script>
<!--====== Aos js ======-->
<script src="{{asset('vendor/aos/aos.js')}}"></script>
<!--====== Main js ======-->
<script src="{{asset('js/web/theme.js')}}"></script>

@stack('script')
</body>
</html>
