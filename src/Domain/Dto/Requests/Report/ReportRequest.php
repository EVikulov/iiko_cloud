<?php

declare(strict_types=1);

namespace IikoApi\Domain\Dto\Requests\Report;

use Webmozart\Assert\Assert;

/**
 * /terminals/groups
 *
 * Возвращает терминальные группы организаций.
 *
 * • `customerId` — UUID пользователя
 * • `revision` — Отчет с момента внесения изменений. Включается, если указан LastTransactionId.
 * • `lastTransactionId` - Отчет с момента совершения транзакции. Исключено. Не может быть использовано без revision.
 * • `pageSize` - Номер страницы
 * • `organizationId` - UUID организации
 *
 * Объект → **immutable** (`readonly`) и валидируется при создании.
 */
class TerminalGroupRequest extends MinimalRequest
{
    /**
     * @param string  $customerId
     * @param int  $revision
     * @param string $lastTransactionId 
     * @param int $pageSize
     * @param string $organizationId
     */
    public function __construct(
        public string $customerId = '',
        public int $revision = 0,
        public string $lastTransactionId = '',
        public int $pageSize = 0,
        public string $organizationId = '',
    ) {
        Assert::uuid($organizationId, 'organizationId должен быть валидным UUID.');
        Assert::uuid($customerId, 'customerId должен быть валидным UUID.');
        Assert::uuid($lastTransactionId, 'lastTransactionId должен быть валидным UUID.');

        parent::__construct($customerId);
    }
}
