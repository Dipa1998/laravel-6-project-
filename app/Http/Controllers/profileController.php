<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use Hash;
use Image;

class profileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Get the User profile view
     */
    public function profile()
    {
        return view('profile');
    }
    /**
     * Update the Authenticate user profile
     */
    public function profileUpdate(Request $request)
    {
        //validation rules
        $request->validate([
            'name' => 'required|min:6|string|max:255',
            'email' => 'required|email|string|max:255'
        ]);
        //save the profile update
        $user = Auth::user();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->save();
        return back()->with('message','profile Updated');;
    }
    /**
     * Get the profile view for changing the password
     */
    public function changePassword()
    {
        return view('changepassword');
    }
    /**
     * Change the password for the Authenticated user
     */
    public function changePasswordFrom(Request $request)
    {
        if(!(Hash::check($request->get('current_password'),Auth::user()->password))){
            return back()->with('error','Your current password does not match with what you provided');
        }
        if(strcmp($request->get('current_password'),$request->get('new_password')) == 0){
            return back()->with('error','Your current password cannot be same with the new password');
        }
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|min:6|confirmed'
        ]);
        $user = Auth::user();
        $user->password = bcrypt($request->get('new_password'));
        $user->save();
        return back()->with('meaasge','Password changed successfully');
    }
    /**
     * Get the profile upload view
     */
    public function getProfileAvatar()
    {
        return view('profilepicture');
    }
    /**
     * upload and change the profile Avatar for the Authenticated user
     */
    public function profilePictureUpload(Request $request)
    {
        if($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $filename = time().".".$avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(250,250)->save(public_path('img/avatar/'.$filename));
            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }
        return back()->with('message','profile picture Uploaded successfully');
    }

}

