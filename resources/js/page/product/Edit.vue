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
                <a href="javascript:void(0)" class="btn btn-success waves-effect waves-light" @click="update()">
                    <i class="mdi mdi-plus-circle mr-1"></i>Cập nhật
                </a>
                <a href="javascript:void(0)" class="btn btn-danger waves-effect waves-light" @click="resetForm()">
                    <i class="mdi mdi-lock-reset"></i>Reset
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group mb-2">
                            <label>Danh mục</label>
                            <multiselect v-model="product.cate_ids"  placeholder=" " label="name" track-by="cate_id" :options="categories" :multiple="true" ></multiselect>
                            <ul class="parsley-errors-list filled" id="parsley-id-27" v-if="errors.cate_ids && product.cate_ids.length == 0">
                                <li class="parsley-required">{{ errors.cate_ids[0] }}</li>
                            </ul>
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
                            <textarea rows="5" id="editor" :class="['form-control form-control-sm', errors.content && !product.content ? 'parsley-error' : '']" v-model="product.content"></textarea>
                            <ul class="parsley-errors-list filled"  v-if="errors.content && !product.content">
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
                            <label>Trọng lượng(g)</label>
                            <input type="number" :class="['form-control form-control-sm', errors.weight && !product.weight ? 'parsley-error' : '']" v-model="product.weight">
                            <ul class="parsley-errors-list filled" id="parsley-id-27" v-if="errors.weight && !product.weight">
                                <li class="parsley-required">{{ errors.weight[0] }}</li>
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
                                            Còn hàng
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-success mb-2">
                                        <input id="checkbox8" type="checkbox" :value="8" v-model="product.status">
                                        <label for="checkbox8">
                                            Hết hàng
                                        </label>
                                    </div>

                                </div>
                                <ul class="parsley-errors-list filled" id="parsley-id-27" v-if="errors.status && product.status.length == 0">
                                    <li class="parsley-required">{{ errors.status[0] }}</li>
                                </ul>
                            </div>

                        </div>
                        <div class="form-group mb-2">
                            <label>Ảnh đại diện</label>
                            <div class="input-group">
                                <div class="custom-file" data-toggle="modal" data-target="#file-manager" @click="type_image = 'avatars'">
                                    <input type="text" :class="['custom-file-input form-control-sm', errors.avatars && product.avatars.length == 0 ? 'parsley-error' : '']" style="cursor: pointer;">
                                    <label class="custom-file-label">Choose file</label>
                                </div>

                            </div>
                            <ul class="parsley-errors-list filled" id="parsley-id-27" v-if="errors.avatars && product.avatars.length == 0">
                                <li class="parsley-required">{{ errors.avatars[0] }}</li>
                            </ul>
                        </div>
                        <div class="form-group mb-2" v-show="product.avatars">
                            <div class="row">
                                <div v-for="(item, index) in product.avatars" :key="index" class="col-6 mb-2">
                                    <a class="list-image">
                                        <i class="mdi mdi-close-circle-outline btn-remove-image"  @click="removeAvatars(index)"></i>
                                        <img :src="item" alt="post-img" class="rounded mr-1" width="80" height="60">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label>Ảnh sản phẩm</label>
                            <div class="input-group">
                                <div class="custom-file" data-toggle="modal" data-target="#file-manager" @click="type_image = 'images'">
                                    <input type="text" class="custom-file-input form-control-sm" style="cursor: pointer;">
                                    <label class="custom-file-label">Choose file</label>
                                </div>
                            </div>
                            <ul class="parsley-errors-list filled" id="parsley-id-27" v-if="errors.images && product.images.length == 0">
                                <li class="parsley-required">{{ errors.images[0] }}</li>
                            </ul>
                        </div>
                        <div class="form-group mb-2" v-show="product.images">
                            <div class="row">
                                <div v-for="(item, index) in product.images" :key="index" class="col-6 mb-2">
                                    <a class="list-image">
                                        <i class="mdi mdi-close-circle-outline btn-remove-image"  @click="removeImages(index)"></i>
                                        <img :src="item" alt="post-img" class="rounded mr-1" width="80" height="60">
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-2">
                            <label>Thêm thuộc tính </label> <button class="btn btn-outline-pink btn-rounded waves-effect waves-light btn-xs" @click="addOption()">+ Thêm</button>
                            <div class="row mt-2" v-for="(item, index) in product.options" :key="index">
                                <div class="col-4">
                                    <input type="text" class="form-control form-control-sm" placeholder="Tên" v-model="item.name">
                                </div>
                                <div class="col-7">
                                    <input type="text" class="form-control form-control-sm" placeholder="Giá trị" v-model="item.value">
                                </div>
                                <div class="col-1" v-show="index > 0">
                                    <i class="mdi mdi-close-circle-outline" style="color:red; cursor: pointer;" @click="removeOption(index)"></i>
                                </div>
                            </div>
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
import { addProduct, findProduct, updateProduct } from '@/api/product.js';
import ClassicEditor from '@ckeditor/ckeditor5-build-classic';
import Multiselect from 'vue-multiselect';

export default {
    components: {
        Multiselect
    },
    data() {
        return {
            categories: [],
            product: {
                product_id: '',
                cate_ids: [],
                name: '',
                code: '',
                summary: '',
                content: '',
                price: '',
                weight: '',
                avatars: [],
                status: [],
                images: [],
                options: [
                    {
                        name: '',
                        value: ''
                    }
                ]
            },
            type_image: '',
            errors: [],
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
        removeAvatars(index) {
            this.product.avatars.splice(index, 1);
        },
        removeImages(index) {
            this.product.images.splice(index, 1);
        },

        getCkeditor(){
            CKEDITOR.replace('editor');
        },
        addOption() {
            let check = true;
            this.product.options.forEach((item) => {
                if(!item.value || !item.name) {
                    check = false;
                }
            });
            if(!check) {
                alert('Bạn chưa nhập đầy đủ thông tin');
            } else {
                this.product.options.push({
                    name: '',
                    value: ''
                });
            }

        },
        removeOption(index) {
            this.product.options.splice(index, 1);
        },
        resetForm() {
            this.find(this.$route.params.id);
        },

        async find(product_id) {
            try {
                let data = await findProduct({product_id});
                this.asyncData(data);
            } catch(err) {
                console.log(err);
            }
        },
        asyncData(data) {
            this.product.product_id = data.product_id;
            this.product.name = data.name;
            this.product.code = data.code;
            this.product.summary = data.summary;
            this.product.content = data.content;
            this.product.price = data.price;
            this.product.weight = data.weight;
            this.product.avatars = JSON.parse(data.avatars);
            this.product.images = JSON.parse(data.images);
            this.product.options = data.get_options;
            this.product.cate_ids = data.get_categories;

            if(data.status & 1) {
                this.product.status.push(1);
            }
            if(data.status & 2) {
                this.product.status.push(2);
            }
            if(data.status & 4) {
                this.product.status.push(4);
            }
            if(data.status & 8) {
                this.product.status.push(8);
            }
        },

        async update() {
            try {

                let data = await updateProduct(this.product);
                this.$router.push({name: 'Product'});
            } catch(err) {
                if(err.errors) {
                    this.errors = err.errors;
                }
                if(err.message) {
                    this.error = err.message;
                }
            }
        }

    },
    created() {
        this.listCategories();
        this.find(this.$route.params.id);
    },
    mounted() {
        this.getCkeditor();
        let self = this;
        window.addEventListener('message', function(result) {
            let data = result.data;
            if(data.type === 'file-selected') {
                if(self.type_image === 'avatars') {
                    if(self.product.avatars.indexOf(data.path) == -1) {
                        self.product.avatars.push(data.path);
                        alert('Đã chọn');
                    } else {
                        alert('File này đã được chọn');
                    }
                }
                else if(self.type_image === 'images') {
                    if(self.product.images.indexOf(data.path) == -1) {
                        self.product.images.push(data.path);
                        alert('Đã chọn');
                    } else {
                        alert('File này đã được chọn');
                    }
                }
            }
        });
    }
}
</script>
<style lang="scss" scoped>
.list-image {
    position: relative;
    img {
        border: 1px solid #0099ff;
    }
    .btn-remove-image {
        position: absolute;
        right: 0;
        top: -28px;
        color: red;
        cursor: pointer;
    }
}

</style>
<style>
.ck-editor .ck-editor__main .ck-content {
    min-height: 300px;
}
</style>
<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>
