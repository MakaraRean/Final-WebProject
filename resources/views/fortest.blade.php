<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($users as $user)
        <ul>
            @foreach (json_decode(decrypt($user->two_factor_recovery_codes)) as $code)
                <li>{{ $code }}</li>
            @endforeach
        </ul>
    @endforeach
    
</body>
</html>