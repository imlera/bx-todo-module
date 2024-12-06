<?php

namespace Imlera\Todo\Tables;

use Bitrix\Main\SystemException;
use Bitrix\Main\ORM\Data\DataManager;
use Imlera\Todo\Logs\MLogger;
use Imlera\Todo\Traits\ErrorTrait;
use Imlera\Todo\Entities\ProfileEntity;

class ProfileTable extends DataManager implements TableInterface
{
    use ErrorTrait;

    public const TABLE_NAME = 'imlera_todo_profiles';
    public const OBJECT_CLASS = ProfileEntity::class;


    public static function getTableName(): string
    {
        return self::TABLE_NAME;
    }

    public static function getObjectClass(): string
    {
        return self::OBJECT_CLASS;
    }

    public static function getMap(): array
    {
        try {
            return [];
        } catch (SystemException $exception) {
            MLogger::log($exception->getMessage(), 'error');
            return [];
        }
    }
}