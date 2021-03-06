<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Enbit\eBaySDK\Test\MerchantData\Types;

use Enbit\eBaySDK\MerchantData\Types\CharacteristicType;

class CharacteristicTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new CharacteristicType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\Enbit\eBaySDK\MerchantData\Types\CharacteristicType', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\Enbit\eBaySDK\Types\BaseType', $this->obj);
    }
}
