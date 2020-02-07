<template>
    <div>
        <header-component></header-component>
        <div class="register_bg_img">
            <div class="container register_container">
                <div class="row">
                    <div class="col">
                        <div class="attention_main_txt">
                            <p class="attention">
                                Внимание!
                            </p>
                            <p class="attention_content">
                                Регистрация бесплатна и доступна всем желающим. Пожалуйста, указывайте только
                                достоверные данные - от этого зависит будет ли Ваш аккаунт активирован.
                                По вопросам регистрации обращайтесь по телефону +7 495 748-56-08. Звонки принимаются с
                                9:00 до 18:00 по Московскому времени.
                            </p>
                        </div>
                        <div class="row register_request_row">
                            <div class="col">
                                <ul class="reg_ul">
                                    <li class="reg_li"  @click="registerTabs('buyer')">
                                        <button id="buyerbut" class="reg_btn btn-ripple active">
                                                Хочу покупать ТС
                                        </button>
                                    </li>
                                    <li class="reg_li"  @click="registerTabs('seller')">
                                        <button id="sellerbut" class="reg_btn btn-ripple">
                                            Хочу оценивать и продавать ТС
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div id="buyertab" class="row register_content active_tab">
                            <h6 class="register_title">К регистрации в качестве Продавца допускаются физические лица</h6>
                            <form action="register" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="_token" :value="csrf">
                                <div class="row">
                                    <div class="col-md-4 inputs_div_one">
                                        <div class="row inp_row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="email">Email *</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <span style="color: red; font-weight: bold;" v-if="errorsreg.email">{{errorsreg.email[0]}}</span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <input class="register_inputs reqreg" id="email" type="email"
                                                               name="email" v-model="email" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row  inp_row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="phone">Телефон * (+37491-85-45-35)</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <span style="color: red; font-weight: bold;" v-if="errorsreg.phone">{{errorsreg.phone[0]}}</span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <input class="register_inputs reqreg" id="phone" type="tel"
                                                               name="phone"
                                                               v-model="phone">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row  inp_row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="pssw">Пароль *</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <span style="color: red; font-weight: bold;"
                                                              v-if="errorsreg.password">{{errorsreg.password[0]}}</span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <input class="register_inputs reqreg" id="pssw" type="password"
                                                               name="password"
                                                               v-model="password">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row  inp_row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="psswr">Ещё раз *</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <span style="color: red; font-weight: bold;"
                                                              v-if="errorsreg.passwordconfirm">{{errorsreg.passwordconfirm[0]}}</span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <input class="register_inputs reqreg" id="psswr" type="password"
                                                               name="password_confirmation" v-model="passwordconfirm">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row  inp_row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="avatar">Аватар</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <input id="avatar" class="register_inputs" type="file"
                                                               name="avatar">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">

                                    </div>
                                    <div class="col-md-4 inputs_div_two">
                                        <div class="row  inp_row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="name">Имя *</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <span style="color: red; font-weight: bold;" v-if="errorsreg.name">{{errorsreg.name[0]}}</span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <input class="register_inputs reqreg" id="name" v-model="name"
                                                               type="text"
                                                               name="name">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row  inp_row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="sname">Фамилия *</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <span style="color: red; font-weight: bold;" v-if="errorsreg.sname">{{errorsreg.sname[0]}}</span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <input class="register_inputs reqreg" id="sname" v-model="sname"
                                                               type="text"
                                                               name="sname">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row  inp_row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="date">День рождения *</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <span style="color: red; font-weight: bold;"
                                                              v-if="errorsreg.datebirth">{{errorsreg.datebirth[0]}}</span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <input class="register_inputs reqreg" id="date" type="date"
                                                               v-model="date"
                                                               name="datebirth">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row  inp_row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="textarea">Дополнительно</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <textarea class="register_inputs" id="textarea"
                                                                  name="additionally"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row  inp_row reqreg">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label id="gender">Пол *</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <span style="color: red; font-weight: bold;"
                                                              v-if="errorsreg.gender">{{errorsreg.gender[0]}}</span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="male">Мужское</label>
                                                        <input class="genderreg" value="male" type="radio" name="gender">
                                                        <label for="female">Женское</label>
                                                        <input class="genderreg" type="radio" value="female" name="gender">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="policy">
                                    <label class="policy_label">
                                        <input @change="handleChange" id="regcheckbox" type="checkbox" name="policy"
                                               required> – согласен с обработкой
                                        персональных данных.
                                        <router-link class="policy_txt" to="/rules">Политика в отношении обработки персональных данных в
                                            ООО "CarBidding"</router-link>
                                    </label>
                                </div>
                                <div class="send">
                                    <button class="btn btn-ripple" type="submit" id="reg-but"
                                            disabled>Отправить заявку
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div id="sellertab"  class="row register_content">
                            <h6 class="register_title">К регистрации в качестве Продавца допускаются юридические лица</h6>
                            <form action="register" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="_token" :value="csrf">
                                <div class="row">
                                    <div class="col-md-4 inputs_div_one">
                                        <div class="row inp_row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="email">Email *</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <span style="color: red; font-weight: bold;" v-if="errorsreg.email">{{errorsreg.email[0]}}</span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <input class="register_inputs reqreg" id="email" type="email"
                                                               name="email" v-model="email" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row  inp_row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="phone">Телефон * (+37491-85-45-35)</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <span style="color: red; font-weight: bold;" v-if="errorsreg.phone">{{errorsreg.phone[0]}}</span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <input class="register_inputs reqreg" id="phone" type="tel"
                                                               name="phone"
                                                               v-model="phone">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row  inp_row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="pssw">Пароль *</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <span style="color: red; font-weight: bold;"
                                                              v-if="errorsreg.password">{{errorsreg.password[0]}}</span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <input class="register_inputs reqreg" id="pssw" type="password"
                                                               name="password"
                                                               v-model="password">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row  inp_row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="psswr">Ещё раз *</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <span style="color: red; font-weight: bold;"
                                                              v-if="errorsreg.passwordconfirm">{{errorsreg.passwordconfirm[0]}}</span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <input class="register_inputs reqreg" id="psswr" type="password"
                                                               name="password_confirmation" v-model="passwordconfirm">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row  inp_row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="avatar">Аватар</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <input id="avatar" class="register_inputs" type="file"
                                                               name="avatar">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">

                                    </div>
                                    <div class="col-md-4 inputs_div_two">
                                        <div class="row  inp_row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="name">Имя *</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <span style="color: red; font-weight: bold;" v-if="errorsreg.name">{{errorsreg.name[0]}}</span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <input class="register_inputs reqreg" id="name" v-model="name"
                                                               type="text"
                                                               name="name">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row  inp_row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="sname">Фамилия *</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <span style="color: red; font-weight: bold;" v-if="errorsreg.sname">{{errorsreg.sname[0]}}</span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <input class="register_inputs reqreg" id="sname" v-model="sname"
                                                               type="text"
                                                               name="sname">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row  inp_row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="date">День рождения *</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <span style="color: red; font-weight: bold;"
                                                              v-if="errorsreg.datebirth">{{errorsreg.datebirth[0]}}</span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <input class="register_inputs reqreg" id="date" type="date"
                                                               v-model="date"
                                                               name="datebirth">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row  inp_row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="textarea">Дополнительно</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <textarea class="register_inputs" id="textarea"
                                                                  name="additionally"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row  inp_row reqreg">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label id="gender">Пол *</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <span style="color: red; font-weight: bold;"
                                                              v-if="errorsreg.gender">{{errorsreg.gender[0]}}</span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="male">Мужское</label>
                                                        <input class="genderreg" value="male" type="radio" name="gender">
                                                        <label for="female">Женское</label>
                                                        <input class="genderreg" type="radio" value="female" name="gender">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="policy">
                                    <label class="policy_label">
                                        <input @change="handleChange" id="regcheckbox" type="checkbox" name="policy"
                                               required> – согласен с обработкой
                                        персональных данных.
                                        <router-link class="policy_txt" to="/rules">Политика в отношении обработки персональных данных в
                                            ООО "CarBidding"</router-link>
                                    </label>
                                </div>
                                <div class="send">
                                    <button class="btn btn-ripple" type="submit" id="reg-but"
                                            disabled>Отправить заявку
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer-component></footer-component>
    </div>
</template>

<script>
    export default {
        name: "Register",
        props: ['errorsreg'],
        data() {
            return {
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                regcheck: false,
                name: '',
                sname: '',
                email: '',
                phone: '',
                password: '',
                passwordconfirm: '',
                date: '',
                gender: '',
                validationErrors: ''
            }
        },
        methods: {
            handleChange(e) {
                if (e.target.checked === false) {
                    document.getElementById('reg-but').setAttribute('disabled', '');
                    document.getElementById('reg-but').style.cursor = 'not-allowed';
                }
                if (e.target.checked === true) {
                    document.getElementById('reg-but').removeAttribute('disabled');
                    document.getElementById('reg-but').style.cursor = 'pointer';
                }
            },
            registerTabs(reg) {
                var j, content, links;
                content = document.getElementsByClassName("register_content");
                for (j = 0; j < content.length; j++) {
                    content[j].style.display = "none";
                }
                links = document.getElementsByClassName("reg_li");
                for (j = 0; j < links.length; j++) {
                    links[j].className = links[j].className.replace(" active", "");
                }
                document.getElementById(reg + 'tab').style.display = "block";
                var lis = document.getElementsByClassName('reg_btn');
                for (let k = 0; k < lis.length; k++) {
                    lis[k].classList.remove("active");
                }
                document.getElementById(reg + 'but').classList.add("active");
            },
        },
    }
</script>

<style scoped>

</style>
