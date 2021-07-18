<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classy Missy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">




<style>

.form-control{

  padding-left :10px;
}

.d-flex{
    padding-left :100px;
    width :500px;
}

.navbar-nav{
    padding-left :300px;
}

.nav-item {
    padding-left :1px;
}

.navbar-brand{
    font-size : 35px;
}

/* .div1 {
        background-color: #EBEBEB;
    }*/
    body{
    //margin: 0;
    background-image: url('image.jpg');
    height: 100%;
    background-size: cover;
}

  /*  body, html {
  height: 100%;
}*/

* {
  box-sizing: border-box;
}


</style>

</head>
<body >

<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" style="color:#ffc000;" href="/addp">Classy Missy</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

      &nbsp;&nbsp;&nbsp;
      <li class="nav-item">
    <a class="nav-cart" href='/cartlist' style="color:#ffc000;font-size:25px;" > <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16" style="color:#ffc000;">
  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
</svg> </a>
        </li>
        &nbsp;&nbsp;&nbsp;

      <li class="nav-item"></li>
        
        <a class="dropdown-item" style="color:#ffc000;font-size:20px;" href="/myorder">MyOrders</a>
          
     </li>



        <li class="nav-item"></li>
        
        <a class="dropdown-item" style="color:#ffc000;font-size:20px;" href="/aboutus">Contact-Us</a>
          
     </li>



        <li class="nav-item"></li>
        
           <a class="dropdown-item" style="color:#ffc000;font-size:20px;" href="/logout">Logout</a>
             
        </li>
      
          </ul>
        </li>
        <!--
        
        <form class="d-flex" method="post" action="/psearch">
               {{csrf_field() }}
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="pname">
        <button class="btn btn-outline-success" style="color:#ffc000;font-size:20px;" type="submit">Search</button>
      </form>
      -->

    </div>
  </div>
</nav>



<div class="bg-image"></div>

<div class="bg-text">
@yield('content')
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
