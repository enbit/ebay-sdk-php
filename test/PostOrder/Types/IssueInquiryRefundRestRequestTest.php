<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Enbit\eBaySDK\Test\PostOrder\Types;

use Enbit\eBaySDK\PostOrder\Types\IssueInquiryRefundRestRequest;

class IssueInquiryRefundRestRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new IssueInquiryRefundRestRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\Enbit\eBaySDK\PostOrder\Types\IssueInquiryRefundRestRequest', $this->obj);
    }

    public function testExtendsInquiryVoluntaryRefundRequest()
    {
        $this->assertInstanceOf('\Enbit\eBaySDK\PostOrder\Types\InquiryVoluntaryRefundRequest', $this->obj);
    }
}
