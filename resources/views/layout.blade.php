<!DOCTYPE html>
<html>
<head>
    <title>Lim's Monitoring System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <style type="text/css">
        @import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);
  
        body{
            margin: 0;
            font-size: .9rem;
            font-weight: 400;
            line-height: 1.6;
            color: #212529;
            text-align: left;
            background-color: #A7727D;
        }
        .navbar-laravel
        {
            box-shadow: 0 2px 4px rgba(0,0,0,.04);
        }
        .navbar-brand , .nav-link, .my-form, .login-form
        {
            font-family: Raleway, sans-serif;
            
        }
        .my-form
        {
            padding-top: .5rem;
            padding-bottom: 1.5rem;
        }
        .my-form .row
        {
            margin-left: 0;
            margin-right: 0;
        }
        .login-form
        {
            padding-top: 4.5rem;
            padding-bottom: 1.5rem;
        }
        .login-form .row {
            margin-left: 0;
            margin-right: 0;
        }

        .card {
            background: #eddbc7;
            position: absolute;
            right: -3rem;
            text-align: center;
            top: 2rem;
        }

        .form-control {
            width: 300px;
            padding: 20px;
            border-radius: 5px;
            border: none;
        }
        .card-header {
            border: none;
            background: #eddbc7;
            text-align: center;
            font-family: Arial;
            font-weight: 700;
            color: #A7727D;
            font-size: 20px;
            padding-top: 20px;            
        }

        .store-label {
            position: absolute;
            left: 10%;
            top: 27%;
        }

        h1 {
            font-family: Arial;
            font-weight: 750;
            font-size: 3.5rem;
            inline-size: 370px;
            overflow-wrap: break-word;
            color: #eddbc7;
        }
        h5 {
            font-family: Arial;
            font-weight: 750;
            color: #eddbc7;
        }
        .rmb {
            font-size: 13px;
        }

        .btn {
            background: #A7727D;
            border: none;
            width: 120px;
            border-radius: 15px;
        }

        .btn:hover {
            background: #f8ead8;
            color: #A7727D;
        }

        .nav-btn{
            color: #f9f5e7;
        }

        .nav-btn:link {
            border-radius: 7px;
            text-decoration: none;
        }

        .nav-btn:visited {
            background: #f9f5e7;
            border-radius: 7px;
            text-decoration: underline;
        }

        .nav-btn:hover {
            background: #f9f5e7;
            border-radius: 7px;
            text-decoration: none;
            color: #A7727D;
        }

        .nav-btn:active {
            background: #f9f5e7;
            border-radius: 7px;
            text-decoration: none;
            color: #A7727D;
        }
        

    </style>

    
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="#">LOGO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
   
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                @guest
                <div class="nav-btn">
                    <li class="nav-item">
                        <a class="nav-link nav-btn" href="{{ route('registration') }}">Register</a>
                    </li>
                </div> 
                <div class="nav-btn">
                    <li class="nav-item">
                        <a class="nav-link nav-btn" href="{{ route('login') }}">Login</a>
                    </li>
                </div>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                    </li>
                @endguest
            </ul>
  
        </div>
    </div>
</nav>
  
@yield('content')
     
</body>
</html>