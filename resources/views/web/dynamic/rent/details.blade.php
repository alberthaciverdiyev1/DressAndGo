@extends('main')

@section('content')
    <!--====== Start Page Banner Section ======-->
    <section class="page-banner">
        <div class="page-banner-wrapper p-r z-1">
            <svg class="lineanm" viewBox="0 0 1920 347" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path class="line" d="M-39 345.187C70 308.353 397.628 293.477 436 145.186C490 -63.5 572 -57.8156 688 255.186C757.071 441.559 989.5 -121.315 1389 98.6856C1708.6 274.686 1940.33 156.519 1964.5 98.6856" stroke="white" stroke-width="3" stroke-dasharray="2 2"/>
            </svg>
            <div class="page-image"><img src="{{asset('images/bg/page-img-1.png')}}" alt="image"></div>
            <svg class="page-svg" xmlns="http://www.w3.org/2000/svg">
                <path d="M21.1742 33.0065C14.029 35.2507 7.5486 39.0636 0 40.7339V86H1937V64.9942C1933.1 60.1623 1912.65 65.1777 1904.51 62.6581C1894.22 59.4678 1884.93 55.0079 1873.77 52.7742C1861.2 50.2585 1823.41 36.3854 1811.99 39.9252C1805.05 42.0727 1796.94 37.6189 1789.36 36.6007C1769.18 33.8879 1747.19 31.1848 1726.71 29.7718C1703.81 28.1919 1678.28 27.0012 1657.53 34.4442C1636.45 42.005 1606.07 60.856 1579.5 55.9191C1561.6 52.5906 1543.41 47.0959 1528.45 56.9075C1510.85 68.4592 1485.74 74.2518 1460.44 76.136C1432.32 78.2297 1408.53 70.6879 1384.73 62.2987C1339.52 46.361 1298.19 27.1677 1255.08 9.28534C1242.58 4.10111 1214.68 15.4762 1200.55 16.6533C1189.77 17.5509 1181.74 15.4508 1172.12 12.8795C1152.74 7.70033 1133.23 2.88525 1111.79 2.63621C1088.85 2.36971 1073.94 7.88289 1056.53 15.8446C1040.01 23.3996 1027.48 26.1777 1007.8 26.1777C993.757 26.1777 975.854 25.6887 962.844 28.9632C941.935 34.2258 932.059 38.7874 914.839 28.6037C901.654 20.8061 866.261 -2.56499 844.356 7.12886C831.264 12.9222 820.932 21.5146 807.663 27.5255C798.74 31.5679 779.299 42.0561 766.33 39.1166C758.156 37.2637 751.815 31.6349 745.591 28.2443C730.967 20.2774 715.218 13.2948 695.846 10.723C676.168 8.11038 658.554 23.1787 641.606 27.4357C617.564 33.4742 602.283 27.7951 579.244 27.7951C568.142 27.7951 548.414 30.4002 541.681 23.6618C535.297 17.2722 530.162 9.74921 523.263 3.71444C517.855 -1.01577 505.798 -0.852017 498.318 2.09709C479.032 9.7007 453.07 10.0516 431.025 9.64475C407.556 9.21163 368.679 1.61612 346.618 10.3636C319.648 21.0575 291.717 53.8338 254.67 45.2266C236.134 40.9201 225.134 37.5813 204.78 40.7339C186.008 43.6415 171.665 50.7785 156.051 57.3567C146.567 61.3523 152.335 52.6281 151.12 47.9222C149.535 41.7853 139.994 34.5585 132.991 30.4008C120.206 22.8098 90.2848 24.3246 74.2546 24.6502C55.5552 25.0301 37.9201 27.747 21.1742 33.0065Z" fill="#FFFAF3"/>
            </svg>
            <div class="shape shape-one"><span></span></div>
            <div class="shape shape-two"><span></span></div>
            <div class="shape shape-three"><span><img src="{{asset('images/shape/curved-arrow.png')}}" alt=""></span></div>
            <div class="shape shape-four"><span><img src="{{asset('images/shape/stars.png')}}" alt=""></span></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-banner-content">
                            <h1>Shop Details</h1>
                            <ul class="breadcrumb-link">
                                <li><a href="index.html">Home</a></li>
                                <li><i class="far fa-long-arrow-right"></i></li>
                                <li class="active">Shop Details</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End Page Banner Section ======-->
    <!--====== Start Shop Details Section ======-->
    <section class="shop-details-section pt-120 pb-80">
        <div class="container">
            <div class="shop-details-wrapper">
                <div class="row">
                    <div class="col-xl-6">
                        <!--=== Product Gallery ===-->
                        <div class="product-gallery-area mb-50" data-aos="fade-up" data-aos-duration="1200">
                            <div class="product-big-slider mb-30">
                                @forelse($product['images'] as $image)
                                <div class="product-img">
                                    <a href="{{$image}}" class="img-popup"><img src="{{$image}}" alt="Product"></a>
                                </div>
                                @empty
                                @endforelse
                            </div>
                            <div class="product-thumb-slider">
                                @forelse($product['images'] as $image)

                                <div class="product-img">
                                    <img src="{{$image}}" alt="Product">
                                </div>
                                @empty
                                @endforelse
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="product-info mb-50" data-aos="fade-up" data-aos-duration="1400">
                            @php
                                $discount = round((($product['price'] - $product['discounted_price']) / $product['price']) * 100);
                            @endphp
                            @if($discount)
                            <span class="sale"><i class="fas fa-tags"></i>SALE {{$discount}}% OFF</span>
                            @endif
                            <h4 class="title">{{$product['title']}} </h4>
                            <ul class="ratings rating5">
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><a href="#">(45 Reviews)</a></li>
                            </ul>
                            <p>{{$product['short_description']}}</p>
                            <div class="product-price">
                                <span class="price prev-price"><span class="currency">$</span>{{$product['price']}}</span>
                                @if($product['discounted_price'])
                                <span class="price new-price"><span class="currency">$</span>{{$product['discounted_price']}}</span>
                                @endif
                            </div>
                            <div class="product-color">
                                <h4 class="mb-15">Color</h4>
                                <ul class="color-list mb-20">

                                    <li>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="radio" value="blue" id="color4">
                                            <label class="form-check-label" for="color4">
                                                <span class="color4"></span>
                                            </label>
                                        </div>
                                    </li>

{{--                                    @forelse($product['colors'] as $color)--}}
{{--                                        <li>--}}
{{--                                            <div class="form-check">--}}
{{--                                                <input class="form-check-input" type="radio" name="radio"--}}
{{--                                                       value="{{ $color['code'] }}" id="{{ 'color_'.$color['id'] }}">--}}
{{--                                                <label class="form-check-label" for="{{ 'color_'.$color['id'] }}">--}}
{{--                                                    <span class="color-box" style="background-color: {{ $color['code'] }};"></span>--}}
{{--                                                </label>--}}
{{--                                            </div>--}}
{{--                                        </li>--}}
{{--                                    @empty--}}
{{--                                    @endforelse--}}
                                </ul>
                            </div>
                            <div class="product-size">
                                <h4 class="mb-15">Size</h4>
                                <ul class="size-list mb-30">
                                    @forelse($product['sizes'] as $size)
                                    <li>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="radio" value="Slim Fit" id="size2">
                                            <label class="form-check-label" for="size2">
                                                {{$size}}
                                            </label>
                                        </div>
                                    </li>
                                    @empty
                                    @endforelse
                                </ul>
                            </div>
                            <div class="product-cart-variation">
                                <ul>
                                    <li>
                                        <a href="shops.html" class="theme-btn style-one">Add To cart</a>
                                    </li>
                                    <li>
                                        <a href="shops.html" class="icon-btn"><i class="far fa-heart"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product-meta">
                                <ul>
                                    <li><span>SKU :</span>{{$product['SKU']}}</li>
                                    <li><span>Category :</span>{{$product['category']}}</li>
                                    <li><span>Tags :</span>
                                    @forelse($product['tags'] as $tag)
                                            <a href="#">{{$tag}}</a>
                                        @empty
                                    @endforelse</li>
                                    <li><span>Share :</span>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="special-features">
                                <span><i class="far fa-shipping-fast"></i>Free Shipping</span>
                                <span><i class="far fa-box-open"></i>Easy Returns</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="additional-information-wrapper" data-aos="fade-up" data-aos-delay="30" data-aos-duration="1000">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="additional-info-box mb-40">
                                <h3>Additional Information:</h3>
                                <ul>
                                    <li>Fabric type <span>Georgette</span></li>
                                    <li>Care instructions:<span>Machine Wash</span></li>
                                    <li>Occasion type: <span>Casual</span></li>
                                    <li>Sleeve type: <span>Long Sleeve</span></li>
                                    <li>Pattern:<span>Solid</span></li>
                                    <li>Closure type: <span>Georgette</span></li>
                                    <li>Country of Origin<span>Bangladesh</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="description-wrapper mb-40">
                                <div class="pesco-tabs style-two mb-50">
                                    <ul class="nav nav-tabs">
                                        <li>
                                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#description">Description</button>
                                        </li>
                                        <li>
                                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#reviews">Reviews</button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane fade active show" id="description">
                                        <h4>Description</h4>
                                        <p>{{$product['long_description']}}</p>
                                        <h4>Features</h4>
                                        <ul class="list">
                                            <li>Function First</li>
                                            <li>Summer Breeze </li>
                                            <li>Casual and Rugged</li>
                                            <li>Possible Interpretations</li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="reviews">
                                        <div class="pesco-comment-area mb-80">
                                            <h4>Total Reviews (90)</h4>
                                            <ul>
                                                <li class="comment">
                                                    <div class="pesco-reviews-item">
                                                        <div class="author-thumb-info">
                                                            <div class="author-thumb">
                                                                <img src="{{asset('images/products/review-2.jpg')}}" alt="Auhthor">
                                                            </div>
                                                            <div class="author-info">
                                                                <h5>Amelia Rodriguez</h5>
                                                                <div class="author-meta">
                                                                    <ul class="ratings">
                                                                        <li><i class="fas fa-star"></i></li>
                                                                        <li><i class="fas fa-star"></i></li>
                                                                        <li><i class="fas fa-star"></i></li>
                                                                        <li><i class="fas fa-star"></i></li>
                                                                        <li><i class="fas fa-star"></i></li>
                                                                    </ul>
                                                                    <span>20 March 2024</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="author-review-content">
                                                            <p>Men’s Slim Fit Dress Shirt is an excellent choice for those who value modern style and impeccable tailoring. Crafted from a high-quality blend of cotton and polyester, this shirt offers a smooth, wrinkle-resistant finish that stays crisp throughout the day.</p>
                                                        </div>
                                                        <a href="#" class="reply"><i class="fas fa-reply-all"></i>Reply</a>
                                                    </div>
                                                </li>
                                                <li class="comment">
                                                    <div class="pesco-reviews-item">
                                                        <div class="author-thumb-info">
                                                            <div class="author-thumb">
                                                                <img src="{{asset('images/products/review-2.jpg')}}" alt="Auhthor">
                                                            </div>
                                                            <div class="author-info">
                                                                <h5>Amelia Rodriguez</h5>
                                                                <div class="author-meta">
                                                                    <ul class="ratings">
                                                                        <li><i class="fas fa-star"></i></li>
                                                                        <li><i class="fas fa-star"></i></li>
                                                                        <li><i class="fas fa-star"></i></li>
                                                                        <li><i class="fas fa-star"></i></li>
                                                                        <li><i class="fas fa-star"></i></li>
                                                                    </ul>
                                                                    <span>20 March 2024</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="author-review-content">
                                                            <p>Men’s Slim Fit Dress Shirt is an excellent choice for those who value modern style and impeccable tailoring. Crafted from a high-quality blend of cotton and polyester, this shirt offers a smooth, wrinkle-resistant finish that stays crisp throughout the day.</p>
                                                        </div>
                                                        <a href="#" class="reply"><i class="fas fa-reply-all"></i>Reply</a>
                                                    </div>
                                                    <ul class="reviews-reply">
                                                        <li class="comment">
                                                            <div class="pesco-reviews-item">
                                                                <div class="author-thumb-info">
                                                                    <div class="author-thumb">
                                                                        <img src="{{asset('images/products/review-3.jpg')}}" alt="Auhthor">
                                                                    </div>
                                                                    <div class="author-info">
                                                                        <h5>Amelia Rodriguez</h5>
                                                                        <div class="author-meta">
                                                                            <ul class="ratings">
                                                                                <li><i class="fas fa-star"></i></li>
                                                                                <li><i class="fas fa-star"></i></li>
                                                                                <li><i class="fas fa-star"></i></li>
                                                                                <li><i class="fas fa-star"></i></li>
                                                                                <li><i class="fas fa-star"></i></li>
                                                                            </ul>
                                                                            <span>20 March 2024</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="author-review-content">
                                                                    <p>Men’s Slim Fit Dress Shirt is an excellent choice for those who value modern style and impeccable tailoring. Crafted from a high-quality blend of cotton and polyester, this shirt offers a smooth, wrinkle-resistant finish that stays crisp throughout the day.</p>
                                                                </div>
                                                                <a href="#" class="reply"><i class="fas fa-reply-all"></i>Reply</a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="reviews-contact-area">
                                            <h4>Write Comment</h4>
                                            <ul class="ratings rating5 mb-40">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><a href="#">(10)</a></li>
                                            </ul>
                                            <form class="pesco-contact-form">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <input type="text" placeholder="Name" class="form_control" name="name" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <input type="email" placeholder="Email" class="form_control" name="Email" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <textarea class="form_control" placeholder="Write Reviews" name="message" cols="5" rows="10"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <button class="theme-btn style-one">Submit Review</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End Shop Details Section ======-->
    <!--====== Related Product Section ======-->
    <section class="releted-product-section pb-90">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <!--=== Section Title ===-->
                    <div class="section-title mb-50" data-aos="fade-right" data-aos-delay="50" data-aos-duration="1000">
                        <div class="sub-heading d-inline-flex align-items-center">
                            <i class="flaticon-sparkler"></i>
                            <span class="sub-title">Releted Products</span>
                        </div>
                        <h2>Customers also purchased</h2>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="releted-product-arrows style-one mb-50" data-aos="fade-left" data-aos-delay="70" data-aos-duration="1300"></div>
                </div>
            </div>
            <div class="releted-product-slider">
                <!--=== Project Item  ===-->
                <div class="product-item style-one mb-40" data-aos="fade-up" data-aos-delay="90" data-aos-duration="1500">
                    <div class="product-thumbnail">
                        <img src="{{asset('images/products/feature-product-2.png')}}" alt="Products">
                        <div class="discount">80% Off</div>
                        <div class="hover-content">
                            <a href="#" class="icon-btn"><i class="fa fa-heart"></i></a>
                            <a href="{{asset('images/products/feature-product-2.png')}}" class="img-popup icon-btn"><i class="fa fa-eye"></i></a>
                        </div>
                        <div class="cart-button">
                            <a href="#" class="cart-btn"><i class="far fa-shopping-basket"></i> <span class="text">Add To Cart</span></a>
                        </div>
                    </div>
                    <div class="product-info-wrap">
                        <div class="product-info">
                            <ul class="ratings rating4">
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><a href="#">(50)</a></li>
                            </ul>
                            <h4 class="title"><a href="shop-details.html">Cozy knit sweater with pockets</a></h4>
                        </div>
                        <div class="product-price">
                            <span class="price prev-price"><span class="currency">$</span>67.00</span>
                            <span class="price new-price"><span class="currency">$</span>23.00</span>
                        </div>
                    </div>
                </div>
                <!--=== Project Item  ===-->
                <div class="product-item style-one mb-40" data-aos="fade-up" data-aos-delay="90" data-aos-duration="1700">
                    <div class="product-thumbnail">
                        <img src="{{asset('images/products/feature-product-2.png')}}" alt="Products">
                        <div class="discount">80% Off</div>
                        <div class="hover-content">
                            <a href="#" class="icon-btn"><i class="fa fa-heart"></i></a>
                            <a href="{{asset('images/products/feature-product-2.png')}}" class="img-popup icon-btn"><i class="fa fa-eye"></i></a>
                        </div>
                        <div class="cart-button">
                            <a href="#" class="cart-btn"><i class="far fa-shopping-basket"></i> <span class="text">Add To Cart</span></a>
                        </div>
                    </div>
                    <div class="product-info-wrap">
                        <div class="product-info">
                            <ul class="ratings rating5">
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><a href="#">(80)</a></li>
                            </ul>
                            <h4 class="title"><a href="shop-details.html">Elegant silk dress with sequins</a></h4>
                        </div>
                        <div class="product-price">
                            <span class="price prev-price"><span class="currency">$</span>67.00</span>
                            <span class="price new-price"><span class="currency">$</span>23.00</span>
                        </div>
                    </div>
                </div>
                <!--=== Project Item  ===-->
                <div class="product-item style-one mb-40" data-aos="fade-up" data-aos-delay="110" data-aos-duration="1900">
                    <div class="product-thumbnail">
                        <img src="{{asset('images/products/feature-product-2.png')}}" alt="Products">
                        <div class="discount">40% Off</div>
                        <div class="hover-content">
                            <a href="#" class="icon-btn"><i class="fa fa-heart"></i></a>
                            <a href="{{asset('images/products/feature-product-2.png')}}" class="img-popup icon-btn"><i class="fa fa-eye"></i></a>
                        </div>
                        <div class="cart-button">
                            <a href="#" class="cart-btn"><i class="far fa-shopping-basket"></i> <span class="text">Add To Cart</span></a>
                        </div>
                    </div>
                    <div class="product-info-wrap">
                        <div class="product-info">
                            <ul class="ratings rating2">
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><a href="#">(47)</a></li>
                            </ul>
                            <h4 class="title"><a href="shop-details.html">Cargo shorts with pockets and drawstring</a></h4>
                        </div>
                        <div class="product-price">
                            <span class="price prev-price"><span class="currency">$</span>67.00</span>
                            <span class="price new-price"><span class="currency">$</span>23.00</span>
                        </div>
                    </div>
                </div>
                <!--=== Project Item  ===-->
                <div class="product-item style-one mb-40" data-aos="fade-up" data-aos-delay="130" data-aos-duration="2100">
                    <div class="product-thumbnail">
                        <img src="{{asset('images/products/feature-product-2.png')}}" alt="Products">
                        <div class="discount">10% Off</div>
                        <div class="hover-content">
                            <a href="#" class="icon-btn"><i class="fa fa-heart"></i></a>
                            <a href="{{asset('images/products/feature-product-2.png')}}" class="img-popup icon-btn"><i class="fa fa-eye"></i></a>
                        </div>
                        <div class="cart-button">
                            <a href="#" class="cart-btn"><i class="far fa-shopping-basket"></i> <span class="text">Add To Cart</span></a>
                        </div>
                    </div>
                    <div class="product-info-wrap">
                        <div class="product-info">
                            <ul class="ratings rating4">
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><a href="#">(47)</a></li>
                            </ul>
                            <h4 class="title"><a href="shop-details.html">Athletic leggings with mesh panels</a></h4>
                        </div>
                        <div class="product-price">
                            <span class="price prev-price"><span class="currency">$</span>80.00</span>
                            <span class="price new-price"><span class="currency">$</span>40.00</span>
                        </div>
                    </div>
                </div>
                <!--=== Project Item  ===-->
                <div class="product-item style-one mb-40" data-aos="fade-up" data-aos-delay="150" data-aos-duration="2300">
                    <div class="product-thumbnail">
                        <img src="{{asset('images/products/feature-product-2.png')}}" alt="Products">
                        <div class="discount">80% Off</div>
                        <div class="hover-content">
                            <a href="#" class="icon-btn"><i class="fa fa-heart"></i></a>
                            <a href="{{asset('images/products/feature-product-2.png')}}" class="img-popup icon-btn"><i class="fa fa-eye"></i></a>
                        </div>
                        <div class="cart-button">
                            <a href="#" class="cart-btn"><i class="far fa-shopping-basket"></i> <span class="text">Add To Cart</span></a>
                        </div>
                    </div>
                    <div class="product-info-wrap">
                        <div class="product-info">
                            <ul class="ratings rating5">
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><a href="#">(80)</a></li>
                            </ul>
                            <h4 class="title"><a href="shop-details.html">Elegant silk dress with sequins</a></h4>
                        </div>
                        <div class="product-price">
                            <span class="price prev-price"><span class="currency">$</span>67.00</span>
                            <span class="price new-price"><span class="currency">$</span>23.00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End Product Section ======-->
    <!--====== Start Newsletter Sections  ======-->
    <section class="newsletter-section pb-95">
        <div class="container">
            <!--=== Newsletter Wrapper  ===-->
            <div class="newsletter-wrapper white-bg p-r z-1" data-aos="fade-up" data-aos-duration="1000">
                <div class="newsletter-shape pattern-one"><span><img src="{{asset('images/newsletter/pattern-1.png')}}" alt="Pattern Shape"></span></div>
                <div class="newsletter-shape pattern-two"><span><img src="{{asset('images/newsletter/pattern-2.png')}}" alt="Pattern Shape"></span></div>
                <div class="newsletter-shape shape-one"><span><img src="{{asset('images/newsletter/shape-1.png')}}" alt="Shape"></span></div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="newsletter-content-box">
                            <span class="sub-text">Our Newsletter</span>
                            <h3>Get weekly update. Sign up and get up to <span>20% off</span> your first purchase</h3>
                            <form>
                                <div class="form-group">
                                    <input type="email" class="form_control" placeholder="Write your Email Address" name="email">
                                    <button class="theme-btn style-one">Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="newsletter-image">
                            <img src="{{asset('images/newsletter/newsletter-1.png')}}" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--====== End Newsletter Sections  ======-->
@endsection
