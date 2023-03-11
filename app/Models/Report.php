<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $foreignKey = 'product_id';
    protected $nullable = [
        'quantity_add', 
        'stockleft',
    ];
    protected $fillable = [
        'id',
        'product_id',
        'quantity_add',
        'stockleft',

        
    ];

    public function report() {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
