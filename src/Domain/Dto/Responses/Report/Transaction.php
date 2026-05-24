<?php

declare(strict_types=1);

namespace IikoApi\Domain\Dto\Responses\Transaction;

use Certificate;
use Coupon;

final readonly class Transaction
{
    public function __construct(
        public string $apiClientLogin,
        public float $balanceAfter,
        public float $balanceBefore,
        public string $blockReason,
        public ?Certificate $certificate,
        public string $comment,
        public string $counteragent,
        public int $counteragentType,
        public string $counteragentTypeName,
        public ?Coupon $coupon,
        public string $emitentName,
        public string $loyaltyUser,
        public string $marketingCampaignId,
        public float $nominal,
        public int $orderNumber,
        public float $orderSum,
        public string $organizationId,
        public float $posBalanceBefore,
        public string $programId,
        public float $sum,
        public int $type,
        public string $typeName,
        public string $walletId,
        public \DateTimeImmutable $whenCreated,
        public \DateTimeImmutable $whenCreatedOrder,
        public string $id,
        public bool $isDelivery,
        public bool $isIgnored,
        public string $posOrderId,
        public int $revision,
        public string $terminalGroupId
    ) {}

    public static function fromArray(array $d): self
    {
        return new self(
            apiClientLogin: (string) $d['apiClientLogin'],
            balanceAfter: (float) $d['balanceAfter'],
            balanceBefore: (float) $d['balanceBefore'],
            blockReason: (string) $d['blockReason'],
            certificate: isset($d['certificate'])
                ? Certificate::fromArray($d['certificate'])
                : null,
            comment: (string) $d['comment'],
            counteragent: (string) $d['counteragent'],
            counteragentType: (int) $d['counteragentType'],
            counteragentTypeName: (string) $d['counteragentTypeName'],
            coupon: isset($d['coupon'])
                ? Coupon::fromArray($d['coupon'])
                : null,
            emitentName: (string) $d['emitentName'],
            loyaltyUser: (string) $d['loyaltyUser'],
            marketingCampaignId: (string) $d['marketingCampaignId'],
            nominal: (float) $d['nominal'],
            orderNumber: (int) $d['orderNumber'],
            orderSum: (float) $d['orderSum'],
            organizationId: (string) $d['organizationId'],
            posBalanceBefore: (float) $d['posBalanceBefore'],
            programId: (string) $d['programId'],
            sum: (float) $d['sum'],
            type: (int) $d['type'],
            typeName: (string) $d['typeName'],
            walletId: (string) $d['walletId'],
            whenCreated: new \DateTimeImmutable($d['whenCreated']),
            whenCreatedOrder: new \DateTimeImmutable($d['whenCreatedOrder']),
            id: (string) $d['id'],
            isDelivery: (bool) $d['isDelivery'],
            isIgnored: (bool) $d['isIgnored'],
            posOrderId: (string) $d['posOrderId'],
            revision: (int) $d['revision'],
            terminalGroupId: (string) $d['terminalGroupId'],
        );
    }
}
