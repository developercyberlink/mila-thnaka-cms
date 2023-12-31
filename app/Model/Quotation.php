<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    use HasFactory;

    protected $fillable=["full_name", "country", "email", "phone", "message", "product_id"];

    public function products(){
        return $this->belongsTo(Product::class, 'product_id');
    }
}
