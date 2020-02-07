export default {
    actions: {
        async fetchCars(ctx) {
            axios.get('/fetchcarsall').then(response => {
                const cars = response.data;
                ctx.commit('setCars', cars);
            })
        }
    },
    mutations: {
        setCars(state, cars){
            state.cars = cars
        }
    },
    state: {
        cars: []
    },
    getters: {
        Cars(state) {
            return state.cars
        }
    },

}
