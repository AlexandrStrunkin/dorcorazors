<?
global $USER;
$rsUser = CUser::GetByID($USER->GetID());
$arUser = $rsUser->Fetch();

$aMenuLinks = Array(
	Array(
		"������������ ������", 
		SITE_DIR."personal/personal-data/", 
		Array(), 
		Array(), 
		"" 
	),
	Array(
		"������� �������", 
		SITE_DIR."personal/history-of-orders/", 
		Array(), 
		Array(), 
		"" 
	)
);
	
if ($arUser["EXTERNAL_AUTH_ID"]!="socservices")
{
	$aMenuLinks[] = Array(
						"������� ������", 
						SITE_DIR."personal/change-password/", 
						Array(), 
						Array(), 
						"" 
					);
}	

$aMenuLinks[] = Array(
					"�����", 
					"?logout=yes&login=yes", 
					Array(), 
					Array("class"=>"exit"), 
					"" 
				);

?>