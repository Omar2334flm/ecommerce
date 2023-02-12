<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class cart extends Model
{
    use HasFactory;
    
    protected $fillable=['name','email','phone','address','user_id','product_title','product_id','image','quantity','price'];

    public function products(){
        return $this->belongsToMany(Product::class);

    }
}
