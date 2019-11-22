<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categories extends Model
{
    use SoftDeletes;

    protected $table = 'categories';
    protected $primaryKey = 'cate_id';
    public $timestamps = true;

    protected $fillable = [
        'name', 'alias', 'parent_id', 'uid', 'avatar', 'status', 'options', 'ordinal'
    ];


    /**
     * lay danh sach danh muc
     *
    */
    public static function categories()
    {
        $categories = Categories::orderBy('ordinal', 'asc')->get();

        $data = [];
        foreach($categories as $cate)
        {
            $parent = false;

            if(!empty($cate->parent_id))
            {
                $parent = Categories::find($cate->parent_id);
                if(!$parent)
                {
                    $parent = false;
                }
            }

            $data[] = [
                'cate_id' => $cate->cate_id,
                'name' => $cate->name,
                'alias' => $cate->alias,
                'parent' => [
                    'id' => !empty($parent) ? $parent->cate_id : 0,
                    'name' => !empty($parent) ? $parent->name : ''
                ],
                'avatar' => $cate->avatar,
                'status' => $cate->status,
                'ordinal' => $cate->ordinal,
                'created_at' => date("m-d-Y", strtotime($cate->created_at) )
            ];
        }

        return $data;
    }

}
