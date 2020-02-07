export default {
    actions: {
        async fetchParkings(ctx) {
            axios.get('/fetchparkings').then(response => {
                const parkings = response.parkings;
                ctx.commit('setParkings', parkings);
            })
        }
    },
    mutations: {
        setParkings(state, parkings){
            state.parkings = parkings
        }
    },
    state: {
        parkings: []
    },
    getters: {
        Parkings(state) {
            return state.parkings
        }
    },

}
