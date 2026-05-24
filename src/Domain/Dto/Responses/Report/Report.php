<?php

declare(strict_types=1);

namespace IikoApi\Domain\Dto\Responses\Report;

use IikoApi\Domain\Dto\Responses\Transaction\Transaction;

final readonly class Report
{
    public function __construct(
        public ?Transaction $transactions, //

        public ?string $lastTransactionId, //
        public ?string $lastRevision, //

        public int $pageSize, //

    ) {}

    public static function fromArray(array $d): self
    {
        return new self(
            lastRevision: $d['lastRevision'],
            lastTransactionId: $d['lastTransactionId'],
            pageSize: $d['pageSize'],

            transactions: isset($d['transactions']) ? Transaction::fromArray($d['transactions']) : null,
        );
    }
}
