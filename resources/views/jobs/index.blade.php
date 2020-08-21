<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="This is the Description for Homepage">
    <meta name="keywords" content="Keyword1, Keyword2, Keyword3, Keyword4, Keyword5, Keyword6">

    <title>This is The HomePage - Laravel.app</title>
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
    

</header>
    <!-- END Site header -->
    <!-- Main container -->
    <main>
      <!-- Recent jobs -->
      <section>
        <div class="container">
        <header class="section-header">
            <h2>Recent Jobs</h2>
          </header>
          <div class="alert alert-danger">
     
          <h2>You're Not Welcome On This Website</h2>
           </div>
          <div class="row jobs-details">
            <!-- START JOB DETAILS -->
            @foreach($jobs as $key => $job)
             
            <div class="col-xs-12">
              <div class="jobs-block">
                <header>
                <img src="/img/avatar/{{$job->client->avatar}}"alt=""style="width:70px;height:70px;border-radius:50%;">
                  <a href="{{route('jobs.show',$job->slug)}}"></a>
                  <div class="hgroup">
                  <h4>
            <a href="{{route('jobs.show',$job->slug)}}">{{$job->job_title}}</a>
                    </h4>
                     <div class="spacer-front"></div>
                   
                  </div>

             
                </header>

               <footer>
              <div class="status"><strong>Posted: &nbsp;<i class="fa fa-clock-o"></i></strong>{{$job->created_at->diffForHumans()}}&nbsp; By:&nbsp;<a href="{!!route('quotes.show')!!}">{{$job->client->name}}</a></div>
                  <div class="action-btn">
                 
                    <a class="btn btn-xs btn-info btn-outline"><strong>Job Type:</strong>&nbsp;{{$job->job_type}}</a>
                  </div>
                  <div class="action-btn">
                 
                    <a class="btn btn-xs btn-outline btn-warning"><strong>Salary:</strong>&nbsp;{{$job->salary}}</a>
                  </div>
                </footer>
              </div>
            </div>
             @endforeach
              
          <!-- END JOB DETAILS -->
          </div>

          <br><br>
    <p class="text-center">
      <ul class="pagination" role="navigation">
      <li class="page-item disabled" aria-label="&laquo; Previous">
        <span class="page-link" aria-hidden="true">&lsaquo;</span></li>
          <li class="page-item active" aria-current="page">
            <span class="page-link">1</span></li>
         <li class="page-item">
          <a class="page-link" href="#">2</a></li>
            <li class="page-item">
              <a class="page-link" href="#" rel="next" aria-label="Next &raquo;">
              </a>
            </li>
            </ul>

</p>

        </div>
      </section>
      <!-- END Recent jobs -->


      <!-- END Categories -->
    </main>
    <!-- END Main container -->
    <!-- Site footer -->
    <footer class="site-footer">

      <!-- Top section -->
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About </h6>
            <p class="text-justify">Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative
experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Company</h6>
            <ul class="footer-links">
              <li><a href="page-about.html">About us</a></li>
              <li><a href="page-typography.html">How it works</a></li>
              <li><a href="page-faq.html">Help center</a></li>
              <li><a href="page-typography.html">Privacy policy</a></li>
              <li><a href="page-contact.html">Contact us</a></li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Top Categories</h6>
            <ul class="footer-links">
              <li><a href="/category/graphic-design">Graphic Design</a></li>
              <li><a href="/category/web-development">web development</a></li>
              <li><a href="/category/backend">Backend developer</a></li>
              <li><a href="/category/content-writing">Content Writing</a></li>
              <li><a href="/category/web-design">Web Design</a></li>
            </ul>
          </div>
        </div>

        <hr>
      </div>
      <!-- END Top section -->

      <!-- Bottom section -->
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyrights &copy;2019 Laravel.app &nbsp; All Rights Reserved</p>
          </div>
        </div>
      </div>
      <!-- END Bottom section -->
    </footer>
    <!-- END Site footer -->
    <!-- Back to top button -->
    <a id="scroll-up" href="#"><i class="ti-angle-up"></i></a>
    <!-- END Back to top button -->
    <!-- Scripts -->
    <script src="{{ asset('assets/js/simplebar.min.js')}}"></script>
    <script src="{{ asset('assets/js/main.min.js')}}"></script>
    <script src="{{ asset('assets/js/custom.js')}}"></script>
    <script src="{{ asset('assets/js/snackbar.js')}}"></script>
    <script src="{{ asset('assets/js/mmenu.min.js')}}"></script>

  </body>
</html>