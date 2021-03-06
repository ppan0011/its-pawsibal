<!DOCTYPE html>
<html lang="en">
<head>
  <title>Its Pawsibal - @yield('title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="icon" href="{{ URL::asset('images/favicon-32x32.png') }}" type="image/x-icon"/>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="{{ secure_asset('css/animate.css') }}">
  <link rel="stylesheet" href="{{ secure_asset('css/map-icons.min.css') }}">

  <link rel="stylesheet" href="{{ secure_asset('css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ secure_asset('css/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="{{ secure_asset('css/magnific-popup.css') }}">


  <link rel="stylesheet" href="{{ secure_asset('css/bootstrap-datepicker.css') }}">
  <link rel="stylesheet" href="{{ secure_asset('css/jquery.timepicker.css') }}">

  <link rel="stylesheet" href="{{ secure_asset('css/flaticon.css') }}">
  <link rel="stylesheet" href="{{ secure_asset('css/style.css') }}">
</head>
<body>
  @section('content')
  @include('layouts.navbar')
  @show

  @section('scripts')
  <script src="{{ secure_asset('js/jquery.min.js') }}"></script>
  <script src="{{ secure_asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ secure_asset('js/popper.min.js') }}"></script>
  <script src="{{ secure_asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ secure_asset('js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ secure_asset('js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ secure_asset('js/jquery.stellar.min.js') }}"></script>
  <script src="{{ secure_asset('js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ secure_asset('js/bootstrap-datepicker.js') }}"></script>
  <script src="{{ secure_asset('js/jquery.timepicker.min.js') }}"></script>
  <script src="{{ secure_asset('js/owl.carousel.min.js') }}"></script>
  <script src="{{ secure_asset('js/jquery.magnific-popup.min.js') }}"></script>
  
  <!-- <script src="{{ asset('js/scrollax.min.js') }}"></script> -->
  <script src="{{ secure_asset('js/main.js') }}"></script>
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-csv/0.71/jquery.csv-0.71.min.js"></script>
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
  <script type="text/javascript" src="{{ secure_asset('js/stats.js') }}"></script>

  @show

  @include('layouts.footer')
</body>
</html>