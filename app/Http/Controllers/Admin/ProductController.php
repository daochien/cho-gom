<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Product\CreateProduct;
use App\Http\Requests\Product\ProductUpdate;
use App\Models\Product;
use Validator;

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

    /**
     * Xóa sản phẩm
     * @param Number product_id
     * @return response
    */
    public function remove(Request $request)
    {
        try
        {
            $validator = Validator::make($request->all(), [
                'product_id' => 'required|numeric',

            ]);

            if ($validator->fails())
            {
                throw new \Exception($validator->errors()->first());
            }

            $product = Product::findOrFail($request->product_id);
            $product->delete();

            return response()->json([
                'status' => true,
                'message' => 'Xóa sản phẩm thành công!'
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
     * Get product by id
     * @param Number product_id
     * @return response
    */
    public function findProduct(Request $request)
    {
        try
        {
            $validator = Validator::make($request->all(), [
                'product_id' => 'required|numeric',

            ]);

            if ($validator->fails())
            {
                throw new \Exception($validator->errors()->first());
            }

            $product = Product::with('getCategories', 'getOptions')->findOrFail($request->product_id);

            return response()->json([
                'status' => true,
                'message' => '',
                'data' => $product
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
     * Cap nhat thong tin san pham
     * @param ProducUpdate request
     * @return response
    */
    public function update(ProductUpdate $request)
    {
        try
        {

            $product = new Product();
            $update = $product->productUpdate($request->all());
            if(!$update)
            {
                throw new \Exception('Cập nhật sản phẩm không thành công');
            }
            return response()->json([
                'status' => true,
                'message' => 'Cập nhật sản phẩm thành công!',
                'data' => $update
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
