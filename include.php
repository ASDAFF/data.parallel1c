<?php
IncludeModuleLangFile(__FILE__);

class CExchangeParallel1c
{
    public static function IsNewElement($xml, $iblock)
    {
        $point = true;
        $res = \Bitrix\Iblock\ElementTable::getList(
            array(
                'filter' => array(
                    'IBLOCK_ID' => $iblock,
                    '=XML_ID' => $xml,
                    ),
                'limit' => 1, 'select' => array('ID'),
                )
        );
        if ($arg = $res->fetch()) {
            $point = false;
        }
        return $point;
    }

    public static function GetCatalogImportVersions()
    {
        $data = array(
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
        return $data;
    }

    public static function GetCml2ImportVersions()
    {
        $data = array("bitrix" => array(
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
        return $data;
    }
}

\Bitrix\Main\Loader::registerAutoLoadClasses('exchange.parallel1c', array('CExchangeParallelsIBlockCMLImport' => 'classes/general/cml2.php',));

?>