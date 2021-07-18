
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

.div1 {
        background-color: #EBEBEB;
    }


    body, html {
  height: 100%;
}

* {
  box-sizing: border-box;
}

.bg-image {
  /* The image used */
  background-image: url("home.jpg");

  /* Add the blur effect */
  filter: blur(8px);
  -webkit-filter: blur(8px);

  /* Full height */
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.bg-text {
  
  background-color: rgba(0,0,0, 0.1); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  text-align: center;
}

</style>

</head>
<body >

<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" style="color:#ffc000;" href="#">Classy Missy</a>
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



<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="discount3.png" height="400px" width="250px" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="0001.jpg" height="400px" width="250px" class="d-block w-100" alt="...">
    </div>
   
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>






@if(Session::get('success'))
            <div class="alert alert-success">
            {{Session::get('success')}}
            </div>
     @endif
    @if(Session::get('fail'))
            <div class="alert alert-danger">
            {{Session::get('fail')}}
            </div>
    @endif


<style type="text/css">
body {
	font-family: "Open Sans", sans-serif;
}
h2 {
	color: #000;
	font-size: 26px;
	font-weight: 300;
	text-align: center;
	text-transform: uppercase;
	position: relative;
	margin: 30px 0 80px;
}
h2 b {
	color: #ffc000;
}
h2::after {
	content: "";
	width: 100px;
	position: absolute;
	margin: 0 auto;
	height: 4px;
	background: rgba(0, 0, 0, 0.2);
	left: 0;
	right: 0;
	bottom: -20px;
}
.carousel {
	margin: 50px auto;
	padding: 0 70px;
}
.carousel .item {
	min-height: 330px;
    text-align: center;
	overflow: hidden;
}
.carousel .item .img-box {
	height: 160px;
	width: 100%;
	position: relative;
}
.carousel .item img {	
	max-width: 100%;
	max-height: 100%;
	display: inline-block;
	position: absolute;
	bottom: 0;
	margin: 0 auto;
	left: 0;
	right: 0;
}
.carousel .item h4 {
	font-size: 18px;
	margin: 10px 0;
}
.carousel .item .btn {
	color: #333;
    border-radius: 0;
    font-size: 11px;
    text-transform: uppercase;
    font-weight: bold;
    background: none;
    border: 1px solid #ccc;
    padding: 5px 10px;
    margin-top: 5px;
    line-height: 16px;
}
.carousel .item .btn:hover, .carousel .item .btn:focus {
	color: #fff;
	background: #000;
	border-color: #000;
	box-shadow: none;
}
.carousel .item .btn i {
	font-size: 14px;
    font-weight: bold;
    margin-left: 5px;
}
.carousel .thumb-wrapper {
	text-align: center;
}
.carousel .thumb-content {
	padding: 15px;
}
.carousel .carousel-control {
	height: 100px;
    width: 40px;
    background: none;
    margin: auto 0;
    background: rgba(0, 0, 0, 0.2);
}
.carousel .carousel-control i {
    font-size: 30px;
    position: absolute;
    top: 50%;
    display: inline-block;
    margin: -16px 0 0 0;
    z-index: 5;
    left: 0;
    right: 0;
    color: rgba(0, 0, 0, 0.8);
    text-shadow: none;
    font-weight: bold;
}
.carousel .item-price {
	font-size: 13px;
	padding: 2px 0;
}
.carousel .item-price strike {
	color: #999;
	margin-right: 5px;
}
.carousel .item-price span {
	color: #86bd57;
	font-size: 110%;
}
.carousel .carousel-control.left i {
	margin-left: -3px;
}
.carousel .carousel-control.left i {
	margin-right: -3px;
}
.carousel .carousel-indicators {
	bottom: -50px;
}
.carousel-indicators li, .carousel-indicators li.active {
	width: 10px;
	height: 10px;
	margin: 4px;
	border-radius: 50%;
	border-color: transparent;
}
.carousel-indicators li {	
	background: rgba(0, 0, 0, 0.2);
}
.carousel-indicators li.active {	
	background: rgba(0, 0, 0, 0.6);
}
.star-rating li {
	padding: 0;
}
.star-rating i {
	font-size: 14px;
	color: #ffc000;
}

.h4{

}


</style>

               			
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h2>Trending <b>Products</b></h2>
			<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
			
		<!--
			<div class="carousel-inner">
				<div class="item carousel-item active">
			-->		


			
					<div class="row"> 
					
					@foreach($data as $user)

					<div class="col-md-4">
						<div class="product-item">
						<a href="/productdetail/{{$user->id}}" ><img src="{{('assets/product_img/'.$user->image)}}" width="250px" height="500px" class="img-responsive img-fluid" alt="">	</a>
						<div class="down-content">	
						<!-- <a href="/productdetail/{{$user->id}}"><h4>{{$user->pname}}</h4></a>   -->
						<h4>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$user->pname}}</h4>
						
						
                  <h4>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strike><small>₹595</small></strike> <span> ₹{{$user->price}}</span></h4>
				  <br><br><br><br><br><br>
				  </div>						
							</div>
						
							</div>


                @endforeach
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>

				
