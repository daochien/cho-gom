<template>
    <div class="nav-cate">
        <ul id="menu2017">

            <li v-for="(cate, index) in cates" :key="index" :class="['menu-item-count']" >
                <a class="evo-categories-a" :href="'/danh-muc/'+cate.alias+'.'+cate.cate_id" :title="cate.name">
                    {{ cate.name }}
                </a>
            </li>

        </ul>
    </div>
</template>
<script>
export default {
    props: {
        cates: Array
    },
    created() {

    }
}
</script>
<style>

</style>
