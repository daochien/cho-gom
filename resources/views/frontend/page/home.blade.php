@extends('frontend.master', ['class' => 'index', 'menu' => '', 'cates' => $cates])
@section('title', 'Trang chủ')

@push('css')
    <link href="{{ asset('frontend/css/evo-index.scss.css') }}" rel="stylesheet" type="text/css" />
@endpush
@section('content')
    <div class="fix-layout">
        <h1 class="hidden">Evo Cook</h1>

        <section class="awe-section-1">
            <div class="container">
                <div class="col-lg-3 col-md-3 no-padding"></div>
                <div class="col-lg-6 col-md-6 no-padding">
                    <div class="home-slider">

                        <div class="item">
                            <a href="#" class="clearfix" title="Evo Cook">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-lazy="//bizweb.dktcdn.net/100/361/971/themes/729792/assets/slider_1.jpg?1572918753291" alt="Evo Cook" class="lazy img-responsive center-block" />
                            </a>
                        </div>

                    </div>
                </div>

                <div class="col-lg-3 col-md-3 no-padding near_slider_banner">
                    <div class="row">

                        <div class="col-md-12 col-sm-6 col-xs-6">
                            <a href="#" class="clearfix single_image_effect" title="Evo Cook">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/100/361/971/themes/729792/assets/near_slider_1.jpg?1572918753291" alt="Evo Cook" class="lazy img-responsive center-block" />
                            </a>
                        </div>

                        <div class="col-md-12 col-sm-6 col-xs-6">
                            <a href="#" class="clearfix single_image_effect" title="Evo Cook">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/100/361/971/themes/729792/assets/near_slider_2.jpg?1572918753291" alt="Evo Cook" class="lazy img-responsive center-block" />
                            </a>
                        </div>

                    </div>
                </div>

            </div>
        </section>

        <section class="awe-section-2">
            <div class="section_banner_full hidden-xs">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <a class="single_image_effect" href="#" title="Evo Cook">
                                <img class="lazy img-responsive center-block" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/100/361/971/themes/729792/assets/evo_banner_index_1.jpg?1572918753291" alt="Evo Cook" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- <section class="awe-section-3">

            <div class="section_gift">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="evo-index-block-product">
                                <div class="titlecp clearfix">
                                    <h3><a href="san-pham-moi" title="Quà ngon giá tốt">Quà ngon giá tốt</a></h3>
                                    <div class="timer">
                                        <h5>Chương trình sẽ kết thúc sau</h5>
                                        <div class="timer-view" data-countdown="countdown" data-date="12-10-2019-09-15-45"></div>
                                    </div>
                                </div>
                                <div class="evo-index-product-contain">

                                    <div class="evo-block-product evo-slick">

                                        <div class="evo-item">

                                            <div class="evo-product-block-item">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="/noi-van-da-day-tu-sunhouse-shg2016mmb" title="Nồi V&#226;n Đ&#225; Đ&#225;y Từ Sunhouse SHG2016MMB">
                                                        <img class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/large/100/361/971/products/img24c-ed289478-d2e6-4ebf-9f2b-a7a2be08b5b9.jpg?v=1564804763190" alt="Nồi V&#226;n Đ&#225; Đ&#225;y Từ Sunhouse SHG2016MMB" />
                                                    </a>
                                                    <a class="secondary_img" href="/noi-van-da-day-tu-sunhouse-shg2016mmb" title="Nồi V&#226;n Đ&#225; Đ&#225;y Từ Sunhouse SHG2016MMB">

                                                        <img class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/large/100/361/971/products/high-heat-nonstick-steel-grill-cookware-set-c.jpg?v=1564804763700" alt="Nồi V&#226;n Đ&#225; Đ&#225;y Từ Sunhouse SHG2016MMB" />

                                                    </a>

                                                    <div class="label_product">
                                                        <span class="label_sale"> 10% </span>
                                                    </div>

                                                    <div class="action_links hidden-sm hidden-xs hidden-md">
                                                        <form action="/cart/add" method="post" enctype="multipart/form-data" class="hidden-md variants form-nut-grid form-ajaxtocart" data-id="product-actions-15413426">

                                                            <input type="hidden" name="variantId" value="26599503" />
                                                            <button type="button" title="Thêm vào giỏ" class="action add_to_cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i> Thêm vào giỏ</button>

                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="product_name">
                                                        <h4><a href="/noi-van-da-day-tu-sunhouse-shg2016mmb" title="Nồi V&#226;n Đ&#225; Đ&#225;y Từ Sunhouse SHG2016MMB">Nồi V&#226;n Đ&#225; Đ&#225;y Từ Sunhouse SHG2016MMB</a></h4>
                                                    </div>
                                                    <div class="price-container">

                                                        <span class="current_price">188.100₫</span>

                                                        <span class="old_price">209.000₫</span>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="evo-product-block-item">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="/chao-chien-chong-dinh-tefal-expertise-c6200672-28cm" title="Chảo chi&#234;n chống d&#237;nh Tefal Expertise C6200672 (28cm)">
                                                        <img class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/large/100/361/971/products/img97c.jpg?v=1564804648177" alt="Chảo chi&#234;n chống d&#237;nh Tefal Expertise C6200672 (28cm)" />
                                                    </a>
                                                    <a class="secondary_img" href="/chao-chien-chong-dinh-tefal-expertise-c6200672-28cm" title="Chảo chi&#234;n chống d&#237;nh Tefal Expertise C6200672 (28cm)">

                                                        <img class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/large/100/361/971/products/img97c.jpg?v=1564804648177" alt="Chảo chi&#234;n chống d&#237;nh Tefal Expertise C6200672 (28cm)" />

                                                    </a>

                                                    <div class="label_product">
                                                        <span class="label_sale"> 10% </span>
                                                    </div>

                                                    <div class="action_links hidden-sm hidden-xs hidden-md">
                                                        <form action="/cart/add" method="post" enctype="multipart/form-data" class="hidden-md variants form-nut-grid form-ajaxtocart" data-id="product-actions-15413412">

                                                            <button title="Hết hàng" type="button" disabled="disabled" class="action cart-button"><i class="fa fa-link" aria-hidden="true"></i> Hết hàng</button>

                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="product_name">
                                                        <h4><a href="/chao-chien-chong-dinh-tefal-expertise-c6200672-28cm" title="Chảo chi&#234;n chống d&#237;nh Tefal Expertise C6200672 (28cm)">Chảo chi&#234;n chống d&#237;nh Tefal Expertise C6200672 (28cm)</a></h4>
                                                    </div>
                                                    <div class="price-container">

                                                        <span class="current_price">746.100₫</span>

                                                        <span class="old_price">829.000₫</span>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="evo-item">

                                            <div class="evo-product-block-item">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="/noi-nhom-chong-dinh-lock-lock-baum-marble-2-tay-cam-nap-thuy-tinh-lbu1202-20cm" title="Nồi Nh&#244;m Chống D&#237;nh Lock&amp;Lock Baum Marble 2 Tay Cầm, Nắp Thủy Tinh LBU1202 (20cm)">
                                                        <img class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/large/100/361/971/products/img24c-dc8f1e0b-df92-457d-8fc6-7573becbd424.jpg?v=1564804501503" alt="Nồi Nh&#244;m Chống D&#237;nh Lock&amp;Lock Baum Marble 2 Tay Cầm, Nắp Thủy Tinh LBU1202 (20cm)" />
                                                    </a>
                                                    <a class="secondary_img" href="/noi-nhom-chong-dinh-lock-lock-baum-marble-2-tay-cam-nap-thuy-tinh-lbu1202-20cm" title="Nồi Nh&#244;m Chống D&#237;nh Lock&amp;Lock Baum Marble 2 Tay Cầm, Nắp Thủy Tinh LBU1202 (20cm)">

                                                        <img class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/large/100/361/971/products/greenpan-black-ceramic-nonstick-12-piece-cookware-set-c.jpg?v=1564804502197" alt="Nồi Nh&#244;m Chống D&#237;nh Lock&amp;Lock Baum Marble 2 Tay Cầm, Nắp Thủy Tinh LBU1202 (20cm)" />

                                                    </a>

                                                    <div class="label_product">
                                                        <span class="label_sale"> 10% </span>
                                                    </div>

                                                    <div class="action_links hidden-sm hidden-xs hidden-md">
                                                        <form action="/cart/add" method="post" enctype="multipart/form-data" class="hidden-md variants form-nut-grid form-ajaxtocart" data-id="product-actions-15413399">

                                                            <input type="hidden" name="variantId" value="26599425" />
                                                            <button type="button" title="Thêm vào giỏ" class="action add_to_cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i> Thêm vào giỏ</button>

                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="product_name">
                                                        <h4><a href="/noi-nhom-chong-dinh-lock-lock-baum-marble-2-tay-cam-nap-thuy-tinh-lbu1202-20cm" title="Nồi Nh&#244;m Chống D&#237;nh Lock&amp;Lock Baum Marble 2 Tay Cầm, Nắp Thủy Tinh LBU1202 (20cm)">Nồi Nh&#244;m Chống D&#237;nh Lock&amp;Lock Baum Marble 2 Tay Cầm, Nắp Thủy Tinh LBU1202 (20cm)</a></h4>
                                                    </div>
                                                    <div class="price-container">

                                                        <span class="current_price">260.100₫</span>

                                                        <span class="old_price">289.000₫</span>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="evo-product-block-item">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="/bo-2-chao-gang-lam-bo-ne-chong-dinh-kem-de-bo-cach-nhiet-dragon" title="Bộ 2 Chảo Gang L&#224;m B&#242; N&#233; Chống D&#237;nh K&#232;m Đế B&#242; C&#225;ch Nhiệt Dragon">
                                                        <img class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/large/100/361/971/products/img5c.jpg?v=1564804348123" alt="Bộ 2 Chảo Gang L&#224;m B&#242; N&#233; Chống D&#237;nh K&#232;m Đế B&#242; C&#225;ch Nhiệt Dragon" />
                                                    </a>
                                                    <a class="secondary_img" href="/bo-2-chao-gang-lam-bo-ne-chong-dinh-kem-de-bo-cach-nhiet-dragon" title="Bộ 2 Chảo Gang L&#224;m B&#242; N&#233; Chống D&#237;nh K&#232;m Đế B&#242; C&#225;ch Nhiệt Dragon">

                                                        <img class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/large/100/361/971/products/lodge-cast-iron-gourmet-essentials-cookware-set-c.jpg?v=1564804348860" alt="Bộ 2 Chảo Gang L&#224;m B&#242; N&#233; Chống D&#237;nh K&#232;m Đế B&#242; C&#225;ch Nhiệt Dragon" />

                                                    </a>

                                                    <div class="label_product">
                                                        <span class="label_sale"> 10% </span>
                                                    </div>

                                                    <div class="action_links hidden-sm hidden-xs hidden-md">
                                                        <form action="/cart/add" method="post" enctype="multipart/form-data" class="hidden-md variants form-nut-grid form-ajaxtocart" data-id="product-actions-15413384">

                                                            <input type="hidden" name="variantId" value="26599387" />
                                                            <button type="button" title="Thêm vào giỏ" class="action add_to_cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i> Thêm vào giỏ</button>

                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="product_name">
                                                        <h4><a href="/bo-2-chao-gang-lam-bo-ne-chong-dinh-kem-de-bo-cach-nhiet-dragon" title="Bộ 2 Chảo Gang L&#224;m B&#242; N&#233; Chống D&#237;nh K&#232;m Đế B&#242; C&#225;ch Nhiệt Dragon">Bộ 2 Chảo Gang L&#224;m B&#242; N&#233; Chống D&#237;nh K&#232;m Đế B&#242; C&#225;ch Nhiệt Dragon</a></h4>
                                                    </div>
                                                    <div class="price-container">

                                                        <span class="current_price">166.500₫</span>

                                                        <span class="old_price">185.000₫</span>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="evo-item">

                                            <div class="evo-product-block-item">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="/chao-bau-sunhouse-swp36a-36cm" title="Chảo Bầu Sunhouse SWP36A (36cm)">
                                                        <img class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/large/100/361/971/products/img68c.jpg?v=1564804211653" alt="Chảo Bầu Sunhouse SWP36A (36cm)" />
                                                    </a>
                                                    <a class="secondary_img" href="/chao-bau-sunhouse-swp36a-36cm" title="Chảo Bầu Sunhouse SWP36A (36cm)">

                                                        <img class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/large/100/361/971/products/img93c.jpg?v=1564804212917" alt="Chảo Bầu Sunhouse SWP36A (36cm)" />

                                                    </a>

                                                    <div class="label_product">
                                                        <span class="label_sale"> 49% </span>
                                                    </div>

                                                    <div class="action_links hidden-sm hidden-xs hidden-md">
                                                        <form action="/cart/add" method="post" enctype="multipart/form-data" class="hidden-md variants form-nut-grid form-ajaxtocart" data-id="product-actions-15413362">

                                                            <input type="hidden" name="variantId" value="26599351" />
                                                            <button type="button" title="Thêm vào giỏ" class="action add_to_cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i> Thêm vào giỏ</button>

                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="product_name">
                                                        <h4><a href="/chao-bau-sunhouse-swp36a-36cm" title="Chảo Bầu Sunhouse SWP36A (36cm)">Chảo Bầu Sunhouse SWP36A (36cm)</a></h4>
                                                    </div>
                                                    <div class="price-container">

                                                        <span class="current_price">280.000₫</span>

                                                        <span class="old_price">550.000₫</span>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="evo-product-block-item">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="/chao-nhom-sau-long-chong-dinh-lock-lock-baum-marble-1-tay-cam-nap-thuy-tinh-lbu1305-30cm" title="Chảo Nh&#244;m S&#226;u L&#242;ng Chống D&#237;nh Lock&amp;Lock Baum Marble 1 Tay Cầm, Nắp Thủy Tinh LBU1305 (30cm)">
                                                        <img class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/large/100/361/971/products/img42c.jpg?v=1564804077950" alt="Chảo Nh&#244;m S&#226;u L&#242;ng Chống D&#237;nh Lock&amp;Lock Baum Marble 1 Tay Cầm, Nắp Thủy Tinh LBU1305 (30cm)" />
                                                    </a>
                                                    <a class="secondary_img" href="/chao-nhom-sau-long-chong-dinh-lock-lock-baum-marble-1-tay-cam-nap-thuy-tinh-lbu1305-30cm" title="Chảo Nh&#244;m S&#226;u L&#242;ng Chống D&#237;nh Lock&amp;Lock Baum Marble 1 Tay Cầm, Nắp Thủy Tinh LBU1305 (30cm)">

                                                        <img class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/large/100/361/971/products/calphalon-elite-nonstick-8-10-fry-pan-set-c-1-7e142f23-c6fa-4e8a-94b0-b3e76e733fa6.jpg?v=1564804079103" alt="Chảo Nh&#244;m S&#226;u L&#242;ng Chống D&#237;nh Lock&amp;Lock Baum Marble 1 Tay Cầm, Nắp Thủy Tinh LBU1305 (30cm)" />

                                                    </a>

                                                    <div class="label_product">
                                                        <span class="label_sale"> 51% </span>
                                                    </div>

                                                    <div class="action_links hidden-sm hidden-xs hidden-md">
                                                        <form action="/cart/add" method="post" enctype="multipart/form-data" class="hidden-md variants form-nut-grid form-ajaxtocart" data-id="product-actions-15413348">

                                                            <input type="hidden" name="variantId" value="26599293" />
                                                            <button type="button" title="Thêm vào giỏ" class="action add_to_cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i> Thêm vào giỏ</button>

                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="product_name">
                                                        <h4><a href="/chao-nhom-sau-long-chong-dinh-lock-lock-baum-marble-1-tay-cam-nap-thuy-tinh-lbu1305-30cm" title="Chảo Nh&#244;m S&#226;u L&#242;ng Chống D&#237;nh Lock&amp;Lock Baum Marble 1 Tay Cầm, Nắp Thủy Tinh LBU1305 (30cm)">Chảo Nh&#244;m S&#226;u L&#242;ng Chống D&#237;nh Lock&amp;Lock Baum Marble 1 Tay Cầm, Nắp Thủy Tinh LBU1305 (30cm)</a></h4>
                                                    </div>
                                                    <div class="price-container">

                                                        <span class="current_price">369.000₫</span>

                                                        <span class="old_price">759.000₫</span>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="evo-item">

                                            <div class="evo-product-block-item">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="/chao-da-chong-dinh-sau-long-f32" title="Chảo đ&#225; chống d&#237;nh s&#226;u l&#242;ng F32">
                                                        <img class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/large/100/361/971/products/img56c.jpg?v=1564803939447" alt="Chảo đ&#225; chống d&#237;nh s&#226;u l&#242;ng F32" />
                                                    </a>
                                                    <a class="secondary_img" href="/chao-da-chong-dinh-sau-long-f32" title="Chảo đ&#225; chống d&#237;nh s&#226;u l&#242;ng F32">

                                                        <img class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/large/100/361/971/products/img56c.jpg?v=1564803939447" alt="Chảo đ&#225; chống d&#237;nh s&#226;u l&#242;ng F32" />

                                                    </a>

                                                    <div class="label_product">
                                                        <span class="label_sale"> 43% </span>
                                                    </div>

                                                    <div class="action_links hidden-sm hidden-xs hidden-md">
                                                        <form action="/cart/add" method="post" enctype="multipart/form-data" class="hidden-md variants form-nut-grid form-ajaxtocart" data-id="product-actions-15413340">

                                                            <input type="hidden" name="variantId" value="26599284" />
                                                            <button type="button" title="Thêm vào giỏ" class="action add_to_cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i> Thêm vào giỏ</button>

                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="product_name">
                                                        <h4><a href="/chao-da-chong-dinh-sau-long-f32" title="Chảo đ&#225; chống d&#237;nh s&#226;u l&#242;ng F32">Chảo đ&#225; chống d&#237;nh s&#226;u l&#242;ng F32</a></h4>
                                                    </div>
                                                    <div class="price-container">

                                                        <span class="current_price">114.000₫</span>

                                                        <span class="old_price">200.000₫</span>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="evo-product-block-item">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="/bo-3-noi-duong-sinh-vanh-tron-minh-long-healthycook-xanh-reu" title="Bộ 3 Nồi Dưỡng Sinh V&#224;nh Tr&#242;n Minh Long Healthycook - Xanh R&#234;u">
                                                        <img class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/large/100/361/971/products/calphalon-elite-nonstick-8-10-fry-pan-set-c-1.jpg?v=1564803797143" alt="Bộ 3 Nồi Dưỡng Sinh V&#224;nh Tr&#242;n Minh Long Healthycook - Xanh R&#234;u" />
                                                    </a>
                                                    <a class="secondary_img" href="/bo-3-noi-duong-sinh-vanh-tron-minh-long-healthycook-xanh-reu" title="Bộ 3 Nồi Dưỡng Sinh V&#224;nh Tr&#242;n Minh Long Healthycook - Xanh R&#234;u">

                                                        <img class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/large/100/361/971/products/calphalon-elite-nonstick-8-10-fry-pan-set-c.jpg?v=1564803797917" alt="Bộ 3 Nồi Dưỡng Sinh V&#224;nh Tr&#242;n Minh Long Healthycook - Xanh R&#234;u" />

                                                    </a>

                                                    <div class="label_product">
                                                        <span class="label_sale"> 5% </span>
                                                    </div>

                                                    <div class="action_links hidden-sm hidden-xs hidden-md">
                                                        <form action="/cart/add" method="post" enctype="multipart/form-data" class="hidden-md variants form-nut-grid form-ajaxtocart" data-id="product-actions-15413322">

                                                            <input type="hidden" name="variantId" value="26599255" />
                                                            <button type="button" title="Thêm vào giỏ" class="action add_to_cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i> Thêm vào giỏ</button>

                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="product_name">
                                                        <h4><a href="/bo-3-noi-duong-sinh-vanh-tron-minh-long-healthycook-xanh-reu" title="Bộ 3 Nồi Dưỡng Sinh V&#224;nh Tr&#242;n Minh Long Healthycook - Xanh R&#234;u">Bộ 3 Nồi Dưỡng Sinh V&#224;nh Tr&#242;n Minh Long Healthycook - Xanh R&#234;u</a></h4>
                                                    </div>
                                                    <div class="price-container">

                                                        <span class="current_price">836.000₫</span>

                                                        <span class="old_price">880.000₫</span>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="evo-item">

                                            <div class="evo-product-block-item">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="/noi-thuy-tinh-luminarc-amberline-trianon-eclipse-3-5l-than-xoan-day-nham" title="Nồi thủy tinh Luminarc Amberline Trianon Eclipse 3.5L th&#226;n xoắn đ&#225;y nh&#225;m">
                                                        <img class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/large/100/361/971/products/img89c.jpg?v=1564803653677" alt="Nồi thủy tinh Luminarc Amberline Trianon Eclipse 3.5L th&#226;n xoắn đ&#225;y nh&#225;m" />
                                                    </a>
                                                    <a class="secondary_img" href="/noi-thuy-tinh-luminarc-amberline-trianon-eclipse-3-5l-than-xoan-day-nham" title="Nồi thủy tinh Luminarc Amberline Trianon Eclipse 3.5L th&#226;n xoắn đ&#225;y nh&#225;m">

                                                        <img class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/large/100/361/971/products/calphalon-elite-nonstick-10-12-fry-pan-set-c.jpg?v=1564803654980" alt="Nồi thủy tinh Luminarc Amberline Trianon Eclipse 3.5L th&#226;n xoắn đ&#225;y nh&#225;m" />

                                                    </a>

                                                    <div class="label_product">
                                                        <span class="label_sale"> 59% </span>
                                                    </div>

                                                    <div class="action_links hidden-sm hidden-xs hidden-md">
                                                        <form action="/cart/add" method="post" enctype="multipart/form-data" class="hidden-md variants form-nut-grid form-ajaxtocart" data-id="product-actions-15413288">

                                                            <input type="hidden" name="variantId" value="26599208" />
                                                            <button type="button" title="Thêm vào giỏ" class="action add_to_cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i> Thêm vào giỏ</button>

                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="product_name">
                                                        <h4><a href="/noi-thuy-tinh-luminarc-amberline-trianon-eclipse-3-5l-than-xoan-day-nham" title="Nồi thủy tinh Luminarc Amberline Trianon Eclipse 3.5L th&#226;n xoắn đ&#225;y nh&#225;m">Nồi thủy tinh Luminarc Amberline Trianon Eclipse 3.5L th&#226;n xoắn đ&#225;y nh&#225;m</a></h4>
                                                    </div>
                                                    <div class="price-container">

                                                        <span class="current_price">650.000₫</span>

                                                        <span class="old_price">1.600.000₫</span>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="evo-product-block-item">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="/noi-thuy-tinh-luminarc-amberline-trianon-eclipse-2-5l-than-xoan-day-nham" title="Nồi thủy tinh Luminarc Amberline Trianon Eclipse 2.5L th&#226;n xoắn đ&#225;y nh&#225;m">
                                                        <img class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/large/100/361/971/products/img40c.jpg?v=1564803504613" alt="Nồi thủy tinh Luminarc Amberline Trianon Eclipse 2.5L th&#226;n xoắn đ&#225;y nh&#225;m" />
                                                    </a>
                                                    <a class="secondary_img" href="/noi-thuy-tinh-luminarc-amberline-trianon-eclipse-2-5l-than-xoan-day-nham" title="Nồi thủy tinh Luminarc Amberline Trianon Eclipse 2.5L th&#226;n xoắn đ&#225;y nh&#225;m">

                                                        <img class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/large/100/361/971/products/img40c.jpg?v=1564803504613" alt="Nồi thủy tinh Luminarc Amberline Trianon Eclipse 2.5L th&#226;n xoắn đ&#225;y nh&#225;m" />

                                                    </a>

                                                    <div class="label_product">
                                                        <span class="label_sale"> 54% </span>
                                                    </div>

                                                    <div class="action_links hidden-sm hidden-xs hidden-md">
                                                        <form action="/cart/add" method="post" enctype="multipart/form-data" class="hidden-md variants form-nut-grid form-ajaxtocart" data-id="product-actions-15413281">

                                                            <input type="hidden" name="variantId" value="26599195" />
                                                            <button type="button" title="Thêm vào giỏ" class="action add_to_cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i> Thêm vào giỏ</button>

                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="product_name">
                                                        <h4><a href="/noi-thuy-tinh-luminarc-amberline-trianon-eclipse-2-5l-than-xoan-day-nham" title="Nồi thủy tinh Luminarc Amberline Trianon Eclipse 2.5L th&#226;n xoắn đ&#225;y nh&#225;m">Nồi thủy tinh Luminarc Amberline Trianon Eclipse 2.5L th&#226;n xoắn đ&#225;y nh&#225;m</a></h4>
                                                    </div>
                                                    <div class="price-container">

                                                        <span class="current_price">550.000₫</span>

                                                        <span class="old_price">1.200.000₫</span>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="evo-item">

                                            <div class="evo-product-block-item">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="/chao-nhom-sau-long-chong-dinh-lock-lock-baum-marble-1-tay-cam-nap-thuy-tinh-lbu1285-28cm" title="Chảo Nh&#244;m S&#226;u L&#242;ng Chống D&#237;nh Lock&amp;Lock Baum Marble 1 Tay Cầm, Nắp Thủy Tinh LBU1285 (28cm)">
                                                        <img class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/large/100/361/971/products/img64c.jpg?v=1564803379000" alt="Chảo Nh&#244;m S&#226;u L&#242;ng Chống D&#237;nh Lock&amp;Lock Baum Marble 1 Tay Cầm, Nắp Thủy Tinh LBU1285 (28cm)" />
                                                    </a>
                                                    <a class="secondary_img" href="/chao-nhom-sau-long-chong-dinh-lock-lock-baum-marble-1-tay-cam-nap-thuy-tinh-lbu1285-28cm" title="Chảo Nh&#244;m S&#226;u L&#242;ng Chống D&#237;nh Lock&amp;Lock Baum Marble 1 Tay Cầm, Nắp Thủy Tinh LBU1285 (28cm)">

                                                        <img class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/large/100/361/971/products/calphalon-premier-space-saving-hard-anodized-nonstick-10-p-c.jpg?v=1564803379897" alt="Chảo Nh&#244;m S&#226;u L&#242;ng Chống D&#237;nh Lock&amp;Lock Baum Marble 1 Tay Cầm, Nắp Thủy Tinh LBU1285 (28cm)" />

                                                    </a>

                                                    <div class="label_product">
                                                        <span class="label_sale"> 51% </span>
                                                    </div>

                                                    <div class="action_links hidden-sm hidden-xs hidden-md">
                                                        <form action="/cart/add" method="post" enctype="multipart/form-data" class="hidden-md variants form-nut-grid form-ajaxtocart" data-id="product-actions-15413273">

                                                            <input type="hidden" name="variantId" value="26599186" />
                                                            <button type="button" title="Thêm vào giỏ" class="action add_to_cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i> Thêm vào giỏ</button>

                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="product_name">
                                                        <h4><a href="/chao-nhom-sau-long-chong-dinh-lock-lock-baum-marble-1-tay-cam-nap-thuy-tinh-lbu1285-28cm" title="Chảo Nh&#244;m S&#226;u L&#242;ng Chống D&#237;nh Lock&amp;Lock Baum Marble 1 Tay Cầm, Nắp Thủy Tinh LBU1285 (28cm)">Chảo Nh&#244;m S&#226;u L&#242;ng Chống D&#237;nh Lock&amp;Lock Baum Marble 1 Tay Cầm, Nắp Thủy Tinh LBU1285 (28cm)</a></h4>
                                                    </div>
                                                    <div class="price-container">

                                                        <span class="current_price">329.000₫</span>

                                                        <span class="old_price">669.000₫</span>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="evo-product-block-item">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="/bo-noi-chao-nhom-vung-kinh-day-tu-kangaroo-kg992m" title="Bộ Nồi Chảo Nh&#244;m Vung K&#237;nh Đ&#225;y Từ Kangaroo KG992M">
                                                        <img class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/large/100/361/971/products/calphalon-elite-nonstick-3-piece-fry-pan-saute-pan-set-c.jpg?v=1564803224680" alt="Bộ Nồi Chảo Nh&#244;m Vung K&#237;nh Đ&#225;y Từ Kangaroo KG992M" />
                                                    </a>
                                                    <a class="secondary_img" href="/bo-noi-chao-nhom-vung-kinh-day-tu-kangaroo-kg992m" title="Bộ Nồi Chảo Nh&#244;m Vung K&#237;nh Đ&#225;y Từ Kangaroo KG992M">

                                                        <img class="lazy" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/large/100/361/971/products/calphalon-elite-nonstick-3-piece-fry-pan-and-saute-pan-set-c-1.jpg?v=1564803225437" alt="Bộ Nồi Chảo Nh&#244;m Vung K&#237;nh Đ&#225;y Từ Kangaroo KG992M" />

                                                    </a>

                                                    <div class="label_product">
                                                        <span class="label_sale"> 70% </span>
                                                    </div>

                                                    <div class="action_links hidden-sm hidden-xs hidden-md">
                                                        <form action="/cart/add" method="post" enctype="multipart/form-data" class="hidden-md variants form-nut-grid form-ajaxtocart" data-id="product-actions-15413262">

                                                            <input type="hidden" name="variantId" value="26599165" />
                                                            <button type="button" title="Thêm vào giỏ" class="action add_to_cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i> Thêm vào giỏ</button>

                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="product_name">
                                                        <h4><a href="/bo-noi-chao-nhom-vung-kinh-day-tu-kangaroo-kg992m" title="Bộ Nồi Chảo Nh&#244;m Vung K&#237;nh Đ&#225;y Từ Kangaroo KG992M">Bộ Nồi Chảo Nh&#244;m Vung K&#237;nh Đ&#225;y Từ Kangaroo KG992M</a></h4>
                                                    </div>
                                                    <div class="price-container">

                                                        <span class="current_price">935.000₫</span>

                                                        <span class="old_price">3.100.000₫</span>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        @if(!empty($cates))
        @foreach($cates as $key => $cate)

            <home-list-product-component :cate="{{ json_encode($cate) }}" :index="{{ $key }}"></home-list-product-component>

        @endforeach
        @endif

        <section class="awe-section-7">
            <div class="section_three_banner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="slide-collection">

                                <div class="item">
                                    <a href="#" title="Evo Cook" class="single_image_effect">
                                        <img class="lazy img-responsive center-block" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/100/361/971/themes/729792/assets/evo_banner_two_1.jpg?1572918753291" alt="Evo Cook" />
                                    </a>
                                </div>

                                <div class="item">
                                    <a href="#" title="Evo Cook" class="single_image_effect">
                                        <img class="lazy img-responsive center-block" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/100/361/971/themes/729792/assets/evo_banner_two_2.jpg?1572918753291" alt="Evo Cook" />
                                    </a>
                                </div>

                                <div class="item">
                                    <a href="#" title="Evo Cook" class="single_image_effect">
                                        <img class="lazy img-responsive center-block" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/100/361/971/themes/729792/assets/evo_banner_two_3.jpg?1572918753291" alt="Evo Cook" />
                                    </a>
                                </div>

                                <div class="item">
                                    <a href="#" title="Evo Cook" class="single_image_effect">
                                        <img class="lazy img-responsive center-block" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/100/361/971/themes/729792/assets/evo_banner_two_4.jpg?1572918753291" alt="Evo Cook" />
                                    </a>
                                </div>

                                <div class="item">
                                    <a href="#" title="Evo Cook" class="single_image_effect">
                                        <img class="lazy img-responsive center-block" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/100/361/971/themes/729792/assets/evo_banner_two_5.jpg?1572918753291" alt="Evo Cook" />
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="awe-section-8">

            <div class="section_blogs">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="evo-index-block-blogs">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="new_title">
                                            <h3><a href="tin-tuc" title="Kinh nghiệm hay">Kinh nghiệm hay</a></h3>
                                        </div>
                                    </div>

                                    <div class="col-md-5 col-md-push-7">
                                        <div class="big-news">

                                            <div class="news-items">
                                                <a href="/huong-dan-cach-lam-mon-vit-nau-chao-ngon-va-don-gian-tai-nha" title="Hướng dẫn c&#225;ch l&#224;m m&#243;n vịt nấu chao ngon v&#224; đơn giản tại nh&#224;" class="clearfix evo-item-blogs">
                                                    <div class="evo-article-image">

                                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/large/100/361/971/articles/lau-chao-vit.jpg?v=1564654454373" alt="Hướng dẫn c&#225;ch l&#224;m m&#243;n vịt nấu chao ngon v&#224; đơn giản tại nh&#224;" class="lazy img-responsive center-block" />

                                                    </div>
                                                    <div class="evo-article-content">
                                                        <h3>Hướng dẫn c&#225;ch l&#224;m m&#243;n vịt nấu chao ngon v&#224; đơn giản tại nh&#224;</h3>
                                                        <p> Vịt nấu chao là sự kết hợp đầy tinh tế của thịt vịt, vị thơm của chao, bùi ngậy của khoai môn cùng nhiều l...</p>
                                                    </div>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-7 col-md-pull-5">
                                        <div class="list-news">

                                            <div class="news-items">
                                                <a href="/huong-dan-cach-lam-mon-vit-nau-chao-ngon-va-don-gian-tai-nha" title="Hướng dẫn c&#225;ch l&#224;m m&#243;n vịt nấu chao ngon v&#224; đơn giản tại nh&#224;" class="clearfix evo-item-blogs">
                                                    <div class="evo-article-image">

                                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/large/100/361/971/articles/lau-chao-vit.jpg?v=1564654454373" alt="Hướng dẫn c&#225;ch l&#224;m m&#243;n vịt nấu chao ngon v&#224; đơn giản tại nh&#224;" class="lazy img-responsive center-block" />

                                                    </div>
                                                    <div class="evo-article-content">
                                                        <h3>Hướng dẫn c&#225;ch l&#224;m m&#243;n vịt nấu chao ngon v&#224; đơn giản tại nh&#224;</h3>
                                                        <p> Vịt nấu chao là sự kết hợp đầy tinh tế của thịt vịt, vị thơm của chao, bùi ngậy của khoai môn cùng nhiều l...</p>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="news-items">
                                                <a href="/vo-sau-rieng-co-an-duoc-khong-cac-mon-an-che-bien-tu-vo-sau-rieng" title="Vỏ sầu ri&#234;ng c&#243; ăn được kh&#244;ng? C&#225;c m&#243;n ăn chế biến từ vỏ sầu ri&#234;ng" class="clearfix evo-item-blogs">
                                                    <div class="evo-article-image">

                                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/large/100/361/971/articles/sau-rieng.jpg?v=1564652876100" alt="Vỏ sầu ri&#234;ng c&#243; ăn được kh&#244;ng? C&#225;c m&#243;n ăn chế biến từ vỏ sầu ri&#234;ng" class="lazy img-responsive center-block" />

                                                    </div>
                                                    <div class="evo-article-content">
                                                        <h3>Vỏ sầu ri&#234;ng c&#243; ăn được kh&#244;ng? C&#225;c m&#243;n ăn chế biến từ vỏ sầu ri&#234;ng</h3>
                                                        <p> Rất nhiều người sau khi ăn sầu riêng xong thường vứt phần vỏ vốn đầy gai chi chít đi. Tuy nhiên, phần vỏ n...</p>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="news-items">
                                                <a href="/chi-tiet-cach-lam-ca-phao-muoi-kim-chi-chua-cay-gion-tan-cuc-ngon" title="Chi tiết c&#225;ch l&#224;m c&#224; ph&#225;o muối kim chi chua cay, gi&#242;n tan cực ngon" class="clearfix evo-item-blogs">
                                                    <div class="evo-article-image">

                                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/large/100/361/971/articles/ca-muoi-chua-ngot.jpg?v=1564652798857" alt="Chi tiết c&#225;ch l&#224;m c&#224; ph&#225;o muối kim chi chua cay, gi&#242;n tan cực ngon" class="lazy img-responsive center-block" />

                                                    </div>
                                                    <div class="evo-article-content">
                                                        <h3>Chi tiết c&#225;ch l&#224;m c&#224; ph&#225;o muối kim chi chua cay, gi&#242;n tan cực ngon</h3>
                                                        <p> Cà pháo muối kim chi chua cay, giòn tan, ăn kèm với thịt luộc hoặc cơm là ngon “hết sảy”. Nếu chưa biết cá...</p>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="news-items">
                                                <a href="/4-cach-lam-sinh-to-bo-sua-ngon-moi-la-bo-duong-dep-da-don-gian" title="4 c&#225;ch l&#224;m sinh tố bơ sữa ngon, mới lạ, bổ dưỡng, đẹp da đơn giản" class="clearfix evo-item-blogs">
                                                    <div class="evo-article-image">

                                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/large/100/361/971/articles/5-cach-lam-sinh-to-bo-thom-ngon-cho-be-an-dam2.jpg?v=1564540025433" alt="4 c&#225;ch l&#224;m sinh tố bơ sữa ngon, mới lạ, bổ dưỡng, đẹp da đơn giản" class="lazy img-responsive center-block" />

                                                    </div>
                                                    <div class="evo-article-content">
                                                        <h3>4 c&#225;ch l&#224;m sinh tố bơ sữa ngon, mới lạ, bổ dưỡng, đẹp da đơn giản</h3>
                                                        <p> Sinh tố bơ rất được chị em yêu thích bởi vị béo ngậy cùng mùi thơm đặc trưng. Bên cạnh đó, bơ còn có tác d...</p>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="news-items">
                                                <a href="/huong-dan-cach-nau-com-gao-lut-ngon-bang-noi-com-dien-va-noi-com-thuong" title="Hướng dẫn c&#225;ch nấu cơm gạo lứt ngon bằng nồi cơm điện v&#224; nồi cơm thường" class="clearfix evo-item-blogs">
                                                    <div class="evo-article-image">

                                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="//bizweb.dktcdn.net/thumb/large/100/361/971/articles/tac-dung-cua-gao-lut-muoi-me-hanhphuccuame-3.jpg?v=1564539920880" alt="Hướng dẫn c&#225;ch nấu cơm gạo lứt ngon bằng nồi cơm điện v&#224; nồi cơm thường" class="lazy img-responsive center-block" />

                                                    </div>
                                                    <div class="evo-article-content">
                                                        <h3>Hướng dẫn c&#225;ch nấu cơm gạo lứt ngon bằng nồi cơm điện v&#224; nồi cơm thường</h3>
                                                        <p> Gạo lứt (gạo lật) là loại gạo chỉ xay bỏ lớp vỏ, chưa bóc lớp cám gạo, vì vậy vẫn còn chứa rất nhiều thành...</p>
                                                    </div>
                                                </a>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <popup-cart-component></popup-cart-component>
    </div>
@endsection

@push('header_js')
    <script src="{{asset('frontend/js/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('frontend/js/option-selectors.js')}}" type="text/javascript"></script>
    <script src="{{asset('frontend/js/slick.js')}}" type="text/javascript"></script>
    <script src="{{asset('frontend/js/evo-index-js.js')}}" type="text/javascript"></script>
@endpush

@push('js')

@endpush
