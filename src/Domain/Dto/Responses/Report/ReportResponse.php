<?php

declare(strict_types=1);

namespace IikoApi\Domain\Dto\Responses\Report;

final readonly class ReportResponse
{
    public function __construct(
        public string $correlationId,
        public Report $Report,
    ) {}

    public static function fromArray(array $d): self
    {
        return new self(
            correlationId: (string) ($d['correlationId'] ?? ''),
            Report: Report::fromArray($d['report'] ?? $d),
        );
    }
}
