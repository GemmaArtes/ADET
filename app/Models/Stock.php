<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
   use HasFactory;
    protected $primaryKey = 'id';
    protected $foreignKey = 'product_id';
    protected $nullable = [
        'totalstock', 
    ];
    protected $fillable = [
        'id',
        'product_id',
        'totalstock',

        
    ];

    public function report() {
        return $this->belongsTo(Product::class, 'product_id');
    }


}
