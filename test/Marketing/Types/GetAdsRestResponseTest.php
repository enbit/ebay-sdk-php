<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Enbit\eBaySDK\Test\Marketing\Types;

use Enbit\eBaySDK\Marketing\Types\GetAdsRestResponse;

class GetAdsRestResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetAdsRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\Enbit\eBaySDK\Marketing\Types\GetAdsRestResponse', $this->obj);
    }

    public function testExtendsAdPagedCollection()
    {
        $this->assertInstanceOf('\Enbit\eBaySDK\Marketing\Types\AdPagedCollection', $this->obj);
    }
}
