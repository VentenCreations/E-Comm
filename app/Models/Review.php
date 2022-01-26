<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $table = 'reviews';
    protected $fillable = [
        'user_id',
        'prod_id',  
        'user_review',  //e check ang spelling 

        
    ];

    public function user()
    {
        return $this->belongsTo(User::class);//no need to mention fk and pk
    }

    // public function rating()
    // {
    //     return $this->belongsTo(Rating::class, 'user_id','user_id');//no need to mention fk and pk
    // }
    
    public function product()
    {
        return $this->belongsTo(Product::class, 'prod_id','id');//no need to mention fk and pk
        
    }
}
