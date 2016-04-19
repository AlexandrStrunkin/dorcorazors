<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Склады");
?><?$APPLICATION->IncludeComponent(
	"bitrix:catalog.store", 
	"stores_list", 
	array(
		"SEF_MODE" => "Y",
		"PHONE" => "N",
		"SCHEDULE" => "N",
		"SET_TITLE" => "Y",
		"TITLE" => "Список складов с подробной информацией",
		"MAP_TYPE" => "0",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"CACHE_NOTES" => "",
		"SEF_FOLDER" => "/store/",
		"COMPONENT_TEMPLATE" => "stores_list",
		"SEF_URL_TEMPLATES" => array(
			"liststores" => "index.php",
			"element" => "#store_id#/",
		)
	),
	false
);?> 
<? ?>
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>