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
    <title>Dev</title>
</head>
<body>
    {{-- header top --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Brand</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main_nav">
          <ul class="navbar-nav">
              <li class="nav-item active"> <a class="nav-link" href="#">Home </a> </li>
              <li class="nav-item"><a class="nav-link" href="#"> About </a></li>
              <li class="nav-item"><a class="nav-link" href="#"> Services </a></li>
              <li class="nav-item dropdown">
                  <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown">  Hover me  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#"> Submenu item 1</a></li>
                    <li><a class="dropdown-item" href="#"> Submenu item 2 </a></li>
                    <li><a class="dropdown-item" href="#"> Submenu item 3 </a></li>
                  </ul>
              </li>
          </ul>
          <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a class="nav-link" href="#"> Menu item </a></li>
              <li class="nav-item"><a class="nav-link" href="#"> Menu item </a></li>
              <li class="nav-item dropdown">
                  <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown">
                    <i class="fa-solid fa-user"></i>
                     Wellcome, {{ auth()->user()->name }} 
                    </a>
                  <ul class="dropdown-menu dropdown-menu-right">
                    <li><a class="dropdown-item" href="#"> Submenu item 1</a></li>
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
          </ul>
        </div> <!-- navbar-collapse.// -->
      </nav>
    <div class="container">
        
        
        
        @yield('content')
    </div>
    
   <!-- JavaScript Bundle with Popper -->
   <script>
       function logout(){
        document.getElementById("logout_form").submit();
       }
   </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 
    
</body>
</html>