
  @extends("admintheme")
@section("content")
<meta name="viewport" content="width=device-width, initial-scale=1">  
<style>  

input[type=text], input[type=password], textarea {  
  width: 100%;  
  padding: 15px;  
  margin: 5px 0 22px 0;  
  display: inline-block;  
  border: none;  
  background: #f1f1f1;  
}  
input[type=text]:focus, input[type=password]:focus {  
  background-color: orange;  
  outline: none;  
}  
 div {  
            padding: 10px 0;  
         }  
hr {  
  border: 1px solid #f1f1f1;  
  margin-bottom: 25px;  
}  
.registerbtn {  
  background-color: #4CAF50;  
  color: white;  
  padding: 16px 20px;  
  margin: 8px 0;  
  border: none;  
  cursor: pointer;  
  width: 100%;  
  opacity: 0.9;  
}  
.registerbtn:hover {  
  opacity: 1;  
}  
</style>  


<br>

<style>
.card{
  margin: auto;
  width: 50%;
  border: 3px solid green;
  padding: 10px;
}

</style>
<div class="card" style="max-width: 600px" >
  <!--<img src="home.jpg"  class="card-img-top" alt="..."> -->
  <div class="card-body">
  

  <div class="container">  
  <div class="jumbotron">
  
  <form action="/usereditprocess/{{$add->id}}" method="post" enctype="multipart/form-data">
  {{csrf_field()}}
  <div class="input-field col s6">
  <hr>  
  <div class="input-group">
  <div class="custom-file">
  <input type="file" value="{{   $add->image}}" name="image" class="custom-file-input">  
  <label class="custom-file-label">  </label>
  </div>
  </div>


<label> Product Name </label>   
<input value="{{   $add->pname}}" name="pname" type="text" class="form-control">
<label> Product Description </label>    
<textarea cols="80" value="{{   $add->pdes}}" name="pdes" rows="5" placeholder="product description " value="address" required>  
</textarea>     

    <label for="psw">Price</label>  
    <input type="text" value="{{   $add->price}}" placeholder="price" name="price" required/>  

    <button onclick="return confirm('Are you sure want to edit ?')" class="btn btn-danger" >   EDIT  </button>
</form>  
  </div>


  </div>
</div>





@endsection