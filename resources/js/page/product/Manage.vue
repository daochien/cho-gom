<template>
    <div>
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                            <li class="breadcrumb-item active">Starter</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Danh mục</h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <div class="row">
                        <div class="col-lg-8">
                            <form class="form-inline">
                                <div class="form-group">
                                    <label for="inputPassword2" class="sr-only">Search</label>
                                    <input type="search" class="form-control" id="inputPassword2" placeholder="Search...">
                                </div>
                                <div class="form-group mx-sm-3">
                                    <label for="status-select" class="mr-2">Sort By</label>
                                    <select class="custom-select" id="status-select">
                                        <option selected="">All</option>
                                        <option value="1">Popular</option>
                                        <option value="2">Price Low</option>
                                        <option value="3">Price High</option>
                                        <option value="4">Sold Out</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-4">
                            <div class="text-lg-right mt-3 mt-lg-0">
                                <button type="button" class="btn btn-success waves-effect waves-light mr-1"><i class="mdi mdi-settings"></i></button>
                                <router-link :to="{name: 'CreateProduct'}" class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-plus-circle mr-1"></i> Thêm mới</router-link>
                            </div>
                        </div><!-- end col-->
                    </div> <!-- end row -->
                </div> <!-- end card-box -->
            </div> <!-- end col-->
        </div>
        <div class="row">
            <div class="col-md-6 col-xl-3" v-for="(item, index) in products" :key="index">
                <div class="card-box product-box">

                    <div class="product-action">
                        <a href="javascript: void(0);" class="btn btn-success btn-xs waves-effect waves-light"><i class="mdi mdi-pencil"></i></a>
                        <a href="javascript: void(0);" class="btn btn-danger btn-xs waves-effect waves-light"><i class="mdi mdi-close"></i></a>
                    </div>

                    <div>
                        <img v-for="(avatar, key) in JSON.parse(item.avatars)" :key="key" v-show="key == 0" :src="avatar" alt="product-pic" class="img-fluid" />
                    </div>

                    <div class="product-info">
                        <div class="row align-items-center">
                            <div class="col">
                                <h5 class="font-16 mt-0 sp-line-1"><a href="ecommerce-prduct-detail.html" class="text-dark">Adirondack Chair</a> </h5>
                                <div class="text-warning mb-2 font-13">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h5 class="m-0"> <span class="text-muted"> Stocks : 98 pcs</span></h5>
                            </div>
                            <div class="col-auto">
                                <div class="product-price-tag">
                                    $39
                                </div>
                            </div>
                        </div> <!-- end row -->
                    </div> <!-- end product info-->
                </div> <!-- end card-box-->
            </div> <!-- end col-->
            
        </div>
        <div class="row">
            <div class="col-12">
                <ul class="pagination pagination-rounded justify-content-end mb-3">
                    <li class="page-item">
                        <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                            <span aria-hidden="true">«</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="javascript: void(0);">1</a></li>
                    <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                    <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a></li>
                    <li class="page-item"><a class="page-link" href="javascript: void(0);">4</a></li>
                    <li class="page-item"><a class="page-link" href="javascript: void(0);">5</a></li>
                    <li class="page-item">
                        <a class="page-link" href="javascript: void(0);" aria-label="Next">
                            <span aria-hidden="true">»</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </div> <!-- end col-->
        </div>
    </div>    
</template>
<script>
import {listProduct} from '@/api/product.js';

export default {
    data() {
        return {
            products: []
        }
    },
    methods: {
        //lay danh sach san pham
        async getProducts() {
            try {
                let data = await listProduct();
                this.products = data.data;
            } catch(err) {
                console.log(err);
            }
        }
    },
    created() {
        this.getProducts();
    }    
}
</script>
<style lang="scss" scoped>

</style>