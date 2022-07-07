<?
if ( file_exists( $_SERVER["DOCUMENT_ROOT"]."/local/modules/data.parallel1c/admin/data_parallel1c_exchange_admin.php" ) )
{
	require_once($_SERVER["DOCUMENT_ROOT"]."/local/modules/data.parallel1c/admin/data_parallel1c_exchange_admin.php");
}
else
{
	require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/data.parallel1c/admin/data_parallel1c_exchange_admin.php");
}
