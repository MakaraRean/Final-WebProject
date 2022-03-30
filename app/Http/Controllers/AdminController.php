<?php

namespace App\Http\Controllers;

use App\Models\SocialMedia;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function profile(){
        return view('admin.profile');
    }

    public function editProfile(){
        $social = SocialMedia::all();
        return view('admin.edit-profile',['social' => $social]);
    }
}
