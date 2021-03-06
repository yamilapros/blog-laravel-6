<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Blog</title>

  <!-- Bootstrap core CSS -->
  <link href="{{asset('blog/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="{{asset('blog/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css')}}">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="{{asset('blog/css/clean-blog.min.css')}}" rel="stylesheet">
  <!-- Link for prism CSS for view of code -->
  <link href="{{asset('blog/css/prism.css')}}" rel="stylesheet">

</head>

<body>

  @include('Frontend.includes.nav')

  @include('Frontend.includes.header')

  @yield('content')

  @include('Frontend.includes.footer')

  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('blog/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('blog/vendor/bootstrap/js/bootstrap.bundle.min.js')}}""></script>

  <!-- Custom scripts for this template -->
  <script src="{{asset('blog/js/clean-blog.min.js')}}"></script>
  <!-- Link for prism JS for view of code -->
  <script src="{{asset('blog/js/prism.js')}}"></script>
</body>

</html>
