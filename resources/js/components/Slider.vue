<template>
    <div class="container-fluid carbidding-container">
        <section id="lastcars">
            <div class="container container-back">
                <div id="bs4-slide-carousel" class="carousel slide d-block d-sm-none slide"
                     data-ride="carousel">
                    <div class="carousel-inner text-center">
                        <a class="carousel-control-prev" href="#bs4-slide-carousel" role="button"
                           data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#bs4-slide-carousel" role="button"
                           data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div id="carouselExampleControls" class="carousel slide d-none d-sm-block m-50 slide"
                     data-ride="carousel">
                    <div class="carousel-inner text-center carouselin">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col slider-col">
                                    <img class="img-fluid" v-lazy-src="'/img/'+slider[0].mainpics"
                                         :alt="slider[0].name">
                                    <div class="car-informacion">
                                        <div class="inform-text">
                                            <div class="row">
                                                <div class="col">
                                                    <p>Лот | #{{slider[0].id}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <p>{{slider[0].name}} | {{slider[0].year}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <p>Текущая цена | {{slider[0].currentPrice}} ₽</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <p>Начало торгов | {{slider[0].auctionStart}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <p>Завершение торгов: | {{slider[0].endOfAuction}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <router-link :to="'/cars/'+slider[0].id"
                                                                 :key="slider[0].id">
                                                        <button type="button" class="btn btn-light">Смотреть
                                                        </button>
                                                    </router-link>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" v-if="index !== 0 && index < 10" v-for="(slid, index) in slider">
                            <div class="row">
                                <div class="col slider-col">
                                    <img class="img-fluid" v-lazy-src="'/img/'+slid.mainpics"
                                         :alt="slid.name">
                                    <div class="car-informacion">
                                        <div class="inform-text">
                                            <div class="row">
                                                <div class="col">
                                                    <p>Лот | #{{slid.id}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <p>{{slid.name}} | {{slid.year}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <p>Текущая цена | {{slid.currentPrice}} ₽</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <p>Начало торгов | {{slid.auctionStart}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <p>Завершение торгов: | {{slid.endOfAuction}}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <router-link :to="'/cars/'+slid.id" :key="slid.id">
                                                        <button type="button" class="btn btn-light">Смотреть
                                                        </button>
                                                    </router-link>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                           data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only"></span>
                        </a>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                           data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only"></span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
    export default {
        name: "Slider",
        props: ['sliders'],
        data() {
            return {
                slider: [],
            }
        },
        created() {
            this.slider = this.sliders;
        }
    }
</script>

<style scoped>

</style>
