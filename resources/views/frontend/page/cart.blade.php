@extends('frontend.master', ['class' => 'bg-body cart', 'menu' => 'mainmenu-other'])
@push('css')
    <link href="{{ asset('frontend/css/evo-carts.scss.css') }}" rel="stylesheet" type="text/css" />
@endpush
@section('content')
<div class="fix-layout">
    <section class="bread-crumb margin-bottom-10">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul class="breadcrumb" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                        <li class="home"><a itemprop="url" href="/" title="Trang chủ"><span itemprop="title">Trang chủ</span></a><span><i class="fa fa-angle-right"></i></span></li>

                        <li><strong itemprop="title">Giỏ hàng</strong></li>

                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="container white collections-container margin-bottom-20 margin-top-30">
        <div class="white-background">
            <div class="row">
                <div class="col-md-12">
                    <my-cart-component></my-cart-component>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('header_js')
    <script src="{{asset('frontend/js/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('frontend/js/option-selectors.js')}}" type="text/javascript"></script>
    <script src="{{asset('frontend/js/slick.js')}}" type="text/javascript"></script>

@endpush

@push('js')

@endpush
