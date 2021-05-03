@extends('user/layouts/layout_outer')

@section('title', 'Forgot Password')

@section('navbar-bg', 'bg-light')

@section('logo')

	@include('user/partials/logo')

@endsection

@section('content')

<div class="container-fluid container-fluid-login">
    <div class="row">
        
        <div class="col-md-4 offset-md-4 text-center">
            <h1 class="mt-5 mb-3">Password Recovery</h1>

            <h1 class="display-1 my-4 text-muted">
                <i class="far fa-unlock-alt"></i>
            </h1>

            <p>To begin changing your password, please enter your e-mail</p>

            <form action="">

                <div class="form-floating mb-3">
                    <input name="email" type="email" class="form-control" id="floatingEmail" placeholder="Email address" required="required">
                    <label for="floatingEmail">Email address</label>
                </div>
                <!-- /form-floating -->

                <div class="d-grid gap-2">
                    <button class="btn btn-lg btn-primary text-light" type="submit">Submit</button>
                </div>

            </form>

            <p class="my-3 p2">
                <a href="login">Back to Log In</a>
            </p>

            
            <p class="mb-5 mt-3 p2">
                Don't have an account? <a href="register">Register</a>
            </p>

        </div>
    </div>
    <!-- /row -->
</div>
<!-- /container-fluid -->

@endsection