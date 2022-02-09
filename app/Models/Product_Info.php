<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_Info extends Model
{
    use HasFactory;
    protected $fillable = [
        'ProductID' ,
        'ProdName' ,
        'CaregoryNo' ,
        'ProductIMG' ,
        'VenderNo' ,
    ];
}
