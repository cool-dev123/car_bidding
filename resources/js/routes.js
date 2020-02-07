import VueRouter from 'vue-router';
import Home from './components/Home.vue';
import Auctions from './components/Auctions.vue';
import ShowCar from './components/ShowCar.vue';
import About from './components/About.vue';
import SearchCar from './components/SearchCar.vue';
import Login from './components/Login.vue';
import Register from './components/Register.vue';
import Contacts from './components/Contacts.vue';
import Faq from './components/Faq.vue';
import Rules from './components/Rules.vue';
import FilterCars from "./components/FilterCars";
import Profile from "./components/Profile";

export default new VueRouter({
    routes: [
        {
            name: 'home',
            path: '/',
            component: Home,
            props: true
        },
        {
            path: '/home',
            component: Home,
            props: true
        },
        {
            path: '/auctions',
            component: Auctions
        },
        {
            path: '/auctions/:id',
            component: Auctions
        },
        {
            path: '/cars/:id',
            component: ShowCar
        },
        {
            name: 'about',
            path: '/about',
            component: About
        },
        {
            path: '/profile',
            component: Profile
        },
        {
            name: 'searchcar',
            path: '/searchcar',
            component: SearchCar,
            props: true
        },
        {
            name: 'filtercar',
            path: '/filtercar',
            component: FilterCars,
            props: true
        },
        {
            name: 'changepassword',
            path: '/changepassword',
            component: Profile,
        },
        {
            path: '/filtercarau',
            component: FilterCars,
            props: true
        },
        {
            name: 'log',
            path: '/login',
            component: Login,
            props: true
        },
        {
            name: 'reg',
            path: '/register',
            component: Register,
            props: true
        },
        {
            path: '/contacts',
            component: Contacts,
            props: true
        },
        {
            path: '/faq',
            component: Faq,
        },
        {
            path: '/rules',
            component: Rules,
        },
    ],
    mode: 'history'
})
