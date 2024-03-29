@extends('auth.template')
@section('form')
    <form class="login100-form validate-form" action="/register" method="POST">
        @csrf
        <span class="login100-form-title p-b-43"> 
        Register with Us
        </span>
        <div class="wrap-input100 validate-input">
        <input class="input100" type="text" name="name" id="name" value="{{ old('name') }}">
        <span class="focus-input100"></span>
        <span class="label-input100">Name</span>
        </div>
        @error('name')
        <p style="color:red">{{ $message }}</p>
        @enderror
        <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="email" id="email" value="{{ old('email') }}">
            <span class="focus-input100"></span>
            <span class="label-input100">Email</span>
            </div>
        @error('email')
        <p style="color:red">{{ $message }}</p>
        @enderror
        <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="phone" id="phone" value="{{ old('phone') }}">
            <span class="focus-input100"></span>
            <span class="label-input100">Phone</span>
            </div>
        @error('email')
        <p style="color:red">{{ $message }}</p>
        @enderror
        <div class="wrap-input100 validate-input">
        <input class="input100" type="password" name="password">
        <span class="focus-input100"></span>
        <span class="label-input100">Password</span>
        </div>
        @error('password')
        <p style="color:red">{{ $message }}</p>
        @enderror

        <div class="wrap-input100 validate-input">
            <input class="input100" type="password" name="password_confirmation">
            <span class="focus-input100"></span>
            <span class="label-input100">Password</span>
            </div>
        @error('password')
        <p style="color:red">{{ $message }}</p>
        @enderror
        <div class="flex-sb-m w-full p-t-3 p-b-32">
        {{-- <div class="contact100-form-checkbox">
        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
        <label class="label-checkbox100" for="ckb1">
        Remember me
        </label>
        </div> --}}
        <div>
        <a href="/login" style="font-family: sans-serif;font-size: 16px;color:rgb(109, 13, 235)">Account exits? login</a>
        </div>
        </div>
        <div class="container-login100-form-btn">
        <button class="login100-form-btn" type="submit">
        Sign Up
        </button>
        </div>
        <div class="text-center p-t-46 p-b-20">
        <span class="txt2">
        or sign up using
        </span>
        </div>
        <div class="login100-form-social flex-c-m">
        <a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
        <i class="fa fa-facebook-f" aria-hidden="true"></i>
        </a>
        <a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
        <i class="fa fa-twitter" aria-hidden="true"></i>
        </a>
        </div>
    </form>
@endsection