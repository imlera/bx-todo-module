<?php

namespace Imlera\Todo\Tables;

interface TableInterface
{
    public static function getTableName();
    public static function getObjectClass();
    public static function getMap();
}