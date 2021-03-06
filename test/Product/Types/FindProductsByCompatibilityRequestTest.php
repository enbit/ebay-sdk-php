<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Enbit\eBaySDK\Test\Product\Types;

use Enbit\eBaySDK\Product\Types\FindProductsByCompatibilityRequest;

class FindProductsByCompatibilityRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new FindProductsByCompatibilityRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\Enbit\eBaySDK\Product\Types\FindProductsByCompatibilityRequest', $this->obj);
    }

    public function testExtendsBaseServiceRequest()
    {
        $this->assertInstanceOf('\Enbit\eBaySDK\Product\Types\BaseServiceRequest', $this->obj);
    }
}
