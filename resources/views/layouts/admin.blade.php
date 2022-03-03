<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">

          <!-- CSRF Token -->
          <meta name="csrf-token" content="{{ csrf_token() }}">

          <title>{{ config('app.name', 'Laravel') }}</title>

          <!-- Scripts -->
          <script src="{{ asset('js/app.js') }}" defer></script>

          <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
          <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
          <!-- Styles -->
          <link id="pagestyle" href="../admin/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
          <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
          <link href="{{asset('admin/css/material-dashboard.css')}}" rel="stylesheet">
          <link href="{{asset('admin/css/custom.css')}}" rel="stylesheet">
</head>

<body>
          <div class="wrapper">
                    @include('layouts.inc.sidebar')
                    <div class="main-panel">
                              @include('layouts.inc.adminnav')
                              <div class="content">
                                        @yield('content')
                              </div>
                              @include('layouts.inc.adminfooter')
                    </div>
          </div>


          <!--Script-->
          <script src="{{ asset('admin/js/popper.min.js') }}" defer></script>
          <script src="{{ asset('admin/js/bootstrap.min.js') }}" defer></script>
          <script src="{{ asset('admin/js/perfect-scrollbar.min.js') }}" defer></script>
          <script src="{{ asset('admin/js/smooth-scrollbar.min.js') }}" defer></script>
          <script src="{{ asset('admin/js/chartjs.min.js') }}" defer></script>
          <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
          @if(session('status'))
          <script>
                    swal("{{session('status')}}");
          </script>
          @endif

          @yield('scripts')

</body>

</html>