<!DOCTYPE html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Makaleler</title>
    <!-- Bootstrap CSS -->
    {{ Html::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css') }}
        <!-- jQuery first, then Bootstrap JS. -->
    {{ Html::script('https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js') }}
    {{ Html::script('https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js') }}
  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <a class="navbar-brand" href="{{ url('/') }}">Laravel</a>
        </div>
     <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

        <ul class="nav navbar-nav">
            <li class="active"><a href="{{ url('/home') }}">Home</a></li>
            <li><a href="{{ url('/makale-ekle') }}">Makale Ekle</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <form class="navbar-form navbar-left" role="search">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>


        <ul class="nav navbar-nav navbar-right">

            @if (Auth::guest())
                <li><a class="dropdown-item" href="{{ url('/login') }}">Login</a></li>
                <li><a class="dropdown-item" href="{{ url('/register') }}">Register</a></li>
            @else
                <li><a class="dropdown-item" href="#">{{ Auth::user()->name }}</a></li>
                <li><a class="dropdown-item" href="{{ url('/logout') }}">Logout</a></li>

            @endif

        </ul>
      </div><!-- /.navbar-collapse -->
      </div>
    </nav>

    <!-- Begin page content -->
    <div class="container">
      <div class="page-header">
        @yield('content')
      </div>
    </div>

    @section('footer')
        <!-- jQuery first, then Bootstrap JS. -->
    {{ Html::script('https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js') }}
    {{ Html::script('https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js') }}
  </body>
</html>
