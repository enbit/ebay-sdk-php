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

use Enbit\eBaySDK\MerchantData\Types\ReviseItemRequestType;

class ReviseItemRequestTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ReviseItemRequestType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\Enbit\eBaySDK\MerchantData\Types\ReviseItemRequestType', $this->obj);
    }

    public function testExtendsAbstractRequestType()
    {
        $this->assertInstanceOf('\Enbit\eBaySDK\MerchantData\Types\AbstractRequestType', $this->obj);
    }
}
