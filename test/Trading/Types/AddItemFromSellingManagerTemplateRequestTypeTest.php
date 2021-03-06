<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Enbit\eBaySDK\Test\Trading\Types;

use Enbit\eBaySDK\Trading\Types\AddItemFromSellingManagerTemplateRequestType;

class AddItemFromSellingManagerTemplateRequestTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new AddItemFromSellingManagerTemplateRequestType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\Enbit\eBaySDK\Trading\Types\AddItemFromSellingManagerTemplateRequestType', $this->obj);
    }

    public function testExtendsAbstractRequestType()
    {
        $this->assertInstanceOf('\Enbit\eBaySDK\Trading\Types\AbstractRequestType', $this->obj);
    }
}
