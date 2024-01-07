<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class CreateInboundShipmentPlanRequest extends BaseDto
{
    protected static array $complexArrayTypes = [
        'inboundShipmentPlanRequestItems' => [InboundShipmentPlanRequestItem::class],
    ];

    /**
     * @param  string  $labelPrepPreference The preference for label preparation for an inbound shipment.
     * @param  string  $shipToCountryCode The two-character country code for the country where the inbound shipment is to be sent.
     *
     * Note: Not required. Specifying both ShipToCountryCode and ShipToCountrySubdivisionCode returns an error.
     *
     *  Values:
     *
     *  ShipToCountryCode values for North America:
     *  * CA – Canada
     *  * MX - Mexico
     *  * US - United States
     *
     * ShipToCountryCode values for MCI sellers in Europe:
     *  * DE – Germany
     *  * ES – Spain
     *  * FR – France
     *  * GB – United Kingdom
     *  * IT – Italy
     *
     * Default: The country code for the seller's home marketplace.
     * @param  string  $shipToCountrySubdivisionCode The two-character country code, followed by a dash and then up to three characters that represent the subdivision of the country where the inbound shipment is to be sent. For example, "IN-MH". In full ISO 3166-2 format.
     *
     * Note: Not required. Specifying both ShipToCountryCode and ShipToCountrySubdivisionCode returns an error.
     * @param  InboundShipmentPlanRequestItem[]  $inboundShipmentPlanRequestItems
     */
    public function __construct(
        public readonly ?Address $shipFromAddress = null,
        public readonly ?string $labelPrepPreference = null,
        public readonly ?string $shipToCountryCode = null,
        public readonly ?string $shipToCountrySubdivisionCode = null,
        public readonly ?array $inboundShipmentPlanRequestItems = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}