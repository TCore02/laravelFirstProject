

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
@extends('chunks')
<div class="flex-center position-ref full-height">
<div class="top-right links">
                
                    <br><br>
                        
                    <a href="sign_in">REGISTER</a>
                        <a href="log_in">LOGIN</a>
                        
                    
                    
                </div>
<div style="background-color:#FF0000;width:35%;height:550px;" class="rowTest"><div>
  <form method="post" action="cnfrmPass">
  {{ csrf_field() }}

  <input type="hidden" name="token" value='{{$token}}'>
  <input type="hidden" name="user_id" value='{{$user_id}}'>

<center><div style="height: 300px; width: 180px; background-image:url({{ asset('image/laravel.png') }});"></div><br><br>
<label for="newPassword"><b>New Password:</b></label> 
<input type="password" id="password" name="password" title="New password" /><br><br>

<label for="confirmPassword"><b>Confirm Password:</b></label> 
<input type="password" id="password2" name="password2" title="Confirm new password"  /><br><br>



<p class="form-actions">
<input type="submit" value="Change Password" title="Change password" />
</p>
</center></div></div>
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