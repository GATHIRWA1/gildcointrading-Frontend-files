@extends('user/layouts/layout_outer')

@section('title', 'Partnerships')

@section('navbar-bg', 'bg-light')

@section('logo')

	@include('user/partials/logo')

@endsection

@section('content')
	<div class="container-fluid container-fluid-login">
        <div class="row">
            
            <div class="col-md-6 offset-md-3 text-center" style="min-height: 400px;">
                <h1 class="mt-5 mb-3">Partnerships</h1>

                <p class="lead">Take the trading experience of your customers to the next level with an innovative platform, dedicated support, low commissions and precise order execution.</p>

                <a href="#none" class="btn btn-lg btn-outline-primary">Join Our Partnership Program</a>

                

            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container-fluid -->
@endsection