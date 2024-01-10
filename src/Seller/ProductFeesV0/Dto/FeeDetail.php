<?php

namespace SellingPartnerApi\Seller\ProductFeesV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class FeeDetail extends BaseDto
{
    protected static array $complexArrayTypes = ['includedFeeDetailList' => [IncludedFeeDetail::class]];

    /**
     * @param  string  $feeType The type of fee charged to a seller.
     * @param  ?MoneyType  $feePromotion
     * @param  ?MoneyType  $taxAmount
     * @param  ?IncludedFeeDetail[]  $includedFeeDetailList A list of other fees that contribute to a given fee.
     * @param  ?mixed  $additionalProperties
     */
    public function __construct(
        public readonly string $feeType,
        public readonly MoneyType $feeAmount,
        public readonly MoneyType $finalFee,
        public readonly ?MoneyType $feePromotion = null,
        public readonly ?MoneyType $taxAmount = null,
        public readonly ?array $includedFeeDetailList = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}