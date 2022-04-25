<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <style>
        @media all and (min-width: 992px) {
            .navbar .nav-item .dropdown-menu{ display: none; }
            .navbar .nav-item:hover .nav-link{ color: #fff;  }
            .navbar .nav-item:hover .dropdown-menu{ display: block; }
            .navbar .nav-item .dropdown-menu{ margin-top:0; }
        }	
    </style>
    <script src="https://kit.fontawesome.com/e806390136.js" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    @yield('css')

    <title>Dev</title>
</head>
<body style="margin-top: 0%">
    {{-- header top --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="width: 100%;position:fixed;z-index:2;">
        <a class="navbar-brand" href="/home">SR6.9</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main_nav">
          <ul class="navbar-nav">
              <li class="nav-item active"> <a class="nav-link" href="/home">Home </a> </li>
              @if (auth()->check())
                @if (auth()->user()->is_admin)
                    <li class="nav-item"><a class="nav-link" href="{{ route('user') }}"> Users </a></li>
                @endif
              @endif
              <li class="nav-item dropdown">
                  <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown">  More  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/2fa"><i class="fa-solid fa-user-shield"></i> TwoFactor Authentication </a></li>
                  </ul>
              </li>
          </ul>
          <ul class="navbar-nav ml-auto">
              
            <form class="search users">
                <input placeholder="Search from Here" type="text">
                
                <button class="btn" type="submit"><i class="fa fa-search"></i></button>
            </form>
              <li class="nav-item"><a class="nav-link" href="{{ route('post.add') }}"><i class="fa-solid fa-upload"></i> Upload </a></li>
              @if (auth()->user())
                <li class="nav-item dropdown">
                    <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown" id="wellcome">
                    <img src="/images/profile_picture/{{ auth()->user()->profile_picture_path }}" alt="{{ auth()->user()->name }}" 
                    class="rounded-circle profile" width="30" height="30" style="object-fit: cover">
                    Wellcome, {{ auth()->user()->name }} 
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right">
                    <li>
                        <a class="dropdown-item" href="{{ route('profile',auth()->user()->id) }}"> 
                            <i class="fa-solid fa-id-card"></i> Profile
                        </a>
                    </li>
                    <li>  
                        <form method="POST" action="{{ route('logout') }}" id="logout_form">
                            @csrf
                            <a class="dropdown-item" href="#" onclick="logout()">
                                <i class="fa-solid fa-right-from-bracket"></i> Logout
                            </a>
                        </form>
                    </li>
                    </ul>
                </li>
              @else
                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}"> Sign In or Sign up </a></li>
              @endif
          </ul>
        </div> <!-- navbar-collapse.// -->
      </nav>
    <div class="container">
        @yield('content')
        @yield('script')
    </div>
    
   <!-- JavaScript Bundle with Popper -->
   <script>
       function logout(){
        document.getElementById("logout_form").submit();
       }

       // Get the container element
        var btnContainer = document.getElementById("main_nav");

        // Get all buttons with class="btn" inside the container
        var btns = btnContainer.getElementsByClassName("nav-item");

        // Loop through the buttons and add the active class to the current/clicked button
        for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
        });
        }
   </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 
    
</body>
</html>