<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Enbit\eBaySDK\Test\ResolutionCaseManagement\Types;

use Enbit\eBaySDK\ResolutionCaseManagement\Types\ProvideShippingInfoResponse;

class ProvideShippingInfoResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ProvideShippingInfoResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\Enbit\eBaySDK\ResolutionCaseManagement\Types\ProvideShippingInfoResponse', $this->obj);
    }

    public function testExtendsBaseResponse()
    {
        $this->assertInstanceOf('\Enbit\eBaySDK\ResolutionCaseManagement\Types\BaseResponse', $this->obj);
    }
}
