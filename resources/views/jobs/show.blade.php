<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="This is the Description for Homepage">
    <meta name="keywords" content="Keyword1, Keyword2, Keyword3, Keyword4, Keyword5, Keyword6">

    <title>This is The showPage - Laravel.app</title>
    <!-- Styles -->
    <link href="{{ asset('assets/css/main.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/custom.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap-grid.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">
    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Oswald:100,300,400,500,600,800%7COpen+Sans:300,400,500,600,700,800%7CMontserrat:400,700" rel="stylesheet" type="text/css">
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="icon" href="assets/img/favicon.ico">
  </head>
  <body class="smart-nav">
    <!-- Navigation bar -->
    <nav class="navbar">
      <div class="container">
        <!-- Logo -->
        <div class="pull-left">
      <a class="navbar-toggle" href="#" data-toggle="offcanvas"><i class="ti-menu"></i></a>
          <div class="logo-wrapper">
          <a class="logo" href="/"><h4>Laravel.app</h4></a>
          <a class="logo-alt" href="/"><h3>Laravel.app</h3></a>
          </div>
        </div>
        <!-- END Logo -->
        <!-- User account -->
        <div class="pull-right user-login">
          <a class="btn btn-sm btn-primary" title="Login" href="/login">Login</a> <a class="btn btn-sm btn-primary" title="Register" href="/register">register</a>
        </div>
        <!-- END User account -->

        <!-- Navigation menu -->
        <ul class="nav-menu">
          <li><a class="active" href="/">Home</a></li>
          <li><a href="category-details.html">add link</a> </li>
          <li> <a href="user-login.html">add link</a> </li>
          <li><a href="#">add link</a></li>
          <li><a href="#">add link</a></li>
        </ul>
        <!-- END Navigation menu -->
      </div>
    </nav>
    
<!-- Site header -->

    <!-- Page header -->
  <header class="site-header size-lg text-center" style="background-color: #ad78bc;">
  <div class="container">
    <div class="col-xs-12">
      <h2>{{$job->job_title}}</h2>
    </div>
  </div>
</header>
            <div class="container">
    <!-- END Page header -->
    <!-- Main container -->
    <main>
      <!-- Job detail -->
      <section>
        <div class="container">
          <div class="col-md-11 col-lg-12">
            <header class="section-header">
              <h2>Job Description</h2>
            </header>
            <div class="alert alert-warning">
          <h2>No Quotes To Display At This Time</h2>
           </div>
          <article class="post">
            {{-- <h2>Job Description</h2> --}}
             <div class="blog-content">
          <p>{{$job->job_description}} </p>
</div>
</div>
</article>
<!-- Sidebar -->

        

  </body>
</html>
