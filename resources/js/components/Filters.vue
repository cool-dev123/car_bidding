<template>
<div>
    <div class="container container-back">
        <div class="row body-cats">
            <div class="car_types_div">
                <ul class="nav nav-tabs" id="carTypes">
                    <li @click="classLi(0)" role="presentation" class="body-cars carTypeActive" data-id="0">
                        <div class="quantity_cars">
                            <p class="count_cars_body">{{ quanitityAll }}</p>
                        </div>
                        <a title="Все типы">
                            <i class="fas fa-car-side" icon-id="0"></i>
                            <p class="carTypesText">Все типы</p>
                        </a>
                    </li>
                    <li @click="classLi(3)" role="presentation" class="body-cars" data-id="3">
                        <div class="quantity_cars">
                            <p class="count_cars_body">{{ quanititySedan }}</p>
                        </div>
                        <a title="Легковые">
                            <i class="fas fa-car" icon-id="3"></i>
                            <p class="carTypesText">Легковые</p>
                        </a>
                    </li>
                    <li @click="classLi(4)" role="presentation" class="body-cars" data-id="4">
                        <div class="quantity_cars">
                            <p class="count_cars_body">{{ quanitityLightComm }}</p>
                        </div>
                        <a title="Легкие коммерческие">
                            <i class="fas fa-truck"></i>
                            <p class="carTypesText">Легкие коммерческие</p>
                        </a>
                    </li>
                    <li @click="classLi(5)" role="presentation" class="body-cars" data-id="5">
                        <div class="quantity_cars">
                            <p class="count_cars_body">{{ quanitityTruck }}</p>
                        </div>
                        <a title="Грузовые">
                            <i class="fas fa-truck-moving" icon-id="4"></i>
                            <p class="carTypesText">Грузовые</p>
                        </a>
                    </li>
                    <li @click="classLi(6)" role="presentation" class="body-cars" data-id="6">
                        <div class="quantity_cars">
                            <p class="count_cars_body">{{ quanititySedTyag }}</p>
                        </div>
                        <a title="Седельные тягачи">
                            <i class="fas fa-truck-pickup" icon-id="5"></i>
                            <p class="carTypesText">Седельные тягачи</p>
                        </a>
                    </li>
                    <li @click="classLi(7)" role="presentation" class="body-cars" data-id="7">
                        <div class="quantity_cars">
                            <p class="count_cars_body">{{ quanitityTrailers }}</p>
                        </div>
                        <a title="Прицепы">
                            <i class="fas fa-truck-loading" icon-id="6"></i>
                            <p class="carTypesText">Прицепы</p>
                        </a>
                    </li>
                    <li @click="classLi(8)" role="presentation" class="body-cars" data-id="8">
                        <div class="quantity_cars">
                            <p class="count_cars_body">{{ quanitityBus }}</p>
                        </div>
                        <a title="Автобусы">
                            <i class="fas fa-bus" icon-id="7"></i>
                            <p class="carTypesText">Автобусы</p>
                        </a>
                    </li>
                    <li @click="classLi(9)" role="presentation" class="body-cars" data-id="9">
                        <div class="quantity_cars">
                            <p class="count_cars_body">{{ quanititySprecialTech }}</p>
                        </div>
                        <a title="Спецтехника">
                            <i class="fas fa-tractor" icon-id="9"></i>
                            <p class="carTypesText">Спецтехника</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid car-filters">
        <div class="container container-back">
            <form action="/filtercar" type="GET">
                <div class="row select-options-filter filter_row">
                    <div class="col">
                        <label></label>
                        <select @change="filterByModels($event)" id="model" name="modelval"
                                class="form-control options selectbox">
                            <option value="">Все марки</option>
                            <option v-for="(model, index) in Models" :value="model.id">{{ model.name
                                }}
                            </option>
                        </select>
                    </div>
                    <div class="col">
                        <label></label>
                        <select id="state" @change="filterByStates($event)" name="stateval"
                                class="form-control options selectbox">
                            <option value="">Все состояния</option>
                            <option v-for="(state, index) in States" :value="state.id">{{ state.name
                                }}
                            </option>
                        </select>
                    </div>
                    <div class="col">
                        <label></label>
                        <select id="parking" name="parkingval" @change="filterByParkings($event)"
                                class="form-control options selectbox">
                            <option value="">Все стоянки</option>
                            <option v-for="(parking, index) in Parkings" :value="parking.id">
                                {{ parking.address }}
                            </option>
                        </select>
                    </div>
                    <div class="col">
                        <label>Дата завершения</label>
                        <div class="row input-row">
                            <p>С</p>
                            <div class="col filter-date filter-date-d">
                                <input @change="filterByStarts($event)" name="startval" type="date" id="start"
                                       value=""
                                       class="input-date form-control options">
                            </div>
                            <p>ПО</p>
                            <div class="col filter-date filter-date-d">
                                <input @change="filterByEnds($event)" name="endval" type="date" id="finish" value=""
                                       class="input-date form-control options">
                                <input type="hidden" :value="bodiesId" name="bodyval">
                            </div>
                        </div>
                    </div>
                    <div class="col filter-date filter-date-btn">
                        <button class="btn btn-light searchcarsauction" type="submit">
                            <i class="fas fa-search" style="display: inline-block;"></i> {{this.allCarsLength}}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</template>

<script>
    import {mapGetters} from 'vuex';
    export default {
        name: "Filters",
        props: ['allcars'],
        data() {
            return {
                allCarsLength: null,
                quanitityAll: 0,
                quanititySedan: 0,
                quanitityLightComm: 0,
                quanitityTruck: 0,
                quanititySedTyag: 0,
                quanitityTrailers: 0,
                quanitityBus: 0,
                quanititySprecialTech: 0,
                startAu: '',
                endAu: '',
                stateId: '',
                modelId: '',
                parkingId: '',
                bodiesId: '',
                id: this.$router.currentRoute.params['id']
            }
        },
        created: function(){
            this.counts();
            this.allCarsLength = this.allcars.length;
        },
        mounted(){
            this.$store.dispatch('fetchModels');
            this.$store.dispatch('fetchStates');
            this.$store.dispatch('fetchParkings');
            this.$store.dispatch('fetchCars');
        },
        computed: mapGetters(["Models","States","Parkings","Cars"]),
        methods: {
            counts(){
                this.quanitityAll = this.allcars.length
                this.quanititySedan = this.allcars.filter(obj => (obj.bodyId == 3)).length
                this.quanitityLightComm = this.allcars.filter(obj => (obj.bodyId == 4)).length
                this.quanitityTruck = this.allcars.filter(obj => (obj.bodyId == 5)).length
                this.quanititySedTyag = this.allcars.filter(obj => (obj.bodyId == 6)).length
                this.quanitityTrailers = this.allcars.filter(obj => (obj.bodyId == 7)).length
                this.quanitityBus = this.allcars.filter(obj => (obj.bodyId == 8)).length
                this.quanititySprecialTech = this.allcars.filter(obj => (obj.bodyId == 9)).length
            },
            filterByParkings(event) {
                this.parkingId = event.target.value;
                    this.allCarsLength = this.Cars.filter(obj => (obj.parkingId == this.parkingId) && (this.stateId == obj.stateId || this.stateId == '') && (this.modelId == obj.modelId || this.modelId == '') && (this.bodiesId == obj.bodyId || this.bodiesId == '') && (!this.startAu || this.startAu >= new Date(obj.auctionStart).getTime()) && (!this.endAu || this.endAu <= new Date(obj.endOfAuction).getTime())).length;
            },
            filterByStarts(event) {
                this.startAu = new Date(event.target.value).getTime();
                    this.allCarsLength = this.Cars.filter(obj => ((new Date(obj.auctionStart).getTime()) >= this.startAu) && (this.stateId == obj.stateId || this.stateId == '') && (this.parkingId == obj.parkingId || this.parkingId == '') && (this.modelId == obj.modelId || this.modelId == '') && (this.bodiesId == obj.bodyId || this.bodiesId == '') && (!this.endAu || this.endAu <= new Date(obj.endOfAuction).getTime())).length;
            },
            filterByEnds(event) {
                this.endAu = new Date(event.target.value).getTime();
                    this.allCarsLength = this.Cars.filter(obj => ((new Date(obj.endOfAuction).getTime()) <= this.endAu) && (this.stateId == obj.stateId || this.stateId == '') && (this.parkingId == obj.parkingId || this.parkingId == '') && (this.modelId == obj.modelId || this.modelId == '') && (this.bodiesId == obj.bodyId || this.bodiesId == '') && (!this.startAu || this.startAu >= new Date(obj.auctionStart).getTime())).length;
            },
            filterByModels(event) {
                this.modelId = event.target.value;
                    this.allCarsLength = this.Cars.filter(obj => (obj.modelId == this.modelId) && (this.stateId == obj.stateId || this.stateId == '') && (this.parkingId == obj.parkingId || this.parkingId == '') && (this.bodiesId == obj.bodyId || this.bodiesId == '') && (!this.startAu || this.startAu >= new Date(obj.auctionStart).getTime()) && (!this.endAu || this.endAu <= new Date(obj.endOfAuction).getTime())).length;
            },
            filterByStates(event) {
                this.stateId = event.target.value;
                    this.allCarsLength = this.Cars.filter(obj => (obj.stateId == this.stateId) && (this.bodiesId == obj.bodyId || this.bodiesId == '') && (this.parkingId == obj.parkingId || this.parkingId == '') && (this.modelId == obj.modelId || this.modelId == '') && (!this.startAu || this.startAu >= new Date(obj.auctionStart).getTime()) && (!this.endAu || this.endAu <= new Date(obj.endOfAuction).getTime())).length;
            },
            classLi(id) {
                const li = document.getElementsByClassName("body-cars");
                for (let i = 0; i < li.length; i++) {
                    li[i].classList.remove("carTypeActive");
                }
                document.querySelector('li[data-id="' + id + '"]').classList.add("carTypeActive");
                this.bodiesId = id;
                if (!id) {
                        return this.allCarsLength = this.allcars.length;
                }
                if (id) {
                    return this.allCarsLength = this.allcars.filter(obj => (obj.bodyId === id) && (this.stateId == obj.stateId || this.stateId == '') && (this.parkingId == obj.parkingId || this.parkingId == '') && (this.modelId == obj.modelId || this.modelId == '') && (this.parkingId == obj.parkingId || this.parkingId == '') && (!this.startAu || this.startAu >= new Date(obj.auctionStart).getTime()) && (!this.endAu || this.endAu <= new Date(obj.endOfAuction).getTime())).length
                }

            },
        },
    }
</script>

<style scoped>

</style>
