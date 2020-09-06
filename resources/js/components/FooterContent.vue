<template>
    <div class="footer-content container-fluid">
        <div class="row footer-container">
            <div class="col-md-2 col-xs-12"></div>
            <div class="col-md-8 col-xs-12">
                <div class="row">
                    <div class="col-md-6 col-xs-12">
                        <footer-left></footer-left>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <footer-right></footer-right>
                    </div>
                </div>
                <div class="row credits">
                    <div class="col-md-12 col-xs-12 text-center text-md-left">
                        © 2020 RIVER. All Rights Reserved.
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-xs-12"></div>
        </div>
    </div>
</template>

<script>
    import FooterLeft from './FooterLeft';
    import FooterRight from './FooterRight';
    export default {
        components: {
            'footer-left': FooterLeft,
            'footer-right': FooterRight
        }
    }
</script>

<style scoped>
    .footer-content {
        background: #000000 0% 0% no-repeat padding-box;
        opacity: 1;
        padding: 40px 0px 80px 0px;
        margin-top: 100px;
    }

    .credits {
        margin-top: 100px;
        text-align: left;
        font: normal normal normal 14px/24px Montserrat;
        letter-spacing: 0px;
        color: #FFFFFF;
        opacity: 0.6;
    }
</style>

