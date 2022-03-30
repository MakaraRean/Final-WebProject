@extends('auth.template')
@section('form')
    <form class="login100-form validate-form" method="POST" action="/login">
        @csrf
<span class="login100-form-title p-b-43"> 
Login to continue
</span>
@if (session('status'))
    <div class="mb-4">
       <p style="color: green"> {{ session('status') }}</p>
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

<div class="wrap-input100 validate-input" data-validate="Password is required">
<input class="input100" type="password" name="password">
<span class="focus-input100"></span>
<span class="label-input100">Password</span>
</div>
@error('password')
<p style="color:red">{{ $message }}</p>
@enderror
<div class="flex-sb-m w-full p-t-3 p-b-32">
<div class="contact100-form-checkbox">
<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
<label class="label-checkbox100" for="ckb1">Remember me</label>
</div>
<div>
<a href="{{ route('password.request') }}" class="txt1">Forgot Password?</a>
</div>
</div>
<div class="container-login100-form-btn">
<button class="login100-form-btn">Login</button>
</div>
<div class="text-center p-t-46 p-b-20">
<a href="/register" style="font-family: sans-serif;font-size: 25px;color:brown">Register Now</a>

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