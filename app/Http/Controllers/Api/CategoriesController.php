<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BackEnd\Categories;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\User;
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

    public function register(Request $request)
    {

        $user = new User();
        $user->email = 'daochienhubt@gmail.com';
        $user->name = 'Đào Chiến';
        $user->password = bcrypt('123456');
        $user->save();

        return response()->json($user, 200);
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        dd($this->guard()->attempt($credentials));
        if (!($token = $this->guard()->attempt($credentials))) {
            return response()->json([
                'status' => 'error',
                'error' => 'invalid.credentials',
                'msg' => 'Invalid Credentials.'
            ], 401);
        }

        return response()->json(['token' => $token], 200);
    }

    /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\Guard
     */
    public function guard()
    {
        return Auth::guard('api');
    }
}
