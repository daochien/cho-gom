<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BackEnd\Categories;
use Validator, Auth;

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
                'alias' => str_slug($request->name),
                'uid' => Auth::user()->id,
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

    /**
     * lay danh sach danh muc
     * @return response
    */
    public function categories()
    {
        try
        {
            $categories = Categories::categories();
            return response()->json([
                'status' => true,
                'message' => 'success',
                'data' => $categories
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
     * update categories
     * @param [number] parent_id
     * @param [number] ordinal
     * @param [String] avatar
     * @param [number] status
     * @param [String] number
     * @return response
    */
    public function update(Request $request)
    {
        try
        {
            $validator = Validator::make($request->all(), [
                'name' => 'required|max:191',
                'ordinal' => 'required|numeric|max:100',
                'status' => 'required|numeric|max:3',
                'cate_id' => 'required|numeric'
            ]);

            if ($validator->fails())
            {
                return response()->json([
                    'status' => false,
                    'message' => $validator->errors()->first(),
                    'errors' => $validator->errors()
                ]);
            }

            $cate = Categories::findOrFail($request->cate_id);
            $cate->name = $request->name;
            $cate->alias = str_slug($request->name);
            $cate->status = $request->status;
            $cate->ordinal = $request->ordinal;
            $cate->avatar = $request->avatar;
            $cate->uid = Auth::user()->id;
            $cate->save();

            return response()->json([
                'status' => true,
                'message' => 'success'
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
     * xoa categories
     * @param [number] cate_id
    */
    public function remove(Request $request)
    {
        try
        {
            $validator = Validator::make($request->all(), [
                'cate_id' => 'required|numeric'
            ]);

            if ($validator->fails())
            {
                throw new \Exception('Xóa danh mục không thành công!');
            }

            $cate = Categories::findOrFail($request->cate_id);
            $cate->delete();

            return response()->json([
                'status' => true,
                'message' => 'success'
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
