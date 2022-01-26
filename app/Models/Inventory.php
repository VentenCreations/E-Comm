<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $table = 'inventory';
    protected $fillable = [
        'prod_id',  
        'date',
        // 'product_name',
        'sales',
        'expenses',
        'amount',
        'total_sales',
        
    ];
    public function product()
    {
        return $this->belongsTo(Product::class, 'prod_id', 'id'); 
        // foreign key pk
    }


}
