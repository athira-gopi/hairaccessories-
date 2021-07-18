

@extends("header")
@section("content")


<style>
.container {

	height: 100%;
    }

</style>

<div class="div1">


<h6 style="color:white;"><center><font size="9px">My Cart</font></center></h>
 <br>

<div class="container">
<div class="row ">
<table class="table table table-dark" >
<tr>
    <th scope="row"></th>
	<th scope="row">name</th>
    <th scope="row">price</th>
    <!-- <th scope="row">Qty</th> -->
    <th></th>

    </tr>

	@foreach($products as $item) 

<tr class="table" style="background-color:#F4D03F">
    
<td><img src="{{URL::asset('assets/product_img/'.$item->image)}}" width="100px" height="100px" class="img-responsive img-fluid" alt=""></td>
    
    <td>{{$item->pname}}</td>
    
    <td>₹{{$item->price}}</td>
	<!-- <td>{{$item->qty}}</td> -->
    <th>  <a class="btn btn-danger" href="/removecart/{{$item->cart_id}}" > Remove </a>  </th>

</tr>

@endforeach

</table>

</div>

		<center><a href="/ordern" class="btn btn-primary">Order Now</a></center>   	
</div>	
</div>

</div>




</div>
@endsection



