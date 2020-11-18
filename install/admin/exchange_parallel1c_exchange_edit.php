<?
if ( file_exists( $_SERVER["DOCUMENT_ROOT"]."/local/modules/exchange.parallel1c/admin/exchange_parallel1c_exchange_edit.php" ) )
{
	require_once($_SERVER["DOCUMENT_ROOT"]."/local/modules/exchange.parallel1c/admin/exchange_parallel1c_exchange_edit.php");
}
else
{
	require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/exchange.parallel1c/admin/exchange_parallel1c_exchange_edit.php");
}
