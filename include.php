<?php
IncludeModuleLangFile(__FILE__);

class CExchangeParallel1c
{
    public static function IsNewElement($_1489875223, $_1628523578)
    {
        $_1420431673 = true;
        $_1599467888 = \Bitrix\Iblock\ElementTable::getList(
            array(
                'filter' => array(
                    'IBLOCK_ID' => $_1628523578,
                    '=XML_ID' => $_1489875223,
                    ),
                'limit' => 1, 'select' => array('ID'),
                )
        );
        if ($_1465803975 = $_1599467888->fetch()) {
            $_1420431673 = false;
        }
        return $_1420431673;
    }

    public static function GetCatalogImportVersions()
    {
        $_1519238068 = array(
            "last" => array(
                "CODE" => "last",
                "SORT" => 10000,
                "NAME" => GetMessage("exchange_parallel1c_include_last_version"),),
            "20.0.0" => array(
                "CODE" => "20.0.0",
                "SORT" => 20,
                "NAME" => GetMessage("exchange_parallel1c_include_founded") . " catalog 20.0.0"
            ),
            "17.6.3" => array(
                "CODE" => "17.6.3",
                "SORT" => 10,
                "NAME" => GetMessage("exchange_parallel1c_include_founded") . " catalog 17.6.3"),
            );
        return $_1519238068;
    }

    public static function GetCml2ImportVersions()
    {
        $_1519238068 = array("bitrix" => array(
            "CODE" => "bitrix",
            "SORT" => 20000,
            "NAME" => GetMessage("exchange_parallel1c_include_cml2_bitrix_version"),),
            "last" => array(
                "CODE" => "last",
                "SORT" => 10000,
                "NAME" => GetMessage("exchange_parallel1c_include_cml2_last_version"),
                ),
            "20.0.200" => array(
                "CODE" => "20.0.200",
                "SORT" => 20,
                "NAME" => GetMessage("exchange_parallel1c_include_20_0_200"),
                ),
            );
        return $_1519238068;
    }
}

\Bitrix\Main\Loader::registerAutoLoadClasses('exchange.parallel1c', array('CExchangeParallelsIBlockCMLImport' => 'classes/general/cml2.php',));

?>