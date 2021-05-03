<!doctype html>
<html lang="en">
    <head>
        @include('user/partials/head')
    </head>
    <body>

        <nav class="navbar sticky-top @yield('navbar-colour') @yield('navbar-bg') navbar-expand-lg">

            @include('user/partials/navbar')

        </nav>
        <!-- /nav -->

        @yield('content')

        @include('user/partials/footer')

        @include('user/partials/cookies')

        @include('user/partials/scripts')

        @yield('scripts')

        @include('user/partials/analytics')

    </body>
</html>