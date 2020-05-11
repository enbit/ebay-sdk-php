<?php
namespace Enbit\eBaySDK\Test\Mocks;

class Service extends \Enbit\eBaySDK\Test\Mocks\BaseService
{
    public function __construct(array $config)
    {
        parent::__construct(
            $config + [
                'credentials' => [
                    'appId' => '',
                    'certId' => '',
                    'devId' => ''
                ]
            ]
        );
    }

    public function foo(\Enbit\eBaySDK\Test\Mocks\ComplexClass $request)
    {
        return $this->callOperationAsync(
            'foo',
            $request,
            '\Enbit\eBaySDK\Test\Mocks\ComplexClass'
        )->wait();
    }

    public function bar(\Enbit\eBaySDK\Test\Mocks\ComplexClass $request)
    {
        return $this->callOperationAsync(
            'foo',
            $request,
            '\Enbit\eBaySDK\Test\Mocks\ComplexClass'
        )->wait();
    }
}
