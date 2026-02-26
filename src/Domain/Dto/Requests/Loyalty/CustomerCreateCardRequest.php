<?php

declare(strict_types=1);

namespace IikoApi\Domain\Dto\Requests\Loyalty;

use DateTimeInterface;
use IikoApi\Domain\Dto\Requests\OneOrganizationRequest;
use IikoApi\Domain\Enums\ConsentStatus;
use IikoApi\Domain\Enums\SexType;
use Webmozart\Assert\Assert;

class CustomerCreateCardRequest extends OneOrganizationRequest
{
    public function __construct(
        public string $organizationId,
        public string $customerId,
        public ?string $cardTrack = null,
        public ?string $cardNumber = null,
    ) {
        parent::__construct($organizationId);
        // ---- Валидация входа ----------------------------------------------
        Assert::uuid($organizationId, 'organizationId должен быть UUID.');
        Assert::uuid($customerId, 'customerId должен быть UUID.');

        Assert::nullOrStringNotEmpty($cardTrack);
        Assert::nullOrStringNotEmpty($cardNumber);
    }
}
