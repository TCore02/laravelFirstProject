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
                background-color: #6FA1CD;
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

<div class="flex-center position-ref full-height">
<div class="top-right links">
                
                    <br><br>
                        
                    <a href="sign_in">REGISTER</a>
                        <a href="/">Home</a>
                        
                    
                    
                </div>
<div style="background-color:#FF0000;width:35%;height:500px;" class="rowTest"><div>
  <form method="POST" action="login">
  @extends('chunks')
  {{ csrf_field() }}
    <center>@if(Session::has('message') && Session::has('success'))
        <div class="alert {{ Session::get('success') ? 'alert-success' : 'alert-danger' }}">
            {{Session::get('message')}}
        </div>
    @endif
    </center>
    <center>
    <center><div style="height: 300px; width: 180px; background-image:url({{ asset('image/laravel.png') }});"></div></center><br><ber>

    <b>Email ID :</b> <input type="email" name="email" placeholder="Enter your Username" required><br><br>
    <b>Password :</b> <input type="password" name="password" placeholder="Enter your password" required><br><br>
    <input type="submit" name="submit" value="LOGIN"><br>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
    <div class="container" style="background-color:#f1f1f1">

    <span class="psw">Forgot <a href="forget_password">password?</a></span>
  </div></center></div></div>
    
 
  </form>
</body>
</html>