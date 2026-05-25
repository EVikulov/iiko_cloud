<?php

declare(strict_types=1);

namespace IikoApi\Domain\Dto\Responses\Report;

final readonly class Report
{
    /** @param Transaction[]|null $transactions */
    public function __construct(
        public ?array $transactions, //

        public ?string $lastTransactionId, //
        public ?string $lastRevision, //

        public int $pageSize, //

    ) {}

    public static function fromArray(array $d): self
    {
        return new self(
            lastRevision: isset($d['lastRevision']) && $d['lastRevision'] !== null
                ? (string) $d['lastRevision']
                : null,
            lastTransactionId: isset($d['lastTransactionId']) && $d['lastTransactionId'] !== null
                ? (string) $d['lastTransactionId']
                : null,
            pageSize: (int) $d['pageSize'],

            transactions: isset($d['transactions'])
                ? array_map(static fn (array $t): Transaction => Transaction::fromArray($t), $d['transactions'])
                : null,
        );
    }
}
