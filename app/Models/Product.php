<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use App\Models\ProductCategories;
use App\Models\ProductOption;

class Product extends Model
{
    CONST PRODUCT_HIEN_THI = 1;
    CONST PRODUCT_NOI_BAT = 2;

    use SoftDeletes;

    protected $table = 'products';
    protected $primaryKey = 'product_id';
    public $timestamps = true;

    protected $fillable = [
        'name', 'alias', 'code', 'uid', 'avatars', 'status', 'images', 'price', 'weight', 'summary', 'content'
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
            
            $product = Product::create([
                'name' => $params['name'],
                'alias' => str_slug($params['name']),
                'code' => $params['code'],
                'status' => $status,
                'summary' => $params['summary'],
                'content' => $params['content'],
                'avatars' => json_encode($params['avatars']),
                'images' => json_encode($params['images']),
                'uid' => Auth::user()->id,
                'price' => $params['price'],
                'weight' => $params['weight']
            ]);

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
            $query = Product::orderBY('product_id', 'desc');
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
}
