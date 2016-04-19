<?
	include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');
	CHTTP::SetStatus("404 Not Found");
	@define("ERROR_404","Y");
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
	$APPLICATION->SetTitle("Страница не найдена");
?>
<style>h1,.breadcrumbs{display:none;}</style>
<table class="page_not_found" width="100%" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td class="image"><img src="<?=SITE_TEMPLATE_PATH?>/images/404.png" alt="404" title=":-(" /></td>
		<td class="description">
			<div class="title404">Ошибка 404</div>
			<div class="subtitle404">Страница не найдена</div>
			<div class="descr_text404">Неправильно набран адрес или такой<br />страницы не существует</div>
			<a class="btn_big" href="<?SITE_DIR?>">Перейти на главную</a>
			<div class="back404">или <a onclick="history.back()">вернуться назад</a></div>
		</td>
	</tr>
</table>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>