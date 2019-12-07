<template>
    <section class="products-view products-view-grid">
        <div class="col-xs-6 col-sm-4 col-md-15 col-lg-15 no-padding" v-for="(product, index) in products" :key="index">
            <item-product :product="product"></item-product>
        </div>
    </section>
</template>
<script>
import ItemProduct from '@/components/font-end/home/ProductComponent.vue';
import axios from 'axios';
export default {
    components: {
        ItemProduct
    },
    props: {
        cate: Object
    },
    data() {
        return {
            products: Array
        }
    },
    mounted() {

        this.getProduct();
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
                    // this.isShow = true;
                    this.products = data.data;
                    this.reloadImage();
                }

            }).catch((error) => {
                console.log(error);
            });
        }
    }
}
</script>
<style lang="scss" scoped>

</style>
