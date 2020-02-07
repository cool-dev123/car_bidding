<template>
    <div>
        <Cube v-if="Slider.length == 0 || Cars.length == 0"></Cube>
        <header-component v-if="Cars.length > 0 && Slider.length > 0"></header-component>
        <slider v-if="Cars.length > 0 && Slider.length > 0" :sliders="this.Slider"></slider>
        <filters v-if="Cars.length > 0 && Slider.length > 0" :allcars="Cars"></filters>
        <div class="container-fluid" v-if="Slider.length > 0 && Cars.length > 0">
            <div class="container container-back" v-if="carsfilter.length != 0">
                <div class="row cars-root">
                    <div class="col-md-4 cars-article" v-for="(car, index) in carsfilter">
                        <router-link :to="'/cars/'+car.id" :key="car.id">
                            <div class="row">
                                <div class="text-hover">
                                    <img :src="'/img/'+car.mainpics" :alt="car.name">
                                    <div class="drop-text drop-text-responsive">
                                        <p class="cars-article-texts">{{car.name}} | {{car.year}}</p>
                                        <p class="cars-article-texts">Текущая цена | {{car.currentPrice}} ₽</p>
                                        <p class="cars-article-texts">Начало торгов | {{car.auctionStart}}</p>
                                        <p class="cars-article-texts">Завершение торгов: | {{car.endOfAuction}}</p>
                                    </div>
                                    <div class="article-price">
                                        <p class="article-price-tag">{{car.currentPrice}}₽</p>
                                    </div>
                                </div>
                            </div>
                        </router-link>
                    </div>
                </div>
            </div>
            <div class="container container-back" v-if="carsfilter.length == 0">
                <div class="row cars-root">
                    <div class="col-md-8 notfoundtxt">
                        <h1>По вашему запросу ничего не найдено</h1>
                    </div>
                    <div class="col-md-2 notfoundimg">
                        <img src="/img/design_img/27-272926_confused-clipart-confused-person-confused-png.png"
                             alt="notfound">
                    </div>
                </div>
            </div>
        </div>
        <footer-component v-if="Cars.length > 0 && Slider.length > 0"></footer-component>
    </div>
</template>

<script>
    import {mapGetters} from 'vuex';

    export default {
        name: "FilterCars",
        props: ['carsfilter'],
        mounted() {
            this.$store.dispatch('fetchSlider');
            this.$store.dispatch('fetchCars');
        },
        computed: mapGetters(["Slider", "Cars"]),
    }
</script>

<style scoped>

</style>
