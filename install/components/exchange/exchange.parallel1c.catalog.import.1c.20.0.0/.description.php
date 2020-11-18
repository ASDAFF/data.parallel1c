<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
	"NAME" => GetMessage("EXCHANGE_PARALLEL1C_CD_BCI1_NAME")." 20.0.0",
	"DESCRIPTION" => GetMessage("EXCHANGE_PARALLEL1C_CD_BCI1_DESCRIPTION"),
	"CACHE_PATH" => "Y",
	"PATH" => array(
		"ID" => "exchange_components",
		"NAME" => GetMessage("EXCHANGE_COMPONENTS_GROUP_NAME"),
		"CHILD" => array(
			"ID" => "exchange_parallel1c",
			"NAME" => GetMessage("EXCHANGE_PARALLEL1C_GROUP_NAME"),
		)
	),
);

?>