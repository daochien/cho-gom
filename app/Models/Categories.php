<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cache;
class Categories extends Model
{
    use SoftDeletes;

    protected $table = 'categories';
    protected $primaryKey = 'cate_id';
    public $timestamps = true;

    protected $fillable = [
        'name', 'alias', 'parent_id', 'uid', 'avatar', 'status', 'options', 'ordinal'
    ];

    CONST KEY_LIST_CATE = 'list_cache'; // cache list danh muc
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


    /**
     * font-end lay danh sach danh muc
     *
    */
    public function categoriesFE()
    {
        $keyCache = self::KEY_LIST_CATE;
        if (Cache::has($keyCache))
        {
            return Cache::get($keyCache);
        }
        else
        {
            $cates =  Categories::select('cate_id', 'name', 'alias')->where(['parent_id' => 0, 'status' => 1])->with('childrenCategories')->get()->toArray();
            Cache::put($keyCache, $cates, 60);
            return $cates;
        }
    }

    public function hasManyCategories()
    {
        return $this->hasMany(Categories::class, 'parent_id');
    }

    public function childrenCategories()
	{
	    return $this->hasMany(Categories::class, 'parent_id')->select('cate_id', 'name', 'alias', 'parent_id')->with('childrenCategories');
	}

    public function removeCache($key = 'all')
    {
        if($key == 'all')
        {
            Cache::flush();
        }
        else
        {

        }
        Cache::forget($key);
    }
}
