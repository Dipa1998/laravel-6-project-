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
@if(session('error'))
<div class="alert alert-danger" role="alert">
{{ session('error')}}
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
            <div class="card">
                <div class="card-header">!! ACCOUNT NAVIGATION !!</div>
               <a href ="{!! route('home')!!}" class="btn btn-primary btn-block">Dashboard</a>
               <a href ="{!! route('profile')!!}" class="btn btn-primary btn-block">Profile Settings</a>
               <a href ="{!! route('changepassword')!!}" class="btn btn-primary btn-block">Change Password</a>
               <a href ="{!! route('profileavatar')!!}" class="btn btn-primary btn-block">Uplode Profile picture</a>
                </div>
                <br>
                </div>
        <!-- END PROFILE SIDEBAR -->
                <div class="col-md-9">
            <div class="card">
                <div class="card-header"><h2>{{Auth::user()->name}}'s DASHBOARD</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{!! route('changepasswordFrom')!!}" method="post">
                    @csrf
                    <div class="form-group">
                    <label for="current_password"><strong>Current Password:</strong></label>
                    <input type="password" class="form-control" id="current_password" name="current_password">
                   </div>
                <div class="form-group">
                 <label for="new_password"><strong>New Password:</strong></label>
                 <input type="password" class="form-control" id="new_password" name="new_password">
                </div>
                <div class="form-group">
                 <label for="new_password_confirmation"><strong>Confirm New Password:</strong></label>
                 <input type="password" class="form-control" id="new_password_confirmation" name="new_password_confirmation">
                </div>
                <button class = "btn btn-primary"type=submit>Change Password</button>

                <div class="col-md-12 banner-sec">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                 <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators"  class="active"></li>
                  
                  </ol>
            <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
     <img class="centerImage" src="https://static.pexels.com/photos/33972/pexels-photo.jpg" height="200" width="1000"  alt="First slide">
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
