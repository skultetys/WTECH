@extends('layout.app')
 
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}" >
    <!--Special offer-->
    <section id="main">
        <div id="Carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#Carousel" data-slide-to="0" class="actice"></li>
                <li data-target="#Carousel" data-slide-to="1" class="actice"></li>
                <li data-target="#Carousel" data-slide-to="2" class="actice"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item carousel-image-1 active">
                    <div class="container">
                        <div class="carousel-caption d-none d-sm-block text-right mb-5">
                            <h1 class="display-3 title-color">Headphones</h1>
                            <p class="lead">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec placerat mauris. 
                            </p>
                            <a class="btn btn-color btn-lg" href="#">
                                Open in store
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item carousel-image-2">
                    <div class="container">
                        <div class="carousel-caption d-none d-sm-block text-right mb-5">
                            <h1 class="display-3 title-color">Airpods</h1>
                            <p class="lead">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque bibendum. 
                            </p>
                            <a class="btn btn-color btn-lg" href="#">
                                Open in store
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item carousel-image-3">
                    <div class="container">
                        <div class="carousel-caption d-none d-sm-block text-right mb-5">
                            <h1 class="display-3 title-color">PlayStation 4</h1>
                            <p class="lead">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus scelerisque ex id.  
                            </p>
                            <a class="btn btn-color btn-lg" href="#">
                                Open in store
                            </a>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" data-slide="prev" href="#Carousel">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" data-slide="next" href="#Carousel">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>  
    </section> 
    <!--End of special offer-->


    <!--Categories-->
    <div class="wid">
    <section id="catogories">
        <div class="row">
            <div class="mx-auto text-center pt-5 pb-3">
                <h1 class="text-capitalize">
                    Categories
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="category-list col-4">
                <ul class="list-group">
                    <li class="list-group-item">
                        <span><i class="fas fa-laptop fa-2x pr-2"></i></span>
                        Notebooks
                    </li>
                    <li class="list-group-item">
                        <span><i class="fas fa-mobile-alt fa-2x pl-2 pr-3"></i></span>
                        Mobile Phones
                    </li>
                    <li class="list-group-item">
                        <span><i class="fas fa-tv fa-2x pr-2"></i></span>
                        TV's
                    </li>
                    <li class="list-group-item">
                        <span><i class="fas fa-tablet fa-2x pr-3"></i></span>
                        Monitors
                    </li>
                </ul>
            </div>
            <div class="category-list col-4 ">
                <ul class="list-group">
                    <li class="list-group-item">
                        <span><i class="far fa-clock fa-2x pr-2"></i></span>
                        Smart Watches
                    </li>
                    <li class="list-group-item">
                        <span><i class="fab fa-playstation fa-2x pr-2"></i></span>
                        Gaming devices
                    </li>
                    <li class="list-group-item">
                        <span><i class="fa fa-camera fa-2x pr-2"></i></span>
                        Photo, audio, video
                    </li>
                    <li class="list-group-item">
                        <span><i class="fa fa-suitcase fa-2x pr-2"></i></span>
                        Office
                    </li>
                </ul>
            </div>
        </div>
    </section>
    </div>


    <!--Fresh products-->   
    <section class="products py-5">
        <div class="container">
            <div class="row">
                <div class="col-10 mx-auto col-sm-6 text-center">
                    <h1 class="text-capitalize">
                        Fresh products
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
                    <div class="card">
                        <div class="img-container">
                            <img src="/img/Featured/lens-3143893_640.jpg" alt="High zoom camera"
                                class="card-img-top"/>
                        </div>
                        <div class="card-body">
                            <div class="card-text d-flex justify-content-between text-capitalize">
                                <h5>
                                    Camera
                                </h5>
                                <span>
                                    <i class="fas fa-euro-sign"></i>
                                    2999
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
                    <div class="card">
                        <div class="img-container">
                            <img src="/img/Featured/earphones-791188_640.jpg" alt="Good quality earphones"
                                class="card-img-top"/>
                        </div>
                        <div class="card-body">
                            <div class="card-text d-flex justify-content-between text-capitalize">
                                <h5>
                                    Earphones
                                </h5>
                                <span>
                                    <i class="fas fa-euro-sign"></i>
                                    99
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
                    <div class="card">
                        <div class="img-container">
                            <img src="/img/Featured/smart-watch-821559_640.jpg" alt="Smart Watch"
                                class="card-img-top"/>
                        </div>
                        <div class="card-body">
                            <div class="card-text d-flex justify-content-between text-capitalize">
                                <h5>
                                    Apple Watch
                                </h5>
                                <span>
                                    <i class="fas fa-euro-sign"></i>
                                    499
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--Deals ending soon-->
    <section class="products py-5">
        <div class="container">
            <div class="row">
                <div class="col-10 mx-auto col-sm-6 text-center">
                    <h1 class="text-capitalize">
                        Deals ending soon
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
                    <div class="card">
                        <div class="img-container">
                            <img src="/img/Featured/imac-464737_640.jpg" alt="For the rich"
                                class="card-img-top product-img"/>
                        </div>
                        <div class="card-body">
                            <div class="card-text d-flex justify-content-between text-capitalize">
                                <h5>
                                    IMac
                                </h5>
                                <span>
                                    <i class="fas fa-euro-sign"></i>
                                    1799
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
                    <div class="card">
                        <div class="img-container">
                            <img src="/img/Featured/tv-627876_640.jpg" alt="LED TV"
                                class="card-img-top"/>
                        </div>
                        <div class="card-body">
                            <div class="card-text d-flex justify-content-between text-capitalize">
                                <h5>
                                    TV
                                </h5>
                                <span>
                                    <i class="fas fa-euro-sign"></i>
                                    1499
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-10 col-sm-8 col-lg-4 mx-auto my-3">
                    <div class="card">
                        <div class="img-container">
                            <img src="/img/slider-setup.jpg" alt="Setup for begginers"
                                class="card-img-top"/>
                        </div>
                        <div class="card-body">
                            <div class="card-text d-flex justify-content-between text-capitalize">
                                <h5>
                                    Setup
                                </h5>
                                <span>
                                    <i class="fas fa-euro-sign"></i>
                                    299
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection