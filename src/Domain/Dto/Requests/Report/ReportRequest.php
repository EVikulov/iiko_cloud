<?php

declare(strict_types=1);

namespace IikoApi\Domain\Dto\Requests\Report;

use IikoApi\Domain\Dto\Requests\BaseRequest;
use Webmozart\Assert\Assert;

/**
 * Запрос отчёта по транзакциям лояльности.
 *
 * • `customerId` — UUID пользователя
 * • `revision` — отчёт с момента внесения изменений (нужен при указании `lastTransactionId`)
 * • `lastTransactionId` — отчёт с момента транзакции (требует `revision`)
 * • `pageSize` — размер страницы
 * • `organizationId` — UUID организации
 */
class ReportRequest extends BaseRequest
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
    }
}
