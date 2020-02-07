export default {
    actions: {
        async fetchAuctions(ctx) {
            axios.get('/fetchauctions').then(response => {
                const auctions = response.data;
                ctx.commit('updateAuctions', auctions);
            })
        }
    },
    mutations: {
        updateAuctions(state, auctions){
            state.auctions = auctions
        }
    },
    state: {
        auctions: []
    },
    getters: {
        allAuctions(state) {
            return state.auctions
        }
    },

}
