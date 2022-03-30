@extends('auth.template')
@section('form')
    <form class="login100-form validate-form" method="POST" action='{{ route("verification.send") }}'>
        @csrf
        @if (session('status') == 'verification-link-sent')
    <div style="font-family: sans-serif;color:yellowgreen">
        A new email verification link has been emailed to you!
    </div>
@endif
<span class="login100-form-title p-b-43"> 
Please Your Email To Verify
</span>


<div class="text-center p-t-20 p-b-20">
    <a href="/register" style="font-family: sans-serif;font-size: 25px;color:brown">Not revieved an email yet ?</a>
    
    </div>
<div class="text-center p-t-20 p-b-20">    
{{-- <div class="container-login100-form-btn"> --}}
<button class="login100-form-btn">
Resend Link 
</button>
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