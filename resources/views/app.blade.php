<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>
    @yield('title')
  </title>
  <link href="{{ asset('css/compiled.css') }}" rel="stylesheet">
  <link href="{{ asset('css/default.css') }}" rel="stylesheet">
  <style type="text/css">
    .with-bg-img {
      background-image: url('{{ asset('img/bg.png')  }}');
      background-attachment: fixed;
      background-size: cover;
      background-color: #ffffff !important;
    }
  </style>
  @yield('styles')
  <script>
      window.Laravel = <?php echo json_encode([
          'csrfToken' => csrf_token(),
      ]); ?>
  </script>
  @php
    function noNavBar() 
    {
      $routes = [
        'login',
        'register',
        'auth.verified-account',
        'auth.thank-you',
      ];
      $check = false;
      foreach($routes as $route) 
      {
        if (checkRoutes($route)) {
          $check = true;
        }
      }
      return $check;
    }
    function checkRoutes($route) 
    { 
      return Route::current()->getName() == $route ? true : false;
    }
  @endphp
</head>
<body class="bg-gray {{ noNavBar() ? 'with-bg-img' : 'padding-top-220' }}">
  <div id="loader">
    <img src="{{ asset('img/loader.svg') }}">
  </div>
  @if(!noNavBar())
    @include('layouts.main-navigator')
  @endif
  <div class="content">
    @yield('content')
  </div>
  @include('layouts.footer')
  @if (Auth::check())
    @include('partials.change-password-modal')
  @endif
  <script src="{{ asset('js/compiled.js') }}"></script>
  <script src="{{ asset('js/default.js') }}"></script>
  @yield('script')
  <script type="text/javascript">
    $(document).ready(function(){
      @if(!empty(session('alert')))
        var title = null;
        var type = null;
        switch("{{ session('alert')['alert-type'] }}") {
          case 'alert-danger':
            type = 'danger';
            title = 'Error: '
            break;
          case 'alert-success':
            type = 'success';
            break;
          case 'alert-warning':
            type = 'warning';
            break;
          default:
            type = 'info';
        }
        $.notify({
          title: title,
          message: "{{ session('alert')['message'] }}"
        },{
          type: type,
          delay: 3000,
          newest_on_top: true,
          placement: {
            from: 'top',
            align: 'right'
          }
        });
        @php
          session()->forget('alert');
        @endphp
      @endif
    });
  </script>
</body>
</html>
