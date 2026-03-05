<?php

declare(strict_types=1);

namespace IikoApi\Domain\Dto\Requests\Loyalty;

use IikoApi\Domain\Dto\Requests\OneOrganizationRequest;
use Webmozart\Assert\Assert;

class CustomerRefillCardRequest extends OneOrganizationRequest
{
    public function __construct(
        public string $organizationId,
        public string $customerId,
        public string $walletId,
        public float $sum,
        public ?string $comment = null
    ) {
        parent::__construct($organizationId);
        // ---- Валидация входа ----------------------------------------------
        Assert::uuid($organizationId, 'organizationId должен быть UUID.');
        Assert::uuid($walletId, 'walletId должен быть UUID.');
        Assert::uuid($customerId, 'customerId должен быть UUID.');

        Assert::greaterThan($sum, 0);
        Assert::nullOrStringNotEmpty($comment);
    }
}
