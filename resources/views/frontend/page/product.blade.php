@extends('frontend.master', ['class' => 'bg-body collection collection', 'menu' => 'mainmenu-other'])
@push('css')
    <link href="{{ asset('frontend/css/evo-collections.scss.css') }}" rel="stylesheet" type="text/css" />
@endpush
@section('content')
<div class="fix-layout">
    <section class="bread-crumb margin-bottom-10">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul class="breadcrumb" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                        <li class="home"><a itemprop="url" href="/" title="Trang chủ"><span itemprop="title">Trang chủ</span></a><span><i class="fa fa-angle-right"></i></span></li>

                        <li><strong><span itemprop="title">{{ $cate->name }}</span></strong></li>

                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="main_container col-md-12 margin-bottom-20">

                <div class="category-gallery">
                    <div class="slide-collection">

                        <div class="item">
                            <a href="#" title="Evo Cook">
                                <img data-lazy="//bizweb.dktcdn.net/100/361/971/themes/729792/assets/cat-banner-1.jpg?1572918753291" alt="Evo Cook" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" class="img-responsive center-block" />
                            </a>
                        </div>

                        <div class="item">
                            <a href="#" title="Evo Cook">
                                <img data-lazy="//bizweb.dktcdn.net/100/361/971/themes/729792/assets/cat-banner-2.jpg?1572918753291" alt="Evo Cook" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" class="img-responsive center-block" />
                            </a>
                        </div>

                        <div class="item">
                            <a href="#" title="Evo Cook">
                                <img data-lazy="//bizweb.dktcdn.net/100/361/971/themes/729792/assets/cat-banner-3.jpg?1572918753291" alt="Evo Cook" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" class="img-responsive center-block" />
                            </a>
                        </div>

                        <div class="item">
                            <a href="#" title="Evo Cook">
                                <img data-lazy="//bizweb.dktcdn.net/100/361/971/themes/729792/assets/cat-banner-4.jpg?1572918753291" alt="Evo Cook" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" class="img-responsive center-block" />
                            </a>
                        </div>

                        <div class="item">
                            <a href="#" title="Evo Cook">
                                <img data-lazy="//bizweb.dktcdn.net/100/361/971/themes/729792/assets/cat-banner-5.jpg?1572918753291" alt="Evo Cook" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" class="img-responsive center-block" />
                            </a>
                        </div>

                    </div>
                </div>

            </div>

            <section class="main_container collection col-md-12">
                <div class="evo-main-cate">
                    <h1 class="col-title">{{ $cate->name }}</h1>

                    <div class="evo-fix-col-title clearfix ">
                        <div class="row">
                            <div class="col-sm-6 col-xs-6 group-filter-title hidden-lg hidden-md">
                                Tìm theo
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="main-evo-filter">
                    <aside class="ant-sidebar sidebar">
                        <filter-product-component></filter-product-component>
                    </aside>
                </div>
                <div class="clearfix"></div>
                <div class="main-evo-categories">
                    <div class="category-products products category-products-grids clearfix">

                        <div class="sort-cate clearfix hidden-xs">
                            <div class="sort-cate-left hidden-xs">
                                <h3>Xếp theo:</h3>
                                <ul>
                                    <li class="btn-quick-sort alpha-asc">
                                        <a href="javascript:;" title="Tên A-Z"><i></i>Tên A-Z</a>
                                    </li>
                                    <li class="btn-quick-sort alpha-desc">
                                        <a href="javascript:;" title="Tên Z-A"><i></i>Tên Z-A</a>
                                    </li>
                                    <li class="btn-quick-sort position-desc">
                                        <a href="javascript:;" title="Hàng mới"><i></i>Hàng mới</a>
                                    </li>
                                    <li class="btn-quick-sort price-asc">
                                        <a href="javascript:;" title="Giá thấp đến cao"><i></i>Giá thấp đến cao</a>
                                    </li>
                                    <li class="btn-quick-sort price-desc">
                                        <a href="javascript:;" title="Giá cao xuống thấp"><i></i>Giá cao xuống thấp</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <product-component :cate="{{ json_encode($cate) }}"></product-component>

                    </div>
                </div>
            </section>

        </div>
    </div>
</div>
@endsection

@push('header_js')
    <script src="{{asset('frontend/js/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('frontend/js/option-selectors.js')}}" type="text/javascript"></script>
    <script src="{{asset('frontend/js/slick.js')}}" type="text/javascript"></script>
    <script src="{{asset('frontend/js/evo-collection.js')}}" type="text/javascript"></script>
@endpush

@push('js')

@endpush
