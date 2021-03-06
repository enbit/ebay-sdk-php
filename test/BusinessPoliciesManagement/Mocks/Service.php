<?php
namespace Enbit\eBaySDK\Test\BusinessPoliciesManagement\Mocks;

use Enbit\eBaySDK\Test\Mocks\ComplexClass;

class Service extends \Enbit\eBaySDK\BusinessPoliciesManagement\Services\BusinessPoliciesManagementBaseService
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
