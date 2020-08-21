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
               <a href ="{!! route('changepassword')!!}}" class="btn btn-primary btn-block">Change Password</a>
               <a href ="{!! route('profileavatar')!!}}" class="btn btn-primary btn-block">Upload Profile picture</a>
                </div>
                </div>

                <div class="col-md-9">
            <div class="card">
                <div class="card-header"><h4>SHOW VIEW</h4></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h2>Display the Specified Resource</h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
