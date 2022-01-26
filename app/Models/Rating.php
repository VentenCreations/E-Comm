<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Models\Product; 
// use App\Models\Order; 
// use App\Models\Rating; 


class Rating extends Model
{
    use HasFactory;
    protected $table = 'ratings';
    protected $fillable = [
        'user_id',
        'prod_id',  
        'stars_rated',  //e check ang spelling 

        
    ];

}
