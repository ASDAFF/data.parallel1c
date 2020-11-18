<?
if ( file_exists( $_SERVER["DOCUMENT_ROOT"]."/local/modules/exchange.parallel1c/admin/aaa_exchange_parallel1c_exchange.php" ) )
{
	require_once($_SERVER["DOCUMENT_ROOT"]."/local/modules/exchange.parallel1c/admin/aaa_exchange_parallel1c_exchange.php");
}
else
{
	require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/exchange.parallel1c/admin/aaa_exchange_parallel1c_exchange.php");
}