<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule("aspro.kshop");
?>
<?
$APPLICATION->IncludeComponent("bitrix:sale.basket.basket", "fly_order", array(
    "COLUMNS_LIST" => array(
        0 => "NAME",
        1 => "QUANTITY",
        2 => "DELETE",
        3 => "DELAY",
        4 => "PRICE",
    ),
    "OFFERS_PROPS" => array(
    ),
    "PATH_TO_ORDER" => SITE_DIR."order/",
    "HIDE_COUPON" => "N",
    "PRICE_VAT_SHOW_VALUE" => "Y",
    "COUNT_DISCOUNT_4_ALL_QUANTITY" => "N",
    "USE_PREPAYMENT" => "N",
    "SET_TITLE" => "N",
    "AJAX_MODE_CUSTOM" => "Y",
    "SHOW_MEASURE" => "Y",
    "PICTURE_WIDTH" => "50",
    "PICTURE_HEIGHT" => "50",
    "PATH_TO_BASKET" => SITE_DIR."basket/",
    "SHOW_FULL_ORDER_BUTTON" => "N",
    "SHOW_FAST_ORDER_BUTTON" => "Y"
    ),
    false
);
?>