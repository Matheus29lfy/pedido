<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $table = 'create_order';

    public $timestamps = true;

    protected $fillable = ['OrderId', 'OrderCode','OrderDate' , 'TotalAmountWihtoutDiscount',
             'TotalAmountWithDiscount', 'ArticleCode', 'ArticleName', 'UnitPrice', 'Quantity' ];


}
