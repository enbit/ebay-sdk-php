<?php
namespace Enbit\eBaySDK\Notification;


use Enbit\eBaySDK\Parser\XmlParser;


/**
 * Class for parsing ebay notification,  you can use this class to get response of trading
 * response types from notification just like receiving response from a request.
 *
 * Notice:You should not use this class in notification receiving and response process,
 * as this class may consume some time and also may throw exceptions
 */
class Notification
{
    /**
     * response xml parse from soap text
     */
    private $xml;

    /**
     * event name of the notification
     */
    private $notificationEventName;

    /**
     * response class of notification corresponding
     */
    private $responseClass;


    /**
     * @param string $soap soap format string received from ebay notification
     */
    public function __construct($soap)
    {
        if (!$this->checkSoap($soap)) {
            throw new \InvalidArgumentException('Incomplete text in soap format');
        }
        $this->soapParser($soap);
    }

    /**
     * Helper method to get notification event name
     */
    public function getNotificationEventName()
    {
        return $this->notificationEventName;
    }

    /**
     * Helper method to get response class of notification corresponding
     */
    public function getResponseClass()
    {
        return $this->responseClass;
    }

    /**
     * Helper method to get response of notification corresponding
     */
    public function getResponse()
    {
        $xmlParser = new XmlParser($this->responseClass);
        $response = $xmlParser->parse($this->xml);
        return $response;
    }

    /**
     * parse soap text to get xml,event name and response class
     *
     * @param string $soap soap format string received from ebay notification
     */
    private function soapParser($soap)
    {
        $xml = [];
        $soapAr = explode("\n",$soap);

        $bodyStart = false;
        $responseTypeFlag = false;

        foreach ($soapAr as $k => $sa) {
            if ($k == 0) {//xml header
                $xml[] = $this->getXmlHeader($sa);
                continue;
            }
            if (strpos($sa,'soapenv:Body') !== false) {
                if ($bodyStart = !$bodyStart) {
                    $responseTypeFlag = true;
                    continue;
                }
                break;
            }
            if ($bodyStart) {
                if ($responseTypeFlag) {
                    $this->parseResponseClass($sa);
                    $responseTypeFlag = false;
                }
                if (strpos($sa,'NotificationEventName') !== false) {
                    $this->parseEventName($sa);
                }
                $xml[] = $sa;
            }
        }
        $this->xml = implode("\n",$xml);
    }

    /**
     * xml header may not exist, set default value
     *
     * @param string $str first string of soap text
     * @return string
     */
    private function getXmlHeader($str)
    {
        return strpos($str,'<?xml') !== false ?
            $str : '<?xml version="1.0" encoding="utf-8"?>';
    }

    /**
     * @param string $str string of soap text which contains response class
     */
    private function parseResponseClass($str)
    {
        preg_match('/^\s*<[A-Za-z]+/',$str,$match);
        $responseType = preg_replace('/^\s*</','',$match[0]??'');
        $this->responseClass = '\\Enbit\\eBaySDK\\Trading\\Types\\'.$responseType.'Type';
    }

    /**
     * @param string $str string of soap text which contains event name
     */
    private function parseEventName($str)
    {
        $eventName = preg_replace(['/^\s*<NotificationEventName>\s*/','/\s*<\/NotificationEventName>\s*$/'],
            '',
            $str);
        $this->notificationEventName = trim($eventName);
    }

    /**
     * check the integrity of the soap text
     * @param string $soap soap text received from notification
     * @return bool
     */
    private function checkSoap($soap)
    {
        return strpos($soap,'</soapenv:Body>') !== false;
    }

}