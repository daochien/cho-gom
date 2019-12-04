<template>
    <div>
        <section class="awe-section-cate" v-for="(cate, index) in cates" :key="index">
            <div class="section_san_pham">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="evo-index-block-product">
                                <div class="titlecp clearfix">
                                    <h3><a href="san-pham-moi" :title="cate.name">{{ cate.name }}</a></h3>
                                    <span class="hidden-md hidden-lg hidden-sm button_show_tab">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    </span>
                                </div>
                                <div class="evo-index-product-contain">

                                    <div class="evo-block-product">
                                        <product-component :cate="cate"></product-component>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>
<script>
import ProductComponent from '@/components/font-end/ProductComponent';
import axios from 'axios';
export default {
    components: {
        ProductComponent
    },
    props: {
        cates: Array,
    },
    data() {
        return {
            products: Array
        }
    },
    methods: {
        reloadSlick() {

        }
    },
    mounted() {

    },
    updated() {
        console.log($('.'));
        $('.evo-block-product').slick({
                dots: true,
                arrows: false,
                infinite: false,
                speed: 300,
                slidesToShow: 5,
                slidesToScroll: 5,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 5,
                            slidesToScroll: 5
                        }
                    },
                    {
                        breakpoint: 991,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3
                        }
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    }
                ]
            });
    }
}
</script>
<style>

</style>
