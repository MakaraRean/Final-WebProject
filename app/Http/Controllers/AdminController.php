<?php

namespace App\Http\Controllers;

use App\Models\SocialMedia;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function profile(User $users){
        $socials = SocialMedia::all();
        return view('admin.profile',['user' => $users,'social' => $socials]);
    }

    public function editProfile(User $id){
        $social = SocialMedia::all();
        return view('admin.edit-profile',['social' => $social,'user' =>$id]);
    }

    public function saveChange(User $user,SocialMedia $socialMedia){
        $user->update([
            'name' => request()->name,
            'email' => request()->email,
            'phone' => request()->phone,
            'address' => request()->address,
            'title' => request()->title
        ]);

        $socialMedia->update([
            'website-link' => request()->website_link,
            'facebook' => request()->facebook,
            'facebook-link' => request()->facebook_link,
            'instagram' => request()->instagram,
            'instagram-link' => request()->instagram_link,
            'github' => request()->github,
            'github-link' => request()->github_link,
            'twitter' => request()->twitter,
            'twitter-link' => request()->twitter_link,
            'user-id' => request()->user_id
        ]);

        return redirect()->route('profile',$user->id)
         ->with('success','Profile has been updated.');
    }
}
