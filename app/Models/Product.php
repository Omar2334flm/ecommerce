<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\cart;
class Product extends Model
{
    use HasFactory;

    protected $fillable =['title','image','quantity','price','discount_price','description'];

    public function categories(){
        return $this->belongsToMany(Category::class);

    }
    public function carts(){
        return $this->belongsToMany(Cart::class);

    }
}
