<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Blog Template for Bootstrap</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/blog/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/css/app.css" rel="stylesheet">
  </head>

  <body>

    <!-- resources/views/layouts/nav.blade.php -->
    @include('layouts.nav')

    @if($flash = session('message'))
    <div id="flash-message" class="alert alert-success" role="alert">
        {{ $flash }}
    </div>
    @endif

    <div class="blog-header">
      <div class="container">
        <h1 class="blog-title">The Bootstrap Blog</h1>
        <p class="lead blog-description">An example blog template built with Bootstrap.</p>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-sm-8 blog-main">
            @yield('content')
        </div>
        <div class="col-sm-3 offset-sm-1 blog-sidebar">
            @include('layouts.sidebar')
        </div><!-- /.blog-sidebar -->
      </div><!-- /.row -->
    </div><!-- /.container -->


    <!-- resources/views/layouts/footer.blade.php -->
    @include('layouts.footer')
  </body>
</html>

