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
            <div class="col-7">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="col-sm-4">
                                <a href="#custom-modal" class="btn btn-danger waves-effect waves-light" data-animation="fadein" data-plugin="custommodal" data-overlaycolor="#38414a"><i class="mdi mdi-plus-circle mr-1"></i>Actions</a>
                            </div>

                        </div>

                        <div class="table-responsive">
                            <table class="table table-centered table-striped" id="products-datatable">
                                <thead>
                                    <tr>
                                        <th>Thứ tự</th>
                                        <th>Tên</th>
                                        <th>Hiển thị</th>
                                        <th>Create Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(item, index) in categories" :key="index">
                                        <td>
                                            {{ item.ordinal }}
                                        </td>
                                        <td class="table-user">
                                            <img v-show="item.avatar" :src="item.avatar" alt="table-user" class="mr-2 rounded-circle">
                                            <a href="javascript:void(0);" @click="handlerUpdate(item)" class="text-body font-weight-semibold">{{ item.name }} </a>
                                        </td>

                                        <td>
                                            <span class="badge badge-success" v-if="item.status">Có</span>
                                            <span class="badge badge-danger" v-if="!item.status">không</span>
                                        </td>
                                        <td>
                                            {{ item.created_at }}
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="action-icon" @click="handlerUpdate(item)"> <i class="mdi mdi-square-edit-outline"></i></a>
                                            <a href="javascript:void(0);" class="action-icon" @click="removeCate(item.cate_id)"> <i class="mdi mdi-delete"></i></a>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div> <!-- end card-body-->
                </div>
            </div>
            <div class="col-5">
                <div class="card-box">
                    <form>
                        <div class="form-group mb-2">
                            <button v-if="categorie.type === 'create'" type="button" class="btn btn-success waves-effect waves-light" @click="createCate()">Thêm</button>
                            <button v-if="categorie.type === 'update'" type="button" class="btn btn-primary waves-effect waves-light" @click="updateCate()">Cập nhật</button>
                            <button type="button" class="btn btn-danger waves-effect waves-light"  @click="resetForm()">Reset</button>
                        </div>
                        <hr>
                        <div class="form-group mb-2">
                            <label>Tên danh mục</label>
                            <input type="text" :class="['form-control form-control-sm', errors.name && !categorie.name ? 'parsley-error' : '']" v-model="categorie.name">
                            <ul class="parsley-errors-list filled" id="parsley-id-27" v-if="errors.name && !categorie.name">
                                <li class="parsley-required">{{ errors.name[0] }}</li>
                            </ul>
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
                        <div class="form-group mb-2" v-show="categorie.avatar">
                            <img :src="categorie.avatar" alt="post-img" class="rounded mr-1" height="60">
                        </div>
                        <div class="form-group mb-2">
                            <label>Thứ tự</label>
                            <input type="number" class="form-control form-control-sm" v-model="categorie.ordinal">
                        </div>
                        <div class="form-group mb-3">
                            <p class="text-muted mt-3 mb-2">Hiển thị</p>
                            <div class="radio radio-info form-check-inline" style="margin-left: 10px;">
                                <input type="radio" id="inlineRadio1" value="1" v-model="categorie.status" checked="">
                                <label for="inlineRadio1">Có</label>
                            </div>
                            <div class="radio form-check-inline">
                                <input type="radio" id="inlineRadio2" value="0" v-model="categorie.status">
                                <label for="inlineRadio2">Không</label>
                            </div>
                        </div>

                    </form>
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
import { create, listCate, update, remove } from '@/api/categories.js';
export default {
    data() {
        return {
            categories: {

            },
            categorie: {
                cate_id: '',
                parent_id: 0,
                name: '',
                ordinal: 1,
                status: 1,
                avatar: '',
                type: 'create'
            },
            errors: [],
            error: ''
        }
    },
    methods: {
        // tao moi danh muc
        async createCate() {
            try {
                let data = await create(this.categorie);
                this.listCategories();
            } catch(err) {
                this.errors = err.errors;
            }
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
        handlerUpdate(cate) {
            this.categorie = cate;
            this.categorie.type = 'update';
        },

        async updateCate() {
            try {
                let data = await update(this.categorie);
                this.listCategories();
            } catch(err) {
                this.errors = err.errors;
            }
        },

        async removeCate(cate_id) {
            if(confirm('Bạn có chắc chắn muốn xóa danh mục này?')) {
                try {
                    let data = await remove({cate_id});
                    this.listCategories();
                    alert('Xóa danh mục thành công!');
                } catch(err) {
                    this.errors = err.errors;
                }
            }

        },

        resetForm() {
            this.categorie = {
                name: '',
                ordinal: 1,
                status: 1,
                avatar: '',
                type: 'create'
            };
        }
    },
    created() {
        this.listCategories();
    },
    mounted() {
        let self = this;
        window.addEventListener('message', function(result) {
            let data = result.data;
            if(data.type === 'file-selected') {
                self.categorie.avatar = data.path;
            }
        });
    }
}
</script>
<style lang="scss" scoped>

</style>
