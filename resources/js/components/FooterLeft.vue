<template>
    <div class="container-fluid footer-left-container">
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <logo></logo>
            </div>
            <div class="col-md-12 col-xs-12 text-center text-md-left footer-text">
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy.
            </div>
            <div class="col-md-12 col-xs-12 text-center text-md-left footer-link">
                <button v-scroll-to="'#booking-form'">Book Now</button>
            </div>
        </div>
    </div>
</template>

<script>
    import Logo from './Logo';
    export default {
        components: {
            'logo': Logo,
        },
        methods: {
            scrollToBookingForm() {
                this.$el.getElementsByClassName('booking-form')[0].scrollIntoView();
            }
        }
    }
</script>

<style scoped>
    .footer-left-container {
        padding-right: 20px;
    }

    .footer-left-container > .row > div {
        margin-top: 40px;
    }

    .footer-text {
        text-align: left;
        font: normal normal normal 14px/24px Montserrat;
        letter-spacing: 0px;
        color: #FFFFFF;
        opacity: 0.6;
        margin: 0px 20px 0px 0px
    }

    .footer-link button {
        text-align: left;
        font: normal normal normal 14px/44px Montserrat;
        letter-spacing: 4.2px;
        color: #FFFFFF;
        text-transform: uppercase;
        border: none;
        border-bottom: 1px solid #FFFFFF;
        opacity: 1;
        line-height: 1.6;
        padding: 0px 0px 10px 0px;
        background: transparent;
        outline: none;
    }

    .footer-link span:hover {
        cursor: pointer;
    }
</style>

