<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Trading\Types;

/**
 *
 * @property string $AddressLine1
 * @property string $AddressLine2
 * @property string $City
 * @property string $State
 * @property string $ZipCode
 * @property integer $Latitude
 * @property integer $Longitude
 * @property \DTS\eBaySDK\Trading\Enums\AddressTypeCodeType $AddressType
 */
class NonProfitAddressType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'AddressLine1' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AddressLine1'
        ],
        'AddressLine2' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AddressLine2'
        ],
        'City' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'City'
        ],
        'State' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'State'
        ],
        'ZipCode' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ZipCode'
        ],
        'Latitude' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Latitude'
        ],
        'Longitude' => [
            'type' => 'integer',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'Longitude'
        ],
        'AddressType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'AddressType'
        ]
    ];

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = [])
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}