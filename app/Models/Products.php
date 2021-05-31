<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model
{
    use HasFactory, SoftDeletes;
    
    //table name
    protected $table = "Products";
    //fields
     protected $fillable = [

       'name',
       'price',
       'category_name',
       'description',
       'seller_name',
       'ratings'
      



     ];
}
