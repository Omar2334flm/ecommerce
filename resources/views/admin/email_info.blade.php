<html lang="en">
    <head>
        <base href="/public">
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
        <div class="main-panel">
            <div class="content-wrapper"> 

              <div class=" text-center pt-40">
                <h1 class=" text-3xl p-14">Send Email to {{$order->name}}</h1>
                
                        <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10 ml-96">
                            <form action="{{route('send_user_email',$order->id)}}" method="post"  >
                        @csrf
                                
                                <div class="sm:col-span-6">
                                    <label for="name" class="block text-sm font-medium text-white"> Email Greeting </label>
                                    <div class="mt-1">
                                        <input type="text" id="name" name="greeting"
                                            class="   text-black block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    </div>
                                 
                                  
                                </div>
                            <br>

                                <div class="sm:col-span-6">
                                    <label for="price" class="block text-sm font-medium text-white"> Email firstLine </label>
                                    <div class="mt-1">
                                        <input type="text"  name="firstline"
                                            class=" text-black block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    </div>
                                   
                                </div>
         <br>
                                <div class="sm:col-span-6">
                                    <label for="price" class="block text-sm font-medium text-white"> Email Body </label>
                                    <div class="mt-1">
                                        <input type="text" name="body"
                                            class=" text-black block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    </div>
                                  
                                </div>
                             <br>
                                <div class="sm:col-span-6">
                                    <label for="price" class="block text-sm font-medium text-white"> Email Button Name </label>
                                    <div class="mt-1">
                                        <input type="text"  name="buttonname"
                                            class="  text-black block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    </div>
                                 
                                </div>
                     
                                <div class="sm:col-span-6 pt-5">
                                    <label for="description" class="block text-sm font-medium text-white">Email Url</label>
                                    <div class="mt-1">
                                      <input type="text"  name="url"
                                      class=" text-black shadow-sm focus:ring-indigo-500 appearance-none bg-white border py-2 px-3 text-base leading-normal transition duration-150 ease-in-out focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
                                    </div>
                                 
                                </div>
                                  

                                <br>
                                <div class="sm:col-span-6">
                                  <label for="price" class="block text-sm font-medium text-white"> Email LastLine </label>
                                  <div class="mt-1">
                                      <input type="text" name="lasttline"
                                          class=" text-black block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                  </div>
                                 
                              </div>
        
        
                               <br>
                                    <button type="submit"
                                        class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Send</button>
                                </div>
                            </form>
                        </div>
                    

           
              <div>
                <div>
                </div>
          <!-- main-panel ends -->
      
    @include('admin.script')
    </body>
  </html>