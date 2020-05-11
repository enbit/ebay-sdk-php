<?php
namespace Enbit\eBaySDK\Test\Trading\Mocks;

use Enbit\eBaySDK\Trading\Types\GeteBayOfficialTimeRequestType;

class Service extends \Enbit\eBaySDK\Trading\Services\TradingBaseService
{
    public function __construct(array $config)
    {
        parent::__construct($config);
    }

    public function testOperation()
    {
        return $this->callOperationAsync(
            'testOperation',
            new GeteBayOfficialTimeRequestType(),
            '\Enbit\eBaySDK\Test\Mocks\ComplexClass'
        )->wait();
    }
}
