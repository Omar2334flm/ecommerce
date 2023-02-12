<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\order;
use Illuminate\Http\Request;

class SearchController extends Controller



{

   

    public function searchorder(Request $request){
       
        
        $searchText=$request->search;
        $order = order::where('name', 'LIKE', "%$searchText%")->orwhere('phone', 'LIKE', "%$searchText%")->get();


        return view('admin.orders.index',compact('order'));

       
    }

}