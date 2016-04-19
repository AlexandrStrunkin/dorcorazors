<?
    if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
    global $APPLICATION;
    $aMenuLinksExt = $APPLICATION->IncludeComponent(
        "bitrix:menu.sections", "",
        Array(
            "IBLOCK_TYPE" => "aspro_kshop_catalog", 
            "IBLOCK_ID" => "73", 
            "DEPTH_LEVEL" => "3", 
            "CACHE_TYPE" => "A", 
            "CACHE_TIME" => "3600" 
        )
    );
    $aMenuLinks = array_merge($aMenuLinks, $aMenuLinksExt);
?>