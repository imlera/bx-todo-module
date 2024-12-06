<?php

namespace Imlera\Todo\Logs;

use Imlera\Todo\MBase;
use JetBrains\PhpStorm\ExpectedValues;

final class MLogger
{
    private const LOG_FILE_PATCH = __DIR__ . '/logs/module.log';

    /**
     * Method for writing a message to the log
     * @param string $message
     * @param string|null $status
     * @param string|null $context
     * @return void
     */
    public static function log(
        string $message,
        #[ExpectedValues(['info', 'ok', 'warning', 'error'])]
        ?string $status = 'info',
        ?string $context = MBase::MODULE_ID
    ): void
    {
        if (MBase::getEnableLoggingOption() !== 'Y') {
            return;
        }

        file_put_contents(
            self::LOG_FILE_PATCH,
            sprintf("[%s] %s: %s\n", date('Y-m-d H:i:s'), $context, "[$status] $message"),
            FILE_APPEND
        );
    }
}