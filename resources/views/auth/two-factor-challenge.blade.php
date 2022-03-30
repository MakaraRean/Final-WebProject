<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Confirm Two-Factor</title>
</head>

    <link rel="stylesheet" href="\style\twofactor.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">

<body>
    <div class="container">
        <br>
        <div class="row">
            <div class="col-lg-5 col-md-7 mx-auto my-auto">
                <div class="card">
                    <div class="card-body px-lg-5 py-lg-5 text-center">
                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" class="rounded-circle avatar-lg img-thumbnail mb-4" alt="profile-image">
                        <h2 class="text-info">2FA Security</h2>
                        <p class="mb-4">Enter 6-digits code from your authenticator app.</p>
                        <form action="{{ route('two-factor.login') }}" method="POST">
                            @csrf
                            <div class="row mb-4">
                                <div class="ps-0 ps-md-2">
                                    <input type="code" name="code" id="code" class="form-control text-lg text-center" placeholder="Security Code" aria-label="2fa">
                                    @error('code')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn bg-info btn-lg my-4">Continue</button>
                            </div>
                        </form>

                        {{-- <form action="{{ route('two-factor.login') }}" method="POST">
                            @csrf
                                or
                                <div class="ps-0 ps-md-2">
                                    <input type="code" name="recovery" id="recovery" class="form-control text-lg text-center" placeholder="Recovery Code" aria-label="2fa">
                                    @error('recovery')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn bg-info btn-lg my-4">Continue</button>
                            </div>
                        </form> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>   