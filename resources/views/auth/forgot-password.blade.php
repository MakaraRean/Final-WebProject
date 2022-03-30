@extends('auth.template')
@section('form')
    <form class="login100-form validate-form" method="POST" action='{{ route("password.email") }}'>
        @csrf
<span class="login100-form-title p-b-43"> 
Forget Password?
</span>
@if (session('status'))
    <div class="mb-4">
       <p style="color: chartreuse"> {{ session('status') }}</p>
    </div>
@endif
<div class="wrap-input100 validate-input" >
<input class="input100" type="text" name="email">
<span class="focus-input100"></span>
<span class="label-input100">Email</span>
</div>
@error('email')
<p style="color:red">{{ $message }}</p>
@enderror
<div class="container-login100-form-btn">
<button class="login100-form-btn">
Click Here To Reset Your Password
</button>
</div>
<div class="text-center p-t-46 p-b-20">
<a href="/register" style="font-family: sans-serif;font-size: 25px;color:brown">Register Now</a>


</form>
@endsection