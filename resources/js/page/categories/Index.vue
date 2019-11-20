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
                                <a href="#custom-modal" class="btn btn-danger waves-effect waves-light" data-animation="fadein" data-plugin="custommodal" data-overlaycolor="#38414a"><i class="mdi mdi-plus-circle mr-1"></i> Add Customers</a>
                            </div>
                            <div class="col-sm-8">
                                <div class="text-sm-right">
                                    <button type="button" class="btn btn-success mb-2 mr-1"><i class="mdi mdi-settings"></i></button>
                                    <button type="button" class="btn btn-light mb-2 mr-1">Import</button>
                                    <button type="button" class="btn btn-light mb-2">Export</button>
                                </div>
                            </div><!-- end col-->
                        </div>

                        <div class="table-responsive">
                            <table class="table table-centered table-striped" id="products-datatable">
                                <thead>
                                    <tr>
                                        <th style="width: 20px;">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1">&nbsp;</label>
                                            </div>
                                        </th>
                                        <th>Tên</th>
                                        <th>Parent</th>
                                        <th>Trạng thái</th>
                                        <th>Create Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                <label class="custom-control-label" for="customCheck2">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td class="table-user">
                                            <img src="/app/assets/images/users/user-4.jpg" alt="table-user" class="mr-2 rounded-circle">
                                            <a href="javascript:void(0);" class="text-body font-weight-semibold">Paul J. Friend</a>
                                        </td>
                                        <td>
                                            937-330-1634
                                        </td>
                                        <td>
                                            pauljfrnd@jourrapide.com
                                        </td>
                                        <td>
                                            New York
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                <label class="custom-control-label" for="customCheck2">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td class="table-user">
                                            <img src="/app/assets/images/users/user-4.jpg" alt="table-user" class="mr-2 rounded-circle">
                                            <a href="javascript:void(0);" class="text-body font-weight-semibold">Paul J. Friend</a>
                                        </td>
                                        <td>
                                            937-330-1634
                                        </td>
                                        <td>
                                            pauljfrnd@jourrapide.com
                                        </td>
                                        <td>
                                            New York
                                        </td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <ul class="pagination pagination-rounded justify-content-end mb-0">
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

                    </div> <!-- end card-body-->
                </div>
            </div>
            <div class="col-5">
                <div class="card-box">
                    <form>
                        <div class="form-group mb-2">
                            <button type="button" class="btn btn-success waves-effect waves-light" @click="createCate()">Thêm</button>
                            <button type="button" class="btn btn-danger waves-effect waves-light" @click="openFileManager()">Reset</button>
                        </div>
                        <hr>

                        <div class="form-group mb-2">
                            <label>Danh mục cha</label>
                            <select class="form-control form-control-sm" v-model="categorie.parent_id">
                                <option value="">Root</option>
                                <option v-for="(item, index) in categories" :key="index" :value="item.cate_id">{{ item.name }}</option>
                            </select>
                        </div>
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
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input form-control-sm">
                                    <label class="custom-file-label">Choose file</label>
                                </div>
                            </div>
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
    </div>
</template>
<script>
import { create } from '@/api/categories.js';
export default {
    data() {
        return {
            categories: {

            },
            categorie: {
                parent_id: '',
                name: '',
                ordinal: 1,
                status: 1,
                avatar: ''
            },
            errors: [],
            error: ''
        }
    },
    methods: {
        async createCate() {
            try {
                let data = await create(this.categorie);
            } catch(err) {
                this.errors = err.errors;
            }
        },
        openFileManager () {
            window.open(`/laravel-filemanager`, 'width=900,height=600')
            var self = this
            window.SetUrl = function (items) {
                self.form.main_image = items[0].url
            }
            return false
        }
    }
}
</script>
<style lang="scss" scoped>

</style>
