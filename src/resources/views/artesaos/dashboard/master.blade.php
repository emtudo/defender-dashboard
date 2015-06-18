<!DOCTYPE html>
<html>
<head>
    <title>Defender Dashboard</title>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/css/bootstrap.min.css">
    <style type="text/css">
        body {
            padding-top: 70px;
        }
    </style>
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
          <a class="navbar-brand" href="{{ url('defender') }}">
              {{ trans('artesaos::dashboard.navigation.brand') }}
          </a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="{{ url('defender/users') }}">{{ trans('artesaos::dashboard.navigation.users') }}</a></li>
            <li><a href="{{ url('defender/roles') }}">{{ trans('artesaos::dashboard.navigation.roles') }}</a></li>
            <li><a href="{{ url('defender/permissions') }}">{{ trans('artesaos::dashboard.navigation.permissions') }}</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div class="container">@yield('content')</div>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>
</html>
