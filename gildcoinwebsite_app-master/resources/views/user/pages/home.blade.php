@extends('user/layouts/layout_outer')

@section('title', 'Welcome')

@section('navbar-colour', 'navbar-dark')

@section('navbar-bg', 'bg-dark')

@section('logo')
	
    @include('user/partials/logo_negative')
    
@endsection

@section('content')

<div id="carouselHome" class="carousel slide" data-bs-ride="carousel">

    <ol class="carousel-indicators">
        <li data-bs-target="#carouselHome" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#carouselHome" data-bs-slide-to="1"></li>
    </ol>

    <div class="carousel_bg" style="background-image: url(user_outer/assets/img/bg.jpg)"></div>

    <div class="max-width">
    
        <div class="carousel-inner">
            
            <div class="carousel-item active">

                <img src="user_outer/assets/img/laptop_phone.png" class="img-fluid img_ft" alt="">
                
                <h1 class="display-5 mt-5 mb-4 text-light">
                    Trade Gildcoin, your favourite <br />
                    cryptocurrency
                </h1>

                <a href="trade_now" class="btn btn-lg btn-primary mb-5">Trade Now</a>

            </div>
            <!-- /carousel-item -->

            <div class="carousel-item">

                <img src="user_outer/assets/img/laptop_phone.png" class="img-fluid img_ft" alt="">
                
                <h1 class="display-5 mt-5 mb-4 text-light">
                    We make exchanging available, <br />
                    simple and quick
                </h1>

                <a href="trade_now" class="btn btn-lg btn-primary mb-5">Trade Now</a>

            </div>
            <!-- /carousel-item -->

            
        
        </div>
        <!-- /carousel-inner -->

    </div>
    <!-- /max-width -->

</div>
<!-- /carouselHome -->

    
<div class="container-fluid container-fluid-home py-5 px-5">

    <div class="row">

        <div class="col">
            <h1 class="mb-5 text-center">Why choose Gildcoin?</h1>
        </div>
        <!-- /col -->

    </div>
    <!-- /row -->

    <div class="row mb-5">
        
        <div class="col-6">
            <h3 class="h1 text-primary">Quick deposits, quick withdrawals</h3>
            <p>Over a dozen of superb options for depositing and withdrawing money such as Visa, MasterCard, WebMoney, etc.</p>
        </div>

        <div class="col-6">
            <img src="user_outer/assets/img/computer.png" alt="" class="img-fluid">
        </div>
    
    </div>
    <!-- /row -->

    <div class="row mb-5">
        
        <div class="col-6">
            <h3 class="h1 text-primary">Flawless customer experience</h3>
            <p>Gildcoin Trading is proud of its Support Team that addresses any problem 24/7/365</p>
        </div>

        <div class="col-6">
            <img src="user_outer/assets/img/screenshot.jpeg" alt="" class="img-fluid">
        </div>
    
    </div>
    <!-- /row -->

    <div class="row mb-5">
        
        <div class="col-6">
            <h3 class="h1 text-primary">Comfortable trading</h3>
            <p>Gildcoin Trading offers a web app so you can trade Crypto assets whenever wherever!</p>
        </div>

        <div class="col-6">
            <img src="user_outer/assets/img/screenshot2.jpeg" alt="" class="img-fluid">
        </div>
    
    </div>
    <!-- /row -->

</div>
<!-- /container-fluid -->

<div class="strip strip_trade mb-5 pb-5">

    <div class="max-width">

        <hr class="mb-5" />

        <div class="container-fluid container-fluid-trade text-center">
            <div class="row">
                <h1 class="my-5">How to trade Gildcoin</h1>
            </div>
            <!-- /row-->

            <div class="row mb-5">
                <div class="col-md-4">
                    <h1 class="display-3 text-primary">
                        <i class="far fa-user-plus"></i>
                    </h1>
                    <h4>Register</h4>
                    <p>Quick and easy. <br />
                    Takes less than 1 minute!</p>
                </div>
                <div class="col-md-4">
                    <h1 class="display-3 text-primary">
                        <i class="fal fa-envelope-open-dollar"></i>
                    </h1>
                    <h4>Deposit</h4>
                    <p>We accept VISA, MasterCard <br />
                    and many others.</p>
                </div>
                <div class="col-md-4">
                    <h1 class="display-3 text-primary">
                        <i class="fas fa-exchange-alt"></i>
                    </h1>
                    <h4>Trade Gildcoin</h4>
                    <p>Analyse the past price trends/patterns <br />
                    and trade Gildcoin.</p>
                </div>
            </div>
            <!-- /row -->

            <div class="row">
                <div class="col">
                    <a href="trade_now" class="btn btn-lg btn-primary text-light">Trade Now</a>
                </div>
            </div>
        </div>
        <!-- /container-fluid -->

    </div>
    <!-- /max-width -->

</div>
<!-- /strip -->

<div class="strip strip_stats py-3">
    
    <div class="container-fluid">
        
        <div class="row text-center">
            
            <div class="col-6 col-md-3">
                <h3 class="text-muted"><i class="far fa-user"></i></h3>
                <h4>23,345</h4>
                <p class="mb-0 text-muted">Registered users</p>
            </div>
            <!-- /col -->

            <div class="col-6 col-md-3">
                <h3 class="text-muted"><i class="far fa-briefcase"></i></h3>
                <h4>1,320+</h4>
                <p class="mb-0 text-muted">Active investors daily</p>
            </div>
            <!-- /col -->

            <div class="col-6 col-md-3">
                <h3 class="text-muted"><i class="fas fa-signal"></i></h3>
                <h4>$203,300</h4>
                <p class="mb-0 text-muted">Monthly investing volume</p>
            </div>
            <!-- /col -->

            <div class="col-6 col-md-3">
                <h3 class="text-muted"><i class="fas fa-external-link-alt"></i></h3>
                <h4>$20,000</h4>
                <p class="mb-0 text-muted">Withdrawn each month</p>
            </div>
            <!-- /col -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container-fluid -->

</div>
<!-- /strip -->

@endsection