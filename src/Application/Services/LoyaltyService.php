<?php

declare(strict_types=1);

namespace IikoApi\Application\Services;

use IikoApi\Constants;
use IikoApi\Domain\Dto\Requests\Loyalty\CustomerAddProgramRequest;
use IikoApi\Domain\Dto\Requests\Loyalty\CustomerCreateCardRequest;
use IikoApi\Domain\Dto\Requests\Loyalty\CustomerRefillCardRequest;
use IikoApi\Domain\Dto\Requests\Loyalty\CustomerWithdrawCardRequest;
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

    public function refillCustomerCard(CustomerRefillCardRequest $request): array
    {
        $response = $this->authorizedRequest(
            'POST',
            Constants::CUSTOMER_REFILL_CARD,
            $request->toArray()
        );

        return LoyaltyResponse::fromArray($response);
    }

    public function withdrawCustomerCard(CustomerWithdrawCardRequest $request): array
    {
        $response = $this->authorizedRequest(
            'POST',
            Constants::CUSTOMER_WITHDRAW_CARD,
            $request->toArray()
        );

        return LoyaltyResponse::fromArray($response);
    }

    public function addCustomerToProgram(CustomerAddProgramRequest $request): array
    {
        $response = $this->authorizedRequest(
            'POST',
            Constants::CUSTOMER_ADD_PROGRAM,
            $request->toArray()
        );

        return LoyaltyResponse::fromArray($response);
    }
}
