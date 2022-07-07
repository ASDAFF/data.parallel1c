<?php
$arDataParallelsSettings = \Data\Parallel1c\Tools::getSettingsByPath();

$ver = $arDataParallelsSettings["CML2_IMPORT_VER"];
if ($ver == "last" || $ver == "20.0.200")
{
	require_once "cml2_ib20_0_200.php";

	class CDataParallelsIBlockCMLImport extends CDataParallelsIBlockCMLImport_IB20_0_200
	{
	}
}
else
{
	class CDataParallelsIBlockCMLImport extends CIBlockCMLImport
	{
	}
}