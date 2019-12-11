<template>
    <div class="shopping-cart">
        <div class="visible-md visible-lg">
            <div class="shopping-cart-table">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="lbl-shopping-cart lbl-shopping-cart-gio-hang">Giỏ hàng <span>(<span class="count_item_pr">{{ totalQuantity }}</span> sản phẩm)</span></h1>
                    </div>
                </div>
                <div class="row">

                    <div class="col-main cart_desktop_page cart-page">
                        <form id="shopping-cart" action="/cart" method="post" novalidate="" class="has-validation-callback">
                            <div class="cart page_cart cart_des_page hidden-xs-down" v-if="getCarts.length > 0">
                                <div class="col-xs-9 cart-col-1">
                                    <div class="cart-tbody">
                                        <div class="row shopping-cart-item" v-for="(cart, index) in getCarts" :key="index">
                                            <div class="col-xs-3 img-thumnail-custom">
                                                <p class="image">
                                                    <a href="/chao-bau-sunhouse-swp36a-36cm" :title="cart.name" target="_blank">
                                                        <img class="img-responsive" :src="cart.avatar" :alt="cart.name">
                                                    </a>
                                                </p>
                                            </div>
                                            <div class="col-right col-xs-9">
                                                <div class="box-info-product">
                                                    <p class="name"><a href="/chao-bau-sunhouse-swp36a-36cm" :title="cart.name" target="_blank">{{ cart.name }}</a></p>
                                                    <p class="seller-by hidden" style="display: none;">Default Title</p>
                                                    <p class="action">
                                                        <a href="javascript:;" class="btn btn-link btn-item-delete remove-item-cart" title="Xóa" @click="removeItem(cart.product_id)">Xóa</a>
                                                    </p>
                                                </div>
                                                <div class="box-price">
                                                    <p class="price pricechange">{{ cart.price | numberFormat }}</p>
                                                </div>
                                                <div class="quantity-block">
                                                    <div class="input-group bootstrap-touchspin">
                                                        <div class="input-group-btn">
                                                            <input class="variantID" type="hidden" name="variantId" >
                                                            <button class="increase_pop items-count btn-plus btn btn-default bootstrap-touchspin-up" type="button"  @click="ascending(cart)">+</button>
                                                            <input type="text" disabled="" class="form-control quantity-r2 quantity js-quantity-product input-text number-sidebar input_pop input_pop qtyItem26599351" name="Lines" size="4" :value="cart.quantity">
                                                            <button class="reduced_pop items-count btn-minus btn btn-default bootstrap-touchspin-down" type="button" @click="decrease(cart)">–</button>
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
                                                <p class="list-info-price"><span>Tạm tính: </span>
                                                    <strong class="totals_price price _text-right text_color_right1">{{ totalPrice | numberFormat }}</strong>
                                                </p>
                                            </div>
                                            <div class="box-style fee">
                                                <div class="total2 clearfix"><span class="text-label">Thành tiền: </span>
                                                    <div class="amount">
                                                        <p><strong class="totals_price">{{ totalPrice | numberFormat }}</strong></p>
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
                        <div class="cart-empty" v-if="getCarts.length == 0">
                            <span class="empty-icon">
                                <i class="ico ico-cart"></i>
                            </span>
                            <div class="btn-cart-empty">
                                <a class="btn btn-default" href="/" title="Tiếp tục mua sắms">Tiếp tục lựa chọn</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="visible-sm visible-xs">

            <div class="cart-mobile" v-if="getCarts.length > 0">
                <form action="/cart" method="post" class="margin-bottom-0">
                    <div class="header-cart">
                        <div class="title-cart clearfix">
                            <h3>Giỏ hàng của bạn</h3>
                        </div>
                    </div>
                    <div class="header-cart-content">
                        <div class="cart_page_mobile content-product-list">

                            <div class="item-product item" v-for="(cart, index) in getCarts" :key="index">
                                <div class="item-product-cart-mobile">
                                    <a class="product-images1" href="/chao-bau-sunhouse-swp36a-36cm?variantid=26599351" :title="cart.name">

                                        <img width="80" height="150" :src="cart.avatar" :alt="cart.name" />

                                    </a>
                                </div>
                                <div class="title-product-cart-mobile">
                                    <h3><a href="/chao-bau-sunhouse-swp36a-36cm?variantid=26599351" :title="cart.name">{{ cart.name }}</a></h3>
                                    <p>Giá: <span>{{ cart.price | numberFormat }}</span></p>
                                </div>
                                <div class="select-item-qty-mobile">
                                    <div class="txt_center">
                                        <input class="variantID" type="hidden" name="variantId" value="1">
                                        <button class="reduced items-count btn-minus" type="button" @click="decrease(cart)">–</button>
                                        <input type="text" maxlength="12" min="0" class="input-text number-sidebar qtyMobile1" id="qtyMobile1" name="Lines" size="4" :value="cart.quantity">
                                        <button class="increase items-count btn-plus" type="button" @click="ascending(cart)">+</button>
                                    </div>
                                    <a class="button remove-item remove-item-cart" @click="removeItem(cart.product_id)">Xoá</a>
                                </div>
                            </div>

                        </div>
                        <div class="header-cart-price">
                            <div class="title-cart ">
                                <h3 class="text-xs-left">Tổng tiền</h3>
                                <a class="text-xs-right totals_price_mobile">{{ totalPrice | numberFormat }}</a>
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

            <div class="cart-empty" v-else>
                <span class="empty-icon"><i class="ico ico-cart"></i></span>
                <div class="btn-cart-empty">
                    <a class="btn btn-default" href="/" title="Tiếp tục mua sắm">Tiếp tục mua hàng</a>
                </div>
            </div>
        </div>
    </div>    
</template>
<script>
import { mapGetters, mapActions } from 'vuex';
export default {
    data() {
        return {

        }
    },
    computed: {
        ...mapGetters('cart', [
            'getCarts',
            'totalPrice',
            'totalQuantity'
        ])
    },
    methods: {
        ...mapActions('cart', [
            'removeItemCart'
        ]),
        removeItem(product_id) {
            this.removeItemCart(product_id);
        },
        decrease(cart) {
            if(cart.quantity > 1) {
                cart.quantity--;
            }
        },
        ascending(cart) {
            if(cart.quantity < 5) {
                cart.quantity++;
            }
        }
    }
}
</script>
<style lang="scss" scoped>

</style>