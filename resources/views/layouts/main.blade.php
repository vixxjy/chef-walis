<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('assets/favicon/favicon_Groggery.ico') }}">

    <title>Chefwalis | Recipes</title>

    <!-- CSS Plugins -->
    <link href="{{ asset('assets/plugins/lightbox/dist/css/lightbox.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/ionicons/css/ionicons.min.css') }}" rel="stylesheet" type="text/css">

    <!-- CSS Global -->
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">

  </head>
  <body data-spy="scroll" data-target=".navbar" data-offset="70">

    <!-- TO THE TOP BUTTON
    ================================================== -->
    <a id="back-to-top" href="#section_welcome" class="btn btn-primary back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left">
      <i class="ion-android-arrow-up"></i>
    </a>

    <!-- PRELOADER
    ================================================== -->
    <div id="loader-wrapper">
      <div id="loader"></div>
    </div>
       <!--  NAVBAR
    ================================================== -->
    @include('partials.nav')
    <!-- navbar -->

    <!-- main -->
    @yield('content')

    <!-- section footer -->
    @include('partials.footer')
<!-- JS
    ================================================== -->

    <!-- JS Global -->
    <script src="assets/plugins/jquery/jquery-1.12.4.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    
    <!-- JS Plugins -->
    <script src="assets/plugins/lightbox/dist/js/lightbox.min.js"></script>
    <script src="assets/plugins/isotope/isotope.pkgd.min.js"></script>
    <script src="assets/plugins/imagesloaded/imagesloaded.pkgd.min.js"></script>
    
    <!-- JS Custom -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/google_maps.js"></script>

    <!-- Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfwXIv2vgXzFDZRzzRH2VpbvgSzhqCCuU&callback=initMap" async defer></script>

  </body>
</html>