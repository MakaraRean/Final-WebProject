@extends('auth.template')
@section('form')
    <form class="login100-form validate-form" method="POST" action='{{ route("password.update") }}'>
        @csrf
<span class="login100-form-title p-b-43"> 
New Password 
</span>
<input type="hidden" value="{{ $request->token }}" name="token">
<div class="wrap-input100 validate-input" >
<input class="input100" type="text" name="email" value="{{ $request->email }}" >
<span class="focus-input100"></span>
<span class="label-input100">Email</span>
</div>
@error('email')
<p style="color:red">{{ $message }}</p>
@enderror
<div class="wrap-input100 validate-input">
    <input class="input100" type="password" name="password">
    <span class="focus-input100"></span>
    <span class="label-input100">New Password</span>
    </div>
    @error('password')
    <p style="color:red">{{ $message }}</p>
    @enderror

    <div class="wrap-input100 validate-input">
        <input class="input100" type="password" name="password_confirmation">
        <span class="focus-input100"></span>
        <span class="label-input100">Confirmation Password</span>
        </div>
    @error('password')
    <p style="color:red">{{ $message }}</p>
    @enderror
<div class="container-login100-form-btn">
<button class="login100-form-btn">
Reset Your Password
</button>
</div>
<div class="text-center p-t-46 p-b-20">
<a href="/register" style="font-family: sans-serif;font-size: 25px;color:brown">Register Now</a>


</form>
@endsection