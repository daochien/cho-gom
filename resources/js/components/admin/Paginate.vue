<template>
    <div class="col-12">
        <ul class="pagination pagination-rounded justify-content-end mb-3" v-show="datas.last_page > 1">
            <li class="page-item" @click="previousOrNext(datas.prev_page_url)" v-if="datas.prev_page_url">
                <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                    <span aria-hidden="true">«</span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>
            <li :class="['page-item', {'active': index == datas.current_page}]" v-for="index in datas.last_page" :key="index" @click="loadPaginate(datas.path, index)">
                <a class="page-link" href="javascript: void(0);">{{ index }}</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="javascript: void(0);" aria-label="Next" v-if="datas.next_page_url" @click="previousOrNext(datas.next_page_url)">
                    <span aria-hidden="true">»</span>
                    <span class="sr-only">Next</span>
                </a>
            </li>
        </ul>
    </div> <!-- end col-->
</template>
<script>
import axios from 'axios';
export default {
    props: {
        datas: Object
    },
    data() {
        return {

        }
    },
    methods: {

        loadPaginate(path, page) {
            let url = path+'?page='+page;
            axios.get(url).then(({data}) => {
                this.$emit('reloadListProduct', data);
            }).catch(error => {
                console.log(error);
            });
        },
        previousOrNext(path) {
            axios.get(path).then(({data}) => {
                this.$emit('reloadListProduct', data);
            }).catch(error => {
                console.log(error);
            });
        }
    }
}
</script>
<style lang="s">

</style>
