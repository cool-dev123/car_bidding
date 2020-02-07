npm install --save countup.js vue-countup-v2
<template>
    <div class="container-fluid">
        <div class="container">
            <div class="row count-up-row">
                <div class="count-up-back">
                    <div class="iCountUp">
                        <i class="fas fa-user statisti-icons"></i>
                        <ICountUp
                            :delay="delay"
                            :endVal="endValUsers"
                            :options="options"
                        />
                        <h5>Пользовательи</h5>
                    </div>
                </div>
                <div class="count-up-back">
                    <div class="iCountUp">
                        <i class="fas fa-user statisti-icons"></i>
                        <ICountUp
                            :delay="delay"
                            :endVal="endValUsers"
                            :options="options"
                        />
                        <h5>Пользовательи</h5>
                    </div>
                </div>
                <div class="count-up-back">
                    <div class="iCountUp">
                        <i class="fas fa-user statisti-icons"></i>
                        <ICountUp
                            :delay="delay"
                            :endVal="endValUsers"
                            :options="options"
                        />
                        <h5>Пользовательи</h5>
                    </div>
                </div>
                <div class="count-up-back">
                    <div class="iCountUp">
                        <i class="fas fa-car"></i>
                        <ICountUp
                            :delay="delay"
                            :endVal="endValCars"
                            :options="options"
                        />
                        <h5>Машины</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import ICountUp from 'vue-countup-v2';

    export default {
        name: "Statistic",
        components: {
            ICountUp
        },
        data() {
            return {
                delay: 2000,
                endValUsers: 5,
                endValCars: 5,
                options: {
                    useEasing: true,
                    useGrouping: true,
                    separator: ',',
                    decimal: '.',
                    prefix: '',
                    suffix: ''
                }
            };
        },
        created: function () {
            this.fetchCars();
            this.fetchUsers();
        },
        methods: {
            // onReady: function (instance, CountUp) {
            //     const that = this;
            //     instance.update(that.endVal);
            // },
            fetchCars() {
                axios.get('/fetchcarsall').then(response => {
                    this.endValUsers = response.data.length
                })
            },
            fetchUsers() {
                axios.get('/fetchusers').then(response => {
                    this.endValCars = response.data.length
                })
            },
        }
    };
</script>

<style scoped>

</style>
