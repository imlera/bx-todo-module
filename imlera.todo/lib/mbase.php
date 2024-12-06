<?php

namespace Imlera\Todo;

use Bitrix\Main\ArgumentOutOfRangeException;
use Bitrix\Main\Config\Option;
use Bitrix\Main\ErrorCollection;
use Imlera\Todo\Traits\ErrorTrait;

final class MBase
{
    use ErrorTrait;

    const MODULE_ID = 'imlera.todo';

    public function __construct(protected ErrorCollection $errorCollection)
    {
        $this->initErrorCollection();
    }

    public function setOption(string $name, string $value): void
    {
        try {
            Option::set($this::MODULE_ID, $name, $value);
        } catch (ArgumentOutOfRangeException $e) {
            $this->addErrorException($e);
        }
    }

    public static function getOption(string $name): string
    {
        return Option::get(self::MODULE_ID, $name);
    }

    #region Getter
    public static function getEnableLoggingOption(): string
    {
        return self::getOption('ENABLE_LOGGING');
    }

    public static function getModificationEmployeeAddOption(): string
    {
        return self::getOption('MODIFICATION_EMPLOYEE_ADD');
    }

    public static function getModificationEmployeeUpdateOption(): string
    {
        return self::getOption('MODIFICATION_EMPLOYEE_UPDATE');
    }

    public static function getModificationEmployeeDeleteOption(): string
    {
        return self::getOption('MODIFICATION_EMPLOYEE_DELETE');
    }

    public static function getModificationProfileAddOption(): string
    {
        return self::getOption('MODIFICATION_PROFILE_ADD');
    }

    public static function getModificationProfileUpdateOption(): string
    {
        return self::getOption('MODIFICATION_PROFILE_UPDATE');
    }

    public static function getModificationProfileDeleteOption(): string
    {
        return self::getOption('MODIFICATION_PROFILE_DELETE');
    }

    public static function getModificationTaskAddOption(): string
    {
        return self::getOption('MODIFICATION_TASK_ADD');
    }

    public static function getModificationTaskUpdateOption(): string
    {
        return self::getOption('MODIFICATION_TASK_UPDATE');
    }

    public static function getModificationTaskDeleteOption(): string
    {
        return self::getOption('MODIFICATION_TASK_DELETE');
    }
    #endregion
}