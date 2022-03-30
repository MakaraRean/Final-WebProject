<form method="post" action="{{ url('/user/two-factor-authentication') }}">
    @csrf
    @if (auth()->user()->two_factor_secret)
    @method('DELETE')
    <div class="pb-3">
    {!! auth()->user()->twoFactorQrCodeSvg() !!}                                
    </div>
    @if (session('status') == "two-factor-authentication-disabled")
       <div class="alert alert-danger" role="alert">
       Two factor authentication has been disabled
        </div>
        @endif
    <button class="btn btn-danger">
    Disable
    </button>
    @else
    @if (session('status') == "two-factor-authentication-enabled")
    <div class="alert alert-success" role="alert">
    Two factor authentication has been enabled
    </div>
    @endif
    <button class="btn btn-success">
    Enable
    </button>
    @endif
   </form>
   