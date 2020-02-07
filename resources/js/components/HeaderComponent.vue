<template>
    <div class="container-fluid headerback">
        <div class="container-fluid  fixed-top" id="carnavbar">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <router-link to="/#"><img src="/img/design_img/header_logo.png" id="headerlogo" alt="logo"></router-link>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div id="navbarCollapse" class="collapse navbar-collapse menunavbar">
                        <ul class="nav navbar-nav">
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Меню</a>
                                <div id="link" class="dropdown-menu">
                                    <li class="nav-item router-link-exact-active router-link-active">
                                        <router-link class="nav-link" to="/">Главная</router-link>
                                    </li>
                                    <li class="nav-item">
                                        <router-link class="nav-link" to="/faq">Вопрос-ответ</router-link>
                                    </li>
                                    <li class="nav-item">
                                        <router-link class="nav-link" to="/about">О компании</router-link>
                                    </li>
                                    <li class="nav-item">
                                        <router-link class="nav-link" to="/rules">Правила</router-link>
                                    </li>
                                    <li class="nav-item">
                                        <router-link class="nav-link" to="/contacts">Контакты</router-link>
                                    </li>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Все Аукционы</a>
                                <div class="dropdown-menu">
                                    <li class="nav-item" v-for="auction in allAuctions">
                                        <router-link class="nav-link" :to="'/auctions/'+auction.id">{{auction.name}}
                                        </router-link>
                                    </li>
                                </div>
                            </li>
                            <li class="nav-item" v-if="User.length == 0">
                                 <router-link class="nav-link" to="/login">Войти</router-link>
                            </li>
                            <li class="nav-item" v-if="User.length == 0">
                                 <router-link class="nav-link" to="/register">Регистрация</router-link>
                            </li>
                            <li class="nav-item dropdown" v-if="User.length != 0">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown">{{User.name}}</a>
                                <div class="dropdown-menu">
                                    <li class="nav-item router-link-exact-active router-link-active" v-if="User.usertype == 'admin'">
                                        <a href="/admin" class="nav-link">Админ Панель</a>
                                    </li>
                                    <li class="nav-item">
                                        <router-link class="nav-link" to="/profile">Профиль</router-link>
                                    </li>
                                    <li class="nav-item">
                                        <form action="logout" method="POST">
                                            <button class="logoutbut"
                                                    type="submit">
                                                <a>Выход</a>
                                            </button>
                                            <input type="hidden" name="_token" :value="csrf">
                                        </form>
                                    </li>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="searchbox_div responsive">
                                    <form class="searchbox"  action="/searchcar" method="GET">
                                        <div class="input-group no-border searchdiv">
                                            <input type="text" name="name" class="form-control searchinput"
                                                   placeholder="Поиск...">
                                            <div class="input-group-append">
                                                <div class="input-group-text searchicon">
                                                    <button class="butsearch"
                                                            type="submit"><img
                                                        src="/img/design_img/search-icon-90107.png"
                                                        style="width:18px;" alt="searchicon">
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</template>

<script>
    import {mapGetters} from 'vuex';
    export default {
        name: "HeaderComponent",
        data() {
            return {
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            }
        },
        mounted(){
            this.$store.dispatch('fetchAuctions');
            this.$store.dispatch('fetchUser');
        },

        computed: mapGetters(["allAuctions", "User"]),
    }
</script>
<style scoped>
</style>




