@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <!--START SIDEBAR -->
    <div class="col-md-3">
            <div class="card">
                <div class="card-header">! ! Profile Picture ! !</div>
                <img src="/img/avatar/{{Auth::user()->avatar}}" alt="profile_picture" style="width:250px; height:250px;">
                </div>
                <br>
                <div class="card">
                <div class="card-header">!! ACCOUNT NAVIGATION !!</div>
               <a href ="{!! route('home')!!}" class="btn btn-primary btn-block">Dashboard</a>
               <a href ="{!! route('profile')!!}" class="btn btn-primary btn-block">Profile Settings</a>
               <a href ="{!! route('changepassword')!!}" class="btn btn-primary btn-block">Change Password</a>
               <a href ="{!! route('profileavatar')!!}" class="btn btn-primary btn-block">Upload Profile picture</a>
                </div>
               
                </div>
                

                <div class="col-md-9">
            <div class="card">
                <div class="card-header"><h4>{{Auth::User()->name}}'s DASHBOARD</h4></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h2>{{Auth::User()->name}}You are logged in!</h2>
                    <div class="col-md-12 banner-sec">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                 <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
            <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
     <img class="centerImage" src="https://static.pexels.com/photos/33972/pexels-photo.jpg" height="400" width="1100"  alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <div class="banner-text">
            <h2>This is JobScan</h2>
            <p>“If the wind will not serve, take to the oars.” –Latin Proverb</p>
        </div>	
  </div>
    </div>
    <div class="carousel-item">
      <img class="centerImage" src="https://images.pexels.com/photos/7097/people-coffee-tea-meeting.jpg" height="400" width="1100" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <div class="banner-text">
            <h2>This is JobScan</h2>
            <p>“In the middle of difficulty lies opportunity.” —Albert Einstein</p>
        </div>	
    </div>
    </div>
    <div class="carousel-item">
      <img class="centerImage" src="https://images.pexels.com/photos/872957/pexels-photo-872957.jpeg" height="400" width="1100" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <div class="banner-text">
            <h2>This is JobScan</h2>
            <p>“Winning isn’t everything, but wanting to win is.” —Vince Lombardi</p>
        </div>	
    </div>
  </div>
  <body style="background-color:grey;">         
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

