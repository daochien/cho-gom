<template>
    <div>
        <section :class="'awe-section-cate-'+index" v-if="isShow">
            <div class="section_san_pham">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="evo-index-block-product">
                                <div class="titlecp clearfix">
                                    <h3><a :href="'/danh-muc/'+cate.alias+'.'+cate.cate_id" :title="cate.name">{{ cate.name }}</a></h3>
                                    <span class="hidden-md hidden-lg hidden-sm button_show_tab">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    </span>
                                </div>
                                <div class="evo-index-product-contain">

                                    <div class="evo-block-product">
                                        <product-component v-for="(product, key) in products" :key="key" :product="product"></product-component>
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
import ProductComponent from '@/components/font-end/home/ProductComponent';
import axios from 'axios';
export default {
    components: {
        ProductComponent
    },
    props: {
        cate: Object,
        index: Number
    },
    data() {
        return {
            products: Array,
            isShow: false
        }
    },
    methods: {
        reloadImage() {
            this.$nextTick(() => {
                this.myLazyLoad = new LazyLoad({
                    elements_selector: ".lazy",
                    load_delay: 500,
                    threshold: 0
                });
                this.myLazyLoad.update();
                $(this.$el).find('.evo-block-product').slick({
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
            });

        },
        getProduct() {
            let url = 'https://chogom-dev.com/api/products?limit=10&cate_id='+this.cate.cate_id;
            axios.get(url).then(({data}) => {
                if(data.data.length > 0) {
                    this.isShow = true;
                    this.products = data.data;
                    this.reloadImage();
                }

            }).catch((error) => {
                console.log(error);
            });
        }

    },
    created() {

    },
    mounted() {
        this.getProduct();

    },
    updated() {
    }
}
</script>
<style>

</style>
