<?php
/**
 * SKUPrepInstructions
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
 * SKUPrepInstructions Class Doc Comment
 *
 * @category Class
 * @description Labeling requirements and item preparation instructions to help you prepare items for shipment to Amazon's fulfillment network.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class SKUPrepInstructions extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SKUPrepInstructions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'seller_sku' => 'string',
        'asin' => 'string',
        'barcode_instruction' => '\SellingPartnerApi\Model\FbaInboundV0\BarcodeInstruction',
        'prep_guidance' => '\SellingPartnerApi\Model\FbaInboundV0\PrepGuidance',
        'prep_instruction_list' => '\SellingPartnerApi\Model\FbaInboundV0\PrepInstruction[]',
        'amazon_prep_fees_details_list' => '\SellingPartnerApi\Model\FbaInboundV0\AmazonPrepFeesDetails[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'seller_sku' => null,
        'asin' => null,
        'barcode_instruction' => null,
        'prep_guidance' => null,
        'prep_instruction_list' => null,
        'amazon_prep_fees_details_list' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'seller_sku' => 'SellerSKU',
        'asin' => 'ASIN',
        'barcode_instruction' => 'BarcodeInstruction',
        'prep_guidance' => 'PrepGuidance',
        'prep_instruction_list' => 'PrepInstructionList',
        'amazon_prep_fees_details_list' => 'AmazonPrepFeesDetailsList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'seller_sku' => 'setSellerSku',
        'asin' => 'setAsin',
        'barcode_instruction' => 'setBarcodeInstruction',
        'prep_guidance' => 'setPrepGuidance',
        'prep_instruction_list' => 'setPrepInstructionList',
        'amazon_prep_fees_details_list' => 'setAmazonPrepFeesDetailsList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'seller_sku' => 'getSellerSku',
        'asin' => 'getAsin',
        'barcode_instruction' => 'getBarcodeInstruction',
        'prep_guidance' => 'getPrepGuidance',
        'prep_instruction_list' => 'getPrepInstructionList',
        'amazon_prep_fees_details_list' => 'getAmazonPrepFeesDetailsList'
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
        $this->container['seller_sku'] = $data['seller_sku'] ?? null;
        $this->container['asin'] = $data['asin'] ?? null;
        $this->container['barcode_instruction'] = $data['barcode_instruction'] ?? null;
        $this->container['prep_guidance'] = $data['prep_guidance'] ?? null;
        $this->container['prep_instruction_list'] = $data['prep_instruction_list'] ?? null;
        $this->container['amazon_prep_fees_details_list'] = $data['amazon_prep_fees_details_list'] ?? null;
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
     * Gets seller_sku
     *
     * @return string|null
     */
    public function getSellerSku()
    {
        return $this->container['seller_sku'];
    }

    /**
     * Sets seller_sku
     *
     * @param string|null $seller_sku The seller SKU of the item.
     *
     * @return self
     */
    public function setSellerSku($seller_sku)
    {
        $this->container['seller_sku'] = $seller_sku;

        return $this;
    }
    /**
     * Gets asin
     *
     * @return string|null
     */
    public function getAsin()
    {
        return $this->container['asin'];
    }

    /**
     * Sets asin
     *
     * @param string|null $asin The Amazon Standard Identification Number (ASIN) of the item.
     *
     * @return self
     */
    public function setAsin($asin)
    {
        $this->container['asin'] = $asin;

        return $this;
    }
    /**
     * Gets barcode_instruction
     *
     * @return \SellingPartnerApi\Model\FbaInboundV0\BarcodeInstruction|null
     */
    public function getBarcodeInstruction()
    {
        return $this->container['barcode_instruction'];
    }

    /**
     * Sets barcode_instruction
     *
     * @param \SellingPartnerApi\Model\FbaInboundV0\BarcodeInstruction|null $barcode_instruction barcode_instruction
     *
     * @return self
     */
    public function setBarcodeInstruction($barcode_instruction)
    {
        $this->container['barcode_instruction'] = $barcode_instruction;

        return $this;
    }
    /**
     * Gets prep_guidance
     *
     * @return \SellingPartnerApi\Model\FbaInboundV0\PrepGuidance|null
     */
    public function getPrepGuidance()
    {
        return $this->container['prep_guidance'];
    }

    /**
     * Sets prep_guidance
     *
     * @param \SellingPartnerApi\Model\FbaInboundV0\PrepGuidance|null $prep_guidance prep_guidance
     *
     * @return self
     */
    public function setPrepGuidance($prep_guidance)
    {
        $this->container['prep_guidance'] = $prep_guidance;

        return $this;
    }
    /**
     * Gets prep_instruction_list
     *
     * @return \SellingPartnerApi\Model\FbaInboundV0\PrepInstruction[]|null
     */
    public function getPrepInstructionList()
    {
        return $this->container['prep_instruction_list'];
    }

    /**
     * Sets prep_instruction_list
     *
     * @param \SellingPartnerApi\Model\FbaInboundV0\PrepInstruction[]|null $prep_instruction_list A list of preparation instructions to help with item sourcing decisions.
     *
     * @return self
     */
    public function setPrepInstructionList($prep_instruction_list)
    {
        $this->container['prep_instruction_list'] = $prep_instruction_list;

        return $this;
    }
    /**
     * Gets amazon_prep_fees_details_list
     *
     * @return \SellingPartnerApi\Model\FbaInboundV0\AmazonPrepFeesDetails[]|null
     */
    public function getAmazonPrepFeesDetailsList()
    {
        return $this->container['amazon_prep_fees_details_list'];
    }

    /**
     * Sets amazon_prep_fees_details_list
     *
     * @param \SellingPartnerApi\Model\FbaInboundV0\AmazonPrepFeesDetails[]|null $amazon_prep_fees_details_list A list of preparation instructions and fees for Amazon to prep goods for shipment.
     *
     * @return self
     */
    public function setAmazonPrepFeesDetailsList($amazon_prep_fees_details_list)
    {
        $this->container['amazon_prep_fees_details_list'] = $amazon_prep_fees_details_list;

        return $this;
    }
}


