# EBAY-SDK-PHP

This project build on [davidtsadler/ebay-sdk-php](https://github.com/davidtsadler/ebay-sdk-php) .Because the original project is dead,so I create this new project.This project is not compatible with original project.Original Readme file is renamed to README_origin.md

## What is different with the original project

   - Support eBay Notifications
   - Trading API Enum Types Extends php-enum, You can use Enum types more convenient
   - Trading API upgrade to version 1131
## Requirements   
   - PHP 7.1 or greater with the following extensions:
      - cURL
      - libxml 
   - 64 bit version of PHP recommended as there are some [issues when using the SDK with 32 bit](http://devbay.net/sdk/guides/getting-started/requirements.html#using-the-sdk-with-32-bit-systems).
   - SSL enabled on the cURL extension so that https requests can be made.
## Installation
The SDK can be installed with [Composer](http://getcomposer.org/).   


  1. Add below code to your project composer.json

     ```
     {
            "name": "fshchh/ebay-sdk-php",
            "repositories": [
                {
                    "type": "vcs",
                    "url": "https://github.com/fshchh/ebay-sdk-php"
                }
            ],
            "require": {
                "fshchh/ebay-sdk-php": "dev"
            }
     }
     ```

  1. Install the SDK.

     ```
     composer install
     ```
##  Work with eBay notification
```php
<?php

require 'vendor/autoload.php';

use \Enbit\eBaySDK\Notification\Notification;

//the value of this var is the notification string received from ebay.Parts are omitted here
$notification = '<?xml version="1.0" encoding="UTF-8"?> ... </soapenv:Envelope>';
// Create the service object.
$notificationService = new Notification($notification);

// Get notification event name.
$eventName = $notificationService->getNotificationEventName();

// Get the response of the notification corresponding.Then you can deal the response like received from request
$response = $notificationService->getResponse();

```

## Others
Please read the README_origin.md file.

## License
Licensed under the [Apache Public License 2.0](http://www.apache.org/licenses/LICENSE-2.0.html).

Copyright 2019 fshchh