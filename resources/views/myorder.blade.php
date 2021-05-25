@extends("header")
@section("content")


<style>
.container {
    margin: 0;
    background-color: #EBEBEB;
    width: 100%;
    height: 1000px;
    background-size: cover;
    }



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
<h4><center>My Orders</center></h4>
 <br>
 <div class="container">
<div class="row ">

@foreach($orders as $item) 

<div  class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
<br>
<img width="150" height="100" src="{{URL::asset('assets/product_img/'.$item->image)}}">
</div>
<div  class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
<p class="card-text"><small class="text-muted"><h6>{{$item->pid}} </h6></small></p>
<h5>{{$item->pname}}</h5> 
</div>
<br>
<div  class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
<br><br>
<h5>₹ {{$item->price}}</h5>
</div>
<div  class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3"><br><br>
Delivery Status : {{$item->status}}
&nbsp;
<a href="/cancelorder/{{$item->pid}}/{{$item->userid}}"><button class="btn btn-danger">Cancel</button></a>
</div>
<br><br><br><br><br><br>

@endforeach

</div>


</div>

</div>

@endsection