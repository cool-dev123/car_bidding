export default {
    actions: {
        async fetchImages(ctx) {
            axios.get('/images').then(response => {
                const images = response.data;
                ctx.commit('setImages', images);
            })
        }
    },
    mutations: {
        setImages(state, images){
            state.images = images
        }
    },
    state: {
        images: []
    },
    getters: {
        Images(state) {
            return state.images
        }
    },

}
