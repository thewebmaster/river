<template>
    <div class="container-fluid main-content">
        <div class="row main-container">
            <div class="col-2"></div>
                <contents></contents>
            <div class="col-2"></div>
        </div>
    </div>
</template>

<script>
    import Contents from './Contents';
    export default {
        components: {
            'contents': Contents
        }
    }
</script>

<style scoped>
    .main-content {
        top: 80px;
        left: 0px;
        padding: 0px 0px 80px 0px;
        margin: 0px;
        min-height: 294px;
        position: relative;
    }

    .main {
        width: 100%;
        height: 100%;
        background: transparent url('../../assets/images/Rectangle3.svg') 0% 0% no-repeat padding-box;
        opacity: 0.8;
    }
</style>

