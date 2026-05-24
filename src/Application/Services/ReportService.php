<?php

declare(strict_types=1);

namespace IikoApi\Application\Services;

use IikoApi\Constants;
use IikoApi\Domain\Dto\Requests\CreateDelivery\Request;
use IikoApi\Domain\Dto\Responses\Report\ReportResponse;

final class OrderService extends BaseService
{
    /**
     * Summary of getTransactionReport
     */
    public function getTransactionReport(Request $request): ReportResponse
    {
        $response = $this->authorizedRequest(
            'POST',
            Constants::CREATE_ORDER_URL,
            $request->toArray(),
        );

        return ReportResponse::fromArray($response);
    }
}
