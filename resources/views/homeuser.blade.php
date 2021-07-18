<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">



<title>Claay Missy</title>


    

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Keywords" content="HTML,CSS,JavaScript,SQL,PHP,jQuery,XML,DOM,Bootstrap,Python,Java,Web development,W3C,tutorials,programming,training,learning,quiz,primer,lessons,references,examples,exercises,source code,colors,demos,tips">
<meta name="Description" content="Well organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java and XML.">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
<link rel="preload" href="/lib/fonts/fontawesome.woff2?14663396" as="font" type="font/woff2" crossorigin=""> 
<link rel="preload" href="/lib/fonts/source-code-pro-v14-latin-regular.woff2" as="font" type="font/woff2" crossorigin=""> 
<link rel="preload" href="/lib/fonts/roboto-mono-v13-latin-500.woff2" as="font" type="font/woff2" crossorigin=""> 
<link rel="preload" href="/lib/fonts/source-sans-pro-v14-latin-700.woff2" as="font" type="font/woff2" crossorigin=""> 
<link rel="preload" href="/lib/fonts/source-sans-pro-v14-latin-600.woff2" as="font" type="font/woff2" crossorigin=""> 
<link rel="preload" href="/lib/fonts/freckle-face-v9-latin-regular.woff2" as="font" type="font/woff2" crossorigin=""> 
<link rel="stylesheet" href="/lib/w3schools26.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">



<!-- begin cmp -->

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>




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
</style>

<style>
.star-rating {
    direction: rtl;
    display: inline-block;
    padding: 20px;
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

<!--cart-->
<style>
.nav-cart
{
  
  padding-left : 20px;
}
</style>

<style>
.search{
 width  :  300px;
  margin-left : 300px;
}
.nav-link{
  padding-top : 25px;
}
 

</style>


 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">  
</script>  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js">  
</script> 




</head>
<body>



<nav class="navbar navbar-expand-xl navbar-light bg-dark">
  <div class="container-fluid my-4">
    <a class="navbar-brand" style="color:#ffc000;" ><font size="7px">Classy Missy<font></a>
   
        

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
     
      
      <form class="d-flex">

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      


      <li>
      
      <form class="form-inline my-2 my-sm-0">
      <input class="search" style="height: 55px;px;font-size:14pt;"  type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-light my-2 my-sm-0" type="submit" style="color:#ffc000;">Search</button>
    </form>
   
    </li>
   
        <li class="nav-item">
        <a class="nav-cart" href=''><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16" style="color:#ffc000;">
  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
</svg> <!-- --> </a></li>
        </li>

        <h4>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" style="color:#ffc000;" aria-expanded="false">
          {{ $LoggedUserinfo['lname'] }}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/logout">Logout</a></li>
          </ul>
        </li>
        </h4>
      
    </div>
  </div>
</nav>



<br>


<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="discount1.png" height='500px' width='250px' class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5></h5>
        <p></p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="discount2.png" height='500px' width='250px' class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>   </h5>
        <p>  </p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="discount3.png" height='500px' width='250px' class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>   </h5>
        <p>  </p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>



<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h2>Trending <b>Products</b></h2>
			<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
			<!-- Carousel indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				
			</ol>   
			<!-- Wrapper for carousel items -->
			<div class="carousel-inner">
				<div class="item carousel-item active">
					<div class="row">
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="bowpieces.jpg" class="img-responsive img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Deebaco</h4>
                  <h6>Rayon Abstract Geometrical Quirky Printed Embroidered  Fabric Head band<h6>
									<br>
                  <p class="item-price"><strike> ₹400.00</strike> <span> ₹369.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											
										</ul>
									</div>
									<a href="/cart" class="btn btn-primary">Buy Now</a>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="3buns.jpg" class="img-responsive img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Generic</h4>
                 <h6> Satin Silk Elastic Hair Scarf Ponytail Holder Scrunchy Ties Vintage</h6>
								<br>
                	<p class="item-price"><strike> ₹300</strike> <span> ₹133</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											
										</ul>
									</div>
									<a href="/cart" class="btn btn-primary">Buy Now</a>
								</div>						
							</div>
						</div>		
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="crab.jpg" class="img-responsive img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Sanas</h4>
                  <h6> Hair Clips Large Metal Clutchers Golden Silver Bronze Butterfly </h6>
									<br>
                  <p class="item-price"><strike>₹595</strike> <span>₹400</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											
										</ul>
									</div>
									<a href="/cart" class="btn btn-primary">Buy Now</a>
								</div>						
							</div>
						</div>								
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="bridal_hair.jpg" class="img-responsive img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Hair Flare</h4>
                  <h6>Hair Pin Accessories For Women Hair Pins For Wedding </h6>
									<br>
                  <p class="item-price"><strike>₹299</strike> <span>₹199</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
											
										</ul>
                    <form action="">
                    <input type="text" name="product_id" value="">
                    <a href="/cart" class="btn btn-primary">Add to Cart</a>
                    <form>
									</div>
									<a href="/cart" class="btn btn-primary">Buy Now</a>
								</div>						
							</div>
						</div>
					</div>
				</div>
				<div class="item carousel-item">
					<div class="row">
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="pinclips.jpg" class="img-responsive img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Vaghbhatt</h4>
                  <h6>Minimalist Hair Clip Geometric Round Circle Metal Hairpin Minimalist Hollow Hair </h6>
                  <br>
                	<p class="item-price"><strike> ₹899</strike> <span> ₹499</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											
										</ul>
									</div>
									<a href="/cart" class="btn btn-primary">Buy Now</a>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="straightner.jpg" class="img-responsive img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Straightening Comb</h4>
                  <h6> Comb with Ceramic Heating Hair Brush, Portable Hair Comb for Thick & Frizzy Hair </h6>
                  <br>
                	<p class="item-price"><strike>₹1099</strike> <span>₹869</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											
										</ul>
									</div>
									<a href="/cart" class="btn btn-primary">Buy Now</a>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="https://image.ibb.co/g0CAPp/ipad.jpg" class="img-responsive img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Bose Speaker</h4>
									<p class="item-price"><strike>$109.00</strike> <span>$99.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
											
										</ul>
									</div>
									<a href="/cart" class="btn btn-primary">Buy Now</a>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="https://image.ibb.co/g0CAPp/ipad.jpg" class="img-responsive img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Samsung Galaxy S8</h4>
									<p class="item-price"><strike>$599.00</strike> <span>$569.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											
										</ul>
									</div>
									<a href="/cart" class="btn btn-primary">Buy Now</a>
								</div>						
							</div>
						</div>						
					</div>
				</div>
				
			
			<!-- Carousel controls -->
			<a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
				<i class="fa fa-angle-left"></i>
			</a>
			<a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
				<i class="fa fa-angle-right"></i>
			</a>
		</div>
		</div>
	</div>
</div>












<br>


<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="crab.jpg" height='430px' width='250px' class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Sanas</h5>
        <p class="card-text">
        <a href="/crab" >Sanas Hollow Hair Clips 6 Pcs Large Metal Clutchers Golden Silver Bronze Butterfly Girls and Women Minimalist Dainty Round Geometric Clamps Hair Accessory Hair Clutchers Metal Hairties - 6 Pcs </a>
        <div class="a-row a-size-base a-color-base"><span class="a-offscreen">₹400</span><span aria-hidden="true"><span class="a-price-symbol">  </span><span class="a-price-whole">  </span></span></span> <span class="a-size-base a-color-secondary"> / </span> <span class="a-price a-text-price" data-a-size="b" data-a-strike="true" data-a-color="secondary"><span class="a-offscreen">₹595</span><span aria-hidden="true">  </span></span> </a> <span class="a-letter-space"></span><span><p>Save ₹195 (33%)</p></span></div>
        
        </p>
     
        <div class="star-rating">
      <input id="star-5" type="radio" name="rating" value="star-5" />
      <label for="star-5" title="5 stars">
        <i class="active fa fa-star" aria-hidden="true"></i>
      </label>
      <input id="star-4" type="radio" name="rating" value="star-4" />
      <label for="star-4" title="4 stars">
        <i class="active fa fa-star" aria-hidden="true"></i>
      </label>
      <input id="star-3" type="radio" name="rating" value="star-3" />
      <label for="star-3" title="3 stars">
        <i class="active fa fa-star" aria-hidden="true"></i>
      </label>
      <input id="star-2" type="radio" name="rating" value="star-2" />
      <label for="star-2" title="2 stars">
        <i class="active fa fa-star" aria-hidden="true"></i>
      </label>
      <input id="star-1" type="radio" name="rating" value="star-1" />
      <label for="star-1" title="1 star">
        <i class="active fa fa-star" aria-hidden="true"></i>
      </label>
    </div>
      </div>
      <div class="card-footer">
        <small class="text-muted"></small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="bowpieces.jpg" width='100px'class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">DEEBACO</h5>
        <p class="card-text">
        <a href="/deepaco" > Rayon Abstract Geometrical Quirky Printed Embroidered Embellished Hair Band Fabric Head band </a></p>
        <div class="a-row a-size-base a-color-base"><span class="a-offscreen">₹599</span><span aria-hidden="true"><span class="a-price-symbol">  </span><span class="a-price-whole">  </span></span></span> <span class="a-size-base a-color-secondary"> / </span> <span class="a-price a-text-price" data-a-size="b" data-a-strike="true" data-a-color="secondary"><span class="a-offscreen">₹1,500</span><span aria-hidden="true">  </span></span> </a> <span class="a-letter-space"></span><span><p>Save ₹901 (60%)</p></span></div>
        </p>
        <div class="star-rating">
      <input id="star-5" type="radio" name="rating" value="star-5" />
      <label for="star-5" title="5 stars">
        <i class="active fa fa-star" aria-hidden="true"></i>
      </label>
      <input id="star-4" type="radio" name="rating" value="star-4" />
      <label for="star-4" title="4 stars">
        <i class="active fa fa-star" aria-hidden="true"></i>
      </label>
      <input id="star-3" type="radio" name="rating" value="star-3" />
      <label for="star-3" title="3 stars">
        <i class="active fa fa-star" aria-hidden="true"></i>
      </label>
      <input id="star-2" type="radio" name="rating" value="star-2" />
      <label for="star-2" title="2 stars">
        <i class="active fa fa-star" aria-hidden="true"></i>
      </label>
      <input id="star-1" type="radio" name="rating" value="star-1" />
      <label for="star-1" title="1 star">
        <i class="active fa fa-star" aria-hidden="true"></i>
      </label>
    </div>
        
      </div>
      <div class="card-footer">
        <small class="text-muted"></small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="3buns.jpg" height='430px' class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Generic</h5>
        <p class="card-text">
        <a href="/generic">Satin Silk Elastic Hair Bands/Scarf Ponytail Holder Scrunchy Ties Vintage</a></p>
        <div class="a-row a-size-base a-color-base"><span class="a-price" data-a-size="l" data-a-color="price"><span class="a-offscreen">₹133</span><span aria-hidden="true"><span class="a-price-symbol"> </span><span class="a-price-whole"> </span></span></span> <span class="a-size-base a-color-secondary">(₹33.25/count)</span> <span class="a-price a-text-price" data-a-size="b" data-a-strike="true" data-a-color="secondary"><span class="a-offscreen">₹300</span><span aria-hidden="true">  </span></span> </a> <span class="a-letter-space"></span><span><p>Save ₹167 (56%)</p></span></div>
        </p>
        
        <div class="star-rating">
      <input id="star-5" type="radio" name="rating" value="star-5" />
      <label for="star-5" title="5 stars">
        <i class="active fa fa-star" aria-hidden="true"></i>
      </label>
      <input id="star-4" type="radio" name="rating" value="star-4" />
      <label for="star-4" title="4 stars">
        <i class="active fa fa-star" aria-hidden="true"></i>
      </label>
      <input id="star-3" type="radio" name="rating" value="star-3" />
      <label for="star-3" title="3 stars">
        <i class="active fa fa-star" aria-hidden="true"></i>
      </label>
      <input id="star-2" type="radio" name="rating" value="star-2" />
      <label for="star-2" title="2 stars">
        <i class="active fa fa-star" aria-hidden="true"></i>
      </label>
      <input id="star-1" type="radio" name="rating" value="star-1" />
      <label for="star-1" title="1 star">
        <i class="active fa fa-star" aria-hidden="true"></i>
      </label>
    </div>
      </div>
      <div class="card-footer">
        <small class="text-muted"></small>
      </div>
    </div>
  </div>
</div>




<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="hair_bridal.jpg" height='430px' width='250px' class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Hair Flare</h5>
        <p class="card-text"> 
        <a href="/flare" >Hair Pin Accessories For Women Hair Pins For Wedding</a>
        <div class="a-row a-size-base a-color-base"><span class="a-price" data-a-size="l" data-a-color="price"><span class="a-offscreen">₹199</span><span aria-hidden="true"><span class="a-price-symbol"> </span><span class="a-price-whole"> </span></span></span> <span class="a-size-base a-color-secondary">  / </span> <span class="a-price a-text-price" data-a-size="b" data-a-strike="true" data-a-color="secondary"><span class="a-offscreen">₹299</span><span aria-hidden="true">   </span></span> </a> <span class="a-letter-space"></span><span><p>Save ₹100 (33%)</p></span></div>
        </p>
        
        <div class="star-rating">
      <input id="star-5" type="radio" name="rating" value="star-5" />
      <label for="star-5" title="5 stars">
        <i class="active fa fa-star" aria-hidden="true"></i>
      </label>
      <input id="star-4" type="radio" name="rating" value="star-4" />
      <label for="star-4" title="4 stars">
        <i class="active fa fa-star" aria-hidden="true"></i>
      </label>
      <input id="star-3" type="radio" name="rating" value="star-3" />
      <label for="star-3" title="3 stars">
        <i class="active fa fa-star" aria-hidden="true"></i>
      </label>
      <input id="star-2" type="radio" name="rating" value="star-2" />
      <label for="star-2" title="2 stars">
        <i class="active fa fa-star" aria-hidden="true"></i>
      </label>
      <input id="star-1" type="radio" name="rating" value="star-1" />
      <label for="star-1" title="1 star">
        <i class="active fa fa-star" aria-hidden="true"></i>
      </label>
    </div>
      </div>
      <div class="card-footer">
        <small class="text-muted"></small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="pinclips.jpg" width='100px'class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">VAGHBHATT</h5>
        <p class="card-text"> 
        <a href="/vaghbhatt" >Minimalist Hair Clip Geometric Round Circle Metal Hairpin Minimalist Hollow Hair Stick Alloy Hair Slide Pins Hair Barrettes </a>
        <div class="a-row a-size-base a-color-base"><span class="a-price" data-a-size="l" data-a-color="price"><span class="a-offscreen">₹499</span><span aria-hidden="true"><span class="a-price-symbol">    </span><span class="a-price-whole">    </span></span></span> <span class="a-size-base a-color-secondary"> /  </span> <span class="a-price a-text-price" data-a-size="b" data-a-strike="true" data-a-color="secondary"><span class="a-offscreen">₹899</span><span aria-hidden="true">    </span></span> </a> <span class="a-letter-space"></span><span><p>Save ₹400 (44%)</p></span></div>
        </p>
        
        <div class="star-rating">
      <input id="star-5" type="radio" name="rating" value="star-5" />
      <label for="star-5" title="5 stars">
        <i class="active fa fa-star" aria-hidden="true"></i>
      </label>
      <input id="star-4" type="radio" name="rating" value="star-4" />
      <label for="star-4" title="4 stars">
        <i class="active fa fa-star" aria-hidden="true"></i>
      </label>
      <input id="star-3" type="radio" name="rating" value="star-3" />
      <label for="star-3" title="3 stars">
        <i class="active fa fa-star" aria-hidden="true"></i>
      </label>
      <input id="star-2" type="radio" name="rating" value="star-2" />
      <label for="star-2" title="2 stars">
        <i class="active fa fa-star" aria-hidden="true"></i>
      </label>
      <input id="star-1" type="radio" name="rating" value="star-1" />
      <label for="star-1" title="1 star">
        <i class="active fa fa-star" aria-hidden="true"></i>
      </label>
    </div>
      </div>
      <div class="card-footer">
        <small class="text-muted"></small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="straightner.jpg" height='430px' class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">TrendzsMart Electric Ionic Straightening Comb</h5>
        <p class="card-text">
        <a href="/straightner" >TrendzsMart Electric Ionic Straightening Comb with Ceramic Heating Hair Brush, Portable Hair Comb for Thick & Frizzy Hair For Women's with LCD Screen Display Temperature(BLACK)</a>
        <div class="a-row a-size-base a-color-base"><span class="a-offscreen">₹585</span><span aria-hidden="true"><span class="a-price-symbol">  </span><span class="a-price-whole">  </span></span></span> <span class="a-price a-text-price" data-a-size="b" data-a-strike="true" data-a-color="secondary"><span class="a-offscreen">₹1,299</span><span aria-hidden="true">  </span></span> </a> <span class="a-letter-space"></span><span><p>Save ₹714 (55%)</p></span></div>
        </p>
        
        <div class="star-rating">
      <input id="star-5" type="radio" name="rating" value="star-5" />
      <label for="star-5" title="5 stars">
        <i class="active fa fa-star" aria-hidden="true"></i>
      </label>
      <input id="star-4" type="radio" name="rating" value="star-4" />
      <label for="star-4" title="4 stars">
        <i class="active fa fa-star" aria-hidden="true"></i>
      </label>
      <input id="star-3" type="radio" name="rating" value="star-3" />
      <label for="star-3" title="3 stars">
        <i class="active fa fa-star" aria-hidden="true"></i>
      </label>
      <input id="star-2" type="radio" name="rating" value="star-2" />
      <label for="star-2" title="2 stars">
        <i class="active fa fa-star" aria-hidden="true"></i>
      </label>
      <input id="star-1" type="radio" name="rating" value="star-1" />
      <label for="star-1" title="1 star">
        <i class="active fa fa-star" aria-hidden="true"></i>
      </label>
    </div>
      </div>
      <div class="card-footer">
        <small class="text-muted"></small>
      </div>
    </div>
  </div>
</div>



-->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>





