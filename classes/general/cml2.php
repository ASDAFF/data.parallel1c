<?php
$arExchangeParallelsSettings = \Exchange\Parallel1c\Tools::getSettingsByPath();

$ver = $arExchangeParallelsSettings["CML2_IMPORT_VER"];
if ($ver == "last" || $ver == "20.0.200")
{
	require_once "cml2_ib20_0_200.php";

	class CExchangeParallelsIBlockCMLImport extends CExchangeParallelsIBlockCMLImport_IB20_0_200
	{
	}
}
else
{
	class CExchangeParallelsIBlockCMLImport extends CIBlockCMLImport
	{
	}
}