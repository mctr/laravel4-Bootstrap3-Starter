<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">


    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>
        @section('title')
            Starter
        @show
    </title>


    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    
    <!-- CSS -->
    {{ HTML::style('assets/css/bootstrap.css') }}
    {{ HTML::style('assets/css/bootstrap.min.css') }}
    {{ HTML::style('assets/css/bootstrap-theme.css') }}
    {{ HTML::style('assets/css/bootstrap-theme.min.css') }}
    <style>
    body {
        padding: 60px 0;
    }
    </style>

    @yield('styles')

</head>

<body>
    <!-- Container -->
    <div class="container">
        <!-- Navbar -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Laravel 4.1 Starter</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="{{{ URL::to('/') }}}"><span class="glyphicon glyphicon-home"></span> Home</a></li>
              <li><a href="{{{ URL::to('/') }}}">Anasayfa</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menü <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
            </ul>
           </div>
          </div>
 
		<div class="container">
			@yield('content')
		</div>
    
    
        
        <footer class="clearfix">
            @yield('footer')
        </footer>


    
    
    <!-- Javascripts -->
    
    {{ HTML::script('assets/js/bootstrap.js') }}
    {{ HTML::script('assets/js/bootstrap.min.js') }}
    {{ HTML::script('assets/js/jquery-1.10.2.min.js') }}
    
    
    

    @yield('scripts')

</body>

</html>
