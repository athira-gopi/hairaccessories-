@extends("admintheme")
@section("content")

<style>
.button{

    padding-left :30px;
}

</style>


<div class="container">
<br>

<div class="row">

<div class="col col-12 col-sm-4 col-md-4 col-lg-4" >

<button class="button btn btn-primary"  href="/addproducts" > Add Products </button> 


<br>
<br>
</div>




<table class="table table table-dark">
<tr>
    <th scope="row">Product Name</th>
    <th scope="row">Product Description</th>
    <th scope="row">price</th>
    <th scope="row">Product Image</th>
    <th></th>
    <th></th>
    </tr>

@foreach($adds as $add)

<tr class="table-primary">
    
    <td>{{$add->pname}}</td>
    
    <td>{{$add->pdes}}</td>
    
    <td>{{$add->price}}</td>

    <td>{{$add->image}}</td>

    <th>  <a class="btn btn-danger" href="/user/{{$add->id}}/delete" > Delete  </a>  </th>
    <th>  <a class="btn btn-primary" href="/usereditview/{{$add->id}}" > Edit  </a>  </th>

</tr>

@endforeach
</table>







@endsection

</div>
</div>