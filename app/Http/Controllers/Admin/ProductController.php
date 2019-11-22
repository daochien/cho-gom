<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Product\CreateProduct;
class ProductController extends Controller
{
    CONST PRODUCT_HIEN_THI = 1;
    CONST PRODUCT_NOI_BAT = 2;

    public function __construct()
    {

    }

    public function create(CreateProduct $request)
    {
        dd('123');
    }
}
