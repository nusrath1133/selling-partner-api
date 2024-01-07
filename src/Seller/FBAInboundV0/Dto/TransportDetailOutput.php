<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class TransportDetailOutput extends BaseDto
{
    /**
     * @param  PartneredSmallParcelDataOutput  $partneredSmallParcelData Information returned by Amazon about a Small Parcel shipment by an Amazon-partnered carrier.
     * @param  NonPartneredSmallParcelDataOutput  $nonPartneredSmallParcelData Information returned by Amazon about a Small Parcel shipment by a carrier that has not partnered with Amazon.
     * @param  PartneredLtlDataOutput  $partneredLtlData Information returned by Amazon about a Less Than Truckload/Full Truckload (LTL/FTL) shipment by an Amazon-partnered carrier.
     * @param  NonPartneredLtlDataOutput  $nonPartneredLtlData Information returned by Amazon about a Less Than Truckload/Full Truckload (LTL/FTL) shipment shipped by a carrier that has not partnered with Amazon.
     */
    public function __construct(
        public readonly PartneredSmallParcelDataOutput $partneredSmallParcelData,
        public readonly NonPartneredSmallParcelDataOutput $nonPartneredSmallParcelData,
        public readonly PartneredLtlDataOutput $partneredLtlData,
        public readonly NonPartneredLtlDataOutput $nonPartneredLtlData,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}