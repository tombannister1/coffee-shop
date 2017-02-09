<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Coffee Shop LTD</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://cdn.bootcss.com/animate.css/3.5.1/animate.min.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body ng-app="app">
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Coffee LTD</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#order">Order</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
<div id="wrapper">
    <div class="container" style="background-color:rgba(0, 0, 0, 0.5);">
        <section id="hero">
            <div class="container">
                <div class="col-xs-12">
                    <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
                        <!-- Overlay -->
                        <div class="overlay"></div>

                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <?php
                                //get current time

                                $time = date('H:i:s');

                                $start_time = '08:00:00';
                                $end_time = '11:00:00';
                            ?>
                            @if($time > $start_time && $time < $end_time)
                                <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
                                <li data-target="#bs-carousel" data-slide-to="1"></li>
                                <li data-target="#bs-carousel" data-slide-to="2"></li>
                                <li data-target="#bs-carousel" data-slide-to="3"></li>
                            @else
                                <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
                                <li data-target="#bs-carousel" data-slide-to="1"></li>
                                <li data-target="#bs-carousel" data-slide-to="2"></li>
                            @endif
                        </ol>

                        <!-- Wrapper for slides -->
                        @if($time > $start_time && $time < $end_time)
                            <div class="carousel-inner" ng-init="init()" ng-controller="HomepageController">
                                <div class="item slides active" style="background: url('../images/main-banner.jpg'); border-radius:5px; ">
                                    <div class="slide"></div>
                                    <div class="hero">
                                        <hgroup>
                                            <h1 class="carousel-title">Special Of The Day - @{{ product_of_the_day.product.product_name }}</h1>
                                        </hgroup>
                                        <button href="mailto:buy@coffeshop.co.uk" class="btn btn-primary ribbon">Order Now</button>
                                    </div>
                                </div>
                                <div class="item slides" style="background: url('http://www.placehold.it/1000x550');">
                                    <div class="slide-1"></div>
                                    <div class="hero">
                                        <hgroup>
                                            <h1 class="carousel-title">We are creative</h1>
                                        </hgroup>
                                        <button class="btn btn-hero btn-lg" role="button">See all features</button>
                                    </div>
                                </div>
                                <div class="item slides" style="background: url('http://www.placehold.it/1000x550');">
                                    <div class="slide-2"></div>
                                    <div class="hero">
                                        <hgroup>
                                            <h1 class="carousel-title">We are smart</h1>
                                        </hgroup>
                                        <button class="btn btn-hero btn-lg" role="button">See all features</button>
                                    </div>
                                </div>
                                <div class="item slides" style="background: url('http://www.placehold.it/1000x550');">
                                    <div class="slide-3"></div>
                                    <div class="hero">
                                        <hgroup>
                                            <h1 class="carousel-title">We are amazing</h1>
                                        </hgroup>
                                        <button class="btn btn-hero btn-lg" role="button">See all features</button>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="carousel-inner">
                                <div class="item slides active" style="background: url('http://www.placehold.it/1000x550');">
                                    <div class="slide-1"></div>
                                    <div class="hero">
                                        <hgroup>
                                            <h1 class="carousel-title">Come In Store Today!</h1>
                                        </hgroup>
                                    </div>
                                </div>
                                <div class="item slides" style="background: url('http://www.placehold.it/1000x550');">
                                    <div class="slide-2"></div>
                                    <div class="hero">
                                        <hgroup>
                                            <h1 class="carousel-title">Check It Out Today!</h1>
                                        </hgroup>
                                    </div>
                                </div>
                                <div class="item slides" style="background: url('http://www.placehold.it/1000x550');">
                                    <div class="slide-3"></div>
                                    <div class="hero">
                                        <hgroup>
                                            <h1 class="carousel-title">Barista!</h1>
                                        </hgroup>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>
        <section id="about">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h1 class="text-center">About Us</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <img class="img-responsive" src="http://winazcoffeeshop.com/wp-content/uploads/2016/04/backgroundcoffee.jpg" alt="Coffee shop">
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel faucibus nulla. Etiam non nibh vel est consequat congue vel eget felis. Maecenas vel orci nec elit pretium tempus nec vitae felis. Praesent quis justo eu tortor feugiat facilisis. Nam magna magna, gravida vitae tempor id, volutpat a ex. Nunc efficitur mauris elit, vel maximus orci dictum in. Suspendisse lacinia viverra magna, et vestibulum nisl. Maecenas feugiat, dolor a tincidunt egestas, urna augue interdum risus, in finibus neque turpis sed sapien. Mauris ipsum nisl, efficitur nec dapibus quis, tristique ac eros. In condimentum ipsum felis, ut ullamcorper purus semper non. Fusce faucibus turpis in ligula imperdiet fringilla. Aenean sit amet lorem turpis.</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="products" ng-init="init()" ng-controller="HomepageController">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h1 class="text-center">Our Products</h1>
                    </div>
                </div>
                <div class="row">
                    <div id="products-wrapper">
                        <div class="col-xs-12 col-md-2 product" ng-repeat="product in products.products">
                            <div id="products-container">
                                <div class="product-item text-center">
                                    <div class="col-xs-12 ">
                                        <h2>@{{ product.product_name }}</h2>
                                    </div>
                                    <div class="col-xs-12">
                                        <h2>&pound; @{{ product.price }}</h2>
                                    </div>
                                    <div class="col-xs-12">
                                        <button href="mailto:buy@coffeshop.co.uk" class="btn btn-primary ribbon">Order Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="order">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h1 class="text-center">Order</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <h2 class="text-center">To Place an order please email <a class="link" href="buy@coffeeshop.uk">buy@coffeeshop.uk</a></h2>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/controllers/HomepageController.js') }}"></script>
</body>
</html>
