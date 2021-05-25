
@extends("admintheme")

@section("content")



<div class="container">
<div class="row">

<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
<div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
<br><br><br>

<form action="/registerview" method="post">

{{ csrf_field() }}

<table class="table table-borderless">

 <tr>
     <td> Name </td>
     <td>
      <input value="{{   $register->lname}}" name="lname" type="text" class="form-control">
     </td>
 </tr>

 <td>Email </td>
     <td>      <input value="{{   $register->lemail}}" name="lemail" type="text" class="form-control">
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