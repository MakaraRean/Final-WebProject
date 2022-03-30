@extends('template')

@section('css')
    <link rel="stylesheet" href="\style\twofactor.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
@endsection
@section('content')
<div class="container padding-bottom-3x mb-2">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
            <h2>Two-Factor Authentication</h2>
            <form class="card mt-4" method="POST" action="{{ route('two-factor.enable') }}">
                <div class="card-body">
                    <div class="form-group">
                        @csrf
                        @if (session('status') == 'two-factor-authentication-enabled' || auth()->user()->two_factor_secret)
                            @method("DELETE")
                            <div class="alert alert-success">
                                Two factor authentication has been enabled.
                            </div>
                            <strong>Scan this QR Code in your Authenticator App : </strong><br><br>
                            <div class="pb-5">
                                {!! auth()->user()->twoFactorQrCodeSvg() !!}
                            </div>
                            <strong>These are recovery code : </strong>
                            <ul>
                                @foreach (json_decode(decrypt(auth()->user()->two_factor_recovery_codes)) as $code)
                                    <li>{{ $code }}</li>
                                @endforeach
                            </ul>
                        @else
                            <div class="alert alert-danger">
                                Two factor authentication is disable.
                            </div>
                        @endif
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary" type="submit">
                        @if (auth()->user()->two_factor_secret || session('status') == 'two-factor-authentication-enabled')
                            Disable
                        @else
                            Enable
                        @endif
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('script')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection