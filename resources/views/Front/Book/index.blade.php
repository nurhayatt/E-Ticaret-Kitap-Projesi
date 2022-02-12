@extends('layouts.app')
@section('content')

    <!--start-breadcrumbs-->
    <div class="breadcrumbs">
        <div class="container">
            <div class="breadcrumbs-main">
                <ol class="breadcrumb">
                    <li><a href="{{ route('index') }}">Anasayfa</a></li>
                    <li class="active">{{ $data[0]['name'] }}</li>
                </ol>
            </div>
        </div>
    </div>
    @if (session('status'))
        {{ session('status') }}
    @endif
    <!--end-breadcrumbs-->
    <!--start-single-->
    <div class="single contact">
        <div class="container">
            <div class="single-main">
                <div class="col-md-12 single-main-left">
                    <div class="sngl-top">
                        <div class="col-md-3 single-top-left">
                            <div class="flexslider">
                                <ul class="slides">
                                    <li data-thumb="{{ asset('images/s-1.jpg') }}">
                                        <div class="thumb-image"> <img src="{{ asset('images/s-1.jpg') }}"
                                                data-imagezoom="true" class="img-responsive" alt="" /> </div>
                                    </li>
                                    <li data-thumb="{{ asset('images/s-2.jpg') }}">
                                        <div class="thumb-image"> <img src="{{ asset('images/s-2.jpg') }}"
                                                data-imagezoom="true" class="img-responsive" alt="" /> </div>
                                    </li>
                                    <li data-thumb="{{ asset('images/s-3.jpg') }}">
                                        <div class="thumb-image"> <img src="{{ asset('images/s-3.jpg') }}"
                                                data-imagezoom="true" class="img-responsive" alt="" /> </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- FlexSlider -->
                            <script src="{{ asset('js/imagezoom.js') }}"></script>
                            <script defer src="{{ asset('js/jquery.flexslider.js') }}"></script>
                            <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}" type="text/css"
                                media="screen" />

                            <script>
                                // Can also be used with $(document).ready()
                                $(window).load(function() {
                                    $('.flexslider').flexslider({
                                        animation: "slide",
                                        controlNav: "thumbnails"
                                    });
                                });
                            </script>
                        </div>
                        <div class="col-md-9 single-top-right">
                            <div class="single-para simpleCart_shelfItem">
                                <h2>{{ $data[0]['name'] }}</h2>
                                <div class="star-on">

                                    <div class="review">
                                        <a href="#"> 1 customer review </a>

                                    </div>
                                    <div class="clearfix"> </div>
                                </div>

                                <h5 class="item_price">{{ $data[0]['price'] }}TL</h5>
                                <p>{{ $data[0]['description'] }}</p>
                 
                                <ul class="tag-men">
                                    <li><span>Kategori</span>
                                        <span class="women1">: {{ App\Model\Category::getField($data[0]['category_id'],"name") }},</span>
                                    </li>
                                    <li><span>YayınEvi</span>
                                        <span class="women1">: {{ App\Model\Publisher::getField($data[0]['publisher_id'],"name") }}</span>
                                    </li>
                                    <li><span>Yazar</span>
                                        <span class="women1">: {{ App\Model\Writers::getField($data[0]['writer_id'],"name") }}</span>
                                    </li>
                                </ul>
                                <a href="{{ route('basket.add', ['id'=>$data[0]['id']]) }}" class="add-cart item_add">Sepete Ekle</a>

                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                 
                    <div class="latestproducts">
                        <div class="product-one">
                            <div class="col-md-4 product-left p-left">
                                <div class="product-main simpleCart_shelfItem">
                                    <a href="single.html" class="mask"><img class="img-responsive zoom-img"
                                            src="images/p-1.png" alt="" /></a>
                                    <div class="product-bottom">
                                        <h3>Smart Watches</h3>
                                        <p>Explore Now</p>
                                        <h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">$
                                                329</span></h4>
                                    </div>
                                    <div class="srch">
                                        <span>-50%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 product-left p-left">
                                <div class="product-main simpleCart_shelfItem">
                                    <a href="single.html" class="mask"><img class="img-responsive zoom-img"
                                            src="images/p-2.png" alt="" /></a>
                                    <div class="product-bottom">
                                        <h3>Smart Watches</h3>
                                        <p>Explore Now</p>
                                        <h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">$
                                                329</span></h4>
                                    </div>
                                    <div class="srch">
                                        <span>-50%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 product-left p-left">
                                <div class="product-main simpleCart_shelfItem">
                                    <a href="single.html" class="mask"><img class="img-responsive zoom-img"
                                            src="images/p-3.png" alt="" /></a>
                                    <div class="product-bottom">
                                        <h3>Smart Watches</h3>
                                        <p>Explore Now</p>
                                        <h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">$
                                                329</span></h4>
                                    </div>
                                    <div class="srch">
                                        <span>-50%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!--end-single-->



@endsection
