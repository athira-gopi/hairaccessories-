



@extends("admintheme")
@section("content")





<div class="container">
<br>

<div class="row">

<div class="col col-12 col-sm-4 col-md-4 col-lg-4" >


<br>
<br>
</div>




<table class="table table table-dark">
<!--
<table class="table  table-success table-striped">
-->
<tr><th>Product Id</th>
    <th >User Id</th>
    <th >Address</th>
    <th >Status</th>
    <th >Payment Method</th>
    <!-- <th ></th> -->
    <th></th> 
    </tr>

@foreach($prod as $prods)

<tr class="table-primary">

    <td>{{$prods->pid}}</td>
    <td>{{$prods->userid}}</td>
    <td>{{$prods->address}}</td>
    <td>{{$prods->status}}</td>
    <td>{{$prods->paymentmethod}}</td>
    <td><a class="btn btn-warning"  href="/order/{{$prods->id}}/edit" >UPDATE</a></td>
    
</tr>

@endforeach
</table>







@endsection

</div>
</div>