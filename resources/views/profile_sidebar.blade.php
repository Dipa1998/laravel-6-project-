<div class="col-md-3">
                <div class="card">
                <div class="card-header">SIDEBAR</div>
                <img src="/img/avatar/{{Auth::user()->avatar}}" alt="profile_picture" style="width:250px; height:250px;">
                </div>
            <div class="card">
                <div class="card-header">SIDEBAR</div>
               <a href ="{!! route('home')!!}" class="btn btn-primary btn-block">Dashboard</a>
               <a href ="{!! route('profile')!!}" class="btn btn-primary btn-block">Profile Settings</a>
               <a href ="{!! route('changepassword')!!}" class="btn btn-primary btn-block">Change Password</a>
               <a href ="{!! route('profileavatar')!!}" class="btn btn-primary btn-block">UplodeProfile picture</a>
                </div>
                <br>
                
                </div>
               