<template>
	<div>
	  <header-component></header-component>
	  <div class="login_page_bg">
		  <div class="container login_page_container">
		  	<div class="row">
		  		<div class="lg_div">
			  		<div class="col login_div">
				  		<form action="login" method="POST" class="login_form">
                            <input type="hidden" name="_token" :value="csrf">
			  				<h6 class="login_title">Войти</h6>
					  		<label class="login_label">Login</label>
                            <div class="row">
                                <div class="col-md-12">
                                    <span style="color: red; font-weight: bold;" v-if="errors.email">{{errors.email[0]}}</span>
                                </div>
                            </div>
					  		<input type="email" class="login_inputs" name="email">
					  		<label class="login_label">Password</label>
                            <div class="row">
                                <div class="col-md-12">
                                    <span style="color: red; font-weight: bold;" v-if="errors.password">{{errors.password[0]}}</span>
                                </div>
                            </div>
					  		<input type="password" class="login_inputs" name="password">
                            <div class="row">
                                <div class="col rem_me">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" style="">
                                    <a>Remember me</a>
                                </div>
                            </div>
					  		<div class="login_btn_div text-center">
					  			<input type="submit" class="login_btn btn-ripple" name="send" value="Войти">
					  		</div>
					  		<label class="fpssw_label text-center">
					  			<router-link class="fpssw_txt" to="passwordrequest">Забыли пароль?</router-link>
					  		</label>
					  	</form>
			  		</div>
			  		<div class="col register_div">
			  		 	<h6 class="registration">Регистрация</h6>
			  		 	<p class="registr_txts">Регистрация участника ЭТП в качестве Покупателья </p>
			  		 	<p class="registr_txts">Регистрация участника ЭТП в качестве Продавца</p>
			  		 	<div class="registr_btn_div text-center">
			  		 		<router-link to="/register"><input type="submit" class="registr_btn btn-ripple" name="send" value="Регистрация"></router-link>
			  		 	</div>
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
    name: "Login",
      props:['errors'],
      data() {
          return {
              csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
          }
      },
  }
</script>

<style scoped>
</style>
