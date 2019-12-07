<?php

namespace App\Libraries\ViewComposers;

use Illuminate\View\View;
use App\Models\Categories;

class CategoryComposer
{

    public $cates;

    public function __construct()
    {
        $category = new Categories();
        $this->cates = $category->categoriesFE();
    }

    /**
     * Bind data to the view.
     * Bind data vào view. $view->with('ten_key_se_dung_trong_view', $data);
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('cates', $this->cates);
    }
}
