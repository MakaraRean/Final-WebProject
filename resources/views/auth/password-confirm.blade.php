@extends('template')

@section('css')
    <link rel="stylesheet" href="\style\twofactor.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
@endsection
 
@section('content')
    <div class="container padding-bottom-3x mb-2">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <h2>Confirm Password</h2>
                <form class="card mt-4" method="POST" action="{{ route('password.confirm') }}">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <p>Enter Password to <strong style="color: Green">enable</strong>/<strong style="color: red">disable</strong> Two-Factor Authentication</p>
                            <input class="form-control" type="password" id="password" name="password" placeholder="Password">
                        </div>
                        @error('password')
                                <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary" type="submit">Confirm</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
@endsection