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
          <div class="main-panel">
            <div class="content-wrapper">
              
              <div>
              

                @if (session()->has('success'))
                    
                <div class="p-4 mb-4 text-sm text-black bg-red-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
                   <span class="font-medium">Success alert!</span> 
                   {{session()->get('success')}}
                   </div>
                @endif
               
             
                 
           </div>
                <div class=" text-center pt-40">
                    <h2 class=" text-3xl p-6" >Add Category</h2>

                    <form  action="{{route('category.store')}}" method="POST">
                        @csrf
                        <input class=" text-black" type="text" name="name" placeholder="Write Category Name">
                             <button type="submit" class=" btn btn-primary">Add Category</button>
                         
                  @error('name')
                 <div class="alert alert-danger">{{ $message }}</div>
                   @enderror
                    </form>
                </div>

              
                
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
  <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
      <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
          <tr>
              <th scope="col" class="px-6 py-3">
              </th>
              <th scope="col" class="px-6 py-3">
              </th>
              <th scope="col" class="px-6 py-3">
                  Category name
              </th>
              <th scope="col" class="px-6 py-3">
                </th>
              <th scope="col" class="px-6 py-3">
                  
              </th>
          </tr>
      </thead>
      <tbody>
        @foreach ($categories as $category)

          <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">

              </th>
              <td class="px-6 py-4">
              </td>
              <td class="px-6 py-4 text-lg">
                {{$category->name}}

              </td>
              <td class="px-6 py-4">
              </td>
                 
              <td class="px-6 py-4 text-sm font-medium  text-gray-900 whitespace-nowrap dark:text-white">

                <div class=" flex space-x-2 " >

                  <form onsubmit="return confirm('Are You Sure ')" class="  btn btn-primary flex px-4 py-2  rounded-lg text-black" action="{{route('category.destroy' ,$category->id)}}" method="POST">
                      @method('DELETE')
                      @csrf
                      <button type="submit">Delete</button>
                      </form> 
                </div>
                  </td>

          </tr>
      
      
          @endforeach

      </tbody>
  </table>
</div>

            </div>
          </div>
          
          <!-- main-panel ends -->
      
    @include('admin.script')
    </body>
  </html>
