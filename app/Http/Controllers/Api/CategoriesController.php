<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BackEnd\Categories;
use Validator;

class CategoriesController extends Controller
{
    public function __construct()
    {

    }

    /**
     * them danh muc
     * @param [String] name
     * @param [number] parent_id
     * @param [number] ordinal
     * @param [String] avatar
     * @param [number] status
     * @return response
    */

    public function create(Request $request)
    {
        try
        {
            $validator = Validator::make($request->all(), [
                'name' => 'required|max:191',
                'ordinal' => 'required|numeric|max:100',
                'status' => 'required|numeric|max:3'
            ]);

            if ($validator->fails())
            {
                return response()->json([
                    'status' => false,
                    'message' => $validator->errors()->first(),
                    'errors' => $validator->errors()
                ]);
            }

            $cate = Categories::create([
                'name' => $request->name,
                'avatar' => $request->avatar,
                'alias' => $request->name,
                'uid' => 1,
                'status' => $request->status,
                'ordinal' => $request->ordinal
            ]);

            if($cate->cate_id)
            {
                return response()->json([
                    'status' => true,
                    'message' => 'success!'
                ]);
            }
            else
            {
                throw new \Exception('Something error!');
            }

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
