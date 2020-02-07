<template>
    <div>
        <Cube v-if="car.length == 0 && Images.length == 0"></Cube>
        <header-component v-if="car.length != 0 && Images.length != 0"></header-component>
        <div class="container-fluid margin" v-if="car.length != 0 && Images.length != 0">
            <div class="container">
                <div class="row main_row">
                    <div class="col-lg-5 cars_section">
                        <img class="img-fluid" id="main_pic" :src="'/img/'+car.mainpics" alt="BMW">
<!--                        <div class="row small_pics_row">-->
<!--                            <div v-for="image in Images" v-if="image.carID == id" class="col-md-3 smallSlide">-->
                        <ul class="small_pics_row">
                            <li v-for="image in Images" v-if="image.carID == id" class="smallSlide">
                                <img @click="slide(image.id)" :id="image.id" v-if="image.carID == id" class="img-fluid smallImages"
                                     :src="'/img/'+image.name" alt="Slide">
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-5 car_info">
                        <span class="lot_number">Лот №1907-0906</span>
                        <h6 class="current_prize">Текущая цена: {{ car.currentPrice }} &#8381;</h6>
                        <h6 class="car_type">Легковой автомобиль {{ car.name }} {{ car.year }}</h6>
                        <div class="row auction_desc_uls">
                            <div class="col ul_one">
                                <ul>
                                    <li><span>начало аукциона:</span></li>
                                    <li><span>окончание аукциона:</span></li>
                                    <li><span>начальная цена:</span></li>
                                    <li><span>шаг аукциона:</span></li>
                                    <li><span>ставка НДС:</span></li>
                                </ul>
                            </div>
                            <div class="col ul_two">
                                <ul>
                                    <li><span>{{ car.auctionStart }}</span></li>
                                    <li><span>{{ car.endOfAuction }}</span></li>
                                    <li><span>{{ car.startingPrice }}</span></li>
                                    <li><span>{{ car.auctionStep }}</span></li>
                                    <li><span>в том числе 20%</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="ending_counter_div">
                            <span class="hour_span"> 21ч. 0м. </span>
                            <span class="txt_span"> до завершения</span>
                        </div>
                    </div>
                </div>
                <div class="row mobiles_data_row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <h5 class="car_data_title">Данные по автомобилю</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col m_data_list">
                                        <ul>
                                            <li>Номер Лота | #{{ car.id }}</li>
                                            <li>Марка | {{ car.modelId }}</li>
                                            <li>Модель | {{ car.name }}</li>
                                            <li>Марка и модель по ПТС/ПСМ | {{ car.name }} / {{ car.year }}г.</li>
                                            <li>Кузов | {{ car.bodyId }}</li>
                                            <li>Год выпуска | {{ car.year }}г.</li>
                                            <li>Пробег |  {{ car.milage }}км.</li>
                                            <li>VIN | </li>
                                        </ul>
                                    </div>
                                    <div class="col m_data_list">
                                        <ul>
                                            <li>Цвет | {{ car.color }}</li>
                                            <li>Тип аукциона | {{ car.categorId }}</li>
                                            <li>Место осмотра | {{ car.parkingId }}</li>
                                            <li>Комментарии | {{ car.comments }}</li>
                                            <li>Номер ПСМ/ПТС | </li>
                                            <li>Модель, номер двигателя | {{ car.engNumber }}</li>
                                            <li>Двигатель | {{ car.engine }}</li>
                                            <li>Коробка передач: | {{ car.transmission }}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer-component v-if="car.length != 0 && Images.length != 0"></footer-component>
    </div>
</template>

<script>
    import {mapGetters} from 'vuex';
    export default {
        name: "ShowCar",
        data() {
            return {
                id: this.$route.params['id'],
                car: [],
            }
        },
        created: function () {
            this.fetchCar();
        },
        mounted(){
            this.$store.dispatch('fetchImages');
        },
        computed: mapGetters(["Images"]),
        methods: {
            fetchCar() {
                axios.get('/car/' + this.id).then(response => {
                    this.car = response.data;
                })
            },
            slide(id) {
                let current = document.getElementById('main_pic');
                let that = document.getElementById(id);
                let src = that.getAttribute('src');
                current.setAttribute('src', src);
            },
        },
        watch: {
            $route(toR, fromR) {
                this.id = toR.params['id']
            }
        }
    }
</script>

<style scoped>
</style>
