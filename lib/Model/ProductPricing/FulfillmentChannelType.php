<?php
/**
 * FulfillmentChannelType
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Pricing
 *
 * The Selling Partner API for Pricing helps you programmatically retrieve product pricing and offer information for Amazon Marketplace products.
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

namespace SellingPartnerApi\Model\ProductPricing;
use \SellingPartnerApi\ObjectSerializer;
use \SellingPartnerApi\Model\ModelInterface;

/**
 * FulfillmentChannelType Class Doc Comment
 *
 * @category Class
 * @description Indicates whether the item is fulfilled by Amazon or by the seller (merchant).
 * @package  SellingPartnerApi
 * @group 
 */
class FulfillmentChannelType
{
    /**
     * Possible values of this enum
     */
    const AMAZON = 'Amazon';
    const MERCHANT = 'Merchant';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AMAZON,
            self::MERCHANT,
        ];
    }
}

