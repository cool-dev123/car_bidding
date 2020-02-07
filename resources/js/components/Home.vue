<template>
    <div>
        <Cube v-if="Slider.length == 0 || Cars.length == 0"></Cube>
        <header-component v-if="Cars.length > 0 && Slider.length > 0"></header-component>
        <slider v-if="Cars.length > 0 && Slider.length > 0" :sliders="this.Slider"></slider>
        <filters v-if="Cars.length > 0 && Slider.length > 0" :allcars="Cars"></filters>
        <cars-root @page="getResults($event)" :cars="this.cars" v-if="Cars.length > 0 && Slider.length > 0"></cars-root>
        <footer-component v-if="Cars.length > 0 && Slider.length > 0"></footer-component>
    </div>
</template>

<script>
    import {mapGetters} from 'vuex';
    export default {
        name: "Home",
        props: ["carsall"],
        data() {
            return {
                cars: [],
            }
        },
        created: function () {
            this.getResults();
        },
        mounted(){
            this.$store.dispatch('fetchSlider');
            this.$store.dispatch('fetchCars');
        },
        computed: mapGetters(["Slider","Cars"]),
        methods: {
            getResults(page) {
                if (typeof page === 'undefined') {
                    page = 1;
                }
                axios.get('/fetchcars?page=' + page)
                    .then(response => {
                        return response;
                    }).then(data => {
                    this.cars = data;
                });
            },
        }
    }
</script>

<style scoped>
</style>
