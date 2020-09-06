<template>
    <form id="booking-form">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-xs-12 form-input">
                    <el-input
                    placeholder="Your Name"
                    v-model="form.bookingName"
                    clearable>
                    </el-input>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 col-xs-12 date-time-input form-input">
                    <el-date-picker
                        value-format="yyyy-MM-dd"
                        v-model="form.bookingDate"
                        type="date"
                        placeholder="Pick a day"
                        :picker-options="datePickerOptions"
                    >
                    </el-date-picker>
                </div>
                <div class="col-md-2 col-xs-12"></div>
                <div class="col-md-5 col-xs-12 date-time-input form-input">
                    <el-time-picker
                        arrow-control
                        value-format="hh:mm A"
                        v-model="form.bookingTime"
                        placeholder="Pick a time"
                        :picker-options="timePickerOptions"
                    >
                    </el-time-picker>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-xs-12 form-input">
                    <el-input
                        type="textarea"
                        :rows="4"
                        placeholder="Your Message"
                        v-model="form.bookingMessage">
                    </el-input>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-xs-12 form-input">
                    <el-button type="info" @click="submitForm">Place Booking</el-button>
                </div>
            </div>
        </div>
    </form>
</template>

<script>
    import Axios from 'axios';
    export default {
        data() {
            return {
                datePickerOptions: {
                    disabledDate(time) {
                        return time.getTime() < Date.now() - 8.64e7;
                    },
                    shortcuts: [{
                        text: 'Today',
                        onClick(picker) {
                        picker.$emit('pick', new Date());
                        }
                    }],
                },
                timePickerOptions: {
                    format: 'hh:mm:ss A',
                    selectableRange: ['09:00:00 - 17:00:00'],
                },
                form: {
                    bookingName: '',
                    bookingDate: '',
                    bookingTime: '',
                    bookingMessage: '',
                },
                errors: [],
                notifyPromise: Promise.resolve()
            }
        },
        methods: {
            submitForm(e) {
                e.preventDefault();
                let currentObj = this;

                if (this.validateForm()) {
                    Axios.defaults.headers.common['X-CSRF-TOKEN'] = document.getElementsByName('csrf-token')[0].content;
                    Axios.post('/booking/create', currentObj.form)
                    .then(function (response) {
                        currentObj.setBooking(response.data);
                        currentObj.resetForm();
                        currentObj.displayMessage({
                            title: 'Booking Successful',
                            message: 'Your booking request has been saved.',
                            type: 'success'
                        });
                    })
                    .catch(function (error) {
                        if (error.response.data.errors) {
                            Object.keys(error.response.data.errors).map((field, value) => {
                                return {
                                    title: 'Booking Form Error',
                                    message: error.response.data.errors[field][value],
                                    type: 'error'
                                }
                            })
                            .forEach(currentObj.displayMessage);
                        } else {
                            currentObj.displayMessage({
                                title: 'Failed to submit your booking request.',
                                message: 'Please try again later.',
                                type: 'error'
                            });
                        }
                    });
                }
            },
            validateForm() {

                this.errors = [];

                if (!this.form.bookingName) {
                    this.errors.push("Please enter your name.");
                }

                if (!this.form.bookingDate) {
                    this.errors.push("Please select your preferred booking date.");
                }

                if (!this.form.bookingTime) {
                    this.errors.push("Please select your preferred booking time.");
                }

                if (!this.form.bookingMessage) {
                    this.errors.push("Please leave us a message.");
                }

                if (!this.errors.length) {

                    return true;
                } else {

                    this.errors.map((message) => {
                        return {
                            title: 'Booking Form Error',
                            message,
                            type: 'error'
                        }
                    })
                    .forEach(this.displayMessage);

                    return false;
                }
            },
            resetForm () {
                this.form.bookingName = '';
                this.form.bookingDate = '';
                this.form.bookingTime = '';
                this.form.bookingMessage = '';
            },
            displayMessage(message) {
                this.notifyPromise = this.notifyPromise.then(this.$nextTick).then(()=>{
                    this.$notify(message);
                })
            },
            setBooking(booking) {
                this.$store.commit('setBooking', booking);
            }
        },
    }
</script>

<style scoped>
    #booking-form .row .form-input {
        margin-top: 10px;
    }

    .date-time-input div {
        width: 100%;
    }
</style>

