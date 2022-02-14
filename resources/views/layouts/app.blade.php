<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0-rc/js/adminlte.min.js" integrity="sha512-pbrNMLSckfh8yEOr2o1RT+4zMU3Sj7+zP3BOY6nFVI/FLnjTRyubNppLbosEt4nvLCcdsEa8tmKhH3uqOYFXKg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0-rc/css/adminlte.min.css" integrity="sha512-YOsl4pnOb5NC868yn1JxAzjJsWkLNtP53uc3OcyAl0Q2R1cwo/mdI1hHSQM8gbIxWj97mKeLoD9R0aiYibFQAA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0-rc/js/demo.min.js" integrity="sha512-lnlSIIRgYrC+zqy5mTVr2WZ9dzV/2PXqOHVZO0NnJJir3atnyCe+UEfj0FcAbDxxuWOkFjXxuuSaerYCvB/9sQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0-rc/css/alt/adminlte.components.min.css" integrity="sha512-Rp16mvqhy1/GKQWiGHQ3utvtApa7n0I0eFbYM37vwkr+V4JD9n3xICXVjUofb8OpT/bRgxIpz1QCAkF0DUpdOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0-rc/css/alt/adminlte.core.min.css" integrity="sha512-XhWYIqwBmV9oycObODZ0CUC/hs3qCz4eQtBjijP9zt7xU9NMr2dmQXYI0Rb07lg/cT/qq8j97aiulyoejlhNIg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0-rc/css/alt/adminlte.core.min.css" integrity="sha512-XhWYIqwBmV9oycObODZ0CUC/hs3qCz4eQtBjijP9zt7xU9NMr2dmQXYI0Rb07lg/cT/qq8j97aiulyoejlhNIg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0-rc/css/alt/adminlte.extra-components.min.css" integrity="sha512-pt27SpFVee5AHQ6V8vdsvoIR/paKVxmt2Nk4xhrsTN4e0O3y1qFLpIu7njB9lZRgDx2eE4rV4g/0Rw+40jC9xg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0-rc/css/alt/adminlte.light.min.css" integrity="sha512-t3cY6FrKpqXrDFGu/ogwTf/c0S7/yfW4LiaxlWUb1MgP5p9ccXohDgu+x6XFfcSVof2IQm2VplPpQRSLFRZaVQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0-rc/css/alt/adminlte.pages.min.css" integrity="sha512-0DaxENXQGYPyDd2NZAGUP8I4bS5ch4I9WTz6BTLiTNU3oaxOncVBdwK7B4Voq/ACCU6xD81x60lbtA24fjXPnQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0-rc/css/alt/adminlte.plugins.min.css" integrity="sha512-/EF366XYjoA14bQZRZnKNEQErwlbEBmp86zu9JuF4qLRHtCN3hc7JHedbri7DMwFdykcUz7x0Vw7Zy+Jdj/I2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0-rc/js/pages/dashboard.min.js" integrity="sha512-wXkHJ2i8Z5fK/q6k7qe38qA6uD+VpLC/LL2XobX3rVVw6F3//fDWwoqMQ2Mgy5nf9BIvW2gLbILQJTIO/gDrDg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0-rc/js/pages/dashboard2.min.js" integrity="sha512-/On5eFU1vz1sGgejVpebEmg91zdKYXBcm4HPzDHcKOF1icilwxSR0C1ClBcK9IodnQdow2HjmHnqxt8PdQRrAA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0-rc/js/pages/dashboard3.min.js" integrity="sha512-l8RWdqTMUrIWPpdL2yB14+n+2WBPFe/KhH65aa3YAi+fRVvRMKxMVgmdk0/EUXLRKLFJmUH4rBABfxBsribrJg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Scripts -->
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
{{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body style="background-color:#DAE1FF;">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color: #3699FF">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}" style="color: white">
                   {{--  {{ config('app.name', 'TRIKAMEDIA') }} --}}
                     <img style="width: 50px; height: auto;" src="{{ asset('img/trikamedia_logo.png') }}"><strong> TRIKAMEDIA</strong>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    {{-- <ul class="navbar-nav me-auto">

                    </ul> --}}

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav   ml-auto">
                        <!-- Authenticatiostyn Links -->
                      {{--   @guest --}}
                      {{--       @if (Route::has('login')) --}}
                                {{-- <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li> --}}
                            {{-- @endif --}}
                            

                            {{-- @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif --}}
                      {{--   @else --}}
                      @if (Auth::check())
                      
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white " href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <strong>{{ Auth::user()->name }}</strong>
                                </a>


                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <ul>  <li>
                                   <a href="/suminvoice/mytransaction"> My transaction</a>
                                </li>
                                        <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                                        {{"logout"}}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>

                                </ul>
                                </div>
                                 
                            </li>
                            @else
                            <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                       {{--  @endguest --}}
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
            <div class="col-12 p-1 float-sm-right">
        @include('/layouts/flash-message')
      </div>
        </main>
    </div>
</body>
</html>
