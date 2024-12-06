<?php

use Bitrix\Main\ModuleManager;

final class itbizon_ivanova_todo extends CModule
{
    public function __construct()
    {
        $this->MODULE_ID = 'itbizon.ivanova.todo';
        $this->MODULE_NAME = '[BizON] itbizon.ivanova.todo';
        $this->MODULE_DESCRIPTION = 'Testing module';

        /** @var array $arModuleVersion */
        include_once(__DIR__ . '/version.php');
        if ($arModuleVersion
            && is_array($arModuleVersion)
            && array_key_exists('VERSION', $arModuleVersion)) {
            $this->MODULE_VERSION = $arModuleVersion['VERSION'];
            $this->MODULE_VERSION_DATE = $arModuleVersion['VERSION_DATE'];
        }
    }

    #region Methods

    public function DoInstall(): void
    {
        $isInstalled = ModuleManager::isModuleInstalled($this->MODULE_ID);
        if (!$isInstalled && !$this->InstallDB()) return;

        $message = $isInstalled ? 'Module installation error' : 'The module is installed';
        $status = $isInstalled ? 'ok' : 'error';

        CAdminMessage::ShowMessage([$message, $status]);
        ModuleManager::registerModule($this->MODULE_ID);
    }

    public function DoUninstall(): void
    {
        $isInstalled = ModuleManager::isModuleInstalled($this->MODULE_ID);
        $message = $isInstalled ? 'The module has been deleted' : 'Module deletion error';
        $status = $isInstalled ? 'ok' : 'error';

        CAdminMessage::ShowMessage([$message, $status]);
        ModuleManager::unRegisterModule($this->MODULE_ID);
    }

    public function InstallDB(): bool
    {
        return true;
    }

    public function UnInstallDB(): bool
    {
        return true;
    }
    #endregion
}