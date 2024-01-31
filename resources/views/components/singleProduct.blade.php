    <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/icons/favicon-16x16.png">
    <link rel="manifest" href="/assets/images/icons/site.html">
    <link rel="mask-icon" href="/assets/images/icons/safari-pinned-tab.svg" color="#666666">
    <link rel="shortcut icon" href="/assets/images/icons/favicon.ico">
    <meta name="apple-mobile-web-app-title" content="Molla">
    <meta name="application-name" content="Molla">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="/assets/images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">


  <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="/assets/css/plugins/magnific-popup/magnific-popup.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/plugins/nouislider/nouislider.css">
   
<main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
                <div class="container d-flex align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Products</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Default</li>
                    </ol>

                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
                <div class="container">



                    <div class="product-details-top">
                        <div class="row">
                            <div class="col-md-6">
                                <div>
                                    <div class="row">

                                        <figure class="product-main-image">

                                            <div class="flex-box">
                                               <div class="left">
                                                    <div class="big-img">
                                                        <img src="{{asset('/productsImage/'.$SingleProduit->image)}}" alt="product-img">
                                                    </div>
                                                    <div class="images">

                                                    <div class="small-img">
                                                        <img src="{{asset('/productsHoverImage/'.$SingleProduit->hoverImg)}}" alt="second_img" onclick="showImg(this.src)" >
                                                    </div>
                                                    <div class="small-img">
                                                        <img src="{{asset('/productsHoverImage/'.$SingleProduit->hoverImg)}}" alt="third_img" onclick="showImg(this.src)">
                                                    </div>
                                                    <div class="small-img">
                                                        <img src="{{asset('/productsHoverImage/'.$SingleProduit->hoverImg)}}" alt="fourth_img" onclick="showImg(this.src)">
                                                    </div>
                                                    <div class="small-img">
                                                        <img src="{{asset('/productsHoverImage/'.$SingleProduit->hoverImg)}}" alt="fiveth_img" onclick="showImg(this.src)">
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            <script>
                                                let bigImg=document.querySelector('.big-img img');
                                                function showImg(pic){
                                                    bigImg.src=pic;
                                                }
                                            </script>
                                            <!-- ############################################################################# -->
                                            
                                            <!-- IMAGE SECTION -->




                                            <!-- ################################################################################# -->
                                        </figure><!-- End .product-main-image -->
                                    </div><!-- End .row -->

                                   
                                </div><!-- End .product-gallery -->
                            </div><!-- End .col-md-6 -->

                            <div class="col-md-6">
                                <div class="product-details">
                                    <h1 class="product-title">{{$SingleProduit->name}}</h1><!-- End .product-title -->


                                    <div class="product-price">
                                               {{$SingleProduit->price}}DH
                                    </div><!-- End .product-price -->

                                    <div class="product-content">
                                        <p>{{$SingleProduit->utilisation}}</p>
                                    </div><!-- End .product-content -->

                                    <div class="details-filter-row details-row-size">
                                        <label for="qty">Qantity:</label>
                                        <div class="product-details-quantity">
                                            <input type="number" id="qty" class="form-control" value="1" min="1" max="10" step="1" data-decimals="0" required>
                                        </div><!-- End .product-details-quantity -->
                                    </div><!-- End .details-filter-row -->

                                    <div class="product-details-action">
                                        <a href="/cart/{{$SingleProduit->id}}" class="btn-product btn-cart"><span>add to cart</span></a>

                                        <div class="details-action-wrapper">
                                            <a href="/wishlist/{{$SingleProduit->id}}" class="btn-product btn-wishlist" title="Wishlist"><span>Add to Wishlist</span></a>
                                        </div><!-- End .details-action-wrapper -->
                                    </div><!-- End .product-details-action -->

                                    <div class="product-details-footer">
                                        <div class="product-cat">
                                            <span>Category:</span>
                                           
                                            <a>{{$SingleProduit->categorie}}</a>
                                        </div><!-- End .product-cat -->

                                        <div class="social-icons social-icons-sm">
                                            <span class="social-label">Share:</span>
                                            <a href="#" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                                            <a href="#" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                                            <a href="#" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                                            <a href="#" class="social-icon" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
                                        </div>
                                    </div><!-- End .product-details-footer -->
                                </div><!-- End .product-details -->
                            </div><!-- End .col-md-6 -->
                        </div><!-- End .row -->
                    </div><!-- End .product-details-top -->



                    <div class="product-details-tab">
                        <ul class="nav nav-pills justify-content-center" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="product-desc-link" data-toggle="tab" href="#product-desc-tab" role="tab" aria-controls="product-desc-tab" aria-selected="true">Description</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="product-desc-tab" role="tabpanel" aria-labelledby="product-desc-link">
                                <div class="product-desc-content">
                                    <h3>Product Information</h3>
                                    <p>{{$SingleProduit->description}}</p>
                                    <p>{{$SingleProduit->description2}}</p>

                                </div><!-- End .product-desc-content -->
                            </div><!-- .End .tab-pane -->
                            
                        
                    </div><!-- End .owl-carousel -->
                </div><!-- End .container -->
            </div><!-- End .page-content -->
        </main><!-- End .main -->