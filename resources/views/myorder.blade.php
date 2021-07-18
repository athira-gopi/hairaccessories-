@extends("header")
@section("content")


<style>





    .button1 {
  margin: 0;
  position: absolute;
  top: 34%;
  left: 140%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
</style>


<div class="div1">
<br>
<h4 style="color:white;"><font size="9px"><center>My Orders</center></font></h4>
 <br>
 <div  style="margin:15px;position:relative;left:1175px;">

 <button id="hide" class="btn btn-warning" onclick="window.print()">Print</button>
 </div>
 <div class="shadow p-4 mb-5 rounded">
 <!-- <div class="container" style="background-color:#F4D03F;border:dark;shadow:rounded;"> -->
 <div class="container">
 
<div class="row ">

<table class="table table ">
<tr>
    <th scope="row"></th>
	<th scope="row"></th>
    <th scope="row"></th>
    <th scope="row"></th>
    <th scope="row"></th>
    <th></th>
    </tr>

	@foreach($orders as $item) 

<tr class="table" style="background-color:#F4D03F">
    
<td><img src="{{URL::asset('assets/product_img/'.$item->image)}}" width="100px" height="100px" class="img-responsive img-fluid" alt=""></td>
<td>{{$item->pid}}</td> 
    <td>{{$item->pname}}</td>
    
    <td>₹{{$item->price}}</td>

  <td>Delivery Status : {{$item->status}}</td>

    <th>  <a class="btn btn-danger" href="/cancelorder/{{$item->pid}}/{{$item->userid}}" > Cancel </a>  </th>

</tr>

@endforeach

</table>


<!-- 
@foreach($orders as $item) 

<div  class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
<br>
<img width="100" height="100" src="{{URL::asset('assets/product_img/'.$item->image)}}">
</div>
<div  class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
<p class="card-text"><small class="text-muted"><h6 style="color:black;"><font size="3px">{{$item->pid}} </font></h6></small></p>
<h5 style="color:black;">{{$item->pname}}</h5> 
</div>
<br>
<div  class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
<br><br>
<h5 style="color:black;">₹ {{$item->price}}</h5>
</div>

<div  class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
<br><br>
<h5 style="color:black;"></h5>
</div>
<div  class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3" style="color:black;"><br><br>
Delivery Status : {{$item->status}}
&nbsp;
<a href="/cancelorder/{{$item->pid}}/{{$item->userid}}"><button class="btn btn-danger">Cancel</button></a>
</div>
<br><br><br><br><br><br>

@endforeach -->

</div>
</div>

</div>

</div>

@endsection