<template>
    <div class="container-fluid footer-right-container">
        <div class="row">
            <div class="col-md-3 col-xs-12 text-center text-md-left">
                <div class="footer-menu-head">Menu</div>
                <div class="footer-navigation">
                    <ul>
                        <li><a href="#">Heading</a></li>
                        <li><a href="#">Heading</a></li>
                        <li><a href="#">Heading</a></li>
                        <li><a href="#">Heading</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-xs-12 text-center text-md-left">
                <div class="footer-menu-head">Menu</div>
                <div class="footer-navigation">
                    <ul>
                        <li><a href="#">Heading</a></li>
                        <li><a href="#">Heading</a></li>
                        <li><a href="#">Heading</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-xs-12 text-center text-md-left">
                <div class="footer-menu-head">Menu</div>
                <div class="footer-navigation">
                    <ul>
                        <li><a href="#">Heading</a></li>
                        <li><a href="#">Heading</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-xs-12 text-center text-md-left">
                <div class="footer-menu-head">Menu</div>
                <div class="footer-navigation">
                    <ul>
                        <li><a href="#">Heading</a></li>
                        <li><a href="#">Heading</a></li>
                        <li><a href="#">Heading</a></li>
                    </ul>
                </div>
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
    .footer-right-container > .row > div {
        margin-top: 23px;
    }

    .footer-text {
        text-align: left;
        font: normal normal normal 14px/24px Montserrat;
        letter-spacing: 0px;
        color: #FFFFFF;
        opacity: 0.6;
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

    .footer-menu-head {
        font: normal normal normal 14px/44px Montserrat;
        letter-spacing: 4.2px;
        color: #FFFFFF;
        text-transform: uppercase;
        opacity: 1;
    }

    .footer-navigation {
        margin-top: 32px;
    }

    .footer-navigation ul li a {
        text-align: left;
        font: normal normal normal 14px/24px Montserrat;
        letter-spacing: 0px;
        color: #FFFFFF;
        opacity: 0.6;
    }

    .footer-navigation ul li {
        margin-bottom: 10px;
    }
</style>

