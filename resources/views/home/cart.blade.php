
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>Famms - Fashion HTML Template</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         @include('home.header')
         <!-- end header section -->
         <!-- slider section -->

         <!-- end slider section -->
         <section class="h-100 h-custom" style="background-color: #d2c9ff;">
            <div class="container py-5 h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12">
                  <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                    <div class="card-body p-0">
                      <div class="row g-0">
                        <div class="col-lg-8">
                          <div class="p-5">
                            <div class="d-flex justify-content-between align-items-center mb-5">
                              <h1 class="fw-bold mb-0 text-black">Shopping Cart</h1>
                              <h6 class="mb-0 text-muted">3 items</h6>
                            </div>
                            <hr class="my-4">
                            <?php $totalprice=0; ?>
                            <?php $totaldelievery=5; ?>
                  @foreach ($cart as $cart)
                      
                
                            <div class="row mb-4 d-flex justify-content-between align-items-center">
                              <div class="col-md-2 col-lg-2 col-xl-2">
                               
                                <img
                                  src="{{Storage::url($cart->image)}}"
                                  class="img-fluid rounded-3" alt="Cotton T-shirt">
                              </div>
                              <div class="col-md-3 col-lg-3 col-xl-3">
                                <h6 class="text-muted">{{$cart->product_title}}</h6>
                                <h6 class="text-black mb-0">Cotton T-shirt</h6>
                              </div>
                              <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                
          
                                <div class="col-md-3 col-lg-2 col-xl-2 ">
                                    <h6 class="mb-0">{{$cart->quantity}}</h6>
                                    
                                  </div>
          
                                
                              </div>
                              <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                <h6 class="mb-0">${{$cart->price}}</h6>
                              </div>
                              <form onsubmit="return confirm('Are You Sure ')"  style="background-color: darkorchid" class=" btn btn-dark  text-white" action="{{route('deletecart' ,$cart->id)}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit">Delete</button>
                                </form> 
                              <?php $totalprice=$cart->price+$totalprice ?>
                             
                              
                            </div>
          
                            <hr class="my-4">
            
                           
                            
                            @endforeach
                           
          
                           
          
                         
          
                            <div class="pt-5">
                              <h6 class="mb-0"><a href="#!" class="text-body"><i
                                    class="fas fa-long-arrow-alt-left me-2"></i>Back to shop</a></h6>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4 bg-grey">
                          <div class="p-5">
                            <h3 class="fw-bold mb-5 mt-2 pt-1">Summary</h3>
                            <hr class="my-4">
          
                           
          
                            <h5 class="text-uppercase mb-3">Shipping</h5>
          
                            <div class="mb-4 pb-2">
                              <select class="select">
                                <option value="1">Standard-Delivery- €5.00</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                                <option value="4">Four</option>
                              </select>
                            </div>
          
                            <h5 class="text-uppercase mb-3">Give code</h5>
          
                            <div class="mb-5">
                              <div class="form-outline">
                                <input type="text" id="form3Examplea2" class="form-control form-control-lg" />
                                <label class="form-label" for="form3Examplea2">Enter your code</label>
                              </div>
                            </div>
          
                            <hr class="my-4">
          
                            <div class="d-flex justify-content-between mb-5">
                              <h5 class="text-uppercase">Total price</h5>
                              <h5>{{ $totalprice+$totaldelievery }}</h5>
                            </div>
          
                            <button type="button" class="btn btn-dark btn-block btn-lg"
                              data-mdb-ripple-color="dark"><a href="{{route('showorder',$product->id)}}">Order Now</a></button>
                              
          
                          </div>
                          
                        </div>
                      </div>
                    </div>
                    
                  </div>
                  
             
                </div>
                
              </div>
              
            </div>
            
          </section>
      <!-- footer start -->
      @include('home.footer')
      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>
         
            Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
         
         </p>
      </div>
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>