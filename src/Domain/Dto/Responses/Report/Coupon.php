<?php

final readonly class Coupon
{
    public function __construct(
        public string $number,
        public string $series,
    ) {
    }

    public static function fromArray(array $d): self
    {
        return new self(
            number: (string) $d['number'],
            series: (string) $d['series'],
        );
    }
}