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
                    <h4 class="page-title">Sản phẩm</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mb-2">
                <a href="#custom-modal" class="btn btn-success waves-effect waves-light" data-animation="fadein" data-plugin="custommodal" data-overlaycolor="#38414a">
                    <i class="mdi mdi-plus-circle mr-1"></i>Thêm mới
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group mb-2">
                            <label>Danh mục</label>
                            <select class="form-control form-control-sm" v-model="product.cate_ids">
                                <option value="0">--Chọn--</option>
                                <option v-for="(item, index) in categories" :key="index" :value="item.cate_id" >{{ item.name }}</option>
                            </select>
                        </div>
                        <div class="form-group mb-2">
                            <label>Tên sản phẩm</label>
                            <input type="text" :class="['form-control form-control-sm', errors.name && !product.name ? 'parsley-error' : '']" v-model="product.name">
                            <ul class="parsley-errors-list filled" id="parsley-id-27" v-if="errors.name && !product.name">
                                <li class="parsley-required">{{ errors.name[0] }}</li>
                            </ul>
                        </div>
                        <div class="form-group mb-2">
                            <label>Mã sản phẩm</label>
                            <input type="text" :class="['form-control form-control-sm', errors.code && !product.code ? 'parsley-error' : '']" v-model="product.code">
                            <ul class="parsley-errors-list filled" id="parsley-id-27" v-if="errors.code && !product.code">
                                <li class="parsley-required">{{ errors.code[0] }}</li>
                            </ul>
                        </div>
                        <div class="form-group mb-2">
                            <label>Mô tả </label>
                            <textarea rows="5" :class="['form-control form-control-sm', errors.summary && !product.summary ? 'parsley-error' : '']" v-model="product.summary"></textarea>
                            <ul class="parsley-errors-list filled" id="parsley-id-27" v-if="errors.summary && !product.summary">
                                <li class="parsley-required">{{ errors.summary[0] }}</li>
                            </ul>
                        </div>
                        <div class="form-group mb-2">
                            <label>Nội dung</label>
                            <textarea rows="5" :class="['form-control form-control-sm', errors.content && !product.content ? 'parsley-error' : '']" v-model="product.content"></textarea>
                            <ul class="parsley-errors-list filled" id="parsley-id-27" v-if="errors.content && !product.content">
                                <li class="parsley-required">{{ errors.content[0] }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group mb-2">
                            <label>Giá sản phẩm</label>
                            <input type="number" :class="['form-control form-control-sm', errors.price && !product.price ? 'parsley-error' : '']" v-model="product.price">
                            <ul class="parsley-errors-list filled" id="parsley-id-27" v-if="errors.price && !product.price">
                                <li class="parsley-required">{{ errors.price[0] }}</li>
                            </ul>
                        </div>
                        <div class="form-group mb-2">
                            <p class="text-muted mb-2">Trạng thái</p>
                            <div class="row">
                                <div class="col-6">
                                    <div class="checkbox checkbox-success mb-2">
                                        <input id="checkbox1" type="checkbox" :value="1" v-model="product.status">
                                        <label for="checkbox1">
                                            Hiển thị
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-success mb-2">
                                        <input id="checkbox2" type="checkbox" :value="2" v-model="product.status">
                                        <label for="checkbox2">
                                            Nổi bật
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="checkbox checkbox-success mb-2">
                                        <input id="checkbox4" type="checkbox" :value="4" v-model="product.status">
                                        <label for="checkbox4">
                                            Hiển thị
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-success mb-2">
                                        <input id="checkbox8" type="checkbox" :value="8" v-model="product.status">
                                        <label for="checkbox8">
                                            Nổi bật
                                        </label>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="form-group mb-2">
                            <label>Ảnh đại diện</label>
                            <div class="input-group">
                                <div class="custom-file" data-toggle="modal" data-target="#file-manager">
                                    <input type="text" class="custom-file-input form-control-sm" style="cursor: pointer;">
                                    <label class="custom-file-label">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-2" v-show="product.avatars">
                            <img v-for="(item, index) in product.avatars" :key="index" :src="item" alt="post-img" class="rounded mr-1" height="60">
                        </div>
                        <div class="form-group mb-2">
                            <label>Ảnh sản phẩm</label>
                            <div class="input-group">
                                <div class="custom-file" data-toggle="modal" data-target="#file-manager">
                                    <input type="text" class="custom-file-input form-control-sm" style="cursor: pointer;">
                                    <label class="custom-file-label">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-2" v-show="product.images">
                            <img v-for="(item, index) in product.images" :key="index" :src="item" alt="post-img" class="rounded mr-1" height="60">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Modals-->
        <div id="file-manager" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="full-width-modalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-full">
                <div class="modal-content" style="height: 600px;">
                    <iframe src="https://chogom-dev.com/laravel-filemanager" height="600px;" style="border:none;"></iframe>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    </div>

</template>
<script>
import { listCate } from '@/api/categories.js';
export default {
    data() {
        return {
            categories: {

            },
            product: {
                cate_ids: [],
                name: '',
                code: '',
                summary: '',
                content: '',
                price: '',
                avatars: [],
                status: [1]

            },
            errors: []
        }
    },
    methods: {
        //lay danh sach danh muc
        async listCategories() {
            try {
                let data = await listCate();
                this.categories = data;
            } catch(err) {
                this.error = err;
            }
        },
    },
    created() {
        this.listCategories();
    }
}
</script>
<style lang="scss" scoped>

</style>
