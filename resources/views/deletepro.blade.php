@extends("admintheme")

@section("content")



<div class="container">
<div class="row">

<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
<div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
<br><br><br>

<form action="/userdeleteprocess/{{$add->id}}" method="post">

{{ csrf_field() }}

<table class="table table-borderless">

 <tr>
     <td> Product Name </td>
     <td>
      <input value="{{   $add->pname}}" name="pname" type="text" class="form-control">
     </td>
 </tr>

 <td>Product Description </td>
     <td>      <input value="{{   $add->pdes}}" name="pdes" type="text" class="form-control">
</td>

<td>Price </td>
     <td>      <input value="{{   $add->price}}" name="price" type="text" class="form-control">
</td>

<td>image </td>
     <td>      <input value="{{   $add->image}}" name="image" type="text" class="form-control">
</td>


 </tr>

 <tr>
     
<tr>
    <td></td>
</tr>
 <tr>
 
     <td></td>
     <td> <button onclick="return confirm('Are you sure want to delete ?')" class="btn btn-danger" >   DELETE  </button></td>
 </tr>
</table>


</form>

</div>
<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
</div>

</div>





@endsection