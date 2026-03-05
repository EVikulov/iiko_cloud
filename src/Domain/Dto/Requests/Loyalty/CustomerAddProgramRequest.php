<?php


declare(strict_types=1);

namespace IikoApi\Domain\Dto\Requests\Loyalty;

use IikoApi\Domain\Dto\Requests\OneOrganizationRequest;
use Webmozart\Assert\Assert;

class CustomerAddProgramRequest extends OneOrganizationRequest
{
    public function __construct(
        public string  $organizationId,
        public string  $customerId,
        public string  $programId
    )
    {
        parent::__construct($organizationId);
        // ---- Валидация входа ----------------------------------------------
        Assert::uuid($organizationId, 'organizationId должен быть UUID.');
        Assert::uuid($programId, 'programId должен быть UUID.');
        Assert::uuid($customerId, 'customerId должен быть UUID.');
    }
}
