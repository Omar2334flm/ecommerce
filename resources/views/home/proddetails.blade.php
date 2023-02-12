<html>
   <head>
      <!-- Basic -->
      <base href="/public">

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
         =
        <!-- Navbar -->
        
        <!--Main layout-->
        <main class="mt-5 pt-4">
            <div class="container mt-5">
                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-md-6 mb-4">
                        <img src="{{Storage::url($products->image)}}" class="img-fluid" alt="" />
                    </div>
                    <!--Grid column-->
        
                    <!--Grid column-->
                    <div class="col-md-6 mb-4">
                        <!--Content-->
                        <div class="p-4">
                            <div class="mb-3">
                                @foreach ($products->categories as $category)
                                {{$category->name}}
                              
                                    <span class="badge bg-dark me-1">{{$category->name}}</span>
                                    @endforeach
                                <a href="">
                                    <span class="badge bg-info me-1">New</span>
                                </a>
                                <a href="">
                                    <span class="badge bg-danger me-1">Bestseller</span>
                                </a>
                            </div>
        
                            <p class="lead">
                                <span class="me-1">
                                    <del>{{$products->discount_price}}</del>
                                </span>
                                <span>${{$products->price}}</span>
                            </p>
        
                            <strong><p style="font-size: 20px;">Description</p></strong>
        
                            <p>{{$products->description}}</p>
        
                            <form class="d-flex justify-content-left">
                                <!-- Default input -->
                                
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
                            </form>
                        </div>
                        <!--Content-->
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
        
                <hr />
        
                <!--Grid row-->
                <div class="row d-flex justify-content-center">
                    <!--Grid column-->
                    <div class="col-md-6 text-center">
                        <h4 class="my-4 h4">Additional information</h4>
        
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus suscipit modi sapiente illo soluta odit voluptates, quibusdam officia. Neque quibusdam quas a quis porro? Molestias illo neque eum in laborum.</p>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
        
                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-lg-4 col-md-12 mb-4">
                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/11.jpg" class="img-fluid" alt="" />
                    </div>
                    <!--Grid column-->
        
                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/12.jpg" class="img-fluid" alt="" />
                    </div>
                    <!--Grid column-->
        
                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/13.jpg" class="img-fluid" alt="" />
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </div>
        </main>
        <!--Main layout-->
        
        <!-- footer -->
        <footer class="text-center text-white mt-4" style="background-color: #607d8b;">
            <!--Call to action-->
            <div class="pt-4 pb-2">
                <a class="btn btn-outline-white footer-cta mx-2" style="box-shadow: rgba(0, 0, 0, 0.15) 0px 5px 15px;" href="https://mdbootstrap.com/docs/jquery/getting-started/download/" target="_blank" role="button">
                    Download MDB
                    <i class="fas fa-download ms-2"></i>
                </a>
                <a class="btn btn-outline-white footer-cta mx-2" style="box-shadow: rgba(0, 0, 0, 0.15) 0px 5px 15px;" href="https://mdbootstrap.com/education/bootstrap/" target="_blank" role="button">
                    Start free tutorial
                    <i class="fas fa-graduation-cap ms-2"></i>
                </a>
            </div>
            <!--/.Call to action-->
        
            <hr class="text-dark" />
        
            <div class="container">
                <!-- Section: Social media -->
                <section class="mb-3">
                    <!-- Facebook -->
                    <a class="btn-link btn-floating btn-lg text-white" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-facebook-f"></i></a>
        
                    <!-- Twitter -->
                    <a class="btn-link btn-floating btn-lg text-white" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-twitter"></i></a>
        
                    <!-- Google -->
                    <a class="btn-link btn-floating btn-lg text-white" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-google"></i></a>
        
                    <!-- Instagram -->
                    <a class="btn-link btn-floating btn-lg text-white" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-instagram"></i></a>
        
                    <!-- YouTube -->
                    <a class="btn-link btn-floating btn-lg text-white" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-youtube"></i></a>
                    <!-- Github -->
                    <a class="btn-link btn-floating btn-lg text-white" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-github"></i></a>
                </section>
                <!-- Section: Social media -->
            </div>
            <!-- Grid container -->
        
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2); text-color: #e0e0e0;">
                © 2022 Copyright:
                <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
            </div>
            <!-- Copyright -->
        </footer>
        
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