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
            }https://github.com/tier5/R-D-

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
                        
                    <a href="log_in">Login</a>
                        <a href="/">Home</a>
                        
                    
                    
                </div>
<div style="background-color:#FF0000;width:35%;height:630px;" class="rowTest"><div>
  
@extends('chunks')
  <form method="POST" action="/newuser">
  {{ csrf_field() }}
  
    <center>
    <div style="height: 300px; width: 180px; background-image:url({{ asset('image/laravel.png') }});"></div><br><br>
    <b>Name :</b> <input type="text" name="name" placeholder="Enter your full name" ><br><br>
    <b>Username :</b> <input type="text" name="user_name" placeholder="Enter your Username" ><br><br>
    <b>Email id :</b> <input type="text" name="email" placeholder="Enter your valid Email_id" ><br><br>
    <b>Password :</b> <input type="password" name="password" placeholder="Enter your password" ><br><br>
    <b>Confirm Password :</b> <input type="password" name="password2" placeholder="Just confirm your password" ><br><br>
   
    
    <input type="submit" name="submit" value="Register"><br></center></div></div>
     </form>
    @if ($errors->any())
        <div class="alert alert-danger">
        <ul>
            <li>Errors</li>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
        </ul>
        </div>
    @endif
 
 

</body>
</html>