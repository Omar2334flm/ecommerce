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
                <h1 class=" text-3xl p-14">Add Product</h1>
                
                        <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10 ml-96">
                            <form  enctype="multipart/form-data" method="POST" action="{{route('product.store')}}">
                        
                                @csrf
                                <div class="sm:col-span-6">
                                    <label for="name" class="block text-sm font-medium text-gray-700"> Title </label>
                                    <div class="mt-1">
                                        <input type="text" id="name" name="title"
                                            class="   text-black block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    </div>
                                    @error('name')
                                    <div class=" text-sm  text-red-400">{{ $message }}</div>
                                              @enderror
                                  
                                </div>
                                <div class="sm:col-span-6">
                                    <label for="image" class="block text-sm font-medium text-gray-700"> Image </label>
                                    <div class="mt-1">
                                        <input type="file" id="image" name="image"
                                            class=" text-black block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    </div>
                                    @error('image')
                                    <div class=" text-sm  text-red-400">{{ $message }}</div>
                                              @enderror
                                </div>

                                <div class="sm:col-span-6">
                                    <label for="price" class="block text-sm font-medium text-gray-700"> quantites </label>
                                    <div class="mt-1">
                                        <input type="number" min="0,00" max="10000,00" step="0,01" id="price" name="quantity"
                                            class=" text-black block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    </div>
                                    @error('price')
                                    <div class=" text-sm  text-red-400">{{ $message }}</div>
                                              @enderror
                                </div>
        
                                <div class="sm:col-span-6">
                                    <label for="price" class="block text-sm font-medium text-gray-700"> Price </label>
                                    <div class="mt-1">
                                        <input type="number" min="0,00" max="10000,00" step="0,01" id="price" name="price"
                                            class=" text-black block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    </div>
                                    @error('price')
                                    <div class=" text-sm  text-red-400">{{ $message }}</div>
                                              @enderror
                                </div>

                                <div class="sm:col-span-6">
                                    <label for="price" class="block text-sm font-medium text-gray-700"> Discount Price </label>
                                    <div class="mt-1">
                                        <input type="number" min="0,00" max="10000,00" step="0,01" id="discount_price" name="discount_price"
                                            class="  text-black block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                    </div>
                                    @error('price')
                                    <div class=" text-sm  text-red-400">{{ $message }}</div>
                                              @enderror
                                </div>
        
                                <div class="sm:col-span-6 pt-5">
                                    <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                                    <div class="mt-1">
                                        <textarea id="description" rows="3" name="description"
                                            class=" text-black shadow-sm focus:ring-indigo-500 appearance-none bg-white border py-2 px-3 text-base leading-normal transition duration-150 ease-in-out focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
                                    </div>
                                    @error('description')
                               <div class=" text-sm  text-red-400">{{ $message }}</div>
                                         @enderror
                                </div>
        
        
                                <div class="sm:col-span-6 pt-5">
                                    <label for="Categories" class="block text-sm font-medium text-gray-700">Categories</label>
                                     <div class="mt-1">
                                                  <select multiple  id="categories" name="categories[]" class="  text-black form-multiselect block w-full mt-1" >
                                             @foreach ($categories as $category)
             
                                             <option value="{{$category->id}}">{{$category->name}}</option>
                                             @endforeach
                                         </select>
                                     </div>
                                     @error('categories')
                               <div class=" text-sm  text-red-400">{{ $message }}</div>
                                         @enderror
                                 </div>
                                <div class="mt-6 p-4">
                                    <button type="submit"
                                        class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Store</button>
                                </div>
                            </form>
                        </div>
                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            product title                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            product image                                           
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            quantity
                                          </th>
                                          <th scope="col" class="px-6 py-3">
                                            price
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            discount_price
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            description
                                        </th>
                                        
                                        <th scope="col" class="px-6 py-3">
                                        
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach ($products as $product)
                          
                                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                          
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-black">
                                        </th>
                                        <td class="px-6 py-4 text-sm font-medium  text-gray-900 whitespace-nowrap dark:text-black">
                                            {{$product->title}}

                                        </td>
                                        <td class="px-6 py-4 text-sm font-medium  text-gray-900 whitespace-nowrap dark:text-black">
                                            <img src="{{Storage::url($product->image)}}" alt="" class=" w-16 h-16">
                          
                                        </td>
                                        <td class="px-6 py-4 text-sm font-medium  text-gray-900 whitespace-nowrap dark:text-black">
                                            {{$product->quantity}}

                                        </td>
                                        <td class="px-6 py-4 text-sm font-medium  text-gray-900 whitespace-nowrap dark:text-black">
                                            {{$product->price}}

                                        </td>
                                        <td class="px-6 py-4 text-sm font-medium  text-gray-900 whitespace-nowrap dark:text-black">
                                            {{$product->discount_price}}

                                        </td>
                                        <td class="px-6 py-4 text-sm font-medium  text-gray-900 whitespace-nowrap dark:text-black">
                                            {{$product->description}}

                                        </td>

                                           
                                        <td class="px-6 py-4 text-sm font-medium  text-gray-900 whitespace-nowrap dark:text-white">
                          
                                          <div class=" flex space-x-2 " >
                                            <a href="{{route('product.edit',$product->id)}}" class="btn btn-primary">Edit</a>
                                            <form onsubmit="return confirm('Are You Sure ')" class="btn btn-success" action="{{route('product.destroy' ,$product->id)}}" method="POST">
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

           
              <div>
              </div>
          <!-- main-panel ends -->
      
    @include('admin.script')
    </body>
  </html>
