<?php

namespace App\Http\Controllers\Api\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Validator;
class ProductController extends Controller
{
    public function __construct()
    {

    }

    public function products(Request $request)
    {
        try
        {
            $validator = Validator::make($request->all(), [
                'cate_id' => 'required',
            ]);

            if ($validator->fails())
            {
                throw new \Exception($validator->errors()->first());
            }

            $products = Product::getProduct([
                'cate_id' => $request->cate_id
            ]);

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
