<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\Console\Helper\Table;

class Product extends Model
{
    use HasFactory;
    public $fillable = [
        'category_id',
        'title',
        'price',
        'discount',
        'thumbnail',
        'description',
    ];
    public $timestamps = false;
}
