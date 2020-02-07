<template>
    <div>
        <Cube v-if="User.length == 0"></Cube>
        <div id="header_design_two">
            <header-component v-if="User.length != 0"></header-component>
            <div class="container-fluid profile_bg_white" v-if="User.length != 0">
                <div class="container profile_container">
                    <div class="row profile_row">
                        <div class="col profile_menu">
                            <div class="row mx-0">
                                <div class="col-md-3 avatar_section">
                                    <h1>{{User.length}}</h1>
                                    <img class="avatar_img" v-if="!User.avatar && User.gender == 'male'"
                                         src="/img/avatar/images.png">
                                    <img class="avatar_img" v-else-if="!User.avatar && User.gender == 'female'"
                                         src="/img/avatar/female-avatar-profile-icon-round-african-american-vector-18307298.jpg">
                                    <img class="avatar_img" v-else-if="User.avatar" :src="'/img/'+User.avatar">
                                </div>
                                <div class="col-md-6 user_name_ul ">
                                    <h6 class="user_name_tag">{{User.name}} {{User.sname}}</h6>
                                    <button class="myprofile_btn btn-ripple">Мой профиль</button>
                                    <button class="profile_btn_followers btn-ripple">Мои подписки</button>
                                </div>
                                <div class="col-md-12 profile_menu_nav">
                                    <ul class="profile_menu_ul">
                                        <button class="tablinks" @click="openTabs('profile')">
                                            <li id="profilebut" class="profile_menu_li active"><i
                                                class="fas fa-user"></i>Профиль
                                            </li>
                                        </button>
                                        <button class="tablinks" @click="openTabs('balance')">
                                            <li id="balancebut" class="profile_menu_li"><i
                                                class="fas fa-ruble-sign"></i>Лицевой
                                                счёт
                                            </li>
                                        </button>
                                        <button class="tablinks" @click="openTabs('changepass')">
                                            <li id="changepassbut" class="profile_menu_li"><i class="fas fa-unlock"></i>
                                                Изменить пароль
                                            </li>
                                        </button>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col profile_data">
                            <h3 class="personal_data_title">Личные данные</h3>
                            <table class="table table-striped table-hover">
                                <tbody>
                                <tr>
                                    <th>Фамилия *</th>
                                    <td class="showView">{{User.sname}}</td>
                                    <td class="showEdit">
                                        <input class="form-control  required" type="text" name="lastName"
                                               value="Sardaryan">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Имя *</th>
                                    <td class="showView">{{User.name}}</td>
                                    <td class="showEdit">
                                        <input class="form-control  required" type="text" name="lastName"
                                               value="Sardaryan">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Дата рождения *</th>
                                    <td class="showView">{{User.date_of_birth}}</td>
                                    <td class="showEdit">
                                        <input class="form-control datepicker hasDatepicker" type="date"
                                               name="birthDate">
                                    </td>
                                </tr>
                                <tr>
                                    <th>ИНН физ. лица *</th>
                                    <td class="showView">AAAA</td>
                                    <td class="showEdit">
                                        <input class="form-control  required" type="text" name="lastName"
                                               value="Sardaryan">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Расчетный/лицевой счет *</th>
                                    <td class="showView">999888777</td>
                                    <td class="showEdit">
                                        <input class="form-control  required" type="text" name="lastName"
                                               value="Sardaryan">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Расчетный/лицевой счет *</th>
                                    <td class="showView">999888777</td>
                                    <td class="showEdit">
                                        <input class="form-control  required" type="text" name="lastName"
                                               value="Sardaryan">
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div id="profiletab" class="tabcontent activetabis">
                        <div class="row contact_info_row">
                            <div class="col-md-6 profile_data">
                                <h3 class="personal_data_title">Паспортные данные</h3>
                                <table class="table table-striped table-hover">
                                    <tbody>
                                    <tr>
                                        <th>Паспорт *</th>
                                        <td class="showView">{{User.passport}}</td>
                                        <td class="showEdit">
                                            <input class="form-control  required" type="text" name="passportNumber"
                                                   value="Sardaryan">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Кем выдан *</th>
                                        <td class="showView">{{User.issuedBy}}</td>
                                        <td class="showEdit">
                                            <input class="form-control  required" type="text" name="givenFrom"
                                                   value="Sardaryan">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Дата выдачи *</th>
                                        <td class="showView">{{User.dateOfIssue}}</td>
                                        <td class="showEdit">
                                            <input class="form-control  required" type="text" name="givenDate"
                                                   value="Sardaryan">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Код подразделения *</th>
                                        <td class="showView">{{User.unitCode}}</td>
                                        <td class="showEdit">
                                            <input class="form-control  required" type="text" name="placeCode"
                                                   value="Sardaryan">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Место регистрации *</th>
                                        <td class="showView">{{User.placeOfRegistration}}</td>
                                        <td class="showEdit">
                                            <input class="form-control  required" type="text" name="RegistrName"
                                                   value="Sardaryan">
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-6 profile_data">
                                <h3 class="personal_data_title">Контактная информация</h3>
                                <table class="table table-striped table-hover">
                                    <tbody>
                                    <tr>
                                        <th>Телефон *</th>
                                        <td class="showView">{{User.phone}}</td>
                                        <td class="showEdit">
                                            <input class="form-control  required" type="tel" name="phone"
                                                   value="Sardaryan">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>E-mail *</th>
                                        <td class="showView">{{User.email}}</td>
                                        <td class="showEdit">
                                            <input class="form-control  required" type="email" name="email"
                                                   value="Sardaryan">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Почтовый индекс *</th>
                                        <td class="showView">{{User.postcode}}</td>
                                        <td class="showEdit">
                                            <input class="form-control  required" type="text" name="postIndex"
                                                   value="Sardaryan">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Почтовый адрес *</th>
                                        <td class="showView">{{User.email}}</td>
                                        <td class="showEdit">
                                            <input class="form-control required" type="text" name="postCode">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Дополнительно *</th>
                                        <td class="showView">{{User.additionally}}</td>
                                        <td class="showEdit">
                                            <input class="form-control required" type="text" name="additional"
                                                   value="Sardaryan">
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div id="balancetab" class="tabcontent">
                        <div class="row count_row">
                            <div class="col-md-6 profile_data">
                                <h3 class="personal_data_title">Лицевой счет</h3>
                                <table class="table table-striped table-hover">
                                    <tbody>
                                    <tr>
                                        <th>Лицевой счет № {{User.id}} *</th>
                                        <td class="showView">{{User.sname}}</td>
                                        <td class="showEdit">
                                            <input class="form-control  required" type="text" name="passportNumber"
                                                   value="Sardaryan">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Субсчет депозита *</th>
                                        <td class="showView">{{User.name}}</td>
                                        <td class="showEdit">
                                            <input class="form-control  required" type="text" name="givenFrom"
                                                   value="Sardaryan">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Субсчет свободных средств *</th>
                                        <td class="showView">{{User.sname}}</td>
                                        <td class="showEdit">
                                            <input class="form-control  required" type="text" name="givenDate"
                                                   value="Sardaryan">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Субсчет заблокированных средств в счет задатка *</th>
                                        <td class="showView">{{User.sname}}</td>
                                        <td class="showEdit">
                                            <input class="form-control  required" type="text" name="placeCode"
                                                   value="Sardaryan">
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-6 profile_data">
                                <h3 class="personal_data_title">Реквизиты для пополнения лицевого счета</h3>
                                <table class="table table-striped table-hover">
                                    <tbody>
                                    <tr>
                                        <th>Расчетный счет *</th>
                                        <td class="showView">{{User.phone}}</td>
                                        <td class="showEdit">
                                            <input class="form-control  required" type="tel" name="phone"
                                                   value="Sardaryan">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Корреспондентский счет *</th>
                                        <td class="showView">{{User.email}}</td>
                                        <td class="showEdit">
                                            <input class="form-control  required" type="email" name="email"
                                                   value="Sardaryan">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>БИК *</th>
                                        <td class="showView">{{User.postcode}}</td>
                                        <td class="showEdit">
                                            <input class="form-control  required" type="text" name="postIndex"
                                                   value="Sardaryan">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>ИНН *</th>
                                        <td class="showView">{{User.date_of_birth}}</td>
                                        <td class="showEdit">
                                            <input class="form-control required" type="text" name="postCode">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>КПП *</th>
                                        <td class="showView">{{User.sname}}</td>
                                        <td class="showEdit">
                                            <input class="form-control required" type="text" name="additional"
                                                   value="Sardaryan">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Наименование банка *</th>
                                        <td class="showView">{{User.sname}}</td>
                                        <td class="showEdit">
                                            <input class="form-control required" type="text" name="additional"
                                                   value="Sardaryan">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Наименование получателя *</th>
                                        <td class="showView">{{User.sname}}</td>
                                        <td class="showEdit">
                                            <input class="form-control required" type="text" name="additional"
                                                   value="Sardaryan">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Назначение платежа для субсчета депозита *</th>
                                        <td class="showView">{{User.sname}}</td>
                                        <td class="showEdit">
                                            <input class="form-control required" type="text" name="additional"
                                                   value="Sardaryan">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Назначение платежа для субсчета свободных средств *</th>
                                        <td class="showView">{{User.sname}}</td>
                                        <td class="showEdit">
                                            <input class="form-control required" type="text" name="additional"
                                                   value="Sardaryan">
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div id="changepasstab" class="tabcontent">
                        <div class="row count_row">
                            <div class="col-md-12 profile_data">
                                <form method="POST" action="changepassword">
                                    <input type="hidden" name="_token" :value="csrf">
                                    <h3 class="personal_data_title">Изменить пароль</h3>
                                    <table class="table table-striped table-hover">
                                        <tbody>
                                        <tr>
                                            <th>Текущий пароль *</th>
                                            <td class="showView"><input id="password" type="password"
                                                                        class="form-control"
                                                                        name="current_password"
                                                                        autocomplete="current-password"></td>
                                        </tr>
                                        <tr>
                                            <th>Новый пароль *</th>
                                            <td class="showView"><input id="new_password" type="password"
                                                                        class="form-control"
                                                                        name="new_password"
                                                                        autocomplete="current-password"></td>
                                        </tr>
                                        <tr>
                                            <th>Подтвердите Пароль *</th>
                                            <td class="showView"><input id="new_confirm_password" type="password"
                                                                        class="form-control"
                                                                        name="new_confirm_password"
                                                                        autocomplete="current-password"></td>
                                        </tr>
                                        <tr>
                                            <th></th>
                                            <td class="showView">
                                                <button type="submit" class="btn btn-primary">
                                                    Изменить
                                                </button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer-component v-if="User.length != 0"></footer-component>
        </div>
    </div>
</template>

<script>
    import {mapGetters} from 'vuex';

    export default {
        name: "Profile",
        data() {
            return {
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            }
        },
        mounted() {
            this.$store.dispatch('fetchUser');
        },
        methods: {
            openTabs(tabname) {
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("tabcontent");
                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("tablinks");
                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                }
                document.getElementById(tabname + 'tab').style.display = "block";
                var elem = document.getElementsByClassName('profile_menu_li');
                for (let p = 0; p < elem.length; p++) {
                    elem[p].classList.remove("active");
                }
                document.getElementById(tabname + 'but').classList.add("active");
            },
        },
        computed: mapGetters(["User"]),
    }
</script>

<style scoped>
</style>
