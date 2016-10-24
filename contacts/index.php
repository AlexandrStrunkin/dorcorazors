<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "контакты, телефон, e-mail, график работы");
$APPLICATION->SetPageProperty("title", "Контакты");
$APPLICATION->SetTitle("Контакты");
?><div class="contacts_description">
	 <?$APPLICATION->IncludeFile(SITE_DIR."include/contacts_text.php", Array(), Array("MODE" => "html", "NAME"  => GetMessage("CONTACTS_TEXT"),));?>
</div>
<div class="left_block clearfix">
	<div class="store_description">
		<div class="store_property">
			<div class="title">
				 Адрес:
			</div>
			<div class="value">
				 <?$APPLICATION->IncludeFile(SITE_DIR."include/address.php", Array(), Array( "MODE" => "text", "NAME" => "Адрес", ));?>
			</div>
		</div>
		<div class="store_property">
			<div class="title">
				 Телефон:
			</div>
			<div class="value">
				 <?$APPLICATION->IncludeFile(SITE_DIR."include/phone.php", Array(), Array( "MODE" => "text", "NAME" => "Телефон", ));?>
			</div>
		</div>
		<div class="store_property">
			<div class="title">
				 Интернет-магазин:
			</div>
			<div class="value">
				 <?$APPLICATION->IncludeFile(SITE_DIR."include/email.php", Array(), Array( "MODE" => "text", "NAME" => "Email", ));?><br>
			</div>
		</div>
		<div class="store_property">
			<div class="title">
				 Прочие вопросы:
			</div>
			<div class="value">
				 <?$APPLICATION->IncludeFile(SITE_DIR."include/email2.php", Array(), Array( "MODE" => "text", "NAME" => "Email", ));?><br>
			</div>
		</div>
		<hr>
 <span class="store_property">
		<div class="title">
			 Режим работы:
		</div>
		<div class="value">
			 <?$APPLICATION->IncludeFile(SITE_DIR."include/work_time.php", Array(), Array( "MODE" => "html", "NAME"  => "Время работы"));?>
		</div>
 </span>
	</div>
</div>
<div class="right_block">
	 <?$APPLICATION->IncludeComponent(
	"bitrix:map.google.view", 
	"mapContact", 
	array(
		"INIT_MAP_TYPE" => "ROADMAP",
		"MAP_DATA" => "a:4:{s:10:\"google_lat\";d:55.896902000000026;s:10:\"google_lon\";d:37.39067800000001;s:12:\"google_scale\";i:17;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:4:\"TEXT\";s:0:\"\";s:3:\"LON\";d:37.390562295914;s:3:\"LAT\";d:55.89643118768;}}}",
		"MAP_WIDTH" => "100%",
		"MAP_HEIGHT" => "310",
		"CONTROLS" => array(
			0 => "SMALL_ZOOM_CONTROL",
			1 => "TYPECONTROL",
			2 => "SCALELINE",
		),
		"OPTIONS" => array(
			0 => "ENABLE_SCROLL_ZOOM",
			1 => "ENABLE_DBLCLICK_ZOOM",
			2 => "ENABLE_DRAGGING",
		),
		"MAP_ID" => "",
		"COMPONENT_TEMPLATE" => "mapContact"
	),
	false
);?>
	<h2 class="feedback_title">Обратная связь</h2>
	 <?Bitrix\Main\Page\Frame::getInstance()->startDynamicWithID("form-feedback-block");?> <?$APPLICATION->IncludeComponent(
	"bitrix:form.result.new",
	"inline",
	Array(
		"WEB_FORM_ID" => "4",
		"IGNORE_CUSTOM_TEMPLATE" => "N",
		"USE_EXTENDED_ERRORS" => "Y",
		"SEF_MODE" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600000",
		"LIST_URL" => "",
		"EDIT_URL" => "",
		"SUCCESS_URL" => "?send=ok",
		"CHAIN_ITEM_TEXT" => "",
		"CHAIN_ITEM_LINK" => "",
		"VARIABLE_ALIASES" => Array("WEB_FORM_ID"=>"WEB_FORM_ID","RESULT_ID"=>"RESULT_ID")
	)
);?> <?Bitrix\Main\Page\Frame::getInstance()->finishDynamicWithID("form-feedback-block", "");?>
</div>
<div class="clearboth">
</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>