@extends('user/layouts/layout_outer')

@section('title', 'Price Calculator')

@section('navbar-bg', 'bg-light')

@section('logo')
	
	@include('user/partials/logo')

@endsection

@section('content')

<div class="container-fluid container-fluid-login">
    <div class="row">
        
        <div class="col-md-8 offset-md-2" style="min-height: 400px;">
            <h1 class="mt-5 mb-3 text-center">Gildcoin Price Calculator</h1>

            <p class="lead mb-4 text-center">Use our Price Calculator to find out exactly how much your Gildcoin is worth in any of the supported global currencies, using accurate, up-to-date exchange rates.</p>

            
            <form action="">
                <div class="card card_calculator mb-5 shadow">
                    <div class="card-body p-5">
                        
                        <div class="row text-left g-0">
                            
                            <div class="col-md-5">
                                
                                <label class="form-label">Amount in Gildcoin</label>

                                <input type="number" name="gildcoin" class="form-control form-control-lg p-3" value="1.0000">

                            </div>
                            <!-- /col -->

                            <div class="col-md-1 text-center align-self-center"> 
                                <h1>=</h1> 
                            </div>
                            <!-- /col -->

                            <div class="col-md-6">
                                
                                <label class="form-label">Amount in selected currency</label>
                                
                                <div class="input-group mb-2">
                                    <input type="number" name="gildcoin" class="form-control form-control-lg p-3" value="5156670.78">
                                    <div class="input-group-text px-4">KES</div>
                                </div>

                                <div class="currency_btns">
                                    <a href="#none" class="btn btn-light active">KES</a>
                                    <a href="#none" class="btn btn-light">USD</a>
                                    <a href="#none" class="btn btn-light">EUR</a>
                                    <a href="#none" class="btn btn-light">GBP</a>
                                    <a href="#none" class="btn btn-light">JPY</a>
                                </div>

                            </div>
                            <!-- /col -->
                        </div>
                        <!-- /row -->
                    </div>
                    <!-- /card-body -->
                </div>
                <!-- /card -->
            </form>

        </div>
    </div>
    <!-- /row -->
</div>
<!-- /container-fluid -->

@endsection