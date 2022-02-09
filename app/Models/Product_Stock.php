<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_Stock extends Model
{
    use HasFactory;
    protected $fillable = [
        'ProductID' ,
        'ProductName' ,
        'Category' ,
        'LotNo' ,
        'UnitPrice' ,
        'InStockAmt' ,
        'RecordDate' 
    ];
}
