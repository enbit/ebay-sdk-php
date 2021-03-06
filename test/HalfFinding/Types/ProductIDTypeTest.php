<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Enbit\eBaySDK\Test\HalfFinding\Types;

use Enbit\eBaySDK\HalfFinding\Types\ProductIDType;

class ProductIDTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ProductIDType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\Enbit\eBaySDK\HalfFinding\Types\ProductIDType', $this->obj);
    }

    public function testExtendsStringType()
    {
        $this->assertInstanceOf('\Enbit\eBaySDK\Types\StringType', $this->obj);
    }
}
