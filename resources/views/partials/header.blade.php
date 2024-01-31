<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
    <header class="header header-14">
            <div class="header-middle">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-auto col-lg-3 col-xl-3 col-xxl-2">
                            <button class="mobile-menu-toggler">
                                <span class="sr-only">Toggle mobile menu</span>
                                <i class="icon-bars"></i>
                            </button>
                            <a href="index.html" class="logo">
                                <img src="assets/images/demos/demo-14/logo.png" alt="Molla Logo" width="105"
                                    height="25">
                            </a>
                        </div><!-- End .col-xl-3 col-xxl-2 -->

                        <div class="col col-lg- col-xl-9 col-xxl-10 header-middle-right">
                            <div class="row">
                                <div class="col-lg-8 col-xxl-4-5col d-none d-lg-block">
                                    <div
                                        class="header-search header-search-extended header-search-visible header-search-no-radius">
                                        <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>


                                        <form action="{{url('/products/search')}}" method="GET">
                                        
                                            <div class="header-search-wrapper search-wrapper-wide">
                                                <label for="search" class="sr-only">Search</label>
                                                <input type="search" class="form-control" name="search" id="search"
                                                    placeholder="Search product ..." >

                                                <button class="btn btn-primary" type="submit"><i
                                                        class="icon-search"></i></button>
                                            </div><!-- End .header-search-wrapper -->
                                        </form>


                                    </div><!-- End .header-search -->
                                </div><!-- End .col-xxl-4-5col -->

                                <div class="col-lg-4 col-xxl-5col d-flex justify-content-end align-items-center">
                                    <div class="header-dropdown-link">
                                        <!-- ##############################################################################
                                    ######################################################################################
                                ####################################################################################### -->
                                        <a href="/wishlist/{{ session('id') }}/products" class="wishlist-link">
                                            <i class="icon-heart-o"></i>
                                            <span class="wishlist-count">3</span>
                                            <span class="wishlist-txt">Wishlist</span>
                                        </a>
                                        <!-- ###################################################################
                                    ##########################################################################
                                ############################################################################## -->

                                        <div class="dropdown cart-dropdown">
                                            <a href="/cart/{{session('id')}}/products" class="dropdown-toggle" role="button" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false" data-display="static">
                                                <i class="icon-shopping-cart"></i>
                                                <span class="cart-count">2</span>
                                                <span class="cart-txt">Cart</span>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-right">
                                                <div class="dropdown-cart-products">
                                                @foreach($data as $d)
                                                    <div class="product">
                                                        <div class="product-cart-details">
                                                            <h4 class="product-title">
                                                                
                                                                <a href="product.html">{{$d->name}}</a>
                                                            </h4>

                                                            <span class="cart-product-info">
                                                                <span class="cart-product-qty">1</span>
                                                                x {{$d->price}} DH
                                                            </span>
                                                        </div><!-- End .product-cart-details -->

                                                        <figure class="product-image-container">
                                                            <a href="product.html" class="product-image">
                                                                <img src="{{asset('/productsImage/'.$d->image)}}"
                                                                    alt="product">
                                                            </a>
                                                        </figure>
                                                        <a href="/deleteCart/{{$d->id}}" class="btn-remove" title="Remove Product"><i
                                                                class="icon-close"></i></a>
                                                    </div><!-- End .product -->

                                                    @endforeach
                                                </div><!-- End .cart-product -->
                                                
                                                <div class="dropdown-cart-total">
                                                    <span>Total</span>

                                                    <span class="cart-total-price">{{$total}} DH</span>
                                                </div><!-- End .dropdown-cart-total -->

                                                <div class="dropdown-cart-action">
                                                    <a href="/cart/{{session('id')}}/products" class="btn btn-primary">View Cart</a>
                                                    <a href="checkout"
                                                        class="btn btn-outline-primary-2"><span>Checkout</span><i
                                                            class="icon-long-arrow-right"></i></a>
                                                </div><!-- End .dropdown-cart-total -->
                                            </div><!-- End .dropdown-menu -->
                                        </div><!-- End .cart-dropdown -->
                                    </div>
                                </div><!-- End .col-xxl-5col -->
                            </div><!-- End .row -->
                        </div><!-- End .col-xl-9 col-xxl-10 -->
                    </div><!-- End .row -->
                </div><!-- End .container-fluid -->
            </div><!-- End .header-middle -->

</div>

</body>
</html>