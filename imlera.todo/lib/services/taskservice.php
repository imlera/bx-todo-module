<?php

namespace Imlera\Todo\Services;

use Imlera\Todo\Tables\TaskTable;

class TaskService
{
    private const TABLE_CLASS = TaskTable::class;

    protected Service $service;

    public function __construct()
    {
        $this->service = new Service(self::TABLE_CLASS);
    }
}