<!doctype html>
<html lang="en">
    <head>
        @include('user/partials/header_inner')
    </head>
    <body class="bg-dark" onload="startTime()">

        @include('user/partials/navbar_inner')

        <div class="container-fluid text-light">
            
            <div class="row mt-2 gx-2">
                
                <div class="col-md-1">
                    
                    @include('user/partials/nav_left_inner')

                </div>
                <!-- /left col -->

                @yield('content')

            </div>
            <!-- /row -->
        </div>
        <!-- /container-fluid -->

        @include('user/partials/footer_inner')

        @include('user/partials/cookies_inner')

        @yield('modals')

        @include('user/modals/offer')

        @include('user/modals/logout')

        @include('user/partials/scripts_inner')

        @yield('scripts')

        @yield('analytics')

    </body>
</html>