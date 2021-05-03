@extends('user/layouts/layout_outer')

@section('title', 'Register')

@section('navbar-bg', 'bg-light')

@section('logo')
	
	@include('user/partials/logo')

@endsection

@section('content')

<div class="container-fluid container-fluid-login">
    <div class="row">
        
        <div class="col-md-4 offset-md-4 text-center">
            <h1 class="mt-5 mb-3">Register</h1>

            <form action="dashboard">

                <div class="row g-3">
                    <div class="col-md-6">
                        
                        <div class="form-floating mb-3">
                            
                            <input name="first_name" type="text" class="form-control" id="floatingFirstName" placeholder="First Name" required="required">

                            <label for="floatingFirstname">First Name</label>

                        </div>
                        <!-- /form-floating -->
                
                    </div>
                    <!-- /col -->
                    <div class="col-md-6">

                        <div class="form-floating mb-3">
                            
                            <input name="last_name" type="text" class="form-control" id="floatingLastName" placeholder="Last Name" required="required">

                            <label for="floatingLastName">Last Name</label>
                        </div>
                        <!-- /form-floating -->
                        
                    </div>
                    <!-- /col -->
                </div>
                <!-- /row -->

                <div class="row g-3">
                    
                    <div class="col-md-5">
                        
                        <div class="form-floating mb-3">
                            
                            <input name="username" type="text" class="form-control" id="floatingUserName" placeholder="Username" required="required">

                            <label for="floatingUserName">Username</label>
                        </div>
                        <!-- /form-floating -->

                    </div>
                    
                    <div class="col-md-7">

                        <div class="form-floating">
                    
                            <select name="country" class="form-select form-select-lg mb-3" id="floatingCountry" required="required">
                                <option selected value="NULL">-</option>
                                <option value="1">Kenya</option>
                                <option value="2">Tanzania</option>
                                <option value="3">Uganda</option>
                            </select>

                            <label for="floatingCountry">Country of permanent residence</label>
                        </div>
                        <!-- /form-floating -->

                    </div>
                </div>
                <!-- /row -->

                


                <div class="input-group input-group-phone mb-3">
                    
                    <span class="input-group-text form-control-lg">Phone</span>
                    
                    <input name="prefix_country" type="text" class="form-control form-control-lg prefix_country" placeholder="+" maxlength="4" required="required">

                    <input name="phone_number" type="text" class="form-control form-control-lg phone_number" placeholder="Number" maxlength="12" required="required">

                </div>


                <div class="form-floating mb-3">
                    
                    <input name="email" type="email" class="form-control" id="floatingEmail" placeholder="Email address" required="required">

                    <label for="floatingEmail">Email address</label>

                </div>
                <!-- /form-floating -->

                <div class="form-floating mb-3">
                    
                    <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password" required="required">

                    <label for="floatingPassword">Password</label>
                </div>
                <!-- /form-floating -->

                <div class="form-check form-check-confirm mb-3">
                    
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckConfirm" required="required">
                    
                    <label class="form-check-label" for="flexCheckConfirm">
                    I confirm that I am 18 years old or older and accept the <a href="terms" target="_blank">Terms &amp; Conditions</a> 
                    </label>

                </div>
                <!-- /form-check -->

                <div class="d-grid gap-2">
                    <button class="btn btn-lg btn-primary text-light" type="submit">Open an Account for Free</button>
                </div>

            </form>

            <div class="line my-4">
                <span class="px-2">or use social account</span>
            </div>

            <div class="row">

                <div class="col-md-6">
                    <a href="#none" class="btn btn-lg btn-outline-secondary mb-3 sso fb" type="button">
                        <i class="fab fa-facebook-square"></i> Facebook
                    </a>
                </div>

                <div class="col-md-6">
                    <a href="#none" class="btn btn-lg btn-outline-secondary mb-3 sso google" type="button">
                        <i class="fab fa-google"></i> Google
                    </a>
                </div>
                
            </div>

            
            
            <p class="my-5 p2">
                Already have an account? <a href="login">Log In</a> now
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