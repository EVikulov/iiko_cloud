<?php

declare(strict_types=1);

namespace IikoApi\Domain\Dto\Responses\Report;

final readonly class Certificate
{
    public function __construct(
        public string $number,
        public string $series,
        public string $statusName,
        public string $typeName,
    ) {
    }

    public static function fromArray(array $d): self
    {
        return new self(
            number: (string) $d['number'],
            series: (string) $d['series'],
            statusName: (string) $d['statusName'],
            typeName: (string) $d['typeName'],
        );
    }
}