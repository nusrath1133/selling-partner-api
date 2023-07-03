<?php
/**
 * ConfirmPreorderResult
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Fulfillment Inbound
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
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

namespace SellingPartnerApi\Model\FbaInboundV0;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;

/**
 * ConfirmPreorderResult Class Doc Comment
 *
 * @category Class
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ConfirmPreorderResult extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ConfirmPreorderResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'confirmed_need_by_date' => 'string',
        'confirmed_fulfillable_date' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'confirmed_need_by_date' => null,
        'confirmed_fulfillable_date' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'confirmed_need_by_date' => 'ConfirmedNeedByDate',
        'confirmed_fulfillable_date' => 'ConfirmedFulfillableDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'confirmed_need_by_date' => 'setConfirmedNeedByDate',
        'confirmed_fulfillable_date' => 'setConfirmedFulfillableDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'confirmed_need_by_date' => 'getConfirmedNeedByDate',
        'confirmed_fulfillable_date' => 'getConfirmedFulfillableDate'
    ];


    
    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['confirmed_need_by_date'] = $data['confirmed_need_by_date'] ?? null;
        $this->container['confirmed_fulfillable_date'] = $data['confirmed_fulfillable_date'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        return $invalidProperties;
    }


    /**
     * Gets confirmed_need_by_date
     *
     * @return string|null
     */
    public function getConfirmedNeedByDate()
    {
        return $this->container['confirmed_need_by_date'];
    }

    /**
     * Sets confirmed_need_by_date
     *
     * @param string|null $confirmed_need_by_date A date string in ISO 8601 format.
     *
     * @return self
     */
    public function setConfirmedNeedByDate($confirmed_need_by_date)
    {
        $this->container['confirmed_need_by_date'] = $confirmed_need_by_date;

        return $this;
    }
    /**
     * Gets confirmed_fulfillable_date
     *
     * @return string|null
     */
    public function getConfirmedFulfillableDate()
    {
        return $this->container['confirmed_fulfillable_date'];
    }

    /**
     * Sets confirmed_fulfillable_date
     *
     * @param string|null $confirmed_fulfillable_date A date string in ISO 8601 format.
     *
     * @return self
     */
    public function setConfirmedFulfillableDate($confirmed_fulfillable_date)
    {
        $this->container['confirmed_fulfillable_date'] = $confirmed_fulfillable_date;

        return $this;
    }
}


