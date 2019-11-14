<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {

    }

    /**
     * view index
    */
    public function home()
    {
        return view('frontend.page.home');
    }

    /**
     * view products
    */
    public function products()
    {
        return view('frontend.page.product');
    }

    /**
     * view detail
    */
    public function detail()
    {
        return view('frontend.page.product_detail');
    }

    /**
     * view cart
    */
    public function cart()
    {
        return view('frontend.page.cart');
    }
}
