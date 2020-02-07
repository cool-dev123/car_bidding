<template>
	<div>
        <header-component></header-component>
		<div class="container-fluid contacts_bg_img">
			<div class="container" style="margin-top: 83px;">
				<div class="row">
					<div class="col-md-4 contacts_div">
						<h6 class="address_title">Наш адрес:</h6>
						<span class="address_info"><i class="fas fa-map-marker-alt"></i>109044, г. Москва, Крутицкий Вал, 14.</span>
						<h6 class="contact_title">Наши контакты:</h6>
						<span class="tel_info"><i class="fas fa-phone"></i>+7(495)748-5608</span>
						<span class="mail_info"><i class="far fa-envelope"></i>letters@autosale.ru</span>
						<h6 class="w_hours_title">Часы работы:</h6>
						<span class="w_hours_info"><i class="far fa-clock"></i>Понедельник-пятница с 9:00 до 18:00</span>
						<div class="additional_services_btn"><button class="btn-ripple" >Дополнительные услуги</button></div>
					</div>
					<div class="col-md-5 contacts_div_txt">
						<h4 class="add_services_title">Офис компании CarBidding</h4>
					</div>
				</div>
			</div>
		</div>
		<div class="row mr-0">
			<div class="col">
				<div class="map_img"></div>
			</div>
		</div>
        <footer-component></footer-component>
	</div>
</template>
<script>
  export default {
    name: "Contacts"
  }
</script>

<style scoped>
</style>
