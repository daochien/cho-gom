<template>    
    <div id="popup-cart" class="modal fade in" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" data-backdrop="false" aria-label="Close" style="position: relative; z-index: 9;"><span aria-hidden="true">×</span></button>
                <div class="row-noGutter">
                    <div class="modal-left">
                        <h3 class="title"><i class="fa fa-check"></i> Sản phẩm vừa được thêm <span class="hidden-xs">vào giỏ hàng</span></h3>
                        <div class="modal-body">
                            <div class="media active">
                                <p class="addpass hidden">26599503</p>
                                <div class="media-left thumb_img">
                                    <div class="thumb-1x1">
                                        <img :src="getLastItem.avatar" :alt="getLastItem.name"></div>
                                </div>
                                <div class="media-body body_content">
                                    <div class="product-title">{{ getLastItem.name }}</div>
                                    <div class="product-new-price">
                                        <span class="price pricechange">{{ getLastItem.price | numberFormat }}</span>
                                    </div>
                                    <div class="variant_title"><span></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-right">
                        <h4 class="title right_title">
                            <a href="/cart"><i class="fa fa-caret-right"></i> Giỏ hàng hiện có (<span class="cart-popup-count">{{ totalQuantity }}</span>) sản phẩm </a>
                        </h4>
                        <a title="Tiến hành thanh toán" href="/checkout" class="btn btn-primary checkout_button btn-full">Tiến hành thanh toán <i class="fa fa-arrow-right"></i></a>
                    </div>
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
            'totalQuantity',
            'getLastItem'
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
    },
    
}
</script>