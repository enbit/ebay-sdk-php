<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Enbit\eBaySDK\Test\BusinessPoliciesManagement\Types;

use Enbit\eBaySDK\BusinessPoliciesManagement\Types\GetConsolidationJobStatusRequest;

class GetConsolidationJobStatusRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetConsolidationJobStatusRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\Enbit\eBaySDK\BusinessPoliciesManagement\Types\GetConsolidationJobStatusRequest', $this->obj);
    }

    public function testExtendsBaseRequest()
    {
        $this->assertInstanceOf('\Enbit\eBaySDK\BusinessPoliciesManagement\Types\BaseRequest', $this->obj);
    }
}
