{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100" id="app">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>


<!DOCTYPE html>
<html lang="en"> --}}


<!-- Mirrored from nouthemes.net/html/finderland/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Mar 2023 23:06:08 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="One Global Property Service">
    <meta name="description" content="">
    <meta name="image" content="">
    <meta name="keyword" content="">
    <meta name="author" content="">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon.png">
    <title>{{env('APP_NAME')}}</title>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="plugins/bootstrap4/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/owl-carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="fonts/Linearicons/Linearicons/Font/demo-files/demo.css">
    <link rel="stylesheet" href="fonts/LineIcons/Pro-Light/font-css/LinIconsPro-Light.css">
    <link rel="stylesheet" href="fonts/LineIcons/Pro-Regular/font-css/LineIcons.css">
    <link rel="stylesheet" href="plugins/leaflet/dist/leaflet.css">
    <link rel="stylesheet" href="plugins/nouslider/nouislider.min.css">
    <link rel="stylesheet" href="plugins/apexcharts-bundle/dist/apexcharts.css">
    <link rel="stylesheet" href="plugins/dropzone/dropzone.min.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body id="app">
    <header class="header header--desktop header--one header--fixed header--transparent" data-sticky="true">
        <div class="container">
            <div class="header__wrapper">
                <div class="header__left">
                    <div class="header__logo"><a class="ps-logo light" href="index.html"><img src="img/logo-white.png" alt="" /></a><a class="ps-logo" href="index.html"><img src="img/logo.png" alt="" /></a>
                    </div>
                    <ul class="menu menu--desktop">
                        <li class="menu-item-has-children has-mega-menu"><a href="properties.html">Properties</a><span class="sub-toggle"></span>
                            <div class="mega-menu">
                                <div class="mega-menu__wrapper" data-columns="4">
                                    <div class="mega-menu__column">
                                        <h4>Grid View<span class="sub-toggle"></span></h4>
                                        <ul class="mega-menu__list menu--single">
                                            <li><a href="properties-2-columns.html">Properties with 2 columns</a>
                                            </li>
                                            <li><a href="properties-3-columns.html">Properties with 3 columns</a>
                                            </li>
                                            <li><a href="properties-4-columns.html">Properties with 4 columns</a>
                                            </li>
                                            <li><a href="properties-5-columns.html">Properties with 5 columns</a>
                                            </li>
                                            <li><a href="properties-with-sidebar-2-columns.html">With Sidebar 2 columns</a>
                                            </li>
                                            <li><a href="properties.html">With Sidebar 3 columns</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="mega-menu__column">
                                        <h4>List View<span class="sub-toggle"></span></h4>
                                        <ul class="mega-menu__list menu--single">
                                            <li><a href="properties-list.html">Properties List</a>
                                            </li>
                                            <li><a href="properties-list-without-sidebar.html">Properties List Without Sidebar</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="mega-menu__column">
                                        <h4>Map View<span class="sub-toggle"></span></h4>
                                        <ul class="mega-menu__list menu--single">
                                            <li><a href="properties-list-with-map.html">Properties List With Map</a>
                                            </li>
                                            <li><a href="properties-grid-with-map.html">Properties Grid With Map</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="mega-menu__column">
                                        <h4>Single Property<span class="sub-toggle"></span></h4>
                                        <ul class="mega-menu__list menu--single">
                                            <li><a href="single-property.html">Single Property Default</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="menu-item-has-children"><a href="blog-grid.html">Blog</a><span class="sub-toggle"></span>
                            <ul class="sub-menu">
                                <li><a href="blog-grid.html">Blog Grid</a>
                                </li>
                                <li><a href="blog-list.html">Blog List</a>
                                </li>
                                <li><a href="post-detail.html">Blog Detail</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children has-mega-menu"><a href="#">Pages</a><span class="sub-toggle"></span>
                            <div class="mega-menu">
                                <div class="mega-menu__wrapper" data-columns="5">
                                    <div class="mega-menu__column">
                                        <h4>Homepages<span class="sub-toggle"></span></h4>
                                        <ul class="mega-menu__list menu--single">
                                            <li><a href="index.html">Homepage One</a>
                                            </li>
                                            <li><a href="homepage-two.html">Homepage Two</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="mega-menu__column">
                                        <h4>Blog Pages<span class="sub-toggle"></span></h4>
                                        <ul class="mega-menu__list menu--single">
                                            <li><a href="blog-grid.html">Blog Grid</a>
                                            </li>
                                            <li><a href="blog-list.html">Blog List</a>
                                            </li>
                                            <li><a href="post-detail.html">Blog detail</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="mega-menu__column">
                                        <h4>Careers<span class="sub-toggle"></span></h4>
                                        <ul class="mega-menu__list menu--single">
                                            <li><a href="career-listing.html">Career Listing</a>
                                            </li>
                                            <li><a href="career-detail.html">Carrer Detail</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="mega-menu__column">
                                        <h4>Other pages<span class="sub-toggle"></span></h4>
                                        <ul class="mega-menu__list menu--single">
                                            <li><a href="about-us.html">About Us</a>
                                            </li>
                                            <li><a href="contact-us.html">Contact Us</a>
                                            </li>
                                            <li><a href="our-team.html">Our Team</a>
                                            </li>
                                            <li><a href="404-page.html">Page 404</a>
                                            </li>
                                            <li><a href="signin.html">Sign In</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="mega-menu__column">
                                        <h4>My Account<span class="sub-toggle"></span></h4>
                                        <ul class="mega-menu__list menu--single">
                                            <li><a href="profile.html">Profile</a>
                                            </li>
                                            <li><a href="profile.html">My Properties</a>
                                            </li>
                                            <li><a href="profile.html">Submision</a>
                                            </li>
                                            <li><a href="profile.html">My Favorite</a>
                                            </li>
                                            <li><a href="profile.html">Save Search</a>
                                            </li>
                                            <li><a href="profile.html">Change password</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a href="agents.html">Agents</a>
                        </li>
                    </ul>
                </div>
                <div class="header__right">
                    <div class="header__actions">
                        <div class="header__account"><a href="signin.html"><i class="lnil lnil-user"></i>Log In</a></div>
                        <div class="header__submit-listing">
                            <button class="ps-btn ps-btn--with-opacity">Submit Listing<i class="lnil lnil-arrow-top-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <header class="header header--mobile" data-sticky="true">
        <div class="header__left">
            <div class="header__logo"><a class="ps-logo" href="index.html"><img src="img/logo.png" alt="" /></a>
            </div>
        </div>
        <div class="header__right"><a class="header__menu-toggle ps-toggle-drawer" href="#" data-target="drawer-menu"><i class="lnil lnil-menu"></i></a></div>
    </header>
    <div id="homepage-one">
        <div class="ps-home-search bg--cover" data-background="img/bg/home-bg.jpg">
            <div class="container ps-section__wrapper">
                <div class="ps-section__content">
                    <div class="ps-section__top">
                        <h3>Find your best Real Estate</h3>
                        <p>Easy to buy & sell your property with our Finderland, Top-Class Real Estate Center</p>
                    </div>
                    <div class="ps-section__form">
                        <form class="ps-form--projects-search-2" action="https://nouthemes.net/html/finderland/index.html" method="get">
                            <div class="ps-form__top">
                                <button class="ps-btn ps-form__type-toggle active">Sell</button>
                                <button class="ps-btn ps-form__type-toggle">Rent</button>
                            </div>
                            <div class="ps-form__bottom">
                                <div class="ps-form__fields">
                                    <div class="form-group">
                                        <div class="ps-form underline with-icon"><i class="lnil lnil-map-marker ps-form__icon"></i>
                                            <input class="form-control" type="text" placeholder="Search for city, neighborhood..." /><i class="lnil lnil-target-alt ps-form__icon second"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="ps-form__actions">
                                    <button class="ps-btn ps-btn--fullwidth" type="submit">Search</button><a class="ps-form__toggle ps-search-open" href="#">Advance Search<i class="lnil lnil-chevron-down"></i></a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <p class="ps-section__stats"><span><i class="lnil lnil-apartment"></i>Over 2M properties</span><span><i class="lnil lnil-offer"></i>Without commision</span></p>
                </div>
            </div>
        </div>
        <div class="ps-site-stats">
            <div class="container">
                <div class="ps-section__intro">
                    <div class="ps-section__content">
                        <div class="ps-section__mission">
                            <h3>Our mission is to <br/>redefine real estate in the <br/>customer's favor.</h3>
                        </div>
                        <div class="ps-section__desc">
                            <p>Finderland is one of the world's leading property agents. Our experience spans the globe.</p>
                            <p>We have been advising on buying, selling and renting property for over 160 years, from country cottages to city centre offices, agricultural land to new-build developments.</p>
                        </div>
                    </div>
                    <div class="ps-section__brands">
                        <p>Featured by</p><a href="#"><img src="img/partners/1.png" alt=""></a><a href="#"><img src="img/partners/2.png" alt=""></a><a href="#"><img src="img/partners/3.png" alt=""></a><a href="#"><img src="img/partners/4.png" alt=""></a>
                    </div>
                </div>
                <div class="ps-section__wrapper">
                    <div class="ps-block--stat">
                        <div class="ps-block__left">
                            <h3>$15.4M</h3>
                        </div>
                        <div class="ps-block__right">
                            <p>owned from <br/> properties transactions</p>
                        </div>
                    </div>
                    <div class="ps-block--stat">
                        <div class="ps-block__left">
                            <h3>25K+</h3>
                        </div>
                        <div class="ps-block__right">
                            <p>Properties for <br/> buy & sell</p>
                        </div>
                    </div>
                    <div class="ps-block--stat">
                        <div class="ps-block__left">
                            <h3>500</h3>
                        </div>
                        <div class="ps-block__right">
                            <p>Daily completed transactions</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ps-section ps-project-listing with-carousel">
            <div class="container">
                <div class="ps-section__header">
                    <h3 class="ps-section__heading">Featured Properties<a class="ps-section__morelink active" href="blog.html">See all 265 listing<i class="lnil lnil-arrow-top-right"></i></a></h3>
                    <div class="ps-section__carousel-navigation"><a class="ps-btn--carouse-arrow prev" href="#carousel-featured-properties"><i class="lnil lnil-chevron-left"></i></a><a class="ps-btn--carouse-arrow next" href="#carousel-featured-properties"><i class="lnil lnil-chevron-right"></i></a></div>
                </div>
                <div class="ps-section__content">
                    <div class="owl-slider ps-carousel" data-owl-auto="true" data-owl-loop="true" data-owl-speed="7500" data-owl-gap="30" data-owl-nav="true" data-owl-item="4" data-owl-item-xs="1" data-owl-item-sm="2" data-owl-item-md="2" data-owl-item-lg="3" data-owl-duration="1000" data-owl-mousedrag="false" id="carousel-featured-properties">
                        <div class="ps-project ps-project--grid">
                            <div class="ps-project__thumbnail">
                                <div class="ps-project__image"><img src="img/property/1.jpg" alt="" /></div><a class="ps-project__overlay" href="single-property.html"></a>
                                <div class="ps-project__badges"><a class="ps-project__badge featured" href="javascript:void(0)">Featured</a></div>
                                <div class="ps-project__actions"><a href="javascript:void(0)"><i class="lnil lnil-switch"></i></a><a href="javascript:void(0)"><i class="lnil lnil-star-fill"></i></a></div>
                            </div>
                            <div class="ps-project__content">
                                <h4 class="ps-project__name"><a href="single-property.html">David Villa</a></h4>
                                <p class="ps-project__address">3 Industrial Road, Boston, MA 5502, USA</p>
                                <p class="ps-project__price"><strong>$7,250</strong> / <span>month</span>
                                </p>
                                <div class="ps-project__meta">
                                    <figure>
                                        <figcaption>Realtors</figcaption>
                                        <p>Robertson</p>
                                    </figure>
                                    <figure>
                                        <figcaption>Status</figcaption>
                                        <p>For Rent</p>
                                    </figure>
                                    <figure>
                                        <figcaption>Time</figcaption>
                                        <p>7/4/2021</p>
                                    </figure>
                                </div>
                                <div class="ps-project__services">
                                    <p><span><i class="lnil lnil-size"></i>250 Sqft</span></p>
                                    <p><span><i class="lnil lnil-hospital-bed"></i>3 Rooms</span></p>
                                    <p><span><i class="icon icon-bathtub"></i>2 Rooms</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-project ps-project--grid">
                            <div class="ps-project__thumbnail">
                                <div class="ps-project__image"><img src="img/property/1.jpg" alt="" /></div><a class="ps-project__overlay" href="single-property.html"></a>
                                <div class="ps-project__badges"><a class="ps-project__badge featured" href="javascript:void(0)">Featured</a></div>
                                <div class="ps-project__actions"><a href="javascript:void(0)"><i class="lnil lnil-switch"></i></a><a href="javascript:void(0)"><i class="lnil lnil-star-fill"></i></a></div>
                            </div>
                            <div class="ps-project__content">
                                <h4 class="ps-project__name"><a href="single-property.html">Lisa Urban House</a></h4>
                                <p class="ps-project__address">5300 Lakeside, London, 2240, UK</p>
                                <p class="ps-project__price"><strong>$24,500</strong>
                                </p>
                                <div class="ps-project__meta">
                                    <figure>
                                        <figcaption>Realtors</figcaption>
                                        <p>Ben Jr</p>
                                    </figure>
                                    <figure>
                                        <figcaption>Status</figcaption>
                                        <p>For Sell</p>
                                    </figure>
                                    <figure>
                                        <figcaption>Time</figcaption>
                                        <p>2/4/2021</p>
                                    </figure>
                                </div>
                                <div class="ps-project__services">
                                    <p><span><i class="lnil lnil-size"></i>1250 Sqft</span></p>
                                    <p><span><i class="lnil lnil-hospital-bed"></i>4 Rooms</span></p>
                                    <p><span><i class="icon icon-bathtub"></i>3 Rooms</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-project ps-project--grid">
                            <div class="ps-project__thumbnail">
                                <div class="ps-project__image"><img src="img/property/1.jpg" alt="" /></div><a class="ps-project__overlay" href="single-property.html"></a>
                                <div class="ps-project__badges"><a class="ps-project__badge featured" href="javascript:void(0)">Featured</a></div>
                                <div class="ps-project__actions"><a href="javascript:void(0)"><i class="lnil lnil-switch"></i></a><a href="javascript:void(0)"><i class="lnil lnil-star-fill"></i></a></div>
                            </div>
                            <div class="ps-project__content">
                                <h4 class="ps-project__name"><a href="single-property.html">75A Cera Residence</a></h4>
                                <p class="ps-project__address">75A Cera Residence, Brooklyn, NY 53207, USA</p>
                                <p class="ps-project__price"><strong>$54,500</strong>
                                </p>
                                <div class="ps-project__meta">
                                    <figure>
                                        <figcaption>Realtors</figcaption>
                                        <p>ACA Group</p>
                                    </figure>
                                    <figure>
                                        <figcaption>Status</figcaption>
                                        <p>For Sell</p>
                                    </figure>
                                    <figure>
                                        <figcaption>Time</figcaption>
                                        <p>1/4/2021</p>
                                    </figure>
                                </div>
                                <div class="ps-project__services">
                                    <p><span><i class="lnil lnil-size"></i>4250 Sqft</span></p>
                                    <p><span><i class="lnil lnil-hospital-bed"></i>6 Rooms</span></p>
                                    <p><span><i class="icon icon-bathtub"></i>4 Rooms</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-project ps-project--grid">
                            <div class="ps-project__thumbnail">
                                <div class="ps-project__image"><img src="img/property/1.jpg" alt="" /></div><a class="ps-project__overlay" href="single-property.html"></a>
                                <div class="ps-project__badges"><a class="ps-project__badge featured" href="javascript:void(0)">Featured</a></div>
                                <div class="ps-project__actions"><a href="javascript:void(0)"><i class="lnil lnil-switch"></i></a><a href="javascript:void(0)"><i class="lnil lnil-star-fill"></i></a></div>
                            </div>
                            <div class="ps-project__content">
                                <h4 class="ps-project__name"><a href="single-property.html">Santorina Blue Homestay</a></h4>
                                <p class="ps-project__address">192 King Avenue, Mahattan, FL 5603, USA</p>
                                <p class="ps-project__price"><strong>$3,210</strong>
                                </p>
                                <div class="ps-project__meta">
                                    <figure>
                                        <figcaption>Realtors</figcaption>
                                        <p>Robertson</p>
                                    </figure>
                                    <figure>
                                        <figcaption>Status</figcaption>
                                        <p>For Rent</p>
                                    </figure>
                                    <figure>
                                        <figcaption>Time</figcaption>
                                        <p>26/3/2021</p>
                                    </figure>
                                </div>
                                <div class="ps-project__services">
                                    <p><span><i class="lnil lnil-size"></i>4250 Sqft</span></p>
                                    <p><span><i class="lnil lnil-hospital-bed"></i>3 Rooms</span></p>
                                    <p><span><i class="icon icon-bathtub"></i>2 Rooms</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ps-section ps-property-types with-carousel">
            <div class="container">
                <div class="ps-section__header">
                    <h3 class="ps-section__heading">Property Types</h3>
                    <div class="ps-section__carousel-navigation"><a class="ps-btn--carouse-arrow prev" href="#carousel-property-types"><i class="lnil lnil-chevron-left"></i></a><a class="ps-btn--carouse-arrow next" href="#carousel-property-types"><i class="lnil lnil-chevron-right"></i></a></div>
                </div>
                <div class="ps-section__content">
                    <div class="owl-slider ps-carousel" data-owl-auto="true" data-owl-loop="true" data-owl-speed="7500" data-owl-gap="30" data-owl-nav="true" data-owl-item="6" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="5" data-owl-duration="1000" data-owl-mousedrag="false" id="carousel-property-types">
                        <div class="ps-block--property-type">
                            <div class="ps-block__image"><img src="img/icons/propety-types/1.png" alt="" /></div>
                            <div class="ps-block__content">
                                <h5>Private House</h5>
                                <p>12 Properties</p>
                            </div>
                        </div>
                        <div class="ps-block--property-type">
                            <div class="ps-block__image"><img src="img/icons/propety-types/2.png" alt="" /></div>
                            <div class="ps-block__content">
                                <h5>Apartment</h5>
                                <p>47 Properties</p>
                            </div>
                        </div>
                        <div class="ps-block--property-type">
                            <div class="ps-block__image"><img src="img/icons/propety-types/3.png" alt="" /></div>
                            <div class="ps-block__content">
                                <h5>Townhouse</h5>
                                <p>8 Properties</p>
                            </div>
                        </div>
                        <div class="ps-block--property-type">
                            <div class="ps-block__image"><img src="img/icons/propety-types/4.png" alt="" /></div>
                            <div class="ps-block__content">
                                <h5>Villa</h5>
                                <p>20 Properties</p>
                            </div>
                        </div>
                        <div class="ps-block--property-type">
                            <div class="ps-block__image"><img src="img/icons/propety-types/5.png" alt="" /></div>
                            <div class="ps-block__content">
                                <h5>Office</h5>
                                <p>32 Properties</p>
                            </div>
                        </div>
                        <div class="ps-block--property-type">
                            <div class="ps-block__image"><img src="img/icons/propety-types/6.png" alt="" /></div>
                            <div class="ps-block__content">
                                <h5>Shop</h5>
                                <p>6 Properties</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ps-section ps-neighborhoods with-carousel">
            <div class="container">
                <div class="ps-section__header">
                    <h3 class="ps-section__heading">Discover The Neighborhoods</h3>
                    <div class="ps-section__carousel-navigation"><a class="ps-btn--carouse-arrow prev" href="#carousel-neighborhoods"><i class="lnil lnil-chevron-left"></i></a><a class="ps-btn--carouse-arrow next" href="#carousel-neighborhoods"><i class="lnil lnil-chevron-right"></i></a></div>
                </div>
                <div class="ps-section__content">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="ps-block--neighborhood">
                                <div class="ps-block__image"><img src="img/neighborhoods/1.jpg" alt="" /><a class="ps-block__overlay" href="#"></a></div>
                                <div class="ps-block__content">
                                    <h3><a href="#">Los Angeles</a></h3>
                                    <p><strong>265</strong> Properties</p>
                                    <p><strong>30 Minutes</strong> Driving</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="ps-block--neighborhood">
                                <div class="ps-block__image"><img src="img/neighborhoods/2.jpg" alt="" /><a class="ps-block__overlay" href="#"></a></div>
                                <div class="ps-block__content">
                                    <h3><a href="#">San Francisco</a></h3>
                                    <p><strong>104</strong> Properties</p>
                                    <p><strong>1.5 Hours</strong> Driving</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="ps-block--neighborhood">
                                <div class="ps-block__image"><img src="img/neighborhoods/3.jpg" alt="" /><a class="ps-block__overlay" href="#"></a></div>
                                <div class="ps-block__content">
                                    <h3><a href="#">San Jose</a></h3>
                                    <p><strong>55</strong> Properties</p>
                                    <p><strong>5 Hours</strong> Driving</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="ps-block--neighborhood">
                                <div class="ps-block__image"><img src="img/neighborhoods/4.jpg" alt="" /><a class="ps-block__overlay" href="#"></a></div>
                                <div class="ps-block__content">
                                    <h3><a href="#">Santa Monica</a></h3>
                                    <p><strong>63</strong> Properties</p>
                                    <p><strong>4.5 Hours</strong> Driving</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="ps-block--neighborhood">
                                <div class="ps-block__image"><img src="img/neighborhoods/5.jpg" alt="" /><a class="ps-block__overlay" href="#"></a></div>
                                <div class="ps-block__content">
                                    <h3><a href="#">San Diego</a></h3>
                                    <p><strong>86</strong> Properties</p>
                                    <p><strong>45 Minutes</strong> Driving</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="ps-block--neighborhood">
                                <div class="ps-block__image"><img src="img/neighborhoods/6.jpg" alt="" /><a class="ps-block__overlay" href="#"></a></div>
                                <div class="ps-block__content">
                                    <h3><a href="#">California</a></h3>
                                    <p><strong>334</strong> Properties</p>
                                    <p><strong>2.5 Hours</strong> Driving</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="ps-block--neighborhood">
                                <div class="ps-block__image"><img src="img/neighborhoods/7.jpg" alt="" /><a class="ps-block__overlay" href="#"></a></div>
                                <div class="ps-block__content">
                                    <h3><a href="#">Oakland</a></h3>
                                    <p><strong>45</strong> Properties</p>
                                    <p><strong>4 Hours</strong> Driving</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="ps-block--neighborhood">
                                <div class="ps-block__image"><img src="img/neighborhoods/8.jpg" alt="" /><a class="ps-block__overlay" href="#"></a></div>
                                <div class="ps-block__content">
                                    <h3><a href="#">Huntington Beach</a></h3>
                                    <p><strong>7</strong> Properties</p>
                                    <p><strong>5.5 Hours</strong> Driving</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ps-section ps-top-destinations with-bg bg--cover" data-background="img/bg/destination-bg.jpg">
            <div class="container">
                <div class="ps-section__header">
                    <h3 class="ps-section__heading">Discover Top Destinations</h3>
                </div>
                <div class="ps-section__content">
                    <div class="ps-section__columns">
                        <div class="ps-section__column">
                            <div class="ps-block--destination">
                                <div class="ps-block__image"><img src="img/destinations/1.jpg" alt="" /><a class="ps-block__overlay" href="#"></a></div>
                                <div class="ps-block__content">
                                    <h4><a href="#">New York City, USA</a></h4>
                                    <p><strong>452</strong> Properties</p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-section__column">
                            <div class="ps-block--destination">
                                <div class="ps-block__image"><img src="img/destinations/2.jpg" alt="" /><a class="ps-block__overlay" href="#"></a></div>
                                <div class="ps-block__content">
                                    <h4><a href="#">London, England</a></h4>
                                    <p><strong>372</strong> Properties</p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-section__column">
                            <div class="ps-block--destination">
                                <div class="ps-block__image"><img src="img/destinations/3.jpg" alt="" /><a class="ps-block__overlay" href="#"></a></div>
                                <div class="ps-block__content">
                                    <h4><a href="#">Berlin, Germany</a></h4>
                                    <p><strong>401</strong> Properties</p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-section__column">
                            <div class="ps-block--destination">
                                <div class="ps-block__image"><img src="img/destinations/4.jpg" alt="" /><a class="ps-block__overlay" href="#"></a></div>
                                <div class="ps-block__content">
                                    <h4><a href="#">Istanbul, Turkey</a></h4>
                                    <p><strong>215</strong> Properties</p>
                                </div>
                            </div>
                        </div>
                        <div class="ps-section__column">
                            <div class="ps-block--destination">
                                <div class="ps-block__image"><img src="img/destinations/5.jpg" alt="" /><a class="ps-block__overlay" href="#"></a></div>
                                <div class="ps-block__content">
                                    <h4><a href="#">Sao Paulo, Brazil</a></h4>
                                    <p><strong>301</strong> Properties</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ps-testimonials">
            <div class="container">
                <div class="ps-section__wrapper">
                    <div class="ps-section__left">
                        <div class="ps-block--site-score bg--cover" data-background="img/bg/destination-bg.jpg">
                            <h3>4.8</h3>
                            <div class="ps-block__ratings"><span class="ps-block__rating-items"><i class="lnil lnil-star-fill"></i><i class="lnil lnil-star-fill"></i><i class="lnil lnil-star-fill"></i><i class="lnil lnil-star-fill"></i><i class="lnil lnil-star-fill"></i></span>
                                <p>Trustscore on 215 reviews</p>
                            </div>
                            <div class="ps-block__footer">
                                <p>See all review on</p><img src="img/brands/trust-pilot.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="ps-section__right">
                        <div class="ps-block--testimonial">
                            <div class="ps-block__content">
                                <h4>“As a buyer in a busy market where everyone is a real estate agent, I seek transparency in true numbers & Finderland is my first and only choice.Searches for multiplexes, property comparisons, and the loan estimator. Works great.”</h4>
                            </div>
                            <div class="ps-block__bottom">
                                <p>Thiago Alcatara</p>
                                <p><span>Chicago, FL</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ps-section ps-highlight-posts with-carousel">
            <div class="container">
                <div class="ps-section__header">
                    <h3 class="ps-section__heading">News & Consult<a class="ps-section__morelink" href="blog.html">See All Articles<i class="lnil lnil-arrow-top-right"></i></a></h3>
                    <div class="ps-section__carousel-navigation"><a class="ps-btn--carouse-arrow prev" href="#carousel-highlight-posts"><i class="lnil lnil-chevron-left"></i></a><a class="ps-btn--carouse-arrow next" href="#carousel-highlight-posts"><i class="lnil lnil-chevron-right"></i></a></div>
                </div>
                <div class="ps-section__content">
                    <div class="owl-slider ps-carousel" data-owl-auto="true" data-owl-loop="true" data-owl-speed="7500" data-owl-gap="30" data-owl-nav="true" data-owl-item="4" data-owl-item-xs="1" data-owl-item-sm="2" data-owl-item-md="2" data-owl-item-lg="3" data-owl-duration="1000" data-owl-mousedrag="false" id="carousel-highlight-posts">
                        <div class="ps-post ps-post--grid">
                            <div class="ps-post__thumbnail"><img src="img/posts/highlight-1.jpg" alt="" /><a class="ps-post__overlay" href="post-detail.html"></a></div>
                            <div class="ps-post__content">
                                <div class="ps-post__meta">
                                    <div class="ps-post__categories"><a href="#">Featured</a>
                                    </div><span class="ps-post__created-at">August 20, 2021</span>
                                </div>
                                <h4 class="ps-post__title"><a href="post-detail.html">Top 5 Projects in Florida, US 2021</a></h4>
                                <div class="ps-post__desc">
                                    <p>In this blog post, we describe the end to end design and implementation of the Match Score and the challenges faced along the way.</p>
                                </div>
                                <div class="ps-post__bottom"><span class="ps-post__author"><i class="lnil lnil-user"></i>by<a href="#"> Admin</a></span><span class="ps-post__counter"><i class="lnil lnil-eye"></i>5.6k views</span></div>
                            </div>
                        </div>
                        <div class="ps-post ps-post--grid">
                            <div class="ps-post__thumbnail"><img src="img/posts/highlight-2.jpg" alt="" /><a class="ps-post__overlay" href="post-detail.html"></a></div>
                            <div class="ps-post__content">
                                <div class="ps-post__meta">
                                    <div class="ps-post__categories"><a href="#">News</a>
                                    </div><span class="ps-post__created-at">August 20, 2021</span>
                                </div>
                                <h4 class="ps-post__title"><a href="post-detail.html">Serie Shophouse Launch In July, Opportunity For Investors</a></h4>
                                <div class="ps-post__desc">
                                    <p>Recommending new homes to users is a challenging problem</p>
                                </div>
                                <div class="ps-post__bottom"><span class="ps-post__author"><i class="lnil lnil-user"></i>by<a href="#"> Admin</a></span><span class="ps-post__counter"><i class="lnil lnil-eye"></i>5.6k views</span></div>
                            </div>
                        </div>
                        <div class="ps-post ps-post--grid">
                            <div class="ps-post__thumbnail"><img src="img/posts/highlight-3.jpg" alt="" /><a class="ps-post__overlay" href="post-detail.html"></a></div>
                            <div class="ps-post__content">
                                <div class="ps-post__meta">
                                    <div class="ps-post__categories"><a href="#">Market</a>
                                    </div><span class="ps-post__created-at">August 20, 2021</span>
                                </div>
                                <h4 class="ps-post__title"><a href="post-detail.html">The Market of Real Estate UK In August</a></h4>
                                <div class="ps-post__desc">
                                    <p>Roughly 85% of all our users interact with the image gallery in our mobile apps and we receive millions of clicks per day on the web</p>
                                </div>
                                <div class="ps-post__bottom"><span class="ps-post__author"><i class="lnil lnil-user"></i>by<a href="#"> Admin</a></span><span class="ps-post__counter"><i class="lnil lnil-eye"></i>5.6k views</span></div>
                            </div>
                        </div>
                        <div class="ps-post ps-post--grid">
                            <div class="ps-post__thumbnail"><img src="img/posts/highlight-4.jpg" alt="" /><a class="ps-post__overlay" href="post-detail.html"></a></div>
                            <div class="ps-post__content">
                                <div class="ps-post__meta">
                                    <div class="ps-post__categories"><a href="#">Market</a>
                                    </div><span class="ps-post__created-at">August 20, 2021</span>
                                </div>
                                <h4 class="ps-post__title"><a href="post-detail.html">5 Advices For New Apartment</a></h4>
                                <div class="ps-post__desc">
                                    <p>In this post, we are going to explain important features and behavior that we use in different models</p>
                                </div>
                                <div class="ps-post__bottom"><span class="ps-post__author"><i class="lnil lnil-user"></i>by<a href="#"> Admin</a></span><span class="ps-post__counter"><i class="lnil lnil-eye"></i>5.6k views</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <main class="ps-main">
        <footer class="ps-footer ps-footer--default bg--cover" data-background="img/bg/footer-bg.jpg">
            <div class="container">
                <div class="ps-footer__top">
                    <div class="ps-footer__widgets">
                        <div class="ps-footer__column">
                            <div class="ps-widget ps-widget--footer ps-widget-footer-contact">
                                <div class="ps-widget__content">
                                    <p>59 Bervely Hill Ave, Brooklyn Town, New York, NY 5630, CA, US</p>
                                    <p>+056 686 56 56 98</p>
                                    <p><a href="mailto%40hello%40finderland.html"><span class="__cf_email__" data-cfemail="28404d444447684e41464c4d5a4449464c064b4745">[email&#160;protected]</span></a></p>
                                    <div class="ps-social-links light"><a href="#"><i class="lnir lnir-twitter-filled"></i></a><a href="#"><i class="lnir lnir-facebook-filled"></i></a><a href="#"><i class="lnir lnir-google"></i></a><a href="#"><i class="lnir lnir-youtube"></i></a><a href="#"><i class="lnir lnir-vimeo"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ps-footer__column">
                            <div class="ps-widget ps-widget--footer">
                                <div class="ps-widget__content">
                                    <ul class="ps-widget__links">
                                        <li><a href="shop.html">For sell</a></li>
                                        <li><a href="shop.html">For Rent</a></li>
                                        <li><a href="shop.html">Consult</a></li>
                                        <li><a href="shop.html">Privacy Policy</a></li>
                                        <li><a href="shop.html">Term &amp; Conditions</a></li>
                                        <li><a href="shop.html">FAQs</a></li>
                                        <li><a href="shop.html">User's Guide</a></li>
                                        <li><a href="shop.html">Sitemap</a></li>
                                        <li><a href="shop.html">Download App</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="ps-footer__column">
                            <div class="ps-widget ps-widget--footer">
                                <div class="ps-widget__content">
                                    <ul class="ps-widget__links">
                                        <li><a href="about-us.html">about</a></li>
                                        <li><a href="contact-us.html">Contact</a></li>
                                        <li><a href="careers.html">Careers</a></li>
                                        <li><a href="news.html">News</a></li>
                                        <li><a href="help-center.html">Help Center</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ps-footer__subscribe">
                        <div class="ps-widget ps-widget--footer ps-widget--footer-subscribe">
                            <div class="ps-widget__content">
                                <form class="ps-form--widget-subscribe" action="https://nouthemes.net/html/finderland/index.html" method="get">
                                    <div class="ps-form__top">
                                        <p>Be the first to get the latest news about market, promotions and much more!</p>
                                    </div>
                                    <div class="ps-form__content">
                                        <div class="ps-form__icon"><i class="icon-envelope"></i></div>
                                        <input class="form-control" type="text" placeholder="Email Address" />
                                        <button><i class="icon-arrow-right"></i></button>
                                    </div>
                                    <div class="ps-form__bottom">
                                        <p>By subscribing, you accept the <a href="#">Privacy Policy</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ps-footer__bottom">
                    <div class="ps-footer__copyright">
                        <p>&copy; 2021 <strong>Finderland</strong>. All right reserved</p>
                    </div>
                </div>
            </div>
        </footer>
    </main>
    <nav class="navigation--bottom">
        <div class="navigation__wrapper">
            <div class="navigation__item"><a class="active" href="index.html"><i class="lnil lnil-home"></i></a></div>
            <div class="navigation__item"><a class="ps-toggle-drawer" href="#" data-target="drawer-menu"><i class="lnil lnil-menu"></i></a></div>
            <div class="navigation__item"><a class="ps-search-open" href="search.html"><i class="lnil lnil-search-alt"></i></a></div>
            <div class="navigation__item"><a href="signin.html"><i class="lnil lnil-user-alt"></i></a></div>
        </div>
    </nav>
    <div class="ps-drawer" id="drawer-menu">
        <div class="ps-drawer__top">
            <div class="ps-drawer__heading">Menu</div><a class="ps-drawer__close" href="#"><i class="icon-cross"></i></a>
        </div>
        <div class="ps-drawer__bottom">
            <ul class="menu--mobile">
                <li class="menu-item-has-children has-mega-menu"><a href="properties.html">Properties</a><span class="sub-toggle"></span>
                    <div class="mega-menu">
                        <div class="mega-menu__wrapper" data-columns="4">
                            <div class="mega-menu__column">
                                <h4>Grid View<span class="sub-toggle"></span></h4>
                                <ul class="mega-menu__list menu--single">
                                    <li><a href="properties-2-columns.html">Properties with 2 columns</a>
                                    </li>
                                    <li><a href="properties-3-columns.html">Properties with 3 columns</a>
                                    </li>
                                    <li><a href="properties-4-columns.html">Properties with 4 columns</a>
                                    </li>
                                    <li><a href="properties-5-columns.html">Properties with 5 columns</a>
                                    </li>
                                    <li><a href="properties-with-sidebar-2-columns.html">With Sidebar 2 columns</a>
                                    </li>
                                    <li><a href="properties.html">With Sidebar 3 columns</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mega-menu__column">
                                <h4>List View<span class="sub-toggle"></span></h4>
                                <ul class="mega-menu__list menu--single">
                                    <li><a href="properties-list.html">Properties List</a>
                                    </li>
                                    <li><a href="properties-list-without-sidebar.html">Properties List Without Sidebar</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mega-menu__column">
                                <h4>Map View<span class="sub-toggle"></span></h4>
                                <ul class="mega-menu__list menu--single">
                                    <li><a href="properties-list-with-map.html">Properties List With Map</a>
                                    </li>
                                    <li><a href="properties-grid-with-map.html">Properties Grid With Map</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mega-menu__column">
                                <h4>Single Property<span class="sub-toggle"></span></h4>
                                <ul class="mega-menu__list menu--single">
                                    <li><a href="single-property.html">Single Property Default</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="menu-item-has-children"><a href="blog-grid.html">Blog</a><span class="sub-toggle"></span>
                    <ul class="sub-menu">
                        <li><a href="blog-grid.html">Blog Grid</a>
                        </li>
                        <li><a href="blog-list.html">Blog List</a>
                        </li>
                        <li><a href="post-detail.html">Blog Detail</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item-has-children has-mega-menu"><a href="#">Pages</a><span class="sub-toggle"></span>
                    <div class="mega-menu">
                        <div class="mega-menu__wrapper" data-columns="5">
                            <div class="mega-menu__column">
                                <h4>Homepages<span class="sub-toggle"></span></h4>
                                <ul class="mega-menu__list menu--single">
                                    <li><a href="index.html">Homepage One</a>
                                    </li>
                                    <li><a href="homepage-two.html">Homepage Two</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mega-menu__column">
                                <h4>Blog Pages<span class="sub-toggle"></span></h4>
                                <ul class="mega-menu__list menu--single">
                                    <li><a href="blog-grid.html">Blog Grid</a>
                                    </li>
                                    <li><a href="blog-list.html">Blog List</a>
                                    </li>
                                    <li><a href="post-detail.html">Blog detail</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mega-menu__column">
                                <h4>Careers<span class="sub-toggle"></span></h4>
                                <ul class="mega-menu__list menu--single">
                                    <li><a href="career-listing.html">Career Listing</a>
                                    </li>
                                    <li><a href="career-detail.html">Carrer Detail</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mega-menu__column">
                                <h4>Other pages<span class="sub-toggle"></span></h4>
                                <ul class="mega-menu__list menu--single">
                                    <li><a href="about-us.html">About Us</a>
                                    </li>
                                    <li><a href="contact-us.html">Contact Us</a>
                                    </li>
                                    <li><a href="our-team.html">Our Team</a>
                                    </li>
                                    <li><a href="404-page.html">Page 404</a>
                                    </li>
                                    <li><a href="signin.html">Sign In</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mega-menu__column">
                                <h4>My Account<span class="sub-toggle"></span></h4>
                                <ul class="mega-menu__list menu--single">
                                    <li><a href="profile.html">Profile</a>
                                    </li>
                                    <li><a href="profile.html">My Properties</a>
                                    </li>
                                    <li><a href="profile.html">Submision</a>
                                    </li>
                                    <li><a href="profile.html">My Favorite</a>
                                    </li>
                                    <li><a href="profile.html">Save Search</a>
                                    </li>
                                    <li><a href="profile.html">Change password</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li><a href="agents.html">Agents</a>
                </li>
            </ul>
        </div>
    </div>
    <div id="back2top"><i class="lnil lnil-arrow-up"></i></div>
    <div class="ps-dialog ps-dialog--search" id="search-extra-dialog">
        <div class="ps-dialog__wrapper">
            <form class="ps-form--projects-search ps-form--projects-search-extra" action="https://nouthemes.net/html/finderland/index.html" method="get">
                <div class="ps-form__top">
                    <button class="ps-btn ps-form__type-toggle active">Sell</button>
                    <button class="ps-btn ps-form__type-toggle">Rent</button>
                </div>
                <div class="ps-form__extra">
                    <div class="ps-form__fields">
                        <div class="ps-form__block">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-6">
                                    <div class="form-group">
                                        <div class="ps-form underline with-icon"><i class="lnil lnil-map-marker ps-form__icon"></i>
                                            <input class="form-control" type="text" placeholder="Search for city, neighborhood..." />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-6">
                                    <div class="form-group">
                                        <div class="ps-form underline with-icon select"><i class="lnil lnil-map ps-form__icon"></i>
                                            <select class="form-control">
                                                <option value="placeholder">Location</option>
                                                <option value="Chicago">Chicago</option>
                                                <option value="new_york">New York</option>
                                            </select><i class="lnil lnil-chevron-down ps-form__select-toggle"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-6">
                                    <div class="form-group">
                                        <div class="ps-form underline with-icon select"><i class="lnil lnil-apartment ps-form__icon"></i>
                                            <select class="form-control">
                                                <option value="placeholder">Property Type</option>
                                                <option value="the_grounds">The Grounds</option>
                                                <option value="private-house">Private House</option>
                                                <option value="aparments">Aparments</option>
                                            </select><i class="lnil lnil-chevron-down ps-form__select-toggle"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-6">
                                    <div class="form-group">
                                        <div class="ps-form underline with-icon select"><i class="lnil lnil-bolt ps-form__icon"></i>
                                            <select class="form-control">
                                                <option value="placeholder">Status</option>
                                                <option value="sale">Sell</option>
                                                <option value="rent">Rent</option>
                                            </select><i class="lnil lnil-chevron-down ps-form__select-toggle"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-6">
                                    <div class="form-group">
                                        <div class="ps-form underline with-icon select"><i class="lnil lnil-hospital-bed ps-form__icon"></i>
                                            <select class="form-control">
                                                <option value="placeholder">Bathroom</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select><i class="lnil lnil-chevron-down ps-form__select-toggle"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-6">
                                    <div class="form-group">
                                        <div class="ps-form underline with-icon select"><i class="icon icon-bathtub ps-form__icon"></i>
                                            <select class="form-control">
                                                <option value="placeholder">Bedroom</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select><i class="lnil lnil-chevron-down ps-form__select-toggle"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-6">
                                    <div class="form-group">
                                        <div class="ps-form underline">
                                            <input class="form-control" type="text" placeholder=" " />
                                            <label>Property ID</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ps-form__block row">
                            <div class="col-md-6 col-12">
                                <div class="form-group form-group--with-slider">
                                    <label><i class="lnil lnil-coin"></i>Price Range (US Dollar)</label>
                                    <div class="ps-form--slider">
                                        <div class="ps-form__range">
                                            <div class="ps-nouislider" id="dialog_price_range"></div>
                                        </div>
                                        <p class="ps-form__attributes"><span>From :</span><strong class="ps-form__attribute ps-form__min"><span class="ps-form__unit">$</span><span class="value">0</span></strong>-<strong class="ps-form__attribute ps-form__max"><span class="ps-form__unit">$</span><span class="value">0</span></strong></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group form-group--with-slider">
                                    <label><i class="lnil lnil-size"></i>Land Area (SQFT)</label>
                                    <div class="ps-form--slider">
                                        <div class="ps-form__range">
                                            <div id="dialog_land_area_range"></div>
                                        </div>
                                        <p class="ps-form__attributes"><span>From :</span><strong class="ps-form__attribute ps-form__min"><span class="value">0</span><span class="ps-form__unit">sqft</span></strong>-<strong class="ps-form__attribute ps-form__max"><span class="value">0</span><span class="ps-form__unit">sqft</span></strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ps-form__block">
                            <div class="ps-form__features">
                                <p>Other Feature</p>
                                <div class="ps-form__feature-items">
                                    <div class="ps-form__item">
                                        <div class="ps-checkbox">
                                            <input class="form-control" type="checkbox" id="dialog-feature-0" name="feature" checked="checked" />
                                            <label for="dialog-feature-0">Air Condition</label>
                                        </div>
                                    </div>
                                    <div class="ps-form__item">
                                        <div class="ps-checkbox">
                                            <input class="form-control" type="checkbox" id="dialog-feature-1" name="feature" checked="checked" />
                                            <label for="dialog-feature-1">Gym</label>
                                        </div>
                                    </div>
                                    <div class="ps-form__item">
                                        <div class="ps-checkbox">
                                            <input class="form-control" type="checkbox" id="dialog-feature-2" name="feature" checked="checked" />
                                            <label for="dialog-feature-2">Refrigerator</label>
                                        </div>
                                    </div>
                                    <div class="ps-form__item">
                                        <div class="ps-checkbox">
                                            <input class="form-control" type="checkbox" id="dialog-feature-3" name="feature" checked="checked" />
                                            <label for="dialog-feature-3">Doorman</label>
                                        </div>
                                    </div>
                                    <div class="ps-form__item">
                                        <div class="ps-checkbox">
                                            <input class="form-control" type="checkbox" id="dialog-feature-4" name="feature" checked="checked" />
                                            <label for="dialog-feature-4">Barbeque</label>
                                        </div>
                                    </div>
                                    <div class="ps-form__item">
                                        <div class="ps-checkbox">
                                            <input class="form-control" type="checkbox" id="dialog-feature-5" name="feature" checked="checked" />
                                            <label for="dialog-feature-5">Microwave</label>
                                        </div>
                                    </div>
                                    <div class="ps-form__item">
                                        <div class="ps-checkbox">
                                            <input class="form-control" type="checkbox" id="dialog-feature-6" name="feature" checked="checked" />
                                            <label for="dialog-feature-6">Stunning Views</label>
                                        </div>
                                    </div>
                                    <div class="ps-form__item">
                                        <div class="ps-checkbox">
                                            <input class="form-control" type="checkbox" id="dialog-feature-7" name="feature" checked="checked" />
                                            <label for="dialog-feature-7">Central Heating</label>
                                        </div>
                                    </div>
                                    <div class="ps-form__item">
                                        <div class="ps-checkbox">
                                            <input class="form-control" type="checkbox" id="dialog-feature-8" name="feature" checked="checked" />
                                            <label for="dialog-feature-8">Dryer</label>
                                        </div>
                                    </div>
                                    <div class="ps-form__item">
                                        <div class="ps-checkbox">
                                            <input class="form-control" type="checkbox" id="dialog-feature-9" name="feature" checked="checked" />
                                            <label for="dialog-feature-9">Laudry</label>
                                        </div>
                                    </div>
                                    <div class="ps-form__item">
                                        <div class="ps-checkbox">
                                            <input class="form-control" type="checkbox" id="dialog-feature-10" name="feature" checked="checked" />
                                            <label for="dialog-feature-10">Lawn</label>
                                        </div>
                                    </div>
                                    <div class="ps-form__item">
                                        <div class="ps-checkbox">
                                            <input class="form-control" type="checkbox" id="dialog-feature-11" name="feature" checked="checked" />
                                            <label for="dialog-feature-11">Outdoor Shower</label>
                                        </div>
                                    </div>
                                    <div class="ps-form__item">
                                        <div class="ps-checkbox">
                                            <input class="form-control" type="checkbox" id="dialog-feature-12" name="feature" checked="checked" />
                                            <label for="dialog-feature-12">Outdoor Shower</label>
                                        </div>
                                    </div>
                                    <div class="ps-form__item">
                                        <div class="ps-checkbox">
                                            <input class="form-control" type="checkbox" id="dialog-feature-13" name="feature" checked="checked" />
                                            <label for="dialog-feature-13">Waterfront</label>
                                        </div>
                                    </div>
                                    <div class="ps-form__item">
                                        <div class="ps-checkbox">
                                            <input class="form-control" type="checkbox" id="dialog-feature-14" name="feature" checked="checked" />
                                            <label for="dialog-feature-14">Parking</label>
                                        </div>
                                    </div>
                                    <div class="ps-form__item">
                                        <div class="ps-checkbox">
                                            <input class="form-control" type="checkbox" id="dialog-feature-15" name="feature" checked="checked" />
                                            <label for="dialog-feature-15">TV Cable</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ps-form__actions">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <button class="ps-btn ps-btn--fullwidth ps-btn--gray" id="close-search-extra">Cancel</button>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <button class="ps-btn ps-btn--fullwidth ps-btn--gray" type="reset">Reset</button>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <button class="ps-btn ps-btn--fullwidth" type="submit">Search</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="ps-site-overlay"></div>
    <!-- Plugins-->
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="plugins/jquery.min.js"></script>
    <script src="plugins/popper.min.js"></script>
    <script src="plugins/bootstrap4/js/bootstrap.min.js"></script>
    <script src="plugins/owl-carousel/owl.carousel.min.js"></script>
    <script src="plugins/nouslider/nouislider.min.js"></script>
    <script src="plugins/leaflet/dist/leaflet.js"></script>
    <script src="plugins/apexcharts-bundle/dist/apexcharts.min.js"></script>
    <script src="plugins/dropzone/dropzone.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/chart.js"></script>
    <script src="js/map.js"></script>
</body>
