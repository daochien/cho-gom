<?php

namespace App\Models\BackEnd;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'cate_id';
    public $timestamps = true;

    protected $fillable = [
        'name', 'alias', 'parent_id', 'uid', 'avatar', 'status', 'options'
    ];
}
