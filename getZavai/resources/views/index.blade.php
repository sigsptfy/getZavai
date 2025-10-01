<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->


<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Ochaka - Multipurpose eCommerce HTML Template</title>

    <!-- font -->
    <link rel="stylesheet" href="{{ asset('fonts/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('icon/icomoon/style.css') }}">
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('sibforms.com/forms/end-form/build/sib-styles.css')}}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{ asset('images/logo/favicon.svg') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('images/logo/favicon.svg') }}">
</head>

<body>
    <!-- Scroll Top -->
    <button id="goTop">
        <span class="border-progress"></span>
        <span class="icon icon-caret-up"></span>
    </button>

    <!-- preload -->
    <div class="preload preload-container" id="preload">
        <div class="preload-logo">
            <div class="spinner"></div>
        </div>
    </div>
    <!-- /preload -->

    <main id="wrapper">
        <!-- Top Bar-->
       <div class="tf-topbar bg-black">
    <div class="container-full">
        <div class="row">
            <div class="col-xl-7 col-lg-8">
                <div class="topbar-left">
                    <h6 class="text-up text-white fw-normal text-line-clamp-1">
                        Up to 50% off on Latest Fashion Collection - Free Shipping Over $100
                    </h6>
                    <div class="group-btn">
                        <a href="#" class="tf-btn-line style-white letter-space-0">Men</a>
                        <a href="#" class="tf-btn-line style-white letter-space-0">Women</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-4 d-none d-lg-block">
                <ul class="topbar-right topbar-option-list">
                    <li class="h6">
                        <a href="#" class="text-white link">Help & FAQs</a>
                    </li>
                    <li class="br-line"></li>
                    <li class="h6">
                        <a href="#" class="text-white link">Store Locator</a>
                    </li>
                    <li class="br-line d-none d-xl-inline-flex"></li>
                    <li class="tf-currencies d-none d-xl-block">
                        <select class="tf-dropdown-select style-default color-white type-currencies">
                            <option selected data-thumbnail="{{ asset('images/country/us.png') }}">USD</option>
                            <option data-thumbnail="{{ asset('images/country/vie.png') }}">VND</option>
                        </select>
                    </li>
                    <li class="br-line d-none d-xl-inline-flex"></li>
                    <li class="tf-languages d-none d-xl-block">
                        <select class="tf-dropdown-select style-default color-white type-languages">
                            <option>English</option>
                            {{-- <option>العربية</option>
                            <option>简体中文</option>
                            <option>اردو</option> --}}
                        </select>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
        <!-- /Top Bar -->
        <!-- Header -->
        <header class="tf-header header-fix header-abs-1">
    <div class="container-full">
        <div class="row align-items-center">
            <div class="col-md-4 col-3 d-xl-none">
                <a href="#mobileMenu" data-bs-toggle="offcanvas" class="btn-mobile-menu">
                    <span></span>
                </a>
            </div>
            <div class="col-xl-3 col-md-4 col-6 d-flex justify-content-center justify-content-xl-start">
                <a href="#" class="logo-site">
                    <img src="{{ asset('images/logo/logo.svg') }}" alt="ZAVAI Logo">
                </a>
            </div>
            <div class="col-xl-6 d-none d-xl-block">
                <nav class="box-navigation">
                    <ul class="box-nav-menu">
                        <li class="menu-item">
                            <a href="#" class="item-link">HOME<i class="icon icon-caret-down"></i></a>
                            <div class="sub-menu mega-menu mega-home">
                                <div class="container">
                                    <div class="row-demo">
                                        <div class="demo-item">
                                            <a href="#" class="demo-img">
                                                <img src="{{ asset('images/demo/home-fashion-1.jpg') }}" alt="Demo">
                                            </a>
                                            <a href="#" class="demo-name">Home Fashion 1</a>
                                        </div>
                                        <div class="demo-item">
                                            <a href="#" class="demo-img">
                                                <img src="{{ asset('images/demo/home-fashion-2.jpg') }}" alt="Demo">
                                            </a>
                                            <a href="#" class="demo-name">Home Fashion 2</a>
                                        </div>
                                        <div class="demo-item">
                                            <a href="#" class="demo-img">
                                                <img src="{{ asset('images/demo/home-fashion-3.jpg') }}" alt="Demo">
                                            </a>
                                            <a href="#" class="demo-name">Home Fashion 3</a>
                                        </div>
                                        <div class="demo-item">
                                            <a href="#" class="demo-img">
                                                <img src="{{ asset('images/demo/home-fashion-4.jpg') }}" alt="Demo">
                                            </a>
                                            <a href="#" class="demo-name">Home Fashion 4</a>
                                        </div>
                                        <div class="demo-item">
                                            <a href="#" class="demo-img">
                                                <img src="{{ asset('images/demo/home-cosmetic.jpg') }}" alt="Demo">
                                            </a>
                                            <a href="#" class="demo-name">Home Cosmetic</a>
                                        </div>
                                        <div class="demo-item">
                                            <a href="#" class="demo-img">
                                                <img src="{{ asset('images/demo/home-skin-care.jpg') }}" alt="Demo">
                                            </a>
                                            <a href="#" class="demo-name">Home Skincare</a>
                                        </div>
                                        <div class="demo-item">
                                            <a href="#" class="demo-img">
                                                <img src="{{ asset('images/demo/home-decor.jpg') }}" alt="Demo">
                                            </a>
                                            <a href="#" class="demo-name">Home Decor</a>
                                        </div>
                                        <div class="demo-item">
                                            <a href="#" class="demo-img">
                                                <img src="{{ asset('images/demo/home-jewelry.jpg') }}" alt="Demo">
                                            </a>
                                            <a href="#" class="demo-name">Home Jewelry</a>
                                        </div>
                                        <div class="demo-item">
                                            <a href="#" class="demo-img">
                                                <img src="{{ asset('images/demo/home-electronic-market.jpg') }}" alt="Demo">
                                            </a>
                                            <a href="#" class="demo-name">Home Electric Market</a>
                                        </div>
                                        <div class="demo-item">
                                            <a href="#" class="demo-img">
                                                <img src="{{ asset('images/demo/home-pet-store.jpg') }}" alt="Demo">
                                            </a>
                                            <a href="#" class="demo-name">Home Pet Store</a>
                                        </div>
                                        <div class="demo-item">
                                            <a href="#" class="demo-img">
                                                <img src="{{ asset('images/demo/home-sneaker.jpg') }}" alt="Demo">
                                            </a>
                                            <a href="#" class="demo-name">Home Sneaker</a>
                                        </div>
                                        <div class="demo-item">
                                            <a href="#" class="demo-img">
                                                <img class="lazyload" src="{{ asset('images/demo/home-book.jpg') }}"
                                                    data-src="{{ asset('images/demo/home-book.jpg') }}" alt="Demo">
                                                <div class="demo-label">
                                                    <span>New</span>
                                                </div>
                                            </a>
                                            <a href="#" class="demo-name">Home Book</a>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <a href="#modalDemo" data-bs-toggle="modal" class="tf-btn animate-btn">
                                            View all demos (20)
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="menu-item">
                            <a href="#" class="item-link">SHOP<i class="icon icon-caret-down"></i></a>
                            <div class="sub-menu mega-menu">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-2">
                                            <div class="mega-menu-item">
                                                <h4 class="menu-heading">Shop Layout</h4>
                                                <ul class="sub-menu_list">
                                                    <li><a href="#" class="sub-menu_link">Default Grid</a></li>
                                                    <li><a href="#" class="sub-menu_link">Default List</a></li>
                                                    <li><a href="#" class="sub-menu_link">Shop 2 Columns</a></li>
                                                    <li><a href="#" class="sub-menu_link">Shop 3 Columns</a></li>
                                                    <li><a href="#" class="sub-menu_link">Shop 4 Columns</a></li>
                                                    <li><a href="#" class="sub-menu_link">Shop 5 Columns</a></li>
                                                    <li><a href="#" class="sub-menu_link">Shop 6 Columns</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="mega-menu-item">
                                                <h4 class="menu-heading">Shop Features</h4>
                                                <ul class="sub-menu_list">
                                                    <li><a href="#" class="sub-menu_link">Full Width List</a></li>
                                                    <li><a href="#" class="sub-menu_link">Full Width Grid</a></li>
                                                    <li><a href="#" class="sub-menu_link">Left Sidebar</a></li>
                                                    <li><a href="#" class="sub-menu_link">Right Sidebar</a></li>
                                                    <li><a href="#" class="sub-menu_link">Filter Dropdown</a></li>
                                                    <li><a href="#" class="sub-menu_link">Filter Drawer</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="mega-menu-item">
                                                <h4 class="menu-heading">Categories</h4>
                                                <ul class="sub-menu_list">
                                                    <li><a href="#" class="sub-menu_link">T-Shirts</a></li>
                                                    <li><a href="#" class="sub-menu_link">Shirts</a></li>
                                                    <li><a href="#" class="sub-menu_link">Dresses</a></li>
                                                    <li><a href="#" class="sub-menu_link">Jackets</a></li>
                                                    <li><a href="#" class="sub-menu_link">Jeans</a></li>
                                                    <li><a href="#" class="sub-menu_link">Accessories</a></li>
                                                    <li><a href="#" class="sub-menu_link">Shoes</a></li>
                                                    <li><a href="#" class="sub-menu_link">Sale Items</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <ul class="list-hor">
                                                <li class="wg-cls hover-img">
                                                    <a href="#" class="image img-style">
                                                        <img src="{{ asset('images/collections/cls-header-1.jpg') }}"
                                                            data-src="{{ asset('images/collections/cls-header-1.jpg') }}"
                                                            alt="Men Collection" class="lazyload">
                                                    </a>
                                                    <div class="cls-content">
                                                        <h4 class="tag_cls">Men</h4>
                                                        <span class="br-line type-vertical"></span>
                                                        <a href="#" class="tf-btn-line"> Shop now </a>
                                                    </div>
                                                </li>
                                                <li class="wg-cls hover-img">
                                                    <a href="#" class="image img-style">
                                                        <img src="{{ asset('images/collections/cls-header-2.jpg') }}"
                                                            data-src="{{ asset('images/collections/cls-header-2.jpg') }}"
                                                            alt="Women Collection" class="lazyload">
                                                    </a>
                                                    <div class="cls-content">
                                                        <h4 class="tag_cls">Women</h4>
                                                        <span class="br-line type-vertical"></span>
                                                        <a href="#" class="tf-btn-line"> Shop now </a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="menu-item">
                            <a href="#" class="item-link">COLLECTIONS<i class="icon icon-caret-down"></i></a>
                            <div class="sub-menu mega-menu">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-2">
                                            <div class="mega-menu-item">
                                                <h4 class="menu-heading">Men's Collection</h4>
                                                <ul class="sub-menu_list">
                                                    <li><a href="#" class="sub-menu_link">Casual Wear</a></li>
                                                    <li><a href="#" class="sub-menu_link">Formal Wear</a></li>
                                                    <li><a href="#" class="sub-menu_link">Sportswear</a></li>
                                                    <li><a href="#" class="sub-menu_link">Outerwear</a></li>
                                                    <li><a href="#" class="sub-menu_link">Accessories</a></li>
                                                    <li><a href="#" class="sub-menu_link">Footwear</a></li>
                                                    <li><a href="#" class="sub-menu_link">Underwear</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="mega-menu-item">
                                                <h4 class="menu-heading">Women's Collection</h4>
                                                <ul class="sub-menu_list">
                                                    <li><a href="#" class="sub-menu_link">Dresses</a></li>
                                                    <li><a href="#" class="sub-menu_link">Tops & Blouses</a></li>
                                                    <li><a href="#" class="sub-menu_link">Bottoms</a></li>
                                                    <li><a href="#" class="sub-menu_link">Activewear</a></li>
                                                    <li><a href="#" class="sub-menu_link">Outerwear</a></li>
                                                    <li><a href="#" class="sub-menu_link">Accessories</a></li>
                                                    <li><a href="#" class="sub-menu_link">Footwear</a></li>
                                                    <li><a href="#" class="sub-menu_link">Lingerie</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="mega-menu-item">
                                                <h4 class="menu-heading">Seasonal</h4>
                                                <ul class="sub-menu_list">
                                                    <li><a href="#" class="sub-menu_link">Summer Collection</a></li>
                                                    <li><a href="#" class="sub-menu_link">Winter Collection</a></li>
                                                    <li><a href="#" class="sub-menu_link">Spring Collection</a></li>
                                                    <li><a href="#" class="sub-menu_link">Fall Collection</a></li>
                                                    <li><a href="#" class="sub-menu_link">Holiday Special</a></li>
                                                    <li><a href="#" class="sub-menu_link">Limited Edition</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="mega-menu-item mn-none">
                                                <h4 class="menu-heading">Featured Products</h4>
                                                <ul class="list-ver">
                                                    <li class="prd-recent hover-img">
                                                        <a href="#" class="image img-style">
                                                            <img src="{{ asset('images/section/recent-1.jpg') }}"
                                                                data-src="{{ asset('images/section/recent-1.jpg') }}"
                                                                alt="Featured Product" class="lazyload">
                                                        </a>
                                                        <div class="content">
                                                            <span class="badge-tag">T-shirt</span>
                                                            <a href="#" class="name-prd h6 fw-medium link">
                                                                Premium Cotton T-Shirt - Comfortable & Stylish
                                                            </a>
                                                            <span class="price-wrap h6 fw-semibold text-black"> $29.99 </span>
                                                        </div>
                                                    </li>
                                                    <li class="br-line"></li>
                                                    <li class="prd-recent hover-img">
                                                        <a href="#" class="image img-style">
                                                            <img src="{{ asset('images/section/recent-2.jpg') }}"
                                                                data-src="{{ asset('images/section/recent-2.jpg') }}"
                                                                alt="Featured Product" class="lazyload">
                                                        </a>
                                                        <div class="content">
                                                            <span class="badge-tag">Dress</span>
                                                            <a href="#" class="name-prd h6 fw-medium link">
                                                                Elegant Summer Dress - Perfect for Any Occasion
                                                            </a>
                                                            <span class="price-wrap h6 fw-semibold text-black"> $89.99 </span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="menu-item position-relative">
                            <a href="#" class="item-link">ABOUT<i class="icon icon-caret-down"></i></a>
                            <div class="sub-menu">
                                <ul class="sub-menu_list">
                                    <li><a href="#" class="sub-menu_link">About ZAVAI</a></li>
                                    <li><a href="#" class="sub-menu_link">Our Story</a></li>
                                    <li><a href="#" class="sub-menu_link">Store Locations</a></li>
                                    <li><a href="#" class="sub-menu_link">Size Guide</a></li>
                                    <li><a href="#" class="sub-menu_link">FAQs</a></li>
                                    <li><a href="#" class="sub-menu_link">Contact Us</a></li>
                                    <li><a href="#" class="sub-menu_link">Track Your Order</a></li>
                                    <li><a href="#" class="sub-menu_link">My Account</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="menu-item position-relative">
                            <a href="#" class="item-link">BLOG<i class="icon icon-caret-down"></i></a>
                            <div class="sub-menu">
                                <ul class="sub-menu_list">
                                    <li><a href="#" class="sub-menu_link">Fashion Blog</a></li>
                                    <li><a href="#" class="sub-menu_link">Style Tips</a></li>
                                    <li><a href="#" class="sub-menu_link">Trends</a></li>
                                    <li><a href="#" class="sub-menu_link">News & Updates</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-xl-3 col-md-4 col-3">
                <ul class="nav-icon-list">
                    <li class="d-none d-lg-flex">
                        <a class="nav-icon-item link" href="#"><i class="icon icon-user"></i></a>
                    </li>
                    <li class="d-none d-md-flex">
                        <a class="nav-icon-item link" href="#search" data-bs-toggle="modal">
                            <i class="icon icon-magnifying-glass"></i>
                        </a>
                    </li>
                    <li class="d-none d-sm-flex">
                        <a class="nav-icon-item link" href="#"><i class="icon icon-heart"></i></a>
                    </li>
                    <li class="shop-cart" data-bs-toggle="offcanvas" data-bs-target="#shoppingCart">
                        <a class="nav-icon-item link" href="#shoppingCart" data-bs-toggle="offcanvas">
                            <i class="icon icon-shopping-cart-simple"></i>
                        </a>
                        <span class="count">0</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
        <!-- /Header -->
        <!-- Banner Slider -->
        <div class="tf-slideshow type-abs tf-btn-swiper-main hover-sw-nav">
    <div dir="ltr" class="swiper tf-swiper sw-slide-show slider_effect_fade" data-auto="true"
        data-loop="true" data-effect="fade" data-delay="3000">
        <div class="swiper-wrapper">
            <!-- item 1 -->
            <div class="swiper-slide">
                <div class="slider-wrap">
                    <div class="sld_image">
                        <img src="{{ asset('images/slider/slider-1.jpg') }}"
                            data-src="{{ asset('images/slider/slider-1.jpg') }}"
                            alt="ZAVAI Fall Winter Collection" class="lazyload">
                    </div>
                    <div class="sld_content">
                        <div class="container">
                            <div class="content-sld_wrap">
                                <h1 class="title_sld text-display fade-item fade-item-1">Fall Winter <br
                                        class="d-sm-none">Collection</h1>
                                <p class="sub-text_sld h5 text-black fade-item fade-item-2">
                                    Embrace the season with ZAVAI's premium winter essentials
                                </p>
                                <div class="fade-item fade-item-3">
                                    <a href="#" class="tf-btn animate-btn fw-semibold">
                                        Shop now
                                        <i class="icon icon-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- item 2 -->
            <div class="swiper-slide">
                <div class="slider-wrap">
                    <div class="sld_image">
                        <img src="{{ asset('images/slider/slider-2.jpg') }}"
                            data-src="{{ asset('images/slider/slider-2.jpg') }}"
                            alt="ZAVAI Spring Summer Collection" class="lazyload">
                    </div>
                    <div class="sld_content">
                        <div class="container">
                            <div class="content-sld_wrap">
                                <h1 class="title_sld text-display fade-item fade-item-1">Spring Summer <br
                                        class="d-sm-none">Collection</h1>
                                <p class="sub-text_sld h5 text-black fade-item fade-item-2">
                                    Discover the elegance of renewal with soft tones and flowing textures
                                </p>
                                <div class="fade-item fade-item-3">
                                    <a href="#" class="tf-btn animate-btn fw-semibold">
                                        Shop now
                                        <i class="icon icon-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- item 3 -->
            <div class="swiper-slide">
                <div class="slider-wrap">
                    <div class="sld_image">
                        <img src="{{ asset('images/slider/slider-3.jpg') }}"
                            data-src="{{ asset('images/slider/slider-3.jpg') }}"
                            alt="ZAVAI Urban Edge Series" class="lazyload">
                    </div>
                    <div class="sld_content">
                        <div class="container">
                            <div class="content-sld_wrap">
                                <h1 class="title_sld text-display fade-item fade-item-1">Urban Edge <br
                                        class="d-sm-none">Series</h1>
                                <p class="sub-text_sld h5 text-black fade-item fade-item-2">
                                    Bold cuts and minimalist design for the modern city lifestyle
                                </p>
                                <div class="fade-item fade-item-3">
                                    <a href="#" class="tf-btn animate-btn fw-semibold">
                                        Shop now
                                        <i class="icon icon-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sw-dot-default tf-sw-pagination"></div>
    </div>
    <div class="tf-sw-nav nav-prev-swiper">
        <i class="icon icon-caret-left"></i>
    </div>
    <div class="tf-sw-nav nav-next-swiper">
        <i class="icon icon-caret-right"></i>
    </div>
</div>
        <!-- /Banner Slider -->
        <!-- Collection -->
        <div class="s-collection">
    <div dir="ltr" class="swiper tf-swiper" data-preview="3" data-tablet="2" data-mobile-sm="2"
        data-mobile="1" data-pagination="1" data-space-lg="24" data-space-md="15" data-space="10"
        data-pagination-sm="1" data-pagination-md="2" data-pagination-lg="3">
        <div class="swiper-wrapper">
            <!-- item 1 -->
            <div class="swiper-slide">
                <div class="wg-cls-2 d-flex hover-img">
                    <a href="#" class="image img-style">
                        <img class="lazyload" src="{{ asset('images/collections/cls-1.jpg') }}"
                            data-src="{{ asset('images/collections/cls-1.jpg') }}" alt="ZAVAI Men's Collection">
                    </a>
                    <div class="cls-content_wrap b-16">
                        <div class="cls-content">
                            <a href="#" class="tag_cls h3 link">Men's</a>
                            <span class="br-line type-vertical"></span>
                            <a href="#" class="tf-btn-line text-nowrap"> Shop now </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- item 2 -->
            <div class="swiper-slide">
                <div class="wg-cls-2 d-flex hover-img">
                    <a href="#" class="image img-style">
                        <img class="lazyload" src="{{ asset('images/collections/cls-2.jpg') }}"
                            data-src="{{ asset('images/collections/cls-2.jpg') }}" alt="ZAVAI Women's Collection">
                    </a>
                    <div class="cls-content_wrap b-16">
                        <div class="cls-content">
                            <a href="#" class="tag_cls h3 link">Women's</a>
                            <span class="br-line type-vertical"></span>
                            <a href="#" class="tf-btn-line text-nowrap"> Shop now </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- item 3 -->
            <div class="swiper-slide">
                <div class="wg-cls-2 d-flex hover-img">
                    <a href="#" class="image img-style">
                        <img class="lazyload" src="{{ asset('images/collections/cls-3.jpg') }}"
                            data-src="{{ asset('images/collections/cls-3.jpg') }}" alt="ZAVAI Accessories Collection">
                    </a>
                    <div class="cls-content_wrap b-16">
                        <div class="cls-content">
                            <a href="#" class="tag_cls h3 link">Accessories</a>
                            <span class="br-line type-vertical"></span>
                            <a href="#" class="tf-btn-line text-nowrap"> Shop now </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sw-dot-default tf-sw-pagination"></div>
    </div>
</div>
        <!-- /Collection -->
        <!-- New -->
        <div class="flat-spacing flat-animate-tab">
            <div class="container">
               <div class="sect-title wow fadeInUp">
    <div class="h1 title text-center mb-24">New Arrivals</div>
    <ul class="tab-product_list" role="tablist">
        <li class="nav-tab-item" role="presentation">
            <a href="#trending" data-bs-toggle="tab" class="tf-btn-line tf-btn-tab active"> TRENDING
            </a>
        </li>
        <li class="nav-tab-item" role="presentation">
            <a href="#best-seller" data-bs-toggle="tab" class="tf-btn-line tf-btn-tab"> Best Sellers
            </a>
        </li>
        <li class="nav-tab-item" role="presentation">
            <a href="#on-sale" data-bs-toggle="tab" class="tf-btn-line tf-btn-tab"> Sale Items </a>
        </li>
    </ul>
</div>
                <div class="tab-content">
                    <div class="tab-pane active show" id="trending" role="tabpanel">
    <div dir="ltr" class="swiper tf-swiper wrap-sw-over wow fadeInUp" data-preview="4"
        data-tablet="3" data-mobile-sm="2" data-mobile="2" data-space-lg="48"
        data-space-md="30" data-space="12" data-pagination="2" data-pagination-sm="2"
        data-pagination-md="3" data-pagination-lg="4" data-grid="2">
        <div class="swiper-wrapper">
            <!-- Product 1 -->
            <div class="swiper-slide">
                <div class="card-product">
                    <div class="card-product_wrapper">
                        <a href="#" class="product-img">
                            <img class="lazyload img-product" src="{{ asset('images/products/product-1.jpg') }}"
                                data-src="{{ asset('images/products/product-1.jpg') }}" alt="ZAVAI Product">
                            <img class="lazyload img-hover" src="{{ asset('images/products/product-2.jpg') }}"
                                data-src="{{ asset('images/products/product-2.jpg') }}" alt="ZAVAI Product">
                        </a>
                        <div class="variant-box">
                            <ul class="product-size_list">
                                <li class="size-item h6">XS</li>
                                <li class="size-item h6">S</li>
                                <li class="size-item h6">M</li>
                            </ul>
                        </div>
                        <ul class="product-action_list">
                            <li>
                                <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                    class="hover-tooltip tooltip-left box-icon">
                                    <span class="icon icon-shopping-cart-simple"></span>
                                    <span class="tooltip">Add to cart</span>
                                </a>
                            </li>
                            <li class="wishlist">
                                <a href="#;" class="hover-tooltip tooltip-left box-icon">
                                    <span class="icon icon-heart"></span>
                                    <span class="tooltip">Add to Wishlist</span>
                                </a>
                            </li>
                            <li class="compare">
                                <a href="#compare" data-bs-toggle="offcanvas"
                                    class="hover-tooltip tooltip-left box-icon">
                                    <span class="icon icon-compare"></span>
                                    <span class="tooltip">Compare</span>
                                </a>
                            </li>
                            <li>
                                <a href="#quickView" data-bs-toggle="modal"
                                    class="hover-tooltip tooltip-left box-icon">
                                    <span class="icon icon-view"></span>
                                    <span class="tooltip">Quick view</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="product-badge_list">
                            <li class="product-badge_item h6 hot">Hot</li>
                        </ul>
                    </div>
                    <div class="card-product_info">
                        <a href="#" class="name-product h4 link">ZAVAI Premium Two Piece Set</a>
                        <div class="price-wrap">
                            <span class="price-old h6 fw-normal">$89.99</span>
                            <span class="price-new h6">$59.99</span>
                        </div>
                        <ul class="product-color_list">
                            <li class="product-color-item color-swatch hover-tooltip tooltip-bot active">
                                <span class="tooltip color-filter">Brown</span>
                                <span class="swatch-value bg-light-brown"></span>
                                <img src="{{ asset('images/products/product-1.jpg') }}"
                                    data-src="{{ asset('images/products/product-1.jpg') }}" alt="Image">
                            </li>
                            <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                <span class="tooltip color-filter">Blue</span>
                                <span class="swatch-value bg-baby-blue"></span>
                                <img src="{{ asset('images/products/product-4.jpg') }}"
                                    data-src="{{ asset('images/products/product-4.jpg') }}" alt="Image">
                            </li>
                            <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                <span class="tooltip color-filter">Orange</span>
                                <span class="swatch-value bg-vivid-orange"></span>
                                <img src="{{ asset('images/products/product-3.jpg') }}"
                                    data-src="{{ asset('images/products/product-3.jpg') }}" alt="Image">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Product 2 -->
            <div class="swiper-slide">
                <div class="card-product">
                    <div class="card-product_wrapper">
                        <a href="#" class="product-img">
                            <img class="lazyload img-product" src="{{ asset('images/products/product-7.jpg') }}"
                                data-src="{{ asset('images/products/product-7.jpg') }}" alt="ZAVAI Product">
                            <img class="lazyload img-hover" src="{{ asset('images/products/product-8.jpg') }}"
                                data-src="{{ asset('images/products/product-8.jpg') }}" alt="ZAVAI Product">
                        </a>
                        <ul class="product-action_list">
                            <li>
                                <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                    class="hover-tooltip tooltip-left box-icon">
                                    <span class="icon icon-shopping-cart-simple"></span>
                                    <span class="tooltip">Add to cart</span>
                                </a>
                            </li>
                            <li class="wishlist">
                                <a href="#;" class="hover-tooltip tooltip-left box-icon">
                                    <span class="icon icon-heart"></span>
                                    <span class="tooltip">Add to Wishlist</span>
                                </a>
                            </li>
                            <li class="compare">
                                <a href="#compare" data-bs-toggle="offcanvas"
                                    class="hover-tooltip tooltip-left box-icon">
                                    <span class="icon icon-compare"></span>
                                    <span class="tooltip">Compare</span>
                                </a>
                            </li>
                            <li>
                                <a href="#quickView" data-bs-toggle="modal"
                                    class="hover-tooltip tooltip-left box-icon">
                                    <span class="icon icon-view"></span>
                                    <span class="tooltip">Quick view</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="product-badge_list">
                            <li class="product-badge_item flash-sale"><i class="icon icon-thunder"></i> Flash sale</li>
                        </ul>
                        <div class="product-countdown">
                            <div class="js-countdown cd-has-zero" data-timer="25472"
                                data-labels="d : ,h : ,m : ,s"></div>
                        </div>
                    </div>
                    <div class="card-product_info">
                        <a href="#" class="name-product h4 link">ZAVAI Athletic T-Shirt</a>
                        <div class="price-wrap">
                            <span class="price-old h6 fw-normal">$49.99</span>
                            <span class="price-new h6">$29.99</span>
                        </div>
                        <ul class="product-color_list">
                            <li class="product-color-item color-swatch hover-tooltip tooltip-bot active">
                                <span class="tooltip color-filter">Pink</span>
                                <span class="swatch-value bg-hot-pink"></span>
                                <img src="{{ asset('images/products/product-7.jpg') }}"
                                    data-src="{{ asset('images/products/product-7.jpg') }}" alt="Image">
                            </li>
                            <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                <span class="tooltip color-filter">Beige</span>
                                <span class="swatch-value bg-light-beige"></span>
                                <img src="{{ asset('images/products/product-9.jpg') }}"
                                    data-src="{{ asset('images/products/product-9.jpg') }}" alt="Image">
                            </li>
                            <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                <span class="tooltip color-filter">Olive</span>
                                <span class="swatch-value bg-dusty-olive"></span>
                                <img src="{{ asset('images/products/product-11.jpg') }}"
                                    data-src="{{ asset('images/products/product-11.jpg') }}" alt="Image">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Product 3 -->
            <div class="swiper-slide">
                <div class="card-product">
                    <div class="card-product_wrapper">
                        <a href="#" class="product-img">
                            <img class="lazyload img-product" src="{{ asset('images/products/product-13.jpg') }}"
                                data-src="{{ asset('images/products/product-13.jpg') }}" alt="ZAVAI Product">
                            <img class="lazyload img-hover" src="{{ asset('images/products/product-14.jpg') }}"
                                data-src="{{ asset('images/products/product-14.jpg') }}" alt="ZAVAI Product">
                        </a>
                        <ul class="product-action_list">
                            <li>
                                <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                    class="hover-tooltip tooltip-left box-icon">
                                    <span class="icon icon-shopping-cart-simple"></span>
                                    <span class="tooltip">Add to cart</span>
                                </a>
                            </li>
                            <li class="wishlist">
                                <a href="#;" class="hover-tooltip tooltip-left box-icon">
                                    <span class="icon icon-heart"></span>
                                    <span class="tooltip">Add to Wishlist</span>
                                </a>
                            </li>
                            <li class="compare">
                                <a href="#compare" data-bs-toggle="offcanvas"
                                    class="hover-tooltip tooltip-left box-icon">
                                    <span class="icon icon-compare"></span>
                                    <span class="tooltip">Compare</span>
                                </a>
                            </li>
                            <li>
                                <a href="#quickView" data-bs-toggle="modal"
                                    class="hover-tooltip tooltip-left box-icon">
                                    <span class="icon icon-view"></span>
                                    <span class="tooltip">Quick view</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="product-badge_list">
                            <li class="product-badge_item h6 trend">Trending</li>
                        </ul>
                        <div class="product-marquee_sale">
                            <div class="marquee-wrapper">
                                <div class="initial-child-container">
                                    <div class="marquee-child-item">
                                        <span class="icon">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z" fill="#FEBD55" />
                                                <path d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z" fill="#FC9E20" />
                                                <path d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z" fill="#E03E3E" />
                                                <path d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z" fill="#FBFBFB" />
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="marquee-child-item">
                                        <p class="text-small">ZAVAI SPECIAL SALE 50% OFF</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-product_info">
                        <a href="#" class="name-product h4 link">ZAVAI Straight Leg Pants</a>
                        <div class="price-wrap">
                            <span class="price-old h6 fw-normal">$79.99</span>
                            <span class="price-new h6">$39.99</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add more products here following the same pattern -->
        </div>
        <div class="sw-dot-default tf-sw-pagination"></div>
    </div>
</div>
                    <div class="tab-pane" id="best-seller" role="tabpanel">
                        <div dir="ltr" class="swiper tf-swiper wrap-sw-over" data-preview="4"
                            data-tablet="3" data-mobile-sm="2" data-mobile="2" data-space-lg="48"
                            data-space-md="30" data-space="12" data-pagination="2" data-pagination-sm="2"
                            data-pagination-md="3" data-pagination-lg="4" data-grid="2">
                            <div class="swiper-wrapper">
                                <!-- Product 1 -->
                                <div class="swiper-slide">
                                    <div class="card-product">
                                        <div class="card-product_wrapper">
                                            <a href="product-detail.html" class="product-img">
                                                <img class="lazyload img-product"
                                                    src="images/products/underwear/product-1.jpg"
                                                    data-src="images/products/underwear/product-1.jpg"
                                                    alt="Product">
                                                <img class="lazyload img-hover"
                                                    src="images/products/underwear/product-2.jpg"
                                                    data-src="images/products/underwear/product-2.jpg"
                                                    alt="Product">
                                            </a>
                                            <ul class="product-action_list">
                                                <li>
                                                    <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                        class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-shopping-cart-simple"></span>
                                                        <span class="tooltip">Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="wishlist">
                                                    <a href="#;" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-heart"></span>
                                                        <span class="tooltip">Add to Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="compare">
                                                    <a href="#compare" data-bs-toggle="offcanvas"
                                                        class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-compare"></span>
                                                        <span class="tooltip">Compare</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#quickView" data-bs-toggle="modal"
                                                        class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-view"></span>
                                                        <span class="tooltip">Quick view</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="product-badge_list">
                                                <li class="product-badge_item h6 sale">20% OFF</li>
                                            </ul>
                                            <div class="product-countdown">
                                                <div class="js-countdown cd-has-zero" data-timer="25472"
                                                    data-labels="d : ,h : ,m : ,s"></div>
                                            </div>
                                        </div>
                                        <div class="card-product_info">
                                            <a href="product-detail.html" class="name-product h4 link">Seamless
                                                breathable thong</a>
                                            <div class="price-wrap">
                                                <span class="price-old h6 fw-normal">$99,99</span>
                                                <span class="price-new h6">$69,99</span>
                                            </div>
                                            <ul class="product-color_list">
                                                <li
                                                    class="product-color-item color-swatch hover-tooltip tooltip-bot active">
                                                    <span class="tooltip color-filter">Sage Green</span>
                                                    <span class="swatch-value bg-sage-green"></span>
                                                    <img class="lazyload"
                                                        src="images/products/underwear/product-1.jpg"
                                                        data-src="images/products/underwear/product-1.jpg"
                                                        alt="Product">
                                                </li>
                                                <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                                    <span class="tooltip color-filter">Light Orange</span>
                                                    <span class="swatch-value bg-tomato"></span>
                                                    <img class="lazyload"
                                                        src="images/products/underwear/product-3.jpg"
                                                        data-src="images/products/underwear/product-3.jpg"
                                                        alt="Product">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product 2 -->
                                <div class="swiper-slide">
                                    <div class="card-product">
                                        <div class="card-product_wrapper">
                                            <a href="product-detail.html" class="product-img">
                                                <img class="lazyload img-product"
                                                    src="images/products/underwear/product-4.jpg"
                                                    data-src="images/products/underwear/product-4.jpg"
                                                    alt="Product">
                                                <img class="lazyload img-hover"
                                                    src="images/products/underwear/product-5.jpg"
                                                    data-src="images/products/underwear/product-5.jpg"
                                                    alt="Product">
                                            </a>
                                            <ul class="product-action_list">
                                                <li>
                                                    <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                        class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-shopping-cart-simple"></span>
                                                        <span class="tooltip">Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="wishlist">
                                                    <a href="#;" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-heart"></span>
                                                        <span class="tooltip">Add to Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="compare">
                                                    <a href="#compare" data-bs-toggle="offcanvas"
                                                        class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-compare"></span>
                                                        <span class="tooltip">Compare</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#quickView" data-bs-toggle="modal"
                                                        class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-view"></span>
                                                        <span class="tooltip">Quick view</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="product-marquee_sale">
                                                <div class="marquee-wrapper">
                                                    <div class="initial-child-container">
                                                        <!-- 1 -->
                                                        <div class="marquee-child-item">
                                                            <span class="icon">
                                                                <svg width="16" height="16"
                                                                    viewBox="0 0 16 16" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                                        fill="#FEBD55" />
                                                                    <path
                                                                        d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                                        fill="#FC9E20" />
                                                                    <path
                                                                        d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                                        fill="#E03E3E" />
                                                                    <path
                                                                        d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                                        fill="#FBFBFB" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <span class="icon">
                                                                <svg width="16" height="16"
                                                                    viewBox="0 0 16 16" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                                        fill="#FEBD55" />
                                                                    <path
                                                                        d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                                        fill="#FC9E20" />
                                                                    <path
                                                                        d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                                        fill="#E03E3E" />
                                                                    <path
                                                                        d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                                        fill="#FBFBFB" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                                        </div>
                                                        <!-- 2 -->
                                                        <div class="marquee-child-item">
                                                            <span class="icon">
                                                                <svg width="16" height="16"
                                                                    viewBox="0 0 16 16" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                                        fill="#FEBD55" />
                                                                    <path
                                                                        d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                                        fill="#FC9E20" />
                                                                    <path
                                                                        d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                                        fill="#E03E3E" />
                                                                    <path
                                                                        d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                                        fill="#FBFBFB" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <span class="icon">
                                                                <svg width="16" height="16"
                                                                    viewBox="0 0 16 16" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                                        fill="#FEBD55" />
                                                                    <path
                                                                        d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                                        fill="#FC9E20" />
                                                                    <path
                                                                        d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                                        fill="#E03E3E" />
                                                                    <path
                                                                        d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                                        fill="#FBFBFB" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                                        </div>
                                                        <!-- 3 -->
                                                        <div class="marquee-child-item">
                                                            <span class="icon">
                                                                <svg width="16" height="16"
                                                                    viewBox="0 0 16 16" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                                        fill="#FEBD55" />
                                                                    <path
                                                                        d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                                        fill="#FC9E20" />
                                                                    <path
                                                                        d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                                        fill="#E03E3E" />
                                                                    <path
                                                                        d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                                        fill="#FBFBFB" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <span class="icon">
                                                                <svg width="16" height="16"
                                                                    viewBox="0 0 16 16" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                                        fill="#FEBD55" />
                                                                    <path
                                                                        d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                                        fill="#FC9E20" />
                                                                    <path
                                                                        d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                                        fill="#E03E3E" />
                                                                    <path
                                                                        d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                                        fill="#FBFBFB" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                                        </div>
                                                        <!-- 4 -->
                                                        <div class="marquee-child-item">
                                                            <span class="icon">
                                                                <svg width="16" height="16"
                                                                    viewBox="0 0 16 16" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                                        fill="#FEBD55" />
                                                                    <path
                                                                        d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                                        fill="#FC9E20" />
                                                                    <path
                                                                        d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                                        fill="#E03E3E" />
                                                                    <path
                                                                        d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                                        fill="#FBFBFB" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <span class="icon">
                                                                <svg width="16" height="16"
                                                                    viewBox="0 0 16 16" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                                        fill="#FEBD55" />
                                                                    <path
                                                                        d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                                        fill="#FC9E20" />
                                                                    <path
                                                                        d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                                        fill="#E03E3E" />
                                                                    <path
                                                                        d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                                        fill="#FBFBFB" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                                        </div>
                                                        <!-- 5 -->
                                                        <div class="marquee-child-item">
                                                            <span class="icon">
                                                                <svg width="16" height="16"
                                                                    viewBox="0 0 16 16" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                                        fill="#FEBD55" />
                                                                    <path
                                                                        d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                                        fill="#FC9E20" />
                                                                    <path
                                                                        d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                                        fill="#E03E3E" />
                                                                    <path
                                                                        d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                                        fill="#FBFBFB" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <span class="icon">
                                                                <svg width="16" height="16"
                                                                    viewBox="0 0 16 16" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                                        fill="#FEBD55" />
                                                                    <path
                                                                        d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                                        fill="#FC9E20" />
                                                                    <path
                                                                        d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                                        fill="#E03E3E" />
                                                                    <path
                                                                        d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                                        fill="#FBFBFB" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-product_info">
                                            <a href="product-detail.html" class="name-product h4 link">Cotton high
                                                waisted panties</a>
                                            <div class="price-wrap">
                                                <span class="price-old h6 fw-normal"> $89,99</span>
                                                <span class="price-new h6">$59,99</span>
                                            </div>
                                            <ul class="product-color_list">
                                                <li
                                                    class="product-color-item color-swatch hover-tooltip tooltip-bot active">
                                                    <span class="tooltip color-filter">Beige</span>
                                                    <span class="swatch-value bg-light-beige"></span>
                                                    <img class="lazyload"
                                                        src="images/products/underwear/product-4.jpg"
                                                        data-src="images/products/underwear/product-4.jpg"
                                                        alt="Product">
                                                </li>
                                                <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                                    <span class="tooltip color-filter">Dark</span>
                                                    <span class="swatch-value bg-dark-charcoal"></span>
                                                    <img class="lazyload"
                                                        src="images/products/underwear/product-6.jpg"
                                                        data-src="images/products/underwear/product-6.jpg"
                                                        alt="Product">
                                                </li>
                                                <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                                    <span class="tooltip color-filter">Green</span>
                                                    <span class="swatch-value bg-dark-jade"></span>
                                                    <img class="lazyload"
                                                        src="images/products/underwear/product-7.jpg"
                                                        data-src="images/products/underwear/product-7.jpg"
                                                        alt="Product">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product 3 -->
                                <div class="swiper-slide">
                                    <div class="card-product">
                                        <div class="card-product_wrapper">
                                            <a href="product-detail.html" class="product-img">
                                                <img class="lazyload img-product"
                                                    src="images/products/underwear/product-8.jpg"
                                                    data-src="images/products/underwear/product-8.jpg"
                                                    alt="Product">
                                                <img class="lazyload img-hover"
                                                    src="images/products/underwear/product-9.jpg"
                                                    data-src="images/products/underwear/product-9.jpg"
                                                    alt="Product">
                                            </a>
                                            <div class="variant-box">
                                                <ul class="product-size_list">
                                                    <li class="size-item h6">XS</li>
                                                    <li class="size-item h6">S</li>
                                                    <li class="size-item h6">M</li>
                                                </ul>
                                            </div>
                                            <ul class="product-action_list">
                                                <li>
                                                    <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                        class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-shopping-cart-simple"></span>
                                                        <span class="tooltip">Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="wishlist">
                                                    <a href="#;" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-heart"></span>
                                                        <span class="tooltip">Add to Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="compare">
                                                    <a href="#compare" data-bs-toggle="offcanvas"
                                                        class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-compare"></span>
                                                        <span class="tooltip">Compare</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#quickView" data-bs-toggle="modal"
                                                        class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-view"></span>
                                                        <span class="tooltip">Quick view</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="product-badge_list">
                                                <li class="product-badge_item h6 hot">Hot</li>
                                            </ul>
                                            <div class="product-marquee_sale">
                                                <div class="marquee-wrapper">
                                                    <div class="initial-child-container">
                                                        <!-- 1 -->
                                                        <div class="marquee-child-item">
                                                            <span class="icon">
                                                                <svg width="16" height="16"
                                                                    viewBox="0 0 16 16" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                                        fill="#FEBD55" />
                                                                    <path
                                                                        d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                                        fill="#FC9E20" />
                                                                    <path
                                                                        d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                                        fill="#E03E3E" />
                                                                    <path
                                                                        d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                                        fill="#FBFBFB" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <span class="icon">
                                                                <svg width="16" height="16"
                                                                    viewBox="0 0 16 16" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                                        fill="#FEBD55" />
                                                                    <path
                                                                        d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                                        fill="#FC9E20" />
                                                                    <path
                                                                        d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                                        fill="#E03E3E" />
                                                                    <path
                                                                        d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                                        fill="#FBFBFB" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                                        </div>
                                                        <!-- 2 -->
                                                        <div class="marquee-child-item">
                                                            <span class="icon">
                                                                <svg width="16" height="16"
                                                                    viewBox="0 0 16 16" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                                        fill="#FEBD55" />
                                                                    <path
                                                                        d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                                        fill="#FC9E20" />
                                                                    <path
                                                                        d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                                        fill="#E03E3E" />
                                                                    <path
                                                                        d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                                        fill="#FBFBFB" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <span class="icon">
                                                                <svg width="16" height="16"
                                                                    viewBox="0 0 16 16" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                                        fill="#FEBD55" />
                                                                    <path
                                                                        d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                                        fill="#FC9E20" />
                                                                    <path
                                                                        d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                                        fill="#E03E3E" />
                                                                    <path
                                                                        d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                                        fill="#FBFBFB" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                                        </div>
                                                        <!-- 3 -->
                                                        <div class="marquee-child-item">
                                                            <span class="icon">
                                                                <svg width="16" height="16"
                                                                    viewBox="0 0 16 16" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                                        fill="#FEBD55" />
                                                                    <path
                                                                        d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                                        fill="#FC9E20" />
                                                                    <path
                                                                        d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                                        fill="#E03E3E" />
                                                                    <path
                                                                        d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                                        fill="#FBFBFB" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <span class="icon">
                                                                <svg width="16" height="16"
                                                                    viewBox="0 0 16 16" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                                        fill="#FEBD55" />
                                                                    <path
                                                                        d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                                        fill="#FC9E20" />
                                                                    <path
                                                                        d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                                        fill="#E03E3E" />
                                                                    <path
                                                                        d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                                        fill="#FBFBFB" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                                        </div>
                                                        <!-- 4 -->
                                                        <div class="marquee-child-item">
                                                            <span class="icon">
                                                                <svg width="16" height="16"
                                                                    viewBox="0 0 16 16" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                                        fill="#FEBD55" />
                                                                    <path
                                                                        d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                                        fill="#FC9E20" />
                                                                    <path
                                                                        d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                                        fill="#E03E3E" />
                                                                    <path
                                                                        d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                                        fill="#FBFBFB" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <span class="icon">
                                                                <svg width="16" height="16"
                                                                    viewBox="0 0 16 16" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                                        fill="#FEBD55" />
                                                                    <path
                                                                        d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                                        fill="#FC9E20" />
                                                                    <path
                                                                        d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                                        fill="#E03E3E" />
                                                                    <path
                                                                        d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                                        fill="#FBFBFB" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                                        </div>
                                                        <!-- 5 -->
                                                        <div class="marquee-child-item">
                                                            <span class="icon">
                                                                <svg width="16" height="16"
                                                                    viewBox="0 0 16 16" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                                        fill="#FEBD55" />
                                                                    <path
                                                                        d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                                        fill="#FC9E20" />
                                                                    <path
                                                                        d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                                        fill="#E03E3E" />
                                                                    <path
                                                                        d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                                        fill="#FBFBFB" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <span class="icon">
                                                                <svg width="16" height="16"
                                                                    viewBox="0 0 16 16" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                                        fill="#FEBD55" />
                                                                    <path
                                                                        d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                                        fill="#FC9E20" />
                                                                    <path
                                                                        d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                                        fill="#E03E3E" />
                                                                    <path
                                                                        d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                                        fill="#FBFBFB" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-product_info">
                                            <a href="product-detail.html" class="name-product h4 link">Sexy lace
                                                panties</a>
                                            <div class="price-wrap">
                                                <span class="price-old h6 fw-normal">$79,99</span>
                                                <span class="price-new h6">$49,99</span>
                                            </div>
                                            <ul class="product-color_list">
                                                <li
                                                    class="product-color-item color-swatch hover-tooltip tooltip-bot active">
                                                    <span class="tooltip color-filter">Dusty Olive</span>
                                                    <span class="swatch-value bg-dusty-olive"></span>
                                                    <img class="lazyload"
                                                        src="images/products/underwear/product-8.jpg"
                                                        data-src="images/products/underwear/product-8.jpg"
                                                        alt="Product">
                                                </li>
                                                <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                                    <span class="tooltip color-filter">Light Orange</span>
                                                    <span class="swatch-value bg-tomato"></span>
                                                    <img class="lazyload"
                                                        src="images/products/underwear/product-10.jpg"
                                                        data-src="images/products/underwear/product-10.jpg"
                                                        alt="Product">
                                                </li>
                                                <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                                    <span class="tooltip color-filter">Green</span>
                                                    <span class="swatch-value bg-dark-jade"></span>
                                                    <img class="lazyload"
                                                        src="images/products/underwear/product-11.jpg"
                                                        data-src="images/products/underwear/product-11.jpg"
                                                        alt="Product">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product 4 -->
                                <div class="swiper-slide">
                                    <div class="card-product">
                                        <div class="card-product_wrapper">
                                            <a href="product-detail.html" class="product-img">
                                                <img class="lazyload img-product"
                                                    src="images/products/underwear/product-12.jpg"
                                                    data-src="images/products/underwear/product-12.jpg"
                                                    alt="Product">
                                                <img class="lazyload img-hover"
                                                    src="images/products/underwear/product-13.jpg"
                                                    data-src="images/products/underwear/product-13.jpg"
                                                    alt="Product">
                                            </a>
                                            <ul class="product-action_list">
                                                <li>
                                                    <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                        class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-shopping-cart-simple"></span>
                                                        <span class="tooltip">Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="wishlist">
                                                    <a href="#;" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-heart"></span>
                                                        <span class="tooltip">Add to Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="compare">
                                                    <a href="#compare" data-bs-toggle="offcanvas"
                                                        class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-compare"></span>
                                                        <span class="tooltip">Compare</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#quickView" data-bs-toggle="modal"
                                                        class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-view"></span>
                                                        <span class="tooltip">Quick view</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="product-countdown">
                                                <div class="js-countdown cd-has-zero" data-timer="25472"
                                                    data-labels="d : ,h : ,m : ,s"></div>
                                            </div>
                                        </div>
                                        <div class="card-product_info">
                                            <a href="product-detail.html" class="name-product h4 link">Seamless
                                                underwear</a>
                                            <div class="price-wrap">
                                                <span class="price-old h6 fw-normal">$109,99</span>
                                                <span class="price-new h6">$74,99</span>
                                            </div>
                                            <ul class="product-color_list">
                                                <li
                                                    class="product-color-item color-swatch hover-tooltip tooltip-bot active">
                                                    <span class="tooltip color-filter">Green</span>
                                                    <span class="swatch-value bg-dark-jade"></span>
                                                    <img class="lazyload"
                                                        src="images/products/underwear/product-12.jpg"
                                                        data-src="images/products/underwear/product-12.jpg"
                                                        alt="Product">
                                                </li>
                                                <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                                    <span class="tooltip color-filter">Dusty Olive</span>
                                                    <span class="swatch-value bg-dusty-olive"></span>
                                                    <img class="lazyload"
                                                        src="images/products/underwear/product-14.jpg"
                                                        data-src="images/products/underwear/product-14.jpg"
                                                        alt="Product">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product 5 -->
                                <div class="swiper-slide">
                                    <div class="card-product">
                                        <div class="card-product_wrapper">
                                            <a href="product-detail.html" class="product-img">
                                                <img class="lazyload img-product"
                                                    src="images/products/underwear/product-15.jpg"
                                                    data-src="images/products/underwear/product-15.jpg"
                                                    alt="Product">
                                                <img class="lazyload img-hover"
                                                    src="images/products/underwear/product-16.jpg"
                                                    data-src="images/products/underwear/product-16.jpg"
                                                    alt="Product">
                                            </a>
                                            <div class="variant-box">
                                                <ul class="product-size_list">
                                                    <li class="size-item h6">XS</li>
                                                    <li class="size-item h6">M</li>
                                                </ul>
                                            </div>
                                            <ul class="product-action_list">
                                                <li>
                                                    <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                        class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-shopping-cart-simple"></span>
                                                        <span class="tooltip">Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="wishlist">
                                                    <a href="#;" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-heart"></span>
                                                        <span class="tooltip">Add to Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="compare">
                                                    <a href="#compare" data-bs-toggle="offcanvas"
                                                        class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-compare"></span>
                                                        <span class="tooltip">Compare</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#quickView" data-bs-toggle="modal"
                                                        class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-view"></span>
                                                        <span class="tooltip">Quick view</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="product-badge_list">
                                                <li class="product-badge_item flash-sale"><i
                                                        class="icon icon-thunder"></i> Flash sale</li>
                                            </ul>
                                        </div>
                                        <div class="card-product_info">
                                            <a href="product-detail.html" class="name-product h4 link">Half sleeve
                                                crop top</a>
                                            <div class="price-wrap">
                                                <span class="price-old h6 fw-normal">$119,99</span>
                                                <span class="price-new h6">$84,99</span>
                                            </div>
                                            <ul class="product-color_list">
                                                <li
                                                    class="product-color-item color-swatch hover-tooltip tooltip-bot active">
                                                    <span class="tooltip color-filter">White</span>
                                                    <span class="swatch-value bg-white"></span>
                                                    <img class="lazyload"
                                                        src="images/products/underwear/product-15.jpg"
                                                        data-src="images/products/underwear/product-15.jpg"
                                                        alt="Product">
                                                </li>
                                                <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                                    <span class="tooltip color-filter">Light Orange</span>
                                                    <span class="swatch-value bg-tomato"></span>
                                                    <img class="lazyload"
                                                        src="images/products/underwear/product-17.jpg"
                                                        data-src="images/products/underwear/product-17.jpg"
                                                        alt="Product">
                                                </li>
                                                <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                                    <span class="tooltip color-filter">Dark</span>
                                                    <span class="swatch-value bg-dark-charcoal"></span>
                                                    <img class="lazyload"
                                                        src="images/products/underwear/product-18.jpg"
                                                        data-src="images/products/underwear/product-18.jpg"
                                                        alt="Product">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product 6 -->
                                <div class="swiper-slide">
                                    <div class="card-product">
                                        <div class="card-product_wrapper">
                                            <a href="product-detail.html" class="product-img">
                                                <img class="lazyload img-product"
                                                    src="images/products/underwear/product-19.jpg"
                                                    data-src="images/products/underwear/product-19.jpg"
                                                    alt="Product">
                                                <img class="lazyload img-hover"
                                                    src="images/products/underwear/product-20.jpg"
                                                    data-src="images/products/underwear/product-20.jpg"
                                                    alt="Product">
                                            </a>
                                            <ul class="product-action_list">
                                                <li>
                                                    <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                        class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-shopping-cart-simple"></span>
                                                        <span class="tooltip">Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="wishlist">
                                                    <a href="#;" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-heart"></span>
                                                        <span class="tooltip">Add to Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="compare">
                                                    <a href="#compare" data-bs-toggle="offcanvas"
                                                        class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-compare"></span>
                                                        <span class="tooltip">Compare</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#quickView" data-bs-toggle="modal"
                                                        class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-view"></span>
                                                        <span class="tooltip">Quick view</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="product-badge_list">
                                                <li class="product-badge_item h6 limit">Limited</li>
                                            </ul>
                                        </div>
                                        <div class="card-product_info">
                                            <a href="product-detail.html" class="name-product h4 link">Elastic waist
                                                panties</a>
                                            <div class="price-wrap">
                                                <span class="price-old h6 fw-normal">$139,99</span>
                                                <span class="price-new h6">$94,99</span>
                                            </div>
                                            <ul class="product-color_list">
                                                <li
                                                    class="product-color-item color-swatch hover-tooltip tooltip-bot active">
                                                    <span class="tooltip color-filter">Beige</span>
                                                    <span class="swatch-value bg-light-beige"></span>
                                                    <img class="lazyload"
                                                        src="images/products/underwear/product-19.jpg"
                                                        data-src="images/products/underwear/product-19.jpg"
                                                        alt="Product">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product 7 -->
                                <div class="swiper-slide">
                                    <div class="card-product">
                                        <div class="card-product_wrapper">
                                            <a href="product-detail.html" class="product-img">
                                                <img class="lazyload img-product"
                                                    src="images/products/underwear/product-21.jpg"
                                                    data-src="images/products/underwear/product-21.jpg"
                                                    alt="Product">
                                                <img class="lazyload img-hover"
                                                    src="images/products/underwear/product-22.jpg"
                                                    data-src="images/products/underwear/product-22.jpg"
                                                    alt="Product">
                                            </a>
                                            <div class="variant-box">
                                                <ul class="product-size_list">
                                                    <li class="size-item h6">XS</li>
                                                    <li class="size-item h6">S</li>
                                                    <li class="size-item h6">M</li>
                                                </ul>
                                            </div>
                                            <ul class="product-action_list">
                                                <li>
                                                    <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                        class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-shopping-cart-simple"></span>
                                                        <span class="tooltip">Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="wishlist">
                                                    <a href="#;" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-heart"></span>
                                                        <span class="tooltip">Add to Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="compare">
                                                    <a href="#compare" data-bs-toggle="offcanvas"
                                                        class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-compare"></span>
                                                        <span class="tooltip">Compare</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#quickView" data-bs-toggle="modal"
                                                        class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-view"></span>
                                                        <span class="tooltip">Quick view</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="product-badge_list">
                                                <li class="product-badge_item h6 new">New arrival</li>
                                            </ul>
                                            <div class="product-marquee_sale">
                                                <div class="marquee-wrapper">
                                                    <div class="initial-child-container">
                                                        <!-- 1 -->
                                                        <div class="marquee-child-item">
                                                            <span class="icon">
                                                                <svg width="16" height="16"
                                                                    viewBox="0 0 16 16" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                                        fill="#FEBD55" />
                                                                    <path
                                                                        d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                                        fill="#FC9E20" />
                                                                    <path
                                                                        d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                                        fill="#E03E3E" />
                                                                    <path
                                                                        d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                                        fill="#FBFBFB" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <span class="icon">
                                                                <svg width="16" height="16"
                                                                    viewBox="0 0 16 16" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                                        fill="#FEBD55" />
                                                                    <path
                                                                        d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                                        fill="#FC9E20" />
                                                                    <path
                                                                        d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                                        fill="#E03E3E" />
                                                                    <path
                                                                        d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                                        fill="#FBFBFB" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                                        </div>
                                                        <!-- 2 -->
                                                        <div class="marquee-child-item">
                                                            <span class="icon">
                                                                <svg width="16" height="16"
                                                                    viewBox="0 0 16 16" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                                        fill="#FEBD55" />
                                                                    <path
                                                                        d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                                        fill="#FC9E20" />
                                                                    <path
                                                                        d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                                        fill="#E03E3E" />
                                                                    <path
                                                                        d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                                        fill="#FBFBFB" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <span class="icon">
                                                                <svg width="16" height="16"
                                                                    viewBox="0 0 16 16" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                                        fill="#FEBD55" />
                                                                    <path
                                                                        d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                                        fill="#FC9E20" />
                                                                    <path
                                                                        d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                                        fill="#E03E3E" />
                                                                    <path
                                                                        d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                                        fill="#FBFBFB" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                                        </div>
                                                        <!-- 3 -->
                                                        <div class="marquee-child-item">
                                                            <span class="icon">
                                                                <svg width="16" height="16"
                                                                    viewBox="0 0 16 16" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                                        fill="#FEBD55" />
                                                                    <path
                                                                        d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                                        fill="#FC9E20" />
                                                                    <path
                                                                        d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                                        fill="#E03E3E" />
                                                                    <path
                                                                        d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                                        fill="#FBFBFB" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <span class="icon">
                                                                <svg width="16" height="16"
                                                                    viewBox="0 0 16 16" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                                        fill="#FEBD55" />
                                                                    <path
                                                                        d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                                        fill="#FC9E20" />
                                                                    <path
                                                                        d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                                        fill="#E03E3E" />
                                                                    <path
                                                                        d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                                        fill="#FBFBFB" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                                        </div>
                                                        <!-- 4 -->
                                                        <div class="marquee-child-item">
                                                            <span class="icon">
                                                                <svg width="16" height="16"
                                                                    viewBox="0 0 16 16" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                                        fill="#FEBD55" />
                                                                    <path
                                                                        d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                                        fill="#FC9E20" />
                                                                    <path
                                                                        d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                                        fill="#E03E3E" />
                                                                    <path
                                                                        d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                                        fill="#FBFBFB" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <span class="icon">
                                                                <svg width="16" height="16"
                                                                    viewBox="0 0 16 16" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                                        fill="#FEBD55" />
                                                                    <path
                                                                        d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                                        fill="#FC9E20" />
                                                                    <path
                                                                        d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                                        fill="#E03E3E" />
                                                                    <path
                                                                        d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                                        fill="#FBFBFB" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                                        </div>
                                                        <!-- 5 -->
                                                        <div class="marquee-child-item">
                                                            <span class="icon">
                                                                <svg width="16" height="16"
                                                                    viewBox="0 0 16 16" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                                        fill="#FEBD55" />
                                                                    <path
                                                                        d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                                        fill="#FC9E20" />
                                                                    <path
                                                                        d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                                        fill="#E03E3E" />
                                                                    <path
                                                                        d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                                        fill="#FBFBFB" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <span class="icon">
                                                                <svg width="16" height="16"
                                                                    viewBox="0 0 16 16" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                                        fill="#FEBD55" />
                                                                    <path
                                                                        d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                                        fill="#FC9E20" />
                                                                    <path
                                                                        d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                                        fill="#E03E3E" />
                                                                    <path
                                                                        d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                                        fill="#FBFBFB" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-product_info">
                                            <a href="product-detail.html" class="name-product h4 link">Seamless
                                                breathable thong</a>
                                            <div class="price-wrap">
                                                <span class="price-old h6 fw-normal">$69,99</span>
                                                <span class="price-new h6">$44,99</span>
                                            </div>
                                            <ul class="product-color_list">
                                                <li
                                                    class="product-color-item color-swatch hover-tooltip tooltip-bot active">
                                                    <span class="tooltip color-filter">Purple</span>
                                                    <span class="swatch-value bg-light-purple"></span>
                                                    <img class="lazyload"
                                                        src="images/products/underwear/product-21.jpg"
                                                        data-src="images/products/underwear/product-21.jpg"
                                                        alt="Product">
                                                </li>
                                                <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                                    <span class="tooltip color-filter">Dark Violet</span>
                                                    <span class="swatch-value bg-muted-violet"></span>
                                                    <img class="lazyload"
                                                        src="images/products/underwear/product-23.jpg"
                                                        data-src="images/products/underwear/product-23.jpg"
                                                        alt="Product">
                                                </li>
                                                <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                                    <span class="tooltip color-filter">Sage Green</span>
                                                    <span class="swatch-value bg-sage-green"></span>
                                                    <img class="lazyload"
                                                        src="images/products/underwear/product-24.jpg"
                                                        data-src="images/products/underwear/product-24.jpg"
                                                        alt="Product">
                                                </li>
                                                <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                                    <span class="tooltip color-filter">Hot Pink</span>
                                                    <span class="swatch-value bg-hot-pink"></span>
                                                    <img class="lazyload"
                                                        src="images/products/underwear/product-25.jpg"
                                                        data-src="images/products/underwear/product-25.jpg"
                                                        alt="Product">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product 8 -->
                                <div class="swiper-slide">
                                    <div class="card-product">
                                        <div class="card-product_wrapper">
                                            <a href="product-detail.html" class="product-img">
                                                <img class="lazyload img-product"
                                                    src="images/products/underwear/product-26.jpg"
                                                    data-src="images/products/underwear/product-26.jpg"
                                                    alt="Product">
                                                <img class="lazyload img-hover"
                                                    src="images/products/underwear/product-27.jpg"
                                                    data-src="images/products/underwear/product-27.jpg"
                                                    alt="Product">
                                            </a>
                                            <ul class="product-action_list">
                                                <li>
                                                    <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                        class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-shopping-cart-simple"></span>
                                                        <span class="tooltip">Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="wishlist">
                                                    <a href="#;" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-heart"></span>
                                                        <span class="tooltip">Add to Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="compare">
                                                    <a href="#compare" data-bs-toggle="offcanvas"
                                                        class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-compare"></span>
                                                        <span class="tooltip">Compare</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#quickView" data-bs-toggle="modal"
                                                        class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-view"></span>
                                                        <span class="tooltip">Quick view</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="variant-box">
                                                <ul class="product-size_list">
                                                    <li class="size-item h6">XS</li>
                                                    <li class="size-item h6">S</li>
                                                    <li class="size-item h6">M</li>
                                                    <li class="size-item h6">L</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-product_info">
                                            <a href="product-detail.html" class="name-product h4 link">Cotton high
                                                waisted panties</a>
                                            <div class="price-wrap">
                                                <span class="price-old h6 fw-normal">$129,99</span>
                                                <span class="price-new h6">$89,99</span>
                                            </div>
                                            <ul class="product-color_list">
                                                <li
                                                    class="product-color-item color-swatch hover-tooltip tooltip-bot active">
                                                    <span class="tooltip color-filter">Dark</span>
                                                    <span class="swatch-value bg-dark-charcoal"></span>
                                                    <img class="lazyload"
                                                        src="images/products/underwear/product-26.jpg"
                                                        data-src="images/products/underwear/product-26.jpg"
                                                        alt="Product">
                                                </li>
                                                <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                                    <span class="tooltip color-filter">Purple</span>
                                                    <span class="swatch-value bg-light-purple"></span>
                                                    <img class="lazyload"
                                                        src="images/products/underwear/product-28.jpg"
                                                        data-src="images/products/underwear/product-28.jpg"
                                                        alt="Product">
                                                </li>
                                                <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                                    <span class="tooltip color-filter">Sage Green</span>
                                                    <span class="swatch-value bg-sage-green"></span>
                                                    <img class="lazyload"
                                                        src="images/products/underwear/product-29.jpg"
                                                        data-src="images/products/underwear/product-29.jpg"
                                                        alt="Product">
                                                </li>
                                                <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                                    <span class="tooltip color-filter">White</span>
                                                    <span class="swatch-value bg-white"></span>
                                                    <img class="lazyload"
                                                        src="images/products/underwear/product-30.jpg"
                                                        data-src="images/products/underwear/product-30.jpg"
                                                        alt="Product">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sw-dot-default tf-sw-pagination"></div>
                        </div>
                    </div>
                    <div class="tab-pane" id="on-sale" role="tabpanel">
                        <div dir="ltr" class="swiper tf-swiper wrap-sw-over" data-preview="4"
                            data-tablet="3" data-mobile-sm="2" data-mobile="2" data-space-lg="48"
                            data-space-md="30" data-space="12" data-pagination="2" data-pagination-sm="2"
                            data-pagination-md="3" data-pagination-lg="4" data-grid="2">
                            <div class="swiper-wrapper">
                                <!-- Product 1 -->
                                <div class="swiper-slide">
                                    <div class="card-product">
                                        <div class="card-product_wrapper">
                                            <a href="product-detail.html" class="product-img">
                                                <img class="lazyload img-product"
                                                    src="images/products/product-1.jpg"
                                                    data-src="images/products/product-1.jpg" alt="Product">
                                                <img class="lazyload img-hover" src="images/products/product-2.jpg"
                                                    data-src="images/products/product-2.jpg" alt="Product">
                                            </a>
                                            <div class="variant-box">
                                                <ul class="product-size_list">
                                                    <li class="size-item h6">XS</li>
                                                    <li class="size-item h6">S</li>
                                                    <li class="size-item h6">M</li>
                                                </ul>
                                            </div>
                                            <ul class="product-action_list">
                                                <li>
                                                    <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                        class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-shopping-cart-simple"></span>
                                                        <span class="tooltip">Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="wishlist">
                                                    <a href="#;" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-heart"></span>
                                                        <span class="tooltip">Add to Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="compare">
                                                    <a href="#compare" data-bs-toggle="offcanvas"
                                                        class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-compare"></span>
                                                        <span class="tooltip">Compare</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#quickView" data-bs-toggle="modal"
                                                        class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-view"></span>
                                                        <span class="tooltip">Quick view</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="product-badge_list">
                                                <li class="product-badge_item h6 hot">Hot</li>
                                            </ul>
                                        </div>
                                        <div class="card-product_info">
                                            <a href="product-detail.html" class="name-product h4 link">Summer Two
                                                Piece Set</a>
                                            <div class="price-wrap">
                                                <span class="price-old h6 fw-normal">$99,99</span>
                                                <span class="price-new h6">$69,99</span>
                                            </div>
                                            <ul class="product-color_list">
                                                <li
                                                    class="product-color-item color-swatch hover-tooltip tooltip-bot active">
                                                    <span class="tooltip color-filter">Brown</span>
                                                    <span class="swatch-value bg-light-brown"></span>
                                                    <img src="images/products/product-1.jpg"
                                                        data-src="images/products/product-1.jpg" alt="Image">
                                                </li>
                                                <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                                    <span class="tooltip color-filter">Blue</span>
                                                    <span class="swatch-value bg-baby-blue"></span>
                                                    <img src="images/products/product-4.jpg"
                                                        data-src="images/products/product-4.jpg" alt="Image">
                                                </li>
                                                <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                                    <span class="tooltip color-filter">Orange</span>
                                                    <span class="swatch-value bg-vivid-orange"></span>
                                                    <img src="images/products/product-3.jpg"
                                                        data-src="images/products/product-3.jpg" alt="Image">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product 2 -->
                                <div class="swiper-slide">
                                    <div class="card-product">
                                        <div class="card-product_wrapper">
                                            <a href="product-detail.html" class="product-img">
                                                <img class="lazyload img-product"
                                                    src="images/products/product-7.jpg"
                                                    data-src="images/products/product-7.jpg" alt="Product">
                                                <img class="lazyload img-hover" src="images/products/product-8.jpg"
                                                    data-src="images/products/product-8.jpg" alt="Product">
                                            </a>
                                            <ul class="product-action_list">
                                                <li>
                                                    <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                        class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-shopping-cart-simple"></span>
                                                        <span class="tooltip">Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="wishlist">
                                                    <a href="#;" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-heart"></span>
                                                        <span class="tooltip">Add to Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="compare">
                                                    <a href="#compare" data-bs-toggle="offcanvas"
                                                        class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-compare"></span>
                                                        <span class="tooltip">Compare</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#quickView" data-bs-toggle="modal"
                                                        class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-view"></span>
                                                        <span class="tooltip">Quick view</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="product-badge_list">
                                                <li class="product-badge_item flash-sale"><i
                                                        class="icon icon-thunder"></i> Flash sale</li>
                                            </ul>
                                            <div class="product-countdown">
                                                <div class="js-countdown cd-has-zero" data-timer="25472"
                                                    data-labels="d : ,h : ,m : ,s"></div>
                                            </div>
                                        </div>
                                        <div class="card-product_info">
                                            <a href="product-detail.html" class="name-product h4 link">Nike
                                                Sportswear Tee Shirts</a>
                                            <div class="price-wrap">
                                                <span class="price-old h6 fw-normal">$99,99</span>
                                                <span class="price-new h6">$69,99</span>
                                            </div>
                                            <ul class="product-color_list">
                                                <li
                                                    class="product-color-item color-swatch hover-tooltip tooltip-bot active">
                                                    <span class="tooltip color-filter">Pink</span>
                                                    <span class="swatch-value bg-hot-pink"></span>
                                                    <img src="images/products/product-7.jpg"
                                                        data-src="images/products/product-7.jpg" alt="Image">
                                                </li>
                                                <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                                    <span class="tooltip color-filter">Geige</span>
                                                    <span class="swatch-value bg-light-beige"></span>
                                                    <img src="images/products/product-9.jpg"
                                                        data-src="images/products/product-9.jpg" alt="Image">
                                                </li>
                                                <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                                    <span class="tooltip color-filter">Olive</span>
                                                    <span class="swatch-value bg-dusty-olive"></span>
                                                    <img src="images/products/product-11.jpg"
                                                        data-src="images/products/product-11.jpg" alt="Image">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product 3 -->
                                <div class="swiper-slide">
                                    <div class="card-product">
                                        <div class="card-product_wrapper">
                                            <a href="product-detail.html" class="product-img">
                                                <img class="lazyload img-product"
                                                    src="images/products/product-13.jpg"
                                                    data-src="images/products/product-13.jpg" alt="Product">
                                                <img class="lazyload img-hover" src="images/products/product-14.jpg"
                                                    data-src="images/products/product-14.jpg" alt="Product">
                                            </a>
                                            <ul class="product-action_list">
                                                <li>
                                                    <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                        class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-shopping-cart-simple"></span>
                                                        <span class="tooltip">Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="wishlist">
                                                    <a href="#;" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-heart"></span>
                                                        <span class="tooltip">Add to Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="compare">
                                                    <a href="#compare" data-bs-toggle="offcanvas"
                                                        class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-compare"></span>
                                                        <span class="tooltip">Compare</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#quickView" data-bs-toggle="modal"
                                                        class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-view"></span>
                                                        <span class="tooltip">Quick view</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="product-badge_list">
                                                <li class="product-badge_item h6 trend">Trending</li>
                                            </ul>
                                            <div class="product-marquee_sale">
                                                <div class="marquee-wrapper">
                                                    <div class="initial-child-container">
                                                        <!-- 1 -->
                                                        <div class="marquee-child-item">
                                                            <span class="icon">
                                                                <svg width="16" height="16"
                                                                    viewBox="0 0 16 16" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                                        fill="#FEBD55" />
                                                                    <path
                                                                        d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                                        fill="#FC9E20" />
                                                                    <path
                                                                        d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                                        fill="#E03E3E" />
                                                                    <path
                                                                        d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                                        fill="#FBFBFB" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <span class="icon">
                                                                <svg width="16" height="16"
                                                                    viewBox="0 0 16 16" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                                        fill="#FEBD55" />
                                                                    <path
                                                                        d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                                        fill="#FC9E20" />
                                                                    <path
                                                                        d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                                        fill="#E03E3E" />
                                                                    <path
                                                                        d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                                        fill="#FBFBFB" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                                        </div>
                                                        <!-- 2 -->
                                                        <div class="marquee-child-item">
                                                            <span class="icon">
                                                                <svg width="16" height="16"
                                                                    viewBox="0 0 16 16" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                                        fill="#FEBD55" />
                                                                    <path
                                                                        d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                                        fill="#FC9E20" />
                                                                    <path
                                                                        d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                                        fill="#E03E3E" />
                                                                    <path
                                                                        d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                                        fill="#FBFBFB" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <span class="icon">
                                                                <svg width="16" height="16"
                                                                    viewBox="0 0 16 16" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                                        fill="#FEBD55" />
                                                                    <path
                                                                        d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                                        fill="#FC9E20" />
                                                                    <path
                                                                        d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                                        fill="#E03E3E" />
                                                                    <path
                                                                        d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                                        fill="#FBFBFB" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                                        </div>
                                                        <!-- 3 -->
                                                        <div class="marquee-child-item">
                                                            <span class="icon">
                                                                <svg width="16" height="16"
                                                                    viewBox="0 0 16 16" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                                        fill="#FEBD55" />
                                                                    <path
                                                                        d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                                        fill="#FC9E20" />
                                                                    <path
                                                                        d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                                        fill="#E03E3E" />
                                                                    <path
                                                                        d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                                        fill="#FBFBFB" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <span class="icon">
                                                                <svg width="16" height="16"
                                                                    viewBox="0 0 16 16" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                                        fill="#FEBD55" />
                                                                    <path
                                                                        d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                                        fill="#FC9E20" />
                                                                    <path
                                                                        d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                                        fill="#E03E3E" />
                                                                    <path
                                                                        d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                                        fill="#FBFBFB" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                                        </div>
                                                        <!-- 4 -->
                                                        <div class="marquee-child-item">
                                                            <span class="icon">
                                                                <svg width="16" height="16"
                                                                    viewBox="0 0 16 16" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                                        fill="#FEBD55" />
                                                                    <path
                                                                        d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                                        fill="#FC9E20" />
                                                                    <path
                                                                        d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                                        fill="#E03E3E" />
                                                                    <path
                                                                        d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                                        fill="#FBFBFB" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <span class="icon">
                                                                <svg width="16" height="16"
                                                                    viewBox="0 0 16 16" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                                        fill="#FEBD55" />
                                                                    <path
                                                                        d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                                        fill="#FC9E20" />
                                                                    <path
                                                                        d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                                        fill="#E03E3E" />
                                                                    <path
                                                                        d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                                        fill="#FBFBFB" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                                        </div>
                                                        <!-- 5 -->
                                                        <div class="marquee-child-item">
                                                            <span class="icon">
                                                                <svg width="16" height="16"
                                                                    viewBox="0 0 16 16" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                                        fill="#FEBD55" />
                                                                    <path
                                                                        d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                                        fill="#FC9E20" />
                                                                    <path
                                                                        d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                                        fill="#E03E3E" />
                                                                    <path
                                                                        d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                                        fill="#FBFBFB" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <span class="icon">
                                                                <svg width="16" height="16"
                                                                    viewBox="0 0 16 16" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                                        fill="#FEBD55" />
                                                                    <path
                                                                        d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                                        fill="#FC9E20" />
                                                                    <path
                                                                        d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                                        fill="#E03E3E" />
                                                                    <path
                                                                        d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                                        fill="#FBFBFB" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-product_info">
                                            <a href="product-detail.html" class="name-product h4 link">Women's
                                                Straight Leg Pants</a>
                                            <div class="price-wrap">
                                                <span class="price-old h6 fw-normal">$29,99</span>
                                                <span class="price-new h6">$19,99</span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- Product 4 -->
                                <div class="swiper-slide">
                                    <div class="card-product">
                                        <div class="card-product_wrapper">
                                            <a href="product-detail.html" class="product-img">
                                                <img class="lazyload img-product"
                                                    src="images/products/product-23.jpg"
                                                    data-src="images/products/product-23.jpg" alt="Product">
                                                <img class="lazyload img-hover" src="images/products/product-24.jpg"
                                                    data-src="images/products/product-24.jpg" alt="Product">
                                            </a>
                                            <ul class="product-action_list">
                                                <li>
                                                    <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                        class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-shopping-cart-simple"></span>
                                                        <span class="tooltip">Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="wishlist">
                                                    <a href="#;" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-heart"></span>
                                                        <span class="tooltip">Add to Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="compare">
                                                    <a href="#compare" data-bs-toggle="offcanvas"
                                                        class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-compare"></span>
                                                        <span class="tooltip">Compare</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#quickView" data-bs-toggle="modal"
                                                        class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-view"></span>
                                                        <span class="tooltip">Quick view</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="variant-box">
                                                <ul class="product-size_list">
                                                    <li class="size-item h6">XS</li>
                                                    <li class="size-item h6">S</li>
                                                    <li class="size-item h6">M</li>
                                                </ul>
                                            </div>
                                            <ul class="product-badge_list">
                                                <li class="product-badge_item h6 new">New</li>
                                            </ul>
                                        </div>
                                        <div class="card-product_info">
                                            <a href="product-detail.html" class="name-product h4 link">V-neck button
                                                down vest</a>
                                            <div class="price-wrap">
                                                <span class="price-old h6 fw-normal">$99,99</span>
                                                <span class="price-new h6">$69,99</span>
                                            </div>
                                            <ul class="product-color_list">
                                                <li
                                                    class="product-color-item color-swatch hover-tooltip tooltip-bot active">
                                                    <span class="tooltip color-filter">Beige</span>
                                                    <span class="swatch-value bg-light-beige"></span>
                                                    <img class="lazyload" src="images/products/product-23.jpg"
                                                        data-src="images/products/product-23.jpg" alt="Product">
                                                </li>
                                                <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                                    <span class="tooltip color-filter">Dark</span>
                                                    <span class="swatch-value bg-dark-charcoal"></span>
                                                    <img class="lazyload" src="images/products/product-25.jpg"
                                                        data-src="images/products/product-25.jpg" alt="Product">
                                                </li>
                                                <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                                    <span class="tooltip color-filter">Sage Green</span>
                                                    <span class="swatch-value bg-sage-green"></span>
                                                    <img class="lazyload" src="images/products/product-26.jpg"
                                                        data-src="images/products/product-26.jpg" alt="Product">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product 5 -->
                                <div class="swiper-slide">
                                    <div class="card-product">
                                        <div class="card-product_wrapper">
                                            <a href="product-detail.html" class="product-img">
                                                <img class="lazyload img-product"
                                                    src="images/products/product-21.jpg"
                                                    data-src="images/products/product-21.jpg" alt="Product">
                                                <img class="lazyload img-hover" src="images/products/product-22.jpg"
                                                    data-src="images/products/product-22.jpg" alt="Product">
                                            </a>
                                            <div class="variant-box">
                                                <ul class="product-size_list">
                                                    <li class="size-item h6">XS</li>
                                                    <li class="size-item h6">M</li>
                                                </ul>
                                            </div>
                                            <ul class="product-action_list">
                                                <li>
                                                    <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                        class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-shopping-cart-simple"></span>
                                                        <span class="tooltip">Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="wishlist">
                                                    <a href="#;" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-heart"></span>
                                                        <span class="tooltip">Add to Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="compare">
                                                    <a href="#compare" data-bs-toggle="offcanvas"
                                                        class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-compare"></span>
                                                        <span class="tooltip">Compare</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#quickView" data-bs-toggle="modal"
                                                        class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-view"></span>
                                                        <span class="tooltip">Quick view</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="product-badge_list">
                                                <li class="product-badge_item flash-sale"><i
                                                        class="icon icon-thunder"></i> Flash sale</li>
                                            </ul>
                                            <div class="product-marquee_sale">
                                                <div class="marquee-wrapper">
                                                    <div class="initial-child-container">
                                                        <!-- 1 -->
                                                        <div class="marquee-child-item">
                                                            <span class="icon">
                                                                <svg width="16" height="16"
                                                                    viewBox="0 0 16 16" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                                        fill="#FEBD55" />
                                                                    <path
                                                                        d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                                        fill="#FC9E20" />
                                                                    <path
                                                                        d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                                        fill="#E03E3E" />
                                                                    <path
                                                                        d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                                        fill="#FBFBFB" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <span class="icon">
                                                                <svg width="16" height="16"
                                                                    viewBox="0 0 16 16" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                                        fill="#FEBD55" />
                                                                    <path
                                                                        d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                                        fill="#FC9E20" />
                                                                    <path
                                                                        d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                                        fill="#E03E3E" />
                                                                    <path
                                                                        d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                                        fill="#FBFBFB" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                                        </div>
                                                        <!-- 2 -->
                                                        <div class="marquee-child-item">
                                                            <span class="icon">
                                                                <svg width="16" height="16"
                                                                    viewBox="0 0 16 16" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                                        fill="#FEBD55" />
                                                                    <path
                                                                        d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                                        fill="#FC9E20" />
                                                                    <path
                                                                        d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                                        fill="#E03E3E" />
                                                                    <path
                                                                        d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                                        fill="#FBFBFB" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <span class="icon">
                                                                <svg width="16" height="16"
                                                                    viewBox="0 0 16 16" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                                        fill="#FEBD55" />
                                                                    <path
                                                                        d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                                        fill="#FC9E20" />
                                                                    <path
                                                                        d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                                        fill="#E03E3E" />
                                                                    <path
                                                                        d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                                        fill="#FBFBFB" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                                        </div>
                                                        <!-- 3 -->
                                                        <div class="marquee-child-item">
                                                            <span class="icon">
                                                                <svg width="16" height="16"
                                                                    viewBox="0 0 16 16" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                                        fill="#FEBD55" />
                                                                    <path
                                                                        d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                                        fill="#FC9E20" />
                                                                    <path
                                                                        d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                                        fill="#E03E3E" />
                                                                    <path
                                                                        d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                                        fill="#FBFBFB" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <span class="icon">
                                                                <svg width="16" height="16"
                                                                    viewBox="0 0 16 16" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                                        fill="#FEBD55" />
                                                                    <path
                                                                        d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                                        fill="#FC9E20" />
                                                                    <path
                                                                        d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                                        fill="#E03E3E" />
                                                                    <path
                                                                        d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                                        fill="#FBFBFB" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                                        </div>
                                                        <!-- 4 -->
                                                        <div class="marquee-child-item">
                                                            <span class="icon">
                                                                <svg width="16" height="16"
                                                                    viewBox="0 0 16 16" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                                        fill="#FEBD55" />
                                                                    <path
                                                                        d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                                        fill="#FC9E20" />
                                                                    <path
                                                                        d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                                        fill="#E03E3E" />
                                                                    <path
                                                                        d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                                        fill="#FBFBFB" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <span class="icon">
                                                                <svg width="16" height="16"
                                                                    viewBox="0 0 16 16" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                                        fill="#FEBD55" />
                                                                    <path
                                                                        d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                                        fill="#FC9E20" />
                                                                    <path
                                                                        d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                                        fill="#E03E3E" />
                                                                    <path
                                                                        d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                                        fill="#FBFBFB" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                                        </div>
                                                        <!-- 5 -->
                                                        <div class="marquee-child-item">
                                                            <span class="icon">
                                                                <svg width="16" height="16"
                                                                    viewBox="0 0 16 16" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                                        fill="#FEBD55" />
                                                                    <path
                                                                        d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                                        fill="#FC9E20" />
                                                                    <path
                                                                        d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                                        fill="#E03E3E" />
                                                                    <path
                                                                        d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                                        fill="#FBFBFB" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <span class="icon">
                                                                <svg width="16" height="16"
                                                                    viewBox="0 0 16 16" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                                        fill="#FEBD55" />
                                                                    <path
                                                                        d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                                        fill="#FC9E20" />
                                                                    <path
                                                                        d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                                        fill="#E03E3E" />
                                                                    <path
                                                                        d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                                        fill="#FBFBFB" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-product_info">
                                            <a href="product-detail.html" class="name-product h4 link">Half sleeve
                                                crop top</a>
                                            <div class="price-wrap">
                                                <span class="price-old h6 fw-normal">$119,99</span>
                                                <span class="price-new h6">$84,99</span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- Product 6 -->
                                <div class="swiper-slide">
                                    <div class="card-product">
                                        <div class="card-product_wrapper">
                                            <a href="product-detail.html" class="product-img">
                                                <img class="lazyload img-product"
                                                    src="images/products/product-33.jpg"
                                                    data-src="images/products/product-33.jpg" alt="Product">
                                                <img class="lazyload img-hover" src="images/products/product-34.jpg"
                                                    data-src="images/products/product-34.jpg" alt="Product">
                                            </a>
                                            <ul class="product-action_list">
                                                <li>
                                                    <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                        class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-shopping-cart-simple"></span>
                                                        <span class="tooltip">Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="wishlist">
                                                    <a href="#;" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-heart"></span>
                                                        <span class="tooltip">Add to Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="compare">
                                                    <a href="#compare" data-bs-toggle="offcanvas"
                                                        class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-compare"></span>
                                                        <span class="tooltip">Compare</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#quickView" data-bs-toggle="modal"
                                                        class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-view"></span>
                                                        <span class="tooltip">Quick view</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="product-badge_list">
                                                <li class="product-badge_item h6 sale">20% OFF</li>
                                            </ul>
                                        </div>
                                        <div class="card-product_info">
                                            <a href="product-detail.html" class="name-product h4 link">Summer two
                                                piece set</a>
                                            <div class="price-wrap">
                                                <span class="price-old h6 fw-normal">$139,99</span>
                                                <span class="price-new h6">$94,99</span>
                                            </div>
                                            <ul class="product-color_list">
                                                <li
                                                    class="product-color-item color-swatch hover-tooltip tooltip-bot active">
                                                    <span class="tooltip color-filter">Dark</span>
                                                    <span class="swatch-value bg-dark-charcoal"></span>
                                                    <img class="lazyload" src="images/products/product-33.jpg"
                                                        data-src="images/products/product-33.jpg" alt="Product">
                                                </li>
                                                <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                                    <span class="tooltip color-filter">Beige</span>
                                                    <span class="swatch-value bg-light-beige"></span>
                                                    <img class="lazyload" src="images/products/product-35.jpg"
                                                        data-src="images/products/product-35.jpg" alt="Product">
                                                </li>
                                                <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                                    <span class="tooltip color-filter">Jade</span>
                                                    <span class="swatch-value bg-dark-jade"></span>
                                                    <img class="lazyload" src="images/products/product-36.jpg"
                                                        data-src="images/products/product-36.jpg" alt="Product">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product 7 -->
                                <div class="swiper-slide">
                                    <div class="card-product">
                                        <div class="card-product_wrapper">
                                            <a href="product-detail.html" class="product-img">
                                                <img class="lazyload img-product"
                                                    src="images/products/product-37.jpg"
                                                    data-src="images/products/product-37.jpg" alt="Product">
                                                <img class="lazyload img-hover" src="images/products/product-38.jpg"
                                                    data-src="images/products/product-38.jpg" alt="Product">
                                            </a>
                                            <div class="variant-box">
                                                <ul class="product-size_list">
                                                    <li class="size-item h6">XS</li>
                                                    <li class="size-item h6">S</li>
                                                    <li class="size-item h6">M</li>
                                                </ul>
                                            </div>
                                            <ul class="product-action_list">
                                                <li>
                                                    <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                        class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-shopping-cart-simple"></span>
                                                        <span class="tooltip">Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="wishlist">
                                                    <a href="#;" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-heart"></span>
                                                        <span class="tooltip">Add to Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="compare">
                                                    <a href="#compare" data-bs-toggle="offcanvas"
                                                        class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-compare"></span>
                                                        <span class="tooltip">Compare</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#quickView" data-bs-toggle="modal"
                                                        class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-view"></span>
                                                        <span class="tooltip">Quick view</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="product-badge_list">
                                                <li class="product-badge_item h6 new">New arrival</li>
                                            </ul>
                                            <div class="product-marquee_sale">
                                                <div class="marquee-wrapper">
                                                    <div class="initial-child-container">
                                                        <!-- 1 -->
                                                        <div class="marquee-child-item">
                                                            <span class="icon">
                                                                <svg width="16" height="16"
                                                                    viewBox="0 0 16 16" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                                        fill="#FEBD55" />
                                                                    <path
                                                                        d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                                        fill="#FC9E20" />
                                                                    <path
                                                                        d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                                        fill="#E03E3E" />
                                                                    <path
                                                                        d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                                        fill="#FBFBFB" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <span class="icon">
                                                                <svg width="16" height="16"
                                                                    viewBox="0 0 16 16" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                                        fill="#FEBD55" />
                                                                    <path
                                                                        d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                                        fill="#FC9E20" />
                                                                    <path
                                                                        d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                                        fill="#E03E3E" />
                                                                    <path
                                                                        d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                                        fill="#FBFBFB" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                                        </div>
                                                        <!-- 2 -->
                                                        <div class="marquee-child-item">
                                                            <span class="icon">
                                                                <svg width="16" height="16"
                                                                    viewBox="0 0 16 16" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                                        fill="#FEBD55" />
                                                                    <path
                                                                        d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                                        fill="#FC9E20" />
                                                                    <path
                                                                        d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                                        fill="#E03E3E" />
                                                                    <path
                                                                        d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                                        fill="#FBFBFB" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <span class="icon">
                                                                <svg width="16" height="16"
                                                                    viewBox="0 0 16 16" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                                        fill="#FEBD55" />
                                                                    <path
                                                                        d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                                        fill="#FC9E20" />
                                                                    <path
                                                                        d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                                        fill="#E03E3E" />
                                                                    <path
                                                                        d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                                        fill="#FBFBFB" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                                        </div>
                                                        <!-- 3 -->
                                                        <div class="marquee-child-item">
                                                            <span class="icon">
                                                                <svg width="16" height="16"
                                                                    viewBox="0 0 16 16" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                                        fill="#FEBD55" />
                                                                    <path
                                                                        d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                                        fill="#FC9E20" />
                                                                    <path
                                                                        d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                                        fill="#E03E3E" />
                                                                    <path
                                                                        d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                                        fill="#FBFBFB" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <span class="icon">
                                                                <svg width="16" height="16"
                                                                    viewBox="0 0 16 16" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                                        fill="#FEBD55" />
                                                                    <path
                                                                        d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                                        fill="#FC9E20" />
                                                                    <path
                                                                        d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                                        fill="#E03E3E" />
                                                                    <path
                                                                        d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                                        fill="#FBFBFB" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                                        </div>
                                                        <!-- 4 -->
                                                        <div class="marquee-child-item">
                                                            <span class="icon">
                                                                <svg width="16" height="16"
                                                                    viewBox="0 0 16 16" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                                        fill="#FEBD55" />
                                                                    <path
                                                                        d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                                        fill="#FC9E20" />
                                                                    <path
                                                                        d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                                        fill="#E03E3E" />
                                                                    <path
                                                                        d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                                        fill="#FBFBFB" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <span class="icon">
                                                                <svg width="16" height="16"
                                                                    viewBox="0 0 16 16" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                                        fill="#FEBD55" />
                                                                    <path
                                                                        d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                                        fill="#FC9E20" />
                                                                    <path
                                                                        d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                                        fill="#E03E3E" />
                                                                    <path
                                                                        d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                                        fill="#FBFBFB" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                                        </div>
                                                        <!-- 5 -->
                                                        <div class="marquee-child-item">
                                                            <span class="icon">
                                                                <svg width="16" height="16"
                                                                    viewBox="0 0 16 16" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                                        fill="#FEBD55" />
                                                                    <path
                                                                        d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                                        fill="#FC9E20" />
                                                                    <path
                                                                        d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                                        fill="#E03E3E" />
                                                                    <path
                                                                        d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                                        fill="#FBFBFB" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <span class="icon">
                                                                <svg width="16" height="16"
                                                                    viewBox="0 0 16 16" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                                        fill="#FEBD55" />
                                                                    <path
                                                                        d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                                        fill="#FC9E20" />
                                                                    <path
                                                                        d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                                        fill="#E03E3E" />
                                                                    <path
                                                                        d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                                        fill="#FBFBFB" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-product_info">
                                            <a href="product-detail.html" class="name-product h4 link">Women's
                                                straight leg pants</a>
                                            <div class="price-wrap">
                                                <span class="price-old h6 fw-normal">$69,99</span>
                                                <span class="price-new h6">$44,99</span>
                                            </div>
                                            <ul class="product-color_list">
                                                <li
                                                    class="product-color-item color-swatch hover-tooltip tooltip-bot active">
                                                    <span class="tooltip color-filter">White</span>
                                                    <span class="swatch-value bg-white"></span>
                                                    <img class="lazyload" src="images/products/product-37.jpg"
                                                        data-src="images/products/product-37.jpg" alt="Product">
                                                </li>
                                                <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                                    <span class="tooltip color-filter">Pink</span>
                                                    <span class="swatch-value bg-hot-pink"></span>
                                                    <img class="lazyload" src="images/products/product-39.jpg"
                                                        data-src="images/products/product-39.jpg" alt="Product">
                                                </li>
                                                <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                                    <span class="tooltip color-filter">Beige</span>
                                                    <span class="swatch-value bg-light-beige"></span>
                                                    <img class="lazyload" src="images/products/product-40.jpg"
                                                        data-src="images/products/product-40.jpg" alt="Product">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product 8 -->
                                <div class="swiper-slide">
                                    <div class="card-product">
                                        <div class="card-product_wrapper">
                                            <a href="product-detail.html" class="product-img">
                                                <img class="lazyload img-product"
                                                    src="images/products/product-41.jpg"
                                                    data-src="images/products/product-41.jpg" alt="Product">
                                                <img class="lazyload img-hover" src="images/products/product-42.jpg"
                                                    data-src="images/products/product-42.jpg" alt="Product">
                                            </a>
                                            <ul class="product-action_list">
                                                <li>
                                                    <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                        class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-shopping-cart-simple"></span>
                                                        <span class="tooltip">Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="wishlist">
                                                    <a href="#;" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-heart"></span>
                                                        <span class="tooltip">Add to Wishlist</span>
                                                    </a>
                                                </li>
                                                <li class="compare">
                                                    <a href="#compare" data-bs-toggle="offcanvas"
                                                        class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-compare"></span>
                                                        <span class="tooltip">Compare</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#quickView" data-bs-toggle="modal"
                                                        class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-view"></span>
                                                        <span class="tooltip">Quick view</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="variant-box">
                                                <ul class="product-size_list">
                                                    <li class="size-item h6">XS</li>
                                                    <li class="size-item h6">S</li>
                                                    <li class="size-item h6">M</li>
                                                    <li class="size-item h6">L</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-product_info">
                                            <a href="product-detail.html" class="name-product h4 link">Short sleeve
                                                office shirt</a>
                                            <div class="price-wrap">
                                                <span class="price-old h6 fw-normal">$129,99</span>
                                                <span class="price-new h6">$89,99</span>
                                            </div>
                                            <ul class="product-color_list">
                                                <li
                                                    class="product-color-item color-swatch hover-tooltip tooltip-bot active">
                                                    <span class="tooltip color-filter">Beige</span>
                                                    <span class="swatch-value bg-light-beige"></span>
                                                    <img class="lazyload" src="images/products/product-41.jpg"
                                                        data-src="images/products/product-41.jpg" alt="Product">
                                                </li>
                                                <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                                    <span class="tooltip color-filter">Black</span>
                                                    <span class="swatch-value bg-black"></span>
                                                    <img class="lazyload" src="images/products/product-43.jpg"
                                                        data-src="images/products/product-43.jpg" alt="Product">
                                                </li>
                                                <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                                    <span class="tooltip color-filter">Violet</span>
                                                    <span class="swatch-value bg-muted-violet"></span>
                                                    <img class="lazyload" src="images/products/product-44.jpg"
                                                        data-src="images/products/product-44.jpg" alt="Product">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sw-dot-default tf-sw-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /New -->
        <!-- Shop This Look -->
        <div class="themesFlat">
            <div class="container-full">
                <div class="h1 sect-title text-black fw-medium text-center wow fadeInUp">Shop This Look</div>
                <div class="row">
                    <div class="col-xl-4">
                        <div class="box-image_V01 hover-img mb-xl-0 wow fadeInUp">
                            <a href="shop-default.html" class="box-image_image img-style">
                                <img src="images/section/box-image-1.jpg" data-src="images/section/box-image-1.jpg"
                                    alt="Image" class="lazyload">
                            </a>
                            <div class="box-image_content">
                                <a href="shop-default.html"
                                    class="title text-display fw-semibold text-white link">Lookbook</a>
                                <span class="sub-title h5 text-white">347 product</span>
                                <a href="shop-default.html" class="tf-btn-line style-white"> EXPLORE NOW </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div dir="ltr" class="swiper tf-swiper wrap-sw-over wow fadeInUp" data-preview="3"
                            data-tablet="3" data-mobile-sm="2" data-mobile="2" data-space-lg="48"
                            data-space-md="30" data-space="12" data-pagination="2" data-pagination-sm="2"
                            data-pagination-md="3" data-pagination-lg="3">
                            <div class="swiper-wrapper">
                                <!-- Product 1 -->
                                <div class="swiper-slide">
                                    <div class="card-product">
                                        <div class="card-product_wrapper">
                                            <a href="product-detail.html" class="product-img">
                                                <img class="lazyload img-product"
                                                    src="images/products/product-23.jpg"
                                                    data-src="images/products/product-23.jpg" alt="Product">
                                                <img class="lazyload img-hover" src="images/products/product-24.jpg"
                                                    data-src="images/products/product-24.jpg" alt="Product">
                                            </a>
                                            <ul class="product-action_list">
                                                <li>
                                                    <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                        class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-shopping-cart-simple"></span>
                                                        <span class="tooltip">Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="wishlist">
                                                    <a href="#;" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-heart"></span>
                                                        <span class="tooltip">Add to Wishlist</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#compare" data-bs-toggle="offcanvas"
                                                        class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-compare"></span>
                                                        <span class="tooltip">Compare</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#quickView" data-bs-toggle="modal"
                                                        class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-view"></span>
                                                        <span class="tooltip">Quick view</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="product-badge_list">
                                                <li class="product-badge_item h6 hot">Hot</li>
                                            </ul>
                                        </div>
                                        <div class="card-product_info">
                                            <a href="product-detail.html" class="name-product h4 link">V-neck button
                                                down vest</a>
                                            <div class="price-wrap">
                                                <span class="price-old h6 fw-normal">$99,99</span>
                                                <span class="price-new h6">$69,99</span>
                                            </div>
                                            <ul class="product-color_list">
                                                <li
                                                    class="product-color-item color-swatch hover-tooltip tooltip-bot active">
                                                    <span class="tooltip color-filter">Beige</span>
                                                    <span class="swatch-value bg-light-beige"></span>
                                                    <img class="lazyload" src="images/products/product-23.jpg"
                                                        data-src="images/products/product-23.jpg" alt="Product">
                                                </li>
                                                <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                                    <span class="tooltip color-filter">Dark</span>
                                                    <span class="swatch-value bg-dark-charcoal"></span>
                                                    <img class="lazyload" src="images/products/product-25.jpg"
                                                        data-src="images/products/product-25.jpg" alt="Product">
                                                </li>
                                                <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                                    <span class="tooltip color-filter">Sage Green</span>
                                                    <span class="swatch-value bg-sage-green"></span>
                                                    <img class="lazyload" src="images/products/product-26.jpg"
                                                        data-src="images/products/product-26.jpg" alt="Product">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product 2 -->
                                <div class="swiper-slide">
                                    <div class="card-product">
                                        <div class="card-product_wrapper">
                                            <a href="product-detail.html" class="product-img">
                                                <img class="lazyload img-product"
                                                    src="images/products/product-27.jpg"
                                                    data-src="images/products/product-27.jpg" alt="Product">
                                                <img class="lazyload img-hover" src="images/products/product-28.jpg"
                                                    data-src="images/products/product-28.jpg" alt="Product">
                                            </a>
                                            <ul class="product-action_list">
                                                <li>
                                                    <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                        class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-shopping-cart-simple"></span>
                                                        <span class="tooltip">Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="wishlist">
                                                    <a href="#;" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-heart"></span>
                                                        <span class="tooltip">Add to Wishlist</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#compare" data-bs-toggle="offcanvas"
                                                        class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-compare"></span>
                                                        <span class="tooltip">Compare</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#quickView" data-bs-toggle="modal"
                                                        class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-view"></span>
                                                        <span class="tooltip">Quick view</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="product-badge_list">
                                                <li class="product-badge_item flash-sale"><i
                                                        class="icon icon-thunder"></i> Flash sale</li>
                                            </ul>
                                        </div>
                                        <div class="card-product_info">
                                            <a href="product-detail.html" class="name-product h4 link">Nike
                                                Sportswear Tee Shirts</a>
                                            <div class="price-wrap">
                                                <span class="price-old h6 fw-normal"> $89,99</span>
                                                <span class="price-new h6">$59,99</span>
                                            </div>
                                            <ul class="product-color_list">
                                                <li
                                                    class="product-color-item color-swatch hover-tooltip tooltip-bot active">
                                                    <span class="tooltip color-filter">Beige</span>
                                                    <span class="swatch-value bg-light-beige"></span>
                                                    <img class="lazyload" src="images/products/product-27.jpg"
                                                        data-src="images/products/product-27.jpg" alt="Product">
                                                </li>
                                                <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                                    <span class="tooltip color-filter">Violet</span>
                                                    <span class="swatch-value bg-muted-violet"></span>
                                                    <img class="lazyload" src="images/products/product-29.jpg"
                                                        data-src="images/products/product-29.jpg" alt="Product">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Product 3 -->
                                <div class="swiper-slide">
                                    <div class="card-product">
                                        <div class="card-product_wrapper">
                                            <a href="product-detail.html" class="product-img">
                                                <img class="lazyload img-product"
                                                    src="images/products/product-30.jpg"
                                                    data-src="images/products/product-30.jpg" alt="Product">
                                                <img class="lazyload img-hover" src="images/products/product-31.jpg"
                                                    data-src="images/products/product-31.jpg" alt="Product">
                                            </a>
                                            <div class="variant-box">
                                                <ul class="product-size_list">
                                                    <li class="size-item h6">XS</li>
                                                    <li class="size-item h6">S</li>
                                                    <li class="size-item h6">M</li>
                                                </ul>
                                            </div>
                                            <ul class="product-action_list">
                                                <li>
                                                    <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                                        class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-shopping-cart-simple"></span>
                                                        <span class="tooltip">Add to cart</span>
                                                    </a>
                                                </li>
                                                <li class="wishlist">
                                                    <a href="#;" class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-heart"></span>
                                                        <span class="tooltip">Add to Wishlist</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#compare" data-bs-toggle="offcanvas"
                                                        class="hover-tooltip tooltip-left box-icon ">
                                                        <span class="icon icon-compare"></span>
                                                        <span class="tooltip">Compare</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#quickView" data-bs-toggle="modal"
                                                        class="hover-tooltip tooltip-left box-icon">
                                                        <span class="icon icon-view"></span>
                                                        <span class="tooltip">Quick view</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="product-badge_list">
                                                <li class="product-badge_item h6 trend">Trending</li>
                                            </ul>
                                            <div class="product-marquee_sale">
                                                <div class="marquee-wrapper">
                                                    <div class="initial-child-container">
                                                        <!-- 1 -->
                                                        <div class="marquee-child-item">
                                                            <span class="icon">
                                                                <svg width="16" height="16"
                                                                    viewBox="0 0 16 16" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                                        fill="#FEBD55" />
                                                                    <path
                                                                        d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                                        fill="#FC9E20" />
                                                                    <path
                                                                        d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                                        fill="#E03E3E" />
                                                                    <path
                                                                        d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                                        fill="#FBFBFB" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <span class="icon">
                                                                <svg width="16" height="16"
                                                                    viewBox="0 0 16 16" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                                        fill="#FEBD55" />
                                                                    <path
                                                                        d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                                        fill="#FC9E20" />
                                                                    <path
                                                                        d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                                        fill="#E03E3E" />
                                                                    <path
                                                                        d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                                        fill="#FBFBFB" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                                        </div>
                                                        <!-- 2 -->
                                                        <div class="marquee-child-item">
                                                            <span class="icon">
                                                                <svg width="16" height="16"
                                                                    viewBox="0 0 16 16" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                                        fill="#FEBD55" />
                                                                    <path
                                                                        d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                                        fill="#FC9E20" />
                                                                    <path
                                                                        d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                                        fill="#E03E3E" />
                                                                    <path
                                                                        d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                                        fill="#FBFBFB" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <span class="icon">
                                                                <svg width="16" height="16"
                                                                    viewBox="0 0 16 16" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                                        fill="#FEBD55" />
                                                                    <path
                                                                        d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                                        fill="#FC9E20" />
                                                                    <path
                                                                        d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                                        fill="#E03E3E" />
                                                                    <path
                                                                        d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                                        fill="#FBFBFB" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                                        </div>
                                                        <!-- 3 -->
                                                        <div class="marquee-child-item">
                                                            <span class="icon">
                                                                <svg width="16" height="16"
                                                                    viewBox="0 0 16 16" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                                        fill="#FEBD55" />
                                                                    <path
                                                                        d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                                        fill="#FC9E20" />
                                                                    <path
                                                                        d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                                        fill="#E03E3E" />
                                                                    <path
                                                                        d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                                        fill="#FBFBFB" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <span class="icon">
                                                                <svg width="16" height="16"
                                                                    viewBox="0 0 16 16" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                                        fill="#FEBD55" />
                                                                    <path
                                                                        d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                                        fill="#FC9E20" />
                                                                    <path
                                                                        d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                                        fill="#E03E3E" />
                                                                    <path
                                                                        d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                                        fill="#FBFBFB" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                                        </div>
                                                        <!-- 4 -->
                                                        <div class="marquee-child-item">
                                                            <span class="icon">
                                                                <svg width="16" height="16"
                                                                    viewBox="0 0 16 16" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                                        fill="#FEBD55" />
                                                                    <path
                                                                        d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                                        fill="#FC9E20" />
                                                                    <path
                                                                        d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                                        fill="#E03E3E" />
                                                                    <path
                                                                        d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                                        fill="#FBFBFB" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <span class="icon">
                                                                <svg width="16" height="16"
                                                                    viewBox="0 0 16 16" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                                        fill="#FEBD55" />
                                                                    <path
                                                                        d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                                        fill="#FC9E20" />
                                                                    <path
                                                                        d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                                        fill="#E03E3E" />
                                                                    <path
                                                                        d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                                        fill="#FBFBFB" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                                        </div>
                                                        <!-- 5 -->
                                                        <div class="marquee-child-item">
                                                            <span class="icon">
                                                                <svg width="16" height="16"
                                                                    viewBox="0 0 16 16" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                                        fill="#FEBD55" />
                                                                    <path
                                                                        d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                                        fill="#FC9E20" />
                                                                    <path
                                                                        d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                                        fill="#E03E3E" />
                                                                    <path
                                                                        d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                                        fill="#FBFBFB" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <span class="icon">
                                                                <svg width="16" height="16"
                                                                    viewBox="0 0 16 16" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.67975 15.75C10.318 15.7593 10.9507 15.6314 11.5352 15.375C12.1992 15.0979 12.765 14.6284 13.1598 14.0269C13.5545 13.4253 13.7601 12.7194 13.75 12C13.75 9.75 13.25 9.25 12.5 7.75C11.75 6.25 12.5 4.75 12.5 4.75C11.9004 4.90199 11.3709 5.25494 11 5.75C11 0.5 7.5 0.25 7.5 0.25C7.70889 0.829856 7.77253 1.45206 7.68537 2.0622C7.5982 2.67233 7.36289 3.25183 7 3.75C5.75 5.5 4.5 6.5 4 8.5C4 8.5 3 8 3.25 7C3.25 7 2.25 8.75 2.25 11.5C2.25 14.5155 4.6655 15.4 5.8545 15.6525C6.17072 15.7184 6.49298 15.7511 6.816 15.75H9.67975Z"
                                                                        fill="#FEBD55" />
                                                                    <path
                                                                        d="M6.21059 15.75C6.21059 15.75 3.63159 14.783 3.63159 11.8815C3.63159 8.658 5.86859 7.5 5.86859 7.5C5.86859 7.5 5.24359 8.658 5.88834 8.98025C5.88834 8.98025 6.96709 5.467 9.86859 4.5C9.86859 4.5 8.85534 5.56575 9.50009 7.5C10.1448 9.43425 12.3291 9.8685 12.3686 12V12.25C12.3939 12.9739 12.2024 13.6889 11.8186 14.3033C11.3216 15.0775 10.7478 15.75 9.43434 15.75H6.21059Z"
                                                                        fill="#FC9E20" />
                                                                    <path
                                                                        d="M6.5 15.75C5.90819 15.5026 5.40266 15.0858 5.04684 14.5521C4.69103 14.0184 4.50079 13.3915 4.5 12.75C4.5 10.25 5.75 9.25 5.75 9.25C5.75 9.25 5.75 10.25 6.25 10.5C6.25 10.5 6.75 7 9 6.25C9 6.25 8.25 6.75 8.75 8.25C9.25 9.75 11.5 10.25 11.5 12.75V12.9677C11.5089 13.5535 11.35 14.1296 11.0422 14.628C10.8312 14.9786 10.531 15.2671 10.1723 15.4642C9.81362 15.6613 9.40915 15.7599 9 15.75H6.5Z"
                                                                        fill="#E03E3E" />
                                                                    <path
                                                                        d="M6.49995 14.5C6.45051 14.5 6.40218 14.4853 6.36108 14.4579C6.31998 14.4304 6.28794 14.3913 6.26903 14.3457C6.25011 14.3 6.24516 14.2497 6.2548 14.2012C6.26444 14.1528 6.28824 14.1082 6.3232 14.0733L9.3232 11.0733C9.37035 11.0277 9.4335 11.0025 9.49905 11.0031C9.5646 11.0037 9.6273 11.0299 9.67365 11.0763C9.72 11.1226 9.7463 11.1854 9.74687 11.2509C9.74743 11.3164 9.72224 11.3796 9.6767 11.4268L6.6767 14.4268C6.62982 14.4736 6.56625 14.5 6.49995 14.5ZM8.74995 14.75C8.60161 14.75 8.45661 14.706 8.33327 14.6236C8.20993 14.5412 8.1138 14.4241 8.05704 14.287C8.00027 14.15 7.98542 13.9992 8.01436 13.8537C8.0433 13.7082 8.11473 13.5746 8.21962 13.4697C8.32451 13.3648 8.45814 13.2934 8.60363 13.2644C8.74911 13.2355 8.89991 13.2503 9.03696 13.3071C9.174 13.3639 9.29114 13.46 9.37355 13.5833C9.45596 13.7067 9.49995 13.8517 9.49995 14C9.49995 14.1989 9.42093 14.3897 9.28028 14.5303C9.13962 14.671 8.94886 14.75 8.74995 14.75ZM8.74995 13.75C8.7005 13.75 8.65217 13.7647 8.61105 13.7921C8.56994 13.8196 8.5379 13.8586 8.51898 13.9043C8.50006 13.95 8.4951 14.0003 8.50475 14.0488C8.5144 14.0973 8.53821 14.1418 8.57317 14.1768C8.60813 14.2117 8.65268 14.2356 8.70117 14.2452C8.74967 14.2548 8.79994 14.2499 8.84562 14.231C8.8913 14.212 8.93034 14.18 8.95781 14.1389C8.98528 14.0978 8.99995 14.0494 8.99995 14C8.99995 13.9337 8.97361 13.8701 8.92672 13.8232C8.87984 13.7763 8.81625 13.75 8.74995 13.75ZM7.24995 12.25C7.10161 12.25 6.95661 12.206 6.83327 12.1236C6.70993 12.0412 6.6138 11.9241 6.55704 11.787C6.50027 11.65 6.48542 11.4992 6.51436 11.3537C6.5433 11.2082 6.61473 11.0746 6.71962 10.9697C6.82451 10.8648 6.95814 10.7934 7.10363 10.7644C7.24911 10.7355 7.39991 10.7503 7.53696 10.8071C7.674 10.8639 7.79114 10.96 7.87355 11.0833C7.95596 11.2067 7.99995 11.3517 7.99995 11.5C7.99995 11.6989 7.92093 11.8897 7.78028 12.0303C7.63962 12.171 7.44886 12.25 7.24995 12.25ZM7.24995 11.25C7.2005 11.25 7.15217 11.2647 7.11105 11.2921C7.06994 11.3196 7.0379 11.3586 7.01898 11.4043C7.00005 11.45 6.9951 11.5003 7.00475 11.5488C7.0144 11.5973 7.03821 11.6418 7.07317 11.6768C7.10813 11.7117 7.15268 11.7356 7.20117 11.7452C7.24967 11.7548 7.29994 11.7499 7.34562 11.731C7.3913 11.712 7.43034 11.68 7.45781 11.6389C7.48528 11.5978 7.49995 11.5494 7.49995 11.5C7.49995 11.4337 7.47361 11.3701 7.42672 11.3232C7.37984 11.2763 7.31625 11.25 7.24995 11.25Z"
                                                                        fill="#FBFBFB" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="marquee-child-item">
                                                            <p class="text-small">TOP PRODUCT SALE OFF 50%</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-product_info">
                                            <a href="product-detail.html" class="name-product h4 link">Women's
                                                T-shirts Plus Size</a>
                                            <div class="price-wrap">
                                                <span class="price-old h6 fw-normal">$79,99</span>
                                                <span class="price-new h6">$49,99</span>
                                            </div>
                                            <ul class="product-color_list">
                                                <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                                    <span class="tooltip color-filter">Beige</span>
                                                    <span class="swatch-value bg-light-beige"></span>
                                                    <img class="lazyload" src="images/products/product-30.jpg"
                                                        data-src="images/products/product-30.jpg" alt="Product">
                                                </li>
                                                <li class="product-color-item color-swatch hover-tooltip tooltip-bot">
                                                    <span class="tooltip color-filter">Dark</span>
                                                    <span class="swatch-value bg-dark-charcoal"></span>
                                                    <img class="lazyload" src="images/products/product-32.jpg"
                                                        data-src="images/products/product-32.jpg" alt="Product">

                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sw-dot-default tf-sw-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Shop This Look -->
        <!-- Testimonial -->
        <section class="flat-spacing pb-0">
            <div class="container">
                <div class="h1 sect-title text-black fw-medium text-center wow fadeInUp">Customer Reviews</div>
                <div dir="ltr" class="swiper tf-swiper" data-preview="3" data-tablet="2"
                    data-mobile-sm="1" data-mobile="1" data-space-lg="48" data-space-md="24" data-space="12"
                    data-pagination="1" data-pagination-sm="1" data-pagination-md="2" data-pagination-lg="3">
                    <div class="swiper-wrapper">
                        <!-- item 1 -->
                        <div class="swiper-slide">
                            <div class="testimonial-V01 wow fadeInLeft">
                                <div class="">
                                    <h4 class="tes_title">Best Product Quality</h4>
                                    <p class="tes_text h4">
                                        “The build quality is excellent and everything works smoothly. I can feel the
                                        difference compared to other
                                        brands“
                                    </p>
                                    <div class="tes_author">
                                        <p class="author-name h5">Brooklyn Simmons</p>
                                        <i class="author-verified icon-check-circle"></i>
                                    </div>
                                    <div class="rate_wrap">
                                        <i class="icon-star text-star"></i>
                                        <i class="icon-star text-star"></i>
                                        <i class="icon-star text-star"></i>
                                        <i class="icon-star text-star"></i>
                                        <i class="icon-star text-star"></i>
                                    </div>
                                </div>
                                <span class="br-line"></span>
                                <div class="tes_product">
                                    <div class="product-image">
                                        <img class="lazyload" src="images/products/product-35.jpg"
                                            data-src="images/products/product-35.jpg"
                                            alt="Short Sleeve Office Shirt">
                                    </div>
                                    <div class="product-infor">
                                        <h5 class="prd_name">
                                            <a href="product-detail.html" class="link"> Short sleeve office shirt
                                            </a>
                                        </h5>
                                        <h6 class="prd_price">$14,99</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- item 2 -->
                        <div class="swiper-slide">
                            <div class="testimonial-V01 wow fadeInLeft" data-wow-delay="0.1s">
                                <div class="">
                                    <h4 class="tes_title">Dedicated Service</h4>
                                    <p class="tes_text h4">
                                        “The support from ACIS has been outstanding. Anytime we had a question or needed
                                        help, their team
                                        responded quickly and professionally.“
                                    </p>
                                    <div class="tes_author">
                                        <p class="author-name h5">Mas Shin</p>
                                        <i class="author-verified icon-check-circle"></i>
                                    </div>
                                    <div class="rate_wrap">
                                        <i class="icon-star text-star"></i>
                                        <i class="icon-star text-star"></i>
                                        <i class="icon-star text-star"></i>
                                        <i class="icon-star text-star"></i>
                                        <i class="icon-star text-star"></i>
                                    </div>
                                </div>
                                <span class="br-line"></span>
                                <div class="tes_product">
                                    <div class="product-image">
                                        <img class="lazyload" src="images/products/product-40.jpg"
                                            data-src="images/products/product-40.jpg" alt="UrbanCool Work Shirt">
                                    </div>
                                    <div class="product-infor">
                                        <h5 class="prd_name">
                                            <a href="product-detail.html" class="link"> UrbanCool Work Shirt </a>
                                        </h5>
                                        <h6 class="prd_price">$59,99</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- item 3 -->
                        <div class="swiper-slide">
                            <div class="testimonial-V01 wow fadeInLeft" data-wow-delay="0.2s">
                                <div class="">
                                    <h4 class="tes_title">Exceptional Reliability</h4>
                                    <p class="tes_text h4">
                                        “No surprises, just consistent and dependable performance every single time
                                        without fail.“
                                    </p>
                                    <div class="tes_author">
                                        <p class="author-name h5">Manh Tran</p>
                                        <i class="author-verified icon-check-circle"></i>
                                    </div>
                                    <div class="rate_wrap">
                                        <i class="icon-star text-star"></i>
                                        <i class="icon-star text-star"></i>
                                        <i class="icon-star text-star"></i>
                                        <i class="icon-star text-star"></i>
                                        <i class="icon-star text-star"></i>
                                    </div>
                                </div>
                                <span class="br-line"></span>
                                <div class="tes_product">
                                    <div class="product-image">
                                        <img class="lazyload" src="images/products/product-13.jpg"
                                            data-src="images/products/product-13.jpg" alt="UrbanCool Work Shirt">
                                    </div>
                                    <div class="product-infor">
                                        <h5 class="prd_name">
                                            <a href="product-detail.html" class="link"> WorkMode Lite </a>
                                        </h5>
                                        <h6 class="prd_price">$39,99</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sw-dot-default tf-sw-pagination"></div>
                </div>
            </div>
        </section>
        <!-- /Testimonial -->
        <!-- Blog -->
        <div class="flat-spacing">
            <div class="container">
                <div class="h1 sect-title text-black fw-medium text-center wow fadeInUp">Read Our Blog</div>
                <div dir="ltr" class="swiper tf-swiper" data-preview="4" data-tablet="3"
                    data-mobile-sm="2" data-mobile="1" data-space-lg="48" data-space-md="24" data-space="12"
                    data-pagination="1" data-pagination-sm="2" data-pagination-md="3" data-pagination-lg="4">
                    <div class="swiper-wrapper">
                        <!-- item 1 -->
                        <div class="swiper-slide">
                            <div class="article-blog type-space-2 hover-img4 wow fadeInLeft">
                                <a href="blog-detail.html" class="entry_image img-style4">
                                    <img src="images/blog/blog-1.jpg" data-src="images/blog/blog-1.jpg"
                                        alt="Image" class="lazyload aspect-ratio-0">
                                </a>
                                <div class="entry_tag">
                                    <a href="blog-grid.html" class="name-tag h6 link">March 2, 2025</a>
                                </div>

                                <div class="blog-content">
                                    <a href="blog-detail.html" class="entry_name link h4"> Bring Confidence With
                                        Simple T-shirt Style </a>
                                    <p class="text h6">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit in malesuada magna
                                        faucibus. Pellentesque eget
                                        finibus nunc.
                                    </p>
                                    <a href="blog-detail.html" class="tf-btn-line"> Read more </a>
                                </div>
                            </div>
                        </div>
                        <!-- item 2 -->
                        <div class="swiper-slide">
                            <div class="article-blog type-space-2 hover-img4 wow fadeInLeft" data-wow-delay="0.1s">
                                <a href="blog-detail.html" class="entry_image img-style4">
                                    <img src="images/blog/blog-2.jpg" data-src="images/blog/blog-2.jpg"
                                        alt="Image" class="lazyload aspect-ratio-0">
                                </a>
                                <div class="entry_tag">
                                    <a href="blog-grid.html" class="name-tag h6 link">March 2, 2025</a>
                                </div>

                                <div class="blog-content">
                                    <a href="blog-detail.html" class="entry_name link h4"> Experience the 90s style
                                        of mixing and matching </a>
                                    <p class="text h6">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit in malesuada magna
                                        faucibus. Pellentesque eget
                                        finibus nunc.
                                    </p>
                                    <a href="blog-detail.html" class="tf-btn-line"> Read more </a>
                                </div>
                            </div>
                        </div>
                        <!-- item 3 -->
                        <div class="swiper-slide">
                            <div class="article-blog type-space-2 hover-img4 wow fadeInLeft" data-wow-delay="0.2s">
                                <a href="blog-detail.html" class="entry_image img-style4">
                                    <img src="images/blog/blog-3.jpg" data-src="images/blog/blog-3.jpg"
                                        alt="Image" class="lazyload aspect-ratio-0">
                                </a>
                                <div class="entry_tag">
                                    <a href="blog-grid.html" class="name-tag h6 link">March 2, 2025</a>
                                </div>

                                <div class="blog-content">
                                    <a href="blog-detail.html" class="entry_name link h4"> April 4th the biggest
                                        sale of the year </a>
                                    <p class="text h6">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit in malesuada magna
                                        faucibus. Pellentesque eget
                                        finibus nunc.
                                    </p>
                                    <a href="blog-detail.html" class="tf-btn-line"> Read more </a>
                                </div>
                            </div>
                        </div>
                        <!-- item 4 -->
                        <div class="swiper-slide">
                            <div class="article-blog type-space-2 hover-img4 wow fadeInLeft" data-wow-delay="0.3s">
                                <a href="blog-detail.html" class="entry_image img-style4">
                                    <img src="images/blog/blog-4.jpg" data-src="images/blog/blog-4.jpg"
                                        alt="Image" class="lazyload aspect-ratio-0">
                                </a>
                                <div class="entry_tag">
                                    <a href="blog-grid.html" class="name-tag h6 link">March 2, 2025</a>
                                </div>

                                <div class="blog-content">
                                    <a href="blog-detail.html" class="entry_name link h4"> Top 5 simple accessories
                                        you need in your wardrobe </a>
                                    <p class="text h6">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit in malesuada magna
                                        faucibus. Pellentesque eget
                                        finibus nunc.
                                    </p>
                                    <a href="blog-detail.html" class="tf-btn-line"> Read more </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sw-dot-default tf-sw-pagination"></div>
                </div>
            </div>
        </div>
        <!-- /Blog -->
        <!-- Gallery -->
        <section class="flat-spacing pt-0 pb-xl-0">
            <div class="container">
                <div class="sect-title text-center wow fadeInUp">
                    <div class="h1 title mb-16">Follow Us On Instagram</div>
                    <h6>@ochaka: <span class="text-main fw-normal">Follow us and get</span> 20% off coupon</h6>
                </div>
            </div>
            <div dir="ltr" class="swiper tf-swiper wow fadeInUp" data-preview="6" data-tablet="4"
                data-mobile-sm="3" data-mobile="2" data-space="0" data-pagination="2" data-pagination-sm="3"
                data-pagination-md="4" data-pagination-lg="6">
                <div class="swiper-wrapper">
                    <!-- item 1 -->
                    <div class="swiper-slide">
                        <div class="gallery-item hover-img hover-overlay">
                            <div class="image img-style">
                                <img class="lazyload" src="images/gallery/gallery-1.jpg"
                                    data-src="images/gallery/gallery-1.jpg" alt="Image">
                            </div>
                            <a href="product-detail.html" class="box-icon hover-tooltip">
                                <span class="icon icon-instagram-logo"></span>
                                <span class="tooltip">View product</span>
                            </a>
                        </div>
                    </div>
                    <!-- item 2 -->
                    <div class="swiper-slide">
                        <div class="gallery-item hover-img hover-overlay">
                            <div class="image img-style">
                                <img class="lazyload" src="images/gallery/gallery-2.jpg"
                                    data-src="images/gallery/gallery-2.jpg" alt="Image">
                            </div>
                            <a href="product-detail.html" class="box-icon hover-tooltip">
                                <span class="icon icon-instagram-logo"></span>
                                <span class="tooltip">View product</span>
                            </a>
                        </div>
                    </div>
                    <!-- item 3 -->
                    <div class="swiper-slide">
                        <div class="gallery-item hover-img hover-overlay">
                            <div class="image img-style">
                                <img class="lazyload" src="images/gallery/gallery-3.jpg"
                                    data-src="images/gallery/gallery-3.jpg" alt="Image">
                            </div>
                            <a href="product-detail.html" class="box-icon hover-tooltip">
                                <span class="icon icon-instagram-logo"></span>
                                <span class="tooltip">View product</span>
                            </a>
                        </div>
                    </div>
                    <!-- item 4 -->
                    <div class="swiper-slide">
                        <div class="gallery-item hover-img hover-overlay">
                            <div class="image img-style">
                                <img class="lazyload" src="images/gallery/gallery-4.jpg"
                                    data-src="images/gallery/gallery-4.jpg" alt="Image">
                            </div>
                            <a href="product-detail.html" class="box-icon hover-tooltip">
                                <span class="icon icon-instagram-logo"></span>
                                <span class="tooltip">View product</span>
                            </a>
                        </div>
                    </div>
                    <!-- item 5 -->
                    <div class="swiper-slide">
                        <div class="gallery-item hover-img hover-overlay">
                            <div class="image img-style">
                                <img class="lazyload" src="images/gallery/gallery-5.jpg"
                                    data-src="images/gallery/gallery-5.jpg" alt="Image">
                            </div>
                            <a href="product-detail.html" class="box-icon hover-tooltip">
                                <span class="icon icon-instagram-logo"></span>
                                <span class="tooltip">View product</span>
                            </a>
                        </div>
                    </div>
                    <!-- item 6 -->
                    <div class="swiper-slide">
                        <div class="gallery-item hover-img hover-overlay">
                            <div class="image img-style">
                                <img class="lazyload" src="images/gallery/gallery-6.jpg"
                                    data-src="images/gallery/gallery-6.jpg" alt="Image">
                            </div>
                            <a href="product-detail.html" class="box-icon hover-tooltip">
                                <span class="icon icon-instagram-logo"></span>
                                <span class="tooltip">View product</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="sw-dot-default tf-sw-pagination"></div>
            </div>
        </section>
        <!-- /Gallery -->
        <!-- Footer -->
        <footer class="tf-footer style-4">
            <div class="container d-flex">
                <span class="br-line"></span>
            </div>
            <div class="footer-body">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-sm-6 mb_30 mb-xl-0">
                            <div class="footer-col-block">
                                <p class="footer-heading footer-heading-mobile">Contact us</p>
                                <div class="tf-collapse-content">
                                    <ul class="footer-contact">
                                        <li>
                                            <i class="icon icon-map-pin"></i>
                                            <span class="br-line"></span>
                                            <a href="https://www.google.com/maps?q=8500+Lorem+Street+Chicago,+IL+55030+Dolor+sit+amet"
                                                target="_blank" class="h6 link">
                                                8500 Lorem Street Chicago, IL 55030 <br class="d-none d-lg-block">
                                                Dolor sit amet
                                            </a>
                                        </li>
                                        <li>
                                            <i class="icon icon-phone"></i>
                                            <span class="br-line"></span>
                                            <a href="tel:+88001234567" class="h6 link">+8(800) 123 4567</a>
                                        </li>
                                        <li>
                                            <i class="icon icon-envelope-simple"></i>
                                            <span class="br-line"></span>
                                            <a href="mailto:themesflat@support.com"
                                                class="h6 link">themesflat@support.com</a>
                                        </li>
                                    </ul>
                                    <div class="social-wrap">
                                        <ul class="tf-social-icon">
                                            <li>
                                                <a href="https://www.facebook.com/" target="_blank"
                                                    class="social-facebook">
                                                    <span class="icon"><i class="icon-fb"></i></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.instagram.com/" target="_blank"
                                                    class="social-instagram">
                                                    <span class="icon"><i class="icon-instagram-logo"></i></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://x.com/" target="_blank" class="social-x">
                                                    <span class="icon"><i class="icon-x"></i></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.tiktok.com/" target="_blank"
                                                    class="social-tiktok">
                                                    <span class="icon"><i class="icon-tiktok"></i></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-sm-6 mb_30 mb-xl-0">
                            <div class="footer-col-block footer-wrap-1 ms-xl-auto">
                                <p class="footer-heading footer-heading-mobile">Shopping</p>
                                <div class="tf-collapse-content">
                                    <ul class="footer-menu-list">
                                        <li><a href="faq.html" class="link h6">Shipping</a></li>
                                        <li><a href="shop-default.html" class="link h6">Shop by Brand</a></li>
                                        <li><a href="track-order.html" class="link h6">Track order</a></li>
                                        <li><a href="faq.html" class="link h6">Terms & Conditions</a></li>
                                        <li><a href="#size-guide" data-bs-toggle="modal" class="link h6">Size
                                                Guide</a></li>
                                        <li><a href="wishlist.html" class="link h6">My Wishlist</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 mb_30 mb-sm-0">
                            <div class="footer-col-block footer-wrap-2 mx-xl-auto">
                                <p class="footer-heading footer-heading-mobile">Information</p>
                                <div class="tf-collapse-content">
                                    <ul class="footer-menu-list">
                                        <li><a href="about-us.html" class="link h6">About Us</a></li>
                                        <li><a href="faq.html" class="link h6">Term & Policy</a></li>
                                        <li><a href="faq.html" class="link h6">Help Center</a></li>
                                        <li><a href="blog-grid.html" class="link h6">News & Blog</a></li>
                                        <li><a href="faq.html" class="link h6">Refunds</a></li>
                                        <li><a href="faq.html" class="link h6">Careers</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-sm-6">
                            <div class="footer-col-block">
                                <p class="footer-heading footer-heading-mobile">Let’s keep in touch</p>
                                <div class="tf-collapse-content">
                                    <div class="footer-newsletter">
                                        <p class="h6 caption">
                                            Enter your email below to be the first to know about new collections and
                                            product launches.
                                        </p>
                                        <form class="form_sub has_check" id="subscribe-form">
                                            <div class="f-content" id="subscribe-content">
                                                <fieldset class="col">
                                                    <input class="style-stroke" id="subscribe-email"
                                                        type="email" name="email-form"
                                                        placeholder="Enter your email" required>
                                                </fieldset>
                                                <button id="subscribe-button" type="button"
                                                    class="tf-btn animate-btn type-small-2">
                                                    Subscribe
                                                    <i class="icon icon-arrow-right"></i>
                                                </button>
                                            </div>
                                            <div class="checkbox-wrap">
                                                <input id="remember" type="checkbox" class="tf-check style-3">
                                                <label for="remember" class="h6">
                                                    By clicking subcribe, you agree to the
                                                    <a href="faq.html" class="text-decoration-underline link">Terms
                                                        of Service</a> and <a href="faq.html"
                                                        class="text-decoration-underline link">
                                                        Privacy Policy</a>.
                                                </label>
                                            </div>
                                            <div id="subscribe-msg"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="inner-bottom">
                        <ul class="list-hor">
                            <li>
                                <a href="#" class="h6 link">Help & FAQs</a>
                            </li>
                            <li class="br-line type-vertical"></li>
                            <li>
                                <a href="#" class="h6 link">Factory</a>
                            </li>
                        </ul>
                        <div class="list-hor flex-wrap">
                            <span class="h6">Payment:</span>
                            <ul class="payment-method-list">
                                <li><img src="images/payment/visa.png" alt="Payment"></li>
                                <li><img src="images/payment/master-card.png" alt="Payment"></li>
                                <li><img src="images/payment/amex.png" alt="Payment"></li>
                                <li><img src="images/payment/discover.png" alt="Payment"></li>
                                <li><img src="images/payment/paypal.png" alt="Payment"></li>
                            </ul>
                        </div>
                        <div class="list-hor">
                            <div class="tf-currencies">
                                <select class="tf-dropdown-select style-default type-currencies">
                                    <option selected data-thumbnail="images/country/us.png">USD</option>
                                    <option data-thumbnail="images/country/vie.png">VND</option>
                                </select>
                            </div>
                            <span class="br-line type-vertical"></span>
                            <div class="tf-languages">
                                <select class="tf-dropdown-select style-default type-languages">
                                    <option>English</option>
                                    <option>العربية</option>
                                    <option>简体中文</option>
                                    <option>اردو</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /Footer -->
    </main>
    <!-- Mobile Menu -->
    <div class="offcanvas offcanvas-start canvas-mb" id="mobileMenu">
        <span class="icon-close-popup" data-bs-dismiss="offcanvas">
            <i class="icon-close"></i>
        </span>
        <div class="canvas-header">
            <p class="text-logo-mb">Ochaka.</p>
            <a href="login.html" class="tf-btn type-small style-2">
                Login
                <i class="icon icon-user"></i>
            </a>
            <span class="br-line"></span>
        </div>
        <div class="canvas-body">
            <div class="mb-content-top">
                <ul class="nav-ul-mb" id="wrapper-menu-navigation"></ul>
            </div>
            <div class="group-btn">
                <a href="wishlist.html" class="tf-btn type-small style-2">
                    Wishlist
                    <i class="icon icon-heart"></i>
                </a>
                <div data-bs-dismiss="offcanvas">
                    <a href="#search" data-bs-toggle="modal" class="tf-btn type-small style-2">
                        Search
                        <i class="icon icon-magnifying-glass"></i>
                    </a>
                </div>
            </div>
            <div class="flow-us-wrap">
                <h5 class="title">Follow us on</h5>
                <ul class="tf-social-icon">
                    <li>
                        <a href="https://www.facebook.com/" target="_blank" class="social-facebook">
                            <span class="icon"><i class="icon-fb"></i></span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/" target="_blank" class="social-instagram">
                            <span class="icon"><i class="icon-instagram-logo"></i></span>
                        </a>
                    </li>
                    <li>
                        <a href="https://x.com/" target="_blank" class="social-x">
                            <span class="icon"><i class="icon-x"></i></span>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.tiktok.com/" target="_blank" class="social-tiktok">
                            <span class="icon"><i class="icon-tiktok"></i></span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="payment-wrap">
                <h5 class="title">Payment:</h5>
                <ul class="payment-method-list">
                    <li><img src="images/payment/visa.png" alt="Payment"></li>
                    <li><img src="images/payment/master-card.png" alt="Payment"></li>
                    <li><img src="images/payment/amex.png" alt="Payment"></li>
                    <li><img src="images/payment/discover.png" alt="Payment"></li>
                    <li><img src="images/payment/paypal.png" alt="Payment"></li>
                </ul>
            </div>
        </div>
        <div class="canvas-footer">
            <div class="tf-currencies">
                <select class="tf-dropdown-select style-default type-currencies">
                    <option selected data-thumbnail="images/country/us.png">USD</option>
                    <option data-thumbnail="images/country/vie.png">VND</option>
                </select>
            </div>
            <span class="br-line"></span>
            <div class="tf-languages">
                <select class="tf-dropdown-select style-default type-languages">
                    <option>English</option>
                    <option>العربية</option>
                    <option>简体中文</option>
                    <option>اردو</option>
                </select>
            </div>
        </div>
    </div>
    <!-- /Mobile Menu -->
    <!-- Toolbar -->
    <div class="tf-toolbar-bottom">
        <div class="toolbar-item">
            <a href="shop-default.html">
                <span class="toolbar-icon">
                    <i class="icon icon-storefront"></i>
                </span>
                <span class="toolbar-label">Shop</span>
            </a>
        </div>
        <div class="toolbar-item">
            <a href="#search" data-bs-toggle="modal">
                <span class="toolbar-icon">
                    <i class="icon icon-magnifying-glass"></i>
                </span>
                <span class="toolbar-label">Search</span>
            </a>
        </div>
        <div class="toolbar-item">
            <a href="account-page.html">
                <span class="toolbar-icon">
                    <i class="icon icon-user"></i>
                </span>
                <span class="toolbar-label">Account</span>
            </a>
        </div>
        <div class="toolbar-item">
            <a href="wishlist.html">
                <span class="toolbar-icon">
                    <i class="icon icon-heart"></i>
                    <span class="toolbar-count">7</span>
                </span>
                <span class="toolbar-label">Wishlist</span>
            </a>
        </div>
        <div class="toolbar-item">
            <a href="view-cart.html">
                <span class="toolbar-icon">
                    <i class="icon icon-shopping-cart-simple"></i>
                    <span class="toolbar-count">24</span>
                </span>
                <span class="toolbar-label">Cart</span>
            </a>
        </div>
    </div>
    <!-- /Toolbar -->

    <!-- Size Guide -->
    <div class="modal modalCentered fade modal-size-guide" id="size-guide">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content widget-tabs style-2">
                <div class="header">
                    <ul class="widget-menu-tab">
                        <li class="item-title active">
                            <span class="inner h3">Size </span>
                        </li>
                        <li class="item-title">
                            <span class="inner h3">Size Guide</span>
                        </li>
                    </ul>
                    <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
                </div>
                <div class="wrap">
                    <div class="widget-content-tab">
                        <div class="widget-content-inner active">
                            <div class="tab-size">
                                <div>
                                    <div class="widget-size mb-24">
                                        <div class="box-title-size">
                                            <div class="title-size h6 text-black">Height</div>
                                            <div class="number-size text-small">
                                                <span class="max-size">100</span>
                                                <span class="">Cm</span>
                                            </div>
                                        </div>
                                        <div class="range-input">
                                            <div class="tow-bar-block">
                                                <div class="progress-size" style="width: 50%"></div>
                                            </div>
                                            <input type="range" min="0" max="200" value="100"
                                                class="range-max">
                                        </div>
                                    </div>
                                    <div class="widget-size">
                                        <div class="box-title-size">
                                            <div class="title-size h6 text-black">Weight</div>
                                            <div class="number-size text-small">
                                                <span class="max-size">50</span>
                                                <span class="">Kg</span>
                                            </div>
                                        </div>
                                        <div class="range-input">
                                            <div class="tow-bar-block">
                                                <div class="progress-size" style="width: 50%"></div>
                                            </div>
                                            <input type="range" min="0" max="100" value="50"
                                                class="range-max">
                                        </div>
                                    </div>
                                </div>
                                <div class="size-button-wrap choose-option-list">
                                    <div class="size-button-item choose-option-item">
                                        <h6 class="text">Thin</h6>
                                    </div>
                                    <div class="size-button-item choose-option-item select-option">
                                        <h6 class="text">Normal</h6>
                                    </div>
                                    <div class="size-button-item choose-option-item">
                                        <h6 class="text">Plump</h6>
                                    </div>
                                </div>
                                <div class="suggests">
                                    <h4 class="">Suggests for you:</h4>
                                    <div class="suggests-list">
                                        <a href="#" class="suggests-item link h6">L - shirt</a>
                                        <a href="#" class="suggests-item link h6">XL - Pant</a>
                                        <a href="#" class="suggests-item link h6">31 - Jeans</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content-inner overflow-auto text-nowrap">
                            <table class="tab-sizeguide-table">
                                <thead>
                                    <tr>
                                        <th>Size</th>
                                        <th>US</th>
                                        <th>Bust</th>
                                        <th>Waist</th>
                                        <th>Low Hip</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>XS</td>
                                        <td>2</td>
                                        <td>32</td>
                                        <td>24 - 25</td>
                                        <td>33 - 34</td>
                                    </tr>
                                    <tr>
                                        <td>S</td>
                                        <td>4</td>
                                        <td>26 - 27</td>
                                        <td>34 - 35</td>
                                        <td>35 - 26</td>
                                    </tr>
                                    <tr>
                                        <td>M</td>
                                        <td>6</td>
                                        <td>28 - 29</td>
                                        <td>36 - 37</td>
                                        <td>38 - 40</td>
                                    </tr>
                                    <tr>
                                        <td>L</td>
                                        <td>8</td>
                                        <td>30 - 31</td>
                                        <td>38 - 29</td>
                                        <td>42 - 44</td>
                                    </tr>
                                    <tr>
                                        <td>XL</td>
                                        <td>10</td>
                                        <td>32 - 33</td>
                                        <td>40 - 41</td>
                                        <td>45 - 47</td>
                                    </tr>
                                    <tr>
                                        <td>XXL</td>
                                        <td>12</td>
                                        <td>34 - 35</td>
                                        <td>42 - 43</td>
                                        <td>48 - 50</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Size Guide -->
    <!-- Compare -->
    <div class="offcanvas offcanvas-bottom canvas-compare" id="compare">
        <div class="canvas-wrapper">
            <div class="canvas-body">
                <div class="container">
                    <div class="tf-compare-list main-list-clear wrap-empty_text">
                        <div class="tf-compare-head">
                            <h4 class="title">Compare products</h4>
                        </div>
                        <div class="tf-compare-offcanvas list-empty">
                            <p class="box-text_empty h6 text-main">Your Compare is curently empty</p>
                            <div class="tf-compare-item file-delete">
                                <a href="product-detail.html">
                                    <div class="icon remove">
                                        <i class="icon-close"></i>
                                    </div>
                                    <img class="radius-3 lazyload" data-src="images/products/product-1.jpg"
                                        src="images/products/product-1.jpg" alt="Image">
                                </a>
                            </div>
                            <div class="tf-compare-item file-delete">
                                <a href="product-detail.html">
                                    <div class="icon remove">
                                        <i class="icon-close"></i>
                                    </div>
                                    <img class="radius-3 lazyload" data-src="images/products/product-5.jpg"
                                        src="images/products/product-5.jpg" alt="Image">
                                </a>
                            </div>
                            <div class="tf-compare-item file-delete">
                                <a href="product-detail.html">
                                    <div class="icon remove">
                                        <i class="icon-close"></i>
                                    </div>
                                    <img class="radius-3 lazyload" data-src="images/products/product-7.jpg"
                                        src="images/products/product-7.jpg" alt="Image">
                                </a>
                            </div>
                        </div>
                        <div class="tf-compare-buttons">
                            <a href="compare.html"
                                class="tf-btn animate-btn d-inline-flex bg-dark-2 justify-content-center"> Compare
                            </a>
                            <div
                                class="tf-btn btn-white animate-btn animate-dark line clear-list-empty tf-compare-button-clear-all">
                                Clear All
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Compare -->
    <!-- Quick View -->
    <div class="modal modalCentered fade modal-quick-view" id="quickView">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <i class="icon icon-close icon-close-popup" data-bs-dismiss="modal"></i>
                <div class="tf-product-media-wrap tf-btn-swiper-item">
                    <div dir="ltr" class="swiper tf-single-slide">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" data-size="XS" data-color="beige">
                                <div class="item">
                                    <img class="lazyload" data-src="images/products/product-9.jpg"
                                        src="images/products/product-9.jpg" alt="Image">
                                </div>
                            </div>
                            <div class="swiper-slide" data-size="L" data-color="pink">
                                <div class="item">
                                    <img class="lazyload" data-src="images/products/product-39.jpg"
                                        src="images/products/product-39.jpg" alt="Image">
                                </div>
                            </div>
                            <div class="swiper-slide" data-size="M" data-color="green">
                                <div class="item">
                                    <img class="lazyload" data-src="images/products/product-1.jpg"
                                        src="images/products/product-1.jpg" alt="Image">
                                </div>
                            </div>
                            <div class="swiper-slide" data-size="S" data-color="blue">
                                <div class="item">
                                    <img class="lazyload" data-src="images/products/product-4.jpg"
                                        src="images/products/product-4.jpg" alt="Image">
                                </div>
                            </div>
                            <div class="swiper-slide" data-size="L" data-color="black">
                                <div class="item">
                                    <img class="lazyload" data-src="images/products/product-47.jpg"
                                        src="images/products/product-47.jpg" alt="Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tf-product-info-wrap">
                    <div class="tf-product-info-inner tf-product-info-list">
                        <div class="tf-product-info-heading">
                            <a href="product-detail.html" class="link product-info-name fw-medium h1"> Casual Round
                                Neck T-Shirt </a>
                            <div class="product-info-meta">
                                <div class="rating">
                                    <div class="d-flex gap-4">
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z"
                                                fill="#EF9122" />
                                        </svg>
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z"
                                                fill="#EF9122" />
                                        </svg>
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z"
                                                fill="#EF9122" />
                                        </svg>
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z"
                                                fill="#EF9122" />
                                        </svg>
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14 5.4091L8.913 5.07466L6.99721 0.261719L5.08143 5.07466L0 5.4091L3.89741 8.7184L2.61849 13.7384L6.99721 10.9707L11.376 13.7384L10.097 8.7184L14 5.4091Z"
                                                fill="#EF9122" />
                                        </svg>
                                    </div>
                                    <div class="reviews text-main">(3.671 review)</div>
                                </div>
                                <div class="people-add text-primary">
                                    <i class="icon icon-shopping-cart-simple"></i>
                                    <span class="h6">9 people just added this product to their cart</span>
                                </div>
                            </div>
                            <div class="product-info-price">
                                <div class="price-wrap">
                                    <span class="price-new price-on-sale h2">$ 14.99</span>
                                    <span class="price-old compare-at-price h6">$ 24.99</span>
                                    <p class="badges-on-sale h6 fw-semibold">
                                        <span class="number-sale" data-person-sale="29"> -29 % </span>
                                    </p>
                                </div>
                            </div>
                            <p class="product-infor-sub text-main h6">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse justo dolor,
                                consectetur vel metus vitae,
                                tincidunt finibus dui fusce tellus enim.
                            </p>
                        </div>
                        <div class="tf-product-variant w-100">
                            <div class="variant-picker-item variant-size">
                                <div class="variant-picker-label">
                                    <div class="h4 fw-semibold">
                                        Size
                                        <span class="variant-picker-label-value value-currentSize">medium</span>
                                    </div>
                                    <a href="#size-guide" data-bs-toggle="modal"
                                        class="size-guide link h6 fw-medium">
                                        <i class="icon icon-ruler"></i>
                                        Size Guide
                                    </a>
                                </div>
                                <div class="variant-picker-values">
                                    <span class="size-btn active" data-size="XS">XS</span>
                                    <span class="size-btn" data-size="S">S</span>
                                    <span class="size-btn" data-size="M">M</span>
                                    <span class="size-btn" data-size="L">L</span>
                                </div>
                            </div>
                            <div class="variant-picker-item variant-color">
                                <div class="variant-picker-label">
                                    <div class="h4 fw-semibold">
                                        Colors
                                        <span class="variant-picker-label-value value-currentColor">orange</span>
                                    </div>
                                </div>
                                <div class="variant-picker-values">
                                    <div class="hover-tooltip tooltip-bot color-btn active" data-color="beige">
                                        <span class="check-color bg-light-beige"></span>
                                        <span class="tooltip">Beige</span>
                                    </div>
                                    <div class="hover-tooltip tooltip-bot color-btn" data-color="pink">
                                        <span class="check-color bg-hot-pink"></span>
                                        <span class="tooltip">Pink</span>
                                    </div>
                                    <div class="hover-tooltip tooltip-bot color-btn" data-color="green">
                                        <span class="check-color bg-sage-green"></span>
                                        <span class="tooltip">Green</span>
                                    </div>
                                    <div class="hover-tooltip tooltip-bot color-btn" data-color="blue">
                                        <span class="check-color bg-baby-blue"></span>
                                        <span class="tooltip">Blue</span>
                                    </div>
                                    <div class="hover-tooltip tooltip-bot color-btn" data-color="black">
                                        <span class="check-color bg-dark-charcoal"></span>
                                        <span class="tooltip">Dark</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tf-product-total-quantity w-100">
                            <div class="group-btn">
                                <div class="wg-quantity">
                                    <button class="btn-quantity btn-decrease">
                                        <i class="icon icon-minus"></i>
                                    </button>
                                    <input class="quantity-product" type="text" name="number"
                                        value="1">
                                    <button class="btn-quantity btn-increase">
                                        <i class="icon icon-plus"></i>
                                    </button>
                                </div>
                                <p class="h6 d-none d-sm-block">
                                    15 products available
                                </p>
                                <button type="button"
                                    class="d-sm-none hover-tooltip box-icon btn-add-wishlist flex-sm-shrink-0">
                                    <span class="icon icon-heart"></span>
                                    <span class="tooltip">Add to Wishlist</span>
                                </button>
                                <a href="#compare" data-bs-toggle="offcanvas"
                                    class="d-sm-none hover-tooltip tooltip-top box-icon flex-sm-shrink-0">
                                    <span class="icon icon-compare"></span>
                                    <span class="tooltip">Compare</span>
                                </a>
                            </div>
                            <div class="group-btn flex-sm-nowrap">
                                <a href="#shoppingCart" data-bs-toggle="offcanvas"
                                    class="tf-btn animate-btn btn-add-to-cart">
                                    ADD TO CART
                                    <i class="icon icon-shopping-cart-simple"></i>
                                </a>
                                <button type="button"
                                    class="d-none d-sm-flex hover-tooltip box-icon btn-add-wishlist flex-sm-shrink-0">
                                    <span class="icon icon-heart"></span>
                                    <span class="tooltip">Add to Wishlist</span>
                                </button>
                                <a href="#compare" data-bs-toggle="offcanvas"
                                    class="d-none d-sm-flex hover-tooltip tooltip-top box-icon flex-sm-shrink-0">
                                    <span class="icon icon-compare"></span>
                                    <span class="tooltip">Compare</span>
                                </a>
                            </div>
                            <div class="group-btn">
                                <a href="checkout.html" class="tf-btn btn-yellow w-100 animate-btn animate-dark">
                                    Pay with
                                    <span class="icon">
                                        <svg width="68" height="18" viewBox="0 0 68 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M45.7745 0H40.609C40.3052 0 40.0013 0.30254 39.8494 0.605081L37.7224 13.9169C37.7224 14.2194 37.8743 14.3707 38.1782 14.3707H40.9129C41.2167 14.3707 41.3687 14.2194 41.3687 13.9169L41.9764 10.1351C41.9764 9.83258 42.2802 9.53004 42.736 9.53004H44.4072C47.9015 9.53004 49.8766 7.86606 50.3323 4.53811C50.6362 3.17668 50.3323 1.96652 49.7246 1.21017C48.8131 0.453813 47.4457 0 45.7745 0ZM46.3822 4.99193C46.0784 6.80717 44.711 6.80717 43.3437 6.80717H42.4321L43.0399 3.32795C43.0399 3.17668 43.1918 3.02541 43.4956 3.02541H43.7995C44.7111 3.02541 45.6226 3.02541 46.0784 3.63049C46.3822 3.78176 46.3822 4.23558 46.3822 4.99193Z"
                                                fill="#139AD6" />
                                            <path
                                                d="M8.55188 0H3.38637C3.08251 0 2.77866 0.30254 2.62673 0.605081L0.499756 13.9169C0.499756 14.2194 0.651685 14.3707 0.955538 14.3707H3.38637C3.69022 14.3707 3.99407 14.0682 4.146 13.7656L4.75371 10.1351C4.75371 9.83258 5.05757 9.53004 5.51335 9.53004H7.18454C10.6789 9.53004 12.6539 7.86607 13.1097 4.53811C13.4135 3.17668 13.1097 1.96652 12.502 1.21017C11.5904 0.453813 10.375 0 8.55188 0ZM9.15959 4.99193C8.85574 6.80717 7.4884 6.80717 6.12105 6.80717H5.36142L5.96913 3.32795C5.96913 3.17668 6.12105 3.02541 6.42491 3.02541H6.72876C7.64032 3.02541 8.55188 3.02541 9.00766 3.63049C9.15959 3.78176 9.31152 4.23558 9.15959 4.99193ZM24.2004 4.84066H21.7695C21.6176 4.84066 21.3137 4.99193 21.3137 5.1432L21.1618 5.89955L21.0099 5.59701C20.4022 4.84066 19.3387 4.53811 18.1233 4.53811C15.3886 4.53811 12.9578 6.6559 12.502 9.53004C12.1981 11.0427 12.6539 12.4042 13.4135 13.3118C14.1732 14.2194 15.2367 14.522 16.604 14.522C18.8829 14.522 20.0983 13.1605 20.0983 13.1605L19.9464 13.9169C19.9464 14.2194 20.0983 14.3707 20.4022 14.3707H22.6811C22.9849 14.3707 23.2888 14.0682 23.4407 13.7656L24.8081 5.29447C24.6561 5.1432 24.3523 4.84066 24.2004 4.84066ZM20.706 9.68131C20.4022 11.0427 19.3387 12.1016 17.8194 12.1016C17.0598 12.1016 16.4521 11.7991 16.1482 11.4966C15.8444 11.0427 15.6924 10.4377 15.6924 9.68131C15.8444 8.31988 17.0598 7.26098 18.4271 7.26098C19.1868 7.26098 19.6425 7.56352 20.0983 7.86606C20.5541 8.31987 20.706 9.07623 20.706 9.68131Z"
                                                fill="#263B80" />
                                            <path
                                                d="M61.2699 4.8416H58.839C58.6871 4.8416 58.3833 4.99287 58.3833 5.14414L58.2313 5.9005L58.0794 5.59796C57.4717 4.8416 56.4082 4.53906 55.1928 4.53906C52.4581 4.53906 50.0273 6.65685 49.5715 9.53099C49.2676 11.0437 49.7234 12.4051 50.4831 13.3128C51.2427 14.2204 52.3062 14.5229 53.6735 14.5229C55.9524 14.5229 57.1678 13.1615 57.1678 13.1615L57.0159 13.9178C57.0159 14.2204 57.1678 14.3716 57.4717 14.3716H59.7506C60.0545 14.3716 60.3583 14.0691 60.5102 13.7666L61.8776 5.29541C61.7256 5.14414 61.5737 4.8416 61.2699 4.8416ZM57.7755 9.68226C57.4717 11.0437 56.4082 12.1026 54.8889 12.1026C54.1293 12.1026 53.5216 11.8 53.2177 11.4975C52.9139 11.0437 52.762 10.4386 52.762 9.68226C52.9139 8.32082 54.1293 7.26193 55.4966 7.26193C56.2563 7.26193 56.7121 7.56447 57.1678 7.86701C57.7755 8.32082 57.9275 9.07718 57.7755 9.68226Z"
                                                fill="#139AD6" />
                                            <path
                                                d="M37.4179 4.83984H34.8351C34.5312 4.83984 34.3793 4.99111 34.2274 5.14238L30.885 10.2856L29.3657 5.44493C29.2138 5.14238 29.0619 4.99111 28.6061 4.99111H26.1753C25.8714 4.99111 25.7195 5.29366 25.7195 5.5962L28.4542 13.6135L25.8714 17.244C25.7195 17.5466 25.8714 18.0004 26.1753 18.0004H28.6061C28.9099 18.0004 29.0619 17.8491 29.2138 17.6978L37.5698 5.74747C38.0256 5.29366 37.7217 4.83984 37.4179 4.83984Z"
                                                fill="#263B80" />
                                            <path
                                                d="M64.158 0.455636L62.031 14.07C62.031 14.3725 62.1829 14.5238 62.4868 14.5238H64.6138C64.9176 14.5238 65.2215 14.2212 65.3734 13.9187L67.5004 0.606904C67.5004 0.304363 67.3484 0.153094 67.0446 0.153094H64.6138C64.4618 0.00182346 64.3099 0.153095 64.158 0.455636Z"
                                                fill="#139AD6" />
                                        </svg>
                                    </span>
                                </a>
                            </div>
                            <div class="group-btn justify-content-center">
                                <a href="#" class="tf-btn-line text-normal letter-space-0 fw-normal"> More
                                    payment options </a>
                            </div>
                        </div>
                        <a href="product-detail.html" class="tf-btn-line text-normal letter-space-0 fw-normal">
                            <span class="h5">View full details</span>
                            <i class="icon icon-arrow-top-right fs-24"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Quick View -->
    <!-- Search -->
    <div class="modal modalCentered fade modal-search" id="search">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
                <div>
                    <form class="form-search style-2">
                        <fieldset>
                            <input type="text" placeholder="Search item" class="style-stroke" name="text"
                                tabindex="0" value="" aria-required="true" required="">
                        </fieldset>
                        <button type="submit" class="link"><i class="icon icon-magnifying-glass"></i></button>
                    </form>
                    <ul class="quick-link-list">
                        <li><a href="shop-default-list.html" class="link-item text-main h6 link">Graphic tees</a>
                        </li>
                        <li><a href="shop-default-list.html" class="link-item text-main h6 link">Plain t-shirts</a>
                        </li>
                        <li><a href="shop-default-list.html" class="link-item text-main h6 link">Vintage
                                t-shirts</a></li>
                        <li><a href="shop-default-list.html" class="link-item text-main h6 link">Band tees</a></li>
                        <li><a href="shop-default-list.html" class="link-item text-main h6 link">Custom t-shirts</a>
                        </li>
                        <li><a href="shop-default-list.html" class="link-item text-main h6 link">Oversized
                                t-shirts</a></li>
                        <li><a href="shop-default-list.html" class="link-item text-main h6 link">Crew neck
                                t-shirts</a></li>
                    </ul>
                </div>
                <div class="view-history-wrap">
                    <h4 class="title">History</h4>
                    <div class="view-history-list">
                        <a class="item text-main link h6" href="shop-default-list.html">
                            <span>High Visibility T Shirt Short Sleeve Reflective</span>
                            <i class="icon icon-arrow-top-right"></i>
                        </a>
                        <a class="item text-main link h6" href="shop-default-list.html">
                            <span>Short sleeve round neck t-shirt</span>
                            <i class="icon icon-arrow-top-right"></i>
                        </a>
                        <a class="item text-main link h6" href="shop-default-list.html">
                            <span>Fashionable oversized hoodie for women</span>
                            <i class="icon icon-arrow-top-right"></i>
                        </a>
                        <a class="item text-main link h6" href="shop-default-list.html">
                            <span>Queen fashion long sleeve shirt, basic t-shirt</span>
                            <i class="icon icon-arrow-top-right"></i>
                        </a>
                        <a class="item text-main link h6" href="shop-default-list.html">
                            <span>Lee Women's Wrinkle Free Relaxed Fit Straight Leg Pant</span>
                            <i class="icon icon-arrow-top-right"></i>
                        </a>
                        <a class="item text-main link h6" href="shop-default-list.html">
                            <span>Women's Summer Oversized T-Shirt Casual Office Fashion</span>
                            <i class="icon icon-arrow-top-right"></i>
                        </a>
                    </div>
                </div>
                <div class="trend-product-wrap">
                    <div class="heading">
                        <h4 class="title flex-grow-1">Trending product</h4>
                        <a href="#" class="tf-btn-line has-icon none-line fw-medium fs-18 text-normal">
                            View All Product
                            <i class="icon icon-caret-circle-right"></i>
                        </a>
                    </div>
                    <div class="trend-product-inner">
                        <div class="trend-product-list">
                            <div class="trend-product-item">
                                <div class="image">
                                    <img class="lazyload" src="images/products/product-1.jpg"
                                        data-src="images/products/product-1.jpg" alt="Product">
                                </div>
                                <div class="content">
                                    <div class="text-small text-main-2 sub">T-shirt</div>
                                    <h6 class="title">
                                        <a href="product-detail.html" class="link">Queen fashion long sleeve
                                            shirt, basic t-shirt</a>
                                    </h6>
                                    <div class="price-wrap">
                                        <span class="price-old h6 fw-normal">$99,99</span>
                                        <span class="price-new h6">$69,99</span>
                                    </div>
                                </div>
                            </div>
                            <div class="trend-product-item">
                                <div class="image">
                                    <img class="lazyload" src="images/products/product-7.jpg"
                                        data-src="images/products/product-7.jpg" alt="Product">
                                </div>
                                <div class="content">
                                    <div class="text-small text-main-2 sub">Hoodie</div>
                                    <h6 class="title">
                                        <a href="product-detail.html" class="link">Champion Reverse Weave
                                            Pullover</a>
                                    </h6>
                                    <div class="price-wrap">
                                        <span class="price-old h6 fw-normal">$149.99</span>
                                        <span class="price-new h6">$109.99</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="trend-product-list">
                            <div class="trend-product-item">
                                <div class="image">
                                    <img class="lazyload" src="images/products/product-5.jpg"
                                        data-src="images/products/product-5.jpg" alt="Product">
                                </div>
                                <div class="content">
                                    <div class="text-small text-main-2 sub">Shorts</div>
                                    <h6 class="title">
                                        <a href="product-detail.html" class="link">Columbia PFG Fishing Shirt</a>
                                    </h6>
                                    <div class="price-wrap">
                                        <span class="price-old h6 fw-normal">$109.99</span>
                                        <span class="price-new h6">$74.99</span>
                                    </div>
                                </div>
                            </div>
                            <div class="trend-product-item">
                                <div class="image">
                                    <img class="lazyload" src="images/products/product-9.jpg"
                                        data-src="images/products/product-9.jpg" alt="Product">
                                </div>
                                <div class="content">
                                    <div class="text-small text-main-2 sub">Sweatshirt</div>
                                    <h6 class="title">
                                        <a href="product-detail.html" class="link">Puma Essentials Graphic Tee</a>
                                    </h6>
                                    <div class="price-wrap">
                                        <span class="price-old h6 fw-normal">$69.99</span>
                                        <span class="price-new h6">$49.99</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Search -->
    <!-- Shopping Cart -->
    <div class="offcanvas offcanvas-end popup-shopping-cart" id="shoppingCart">
        <div class="tf-minicart-recommendations">
            <h4 class="title">You may also like</h4>
            <div class="wrap-recommendations">
                <div class="list-cart">
                    <div class="list-cart-item">
                        <div class="image">
                            <img class="lazyload" data-src="images/products/product-11.jpg"
                                src="images/products/product-11.jpg" alt="Image">
                        </div>
                        <div class="content">
                            <h6 class="name">
                                <a class="link text-line-clamp-1" href="product-detail.html">Nike Sportswear Tee
                                    Shirts</a>
                            </h6>
                            <div class="cart-item-bot">
                                <div class="price-wrap price">
                                    <span class="price-old h6 fw-normal">$99,99</span>
                                    <span class="price-new h6">$69,99</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-cart-item">
                        <div class="image">
                            <img class="lazyload" data-src="images/products/product-13.jpg"
                                src="images/products/product-13.jpg" alt="Image">
                        </div>
                        <div class="content">
                            <h6 class="name">
                                <a class="link text-line-clamp-1" href="product-detail.html">Puma Essentials Graphic
                                    Tee</a>
                            </h6>
                            <div class="cart-item-bot">
                                <div class="price-wrap price">
                                    <span class="price-old h6 fw-normal">$89,99</span>
                                    <span class="price-new h6">$59,99</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-cart-item">
                        <div class="image">
                            <img class="lazyload" data-src="images/products/product-15.jpg"
                                src="images/products/product-15.jpg" alt="Image">
                        </div>
                        <div class="content">
                            <h6 class="name">
                                <a class="link text-line-clamp-1" href="product-detail.html">Reebok Classic Crew
                                    Sweatshirt</a>
                            </h6>
                            <div class="cart-item-bot">
                                <div class="price-wrap price">
                                    <span class="price-old h6 fw-normal">$149.99</span>
                                    <span class="price-new h6">$109.99</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-cart-item">
                        <div class="image">
                            <img class="lazyload" data-src="images/products/product-17.jpg"
                                src="images/products/product-17.jpg" alt="Image">
                        </div>
                        <div class="content">
                            <h6 class="name">
                                <a class="link text-line-clamp-1" href="product-detail.html">Columbia PFG Fishing
                                    Shirt</a>
                            </h6>
                            <div class="cart-item-bot">
                                <div class="price-wrap price">
                                    <span class="price-old h6 fw-normal">$59.99</span>
                                    <span class="price-new h6">$39.99</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="canvas-wrapper">
            <div class="popup-header">
                <span class="title fw-semibold h4">Shopping cart</span>
                <span class="icon-close icon-close-popup" data-bs-dismiss="offcanvas"></span>
            </div>
            <div class="wrap">
                <div class="tf-mini-cart-wrap list-file-delete wrap-empty_text">
                    <div class="tf-mini-cart-main">
                        <div class="tf-mini-cart-sroll">
                            <div class="tf-mini-cart-items list-empty">
                                <div class="box-text_empty type-shop_cart">
                                    <div class="shop-empty_top">
                                        <span class="icon">
                                            <i class="icon-shopping-cart-simple"></i>
                                        </span>
                                        <h3 class="text-emp fw-normal">Your cart is empty</h3>
                                        <p class="h6 text-main">Your cart is currently empty. Let us assist you in
                                            finding the right product</p>
                                    </div>
                                    <div class="shop-empty_bot">
                                        <a href="shop-default.html" class="tf-btn animate-btn"> Shopping </a>
                                        <a href="index.html" class="tf-btn style-line"> Back to home </a>
                                    </div>
                                </div>
                                <div class="tf-mini-cart-item file-delete">
                                    <div class="tf-mini-cart-image">
                                        <img class="lazyload" data-src="images/products/product-1.jpg"
                                            src="images/products/product-1.jpg" alt="img-product">
                                    </div>
                                    <div class="tf-mini-cart-info">
                                        <div class="text-small text-main-2 sub">T-shirt</div>
                                        <h6 class="title">
                                            <a href="product-detail.html" class="link text-line-clamp-1">Queen
                                                fashion long sleeve shirt, basic
                                                t-shirt</a>
                                        </h6>
                                        <div class="size">
                                            <div class="text-small text-main-2 sub">Size: XS</div>
                                            <div class="text-small text-main-2 sub">Color:</div>
                                            <div class="dot-color bg-caramel"></div>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="h6 fw-semibold">
                                                <span class="number">1x</span>
                                                <span class="price text-primary tf-mini-card-price">$20.00</span>
                                            </div>
                                            <i class="icon link icon-close remove"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="tf-mini-cart-item file-delete">
                                    <div class="tf-mini-cart-image">
                                        <img class="lazyload" data-src="images/products/product-2.jpg"
                                            src="images/products/product-2.jpg" alt="img-product">
                                    </div>
                                    <div class="tf-mini-cart-info">
                                        <div class="text-small text-main-2 sub">T-shirt</div>
                                        <h6 class="title">
                                            <a href="product-detail.html" class="link text-line-clamp-1">Champion
                                                Reverse Weave Pullover</a>
                                        </h6>
                                        <div class="size">
                                            <div class="text-small text-main-2 sub">Size: L</div>
                                            <div class="text-small text-main-2 sub">Color:</div>
                                            <div class="dot-color bg-sage-green"></div>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="h6 fw-semibold">
                                                <span class="number">1x</span>
                                                <span class="price text-primary tf-mini-card-price">$24.99</span>
                                            </div>
                                            <i class="icon link icon-close remove"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="tf-mini-cart-item file-delete">
                                    <div class="tf-mini-cart-image">
                                        <img class="lazyload" data-src="images/products/product-3.jpg"
                                            src="images/products/product-3.jpg" alt="img-product">
                                    </div>
                                    <div class="tf-mini-cart-info">
                                        <div class="text-small text-main-2 sub">Sweatshirt</div>
                                        <h6 class="title">
                                            <a href="product-detail.html" class="link text-line-clamp-1">ASICS Core
                                                Running Tights</a>
                                        </h6>
                                        <div class="size">
                                            <div class="text-small text-main-2 sub">Size: XS</div>
                                            <div class="text-small text-main-2 sub">Color:</div>
                                            <div class="dot-color bg-light-beige"></div>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="h6 fw-semibold">
                                                <span class="number">1x</span>
                                                <span class="price text-primary tf-mini-card-price">$18.99</span>
                                            </div>
                                            <i class="icon link icon-close remove"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="tf-mini-cart-item file-delete">
                                    <div class="tf-mini-cart-image">
                                        <img class="lazyload" data-src="images/products/product-4.jpg"
                                            src="images/products/product-4.jpg" alt="img-product">
                                    </div>
                                    <div class="tf-mini-cart-info">
                                        <div class="text-small text-main-2 sub">Shorts</div>
                                        <h6 class="title">
                                            <a href="product-detail.html" class="link text-line-clamp-1">New Balance
                                                Athletics Shorts</a>
                                        </h6>
                                        <div class="size">
                                            <div class="text-small text-main-2 sub">Size: XS</div>
                                            <div class="text-small text-main-2 sub">Color:</div>
                                            <div class="dot-color bg-baby-blue"></div>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="h6 fw-semibold">
                                                <span class="number">1x</span>
                                                <span class="price text-primary tf-mini-card-price">$22.50</span>
                                            </div>
                                            <i class="icon link icon-close remove"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tf-mini-cart-bottom box-empty_clear">
                        <div class="tf-mini-cart-tool">
                            <div class="tf-mini-cart-tool-btn btn-add-note">
                                <div class="h6">Note</div>
                                <i class="icon icon-note-pencil"></i>
                            </div>
                            <div class="tf-mini-cart-tool-btn btn-estimate-shipping">
                                <div class="h6">Shipping</div>
                                <i class="icon icon-truck"></i>
                            </div>
                            <div class="tf-mini-cart-tool-btn btn-add-gift">
                                <div class="h6">Gift</div>
                                <i class="icon icon-gift"></i>
                            </div>
                        </div>
                        <div class="tf-mini-cart-threshold">
                            <div class="text">
                                <h6 class="subtotal">Subtotal (<span class="prd-count">3</span> item)</h6>
                                <h4 class="text-primary total-price tf-totals-total-value">$60.00</h4>
                            </div>
                            <div class="tf-progress-bar tf-progress-ship">
                                <div class="value" style="width: 0%" data-progress="25"></div>
                            </div>
                            <div class="desc text-main">Add <span class="text-primary fw-bold">$15.40</span> to cart
                                and get free shipping!</div>
                        </div>
                        <div class="tf-mini-cart-bottom-wrap">
                            <div class="tf-mini-cart-view-checkout">
                                <a href="view-cart.html" class="tf-btn btn-white animate-btn animate-dark line">View
                                    cart</a>
                                <a href="checkout.html"
                                    class="tf-btn animate-btn d-inline-flex bg-dark-2 w-100 justify-content-center"><span>Check
                                        out</span></a>
                            </div>
                            <div class="free-shipping">
                                <i class="icon icon-truck"></i>
                                Free shipping on all orders over $150
                            </div>
                        </div>
                    </div>
                    <div class="tf-mini-cart-tool-openable add-note">
                        <div class="overlay tf-mini-cart-tool-close"></div>
                        <form action="#" class="tf-mini-cart-tool-content">
                            <label for="Cart-note" class="tf-mini-cart-tool-text h5 fw-semibold">
                                <i class="icon icon-note-pencil"></i>
                                Note
                            </label>
                            <textarea name="note" id="Cart-note" placeholder="Note about your order"></textarea>
                            <div class="tf-cart-tool-btns">
                                <button class="subscribe-button tf-btn animate-btn d-inline-flex bg-dark-2 w-100"
                                    type="submit">Save</button>
                                <div class="tf-btn btn-white animate-btn animate-dark line tf-mini-cart-tool-close">
                                    Cancel</div>
                            </div>
                        </form>
                    </div>
                    <div class="tf-mini-cart-tool-openable estimate-shipping">
                        <div class="overlay tf-mini-cart-tool-close"></div>
                        <form id="shipping-form" class="tf-mini-cart-tool-content">
                            <div class="tf-mini-cart-tool-text h5 fw-semibold">
                                <i class="icon icon-truck"></i>
                                Shipping
                            </div>
                            <div class="field">
                                <div class="tf-select">
                                    <select class="w-100" id="shipping-country-form" name="address[country]"
                                        data-default="">
                                        <option value="Australia"
                                            data-provinces='[["Australian Capital Territory","Australian Capital Territory"],["New South Wales","New South Wales"],["Northern Territory","Northern Territory"],["Queensland","Queensland"],["South Australia","South Australia"],["Tasmania","Tasmania"],["Victoria","Victoria"],["Western Australia","Western Australia"]]'>
                                            Australia
                                        </option>
                                        <option value="Austria" data-provinces="[]">Austria</option>
                                        <option value="Belgium" data-provinces="[]">Belgium</option>
                                        <option value="Canada"
                                            data-provinces='[["Ontario","Ontario"],["Quebec","Quebec"]]'>Canada
                                        </option>
                                        <option value="Czech Republic" data-provinces="[]">Czechia</option>
                                        <option value="Denmark" data-provinces="[]">Denmark</option>
                                        <option value="Finland" data-provinces="[]">Finland</option>
                                        <option value="France" data-provinces="[]">France</option>
                                        <option value="Germany" data-provinces="[]">Germany</option>
                                        <option selected value="United States"
                                            data-provinces='[["Alabama","Alabama"],["California","California"],["Florida","Florida"]]'>
                                            United States
                                        </option>
                                        <option value="United Kingdom"
                                            data-provinces='[["England","England"],["Scotland","Scotland"],["Wales","Wales"],["Northern Ireland","Northern Ireland"]]'>
                                            United Kingdom
                                        </option>
                                        <option value="India" data-provinces="[]">India</option>
                                        <option value="Japan" data-provinces="[]">Japan</option>
                                        <option value="Mexico" data-provinces="[]">Mexico</option>
                                        <option value="South Korea" data-provinces="[]">South Korea</option>
                                        <option value="Spain" data-provinces="[]">Spain</option>
                                        <option value="Italy" data-provinces="[]">Italy</option>
                                        <option value="Vietnam"
                                            data-provinces='[["Ha Noi","Ha Noi"],["Da Nang","Da Nang"],["Ho Chi Minh","Ho Chi Minh"]]'>
                                            Vietnam
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="field">
                                <div class="tf-select">
                                    <select id="shipping-province-form" name="address[province]"
                                        data-default=""></select>
                                </div>
                            </div>
                            <div class="field">
                                <input type="text" placeholder="Postal code" data-opend-focus id="zipcode"
                                    name="address[zip]" value="">
                            </div>
                            <div id="zipcode-message" class="error" style="display: none">
                                We found one shipping rate available for undefined.
                            </div>
                            <div id="zipcode-success" class="success" style="display: none">
                                <p>We found one shipping rate available for your address:</p>
                                <p class="standard">Standard at <span>$0.00</span> USD</p>
                            </div>
                            <div class="tf-cart-tool-btns">
                                <button class="subscribe-button tf-btn animate-btn d-inline-flex bg-dark-2 w-100"
                                    type="submit">Save</button>
                                <div class="tf-btn btn-white animate-btn animate-dark line tf-mini-cart-tool-close">
                                    Cancel</div>
                            </div>
                        </form>
                    </div>
                    <div class="tf-mini-cart-tool-openable add-gift">
                        <div class="overlay tf-mini-cart-tool-close"></div>
                        <form action="#" class="tf-mini-cart-tool-content">
                            <div class="tf-mini-cart-tool-text h5 fw-semibold">
                                <i class="icon icon-gift"></i>
                                Gift
                            </div>
                            <div class="wrap">
                                <i class="icon icon-gift-2"></i>
                                <h3>Only <span class="text-primary">$2</span> for a gift box</h3>
                            </div>
                            <div class="tf-cart-tool-btns">
                                <button class="subscribe-button tf-btn animate-btn d-inline-flex bg-dark-2 w-100"
                                    type="submit">
                                    Add a gift
                                </button>
                                <div class="tf-btn btn-white animate-btn animate-dark line tf-mini-cart-tool-close">
                                    Cancel</div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Shopping Cart -->

    <!-- New Letter -->
    <div class="modal modalCentered fade modal-newletter auto-popup" id="newLetter">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-0">
                <div class="modal-heading">
                    <div class="image">
                        <img class="lazyload" src="images/section/newletter.jpg"
                            data-src="images/section/newletter.jpg" alt="Image">
                    </div>
                    <span class="icon-close-popup" data-bs-dismiss="modal">
                        <i class="icon-close"></i>
                    </span>
                </div>
                <div class="modal-body">
                    <p class="h6 sub-title">Subscribe to our newletter!</p>
                    <h3 class="fw-normal title">Receive 20% off your next order, along with exclusive offers and more!
                    </h3>
                    <div class="sib-form sib-form_newletter">
                        <div id="sib-form-container" class="sib-form-container">
                            <div id="error-message" class="sib-form-message-panel">
                                <div class="sib-form-message-panel__text sib-form-message-panel__text--center">
                                    <svg viewBox="0 0 512 512" class="sib-icon sib-notification__icon">
                                        <path
                                            d="M256 40c118.621 0 216 96.075 216 216 0 119.291-96.61 216-216 216-119.244 0-216-96.562-216-216 0-119.203 96.602-216 216-216m0-32C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm-11.49 120h22.979c6.823 0 12.274 5.682 11.99 12.5l-7 168c-.268 6.428-5.556 11.5-11.99 11.5h-8.979c-6.433 0-11.722-5.073-11.99-11.5l-7-168c-.283-6.818 5.167-12.5 11.99-12.5zM256 340c-15.464 0-28 12.536-28 28s12.536 28 28 28 28-12.536 28-28-12.536-28-28-28z" />
                                    </svg>
                                    <span class="sib-form-message-panel__inner-text">
                                        Your subscription could not be saved. Please try again.
                                    </span>
                                </div>
                            </div>
                            <div id="success-message" class="sib-form-message-panel">
                                <div class="sib-form-message-panel__text sib-form-message-panel__text--center">
                                    <svg viewBox="0 0 512 512" class="sib-icon sib-notification__icon">
                                        <path
                                            d="M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 464c-118.664 0-216-96.055-216-216 0-118.663 96.055-216 216-216 118.664 0 216 96.055 216 216 0 118.663-96.055 216-216 216zm141.63-274.961L217.15 376.071c-4.705 4.667-12.303 4.637-16.97-.068l-85.878-86.572c-4.667-4.705-4.637-12.303.068-16.97l8.52-8.451c4.705-4.667 12.303-4.637 16.97.068l68.976 69.533 163.441-162.13c4.705-4.667 12.303-4.637 16.97.068l8.451 8.52c4.668 4.705 4.637 12.303-.068 16.97z" />
                                    </svg>
                                    <span class="sib-form-message-panel__inner-text">
                                        Your subscription has been successful.
                                    </span>
                                </div>
                            </div>
                            <div id="sib-container" class="sib-container--large sib-container--vertical">
                                <form id="sib-form" method="POST"
                                    action="https://3c02c1a1.sibforms.com/serve/MUIFAFPRWVlRk-kE9iHdv65Y3rsuzYBfqoHBiXUsxCq5iy1P50mAUPMZ2OmfFABASDBPu6E1XohUSGXfD1t2Yt26U0dKm6QZOZZHtdQdVwYPU0ho_4_v86gRaeSEiKTYre80--XhZYCeo13DP6aZboCZ-f0MxfoIv8ph2pGSdcIYZtSh6bAMsJZA0QSlWkLxoErZqGHpYO3naKhz"
                                    data-type="subscription">
                                    <div>
                                        <div class="sib-form-block">
                                            <p></p>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="sib-form-block">
                                            <div class="sib-text-form-block">
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="sib-input sib-form-block">
                                            <div class="form__entry entry_block">
                                                <div class="form__label-row ">
                                                    <label class="entry__label" for="EMAIL">
                                                    </label>
                                                    <div class="entry__field">
                                                        <input class="input style-stroke" type="text"
                                                            id="EMAIL" name="EMAIL" autocomplete="off"
                                                            placeholder="Enter your email" data-required="true"
                                                            required>
                                                    </div>
                                                </div>
                                                <label class="entry__error entry__error--primary"></label>
                                                <label class="entry__specification">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="sib-optin sib-form-block d-none">
                                            <div class="form__entry entry_mcq">
                                                <div class="form__label-row ">
                                                    <div class="entry__choice">
                                                        <label>
                                                            <input type="checkbox" class="input_replaced"
                                                                value="1" id="OPT_IN" name="OPT_IN" />
                                                            <span class="checkbox checkbox_tick_positive"></span>
                                                            <span>
                                                                <p></p>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <label class="entry__error entry__error--primary">
                                                </label>
                                                <label class="entry__specification">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="sib-form-block">
                                            <button
                                                class="sib-form-block__button sib-form-block__button-with-loader tf-btn w-100 animate-btn"
                                                form="sib-form" type="submit">
                                                <svg class="icon clickable__icon progress-indicator__icon sib-hide-loader-icon"
                                                    viewBox="0 0 512 512">
                                                    <path
                                                        d="M460.116 373.846l-20.823-12.022c-5.541-3.199-7.54-10.159-4.663-15.874 30.137-59.886 28.343-131.652-5.386-189.946-33.641-58.394-94.896-95.833-161.827-99.676C261.028 55.961 256 50.751 256 44.352V20.309c0-6.904 5.808-12.337 12.703-11.982 83.556 4.306 160.163 50.864 202.11 123.677 42.063 72.696 44.079 162.316 6.031 236.832-3.14 6.148-10.75 8.461-16.728 5.01z" />
                                                </svg>
                                                <span>Subscribe Now</span>
                                            </button>
                                        </div>
                                    </div>
                                    <input type="text" name="email_address_check" value=""
                                        class="input--hidden">
                                    <input type="hidden" name="locale" value="en">
                                </form>
                            </div>
                        </div>
                    </div>
                    <ul class="tf-social-icon justify-content-center w-100">
                        <li>
                            <a href="https://www.facebook.com/" target="_blank" class="social-facebook">
                                <span class="icon"><i class="icon-fb"></i></span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/" target="_blank" class="social-instagram">
                                <span class="icon"><i class="icon-instagram-logo"></i></span>
                            </a>
                        </li>
                        <li>
                            <a href="https://x.com/" target="_blank" class="social-x">
                                <span class="icon"><i class="icon-x"></i></span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.tiktok.com/" target="_blank" class="social-tiktok">
                                <span class="icon"><i class="icon-tiktok"></i></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /New Letter -->

    <!-- Demo -->
    <div class="modal fade modalDemo" id="modalDemo">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="header">
                    <h3 class="demo-title">Ultimate HTML Theme</h3>
                    <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
                </div>
                <div class="mega-menu">
                    <div class="row-demo">
                        <div class="demo-item">
                            <a href="index.html" class="demo-img"><img src="images/demo/home-fashion-1.jpg"
                                    alt="Demo"></a>
                            <a href="index.html" class="demo-name">Home Fashion 1</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-fashion-2.html" class="demo-img"><img
                                    src="images/demo/home-fashion-2.jpg" alt="Demo"></a>
                            <a href="home-fashion-2.html" class="demo-name">Home Fashion 2</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-fashion-3.html" class="demo-img"><img
                                    src="images/demo/home-fashion-3.jpg" alt="Demo"></a>
                            <a href="home-fashion-3.html" class="demo-name">Home Fashion 3</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-fashion-4.html" class="demo-img"><img
                                    src="images/demo/home-fashion-4.jpg" alt="Demo"></a>
                            <a href="home-fashion-4.html" class="demo-name">Home Fashion 4</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-cosmetic.html" class="demo-img"><img src="images/demo/home-cosmetic.jpg"
                                    alt="Demo"></a>
                            <a href="home-cosmetic.html" class="demo-name">Home Cosmetic</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-skin-care.html" class="demo-img"><img
                                    src="images/demo/home-skin-care.jpg" alt="Demo"></a>
                            <a href="home-skin-care.html" class="demo-name">Home Skincare</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-decor.html" class="demo-img"><img src="images/demo/home-decor.jpg"
                                    alt="Demo"></a>
                            <a href="home-decor.html" class="demo-name">Home Decor</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-jewelry.html" class="demo-img"><img src="images/demo/home-jewelry.jpg"
                                    alt="Demo"></a>
                            <a href="home-jewelry.html" class="demo-name">Home Jewelry</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-electronic-market.html" class="demo-img"><img
                                    src="images/demo/home-electronic-market.jpg" alt="Demo"></a>
                            <a href="home-electronic-market.html" class="demo-name">Home
                                Electric Market</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-pet-store.html" class="demo-img"><img
                                    src="images/demo/home-pet-store.jpg" alt="Demo"></a>
                            <a href="home-pet-store.html" class="demo-name">Home Pet Store</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-sneaker.html" class="demo-img"><img src="images/demo/home-sneaker.jpg"
                                    alt="Demo"></a>
                            <a href="home-sneaker.html" class="demo-name">Home Sneaker</a>
                        </div>
                        <!-- New -->
                        <div class="demo-item">
                            <a href="home-book.html" class="demo-img">
                                <img class="lazyload" src="images/demo/home-book.jpg"
                                    data-src="images/demo/home-book.jpg" alt="Demo">
                                <div class="demo-label">
                                    <span>New</span>
                                </div>
                            </a>
                            <a href="home-book.html" class="demo-name link">Home Book</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-organic.html" class="demo-img">
                                <img class="lazyload" src="images/demo/home-organic.jpg"
                                    data-src="images/demo/home-organic.jpg" alt="Demo">
                                <div class="demo-label">
                                    <span>New</span>
                                </div>
                            </a>
                            <a href="home-organic.html" class="demo-name link">Home Organic</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-medical.html" class="demo-img">
                                <img class="lazyload" src="images/demo/home-medical.jpg"
                                    data-src="images/demo/home-medical.jpg" alt="Demo">
                                <div class="demo-label">
                                    <span>New</span>
                                </div>
                            </a>
                            <a href="home-medical.html" class="demo-name link">Home Medical</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-gym.html" class="demo-img">
                                <img class="lazyload" src="images/demo/home-gym.jpg"
                                    data-src="images/demo/home-gym.jpg" alt="Demo">
                                <div class="demo-label">
                                    <span>New</span>
                                </div>
                            </a>
                            <a href="home-gym.html" class="demo-name link">Home Gym</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-art.html" class="demo-img">
                                <img class="lazyload" src="images/demo/home-art.jpg"
                                    data-src="images/demo/home-art.jpg" alt="Demo">
                                <div class="demo-label">
                                    <span>New</span>
                                </div>
                            </a>
                            <a href="home-art.html" class="demo-name link">Home Art</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-accessories.html" class="demo-img">
                                <img class="lazyload" src="images/demo/home-accessories.jpg"
                                    data-src="images/demo/home-accessories.jpg" alt="Demo">
                                <div class="demo-label">
                                    <span>New</span>
                                </div>
                            </a>
                            <a href="home-accessories.html" class="demo-name link">Home Accessories</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-car-auto.html" class="demo-img">
                                <img class="lazyload" src="images/demo/home-car-auto.jpg"
                                    data-src="images/demo/home-car-auto.jpg" alt="Demo">
                                <div class="demo-label">
                                    <span>New</span>
                                </div>
                            </a>
                            <a href="home-car-auto.html" class="demo-name link">Home Car Auto</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-travel.html" class="demo-img">
                                <img class="lazyload" src="images/demo/home-travel.jpg"
                                    data-src="images/demo/home-travel.jpg" alt="Demo">
                                <div class="demo-label">
                                    <span>New</span>
                                </div>
                            </a>
                            <a href="home-travel.html" class="demo-name link">Home Travel</a>
                        </div>
                        <div class="demo-item">
                            <a href="home-watch.html" class="demo-img">
                                <img class="lazyload" src="images/demo/home-watch.jpg"
                                    data-src="images/demo/home-watch.jpg" alt="Demo">
                                <div class="demo-label">
                                    <span>New</span>
                                </div>
                            </a>
                            <a href="home-watch.html" class="demo-name link">Home Watch</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Demo -->

   <!-- Javascript -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('js/carousel.js') }}"></script>
<script src="{{ asset('js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('js/lazysize.min.js') }}"></script>
<script src="{{ asset('js/wow.min.js') }}"></script>
<script src="{{ asset('js/infinityslide.js') }}"></script>
<script src="{{ asset('js/parallaxie.js') }}"></script>
<script src="{{ asset('js/count-down.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

<script src="{{ asset('js/sibforms.js') }}" defer></script>
    <script>
        window.REQUIRED_CODE_ERROR_MESSAGE = 'Please choose a country code';
        window.LOCALE = 'en';
        window.EMAIL_INVALID_MESSAGE = window.SMS_INVALID_MESSAGE =
            "The information provided is invalid. Please review the field format and try again.";

        window.REQUIRED_ERROR_MESSAGE = "This field cannot be left blank. ";

        window.GENERIC_INVALID_MESSAGE =
            "The information provided is invalid. Please review the field format and try again.";

        window.translation = {
            common: {
                selectedList: '{quantity} list selected',
                selectedLists: '{quantity} lists selected'
            }
        };

        var AUTOHIDE = Boolean(0);
    </script>
</body>


<!-- Mirrored from ochaka.vercel.app/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Aug 2025 04:29:46 GMT -->

</html>
