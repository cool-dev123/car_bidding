export default {
    actions: {
        async fetchUser(ctx) {
            axios.get('/fetchUser').then(response => {
                const user = response.data;
                ctx.commit('updateUser', user);
            })
        }
    },
    mutations: {
        updateUser(state, user){
            state.user = user
        }
    },
    state: {
        user: []
    },
    getters: {
        User(state) {
            return state.user
        }
    },

}
