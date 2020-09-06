<template>
    <div class="row">
        <div v-for="(booking, index) in bookings" :key="index" class="col-md-5 col-xs-12 booking">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-1 col-xs-12"></div>
                    <div class="col-md-6 col-xs-12">
                        <div class="content-container">
                            <div class="booking-number">{{ booking.number }}</div>
                            <div class="booking-details">{{ booking.name }}</div>
                            <div class="booking-details">{{ booking.date }}</div>
                            <div class="booking-details">{{ booking.time }}</div>
                        </div>
                    </div>
                    <div class="col-md-5 col-xs-12"></div>
                </div>
                <div class="row">
                    <div class="col-md-1 col-xs-12 booking-line">
                        <heading-line></heading-line>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="content-container">
                            <div class="booking-message">{{ booking.message }}</div>
                        </div>
                    </div>
                    <div class="col-md-5 col-xs-12"></div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import { mapState } from 'vuex'
    import Line from './Line';
    export default {
        components: {
            'heading-line': Line,
        },
        computed: mapState({
            bookings: state => state.bookings
        })
    }
</script>

<style scoped>
    .booking-number {
        text-align: left;
        font: normal normal normal 16px/50px Montserrat;
        letter-spacing: 3.2px;
        color: #9A9A9A;
        text-transform: uppercase;
        opacity: 1;
    }

    .booking-details {
        text-align: left;
        font: normal normal normal 18px/27px Montserrat;
        letter-spacing: 0px;
        color: #000000;
        opacity: 1;
    }

    .booking-message {
        text-align: left;
        font: normal normal normal 16px/24px Montserrat;
        letter-spacing: 0px;
        color: #000000;
        opacity: 0.7;
        margin-top:20px;
    }

    .booking-line {
        position: relative;
        margin: 32px 0px;
    }

    .booking {
        margin-bottom: 40px;
    }
</style>

