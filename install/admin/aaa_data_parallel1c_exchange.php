<?
if ( file_exists( $_SERVER["DOCUMENT_ROOT"]."/local/modules/data.parallel1c/admin/aaa_data_parallel1c_exchange.php" ) )
{
	require_once($_SERVER["DOCUMENT_ROOT"]."/local/modules/data.parallel1c/admin/aaa_data_parallel1c_exchange.php");
}
else
{
	require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/data.parallel1c/admin/aaa_data_parallel1c_exchange.php");
}