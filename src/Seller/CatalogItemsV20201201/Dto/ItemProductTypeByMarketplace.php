<?php

namespace SellingPartnerApi\Seller\CatalogItemsV20201201\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ItemProductTypeByMarketplace extends BaseDto
{
    /**
     * @param  string  $marketplaceId Amazon marketplace identifier.
     * @param  string  $productType Name of the product type associated with the Amazon catalog item.
     */
    public function __construct(
        public readonly string $marketplaceId,
        public readonly string $productType,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}