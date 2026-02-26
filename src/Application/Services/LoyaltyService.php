<?php

declare(strict_types=1);

namespace IikoApi\Application\Services;

use IikoApi\Constants;
use IikoApi\Domain\Dto\Requests\Loyalty\CustomerCreateCardRequest;
use IikoApi\Domain\Dto\Responses\Loyalty\LoyaltyResponse;

final class LoyaltyService extends BaseService
{
    /**
     * Summary of createCustomerCard
     */
    public function createCustomerCard(CustomerCreateCardRequest $request): array
    {
        $response = $this->authorizedRequest(
            'POST',
            Constants::CUSTOMER_CREATE_CARD,
            $request->toArray(),
        );

        return LoyaltyResponse::fromArray($response);
    }
}
