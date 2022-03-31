<?php

namespace App\Http\Controllers;

use App\Models\SocialMedia;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function profile(User $id){
        return view('admin.profile',['user' => $id]);
    }

    public function editProfile(User $user){
        $social = SocialMedia::all();
        return view('admin.edit-profile',['social' => $social,'user' =>$user]);
    }

    public function saveChange(User $user){
        $user->update([
            'name' => request()->name,
            'email' => request()->email,
            'phone' => request()->phone,
            'address' => request()->address
        ]);

        return redirect()->route('profile',$user->id)
         ->with('success','Post has been updated.');
    }
}
