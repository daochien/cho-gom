<template>
    <div class="evo-product-block-item">
        <div class="product_thumb">
            <a :class="[index == 0 ? 'primary_img' : 'secondary_img']" href="/chao-chien-chong-dinh-tefal-expertise-c6200672-28cm" :title="product.name" v-for="(avatar, index) in product.avatars" :key="index">
                <img class="lazy"
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                    :data-src="avatar"
                    :alt="product.name" />
            </a>


            <div class="label_product" v-if="caculatorPrice.status">
                <span class="label_sale"> {{ caculatorPrice.percent }} </span>
            </div>

            <div class="action_links hidden-sm hidden-xs hidden-md">
                <form action="/cart/add" method="post" enctype="multipart/form-data" class="hidden-md variants form-nut-grid form-ajaxtocart" data-id="product-actions-15413412">
                    <input type="hidden" name="variantId" value="26599425" />
                    <button v-if="product.status & 4" type="button" title="Thêm vào giỏ" class="action add_to_cart" @click="addCart(product)">
                        <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                        Thêm vào giỏ
                    </button>
                    <button v-else title="Hết hàng" type="button" disabled="disabled" class="action cart-button">
                        <i class="fa fa-link" aria-hidden="true"></i>
                        Hết hàng
                    </button>
                </form>
            </div>
        </div>
        <div class="product_content">
            <div class="product_name">
                <h4><a href="/chao-chien-chong-dinh-tefal-expertise-c6200672-28cm" :title="product.name">{{ product.name | limitString }}</a></h4>
            </div>
            <div class="price-container" v-if="caculatorPrice.status">

                <span class="current_price">{{ caculatorPrice.currentPrice | numberFormat }}</span>

                <span class="old_price">{{ caculatorPrice.oldPrice | numberFormat }}</span>

            </div>

            <div class="price-container" v-else>
                <span class="current_price">{{ caculatorPrice.oldPrice | numberFormat }}</span>
            </div>
        </div>
    </div>
</template>
<script>
import axios from 'axios';
import { mapActions } from 'vuex';
export default {
    props: {
        product: Object
    },
    data() {
        return {

        }
    },
    computed: {
        caculatorPrice() {
            if(this.product.is_discount) {
                let dateStart = new Date(this.product.discount.date_start);
                let dateEnd = new Date(this.product.discount.date_end);
                var todaysDate = new Date();
                if(dateStart > todaysDate) {
                    return {
                        status: false,
                        percent: '',
                        oldPrice: this.product.price,
                        currentPrice: this.product.price
                    }
                } else {
                    if(dateEnd < todaysDate) {
                        return {
                            status: false,
                            percent: '',
                            oldPrice: this.product.price,
                            currentPrice: this.product.price
                        }
                    } else {
                        if(this.product.discount.type === 'percent') {
                            let valDiscount = (parseInt(this.product.discount.value) * parseInt(this.product.price)) / 100;
                            return {
                                status: true,
                                percent: this.product.discount.value + '%',
                                oldPrice: this.product.price,
                                currentPrice: parseInt(this.product.price) - parseInt(valDiscount)
                            }
                        } else if(this.product.discount.type === 'direct') {
                            let lableDiscount = Math.ceil((parseInt(this.product.discount.value) / parseInt(this.product.price)) * 100);
                            return {
                                status: true,
                                percent: lableDiscount + '%',
                                oldPrice: this.product.price,
                                currentPrice: parseInt(this.product.price) - parseInt(this.product.discount.value)
                            }
                        } else {
                            return {
                                status: false,
                                percent: '',
                                oldPrice: this.product.price,
                                currentPrice: this.product.price
                            }
                        }
                    }
                }
            } else {
                return {
                    status: false,
                    percent: '',
                    oldPrice: this.product.price,
                    currentPrice: this.product.price
                }
            }
        }
    },
    methods: {
        ...mapActions('cart', [
            'addToCart'
        ]),
        addCart(item) {
            let data = {
                name: item.name,
                product_id: item.product_id,
                alias: item.alias,
                quantity: 1,
                avatar: item.avatars[0],
                price: this.caculatorPrice.currentPrice
            }
            this.addToCart(data);
        },

    },
    mounted() {
    }
}
</script>
<style>

</style>
