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
            <ul class="nav navbar-nav pull-right">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
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
                            <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#bs-carousel" data-slide-to="1"></li>
                            <li data-target="#bs-carousel" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item slides active">
                                <div class="slide-1"></div>
                                <div class="hero">
                                    <hgroup>
                                        <h1>We are creative</h1>
                                        <h3>Get start your next awesome project</h3>
                                    </hgroup>
                                    <button class="btn btn-hero btn-lg" role="button">See all features</button>
                                </div>
                            </div>
                            <div class="item slides">
                                <div class="slide-2"></div>
                                <div class="hero">
                                    <hgroup>
                                        <h1>We are smart</h1>
                                        <h3>Get start your next awesome project</h3>
                                    </hgroup>
                                    <button class="btn btn-hero btn-lg" role="button">See all features</button>
                                </div>
                            </div>
                            <div class="item slides">
                                <div class="slide-3"></div>
                                <div class="hero">
                                    <hgroup>
                                        <h1>We are amazing</h1>
                                        <h3>Get start your next awesome project</h3>
                                    </hgroup>
                                    <button class="btn btn-hero btn-lg" role="button">See all features</button>
                                </div>
                            </div>
                        </div>
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
                    <div class="col-xs-12">
                        <div id="products-container">
                            <div class="product-item" ng-repeat="product in products.products">
                                <div class="col-md-4">
                                    <h2>@{{ product.product_name }}</h2>
                                </div>
                                <div class="col-md-4">
                                    <h2>@{{ product.product_name }}</h2>
                                </div>
                                <div class="col-md-4">
                                    <h2>&pound; @{{ product.price }}</h2>
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
                        <h2>To Place an order please email <a href="buy@coffeeshop.uk">buy@coffeeshop.uk</a></h2>
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
