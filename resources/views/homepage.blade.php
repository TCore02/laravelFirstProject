<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #7BF364;
                color: #080808;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }




            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;

            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #080808;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            
.toolbar {
    background-color: #6FA1CD!important;
    color: #6FA1CD;
}

.rowTest{
 background-color:pink!important;
}
span.psw {
    float: right;
    padding-top: 16px;
}

.container {
    padding: 16px;
}




            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
<body>
@extends('chunks')
<div class="flex-center position-ref full-height">
<div class="top-right links">
                
                    <br><br>
                        
                    
                      @if(Auth::check())
                        Welcome {{Auth::user()->name}}  
                        <a href="{{route('project.logout')}}">Logout</a>
                    @else 
                        <a href="log_in">Login</a>
                        <a href="sign_in">Register</a>
                    @endif
                        
                    
                    
                </div>

  <form>
  <div class="content">
<div class="title m-b-md">
<b><u>Team Core</u></b>
</div>
    
    <center><div style="height: 300px; width: 180px; background-image:url({{ asset('image/laravel.png') }});"></div></center></div></div>
 
  </form>
</body>
</html>