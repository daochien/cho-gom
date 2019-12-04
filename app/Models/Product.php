<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use App\Models\ProductCategories;
use App\Models\ProductOption;
use App\Models\Categories;

class Product extends Model
{
    CONST PRODUCT_HIEN_THI = 1;
    CONST PRODUCT_NOI_BAT = 2;
    CONST PRODUCT_CON_HANG = 4;
    CONST PRODUCT_HET_HANG = 8;

    use SoftDeletes;

    protected $table = 'products';
    protected $primaryKey = 'product_id';
    public $timestamps = true;

    protected $fillable = [
        'name', 'alias', 'code', 'uid', 'avatars', 'status', 'images', 'price', 'weight', 'summary', 'content', 'discount', 'is_discount'
    ];

    protected $casts = [
        'avatars' => 'array',
        'images' => 'array',
        'discount' => 'array'
    ];

    /**
     * them moi san pham
     * @param Array params
     * @return Object product
    */
    public function createProduct($params)
    {
        try
        {

            $status = $this->_convertStatus($params['status']);
            $data = [
                'name' => $params['name'],
                'alias' => str_slug($params['name']),
                'code' => $params['code'],
                'status' => $status,
                'summary' => $params['summary'],
                'content' => $params['content'],
                'avatars' => $params['avatars'],
                'images' => $params['images'],
                'uid' => Auth::user()->id,
                'price' => $params['price'],
                'weight' => $params['weight'],
                'is_discount' => $params['isDiscount']
            ];

            if(!empty($params['isDiscount']))
            {

                $data['discount'] = [
                    'type' => $params['typeDiscount'],
                    'value' => $params['value'],
                    'date_start' => $params['date_start'],
                    'date_end' => $params['date_end'],
                ];
            }

            $product = Product::create($data);

            if($product->product_id)
            {
                if(!empty($params['options']))
                {
                    $options = $this->_buildDataInsertOption($params['options'], $product->product_id);

                    if(!empty($options))
                    {
                        ProductOption::insert($options);
                    }
                }

                $cates = $this->_buildDataInsertCate($params['cate_ids'], $product->product_id);

                ProductCategories::insert($cates);

                return $product;
            }

            return false;
        }
        catch(\Exception $e)
        {
            return false;
        }
    }

    /**
     * lay danh sach san pham
     * @param Array params
     * @return products
    */
    public function listProduct($params)
    {
        try
        {
            $query = Product::with('getCategories')->orderBY('product_id', 'desc');
            if(!empty($params['name']))
            {
                $query->where('name', $params['name']);
            }
            return $query->paginate(20);
        }
        catch(\Exception $e)
        {
            return false;
        }
    }
    /**
     * lay danh sach san pham view frontEnd
     * @param Array params
     * @return products
    */

    public static function getProduct($params)
    {

        $query = Product::select('name', 'alias', 'products.product_id', 'price', 'avatars', 'discount', 'status', 'product_categories.cate_id')->orderBy('products.product_id', 'desc')
                ->join('product_categories', 'products.product_id', '=', 'product_categories.product_id');
        if(!empty($params['cate_id']))
        {
            $query->where('product_categories.cate_id', $params['cate_id']);
        }

        return $query->whereRaw('(status & 1)')->limit(9)->get()->toArray();
    }

    /**
     * xu ly cap nhat san pham
     * @param Array params
     * @return product
    */
    public function productUpdate($params)
    {
        try
        {

            $product = Product::findOrFail($params['product_id']);

            $status = $this->_convertStatus($params['status']);

            $product->name = $params['name'];
            $product->alias = str_slug($params['name']);
            $product->code = $params['code'];
            $product->status = $status;
            $product->summary = $params['summary'];
            $product->content = $params['content'];
            $product->avatars = $params['avatars'];
            $product->images = $params['images'];
            $product->uid = Auth::user()->id;
            $product->price = $params['price'];
            $product->weight = $params['weight'];
            $product->is_discount = $params['isDiscount'];

            if(!empty($params['isDiscount']))
            {
                $product->discount = [
                    'type' => $params['typeDiscount'],
                    'value' => $params['value'],
                    'date_start' => $params['date_start'],
                    'date_end' => $params['date_end'],
                ];
            }

            if($product->save())
            {
                if(!empty($params['options']))
                {
                    $options = $this->_buildDataInsertOption($params['options'], $product->product_id);

                    if(!empty($options))
                    {
                        ProductOption::where('product_id', $product->product_id)->delete();
                        ProductOption::insert($options);
                    }
                }

                $cates = $this->_buildDataInsertCate($params['cate_ids'], $product->product_id);

                ProductCategories::where('product_id', $product->product_id)->delete();
                ProductCategories::insert($cates);

                return $product;
            }
            return false;
        }
        catch(\Exception $e)
        {
            return false;
        }
    }

    /**
     *
    */
    public function getCategories()
    {
        return $this->belongsToMany(Categories::class, 'product_categories', 'product_id', 'cate_id')->select('name', 'categories.cate_id', 'avatar');
    }

    /**
     *
    */
    public function getOptions()
    {
        return $this->hasMany(ProductOption::class, 'product_id');
    }

    protected function _convertStatus($status)
    {
        $s = 0;
        foreach($status as $v)
        {
            $s = $s + $v;
        }

        return $s;
    }

    protected function _buildDataInsertOption($options, $product_id)
    {
        $insert = [];
        foreach($options as $option)
        {
            if(!empty($option['name']) && !empty($option['value']))
            {
                $insert[] = [
                    'name' => $option['name'],
                    'value' => $option['value'],
                    'product_id' => $product_id
                ];
            }
        }

        return $insert;
    }

    protected function _buildDataInsertCate($cates, $product_id)
    {
        $insert = [];
        foreach($cates as $cate)
        {
            $insert[] = [
                'cate_id' => $cate['cate_id'],
                'product_id' => $product_id
            ];
        }

        return $insert;
    }


    public function getColumnNameAttribute($value) {
        return json_decode($value);
      }
}
