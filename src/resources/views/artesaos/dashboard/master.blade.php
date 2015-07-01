<!DOCTYPE html>
<html>
<head>
    <title>Defender Dashboard</title>
    <meta id="csrf-token" value="{{ csrf_token() }}"/>
    <link rel="stylesheet" href="{{ url('artesaos/dashboard/css/vendor.min.css') }}">
    <style type="text/css">body { padding-top: 70px; }</style>
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ route('defender.dashboard.index') }}">
              {{ trans('artesaos::dashboard.navigation.brand') }}
          </a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="{{ route('defender.dashboard.users') }}">{{ trans('artesaos::dashboard.navigation.users') }}</a></li>
            <li><a href="{{ route('defender.dashboard.roles') }}">{{ trans('artesaos::dashboard.navigation.roles') }}</a></li>
            <li><a href="{{ route('defender.dashboard.permissions') }}">{{ trans('artesaos::dashboard.navigation.permissions') }}</a></li>
            <li><a href="{{ config('dashboard.system') }}">Sistema</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div class="container">
      @include('flash::message')
      @yield('content')
    </div>
    <script type="text/javascript">var base_prefix = '/{{ config('dashboard.prefix') }}/';</script>
    <script type="text/javascript" src="{{ url('artesaos/dashboard/js/vendor.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('artesaos/dashboard/js/app.min.js') }}"></script>
</body>
</html>
