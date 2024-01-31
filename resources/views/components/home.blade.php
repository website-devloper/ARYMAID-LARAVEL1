@extends('layouts.masterHome')
@section('content')
<script src="https://kit.fontawesome.com/48adce65bb.js" crossorigin="anonymous"></script>
<main class="main">
    <div class="mb-lg-2"></div><!-- End .mb-lg-2 -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-9 col-xxl-8 offset-lg-3 offset-xxl-2">
                <div class="intro-slider-container slider-container-ratio mb-2">
                    <div class="intro-slider owl-carousel owl-simple owl-nav-inside" data-toggle="owl" data-owl-options='{
                                    "nav": false, 
                                    "dots": true
                                }'>
                        <div class="intro-slide">
                            <figure class="slide-image">
                                <picture>
                                    <source media="(max-width: 480px)"
                                        srcset="assets/images/demos/demo-14/slider/slide-1-480w.jpg">
                                    <img src="assets/images/demos/demo-14/slider/slide-1.jpg" alt="Image Desc">
                                </picture>
                            </figure><!-- End .slide-image -->

                            <div class="intro-content">
                                <h3 class="intro-subtitle">New Arrivals</h3><!-- End .h3 intro-subtitle -->
                                <h1 class="intro-title text-white">
                                    The New Way <br>To Buy Furniture
                                </h1><!-- End .intro-title -->

                                <div class="intro-text text-white">
                                    Spring Collections 2019
                                </div><!-- End .intro-text -->

                                <a href="category.html" class="btn btn-primary">
                                    <span>Discover Now</span>
                                    <i class="icon-long-arrow-right"></i>
                                </a>
                            </div><!-- End .intro-content -->
                        </div><!-- End .intro-slide -->

                        <div class="intro-slide">
                            <figure class="slide-image">
                                <picture>
                                    <source media="(max-width: 480px)"
                                        srcset="assets/images/demos/demo-14/slider/slide-2-480w.jpg">
                                    <img src="assets/images/demos/demo-14/slider/slide-2.jpg" alt="Image Desc">
                                </picture>
                            </figure><!-- End .slide-image -->

                            <div class="intro-content">
                                <h3 class="intro-subtitle">Hottest Deals</h3><!-- End .h3 intro-subtitle -->
                                <h1 class="intro-title">
                                    <span>Wherever You Go</span> <br>DJI Mavic 2 Pro
                                </h1><!-- End .intro-title -->

                                <div class="intro-price">
                                    <sup>from</sup>
                                    <span>
                                        $1,948<sup>.99</sup>
                                    </span>
                                </div><!-- End .intro-price -->

                                <a href="category.html" class="btn btn-primary">
                                    <span>Discover Here</span>
                                    <i class="icon-long-arrow-right"></i>
                                </a>
                            </div><!-- End .intro-content -->
                        </div><!-- End .intro-slide -->

                        <div class="intro-slide">
                            <figure class="slide-image">
                                <picture>
                                    <source media="(max-width: 480px)"
                                        srcset="assets/images/demos/demo-14/slider/slide-3-480w.jpg">
                                    <img src="assets/images/demos/demo-14/slider/slide-3.jpg" alt="Image Desc">
                                </picture>
                            </figure><!-- End .slide-image -->

                            <div class="intro-content">
                                <h3 class="intro-subtitle">Limited Quantities</h3>
                                <!-- End .h3 intro-subtitle -->
                                <h1 class="intro-title">
                                    Refresh Your <br>Wardrobe
                                </h1><!-- End .intro-title -->

                                <div class="intro-text">
                                    Summer Collection 2019
                                </div><!-- End .intro-text -->

                                <a href="category.html" class="btn btn-primary">
                                    <span>Discover Now</span>
                                    <i class="icon-long-arrow-right"></i>
                                </a>
                            </div><!-- End .intro-content -->
                        </div><!-- End .intro-slide -->
                    </div><!-- End .intro-slider owl-carousel owl-simple -->

                    <span class="slider-loader"></span><!-- End .slider-loader -->
                </div><!-- End .intro-slider-container -->
            </div><!-- End .col-xl-9 col-xxl-10 -->

            <div class="col-xl-3 col-xxl-2 d-none d-xxl-block">
                <div class="banner banner-overlay  banner-content-stretch ">
                    <a href="#">
                        <img src="assets/images/demos/demo-14/banners/banner-1.png" alt="Banner img desc">
                    </a>
                    <div class="banner-content text-right">
                        <div class="price text-center">
                            <sup class="text-white">from</sup>
                            <span class="text-white">
                                <strong>$199</strong><sup class="text-white">,99</sup>
                            </span>
                        </div>
                        <a href="#" class="banner-link">Discover Now <i class="icon-long-arrow-right"></i></a>
                    </div><!-- End .banner-content -->
                </div><!-- End .banner banner-overlay -->
            </div><!-- End .col-xl-3 col-xxl-2 -->
        </div><!-- End .row -->
    </div><!-- End .container-fluid -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-9 col-xxl-10">
                <div class="row">
                    <div class="col-lg-12 col-xxl-4-5col">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="banner banner-overlay">
                                    <a href="#">
                                        <img src="assets/images/demos/demo-14/banners/banner-2.jpg"
                                            alt="Banner img desc">
                                    </a>

                                    <div class="banner-content">
                                        <h4 class="banner-subtitle text-white d-none d-sm-block"><a href="#">Hottest
                                                Deals</a></h4><!-- End .banner-subtitle -->
                                        <h3 class="banner-title text-white"><a href="#">Detox And Beautify
                                                <br>For Spring <br><span>Up To 20% Off</span></a></h3>
                                        <!-- End .banner-title -->
                                        <a href="#" class="banner-link">Shop Now <i
                                                class="icon-long-arrow-right"></i></a>
                                    </div><!-- End .banner-content -->
                                </div><!-- End .banner -->
                            </div><!-- End .col-md-6 -->

                            <div class="col-md-6">
                                <div class="banner banner-overlay">
                                    <a href="#">
                                        <img src="assets/images/demos/demo-14/banners/banner-3.png"
                                            alt="Banner img desc">
                                    </a>

                                    <div class="banner-content">
                                        <h4 class="banner-subtitle text-white d-none d-sm-block"><a href="#">Deal of the
                                                Day</a></h4><!-- End .banner-subtitle -->
                                        <h3 class="banner-title text-white"><a href="#">Headphones <br><span>Up
                                                    To 30% Off</span></a></h3><!-- End .banner-title -->
                                        <a href="#" class="banner-link">Shop Now <i
                                                class="icon-long-arrow-right"></i></a>
                                    </div><!-- End .banner-content -->
                                </div><!-- End .banner banner-overlay -->
                            </div><!-- End .col-md-6 -->
                        </div><!-- End .row -->
                    </div><!-- End .col-lg-3 col-xxl-4-5col -->

                    <div class="col-12 col-xxl-5col d-none d-xxl-block">
                        <div class="banner banner-overlay">
                            <a href="#">
                                <img src="assets/images/demos/demo-14/banners/banner-4.jpg" alt="Banner img desc">
                            </a>

                            <div class="banner-content">
                                <h4 class="banner-subtitle text-white"><a href="#">Clearance</a></h4>
                                <!-- End .banner-subtitle -->
                                <h3 class="banner-title text-white"><a href="#">Seating and Tables Clearance</a>
                                </h3><!-- End .banner-title -->
                                <a href="#" class="banner-link">Shop Now <i class="icon-long-arrow-right"></i></a>
                            </div><!-- End .banner-content -->
                        </div><!-- End .banner banner-overlay -->
                    </div><!-- End .col-lg-3 col-xxl-2 -->
                </div><!-- End .row -->

                <div class="mb-3"></div><!-- End .mb-3 -->

                <div class="owl-carousel owl-simple brands-carousel" data-toggle="owl" data-owl-options='{
                                "nav": false, 
                                "dots": false,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "420": {
                                        "items":3
                                    },
                                    "600": {
                                        "items":4
                                    },
                                    "900": {
                                        "items":5
                                    },
                                    "1600": {
                                        "items":6,
                                        "nav": true
                                    }
                                }
                            }'>


                    <a href="#" class="brand">
                        <img src="assets/images/brands/1.png" alt="Brand Name">
                    </a>

                    <a href="#" class="brand">
                        <img src="assets/images/brands/2.png" alt="Brand Name">
                    </a>

                    <a href="#" class="brand">
                        <img src="assets/images/brands/3.png" alt="Brand Name">
                    </a>

                    <a href="#" class="brand">
                        <img src="assets/images/brands/4.png" alt="Brand Name">
                    </a>

                    <a href="#" class="brand">
                        <img src="assets/images/brands/5.png" alt="Brand Name">
                    </a>

                    <a href="#" class="brand">
                        <img src="assets/images/brands/6.png" alt="Brand Name">
                    </a>

                    <a href="#" class="brand">
                        <img src="assets/images/brands/7.png" alt="Brand Name">
                    </a>
                </div><!-- End .owl-carousel -->

                <div class="mb-5"></div><!-- End .mb-5 -->

                <div class="bg-lighter trending-products">
                    <div class="heading heading-flex mb-3">
                        <div class="heading-left">
                            <h2 class="title">Trending Today</h2><!-- End .title -->
                        </div><!-- End .heading-left -->
                    </div><!-- End .heading -->

                    <div class="tab-content tab-content-carousel">
                        <div class="tab-pane p-0 fade show active" id="trending-all-tab" role="tabpanel"
                            aria-labelledby="trending-all-link">
                            <div class="owl-carousel owl-simple carousel-equal-height " data-toggle="owl"
                                data-owl-options='{
                                            "nav": false, 
                                            "dots": true,
                                            "margin": 20,
                                            "loop": false,
                                            "responsive": {
                                                "0": {
                                                    "items":1
                                                },
                                                "480": {
                                                    "items":2
                                                },
                                                "768": {
                                                    "items":3
                                                },
                                                "992": {
                                                    "items":4
                                                },
                                                "1200": {
                                                    "items":3,
                                                    "nav": true
                                                },
                                                "1600": {
                                                    "items":5,
                                                    "nav": true
                                                }
                                            }

                                        }'>
                                @foreach($latestProducts as $Lproduct)
                                <div class="product product-7 text-center">
                                    <figure class="product-media">
                                        <span class="product-label label-new">New</span>
                                        <a href="/singleProduct/{{$Lproduct->id}}">
                                            <img src="{{ asset('/productsImage/'.$Lproduct->image) }}"
                                                alt="Product image" class="product-image">
                                        </a>

                                        <div class="product-action-vertical">
                                            <!-- /////////////////////////////////////////////////////////////////////////////////////////// -->
                                            <form action="/wishlist/{{$Lproduct->id}}" method="GET">
                                                @csrf
                                                <button type="submit"
                                                    class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                                        wishlist</span></button>
                                            </form>
                                            <!-- //////////////////////////////////////////////////////////////////////////////////////////// -->
                                            <a href="/singleProduct/{{$Lproduct->id}}" class="btn-product-icon"
                                                title="Quick view"><i class="fa-regular fa-eye"></i><span>Quick
                                                    view</span></a>
                                        </div><!-- End .product-action-vertical -->

                                        <div class="product-action">
                                            <a href="/cart/{{$Lproduct->id}}" class="btn-product btn-cart"><span>add to
                                                    cart</span></a>
                                        </div><!-- End .product-action -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a>{{$Lproduct->categorie}}</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product.html">{{$Lproduct->name}}</a></h3>
                                        <!-- End .product-title -->
                                        <div class="product-price">
                                            {{$Lproduct->price}} DH
                                        </div><!-- End .product-price -->

                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->
                                @endforeach
                            </div><!-- End .owl-carousel -->
                        </div><!-- .End .tab-pane -->

                        <!-- ############################################################################### 
                         ###############################################################################-->





                        <!-- ############################################################################### 
                         ###############################################################################-->
                    </div><!-- End .tab-content -->
                </div><!-- End .bg-lighter -->

                <!-- ###################################################################################
                    ##############################################################################################
                ################################################################################################ -->




<br>
<br><br>
<br><br>
<div class="heading-left">
                            <h2 class="title">Featured Products</h2><!-- End .title -->
                        </div><!-- End .heading-left -->
                <div class="products mb-3">
                                <div class="row justify-content-center">

                                    @foreach($products as $product)                                    

                                    <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                                        <div class="product product-7 text-center">
                                            <figure class="product-media">
                                                <a href="/singleProduct/{{$product->id}}">
                                                    <img src="{{asset('/productsImage/'.$product->image)}}" alt="Product image" class="product-image">
                                                </a>

                                                <div class="product-action-vertical">
                                                <form action="/wishlist/{{$product->id}}" method="GET">
                                                @csrf
                                                <button type="submit"
                                                    class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                                        wishlist</span></button>
                                            </form>
                                                    <a href="/singleProduct/{{$product->id}}" class="btn-product-icon"
                                                title="Quick view"><i class="fa-regular fa-eye"></i><span>Quick
                                                    view</span></a>
                                                </div><!-- End .product-action-vertical -->

                                                <div class="product-action">
                                                    <a href="/cart/{{$product->id}}" class="btn-product btn-cart"><span>add to cart</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->

                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#">{{$product->categorie}}</a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a>{{$product->name}}</a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                   {{$product->price}} DH
                                                </div><!-- End .product-price -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->
                                    </div><!-- End .col-sm-6 col-lg-4 col-xl-3 -->
@endforeach

                                </div><!-- End .row -->
                            </div><!-- End .products -->

                            <nav aria-label="Page navigation">
							    <ul class="pagination justify-content-center">

							        <li class="page-item"><a class="page-link" >{{$products->links('pagination::bootstrap-5')}}</a></li>

							    </ul>
							</nav>

                <!-- ###################################################################################
                            ###################################################################################
                            ###################################################################################-->

                <div class="icon-boxes-container">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6 col-lg-3">

                            </div><!-- End .col-sm-6 col-lg-3 -->

                            <div class="col-sm-6 col-lg-3">
                                <div class="icon-box icon-box-side">
                                    <span class="icon-box-icon text-dark">
                                        <i class="icon-rotate-left"></i>
                                    </span>

                                    <div class="icon-box-content">
                                        <h3 class="icon-box-title">Free Returns</h3><!-- End .icon-box-title -->
                                        <p>Within 30 days</p>
                                    </div><!-- End .icon-box-content -->
                                </div><!-- End .icon-box -->
                            </div><!-- End .col-sm-6 col-lg-3 -->

                            <div class="col-sm-6 col-lg-3">
                                <div class="icon-box icon-box-side">
                                    <span class="icon-box-icon text-dark">
                                        <i class="icon-info-circle"></i>
                                    </span>

                                    <div class="icon-box-content">
                                        <h3 class="icon-box-title">Get 20% Off 1 Item</h3>
                                        <!-- End .icon-box-title -->
                                        <p>When you sign up</p>
                                    </div><!-- End .icon-box-content -->
                                </div><!-- End .icon-box -->
                            </div><!-- End .col-sm-6 col-lg-3 -->

                            <div class="col-sm-6 col-lg-3">
                                <div class="icon-box icon-box-side">
                                    <span class="icon-box-icon text-dark">
                                        <i class="icon-life-ring"></i>
                                    </span>

                                    <div class="icon-box-content">
                                        <h3 class="icon-box-title">We Support</h3><!-- End .icon-box-title -->
                                        <p>24/7 amazing services</p>
                                    </div><!-- End .icon-box-content -->
                                </div><!-- End .icon-box -->
                            </div><!-- End .col-sm-6 col-lg-3 -->
                        </div><!-- End .row -->
                    </div><!-- End .container-fluid -->
                </div><!-- End .icon-boxes-container -->

                <div class="mb-5"></div><!-- End .mb-5 -->
            </div><!-- End .col-lg-9 col-xxl-10 -->

            <aside class="col-xl-3 col-xxl-2 order-xl-first">
                <div class="sidebar sidebar-home">
                    <div class="row">
                        <div class="col-sm-6 col-xl-12">
                            <div class="widget widget-banner">

                            </div><!-- End .widget widget-banner -->
                        </div><!-- End .col-sm-6 col-xl-12 -->



                        <div class="col-12">

                        </div><!-- End .col-sm-6 col-lg-xl -->
                    </div><!-- End .row -->
                </div><!-- End .sidebar sidebar-home -->
            </aside><!-- End .col-lg-3 col-xxl-2 -->
        </div><!-- End .row -->
    </div><!-- End .container-fluid -->
</main><!-- End .main -->

@endsection