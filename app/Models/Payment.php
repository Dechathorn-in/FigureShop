<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'ReceiptID' ,
        'ProductID' ,
        'ProductName' ,
        'CustomerID' ,
        'CustomerName' ,
        'TotalAmt' ,
        'TotalPrice' ,
        'CurrentOrderPoint' ,
        'ReceiptDate' 
    ];
}
