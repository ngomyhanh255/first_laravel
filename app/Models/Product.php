<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $table = "product";
    protected $fillable = [
        'name',
        'price',
        'type_id',
        'sub_type_id',
        'note',
        'image_id',
        'sub_image_ids'
    ];
}
