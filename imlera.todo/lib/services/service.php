<?php

namespace Imlera\Todo\Services;

use JetBrains\PhpStorm\ExpectedValues;
use ErrorException;
use Bitrix\Main\SystemException;
use Bitrix\Main\ArgumentException;
use Bitrix\Main\ObjectPropertyException;
use Bitrix\Main\ErrorCollection;
use Bitrix\Main\Localization\Loc;
use Bitrix\Main\ORM\Objectify\Collection;
use Imlera\Todo\Traits\ErrorTrait;

use Imlera\Todo\Tables\EmployeeTable;
use Imlera\Todo\Tables\ProfileTable;
use Imlera\Todo\Tables\TaskTable;

class Service
{
    use ErrorTrait;

    protected ErrorCollection $errorCollection;

    public function __construct(protected string $tableClass)
    {
        $this->errorCollection = new ErrorCollection();
    }

    #region Selects
    public function getList(array $params): ?object
    {
        try {
            if (!method_exists($this->tableClass, 'getList')) {
                throw new ErrorException(Loc::getMessage('ERROR_SERVICE_GET_LIST_METHOD_EXISTS'));
            }

            return $this->tableClass::getList($params);
        } catch (ErrorException|SystemException|ArgumentException|ObjectPropertyException $e) {
            $this->addErrorException($e);
            return null;
        }
    }

    public function getCollection(array $params): ?Collection
    {
        return $this->getList($params)?->fetchCollection();
    }

    public function getFetchAll(array $params): ?array
    {
        return $this->getList($params)?->fetchAll();
    }

    public function getFetchRaw(array $params): ?array
    {
        return $this->getList($params)?->fetchRaw();
    }
    #endregion

    #region Modifications
    public function add(array $data)
    {

    }

    public function update(array $data)
    {

    }

    public function delete(array $data)
    {

    }
    #endregion
}