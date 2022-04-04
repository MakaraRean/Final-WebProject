<?php

namespace App\Http\Controllers;

use App\Models\SocialMedia;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function profile(User $users){
        return view('admin.profile',['user' => $users]);
    }

    public function editProfile(User $id){
        return view('admin.edit-profile',['user' =>$id]);
    }

    public function saveChange(User $user){
        $user->update([
            'name' => request()->name,
            'email' => request()->email,
            'phone' => request()->phone,
            'address' => request()->address,
            'title' => request()->title,

            'website_link' => request()->website_link,
            'facebook' => request()->facebook,
            'facebook_link' => request()->facebook_link,
            'instagram' => request()->instagram,
            'instagram_link' => request()->instagram_link,
            'github' => request()->github,
            'github_link' => request()->github_link,
            'twitter' => request()->twitter,
            'twitter_link' => request()->twitter_link,
        ]);

        return redirect()->route('profile',$user->id)
         ->with('success','Profile has been updated.');
    }

    public function changePf(Request $request, User $user){

        $this->validate($request,[
            'change_pf' => 'required|image|mimes:jpeg,png,jpg|max:4096',
        ]);

        $profile_picture = request()->name . time() . '_' . request()->change_pf->getClientOriginalName();
        request()->change_pf->move(public_path('images/profile_picture'), $profile_picture);
        
        $user->update([
            'profile_picture_path' => $profile_picture,
       ]);

       return redirect()->route('profile',$user->id)
         ->with('success','Profile has been updated.');
    }

    public function user(){
        $users = User::all();
        return view('admin.user',['users' => $users]);
    }
}
