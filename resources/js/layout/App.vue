<template>
    <div class="app-component">
        <div class="app-wapper">
            <nav-bar></nav-bar>
            <side-bar></side-bar>
            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        <router-view></router-view>
                    </div>
                </div>
                <footer-bar></footer-bar>
            </div>            
        </div>
        <right-bar></right-bar>
    </div>
</template>
<script>
import Navbar from './Navbar';
import Sidebar from './Sidebar';
import Rightbar from './Rightbar';
import Footer from './Footer';
export default {
    components: {
        'nav-bar': Navbar,
        'side-bar': Sidebar,
        'right-bar': Rightbar,
        'footer-bar': Footer
    },
    created() {
        
    }

}
</script>
<style lang="scss" scoped>

.app-component {
    .app-wapper {
        height: 100%;
        overflow: hidden;
        width: 100%;
    }

}
</style>
