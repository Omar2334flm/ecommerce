<html lang="en">
    <head>
      <!-- Required meta tags -->
     @include('admin.css')
    </head>
    <body>
      <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
       @include('admin.sidebar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
          <!-- partial:partials/_navbar.html -->
         @include('admin.header')
          <!-- partial -->
          <!-- main-panel ends -->
          <div class="main-panel">
            <div class="content-wrapper"> 

              <div>
                <form action="{{route('searchorder')}}" method="get">
                
                
                @csrf
                <input type="text" name="search" id="" class=" text-black" placeholder="search for categories">
                <input type="submit" value="search" class="btn btn-outline-primary">
                </form>
              </div>
                <table class="table table-striped">
                   
                    <thead>
                      <tr>
                        <th scope="col">name</th>
                        <th scope="col">email</th>
                        <th scope="col">phone</th>
                        <th scope="col">address</th>
                        <th scope="col">user-id</th>
                        <th scope="col">product_title</th>
                        <th scope="col">quantity</th>
                        <th scope="col">price</th>
                        <th scope="col">image</th>
                        <th scope="col">Payment-status</th>
                        <th scope="col">delievery-status</th>
                        <th scope="col">Print PDF</th>
                        <th scope="col"></th>


                        
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($order as $order)
                      <tr>
                        <th scope="row">{{$order->name}}</th>
                        <td>{{$order->email}}</td>
                        <td>{{$order->phone}}</td>
                        <td>{{$order->address}}</td>
                        <td>{{$order->user_id}}</td>
                        <td>{{$order->product_title}}</td>
                        <td>{{$order->quantity}}</td>
                        <td>{{$order->price}}</td>
                        <td><img src="{{Storage::url($order->image)}}" alt="" class=" w-16 h-16">
                        </td>
                        <td>{{$order->payment_ststus}}</td>
                        <td>{{$order->delievery_status}}</td>
                         <td><button class="btn btn-primary"> <a href="{{route('printpdf',$order->id)}}">Print PDF</a> </button></td>
                         <td><a href="{{route('sendemail',$order->id)}}" class="btn btn-primary">Send Notificaton</a></td>
                      </tr>
                      @endforeach
                    </tbody>
                  
                  </table>
                  
                 
                    
            
                <div>
                </div>  
    @include('admin.script')
    </body>
  </html>
