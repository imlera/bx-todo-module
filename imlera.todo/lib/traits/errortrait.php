<?php

namespace Imlera\Todo\Traits;

use Exception;
use Bitrix\Main\Error;
use Bitrix\Main\ErrorCollection;

trait ErrorTrait
{
    protected ErrorCollection $errorCollection;

    protected function initErrorCollection(): void
    {
        $this->errorCollection = new ErrorCollection();
    }

    public function getErrors(): array
    {
        return $this->errorCollection->toArray();
    }

    public function getErrorByCode(int|string $code): ?Error
    {
        return $this->errorCollection->getErrorByCode($code);
    }

    public function addError(Error $error): void
    {
        $this->errorCollection->add([$error]);
    }

    public function addErrorException(Exception $exception): void
    {
        $this->addError(
            $this->createError($exception->getMessage(), $exception->getCode())
        );
    }

    protected function createError(string $message, int|string $code, mixed $customData = null): Error
    {
        return new Error($message, $code, $customData);
    }
}