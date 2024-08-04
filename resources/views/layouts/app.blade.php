<!DOCTYPE html>
<html lang="en">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <head>
    @include('partials.head')
    <title>Legality Law Firm - {{$title}} </title>
    </head>
    <body>
        <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        @include('partials.header')
        @yield('page')
        @include('partials.footer')
        @include('partials.script')
        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square back-to-top"><i class="fa fa-arrow-up"></i></a>
    </body>

</html>


