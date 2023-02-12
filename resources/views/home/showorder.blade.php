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
         <section class="h-100 gradient-custom">
            <div class="container py-5 h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-10 col-xl-8">
                  <div class="card" style="border-radius: 10px;">
                    <div class="card-header px-4 py-5">

                        <?php $totalprice=0; ?>
                        
                            
                       @foreach ($order as $order)
                      <h5 class="text-muted mb-0">Thanks for your Order, <span style="color: #a8729a;">{{$order->name}}</span>!</h5>
                    </div>
                    <div class="card-body p-4">
                      <div class="d-flex justify-content-between align-items-center mb-4">
                        <p class="lead fw-normal mb-0" style="color: #a8729a;">Receipt</p>
                        <p class="small text-muted mb-0">Receipt Voucher : 1KAU9-84UIL</p>
                      </div>
                      <div class="card shadow-0 border mb-4">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-md-2">
                                
                              <img src="{{Storage::url($order->image)}}"
                                class="img-fluid" alt="Phone">
                            </div>
                            <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                              <p class="text-muted mb-0">{{$order->product_title}}</p>
                            </div>
                            <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                              <p class="text-muted mb-0 small">White</p>
                            </div>
                            <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                              <p class="text-muted mb-0 small">Capacity: 64GB</p>
                            </div>
                            <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                              <p class="text-muted mb-0 small">Qty: {{$order->quantity}}</p>
                            </div>
                            <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                              <p class="text-muted mb-0 small">Product Price  <span style="color:crimson">$</span>{{$order->price}}</p>
                            </div>
                          </div>
                          <hr class="mb-4" style="background-color: #e0e0e0; opacity: 1;">
                          <div class="row d-flex align-items-center">
                            <div class="col-md-2">
                              <p class="text-muted mb-0 small">Track Order</p>
                            </div>
                            <div class="col-md-10">
                              <div class="progress" style="height: 6px; border-radius: 16px;">
                                <div class="progress-bar" role="progressbar"
                                  style="width: 65%; border-radius: 16px; background-color: #a8729a;" aria-valuenow="65"
                                  aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              <div class="d-flex justify-content-around mb-1">
                                <p class="text-muted mt-1 mb-0 small ms-xl-5">Out for delivary</p>
                                <p class="text-muted mt-1 mb-0 small ms-xl-5">Delivered</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      
          
                      <div class="d-flex justify-content-between pt-2">
                        <?php $totalprice=$order->price+$totalprice ;$shippingprice=50;?>
                        <p class="fw-bold mb-0">Order Details</p>
                        <p class="text-muted mb-0"><span class="fw-bold me-4">shipping Price</span> <span style="color: crimson">$</span>  {{$shippingprice}}</p>

                        <p class="text-muted mb-0"><span class="fw-bold me-4">Total</span> <span style="color: crimson">$</span>  {{$totalprice+$shippingprice}}</p>
                      </div>
          
                      <div class="d-flex justify-content-between pt-2">
                        <p class="text-muted mb-0">Invoice Number : 788152</p>
                        <p class="text-muted mb-0"><span class="fw-bold me-4">Discount</span> $19.00</p>
                      </div>
          
                      <div class="d-flex justify-content-between">
                        <p class="text-muted mb-0">Invoice Date : 22 Dec,2019</p>
                        <p class="text-muted mb-0"><span class="fw-bold me-4">GST 18%</span> 123</p>
                      </div>
          
                      <div class="d-flex justify-content-between mb-5">
                        <p class="text-muted mb-0">Recepits Voucher : 18KU-62IIK</p>
                        <p class="text-muted mb-0"><span class="fw-bold me-4">Delivery Charges</span> Free</p>
                      </div>
                    </div>
                    <div class="card-footer border-0 px-4 py-5"
                      style="background-color: #a8729a; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                      <h5 class="d-flex align-items-center justify-content-end text-white text-uppercase mb-0">Total Cost :<span style="color:black;font:x-large">$</span> <span class="h2 mb-0 ms-2">{{$totalprice+$shippingprice}}</span></h5>
                        @endforeach

                        <button><a href="{{route('stripe',$totalprice)}}">Pay By card</a></button>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
           
          </section>
                  
      <!-- end client section -->
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