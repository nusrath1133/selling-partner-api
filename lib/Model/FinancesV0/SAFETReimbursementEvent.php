<?php
/**
 * SAFETReimbursementEvent
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Finances
 *
 * The Selling Partner API for Finances helps you obtain financial information relevant to a seller's business. You can obtain financial events for a given order, financial event group, or date range without having to wait until a statement period closes. You can also obtain financial event groups for a given date range.
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

namespace SellingPartnerApi\Model\FinancesV0;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;

/**
 * SAFETReimbursementEvent Class Doc Comment
 *
 * @category Class
 * @description A SAFE-T claim reimbursement on the seller's account.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class SAFETReimbursementEvent extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SAFETReimbursementEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'posted_date' => 'string',
        'safet_claim_id' => 'string',
        'reimbursed_amount' => '\SellingPartnerApi\Model\FinancesV0\Currency',
        'reason_code' => 'string',
        'safet_reimbursement_item_list' => '\SellingPartnerApi\Model\FinancesV0\SAFETReimbursementItem[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'posted_date' => null,
        'safet_claim_id' => null,
        'reimbursed_amount' => null,
        'reason_code' => null,
        'safet_reimbursement_item_list' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'posted_date' => 'PostedDate',
        'safet_claim_id' => 'SAFETClaimId',
        'reimbursed_amount' => 'ReimbursedAmount',
        'reason_code' => 'ReasonCode',
        'safet_reimbursement_item_list' => 'SAFETReimbursementItemList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'posted_date' => 'setPostedDate',
        'safet_claim_id' => 'setSafetClaimId',
        'reimbursed_amount' => 'setReimbursedAmount',
        'reason_code' => 'setReasonCode',
        'safet_reimbursement_item_list' => 'setSafetReimbursementItemList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'posted_date' => 'getPostedDate',
        'safet_claim_id' => 'getSafetClaimId',
        'reimbursed_amount' => 'getReimbursedAmount',
        'reason_code' => 'getReasonCode',
        'safet_reimbursement_item_list' => 'getSafetReimbursementItemList'
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
        $this->container['posted_date'] = $data['posted_date'] ?? null;
        $this->container['safet_claim_id'] = $data['safet_claim_id'] ?? null;
        $this->container['reimbursed_amount'] = $data['reimbursed_amount'] ?? null;
        $this->container['reason_code'] = $data['reason_code'] ?? null;
        $this->container['safet_reimbursement_item_list'] = $data['safet_reimbursement_item_list'] ?? null;
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
     * Gets posted_date
     *
     * @return string|null
     */
    public function getPostedDate()
    {
        return $this->container['posted_date'];
    }

    /**
     * Sets posted_date
     *
     * @param string|null $posted_date A date string in ISO 8601 format.
     *
     * @return self
     */
    public function setPostedDate($posted_date)
    {
        $this->container['posted_date'] = $posted_date;

        return $this;
    }
    /**
     * Gets safet_claim_id
     *
     * @return string|null
     */
    public function getSafetClaimId()
    {
        return $this->container['safet_claim_id'];
    }

    /**
     * Sets safet_claim_id
     *
     * @param string|null $safet_claim_id A SAFE-T claim identifier.
     *
     * @return self
     */
    public function setSafetClaimId($safet_claim_id)
    {
        $this->container['safet_claim_id'] = $safet_claim_id;

        return $this;
    }
    /**
     * Gets reimbursed_amount
     *
     * @return \SellingPartnerApi\Model\FinancesV0\Currency|null
     */
    public function getReimbursedAmount()
    {
        return $this->container['reimbursed_amount'];
    }

    /**
     * Sets reimbursed_amount
     *
     * @param \SellingPartnerApi\Model\FinancesV0\Currency|null $reimbursed_amount reimbursed_amount
     *
     * @return self
     */
    public function setReimbursedAmount($reimbursed_amount)
    {
        $this->container['reimbursed_amount'] = $reimbursed_amount;

        return $this;
    }
    /**
     * Gets reason_code
     *
     * @return string|null
     */
    public function getReasonCode()
    {
        return $this->container['reason_code'];
    }

    /**
     * Sets reason_code
     *
     * @param string|null $reason_code Indicates why the seller was reimbursed.
     *
     * @return self
     */
    public function setReasonCode($reason_code)
    {
        $this->container['reason_code'] = $reason_code;

        return $this;
    }
    /**
     * Gets safet_reimbursement_item_list
     *
     * @return \SellingPartnerApi\Model\FinancesV0\SAFETReimbursementItem[]|null
     */
    public function getSafetReimbursementItemList()
    {
        return $this->container['safet_reimbursement_item_list'];
    }

    /**
     * Sets safet_reimbursement_item_list
     *
     * @param \SellingPartnerApi\Model\FinancesV0\SAFETReimbursementItem[]|null $safet_reimbursement_item_list A list of SAFETReimbursementItems.
     *
     * @return self
     */
    public function setSafetReimbursementItemList($safet_reimbursement_item_list)
    {
        $this->container['safet_reimbursement_item_list'] = $safet_reimbursement_item_list;

        return $this;
    }
}


