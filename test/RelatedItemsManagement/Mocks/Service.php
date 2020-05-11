<?php
namespace Enbit\eBaySDK\Test\RelatedItemsManagement\Mocks;

use Enbit\eBaySDK\Test\Mocks\ComplexClass;

class Service extends \Enbit\eBaySDK\RelatedItemsManagement\Services\RelatedItemsManagementBaseService
{
    public function __construct(array $config)
    {
        parent::__construct($config);
    }

    public function testOperation()
    {
        return $this->callOperationAsync(
            'testOperation',
            new ComplexClass(),
            '\Enbit\eBaySDK\Test\Mocks\ComplexClass'
        )->wait();
    }
}
