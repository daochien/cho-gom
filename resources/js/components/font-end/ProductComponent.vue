<template>
    <div class="evo-product-block-item">
        <div class="product_thumb">
            <a :class="[index == 0 ? 'primary_img' : 'secondary_img']" href="/chao-chien-chong-dinh-tefal-expertise-c6200672-28cm" :title="product.name" v-for="(avatar, index) in product.avatars" :key="index">
                <img class="lazy"
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                    :data-src="avatar"
                    :alt="product.name" />
            </a>


            <div class="label_product">
                <span class="label_sale"> 10% </span>
            </div>

            <div class="action_links hidden-sm hidden-xs hidden-md">
                <form action="/cart/add" method="post" enctype="multipart/form-data" class="hidden-md variants form-nut-grid form-ajaxtocart" data-id="product-actions-15413412">
                    <input type="hidden" name="variantId" value="26599425" />
                    <button v-if="product.status & 4" type="button" title="Thêm vào giỏ" class="action add_to_cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i> Thêm vào giỏ</button>
                    <button v-else title="Hết hàng" type="button" disabled="disabled" class="action cart-button"><i class="fa fa-link" aria-hidden="true"></i> Hết hàng</button>

                </form>
            </div>
        </div>
        <div class="product_content">
            <div class="product_name">
                <h4><a href="/chao-chien-chong-dinh-tefal-expertise-c6200672-28cm" :title="product.name">{{ product.name | limitString }}</a></h4>
            </div>
            <div class="price-container">

                <span class="current_price">746.100₫</span>

                <span class="old_price">829.000₫</span>

            </div>
        </div>
    </div>
</template>
<script>
import axios from 'axios';
export default {
    props: {
        product: Object
    },
    data() {
        return {

        }
    },
    methods: {

    },
    mounted() {

    }
}
</script>
<style>

</style>
