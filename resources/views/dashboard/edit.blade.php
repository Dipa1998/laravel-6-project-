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
                <div class="card-header"><h4>EDIT VIEW</h4></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{route('dashboard.update',$job->id)}}" method="POST">
                    @method('PATCH')
                    @csrf
                    <div class="form-group">
                    <label for="job_title"><strong>JOB TITLE:</strong></label>
                    <input type="text" id="job_title" class="form-control" name="job_title" value="{{$job->job_title}}">
                </div>
                <div class="form-group">
                    <label for="job_type"><strong>JOB TYPE:</strong></label>
                    <input type="text" class="form-control" name="job_type" value="{{$job->job_type}}">
                </div>
                <div class="form-group">
                    <label for="salary"><strong>SALARY:</strong></label>
                    <input type="text" class="form-control" name="salary" value="{{$job->salary}}">
                </div>
                <div class="form-group">
                    <label for="slug"><strong>SLUG:</strong></label>
                    <input type="text" id="slug" class="form-control" name="slug" value="{{$job->slug}}">
                </div>
                <div class="form-group">
                    <label for="job_description"><strong>JOB DESCRIPTION:</strong></label>
                    <textarea name="job_description" id="job_description" rows="10"
                    class="form-control"> {{$job->job_description}}</textarea>

                </div>
                <button class = "btn btn-success"type=submit>Save</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
