<?
if ( file_exists( $_SERVER["DOCUMENT_ROOT"]."/local/modules/data.parallel1c/admin/data_parallel1c_exchange_edit.php" ) )
{
	require_once($_SERVER["DOCUMENT_ROOT"]."/local/modules/data.parallel1c/admin/data_parallel1c_exchange_edit.php");
}
else
{
	require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/data.parallel1c/admin/data_parallel1c_exchange_edit.php");
}
