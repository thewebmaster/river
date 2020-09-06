<template>
    <div class="banner-text">{{bannerText}}</div>
</template>

<script>
    export default {
        data() {
            return {
                'bannerText': 'EXAMPLE DEMO'
            }
        },
        name: 'BannerText'
    }
</script>

<style scoped>
    .banner-text {
        height: 120px;
        width: 954px;
        text-align: left;
        font: normal normal bold 98px/136px Montserrat;
        letter-spacing: 9.8px;
        color: #FFFFFF;
        text-shadow: 0px 3px 6px #00000029;
        opacity: 1;
        margin: 0 auto;
    }

    /** Ipone X */
    @media only screen
    and (device-width : 375px)
    and (device-height : 812px)
    and (-webkit-device-pixel-ratio : 3)
    and (orientation : portrait) {
        .banner-text {
            font: normal normal bold 30px/42px Montserrat;
            text-align: center;
            max-width: 360px;
        }
    }
</style>
