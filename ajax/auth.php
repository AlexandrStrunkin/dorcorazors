<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");?>
<?
global $USER;

if($_GET["auth_service_error"]){
	LocalRedirect(SITE_DIR.'auth/');
}
if(!$USER->IsAuthorized()){
	?>
	<a href="#" class="close jqmClose"><i></i></a>
	<div class="popup-intro">
		<div class="pop-up-title">¬ход в личный кабинет</div>
	</div>
	<?
	$APPLICATION->IncludeComponent(
		"bitrix:system.auth.form",
		"auth_top_popup",
		Array(
			"REGISTER_URL" => SITE_DIR."auth/registration/",
			"PROFILE_URL" => SITE_DIR."personal/",
			"FORGOT_PASSWORD_URL" => SITE_DIR."auth/forgot-password/",
			"SHOW_ERRORS" => "Y",
			"POPUP_AUTH" => "Y"
		)
	);
}
elseif(strlen($_REQUEST["backurl"])){
	LocalRedirect($_REQUEST["backurl"]);
}
else{
	if(strpos($_SERVER['HTTP_REFERER'], '/auth/') === false && strpos($_SERVER['HTTP_REFERER'], '/ajax/auth.php') === false){
		$APPLICATION->ShowHead();
		?>
		<script>
			BX.reload(false)
		</script>
		<?
	}
	else{
		LocalRedirect(SITE_DIR.'personal/');
	}
}