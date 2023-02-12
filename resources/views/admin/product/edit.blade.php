<html lang="en">
    <head>
      <!-- Required meta tags -->
      <base href="/public">
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



              
              <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10 ml-96">
                <form  enctype="multipart/form-data" method="POST" action="{{route('product.update',$product->id)}}">
                  @method('PUT')
                    @csrf
                    <div class="sm:col-span-6">
                        <label for="name" class="block text-sm font-medium text-gray-700"> Title </label>
                        <div class="mt-1">
                            <input type="text" id="name" name="title" value="{{$product->title}}"
                                class="   text-black block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                        </div>
                        @error('name')
                        <div class=" text-sm  text-red-400">{{ $message }}</div>
                                  @enderror
                      
                    </div>
                    <div class="sm:col-span-6">
                      <label for="image" class="block text-sm font-medium text-gray-700"> Image </label>
                      <div >

                          <img src="{{ Storage::url($product->image) }}" class="w-32 h-32 rounded">

                      </div>
                      <div class="mt-1">
                        <input type="file" id="image" name="image"
                            class="   text-black block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                    </div>
                        @error('image')
                        <div class=" text-sm  text-red-400">{{ $message }}</div>
                                  @enderror
                    </div>

                    <div class="sm:col-span-6">
                        <label for="price" class="block text-sm font-medium text-gray-700"> quantites </label>
                        <div class="mt-1">
                            <input type="number" min="0,00" max="10000,00" step="0,01" id="price" name="quantity" value="{{$product->quantity}}"
                                class=" text-black block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                        </div>
                        @error('price')
                        <div class=" text-sm  text-red-400">{{ $message }}</div>
                                  @enderror
                    </div>

                    <div class="sm:col-span-6">
                        <label for="price" class="block text-sm font-medium text-gray-700"> Price </label>
                        <div class="mt-1">
                            <input type="number" min="0,00" max="10000,00" step="0,01" id="price" name="price" value="{{$product->price}}"
                                class=" text-black block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                        </div>
                        @error('price')
                        <div class=" text-sm  text-red-400">{{ $message }}</div>
                                  @enderror
                    </div>

                    <div class="sm:col-span-6">
                        <label for="price" class="block text-sm font-medium text-gray-700"> Discount Price </label>
                        <div class="mt-1">
                            <input type="number" min="0,00" max="10000,00" step="0,01" id="discount_price" name="discount_price" value="{{$product->discount_price}}"
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
                                class=" text-black shadow-sm focus:ring-indigo-500 appearance-none bg-white border py-2 px-3 text-base leading-normal transition duration-150 ease-in-out focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                {{$product->description}}
                              </textarea>
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
 
                                 <option value="{{$category->id}}" @selected($product->categories->contains($category))>{{$category->name}}</option>
                                 @endforeach
                             </select>
                         </div>
                         @error('categories')
                   <div class=" text-sm  text-red-400">{{ $message }}</div>
                             @enderror
                     </div>
                    <div class="mt-6 p-4">
                        <button type="submit"
                            class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Edit</button>
                    </div>
                </form>
            </div>
                <div>
                </div>
          <!-- main-panel ends -->
      
    @include('admin.script')
    </body>
  </html>
