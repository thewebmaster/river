<template>
    <div class="col-8 contents">
        <div class="container-fluid content">
            <div class="row">
                <div class="col-md-1 col-xs-12"></div>
                <div class="col-md-6 col-xs-12">
                    <div>
                        <div class="number">{{numberOne}}</div>
                        <div class="heading">{{heading}}</div>
                    </div>
                </div>
                <div class="col-md-5 col-xs-12"></div>
            </div>
            <div class="row">
                <div class="col-md-1 col-xs-12 line-1">
                    <heading-line></heading-line>
                </div>
                <div class="col-md-6 col-xs-12">
                    <div>
                        <div class="text">{{dummyText}}</div>
                        <div class="book-button">
                            <el-row>
                                <el-button v-scroll-to="'#booking-form'">{{bookNowButton}}</el-button>
                            </el-row>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-xs-12"></div>
            </div>
        </div>
        <div class="container-fluid content">
            <div class="row">
                <div class="col-md-5 col-xs-12 image"><img class="img-responsive" :src="imageSrc" /></div>
                <div class="col-md-1 col-xs-12 line-2">
                    <heading-line></heading-line>
                </div>
                <div class="col-md-4 col-xs-12">
                    <div>
                        <div class="number">{{numberTwo}}</div>
                        <div class="semi-heading">{{semiHeading}}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid content">
            <div class="row">
                <div class="col-md-1 col-xs-12 line-2">
                    <heading-line></heading-line>
                </div>
                <div class="col-md-5 col-xs-12">
                    <div>
                        <div class="number">{{numberThree}}</div>
                        <div class="heading">{{heading}}</div>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12"></div>
            </div>
            <div class="row">
                <div class="col-md-1 col-xs-12"></div>
                <div class="col-md-5 col-xs-12">
                    <div>
                        <div class="semi-heading">{{semiHeading}}</div>
                        <div class="text">{{dummyText}}</div>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <booking-form></booking-form>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <booking-list></booking-list>
        </div>
    </div>
</template>

<script>
    import Line from './Line';
    import BookingForm from './BookingForm';
    import BookingList from './BookingList';
    export default {
        data() {
            return {
                numberOne: '01',
                numberTwo: '02',
                numberThree: '03',
                heading: 'HEADING',
                dummyText: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.',
                imageSrc: '/images/image-water.png',
                semiHeading: 'Lorem ipsum dolor sit amet, consetetur.',
                bookNowButton: 'Book Now',
            }
        },
        components: {
            'heading-line': Line,
            'booking-form': BookingForm,
            'booking-list': BookingList
        },
        methods: {
            scrollToBookingForm() {
                this.$el.getElementsByClassName('booking-form')[0].scrollIntoView();
            }
        }
    }
</script>

<style scoped>
    .contents {
        background: transparent url('../../assets/images/Group3.svg') no-repeat bottom right padding-box;
        opacity: 1;
    }

    .number {
        text-align: left;
        font: normal normal normal 16px/50px Montserrat;
        letter-spacing: 3.2px;
        color: #9A9A9A;
        text-transform: uppercase;
        opacity: 1;
    }

    .heading {
        text-align: left;
        font: normal normal bold 30px/42px Montserrat;
        letter-spacing: 3px;
        color: #000000;
        text-transform: uppercase;
        opacity: 1;
    }

    .semi-heading {
        text-align: left;
        font: normal normal normal 28px/40px Montserrat;
        letter-spacing: 0px;
        color: #000000;
        opacity: 1;
    }

    .text {
        text-align: left;
        font: normal normal normal 18px/27px Montserrat;
        letter-spacing: 0px;
        color: #000000;
        opacity: 1;
        position: relative;
        top: 20px;
        width: 100%;
        margin-bottom: 50px;
    }

    .book-button {
        position: relative;
        top: 100px;
    }

    .content {
        margin-bottom: 200px;
    }

    .image {
        margin-right: 15px;
    }

    .image > img {
        width: 100%;
    }

    .line-1 {
        position: relative;
        margin: 35px 0px;
    }

    .line-2 {
        position: relative;
        margin: 71px 0px;
    }
</style>

