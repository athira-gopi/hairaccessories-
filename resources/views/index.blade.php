<div class="row">
                    
						
                        
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="{{('assets/product_img/'.$user->image)}}" width="100px" height="100px" class="img-responsive img-fluid" alt="">
								</div>
								<div class="col">
								<a href="/home">Go Back</a>
									<h4>
									<a href="/prod/{id}">{{$user->pname}}</a>
									</h4>
                  <h6> {{$user->pdes}}<h6>
									<br>
                  <p class="item-price"><strike></strike> <span> {{$user->price}}</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											
										</ul>
										<form action="/add_to_cart" method="post">
										{{csrf_field()}}
                    <input type="hidden" name="product_id" value="{{$user->id}}">
                    <button  class="btn btn-primary">Add to Cart</button>
                    </form>
										

									</div>
									<a href="/cart" class="btn btn-primary">Buy Now</a>
								</div>						
							</div>
						</div>
						
                        
