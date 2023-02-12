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
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         @include('home.header')
         <!-- end header section -->
         <!-- slider section -->
        @include('home.slider')
         <!-- end slider section -->
      </div>
      <!-- why section -->
          @include('home.why')
      <!-- end why section -->
      
      <!-- arrival section -->
    @include('home.arrival')
      <!-- end arrival section -->
      
      <!-- product section -->
    @include('home.products')
      <!-- end product section -->

      <!--comment system startes here -->
      <form action="{{route('addcomment')}}" method="POST"> 
         @csrf
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
      <div class="container bootdey">
      <div class="col-md-12 bootstrap snippets">
         
      <div class="panel">
            
       
        <div class="panel-body">
         
          <textarea class="form-control" rows="2" placeholder="What are you thinking?" name="comment_body"></textarea>
          <div class="mar-top clearfix">
            <button class="btn btn-sm btn-primary pull-right" type="submit"><i class="fa fa-pencil fa-fw" ></i> Share</button>
            <a class="btn btn-trans btn-icon fa fa-video-camera add-tooltip" href="#"></a>
            <a class="btn btn-trans btn-icon fa fa-camera add-tooltip" href="#"></a>
            <a class="btn btn-trans btn-icon fa fa-file add-tooltip" href="#"></a>
          </div>
       

        </div>
      </div>
      
   </form>
      <div class="panel">
          <div class="panel-body">
         
              
                   
           
               @foreach ($comment as $comment)
                   
              
           
          <!-- Newsfeed Content -->
          <!--===================================================-->
             <div>
            
               <p>{{$comment->comment_name}}</p>
               <h1 style="font-size: large">{{$comment->comment_body}}</h1>

               <a href="javascript::void(0)" onclick="reply(this)" data-commentid="{{$comment->id}}">Reply</a>

                    

                   
              
               <div style="padding-left: 3%;padding-bottom:10px;">
                
                        @foreach ($reply as $rep)

                        @if ($rep->comment_id==$comment->id)

                        <h1 style="font-size: larger">{{$rep->reply_name}}</h1>

                        <h1 style="font-size: larger">{{$rep->reply_body}}</h1>

                       
               </div>
               @endif

               @endforeach
             </div>
             @endforeach
             <br>
            
<br>

                

                 
               <div style="display: none" class="replydiv">
                  
                  <form action="{{route('addreply')}}" method="POST">
                     @csrf
                <input type="text" id="commentId" name="commentId" hidden="">
                <textarea  name="reply_body" cols="30"  placeholder="write something here"></textarea>
      

                <button type="submit" class="btn btn-primary">Reply</button>
                  <a href="javascript::void(0)" class="btn btn-primary" onclick="reply_close(this)">close</a>
               </form>
                  
                </div>
               
               
               
               
            
          <!--===================================================-->
          <!-- End Newsfeed Content -->
        </div>
      </div>
      </div>
      </div>
      <!--comment system ends here -->

      <!-- subscribe section -->
     @include('home.subscribe')
      <!-- end subscribe section -->
      <!-- client section -->
      @include('home.client')
      <!-- end client section -->
      <!-- footer start -->
      @include('home.footer')
      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>
         
            Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
         
         </p>
      </div>
      <script type="text/javascript">
      
        function reply(caller){

         document.getElementById('commentId').value=$(caller).attr('data-commentid');
            
         $('.replydiv').insertAfter($(caller));
         $('.replydiv').show();
       }
       function reply_close(caller){
            
            $('.replydiv').hide();
          }
      
      </script>
        <script>
         document.addEventListener("DOMContentLoaded", function(event) { 
             var scrollpos = localStorage.getItem('scrollpos');
             if (scrollpos) window.scrollTo(0, scrollpos);
         });
 
         window.onbeforeunload = function(e) {
             localStorage.setItem('scrollpos', window.scrollY);
         };
     </script>
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