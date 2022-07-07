<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
	"NAME" => GetMessage("DATA_PARALLEL1C_CD_BCI1_NAME")." 20.0.0",
	"DESCRIPTION" => GetMessage("DATA_PARALLEL1C_CD_BCI1_DESCRIPTION"),
	"CACHE_PATH" => "Y",
	"PATH" => array(
		"ID" => "data_components",
		"NAME" => GetMessage("DATA_COMPONENTS_GROUP_NAME"),
		"CHILD" => array(
			"ID" => "data_parallel1c",
			"NAME" => GetMessage("DATA_PARALLEL1C_GROUP_NAME"),
		)
	),
);

?>