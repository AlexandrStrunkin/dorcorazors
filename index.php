<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "DORCO-razors.ru - Бритвенные станки, системы, сменные кассеты, средства и аксессуары для бритья");
$APPLICATION->SetPageProperty("keywords", "Дорко, купить дорко, купить dorco, купить dorco, dorko, вщксщ, вщклщ, бритье, dorco, компания dorco, качественное бритье, чистое бритье, интернет-магазин dorco, магазин dorco, продукция dorco, dorco оптом, мужская бритвенная система, мужской одноразовый станок, женская бритвенная система, женский одноразовый станок, классический бритвенный станок");
$APPLICATION->SetPageProperty("description", "Официальный интернет-магазин DORCO. Огромный выбор бритвенных станков, систем, сменных кассет, а так же средств и аксессуаров для бритья.");
$APPLICATION->SetTitle("DORCO-razors.ru - Бритвенные станки, системы, сменные кассеты, средства и аксессуары для бритья");
?>
<? global $SITE_THEME; ?>
    <?$APPLICATION->IncludeComponent(
    "aspro:com.banners",
    "top_slider_banners",
    array(
        "IBLOCK_TYPE" => "aspro_kshop_adv",
        "IBLOCK_ID" => "65",
        "TYPE_BANNERS_IBLOCK_ID" => "64",
        "SET_BANNER_TYPE_FROM_THEME" => "Y",
        "NEWS_COUNT" => "10",
        "SORT_BY1" => "SORT",
        "SORT_ORDER1" => "ASC",
        "SORT_BY2" => "ID",
        "SORT_ORDER2" => "ASC",
        "PROPERTY_CODE" => array(
            0 => "TEXT_POSITION",
            1 => "TARGETS",
            2 => "TEXTCOLOR",
            3 => "URL_STRING",
            4 => "BUTTON1TEXT",
            5 => "BUTTON1LINK",
            6 => "BUTTON2TEXT",
            7 => "BUTTON2LINK",
            8 => "",
        ),
        "CHECK_DATES" => "Y",
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "36000000",
        "SITE_THEME" => $SITE_THEME,
        "COMPONENT_TEMPLATE" => "top_slider_banners"
    ),
    false
);?>

<div class="wrapper_inner">
    <?$GLOBALS["arrIndexFilter"] = array(array("!PROPERTY_SHOW_ON_INDEX_PAGE" => false)); ?>
    <?$APPLICATION->IncludeComponent(
    "bitrix:catalog.top",
    "front_slider",
    array(
        "IBLOCK_TYPE" => "catalog",
        "IBLOCK_ID" => "9",
        "ELEMENT_SORT_FIELD" => "sort",
        "ELEMENT_SORT_ORDER" => "asc",
        "ELEMENT_SORT_FIELD2" => "id",
        "ELEMENT_SORT_ORDER2" => "desc",
        "HIDE_NOT_AVAILABLE" => "N",
        "ELEMENT_COUNT" => "6",
        "LINE_ELEMENT_COUNT" => "6",
        "PROPERTY_CODE" => array(
            0 => "",
            1 => "PREVIEW_TEXT",
            2 => "",
        ),
        "OFFERS_FIELD_CODE" => array(
            0 => "ID",
            1 => "2508",
            2 => "1009",
            3 => "983",
            4 => "2544",
            5 => "2532",
            6 => "",
        ),
        "OFFERS_PROPERTY_CODE" => array(
            0 => "",
            1 => "CML2_LINK",
            2 => "",
        ),
        "OFFERS_SORT_FIELD" => "sort",
        "OFFERS_SORT_ORDER" => "asc",
        "OFFERS_SORT_FIELD2" => "id",
        "OFFERS_SORT_ORDER2" => "desc",
        "OFFERS_LIMIT" => "6",
        "SECTION_URL" => "catalog/#SECTION_CODE_PATH#/",
        "DETAIL_URL" => "catalog/#SECTION_CODE_PATH#/#ELEMENT_ID#/",
        "BASKET_URL" => "/basket/",
        "ACTION_VARIABLE" => "action",
        "PRODUCT_ID_VARIABLE" => "id",
        "PRODUCT_QUANTITY_VARIABLE" => "quantity",
        "PRODUCT_PROPS_VARIABLE" => "prop",
        "SECTION_ID_VARIABLE" => "SECTION_ID",
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "36000000",
        "CACHE_GROUPS" => "Y",
        "DISPLAY_COMPARE" => "Y",
        "PRICE_CODE" => array(
            0 => "RETAIL1",
        ),
        "USE_PRICE_COUNT" => "N",
        "SHOW_PRICE_COUNT" => "1",
        "PRICE_VAT_INCLUDE" => "Y",
        "PRODUCT_PROPERTIES" => array(
        ),
        "USE_PRODUCT_QUANTITY" => "N",
        "CONVERT_CURRENCY" => "N",
        "OFFERS_CART_PROPERTIES" => array(
        ),
        "FILTER_NAME" => "arrIndexFilter",
        "COMPONENT_TEMPLATE" => "front_slider",
        "SEF_MODE" => "N",
        "CACHE_FILTER" => "N",
        "ADD_PROPERTIES_TO_BASKET" => "Y",
        "PARTIAL_PRODUCT_PROPERTIES" => "N",
        "COMPARE_PATH" => ""
    ),
    false
);?>

    <?$GLOBALS["arrTopFilter"] = array("!PROPERTY_HIT" => false);?>
    <?$APPLICATION->IncludeComponent(
    "bitrix:catalog.top",
    "specials_slider",
    array(
        "IBLOCK_TYPE" => "aspro_kshop_catalog",
        "IBLOCK_ID" => "9",
        "ELEMENT_SORT_FIELD" => "sort",
        "ELEMENT_SORT_ORDER" => "asc",
        "ELEMENT_SORT_FIELD2" => "id",
        "ELEMENT_SORT_ORDER2" => "desc",
        "HIDE_NOT_AVAILABLE" => "N",
        "ELEMENT_COUNT" => "80",
        "LINE_ELEMENT_COUNT" => "4",
        "PROPERTY_CODE" => array(
            0 => "HIT",
            1 => "RECOMMEND",
            2 => "NEW",
            3 => "STOCK",
            4 => "",
        ),
        "OFFERS_FIELD_CODE" => array(
            0 => "",
            1 => "",
        ),
        "OFFERS_PROPERTY_CODE" => array(
            0 => "",
            1 => "CML2_LINK",
            2 => "",
        ),
        "OFFERS_SORT_FIELD" => "sort",
        "OFFERS_SORT_ORDER" => "asc",
        "OFFERS_SORT_FIELD2" => "id",
        "OFFERS_SORT_ORDER2" => "desc",
        "OFFERS_LIMIT" => "6",
        "SECTION_URL" => "catalog/#SECTION_CODE_PATH#/",
        "DETAIL_URL" => "catalog/#SECTION_CODE_PATH#/#ELEMENT_ID#/",
        "BASKET_URL" => "/basket/",
        "ACTION_VARIABLE" => "action",
        "PRODUCT_ID_VARIABLE" => "id",
        "PRODUCT_QUANTITY_VARIABLE" => "quantity",
        "PRODUCT_PROPS_VARIABLE" => "prop",
        "SECTION_ID_VARIABLE" => "SECTION_ID",
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "36000000",
        "CACHE_GROUPS" => "Y",
        "DISPLAY_COMPARE" => "Y",
        "PRICE_CODE" => array(
            0 => "BASE",
        ),
        "USE_PRICE_COUNT" => "N",
        "SHOW_PRICE_COUNT" => "1",
        "PRICE_VAT_INCLUDE" => "Y",
        "PRODUCT_PROPERTIES" => array(
        ),
        "USE_PRODUCT_QUANTITY" => "N",
        "CONVERT_CURRENCY" => "N",
        "OFFERS_CART_PROPERTIES" => array(
        ),
        "FILTER_NAME" => "arrTopFilter",
        "SPECIALS_CODE1" => "HIT",
        "SPECIALS_CODE2" => "RECOMMEND",
        "SPECIALS_CODE3" => "NEW",
        "SPECIALS_CODE4" => "STOCK",
        "COMPONENT_TEMPLATE" => "specials_slider",
        "SEF_MODE" => "N",
        "CACHE_FILTER" => "N",
        "ADD_PROPERTIES_TO_BASKET" => "Y",
        "PARTIAL_PRODUCT_PROPERTIES" => "N",
        "COMPARE_PATH" => ""
        ),
        false
    );?>


<div class="index_bottom">
    <img class="shadow" src="<?=SITE_TEMPLATE_PATH?>/images/shadow_bottom.png" />
    <div class="banners_column">
        <?$APPLICATION->IncludeComponent(
            "aspro:com.banners",
            "small_banners",
            array(
                "IBLOCK_TYPE" => "aspro_kshop_adv",
                "IBLOCK_ID" => "65",
                "TYPE_BANNERS_IBLOCK_ID" => "64",
                "SET_BANNER_TYPE_FROM_THEME" => "N",
                "TYPE_BANNERS" => "2278",
                "NEWS_COUNT" => "20",
                "SORT_BY1" => "ACTIVE_FROM",
                "SORT_ORDER1" => "DESC",
                "SORT_BY2" => "SORT",
                "SORT_ORDER2" => "ASC",
                "PROPERTY_CODE" => array(
                    0 => "TARGETS",
                    1 => "URL_STRING",
                    2 => "",
                ),
                "CHECK_DATES" => "Y",
                "CACHE_TYPE" => "A",
                "CACHE_TIME" => "36000000",
                "COMPONENT_TEMPLATE" => "small_banners"
            ),
            false
        );?>
    </div>
    <div class="info_column clearfix">
        <div class="about_column">
            <?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", Array("AREA_FILE_SHOW" => "file","PATH" => SITE_DIR."include/front_info.php","EDIT_TEMPLATE" => ""));?>
        </div>
        <div class="news_column">
        <div class="slide_1 active"><h3><?=GetMessage("NEWS")?></h3></div>
        <div class="slide_2"><h3><?=GetMessage("SALE")?></h3></div>
            <div id="slide_1">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "slider_home",
                    array(
                        "IBLOCK_TYPE" => "news",
                        "IBLOCK_ID" => "8",
                        "NEWS_COUNT" => "5",
                        "SORT_BY1" => "rand",
                        "SORT_ORDER1" => "DESC",
                        "SORT_BY2" => "SORT",
                        "SORT_ORDER2" => "ASC",
                        "FILTER_NAME" => "",
                        "FIELD_CODE" => array(
                            0 => "",
                            1 => "",
                        ),
                        "PROPERTY_CODE" => array(
                            0 => "",
                            1 => "",
                        ),
                        "CHECK_DATES" => "Y",
                        "DETAIL_URL" => "#SITE_DIR#/news/#CODE#/",
                        "AJAX_MODE" => "N",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "Y",
                        "AJAX_OPTION_HISTORY" => "N",
                        "CACHE_TYPE" => "N",
                        "CACHE_TIME" => "36000000",
                        "CACHE_FILTER" => "N",
                        "CACHE_GROUPS" => "N",
                        "PREVIEW_TRUNCATE_LEN" => "",
                        "ACTIVE_DATE_FORMAT" => "j F Y",
                        "SET_TITLE" => "N",
                        "SET_STATUS_404" => "N",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                        "ADD_SECTIONS_CHAIN" => "N",
                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                        "PARENT_SECTION" => "",
                        "PARENT_SECTION_CODE" => "",
                        "INCLUDE_SUBSECTIONS" => "Y",
                        "PAGER_TEMPLATE" => "",
                        "DISPLAY_TOP_PAGER" => "N",
                        "DISPLAY_BOTTOM_PAGER" => "N",
                        "PAGER_TITLE" => "",
                        "PAGER_SHOW_ALWAYS" => "N",
                        "PAGER_DESC_NUMBERING" => "N",
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                        "PAGER_SHOW_ALL" => "N",
                        "AJAX_OPTION_ADDITIONAL" => "",
                        "COMPONENT_TEMPLATE" => "slider_home",
                        "SET_BROWSER_TITLE" => "Y",
                        "SET_META_KEYWORDS" => "Y",
                        "SET_META_DESCRIPTION" => "Y",
                        "SET_LAST_MODIFIED" => "N",
                        "PAGER_BASE_LINK_ENABLE" => "N",
                        "SHOW_404" => "N",
                        "MESSAGE_404" => ""
                    ),
                    false
                );?>
            </div>
            <div id="slide_2">
                <?$APPLICATION->IncludeComponent("bitrix:news.list", "slider_home", Array(
                    "IBLOCK_TYPE" => "aspro_kshop_content",    // Тип информационного блока (используется только для проверки)
                        "IBLOCK_ID" => "70",    // Код информационного блока
                        "NEWS_COUNT" => "5",    // Количество новостей на странице
                        "SORT_BY1" => "ACTIVE_FROM",    // Поле для первой сортировки новостей
                        "SORT_ORDER1" => "DESC",    // Направление для первой сортировки новостей
                        "SORT_BY2" => "SORT",    // Поле для второй сортировки новостей
                        "SORT_ORDER2" => "ASC",    // Направление для второй сортировки новостей
                        "FILTER_NAME" => "",    // Фильтр
                        "FIELD_CODE" => array(    // Поля
                            0 => "",
                            1 => "",
                        ),
                        "PROPERTY_CODE" => array(    // Свойства
                            0 => "PERIOD",
                            1 => "",
                        ),
                        "CHECK_DATES" => "Y",    // Показывать только активные на данный момент элементы
                        "DETAIL_URL" => "#SITE_DIR#/sale/#CODE#/",    // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                        "AJAX_MODE" => "N",    // Включить режим AJAX
                        "AJAX_OPTION_JUMP" => "N",    // Включить прокрутку к началу компонента
                        "AJAX_OPTION_STYLE" => "Y",    // Включить подгрузку стилей
                        "AJAX_OPTION_HISTORY" => "N",    // Включить эмуляцию навигации браузера
                        "CACHE_TYPE" => "N",    // Тип кеширования
                        "CACHE_TIME" => "36000000",    // Время кеширования (сек.)
                        "CACHE_FILTER" => "N",    // Кешировать при установленном фильтре
                        "CACHE_GROUPS" => "N",    // Учитывать права доступа
                        "PREVIEW_TRUNCATE_LEN" => "",    // Максимальная длина анонса для вывода (только для типа текст)
                        "ACTIVE_DATE_FORMAT" => "j F Y",    // Формат показа даты
                        "SET_TITLE" => "N",    // Устанавливать заголовок страницы
                        "SET_STATUS_404" => "N",    // Устанавливать статус 404
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",    // Включать инфоблок в цепочку навигации
                        "ADD_SECTIONS_CHAIN" => "N",    // Включать раздел в цепочку навигации
                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",    // Скрывать ссылку, если нет детального описания
                        "PARENT_SECTION" => "",    // ID раздела
                        "PARENT_SECTION_CODE" => "",    // Код раздела
                        "INCLUDE_SUBSECTIONS" => "Y",    // Показывать элементы подразделов раздела
                        "PAGER_TEMPLATE" => "",    // Шаблон постраничной навигации
                        "DISPLAY_TOP_PAGER" => "N",    // Выводить над списком
                        "DISPLAY_BOTTOM_PAGER" => "N",    // Выводить под списком
                        "PAGER_TITLE" => "",    // Название категорий
                        "PAGER_SHOW_ALWAYS" => "N",    // Выводить всегда
                        "PAGER_DESC_NUMBERING" => "N",    // Использовать обратную навигацию
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",    // Время кеширования страниц для обратной навигации
                        "PAGER_SHOW_ALL" => "N",    // Показывать ссылку "Все"
                        "AJAX_OPTION_ADDITIONAL" => "",    // Дополнительный идентификатор
                        "COMPONENT_TEMPLATE" => "news_slider",
                        "SET_BROWSER_TITLE" => "Y",    // Устанавливать заголовок окна браузера
                        "SET_META_KEYWORDS" => "Y",    // Устанавливать ключевые слова страницы
                        "SET_META_DESCRIPTION" => "Y",    // Устанавливать описание страницы
                        "SET_LAST_MODIFIED" => "N",    // Устанавливать в заголовках ответа время модификации страницы
                        "PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
                        "SHOW_404" => "N",    // Показ специальной страницы
                        "MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
                    ),
                    false
                );?>
            </div>
        </div>
    </div>
</div>

<?$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "brands_slider_new",
    array(
        "IBLOCK_TYPE" => "aspro_kshop_content",
        "IBLOCK_ID" => "66",
        "NEWS_COUNT" => "5",
        "SORT_BY1" => "SORT",
        "SORT_ORDER1" => "DESC",
        "SORT_BY2" => "SORT",
        "SORT_ORDER2" => "ASC",
        "FILTER_NAME" => "",
        "FIELD_CODE" => array(
            0 => "PREVIEW_PICTURE",
            1 => "",
        ),
        "PROPERTY_CODE" => array(
            0 => "",
            1 => "",
        ),
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "AJAX_OPTION_HISTORY" => "N",
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "36000000",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "N",
        "PREVIEW_TRUNCATE_LEN" => "",
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "SET_TITLE" => "N",
        "SET_STATUS_404" => "N",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "ADD_SECTIONS_CHAIN" => "N",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "DISPLAY_TOP_PAGER" => "N",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "PAGER_TITLE" => "",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => "",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "3600",
        "PAGER_SHOW_ALL" => "N",
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "N",
        "DISPLAY_PREVIEW_TEXT" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "COMPONENT_TEMPLATE" => "brands_slider_new",
        "SET_BROWSER_TITLE" => "Y",
        "SET_META_KEYWORDS" => "Y",
        "SET_META_DESCRIPTION" => "Y",
        "SET_LAST_MODIFIED" => "N",
        "INCLUDE_SUBSECTIONS" => "Y",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "SHOW_404" => "N",
        "MESSAGE_404" => ""
    ),
    false
);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>