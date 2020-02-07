import Vue from 'vue';
import Vuex from 'vuex';
import auctions from './modules/auction.js';
import user from './modules/user.js';
import slider from './modules/slider.js';
import cars from './modules/cars.js';
import models from './modules/models.js';
import states from './modules/states.js';
import parkings from './modules/parking.js';
import images from './modules/image.js';

Vue.use(Vuex);

export default new Vuex.Store({
    modules:{
        auctions,
        user,
        slider,
        cars,
        models,
        states,
        parkings,
        images
    }
})
