<template>
    <div class="header-content container-fluid">
        <div class="row">
            <div class="w-260 logo-container">
                <logo></logo>
            </div>
        </div>
        <div class="row banner-container">
            <div class="col my-auto">
                <banner-text></banner-text>
            </div>
        </div>
    </div>
</template>

<script>
    import Logo from './Logo';
    import BannerText from './BannerText';
    export default {
        components: {
            'logo': Logo,
            'banner-text': BannerText
        }
    }
</script>

<style scoped>
    .header-content {
        top: 0px;
        left: 0px;
        padding: 0px;
        margin: 0px;
        height: 960px;
    }

    .banner-container {
        height: 50%;
    }

    .logo-container {
        margin: 80px 0px 0px 95px;
    }
</style>

