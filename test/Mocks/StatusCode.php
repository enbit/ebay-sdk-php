<?php
namespace Enbit\eBaySDK\Test\Mocks;

use Enbit\eBaySDK\StatusCodeTrait;

class StatusCode
{
    use StatusCodeTrait;

    public function __construct($statusCode)
    {
        $this->statusCode = $statusCode;
    }
}
