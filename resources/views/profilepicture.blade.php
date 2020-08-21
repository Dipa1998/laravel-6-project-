@extends('layouts.app')

@section('content')
<div class="container">
@if($errors->any())
<div class="alert alert-danger">
<ul>
@foreach($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
@if(session()->get('message'))
<div class="alert alert-success" role="alert">
<strong>SUCCESS:</strong>{{ session()->get('message')}}
</div>
@endif
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
               <a href ="{!! route('profileavatar')!!}}" class="btn btn-primary btn-block">Upload Profile picture</a>
                </div>
                </div>
        <!-- END PROFILE SIDEBAR -->
                <div class="col-md-9">
            <div class="card">
                <div class="card-header"><h2>{{Auth::user()->name}}'s DASHBOARD</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form enctype="multipart/form-data" action="{!! route('profileavatar')!!}" method="post">
                    
                    <div class="form-group">
                    <input type="file" name="avatar" class="form-control">
                     <input type="hidden" class="form-control" name="_token" value ="{{csrf_token()}}">
                    </div>
                
                <button class = "btn btn-primary"type=submit>Upload Picture</button>
                
                <div class="col-md-12 banner-sec">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                 <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators"  class="active"></li>
                  
                  </ol>
            <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
     <img class="centerImage" src="https://images.pexels.com/photos/7097/people-coffee-tea-meeting.jpg" height="400" width="1000"  alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <div class="banner-text">
            
        </div>	
        <body style="background-color:grey;">
                </from>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
