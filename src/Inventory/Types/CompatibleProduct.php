<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Enbit\eBaySDK\Inventory\Types;

/**
 *
 * @property string $notes
 * @property \Enbit\eBaySDK\Inventory\Types\ProductFamilyProperties $productFamilyProperties
 * @property \Enbit\eBaySDK\Inventory\Types\ProductIdentifier $productIdentifier
 */
class CompatibleProduct extends \Enbit\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'notes' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'notes'
        ],
        'productFamilyProperties' => [
            'type' => 'Enbit\eBaySDK\Inventory\Types\ProductFamilyProperties',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'productFamilyProperties'
        ],
        'productIdentifier' => [
            'type' => 'Enbit\eBaySDK\Inventory\Types\ProductIdentifier',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'productIdentifier'
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

        $this->setValues(__CLASS__, $childValues);
    }
}
