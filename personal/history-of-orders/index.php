<?
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
	$APPLICATION->SetTitle("Личный кабинет");
	$_REQUEST["filter_history"] = "Y";
	if(!$USER->isAuthorized()){LocalRedirect(SITE_DIR.'auth');} else {
?>
	<div class="left_block">
        <?$APPLICATION->IncludeComponent(
	        "bitrix:menu",
	        "left_menu",
	        array(
		        "ROOT_MENU_TYPE" => "left",
		        "MENU_CACHE_TYPE" => "A",
		        "MENU_CACHE_TIME" => "3600",
		        "MENU_CACHE_USE_GROUPS" => "Y",
		        "MENU_CACHE_GET_VARS" => array(
		        ),
		        "MAX_LEVEL" => "1",
		        "CHILD_MENU_TYPE" => "left",
		        "USE_EXT" => "N",
		        "DELAY" => "N",
		        "ALLOW_MULTI_SELECT" => "N",
		        "COMPONENT_TEMPLATE" => "N"
	        ),
	        false
        );?>
	</div>
	<div class="right_block">
        <?$APPLICATION->IncludeComponent(
            "bitrix:sale.personal.order",
            "orders",
            array(
	            "PROP_1" => array(
	            ),
	            "PROP_3" => "",
	            "PROP_2" => array(
	            ),
	            "PROP_4" => "",
	            "SEF_MODE" => "Y",
	            "HISTORIC_STATUSES" => array(
		            0 => "N",
		            1 => "F",
		            2 => "P",
	            ),
	            "SEF_FOLDER" => "/personal/history-of-orders/",
	            "ORDERS_PER_PAGE" => "20",
	            "PATH_TO_PAYMENT" => "/order/payment/",
	            "PATH_TO_BASKET" => "/basket/",
	            "SET_TITLE" => "N",
	            "SAVE_IN_SESSION" => "Y",
	            "NAV_TEMPLATE" => "",
	            "COMPONENT_TEMPLATE" => "orders",
	            "PROP_5" => array(
	            ),
	            "PROP_6" => array(
	            ),
	            "ACTIVE_DATE_FORMAT" => "d.m.Y",
	            "CACHE_TYPE" => "A",
	            "CACHE_TIME" => "3600",
	            "CACHE_GROUPS" => "Y",
	            "CUSTOM_SELECT_PROPS" => array(
	            ),
	            "STATUS_COLOR_N" => "green",
	            "STATUS_COLOR_F" => "gray",
	            "STATUS_COLOR_P" => "yellow",
	            "STATUS_COLOR_B" => "gray",
	            "STATUS_COLOR_R" => "gray",
	            "STATUS_COLOR_Q" => "gray",
	            "STATUS_COLOR_V" => "gray",
	            "STATUS_COLOR_O" => "gray",
	            "STATUS_COLOR_PSEUDO_CANCELLED" => "red",
	            "SEF_URL_TEMPLATES" => array(
		            "list" => "",
		            "detail" => "order/?ID=#ID#",
		            "cancel" => "order/?ID=#ID#",
	            ),
	            "VARIABLE_ALIASES" => array(
		            "detail" => array(
			            "ID" => "ID",
		            ),
		            "cancel" => array(
			            "ID" => "ID",
		            ),
	            )
            ),
            false
            );?>
	</div>
<?}?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>