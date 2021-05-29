

@extends("header")
@section("content")


<style>
.container {

	height: 1000px;
        background-color: #EBEBEB;
    }

</style>

<div class="div1">


<h6 ><center><font size="15px">My Cart</font></center></h>
 <br>
<div class="container">
<div class="row ">

@foreach($products as $item) 

<div  class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
<br>
<img width="200" height="200" src="{{ URL ::asset('assets/product_img/'.$item->image) }}">
</div>
<div  class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
<br><br>
<h5>{{$item->pname}}</h5> 
</div>
<br>
<div  class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
<br><br>
<h5>₹{{$item->price}}</h5>
</div>
<div  class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
<br><br>
<a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove</a>
</div>
<br><br><br><br><br><br><br><br><br>
@endforeach


</div>

		<center><a href="/ordern" class="btn btn-primary">Order Now</a></center>   	
</div>	
</div>

</div>




</div>
@endsection



