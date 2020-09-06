import Vue from 'vue';
import Vuex from 'vuex';
import Axios from 'axios';
import { reverse } from 'lodash';

Vue.use(Vuex);

export default new Vuex.Store({
    state: {
        bookings: [],
    },
    getters: {
        bookings: state => state.bookings,
    },
    mutations: {
        setBookings(state, bookings) {
            state.bookings = bookings;
        },
        setBooking(state, booking) {
            const bookingCount = state.bookings.length;
            state.bookings.unshift({
                ...booking,
                number: ('0' + (bookingCount + 1)).slice(-2)
            });
        },
    },
    actions: {
        getBookings({ commit }) {
            return new Promise((resolve, reject) => {
                Axios.get('/booking/get')
                    .then(result => {
                        const bookings = result.data.map((booking, index) => {
                            return {
                                name: booking.name,
                                date: booking.date,
                                time: booking.time,
                                message: booking.message,
                                number: ('0' + (index + 1)).slice(-2) // Set booking number
                            }
                        });
                        commit('setBookings', reverse(bookings));
                        resolve();
                    })
                    .catch(error => {
                        reject(error.response && error.response.data.message || 'Error.');
                    });
            });
        },
    }
})
