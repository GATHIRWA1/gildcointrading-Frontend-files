@extends('user/layouts/layout_outer')

@section('title', 'Trade Now')

@section('navbar-bg', 'bg-light')

@section('logo')

	@include('user/partials/logo')

@endsection

@section('content')

<!-- carousel_trade -->
<div id="carouselTrade" class="carousel carousel_trade slide" data-bs-ride="carousel">
    
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselTrade" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        
        <button type="button" data-bs-target="#carouselTrade" data-bs-slide-to="1" aria-label="Slide 2"></button>
        
        <button type="button" data-bs-target="#carouselTrade" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <!-- /carousel-indicators -->

    <div class="carousel-inner">
        
        <div class="carousel-item active" style="background-image: url(user_outer/assets/img/carousels/b_02.jpg);">
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
        </div>
        <!-- /carousel-item -->

        <div class="carousel-item" style="background-image: url(user_outer/assets/img/carousels/b_01.jpg);">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
            </div>
        </div>
        <!-- /carousel-item -->

        <div class="carousel-item" style="background-image: url(user_outer/assets/img/carousels/b_03.jpg);">
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
            </div>
        </div>
        <!-- /carousel-item -->

    </div>
    <!-- /carousel-inner -->

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselTrade"  data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <!-- /carousel-control-prev -->

    <button class="carousel-control-next" type="button" data-bs-target="#carouselTrade"  data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    <!-- /carousel-control-next -->
</div>
<!-- /carousel_trade -->

<div class="container-fluid container-fluid-trade-now">
    
    <div class="row g-5 py-0">

        <div class="col-md-5">
            
            <div class="card card_trade_now shadow">
                
                <div class="card-body p-4">
                    
                    <ul class="nav nav-tabs nav-tabs-buy-sell mb-3" role="tablist">
                        <li class="nav-item">
                            <button class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#buyPanel">Buy</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#sellPanel">Sell</button>
                        </li>
                    </ul>


                    <h6>Cryptocurrency</h6>

                    <ul class="nav nav-tabs nav-tabs-crypto" role="tablist">
                        
                        <li class="nav-item">
                            <button class="btn btn-outline-secondary active" role="tab" data-bs-toggle="tab" data-bs-target="#cryptoPane_1">
                                
                                <div class="img me-1" style="background-image: url(../assets/img/icon_bitcoin.jpg);"></div> 
                                Bitcoin

                            </button>
                        </li>

                        <li class="nav-item">
                            <button class="btn btn-outline-secondary" role="tab" data-bs-toggle="tab" data-bs-target="#cryptoPane_2">
                                
                                <div class="img me-1" style="background-image: url(../assets/img/icon.png);"></div>
                                Gildcoin

                            </button>
                        </li>
                    </ul>

                    <div class="tab-content">
                        
                        <div id="cryptoPane_1" class="tab-pane show active" role="tabpanel">
                            <p><i class="far fa-info-circle text-muted"></i> 1 BTC = 5,173,541.39 <span class="text-muted">KES</span></p>
                        </div>
                        <!-- /cryptoPane_1 -->

                        <div id="cryptoPane_2" class="tab-pane" role="tabpanel">
                            <p><i class="far fa-info-circle text-muted"></i> 1 GLC = 100.45 <span class="text-muted">KES</span></p>
                        </div>
                        <!-- /cryptoPane_2 -->

                    </div>
                    <!-- /tab-content -->
                        
                    <div class="tab-content">

                        <div class="tab-pane fade show active" id="buyPanel" role="tabpanel">
                            
                            <form class="form_buy" action="buy" method="get">

                                <h6>Payment Method</h6>

                                <select class="form-select py-3 mb-2" name="payment_method" id="">
                                    <option value="">All payment methods</option>
                                    <option value="">M-Pesa</option>
                                    <option value="">Airtel Money</option>
                                    <option value="">MTN Money</option>
                                    <option value="">Visa</option>
                                    <option value="">Bank Transfer</option>
                                </select>

                                <h6>You Pay</h6>

                                <div class="input-group input-group-amount mb-4">
                                    
                                    <input class="form-control py-3" type="number" name="amount" placeholder="Any amount">

                                    <select class="form-select py-3" name="" id="">
                                        <option value="">KES</option>
                                        <option value="">USD</option>
                                        <option value="">EUR</option>
                                    </select>

                                </div>

                                
                                <div class="d-grid">
                                    <button name="find_offers" class="btn btn-primary py-3 d-flex align-items-center justify-content-between" type="submit">
                                        <span class="ms-1">Find Offers</span>
                                        <i class="fas fa-search me-2"></i>
                                    </button>
                                </div>

                            </form>
                            <!-- /form_buy -->

                        </div>
                        <!-- /buyPanel -->

                        <div class="tab-pane fade" id="sellPanel" role="tabpanel">
                            
                            <form class="form_sell" action="sell" method="get">

                                <h6>Get Paid In</h6>

                                <select class="form-select py-3 mb-2" name="payment_method" id="">
                                    <option value="">All payment methods</option>
                                    <option value="">M-Pesa</option>
                                    <option value="">Airtel Money</option>
                                    <option value="">MTN Money</option>
                                    <option value="">Visa</option>
                                    <option value="">Bank Transfer</option>
                                </select>

                                <h6>You Get</h6>

                                <div class="input-group input-group-amount mb-4">
                                    
                                    <input class="form-control py-3" type="number" name="amount" placeholder="Any amount">

                                    <select class="form-select py-3" name="" id="">
                                        <option value="">KES</option>
                                        <option value="">USD</option>
                                        <option value="">EUR</option>
                                    </select>

                                </div>

                                
                                <div class="d-grid">
                                    <button name="find_offers" class="btn btn-primary py-3 d-flex align-items-center justify-content-between" type="submit">
                                        <span class="ms-1">Find Offers</span>
                                        <i class="fas fa-search me-2"></i>
                                    </button>
                                </div>

                            </form>
                            <!-- /form_sell -->
                            
                        </div>
                        <!-- /sellPanel -->
                        
                    </div>
                    <!-- /tab-content -->

                </div>
                <!-- /card-body -->
            </div>
            <!-- /card -->
        </div>
        <!-- /col -->

    </div>
    <!-- /row -->
</div>
<!-- /container-fluid -->

@endsection