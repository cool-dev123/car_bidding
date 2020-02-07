export default {
    actions: {
        async fetchModels(ctx) {
            axios.get('/fetchmodels').then(response => {
                const models = response.data;
                ctx.commit('setModels', models);
            })
        }
    },
    mutations: {
        setModels(state, models){
            state.models = models
        }
    },
    state: {
        models: []
    },
    getters: {
        Models(state) {
            return state.models
        }
    },

}
