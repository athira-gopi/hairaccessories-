@extends("admintheme")
@section("content")

<div class="container">
<br>

<div class="row">

<div class="col col-12 col-sm-4 col-md-4 col-lg-4" >
<br>
<br>

</div>




<form action="/registerview" method="post">

{{ csrf_field() }}
<table class="table table table-dark">
<tr><th scope="row">Name</th>
    <th scope="row">Email id</th>
    
</tr>
    
@foreach($registers as $register)

<tr class="table-primary">
   
    <td >{{$register->lname}}</td>
    
    <td>{{$register->lemail}}</td>
   
    
   
</tr>

@endforeach
</table>
<form>






@endsection

</div>
</div>