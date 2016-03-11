<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Finding\Types;

/**
 *
 * @property string $keywords
 * @property \DTS\eBaySDK\Finding\Types\ItemFilter[] $itemFilter
 * @property \DTS\eBaySDK\Finding\Types\AspectFilter[] $aspectFilter
 * @property \DTS\eBaySDK\Finding\Enums\OutputSelectorType[] $outputSelector
 */
class FindItemsByKeywordsRequest extends \DTS\eBaySDK\Finding\Types\BaseFindingServiceRequest
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'keywords' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'keywords'
        ],
        'itemFilter' => [
            'type' => 'DTS\eBaySDK\Finding\Types\ItemFilter',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'itemFilter'
        ],
        'aspectFilter' => [
            'type' => 'DTS\eBaySDK\Finding\Types\AspectFilter',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'aspectFilter'
        ],
        'outputSelector' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'outputSelector'
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/search/v1/services"';
        }

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'findItemsByKeywordsRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}