export default {
    actions: {
        async fetchSlider(ctx) {
            axios.get('/fetchslider').then(response => {
                const slider = response.data;
                ctx.commit('setSlider', slider);
            })
        }
    },
    mutations: {
        setSlider(state, slider){
            state.slider = slider
        }
    },
    state: {
        slider: []
    },
    getters: {
        Slider(state) {
            return state.slider
        }
    },

}
