<?
use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

if($APPLICATION->GetGroupRight("exchange.parallel1c")!="D")
{
    CModule::IncludeModule('exchange.parallel1c');
	$aMenu = array(
		"parent_menu" => "global_menu_store",
		"section" => "exchange.parallel1c",
		"sort" => 1055,
        "module_id" => "exchange.parallel1c",
		"text" => Loc::getMessage("EXCHANGE_PARALLEL1C1_MENU_MAIN"),
		"title" => Loc::getMessage("EXCHANGE_PARALLEL1C1_MENU_MAIN_TITLE"),
		"url" => "exchange_parallel1c_exchange_admin.php?lang=".LANGUAGE_ID,
		"more_url" => Array(
//			"exchange_parallel1c_review_admin.php",
//			"exchange_parallel1c_review_edit.php",
//			"perfmon_table.php?lang=".LANGUAGE_ID."&table_name=b_exchange_parallel1c_exchange",
		),
		"icon" => "exchange_parallel1c_menu_icon",
		"page_icon" => "exchange_parallel1c_page_icon",
		"items_id" => "menu_exchange_parallel1c",
		"items" => array(
			array(
				"text" => Loc::getMessage("EXCHANGE_PARALLEL1C1_MENU_EXCHANGES"),
				"url" => "exchange_parallel1c_exchange_admin.php?lang=".LANGUAGE_ID,
				"more_url" => Array(
					"exchange_parallel1c_exchange_admin.php",
					"exchange_parallel1c_exchange_edit.php",
					"perfmon_table.php?lang=".LANGUAGE_ID."&table_name=b_exchange_parallel1c_exchange",
				),
				"title" => Loc::getMessage("EXCHANGE_PARALLEL1C1_MENU_EXCHANGES_TITLE"),
			),
			array(
				"text" => Loc::getMessage("EXCHANGE_PARALLEL1C1_SETTINGS_PAGE"),
				"url" => "settings.php?mid=exchange.parallel1c&lang=".LANGUAGE_ID."&mid_menu=2",
				"more_url" => Array(
				),
				"title" => Loc::getMessage("EXCHANGE_PARALLEL1C1_SETTINGS_PAGE_TITLE"),
			),
		)
	);
	return $aMenu;
}
return false;
?>
