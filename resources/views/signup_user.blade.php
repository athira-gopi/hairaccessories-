
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

<style>

body {
    margin: 0;
    color: #6a6f8c;
    background: #c8c8c8;
    position: relative;
    background-image: url('home.jpg');
    background-size:cover;
    background-repeat: no-repeat;
    font: 600 16px/18px 'Open Sans', sans-serif
}

.login-box {
    width: 100%;
    margin: auto;
    max-width: 525px;
    min-height: 670px;
    position: relative;
    background: url("home.jpg") ;
    box-shadow: 0 12px 15px 0 rgba(0, 0, 0, .24), 0 17px 50px 0 rgba(0, 0, 0, .19)
    background-size:cover;
}

.login-snip {
    width: 100%;
    height: 100%;
    position: absolute;
    padding: 90px 70px 50px 70px;
    background: rgba(0, 77, 77, .9)
}

.login-snip .login,
.login-snip .sign-up-form {
    top: 0;
    left: 0;
    right: 0;
    bottom: 50;
    position: absolute;
    transform: rotateY(180deg);
    backface-visibility: hidden;
    transition: all .4s linear
}

.login-snip .sign-in,
.login-snip .sign-up,
.login-space .group .check {
    display: none
}

.login-snip .tab,
.login-space .group .label,
.login-space .group .button {
    text-transform: uppercase
}

.login-snip .tab {
    font-size: 22px;
    margin-right: 15px;
    padding-bottom: 5px;
    margin: 0 15px 10px 0;
    display: inline-block;
    border-bottom: 2px solid transparent
}

.login-snip .sign-in:checked+.tab,
.login-snip .sign-up:checked+.tab {
    color: #fff;
    border-color: #1161ee
}

.login-space {
    min-height: 345px;
    position: relative;
    perspective: 1000px;
    transform-style: preserve-3d
}

.login-space .group {
    margin-bottom: 15px
}

.login-space .group .label,
.login-space .group .input,
.login-space .group .button {
    width: 100%;
    color: #fff;
    display: block
}

.login-space .group .input,
.login-space .group .button {
    border: none;
    padding: 15px 20px;
    border-radius: 25px;
    background: rgba(255, 255, 255, .1)
}

.login-space .group input[data-type="password"] {
    text-security: circle;
    -webkit-text-security: circle
}

.login-space .group .label {
    color: #aaa;
    font-size: 12px
}

.login-space .group .button {
    background: #1161ee
}

.login-space .group label .icon {
    width: 15px;
    height: 15px;
    border-radius: 2px;
    position: relative;
    display: inline-block;
    background: rgba(255, 255, 255, .1)
}

.login-space .group label .icon:before,
.login-space .group label .icon:after {
    content: '';
    width: 10px;
    height: 2px;
    background: #fff;
    position: absolute;
    transition: all .2s ease-in-out 0s
}

.login-space .group label .icon:before {
    left: 3px;
    width: 5px;
    bottom: 6px;
    transform: scale(0) rotate(0)
}

.login-space .group label .icon:after {
    top: 6px;
    right: 0;
    transform: scale(0) rotate(0)
}

.login-space .group .check:checked+label {
    color: #fff
}

.login-space .group .check:checked+label .icon {
    background: #1161ee
}

.login-space .group .check:checked+label .icon:before {
    transform: scale(1) rotate(45deg)
}

.login-space .group .check:checked+label .icon:after {
    transform: scale(1) rotate(-45deg)
}

.login-snip .sign-in:checked+.tab+.sign-up+.tab+.login-space .login {
    transform: rotate(0)
}

.login-snip .sign-up:checked+.tab+.login-space .sign-up-form {
    transform: rotate(0)
}

*,
:after,
:before {
    box-sizing: border-box
}

.clearfix:after,
.clearfix:before {
    content: '';
    display: table
}

.clearfix:after {
    clear: both;
    display: block
}

a {
    color: inherit;
    text-decoration: none
}

.hr {
    height: 2px;
    margin: 60px 0 50px 0;
    background: rgba(255, 255, 255, .2)
}

.foot {
    text-align: center
}

.card {
    width: 500px;
    left: 100px;
}
*/
::placeholder {
    color: #b3b3b3
}


.container {
  position: relative;
  
}



/* Bottom right text */
.text-block {
  position: absolute;
  bottom : 400px;
  right: 20px;
  color: #ffc000;
  padding-bottom: 10px;
  padding-right: 20px;
}


.text1-block {
  position: absolute;
  bottom : 600px;
  right: 20px;
  color: #ffc000;
  padding-bottom: 10px;
  padding-right: 20px;
}

</style>


<link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

</head>
<body >



<div class="row" >
    <div class="col-md-6 mx-auto p-0" >
        <div class="card"  >
        
            <div class="login-box">
            
                <div class="login-snip"> 
                <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Login</label> 
                <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
                
                    <div class="login-space">
        
                        <div class="login">
                                        
      <form action="/logs" method="post">
{{ csrf_field() }}
@if(Session::get('fail'))
            <div class="alert alert-danger">
            {{Session::get('fail')}}
            </div>
            @endif
                            <div class="group"> 
                            <label for="user" class="label">Email Id</label> 
                            <input id="user" name="lemail" value="{{old('lemail')}}" type="text" class="input" placeholder="Enter your Email_id"> 
                            <span class="text-danger">@error('lemail'){{$message}} @enderror  </span>
                            </div>


                            <div class="group"> 
                            <label for="pass" class="label">Password</label> 
                            <input id="pass" name="lpass" value="{{old('lpass')}}" type="password" class="input" data-type="password" placeholder="Enter your password">
                             </div>
                            <span class="text-danger">@error('lpass'){{$message}} @enderror  </span>
                            <div class="group"> <input id="check" type="checkbox" class="check" checked> <label for="check">
                            <span class="icon"></span> Keep me Signed in</label> 
                            </div>


                            <div class="group"> 
                            <input type="submit" class="button" href="/signup_user" value="Sign In"> </div>
                            <div class="hr"></div>
                            <div class="foot"> <a href="/signup_admin">Not a User Sign-In as Admin</a> </div>

                            </form>

                        </div>

                        <div class="sign-up-form">
             
                        
      <form action="/registerread" method="post">
        {{csrf_field()}}

                            <div class="group"> <label for="user" class="label">Name</label> 
                            <input id="user" type="text" name="lname" value="{{old('lname')}}" class="input" placeholder="Enter your Name"> 
                            <span class="text-danger">@error('lname'){{$message}} @enderror  </span>
                            </div>

                            <div class="group"> <label for="pass" class="label">Email Id</label>
                             <input id="pass" type="text" name="lemail" value="{{old('lemail')}}" class="input"  placeholder="Enter your Email_id"> 
                             <span class="text-danger">@error('lemail'){{$message}} @enderror  </span>
                             </div>

                            <div class="group"> <label for="pass" class="label">Password</label> 
                            <input id="pass" type="password" name="lpass" value="{{old('lpass')}}"  class="input"  placeholder="Enter your password"> 
                            <span class="text-danger">@error('lpass'){{$message}} @enderror  </span>
                            </div>

                            <div class="group"> <label for="pass" class="label">Repeat Password</label> 
                            <input id="pass" type="password" class="input" data-type="password" placeholder="Confirm your password"> 
                            </div>
                            <div class="group"> 
                            <input type="submit" class="button" href="/"  value="Sign Up"> 
                            </div>
                            
                            <div class="hr"></div>
                            <div class="foot"> <label for="tab-1">Already Member?</label> </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




  <div class="text-block">
    <h1><i>Live bold. Feel beautiful. Look great.</i></h1>
  </div>
</div>



</body>
</html>


