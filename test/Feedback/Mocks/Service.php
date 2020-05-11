<?php
namespace Enbit\eBaySDK\Test\Feedback\Mocks;

use Enbit\eBaySDK\Test\Mocks\ComplexClass;

class Service extends \Enbit\eBaySDK\Feedback\Services\FeedbackBaseService
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
