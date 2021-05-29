


<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>
.star-rating {
    direction: rtl;
    display: inline-block;
    padding: 20px
}

.star-rating input[type=radio] {
    display: none
}

.star-rating label {
    color: #bbb;
    font-size: 18px;
    padding: 0;
    cursor: pointer;
    -webkit-transition: all .3s ease-in-out;
    transition: all .3s ease-in-out
}

.star-rating label:hover,
.star-rating label:hover ~ label,
.star-rating input[type=radio]:checked ~ label {
    color: #f2b600
}


</style>



<style>

.d-flex{
    padding-left :250px;
    width :700px;
}

.navbar-nav{
    padding-left :300px;
}

.nav-item {
    padding-left :30px;
}

.navbar-brand{
    font-size : 35px;
}

.div1 {
        background-color: #EBEBEB;
    }


</style>



</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" style="color:#ffc000;" href="#">Classy Missy</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">


   <li class="nav-item">
          <a class="nav-link active" style="color:#ffc000;font-size:20px;" href="/addview">View Products</a>
        </li>
        
       
        <li class="nav-item">
                <a class="nav-link" style="color:#ffc000;font-size:20px;"  href="/vieworders">View Orders</a>
            </li>


        <li class="nav-item">
          <a class="nav-link active" style="color:#ffc000;font-size:20px;" href="/registerview">View User</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" style="color:#ffc000;font-size:20px;" href="/signup_admin">Logout</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>
@yield('content')