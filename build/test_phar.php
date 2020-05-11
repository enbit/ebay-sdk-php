<?php
require __DIR__ . '/artifacts/ebay-sdk-php.phar';

$sdk = new \Enbit\eBaySDK\Sdk();

$trading = new \Enbit\eBaySDK\Trading\Services\TradingService([
    'siteId'      => 0,
    'credentials' => [
        'appId'  => 'secret',
        'certId' => 'secret',
        'devId'  => 'secret'
    ]
]);

echo 'Version=' . \Enbit\eBaySDK\Sdk::VERSION;
