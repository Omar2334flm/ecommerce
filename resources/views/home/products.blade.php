

<section class="product_section layout_padding">
    <div class="container">
       <div class="heading_container heading_center">
          <h2>
             Our <span>products</span>
          </h2>
       </div>
       <div class="row">

        
             @foreach ($product as $products)
                 
             
        
          <div class="col-sm-6 col-md-4 col-lg-4">
             <div class="box">
                <div class="option_container">
                   <div class="options">
                      <a href="" class="option1">
                        @foreach ($products->categories as $category)
                        {{$category->name}}
                      @endforeach
                      <a href="{{route('proddetails',$products->id)}}" style="color: black;font:bolder">product details</a>
                      </a>
                      <form action="{{route('addcart',$products->id)}}" method="POST">
                    
                     @csrf
                     <div class="row">
                        <div class="col-md-4 ">
                           <input type="number" min="1" max="1000,00" step="1" name="quantity" style="width: 100px">
                        </div>

                            <div class="col-md-4 ">
                           <input type="submit" value="add to cart">
                        </div>
                     </div>
                     
                     
                     
                     </form>
                   </div>
                </div>
                <div class="img-box">
                   <img src="{{Storage::url($products->image)}}" alt="">
                </div>
                <div class="detail-box">
                   <h5>
                      {{$products->title}}
                   </h5>

                   @if($products->discount_price!=null)
                   <h6>
                     {{$products->discount_price}} $
                  </h6>
                  <h6  style="text-decoration: line-through;color:red" >
                     {{$products->price}} $
                  </h6>
                  @else 
                  <h6 >
                     {{$products->price}} $
                  </h6>
                  @endif
                  
            
                   
                </div>
             </div>
          </div>
          @endforeach
  
    </div>
 </section>