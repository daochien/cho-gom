<template>
    <div class="evo-cart mini-cart">
        <a href="/cart" title="Giỏ hàng" rel="nofollow">
            <svg viewBox="0 0 100 100" data-radium="true" style="width: 25px;">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g transform="translate(-286.000000, -515.000000)" fill="#fff">
                        <path d="M374.302082,541.184324 C374.044039,539.461671 372.581799,538.255814 370.861517,538.255814 L351.078273,538.255814 L351.078273,530.159345 C351.078273,521.804479 344.283158,515 335.93979,515 C327.596422,515 320.801307,521.804479 320.801307,530.159345 L320.801307,538.255814 L301.018063,538.255814 C299.297781,538.255814 297.835541,539.461671 297.577499,541.184324 L286.051608,610.951766 C285.87958,611.985357 286.137623,613.018949 286.825735,613.794143 C287.513848,614.569337 288.460003,615 289.492173,615 L382.387408,615 L382.473422,615 C384.451746,615 386,613.449612 386,611.468562 C386,611.037898 385.913986,610.693368 385.827972,610.348837 L374.302082,541.184324 L374.302082,541.184324 Z M327.854464,530.159345 C327.854464,525.680448 331.467057,522.062877 335.93979,522.062877 C340.412524,522.062877 344.025116,525.680448 344.025116,530.159345 L344.025116,538.255814 L327.854464,538.255814 L327.854464,530.159345 L327.854464,530.159345 Z M293.62085,608.023256 L304.028557,545.318691 L320.801307,545.318691 L320.801307,565.043066 C320.801307,567.024117 322.349561,568.574505 324.327886,568.574505 C326.30621,568.574505 327.854464,567.024117 327.854464,565.043066 L327.854464,545.318691 L344.025116,545.318691 L344.025116,565.043066 C344.025116,567.024117 345.57337,568.574505 347.551694,568.574505 C349.530019,568.574505 351.078273,567.024117 351.078273,565.043066 L351.078273,545.318691 L367.851024,545.318691 L378.25873,608.023256 L293.62085,608.023256 L293.62085,608.023256 Z"></path>
                    </g>
                </g>
            </svg>
            <span class="count_item_pr" v-show="getCarts.length > 0">
                {{ getCarts.length }}
            </span>
        </a>
        <div class="top-cart-content" v-if="getCarts.length > 0">
            <ul id="cart-sidebar" class="mini-products-list count_li">
                <ul class="list-item-cart">
                    <li class="item productid-26599351" v-for="(cart, index) in getCarts" :key="index">
                        <a class="product-image" href="/chao-bau-sunhouse-swp36a-36cm" :title="cart.name">
                            <img :alt="cart.name" :src="cart.avatar" width="80">
                        </a>
                        <div class="detail-item">
                            <div class="product-details">
                                <a href="javascript:;" data-id="26599351" title="Xóa" class="remove-item-cart fa fa-remove">&nbsp;</a>
                                <p class="product-name">
                                    <a href="/chao-bau-sunhouse-swp36a-36cm" :title="cart.name">{{ cart.name }}</a>
                                </p>
                            </div>
                            <div class="product-details-bottom">
                                <span class="price pricechange">{{ cart.price | numberFormat }}</span>
                                <div class="quantity-select">
                                    <input class="variantID" type="hidden" name="variantId" value="26599351">
                                    <button  class="reduced items-count btn-minus" type="button" >–</button>
                                    <input type="text" class="input-text number-sidebar" :value="cart.quantity">
                                    <button class="increase items-count btn-plus" type="button">+</button>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div>
                    <div class="top-subtotal">Tổng cộng: <span class="price">{{ totalPrice | numberFormat }}</span></div>
                </div>
                <div>
                    <div class="actions clearfix">
                        <a href="/checkout" class="btn btn-gray btn-checkout" title="Thanh toán"><span>Thanh toán</span></a>
                        <a href="/cart" class="view-cart btn btn-white margin-left-5" title="Giỏ hàng"><span>Giỏ hàng</span></a>
                    </div>
                </div>
            </ul>
        </div>
    </div>
</template>
<script>
import { mapGetters } from 'vuex'
export default {
    data() {
        return {

        }
    },
    computed: {
        ...mapGetters('cart', [
            'getCarts',
            'totalPrice'
        ])
    }
}
</script>
