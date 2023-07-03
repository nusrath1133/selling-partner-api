<?php
/**
 * ShipmentInvoiceStatus
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Shipment Invoicing
 *
 * The Selling Partner API for Shipment Invoicing helps you programmatically retrieve shipment invoice information in the Brazil marketplace for a selling partner's Fulfillment by Amazon (FBA) orders.
 *
 * The version of the OpenAPI document: v0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\ShipmentInvoicingV0;
use ArrayAccess;

use SellingPartnerApi\Model\ModelInterface;

/**
 * ShipmentInvoiceStatus Class Doc Comment
 *
 * @category Class
 * @description The shipment invoice status.
 * @package  SellingPartnerApi
 * @group 
 */
class ShipmentInvoiceStatus
{
    public $value;

    /**
     * Possible values of this enum
     */
    const PROCESSING = 'Processing';
    const ACCEPTED = 'Accepted';
    const ERRORED = 'Errored';
    const NOT_FOUND = 'NotFound';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        $baseVals = [
            self::PROCESSING,
            self::ACCEPTED,
            self::ERRORED,
            self::NOT_FOUND,
        ];
        // This is necessary because Amazon does not consistently capitalize their
        // enum values, so we do case-insensitive enum value validation in ObjectSerializer
        $ucVals = array_map(function ($val) { return strtoupper($val); }, $baseVals);
        return array_merge($baseVals, $ucVals);
    }

    public function __construct($value)
    {
        if (is_null($value) || !in_array($value, self::getAllowableEnumValues(), true)) {
            throw new \InvalidArgumentException(sprintf("Invalid value %s for enum 'ShipmentInvoiceStatus', must be one of '%s'", $value, implode("', '", self::getAllowableEnumValues())));
        }

        $this->value = $value;
    }

    /**
     * Convert the enum value to a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->value;
    }
}


