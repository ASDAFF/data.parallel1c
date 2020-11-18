<?
if ( file_exists( $_SERVER["DOCUMENT_ROOT"]."/local/modules/exchange.parallel1c/admin/exchange_parallel1c_exchange_admin.php" ) )
{
	require_once($_SERVER["DOCUMENT_ROOT"]."/local/modules/exchange.parallel1c/admin/exchange_parallel1c_exchange_admin.php");
}
else
{
	require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/exchange.parallel1c/admin/exchange_parallel1c_exchange_admin.php");
}
