<?php

IncludeModuleLangFile(__FILE__);
if (class_exists('data_parallel1c')) return;

class data_parallel1c extends CModule
{
    var $MODULE_ID = "data.parallel1c";
    public $MODULE_VERSION;
    public $MODULE_VERSION_DATE;
    public $MODULE_NAME;
    public $MODULE_DESCRIPTION;
    public $PARTNER_NAME;
    public $PARTNER_URI;
    public $MODULE_GROUP_RIGHTS = 'Y';
    public $_965838297 = '8.0.7';
    public $_1499546494 = array("iblock");
    public $_1159779154 = "bitrix";

    public function __construct()
    {
        $arModuleVersion = array();

        $path = str_replace('\\', '/', __FILE__);
        $_268157835 = substr($path, 0, strlen($path) - strlen('/index.php'));
        include($_268157835 . '/version.php');
        $_865476756 = '/local/modules/' . $this->MODULE_ID . '/install/index.php';
        $_1373869395 = strlen($_865476756);

        if (substr($path, -$_1373869395) == $_865476756) {
            $this->_1159779154 = 'local';
        }
        if (is_array($arModuleVersion) && array_key_exists('VERSION', $arModuleVersion)) {
            $this->MODULE_VERSION = $arModuleVersion['VERSION'];
            $this->MODULE_VERSION_DATE = $arModuleVersion['VERSION_DATE'];
        }
        $this->PARTNER_NAME = 'ASDAFF';
        $this->PARTNER_NAME = GetMessage('DATA_PARALLEL1C1_PARTNER_NAME');
        $this->PARTNER_URI = 'https://asdaff.github.io/';
        $this->MODULE_NAME = GetMessage('DATA_PARALLEL1C1_MODULE_NAME');
        $this->MODULE_DESCRIPTION = GetMessage('DATA_PARALLEL1C1_MODULE_DESCRIPTION');
    }

    public function DoInstall()
    {
        global $APPLICATION;
        global $DB;
        global $data_parallel1c_global_errors;
        $data_parallel1c_global_errors = array();
        if (is_array($this->_1499546494) && !empty($this->_1499546494)) foreach ($this->_1499546494 as $_255431949) if (!IsModuleInstalled($_255431949)) $data_parallel1c_global_errors[] = GetMessage('DATA_PARALLEL1C1_NEED_MODULES', array('#MODULE#' => $_255431949));
        if (strlen($this->_965838297) > 0 && version_compare(SM_VERSION, $this->_965838297) < 0) {
            $data_parallel1c_global_errors[] = GetMessage('DATA_PARALLEL1C1_NEED_RIGHT_VER', array('#NEED#' => $this->_965838297));
        }
        if (strtolower($DB->type) != 'mysql') {
            $data_parallel1c_global_errors[] = GetMessage('DATA_PARALLEL1C1_ONLY_MYSQL_ERROR');
        }
        if (count($data_parallel1c_global_errors) == 0) {
            $_969659624 = \Bitrix\Main\Application::getConnection();
            $_432070089 = $_969659624->isTableExists('b_data_parallel1c_exchange');
            $_1964162162 = !$_432070089;
            if ($this->InstallDB()) {
                $this->InstallFiles();
                $this->InstallEvents();
                RegisterModule('data.parallel1c');
                if ($_1964162162) {
                    \Bitrix\Main\Loader::includeModule($this->MODULE_ID);
                    \Data\Parallel1c\Tools::installDefaultSettings();
                }
            } else {
                $data_parallel1c_global_errors[] = GetMessage('DATA_PARALLEL1C1_INSTALL_TABLE_ERROR');
            };
        }
        $APPLICATION->IncludeAdminFile(GetMessage('DATA_PARALLEL1C1_INSTALL_TITLE'), $_SERVER['DOCUMENT_ROOT'] . '/' . $this->_1159779154 . '/modules/' . $this->MODULE_ID . '/install/step.php');
        return true;
    }

    public function DoUninstall()
    {
        global $APPLICATION, $step;
        $_388519351 = $APPLICATION->GetGroupRight($this->MODULE_ID);
        if ($_388519351 >= 'W') {
            $step = IntVal($step);
            if ($step < 2) {
                $APPLICATION->IncludeAdminFile(GetMessage('DATA_PARALLEL1C1_UNINSTALL_TITLE'), $_SERVER['DOCUMENT_ROOT'] . '/' . $this->_1159779154 . '/modules/' . $this->MODULE_ID . '/install/unstep1.php');
            } elseif ($step == 2) {
                if ($_REQUEST['savedata'] != 'Y') {
                    \Bitrix\Main\Loader::includeModule($this->MODULE_ID);
                    $_1549870444 = \Data\Parallel1c\ExchangeTable::getList(array('select' => array('ID'),));
                    if ($_1451062140 = $_1549870444->fetch()) {
                        \Data\Parallel1c\ExchangeTable::delete($_1451062140['ID']);
                    }
                    $this->UnInstallDB();
                }
                $this->UnInstallFiles();
                UnRegisterModule('data.parallel1c');
                $APPLICATION->IncludeAdminFile(GetMessage('DATA_PARALLEL1C1_UNINSTALL_TITLE'), $_SERVER['DOCUMENT_ROOT'] . '/' . $this->_1159779154 . '/modules/' . $this->MODULE_ID . '/install/unstep2.php');
                return true;
            }
        }
    }

    function InstallFiles($_1735337710 = array())
    {
        CopyDirFiles($_SERVER['DOCUMENT_ROOT'] . '/' . $this->_1159779154 . '/modules/' . $this->MODULE_ID . '/install/admin/', $_SERVER['DOCUMENT_ROOT'] . '/bitrix/admin/');
        CopyDirFiles($_SERVER['DOCUMENT_ROOT'] . '/' . $this->_1159779154 . '/modules/' . $this->MODULE_ID . '/install/themes/', $_SERVER['DOCUMENT_ROOT'] . '/bitrix/themes/', true, true);
        CopyDirFiles($_SERVER['DOCUMENT_ROOT'] . '/' . $this->_1159779154 . '/modules/' . $this->MODULE_ID . '/install/components/data/', $_SERVER['DOCUMENT_ROOT'] . '/bitrix/components/data/', true, true);
        CheckDirPath($_SERVER['DOCUMENT_ROOT'] . '/upload/1c_catalog_copy_data_parallel1c/');
    }

    function UnInstallFiles($_1735337710 = array())
    {
        DeleteDirFiles($_SERVER['DOCUMENT_ROOT'] . '/' . $this->_1159779154 . '/modules/' . $this->MODULE_ID . '/install/admin/', $_SERVER['DOCUMENT_ROOT'] . '/bitrix/admin');
        DeleteDirFiles($_SERVER['DOCUMENT_ROOT'] . '/' . $this->_1159779154 . '/modules/' . $this->MODULE_ID . '/install/themes/.default/', $_SERVER['DOCUMENT_ROOT'] . '/bitrix/themes/.default');
        DeleteDirFilesEx('/bitrix/themes/.default/icons/' . $this->MODULE_ID . '/');
        DeleteDirFilesEx('/bitrix/components/data/data.parallel1c.catalog.import.1c.17.6.3/');
        DeleteDirFilesEx('/bitrix/components/data/data.parallel1c.catalog.import.1c.20.0.0/');
        DeleteDirFilesEx('/upload/1c_catalog_copy_data_parallel1c/');
    }

    function InstallDB()
    {

        $_1583735852 = true;
        global $APPLICATION, $DB;
        if (!$DB->Query("SELECT 'x' FROM b_data_parallel1c_exchange", true)) $_72159314 = "Y"; else $_72159314 = "N";
        $_730090081 = false;
        if ($_72159314 == "Y") {
            $_234088923 = $_SERVER['DOCUMENT_ROOT'] . '/' . $this->_1159779154 . '/modules/' . $this->MODULE_ID . '/install/db/' . strtolower($DB->type) . '/install.sql';
            $_730090081 = $DB->RunSQLBatch($_234088923);
        }
        if (!empty($_730090081)) {
            $APPLICATION->ThrowException(implode("", $_730090081));
            $_1583735852 = false;
        }
        return $_1583735852;
    }

    function UnInstallDB()
    {
        global $APPLICATION, $DB;
        $_730090081 = $DB->RunSQLBatch($_SERVER['DOCUMENT_ROOT'] . '/' . $this->_1159779154 . '/modules/' . $this->MODULE_ID . '/install/db/' . strtolower($DB->type) . '/uninstall.sql');
        if (!empty($_730090081)) {
            $APPLICATION->ThrowException(implode("", $_730090081));
            return false;
        }
        return true;
    }

    function InstallEvents()
    {
    }

    function UnInstallEvents()
    {
    }
} ?>