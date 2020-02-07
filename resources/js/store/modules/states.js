export default {
    actions: {
        async fetchStates(ctx) {
            axios.get('/fetchstates').then(response => {
                const states = response.data;
                ctx.commit('setStates', states);
            })
        }
    },
    mutations: {
        setStates(state, states){
            state.states = states
        }
    },
    state: {
        states: []
    },
    getters: {
        States(state) {
            return state.states
        }
    },

}
