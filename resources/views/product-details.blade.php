
@extends("header")
@section("content")

<br><br><br>

@if(Session::get('success'))
            <div class="alert alert-success">
            {{Session::get('success')}}
            </div>
     @endif
    @if(Session::get('fail'))
            <div class="alert alert-danger">
            {{Session::get('fail')}}
            </div>
    @endif


<style>

.car{

margin : 100px;

}

</style>



<!--
    <div class="row g-0">


            <div class="col-md-4">
            @foreach($pview as $item)
						
                        
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="{{URL::asset('assets/product_img/'.$item->image)}}" width="250px" height="500px" class="img-responsive img-fluid" alt="">
								</div>
                <br>
								<div class="col-md-8">
                <div class="card-body">
								<a href="/addp">Go Back</a>
									<h4>
									{{$item->pname}}
									</h4>
                  <h6> {{$item->pdes}}<h6>
									<br>
                  <p class="item-price"><strike>₹595</strike> <span> {{$item->price}}</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											
										</ul>
                    </div>
										<form action="/add_to_cart" method="post">
										{{csrf_field()}}
                    <input type="hidden" name="product_id" value="{{$item->id}}">
                    <center> <button  class="btn btn-primary" type="submit">Add to Cart</button></center>  
                    </form>
									<br><br>
                   
									</div>
                  </div>			
                  </div>
						
						
						


          
          

            -->


            <div class="car" style="max-width: 740px;">
  <div class="row g-0">
    <div class="col-md-4">
    <img src="{{URL::asset('assets/product_img/'.$item->image)}}" width="250px" height="500px" class="img-responsive img-fluid" alt="">
    </div>
    <div class="col-xl-8">
    
    
      <div class="card-body">
      
      <a href="/addp">Go Back</a>
      <br><br>
									<h4>
									{{$item->pname}}
									</h4>
                  <br>
                  <h6> {{$item->pdes}}<h6>
									<br>
                  <p class="item-price"><strike>₹595</strike> <span> ₹{{$item->price}}</span></p>
                  
                
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											
										</ul>
                    </div>
										<form action="/add_to_cart" method="post">
										{{csrf_field()}}
                    <input type="number" id="validationcus" name="qty" size="5" placeholder="QTY" min="1" max="50" default value="1"><br><br>
                    <input type="hidden" name="product_id" value="{{$item->id}}">
                    <center> <button  class="btn btn-primary" type="submit">Add to Cart</button></center>  
                    </form>
      </div>
    </div>
  </div>
</div>

		
@endforeach


          
@endsection