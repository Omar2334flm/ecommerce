<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\cart;
use App\Models\Category;
use App\Models\comment;
use App\Models\Product;
use App\Models\order;
use App\Models\Reply;
use Stripe;
use Session;
use Barryvdh\DomPDF\Facade as PDF;


use Illuminate\Support\Facades\App;

use Illuminate\Support\Facades\File;




use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Barryvdh\DomPDF\PDF as DomPDFPDF;

class HomeController extends Controller
{
    public function index(){
        $categories =Category::all();
         $product = Product::all();
         $comment = comment::all();
         $reply =Reply::all();

        return view ('home.user',compact('product','categories','comment','reply'));
    }
   

    public function redirect(){
$usertype=Auth::User()->usertype;
if($usertype=='1'){
    return view('admin.home');
}else{
    $product = Product::all();
    $comment = comment::all();
    $reply =Reply::all();


    return view('home.user',compact('product','comment','reply'));
}
        
    }

    public function addcart( Request $request, $id){
        if (Auth::id()){
                  
            $user =Auth::user();
            $product = Product::find($id);
            $cart = new cart;
            $cart->name =$user->name;
            $cart->email =$user->email;
            $cart->phone =$user->phone;
            $cart->address =$user->address;
            $cart->user_id =$user->id;
            $cart->product_title =$product->title;
            $cart->product_title =$product->title;

            $cart->price =$product->price;
            $cart->image=$product->image;
            $cart->product_id =$product->id;
            $cart->quantity =$request->quantity;

                   
              $cart->save();
              return redirect()->back();



        }else{
return redirect('login');
        }
    }
    

    public function showcart(Product $product){
        $id=Auth::user()->id;
        $cart =cart::where('user_id','=',$id)->get();
        return view ('home.cart',compact('cart','product'));
    }

    public function deletecart( $id){

        $cart =cart::find($id)->delete();
        return redirect()->back();
    }
    
    public function showorder(){

        $user=Auth::user();
        $userid=$user->id;
       
        $data =cart::where('user_id','=',$userid)->get();
        

        foreach($data as $data)
        {
            $order=new order;
           
            $order->name =$data->name;
            $order->email =$data->email;
            $order->phone =$data->phone;
            $order->address =$data->address;
            $order->user_id =$data->id;
            $order->product_title =$data->title;

            $order->price =$data->price;
            $order->image=$data->image;
            $order->product_id =$data->id;
            $order->quantity =$order->quantity;
            $order->payment_ststus ='cash on delievery';
            $order->delievery_status ='processing';

            $order->save();

            $cart_id=$data->id;
            $cart=cart::find($cart_id);
            $cart->delete();
           



        }
        $order=order::all();
        return view('home.showorder',compact('order'));
    }

    public function stripe($totalprice){
        return view('home.stripe',compact('totalprice'));
    }
    public function stripePost(Request $request,$totalprice)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
    
        Stripe\Charge::create ([
                "amount" => $totalprice * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "T." 
        ]);
        $user=Auth::user();
        $userid=$user->id;
       
        $data =cart::where('user_id','=',$userid)->get();
        

        foreach($data as $data)
        {
            $order=new order;
           
            $order->name =$data->name;
            $order->email =$data->email;
            $order->phone =$data->phone;
            $order->address =$data->address;
            $order->user_id =$data->id;
            $order->product_title =$data->title;

            $order->price =$data->price;
            $order->image=$data->image;
            $order->product_id =$data->id;
            $order->quantity =$order->quantity;
            $order->payment_ststus ='';
            $order->delievery_status ='';

            $order->save();

            $cart_id=$data->id;
            $cart=cart::find($cart_id);
            $cart->delete();
           



        }
        
      
        
              
        return back()->with('success','payment accessed');
    }

    public function proddetails( Request $request, $id){

        if (Auth::id()){
                  
            $user =Auth::user();
            $products = Product::find($id);
          
              return view('home.proddetails',compact('products'));



        }else{
return redirect('login');
        }
        
    }
    public function addcomment(Request $request){

        if (Auth::id()){
                  
            $user =Auth::user();
            $comment=new comment;
           
            $comment->comment_name =$user->name;
            $comment->comment_body =$request->comment_body;
            $comment->user_id =$user->id;


            $comment->save();
              return redirect()->back();



        }else{
return redirect('login');
        }
    }

    public function addreply(Request $request){

        if (Auth::id()){
                  
            $user =Auth::user();
                
            $user =Auth::user();
            $reply=new Reply();
           
            $reply->reply_name =$user->name;
            $reply->reply_body =$request->reply_body;
            $reply->user_id =$user->id;
            $reply->comment_id =$request->commentId;



            $reply->save();
              return redirect()->back();
          
              



        }else{
return redirect('login');
        }
    }

    public function printpdf($id){


        $order =order::find($id);
        $pdf = FacadePdf::loadView('admin.pdf',compact('order'));
        return $pdf->download('order.details.pdf');
    }


   
}



