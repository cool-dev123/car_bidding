<template>
    <div>
        <Cube v-if="Slider.length == 0 || Cars.length == 0"></Cube>
        <header-component v-if="Cars.length > 0 && Slider.length > 0"></header-component>
        <slider v-if="Cars.length > 0 && Slider.length > 0" :sliders="this.Slider"></slider>
        <filters v-if="Cars.length > 0 && Slider.length > 0" :allcars="Cars"></filters>
        <cars-root @page="getResultsPagein($event)" :cars="this.auctioncars" v-if="Cars.length > 0 && Slider.length > 0"></cars-root>
        <footer-component v-if="Cars.length > 0 && Slider.length > 0"></footer-component>
    </div>
</template>

<script>
    import {mapGetters} from 'vuex';
    export default {
        name: "Auctions",
        data() {
            return {
                offsetCars: [],
                filters: [],
                auctioncars: [],
                id: this.$router.currentRoute.params['id']
            }
        },
        created: function () {
            this.getResults(1, this.id);
        },
        mounted(){
            this.$store.dispatch('fetchSlider');
            this.$store.dispatch('fetchCars');
        },
        computed: mapGetters(["Slider","Cars"]),
        methods: {
            getResults(page, id) {
                if (typeof page === 'undefined') {
                    page = 1;
                }

                axios.get('/auction/' + id + '/?page=' + page)
                    .then(response => {
                        return this.auctioncars = response;
                    })
            },
            getResultsPagein(page) {
                if (typeof page === 'undefined') {
                    page = 1;
                }

                axios.get('/auction/' + this.id + '/?page=' + page)
                    .then(response => {
                        return this.auctioncars = response;
                    })
            },
        },
        watch: {
            $route(toR, fromR) {
                this.id = toR.params['id'];
                this.getResults(1, this.id);
            },
        }
    }

</script>

<style scoped>

</style>
