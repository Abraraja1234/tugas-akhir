<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User; // Import model User
use App\Models\Product; // Import model Product

class Cart extends Model
{
    protected $fillable = ['user_id', 'product_id', 'quantity'];

    // Relasi ke model User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi ke model Product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
