@extends('user/layouts/layout_outer')

@section('title', 'Login')

@section('navbar-bg', 'bg-light')

@section('logo')

	@include('user/partials/logo')

@endsection

@section('content')

<div class="container-fluid container-fluid-login">
    <div class="row">
        
        <div class="col-md-4 offset-md-4 text-center">
            <h1 class="mt-5 mb-3">Log In</h1>

            <form action="trade_room">

                <div class="form-floating mb-3">
                    
                    <input name="email_username" type="text" class="form-control" id="floatingEmail" placeholder="Email address" required="required">
                    
                    <label for="floatingEmail">Email address / Username</label>
                </div>
                <!-- /form-floating -->

                <div class="form-floating mb-3">
                    
                    <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password" required="required">
                    
                    <label for="floatingPassword">Password</label>
                
                </div>
                <!-- /form-floating -->

                <div class="d-grid gap-2">
                    <button class="btn btn-lg btn-primary text-light" type="submit">Log In</button>
                </div>

            </form>

            <div class="line my-5">
                <span class="px-2">or use social account</span>
            </div>

            <div class="d-grid gap-2">
                
                <a href="#none" class="btn btn-lg btn-outline-secondary sso fb" type="button">
                    <i class="fab fa-facebook-square"></i> Log In with Facebook
                </a>
                
                <a href="#none" class="btn btn-lg btn-outline-secondary sso google" type="button">
                    <i class="fab fa-google"></i> Log In with Google
                </a>
            </div>

            <p class="my-3 p1">
                <a href="forgot_password">Forgot Password?</a>
            </p>
            
            <p class="mb-5 p2">
                Don't have an account? <a href="register">Register</a>
            </p>

            <p class="mb-5 p3 p-3">
                <span>RISK WARNING</span>
                All trading involves risk. Only risk capital you're prepared to lose.
            </p>


        </div>
    </div>
    <!-- /row -->
</div>
<!-- /container-fluid -->

@endsection