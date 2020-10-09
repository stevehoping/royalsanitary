<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Royal Sanitary</title>
        
         <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}"> 
         <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
         <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&display=swap" rel="stylesheet"> 
         <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet"> 
         <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
         <link rel="stylesheet" href="{{ asset('assets/css/ionicons.min.css') }}">
         <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
         <link rel="stylesheet" href="{{ asset('assets/css/linearicons.css') }}">
         <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
         <link rel="stylesheet" href="{{ asset('assets/css/simple-line-icons.css') }}">
         <link rel="stylesheet" href="{{ asset('assets/owlcarousel/css/owl.carousel.min.css') }}">
         <link rel="stylesheet" href="{{ asset('assets/owlcarousel/css/owl.theme.css') }}">
         <link rel="stylesheet" href="{{ asset('assets/owlcarousel/css/owl.theme.default.min.css') }}">
         <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
         <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
         <link rel="stylesheet" href="{{ asset('assets/css/slick-theme.css') }}">
         <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
         <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
         
    </head>

    <body>
    <!-- LOADER -->
    <!-- <div class="preloader">
        <div class="lds-ellipsis">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div> -->
    <!-- END LOADER -->

    <!-- START HEADER -->
    <header class="header_wrap fixed-top dd_dark_skin transparent_header">
        <div class="light_skin main_menu_uppercase">
            <div class="container">
                <nav class="navbar navbar-expand-lg"> 
                    <a class="navbar-brand" href="index.html">
                        <img class="logo_light" src="assets/images/logo_light.png" alt="logo" />
                        <img class="logo_dark" src="assets/images/logo_dark.png" alt="logo" />
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false"> 
                        <span class="ion-android-menu"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="dropdown">
                                <a data-toggle="dropdown" class="nav-link  " href="home">Home</a>
                               
                            </li>
                            <li >
                                <a  class="nav-link  " href="about-us">About us</a>
                        
                              
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu">
                                    <ul> 
                                        <li><a class="dropdown-item nav-link nav_item" href="about.html">About Us</a></li> 
                                        <li><a class="dropdown-item nav-link nav_item" href="contact.html">Contact Us</a></li> 
                                        <li><a class="dropdown-item nav-link nav_item" href="faq.html">Faq</a></li>
                                        <li><a class="dropdown-item nav-link nav_item" href="404.html">404 Error Page</a></li>
                                        <li><a class="dropdown-item nav-link nav_item" href="login.html">Login</a></li>
                                        <li><a class="dropdown-item nav-link nav_item" href="signup.html">Register</a></li>
                                        <li><a class="dropdown-item nav-link nav_item" href="term-condition.html">Terms and Conditions</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="dropdown dropdown-mega-menu">
                                <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Products</a>
                                <div class="dropdown-menu">
                                    <ul class="mega-menu d-lg-flex">
                                                <li class="mega-menu-col col-lg-3">
                                                    <ul> 
                                                        <li class="dropdown-header">Woman's</li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="shop-list-left-sidebar.html">Vestibulum sed</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="shop-left-sidebar.html">Donec porttitor</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="shop-right-sidebar.html">Donec vitae facilisis</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="shop-list.html">Curabitur tempus</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="shop-load-more.html">Vivamus in tortor</a></li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-col col-lg-3">
                                                    <ul>
                                                        <li class="dropdown-header">Men's</li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="shop-cart.html">Donec vitae ante ante</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="checkout.html">Etiam ac rutrum</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="wishlist.html">Quisque condimentum</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="compare.html">Curabitur laoreet</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="order-completed.html">Vivamus in tortor</a></li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-col col-lg-3">
                                                    <ul>
                                                        <li class="dropdown-header">Kid's</li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="shop-product-detail.html">Donec vitae facilisis</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="shop-product-detail-left-sidebar.html">Quisque condimentum</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="shop-product-detail-right-sidebar.html">Etiam ac rutrum</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="shop-product-detail-thumbnails-left.html">Donec vitae ante ante</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="shop-product-detail-thumbnails-left.html">Donec porttitor</a></li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-col col-lg-3">
                                                    <ul>
                                                        <li class="dropdown-header">Accessories</li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="shop-product-detail.html">Donec vitae facilisis</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="shop-product-detail-left-sidebar.html">Quisque condimentum</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="shop-product-detail-right-sidebar.html">Etiam ac rutrum</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="shop-product-detail-thumbnails-left.html">Donec vitae ante ante</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="shop-product-detail-thumbnails-left.html">Donec porttitor</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                    <div class="d-lg-flex menu_banners">
                                        <div class="col-sm-4">
                                            <div class="header-banner">
                                                <img src="assets/images/menu_banner11.jpg" alt="menu_banner1">
                                                <div class="banne_info">
                                                    <h6>10% Off</h6>
                                                    <h4>Wooden Chair</h4>
                                                    <a href="#">Shop now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="header-banner">
                                                <img src="assets/images/menu_banner22.jpg" alt="menu_banner2">
                                                <div class="banne_info">
                                                    <h6>15% Off</h6>
                                                    <h4>Wooden Chair</h4>
                                                    <a href="#">Shop now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="header-banner">
                                                <img src="assets/images/menu_banner33.jpg" alt="menu_banner3">
                                                <div class="banne_info">
                                                    <h6>23% Off</h6>
                                                    <h4>Wooden Chair</h4>
                                                    <a href="#">Shop now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Blog</a>
                                <div class="dropdown-menu dropdown-reverse">
                                    <ul>
                                        <li>
                                            <a class="dropdown-item menu-link dropdown-toggler" href="#">Grids</a>
                                            <div class="dropdown-menu">
                                                <ul> 
                                                    <li><a class="dropdown-item nav-link nav_item" href="blog-three-columns.html">3 columns</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="blog-four-columns.html">4 columns</a></li> 
                                                    <li><a class="dropdown-item nav-link nav_item" href="blog-left-sidebar.html">Left Sidebar</a></li> 
                                                    <li><a class="dropdown-item nav-link nav_item" href="blog-right-sidebar.html">right Sidebar</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="blog-standard-left-sidebar.html">Standard Left Sidebar</a></li> 
                                                    <li><a class="dropdown-item nav-link nav_item" href="blog-standard-right-sidebar.html">Standard right Sidebar</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a class="dropdown-item menu-link dropdown-toggler" href="#">Masonry</a>
                                            <div class="dropdown-menu">
                                                <ul> 
                                                    <li><a class="dropdown-item nav-link nav_item" href="blog-masonry-three-columns.html">3 columns</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="blog-masonry-four-columns.html">4 columns</a></li> 
                                                    <li><a class="dropdown-item nav-link nav_item" href="blog-masonry-left-sidebar.html">Left Sidebar</a></li> 
                                                    <li><a class="dropdown-item nav-link nav_item" href="blog-masonry-right-sidebar.html">right Sidebar</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a class="dropdown-item menu-link dropdown-toggler" href="#">Single Post</a>
                                            <div class="dropdown-menu">
                                                <ul> 
                                                    <li><a class="dropdown-item nav-link nav_item" href="blog-single.html">Default</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="blog-single-left-sidebar.html">left sidebar</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="blog-single-slider.html">slider post</a></li> 
                                                    <li><a class="dropdown-item nav-link nav_item" href="blog-single-video.html">video post</a></li> 
                                                    <li><a class="dropdown-item nav-link nav_item" href="blog-single-audio.html">audio post</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a class="dropdown-item menu-link dropdown-toggler" href="#">List</a>
                                            <div class="dropdown-menu">
                                                <ul> 
                                                    <li><a class="dropdown-item nav-link nav_item" href="blog-list-left-sidebar.html">left sidebar</a></li>
                                                    <li><a class="dropdown-item nav-link nav_item" href="blog-list-right-sidebar.html">right sidebar</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="dropdown dropdown-mega-menu">
                                <a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Shop</a>
                                <div class="dropdown-menu">
                                    <ul class="mega-menu d-lg-flex">
                                        <li class="mega-menu-col col-lg-9">
                                            <ul class="d-lg-flex">
                                                <li class="mega-menu-col col-lg-4">
                                                    <ul> 
                                                        <li class="dropdown-header">Shop Page Layout</li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="shop-list.html">shop List view</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="shop-list-left-sidebar.html">shop List Left Sidebar</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="shop-list-right-sidebar.html">shop List Right Sidebar</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="shop-left-sidebar.html">Left Sidebar</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="shop-right-sidebar.html">Right Sidebar</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="shop-load-more.html">Shop Load More</a></li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-col col-lg-4">
                                                    <ul>
                                                        <li class="dropdown-header">Other Pages</li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="shop-cart.html">Cart</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="checkout.html">Checkout</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="my-account.html">My Account</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="wishlist.html">Wishlist</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="compare.html">compare</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="order-completed.html">Order Completed</a></li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-col col-lg-4">
                                                    <ul>
                                                        <li class="dropdown-header">Product Pages</li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="shop-product-detail.html">Default</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="shop-product-detail-left-sidebar.html">Left Sidebar</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="shop-product-detail-right-sidebar.html">Right Sidebar</a></li>
                                                        <li><a class="dropdown-item nav-link nav_item" href="shop-product-detail-thumbnails-left.html">Thumbnails Left</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="mega-menu-col col-lg-3">
                                            <div class="header_banner">
                                                <div class="header_banner_content">
                                                    <div class="shop_banner">
                                                        <div class="banner_img overlay_bg_40">
                                                            <img src="assets/images/shop_banner1.jpg" alt="shop_banner"/>
                                                        </div> 
                                                        <div class="shop_bn_content">
                                                            <h5 class="text-uppercase shop_subtitle">New Collection</h5>
                                                            <h3 class="text-uppercase shop_title">Sale 30% Off</h3>
                                                            <a href="#" class="btn btn-white rounded-0 btn-sm text-uppercase">Shop Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li><a class="nav-link nav_item" href="contact.html">Contact Us</a></li> 
                        </ul>
                    </div>
                    <ul class="navbar-nav attr-nav align-items-center">
                        <li><a href="javascript:void(0);" class="nav-link search_trigger"><i class="linearicons-magnifier"></i></a>
                            <div class="search_wrap">
                                <span class="close-search"><i class="ion-ios-close-empty"></i></span>
                                <form>
                                    <input type="text" placeholder="Search" class="form-control" id="search_input">
                                    <button type="submit" class="search_icon"><i class="ion-ios-search-strong"></i></button>
                                </form>
                            </div><div class="search_overlay"></div><div class="search_overlay"></div>
                        </li>
                        <li class="dropdown cart_dropdown"><a class="nav-link cart_trigger" href="#" data-toggle="dropdown"><i class="linearicons-cart"></i><span class="cart_count">2</span></a>
                            <div class="cart_box dropdown-menu dropdown-menu-right">
                                <ul class="cart_list">
                                    <li>
                                        <a href="#" class="item_remove"><i class="ion-close"></i></a>
                                        <a href="#"><img src="assets/images/cart_thamb1.jpg" alt="cart_thumb1">Variable product 001</a>
                                        <span class="cart_quantity"> 1 x <span class="cart_amount"> <span class="price_symbole">$</span></span>78.00</span>
                                    </li>
                                    <li>
                                        <a href="#" class="item_remove"><i class="ion-close"></i></a>
                                        <a href="#"><img src="assets/images/cart_thamb2.jpg" alt="cart_thumb2">Ornare sed consequat</a>
                                        <span class="cart_quantity"> 1 x <span class="cart_amount"> <span class="price_symbole">$</span></span>81.00</span>
                                    </li>
                                </ul>
                                <div class="cart_footer">
                                    <p class="cart_total"><strong>Subtotal:</strong> <span class="cart_price"> <span class="price_symbole">$</span></span>159.00</p>
                                    <p class="cart_buttons"><a href="#" class="btn btn-fill-line view-cart">View Cart</a><a href="#" class="btn btn-fill-out checkout">Checkout</a></p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- END HEADER -->
 
        @yield('content')


        

    <!-- START FOOTER -->
    <footer class="footer_dark">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="pb-4 mb-4 mb-md-5 border_bottom_tran">
                            <div class="row align-items-center justify-content-between">	
                                <div class="col-lg-5 col-md-6">
                                    <div class="heading_s1">
                                        <h3>Subscribe Our Newsletter</h3>
                                    </div>
                                    <p>Contrary to popular belief of lorem Ipsm Latin amet ltin from industry. Phasellus blandit massa enim varius nunc. </p>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="newsletter_form">
                                        <form>
                                            <input type="text" required="" class="form-control" placeholder="Enter Email Address">
                                            <button type="submit" class="btn-send2" name="submit" value="Submit"><i class="icon-envelope-letter"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="widget">
                            <h6 class="widget_title">Contact info</h6>
                            <ul class="contact_info contact_info_light">
                                <li>
                                    <i class="ti-location-pin"></i>
                                    <p>123 Street, Old Trafford, NewYork, USA</p>
                                </li>
                                <li>
                                    <i class="ti-email"></i>
                                    <a href="mailto:info@sitename.com">info@sitename.com</a>
                                </li>
                                <li>
                                    <i class="ti-mobile"></i>
                                    <p>+ 457 789 789 65</p>
                                </li>
                            </ul>
                        </div>
                        <div class="widget">
                            <ul class="social_icons rounded_social">
                                <li><a href="#" class="sc_facebook"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="#" class="sc_twitter"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="#" class="sc_google"><i class="ion-social-googleplus"></i></a></li>
                                <li><a href="#" class="sc_youtube"><i class="ion-social-youtube-outline"></i></a></li>
                                <li><a href="#" class="sc_instagram"><i class="ion-social-instagram-outline"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6">
                        <div class="widget">
                            <h6 class="widget_title">Useful Links</h6>
                            <ul class="widget_links">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Location</a></li>
                                <li><a href="#">Affiliates</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6">
                        <div class="widget">
                            <h6 class="widget_title">My Account</h6>
                            <ul class="widget_links">
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">Discount</a></li>
                                <li><a href="#">Returns</a></li>
                                <li><a href="#">Orders History</a></li>
                                <li><a href="#">Order Tracking</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="widget">
                            <h6 class="widget_title">Instagram</h6>
                            <ul class="widget_instafeed instafeed_col4">
                                <li><a href="#"><img src="assets/images/furniture_insta_small1.jpg" alt="insta_img"><span class="insta_icon"><i class="ti-instagram"></i></span></a></li>
                                <li><a href="#"><img src="assets/images/furniture_insta_small2.jpg" alt="insta_img"><span class="insta_icon"><i class="ti-instagram"></i></span></a></li>
                                <li><a href="#"><img src="assets/images/furniture_insta_small3.jpg" alt="insta_img"><span class="insta_icon"><i class="ti-instagram"></i></span></a></li>
                                <li><a href="#"><img src="assets/images/furniture_insta_small4.jpg" alt="insta_img"><span class="insta_icon"><i class="ti-instagram"></i></span></a></li>
                                <li><a href="#"><img src="assets/images/furniture_insta_small5.jpg" alt="insta_img"><span class="insta_icon"><i class="ti-instagram"></i></span></a></li>
                                <li><a href="#"><img src="assets/images/furniture_insta_small6.jpg" alt="insta_img"><span class="insta_icon"><i class="ti-instagram"></i></span></a></li>
                                <li><a href="#"><img src="assets/images/furniture_insta_small7.jpg" alt="insta_img"><span class="insta_icon"><i class="ti-instagram"></i></span></a></li>
                                <li><a href="#"><img src="assets/images/furniture_insta_small8.jpg" alt="insta_img"><span class="insta_icon"><i class="ti-instagram"></i></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom_footer bg_dark4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p class="mb-md-0 text-center text-md-left">© 2020 All Rights Reserved by Bestwebcreator</p>
                    </div>
                    <div class="col-md-6">
                        <ul class="footer_payment text-center text-md-right">
                            <li><a href="#"><img src="assets/images/visa.png" alt="visa"></a></li>
                            <li><a href="#"><img src="assets/images/discover.png" alt="discover"></a></li>
                            <li><a href="#"><img src="assets/images/master_card.png" alt="master_card"></a></li>
                            <li><a href="#"><img src="assets/images/paypal.png" alt="paypal"></a></li>
                            <li><a href="#"><img src="assets/images/amarican_express.png" alt="amarican_express"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- END FOOTER -->

      <script src="{{asset('assets/js/jquery-1.12.4.min.js') }}"></script>
      <script src="{{asset('assets/js/popper.min.js') }}"></script>
      <script src="{{asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
      <script src="{{asset('assets/owlcarousel/js/owl.carousel.min.js') }}"></script>
      <script src="{{asset('assets/js/magnific-popup.min.js') }}"></script>
      <script src="{{asset('assets/js/waypoints.min.js') }}"></script> 
      <script src="{{asset('assets/js/parallax.js') }}"></script>
      <script src="{{asset('assets/js/jquery.countdown.min.js') }}"></script>
      <script src="{{asset('assets/js/jquery.countdown.min.js') }}"></script>
      <script src="{{asset('assets/js/isotope.min.js') }}"></script>
      <script src="{{asset('assets/js/jquery.dd.min.js') }}"></script>
      <script src="{{asset('assets/js/slick.min.js') }}"></script>
      <script src="{{asset('assets/js/jquery.elevatezoom.js') }}"></script>
      <script src="{{asset('assets/js/scripts.js') }}"></script>
    </body>
</html>

 
</body>
</html>
