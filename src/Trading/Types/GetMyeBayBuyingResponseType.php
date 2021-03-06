<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Enbit\eBaySDK\Trading\Types;

/**
 *
 * @property \Enbit\eBaySDK\Trading\Types\BuyingSummaryType $BuyingSummary
 * @property \Enbit\eBaySDK\Trading\Types\PaginatedItemArrayType $WatchList
 * @property \Enbit\eBaySDK\Trading\Types\PaginatedItemArrayType $BidList
 * @property \Enbit\eBaySDK\Trading\Types\PaginatedItemArrayType $BestOfferList
 * @property \Enbit\eBaySDK\Trading\Types\PaginatedOrderTransactionArrayType $WonList
 * @property \Enbit\eBaySDK\Trading\Types\PaginatedItemArrayType $LostList
 * @property \Enbit\eBaySDK\Trading\Types\MyeBayFavoriteSearchListType $FavoriteSearches
 * @property \Enbit\eBaySDK\Trading\Types\MyeBayFavoriteSellerListType $FavoriteSellers
 * @property \Enbit\eBaySDK\Trading\Types\ItemType[] $SecondChanceOffer
 * @property \Enbit\eBaySDK\Trading\Types\PaginatedOrderTransactionArrayType $DeletedFromWonList
 * @property \Enbit\eBaySDK\Trading\Types\PaginatedItemArrayType $DeletedFromLostList
 * @property \Enbit\eBaySDK\Trading\Types\UserDefinedListType[] $UserDefinedList
 */
class GetMyeBayBuyingResponseType extends \Enbit\eBaySDK\Trading\Types\AbstractResponseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'BuyingSummary' => [
            'type' => 'Enbit\eBaySDK\Trading\Types\BuyingSummaryType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BuyingSummary'
        ],
        'WatchList' => [
            'type' => 'Enbit\eBaySDK\Trading\Types\PaginatedItemArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'WatchList'
        ],
        'BidList' => [
            'type' => 'Enbit\eBaySDK\Trading\Types\PaginatedItemArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BidList'
        ],
        'BestOfferList' => [
            'type' => 'Enbit\eBaySDK\Trading\Types\PaginatedItemArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BestOfferList'
        ],
        'WonList' => [
            'type' => 'Enbit\eBaySDK\Trading\Types\PaginatedOrderTransactionArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'WonList'
        ],
        'LostList' => [
            'type' => 'Enbit\eBaySDK\Trading\Types\PaginatedItemArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'LostList'
        ],
        'FavoriteSearches' => [
            'type' => 'Enbit\eBaySDK\Trading\Types\MyeBayFavoriteSearchListType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FavoriteSearches'
        ],
        'FavoriteSellers' => [
            'type' => 'Enbit\eBaySDK\Trading\Types\MyeBayFavoriteSellerListType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'FavoriteSellers'
        ],
        'SecondChanceOffer' => [
            'type' => 'Enbit\eBaySDK\Trading\Types\ItemType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'SecondChanceOffer'
        ],
        'DeletedFromWonList' => [
            'type' => 'Enbit\eBaySDK\Trading\Types\PaginatedOrderTransactionArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DeletedFromWonList'
        ],
        'DeletedFromLostList' => [
            'type' => 'Enbit\eBaySDK\Trading\Types\PaginatedItemArrayType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DeletedFromLostList'
        ],
        'UserDefinedList' => [
            'type' => 'Enbit\eBaySDK\Trading\Types\UserDefinedListType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'UserDefinedList'
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
