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
                <a href="javascript:void(0)" class="btn btn-success waves-effect waves-light" @click="createProduct()">
                    <i class="mdi mdi-plus-circle mr-1"></i>Thêm mới
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
                        <h5 class="text-uppercase bg-light p-2 mt-0 mb-3">Thông tin chung</h5>
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
                        <h5 class="text-uppercase mt-0 mb-3 bg-light p-2">Giá sản phẩm</h5>
                        <div class="form-group mb-2">
                            <label>Giá gốc</label>
                            <input type="number" :class="['form-control form-control-sm', errors.price && !product.price ? 'parsley-error' : '']" v-model="product.price">
                            <ul class="parsley-errors-list filled" id="parsley-id-27" v-if="errors.price && !product.price">
                                <li class="parsley-required">{{ errors.price[0] }}</li>
                            </ul>
                        </div>
                        <div class="form-group mb-2">
                            <p class="text-muted mb-2">Giảm giá</p>
                            <div class="col-md-12">
                                <div class="radio radio-success form-check-inline">
                                    <input type="radio" id="yes_dicount" value="1" v-model="isDiscount">
                                    <label for="yes_dicount"> Có </label>
                                </div>
                                <div class="radio radio-danger form-check-inline">
                                    <input type="radio" id="no_discount" value="0" v-model="isDiscount">
                                    <label for="no_discount"> Không </label>
                                </div>
                            </div>
                        </div>
                        <div v-if="isDiscount == 1">
                            <h5 class="text-uppercase mt-0 mb-3 bg-light p-2">Thông tin giảm giá</h5>
                            <div class="form-group mb-2">
                                <p class="text-muted mb-2">Kiểu</p>
                                <div class="col-md-12">
                                    <div class="radio radio-success form-check-inline">
                                        <input type="radio" id="percent_dicount" value="percent" v-model="infoDiscount.type">
                                        <label for="percent_dicount"> Percent </label>
                                    </div>
                                    <div class="radio radio-danger form-check-inline">
                                        <input type="radio" id="percent_discount" value="direct" v-model="infoDiscount.type">
                                        <label for="percent_discount"> Direct </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <label>Giá trị</label>
                                <input type="number" :class="['form-control form-control-sm', errors.value ? 'parsley-error' : '']" v-model="infoDiscount.value">
                                <ul class="parsley-errors-list filled" id="parsley-id-27" v-if="errors.value">
                                    <li class="parsley-required">{{ errors.value[0] }}</li>
                                </ul>
                            </div>
                            <div class="form-group mb-2">
                                <label>Ngày bắt đầu</label>
                                <datepicker
                                    :language="vi"
                                    :format="customFormatter"
                                    :input-class="{'form-control form-control-sm': true, 'parsley-error': errors.date_start}"
                                    :disabledDates="disabledDateStart"
                                    @selected="selectedStartDate"
                                    v-model="infoDiscount.date_start">
                                </datepicker>

                                <ul class="parsley-errors-list filled" id="parsley-id-27" v-if="errors.date_start">
                                    <li class="parsley-required">{{ errors.date_start[0] }}</li>
                                </ul>
                            </div>
                            <div class="form-group mb-2">
                                <label>Ngày kết thúc</label>
                                <datepicker
                                    :language="vi"
                                    :format="customFormatter"
                                    :input-class="{'form-control form-control-sm': true, 'parsley-error': errors.date_end}"
                                    :disabledDates="disabledDateEnd"
                                    @selected="selectedEndDate"
                                    v-model="infoDiscount.date_end">
                                </datepicker>

                                <ul class="parsley-errors-list filled" id="parsley-id-27" v-if="errors.date_end">
                                    <li class="parsley-required">{{ errors.date_end[0] }}</li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card">
                    <div class="card-box">
                        <h5 class="text-uppercase mt-0 mb-3 bg-light p-2">Ảnh sản phẩm</h5>
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
                                <div v-for="(item, index) in product.avatars" :key="index" class="col-4 mb-2">
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
                                <div v-for="(item, index) in product.images" :key="index" class="col-4 mb-2">
                                    <a class="list-image">
                                        <i class="mdi mdi-close-circle-outline btn-remove-image"  @click="removeImages(index)"></i>
                                        <img :src="item" alt="post-img" class="rounded mr-1" width="80" height="60">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="text-uppercase mt-0 mb-3 bg-light p-2">Thuộc tính sản phẩm</h5>
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
                    <iframe :src="iframeUpload" height="600px;" style="border:none;"></iframe>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

    </div>

</template>
<script>
import { listCate, create } from '@/api/categories.js';
import { addProduct } from '@/api/product.js';
import ClassicEditor from '@ckeditor/ckeditor5-build-classic';
import Multiselect from 'vue-multiselect';
import moment from 'moment';
import {en, vi} from 'vuejs-datepicker/dist/locale';
import Datepicker from 'vuejs-datepicker';

export default {
    components: {
        Multiselect,
        Datepicker
    },
    data() {
        return {
            categories: [],
            product: {
                cate_ids: [],
                name: '',
                code: '',
                summary: '',
                content: '',
                price: '',
                weight: '',
                avatars: [],
                status: [1],
                images: [],
                options: [
                    {
                        name: '',
                        value: ''
                    }
                ]
            },
            isDiscount: 0,
            infoDiscount: {
                type: "percent", // direct
                value: '',
                exp: ''
            },
            type_image: '',
            errors: [],
            iframeUpload: '',
            vi: vi,
            disabledDateStart: {
                to: new Date(Date.now() - 8640000),
                from: '',
            },
            disabledDateEnd: {
                to: new Date(Date.now() - 8640000),
                from: '',
            },
        }
    },
    methods: {

        selectedStartDate(date) {
            this.disabledDateEnd.to = date;
        },
        selectedEndDate(date) {
            this.disabledDateStart.from = date;
        },

        customFormatter(date) {
            if(date) {
                return moment(date).format('DD-MM-YYYY');
            }
            return '';
        },

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
            CKEDITOR.on('instanceReady', (evt) => {
                CKEDITOR.instances.editor.setData(this.product.content);
            });

            CKEDITOR.instances.editor.on('change', () => {
                this.product.content = CKEDITOR.instances.editor.getData();
            });
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
            this.product = {
                cate_ids: [],
                name: '',
                code: '',
                summary: '',
                content: '',
                price: '',
                weight: '',
                avatars: [],
                status: [1],
                images: [],
                isDiscount: '',
                typeDiscount: '',
                value: '',
                exp: '',
                options: [
                    {
                        name: '',
                        value: ''
                    }
                ]
            };
            this.isDiscount = 0,
            this.infoDiscount = {
                type: "percent", // direct
                value: '',
                date_start: '',
                date_end: ''
            };
            this.errors = [];
        },
        //them moi san pham
        async createProduct() {
            try {
                this.product.isDiscount = this.isDiscount;
                if(this.isDiscount == 1) {
                    this.product.typeDiscount = this.infoDiscount.type;
                    this.product.value = this.infoDiscount.value;
                    this.product.date_start = this.infoDiscount.date_start;
                    this.product.date_end = this.infoDiscount.date_end;
                }
                let data = await addProduct(this.product);
                this.$router.push({name: 'Product'});
            } catch(err) {
                this.errors = err.errors;
            }
        },
        selectFile(result) {

            let data = result.data;
            if(data.type === 'file-selected') {
                if(this.type_image === 'avatars') {
                    if(this.product.avatars.indexOf(data.path) == -1) {
                        this.product.avatars.push(data.path);
                        alert('Đã chọn');
                    } else {
                        alert('File này đã được chọn');
                    }
                }
                else if(this.type_image === 'images') {
                    if(this.product.images.indexOf(data.path) == -1) {
                        this.product.images.push(data.path);
                        alert('Đã chọn');
                    } else {
                        alert('File này đã được chọn');
                    }
                }
            }

        }

    },
    created() {
        this.listCategories();
        this.iframeUpload = window.__iframeUpload__+'?time='+Date.now();
    },
    mounted() {
        this.getCkeditor();
        let self = this;

        window.addEventListener('message', this.selectFile);
    },
    beforeDestroy() {
        window.removeEventListener('message', this.selectFile);
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
