<?php
namespace Enbit\eBaySDK\Test\Feed\Mocks;

use Enbit\eBaySDK\Test\Mocks\ComplexClass;

class Service extends \Enbit\eBaySDK\Feed\Services\FeedBaseService
{
    protected static $operations = [
        'testOperation' => [
            'method' => 'GET',
            'resource' => 'item/{item_id}',
            'responseClass' => '\Enbit\eBaySDK\Test\Mocks\ComplexClass',
            'params' => [
            ]
        ]
    ];

    public function __construct(array $config)
    {
        parent::__construct($config);
    }

    public function testOperation()
    {
        return $this->callOperationAsync('testOperation', new ComplexClass())->wait();
    }
}
