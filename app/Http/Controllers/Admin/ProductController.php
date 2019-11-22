<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Product\CreateProduct;
use App\Models\Product;

class ProductController extends Controller
{
    CONST PRODUCT_HIEN_THI = 1;
    CONST PRODUCT_NOI_BAT = 2;
    CONST PRODUCT_CON_HANG = 4;
    CONST PRODUCT_HET_HANG = 4;

    public function __construct()
    {

    }

    /**
     * them moi san pham
     * @param Array request
     * @return response
    */
    public function create(CreateProduct $request)
    {
        try
        {
            $product = new Product();
            $create = $product-> createProduct($request->all());
            if(!$create)
            {
                throw new \Exception('Thêm mới sản phẩm không thành công');
            }

            return response()->json([
                'status' => true,
                'message' => 'success',
                'data' => $create
            ]);
        }
        catch(\Exception $e)
        {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ]);
        }
    }

    /**
     * lay danh sach san pham
     * @param Request request
     * @return response
    */
    public function products(Request $request)
    {
        try
        {
            $product = new Product();
            $products = $product->listProduct($request->all());

            return response()->json([
                'status' => true,
                'message' => 'success',
                'data' => $products
            ]);
        }
        catch(\Exception $e)
        {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ]);
        }
    }
}
