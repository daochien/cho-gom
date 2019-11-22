<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductOption extends Model
{
    protected $table = 'product_options';
    protected $primaryKey = 'option_id';
    public $timestamps = true;

    protected $fillable = [
        'product_id', 'name', 'value'
    ];
}
