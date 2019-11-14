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
                    <div class="shopping-cart">
                        <div class="visible-md visible-lg">
                            <div class="shopping-cart-table">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h1 class="lbl-shopping-cart lbl-shopping-cart-gio-hang">Giỏ hàng <span>(<span class="count_item_pr">0</span> sản phẩm)</span></h1>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-main cart_desktop_page cart-page">
                                        <form id="shopping-cart" action="/cart" method="post" novalidate="" class="has-validation-callback">
                                            <div class="cart page_cart cart_des_page hidden-xs-down">
                                                <div class="col-xs-9 cart-col-1">
                                                    <div class="cart-tbody">
                                                        <div class="row shopping-cart-item productid-26599351">
                                                            <div class="col-xs-3 img-thumnail-custom">
                                                                <p class="image">
                                                                    <a href="/chao-bau-sunhouse-swp36a-36cm" title="Chảo Bầu Sunhouse SWP36A (36cm)" target="_blank"><img class="img-responsive" src="//bizweb.dktcdn.net/thumb/medium/100/361/971/products/img68c.jpg" alt="Chảo Bầu Sunhouse SWP36A (36cm)"></a>
                                                                </p>
                                                            </div>
                                                            <div class="col-right col-xs-9">
                                                                <div class="box-info-product">
                                                                    <p class="name"><a href="/chao-bau-sunhouse-swp36a-36cm" title="Chảo Bầu Sunhouse SWP36A (36cm)" target="_blank">Chảo Bầu Sunhouse SWP36A (36cm)</a></p>
                                                                    <p class="seller-by hidden" style="display: none;">Default Title</p>
                                                                    <p class="action"><a href="javascript:;" class="btn btn-link btn-item-delete remove-item-cart" data-id="26599351" title="Xóa">Xóa</a></p>
                                                                </div>
                                                                <div class="box-price">
                                                                    <p class="price pricechange">280.000₫</p>
                                                                </div>
                                                                <div class="quantity-block">
                                                                    <div class="input-group bootstrap-touchspin">
                                                                        <div class="input-group-btn">
                                                                            <input class="variantID" type="hidden" name="variantId" value="26599351">
                                                                            <button onclick="var result = document.getElementById('qtyItem26599351'); var qtyItem26599351 = result.value; if( !isNaN( qtyItem26599351 )) result.value++;return false;" class="increase_pop items-count btn-plus btn btn-default bootstrap-touchspin-up" type="button">+</button>
                                                                            <input type="text" onchange="if(this.value == 0)this.value=1;" maxlength="12" min="1" disabled="" class="form-control quantity-r2 quantity js-quantity-product input-text number-sidebar input_pop input_pop qtyItem26599351" id="qtyItem26599351" name="Lines" size="4" value="2">
                                                                            <button onclick="var result = document.getElementById('qtyItem26599351'); var qtyItem26599351 = result.value; if( !isNaN( qtyItem26599351 ) &amp;&amp; qtyItem26599351 > 1 ) result.value--;return false;" class="reduced_pop items-count btn-minus btn btn-default bootstrap-touchspin-down" type="button">–</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-3 cart-col-2 cart-collaterals cart_submit">
                                                    <div id="right-affix">
                                                        <div class="each-row">
                                                            <div class="box-style fee">
                                                                <p class="list-info-price"><span>Tạm tính: </span><strong class="totals_price price _text-right text_color_right1">560.000₫</strong></p>
                                                            </div>
                                                            <div class="box-style fee">
                                                                <div class="total2 clearfix"><span class="text-label">Thành tiền: </span>
                                                                    <div class="amount">
                                                                        <p><strong class="totals_price">560.000₫</strong></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button class="button btn btn-large btn-block btn-danger btn-checkout evo-button" title="Thanh toán ngay" type="button" onclick="window.location.href='/checkout'">Thanh toán ngay</button>
                                                            <button class="button btn-proceed-checkout btn btn-large btn-block btn-danger btn-checkouts" title="Tiếp tục mua hàng" type="button" onclick="window.location.href='/collections/all'">Tiếp tục mua hàng</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="visible-sm visible-xs">

                            <div class="cart-mobile">
                                <form action="/cart" method="post" class="margin-bottom-0">
                                    <div class="header-cart">
                                        <div class="title-cart clearfix">
                                            <h3>Giỏ hàng của bạn</h3>
                                        </div>
                                    </div>
                                    <div class="header-cart-content">
                                        <div class="cart_page_mobile content-product-list">

                                            <div class="item-product item productid-1">
                                                <div class="item-product-cart-mobile">
                                                    <a class="product-images1" href="/chao-bau-sunhouse-swp36a-36cm?variantid=26599351" title="Chảo Bầu Sunhouse SWP36A (36cm)">

                                                        <img width="80" height="150" src="//bizweb.dktcdn.net/thumb/large/100/361/971/products/img68c.jpg?v=1564804211653" alt="Chảo Bầu Sunhouse SWP36A (36cm)" />

                                                    </a>
                                                </div>
                                                <div class="title-product-cart-mobile">
                                                    <h3><a href="/chao-bau-sunhouse-swp36a-36cm?variantid=26599351" title="Chảo Bầu Sunhouse SWP36A (36cm)">Chảo Bầu Sunhouse SWP36A (36cm)</a></h3>
                                                    <p>Giá: <span>280.000₫</span></p>
                                                </div>
                                                <div class="select-item-qty-mobile">
                                                    <div class="txt_center">
                                                        <input class="variantID" type="hidden" name="variantId" value="1">
                                                        <button onclick="var result = document.getElementById('qtyMobile1'); var qtyMobile1 = result.value; if( !isNaN( qtyMobile1 ) &amp;&amp; qtyMobile1 > 0 ) result.value--;return false;" class="reduced items-count btn-minus" type="button">–</button>
                                                        <input type="text" maxlength="12" min="0" class="input-text number-sidebar qtyMobile1" id="qtyMobile1" name="Lines" size="4" value="1">
                                                        <button onclick="var result = document.getElementById('qtyMobile1'); var qtyMobile1 = result.value; if( !isNaN( qtyMobile1 )) result.value++;return false;" class="increase items-count btn-plus" type="button">+</button>
                                                    </div>
                                                    <a class="button remove-item remove-item-cart" href="/cart/change?line=1&amp;quantity=0" data-id="1">Xoá</a>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="header-cart-price">
                                            <div class="title-cart ">
                                                <h3 class="text-xs-left">Tổng tiền</h3>
                                                <a class="text-xs-right totals_price_mobile">560.000₫</a>
                                            </div>
                                            <div class="checkout">
                                                <button class="btn-proceed-checkout-mobile" title="Thanh toán ngay" type="button" onclick="window.location.href='/checkout'">
                                                    Thanh toán ngay
                                                </button>
                                                <button class="btn btn-primary btn-proceed-continues-mobile" title="Tiếp tục mua hàng" type="button" onclick="window.location.href='/collections/all'">
                                                    Tiếp tục mua hàng
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
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
