<?
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
	$APPLICATION->SetTitle("Контакты");
	
	$arStores = array();
	$cache = new CPHPCache();
	$cache_time = 3600;
	$cache_path = SITE_DIR.'aspro_stores_list';
	$id = '';
	$cache_id = 'aspro_stores_list';

	if( $cache_time > 0 && $cache->InitCache($cache_time, $cache_id, $cache_path) )
	{
		$res = $cache->GetVars();
		$arStores = $res["arStores"];
	}
	else
	{
		//$objRes = false;	
		$objRes = CCatalogStore::GetList(array(),array("ACTIVE"=>"Y"), false, false,array("ID"));
		
		if ($objRes) 
		{ 
			while($res = $objRes->GetNext()) { $arStores[] =  $res; } 
			if ($cache_time > 0)
			{
				$cache->StartDataCache( $cache_time, $cache_id, $cache_path );
				$cache->EndDataCache(  array( "arStores" => $arStores )  );
			}
		}
	}
	if (count($arStores))
	{?> 		
		<div class="contacts_description"> 			
			<?$APPLICATION->IncludeFile(SITE_DIR."include/contacts_text.php", Array(), Array("MODE" => "html", "NAME"  => GetMessage("CONTACTS_TEXT"),));?> 		
		</div>
			<?$APPLICATION->IncludeComponent("bitrix:catalog.store", "stores_list", array(
			"SEF_MODE" => "Y",
			"SEF_FOLDER" => "/contacts/stores/",
			"CACHE_TYPE" => "N",
			"CACHE_TIME" => "3600",
			"PHONE" => "Y",
			"SCHEDULE" => "Y",
			"SET_TITLE" => "Y",
			"TITLE" => "",
			"MAP_TYPE" => "1",
			"SEF_URL_TEMPLATES" => array(
				"liststores" => "index.php",
				"element" => "#store_id#/",
			)
			),
			false
		);?> 	

<?} else LocalRedirect(SITE_DIR."contacts/");?> 
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>