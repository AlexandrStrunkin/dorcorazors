<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Вопрос-ответ");
?>

<h2>Ответы на частые вопросы</h2>
<table cellspacing="0" cellpadding="0" border="0" width="100%" class="ask_question_btn_wrapp">
	<tr><td>
		<a class="button30 ask_question"><span class="show_form">Задать вопрос</span><span class="hide_form">Свернуть форму</span></a>
	</td><td>
		<div class="ask_question_description">Вы можете задать вопрос на тему нашей продукции</div>
	</td></tr>
</table>

<div class="faq_ask_wrapp">
	<?Bitrix\Main\Page\Frame::getInstance()->startDynamicWithID("form-faq-ask-block");?>
	<?$APPLICATION->IncludeComponent(
	"bitrix:form.result.new", 
	"inline", 
	array(
		"WEB_FORM_ID" => "8",
		"IGNORE_CUSTOM_TEMPLATE" => "N",
		"USE_EXTENDED_ERRORS" => "Y",
		"SEF_MODE" => "N",
		"CACHE_TYPE" => "N",
		"CACHE_TIME" => "3600000",
		"LIST_URL" => "",
		"EDIT_URL" => "",
		"SUCCESS_URL" => "?send=ok",
		"CHAIN_ITEM_TEXT" => "",
		"CHAIN_ITEM_LINK" => "",
		"COMPONENT_TEMPLATE" => "inline",
		"VARIABLE_ALIASES" => array(
			"WEB_FORM_ID" => "WEB_FORM_ID",
			"RESULT_ID" => "RESULT_ID",
		)
	),
	false
);?>
	<?Bitrix\Main\Page\Frame::getInstance()->finishDynamicWithID("form-faq-ask-block", "");?>
</div>

<script>
	$(".button30.ask_question").click(function(){
		$(this).toggleClass("opened");
		$(".faq_ask_wrapp").slideToggle();
	});
</script>
<div class="faq_wrapp">
	<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"faq", 
	array(
		"IBLOCK_TYPE" => "aspro_kshop_content",
		"IBLOCK_ID" => "67",
		"NEWS_COUNT" => "20",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "EMAIL",
			1 => "NAME",
			2 => "PHONE",
			3 => "THEME",
			4 => "",
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
		"SET_TITLE" => "Y",
		"SET_STATUS_404" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"AJAX_OPTION_ADDITIONAL" => "",
		"COMPONENT_TEMPLATE" => "faq",
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
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>