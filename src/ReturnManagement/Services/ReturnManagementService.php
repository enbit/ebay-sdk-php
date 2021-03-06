<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace Enbit\eBaySDK\ReturnManagement\Services;

class ReturnManagementService extends \Enbit\eBaySDK\ReturnManagement\Services\ReturnManagementBaseService
{
    const API_VERSION = '1.1.0';

    /**
     * @param array $config Configuration option values.
     */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    /**
     * @param \Enbit\eBaySDK\ReturnManagement\Types\GetVersionRequest $request
     * @return \Enbit\eBaySDK\ReturnManagement\Types\GetVersionResponse
     */
    public function getVersion(\Enbit\eBaySDK\ReturnManagement\Types\GetVersionRequest $request)
    {
        return $this->getVersionAsync($request)->wait();
    }

    /**
     * @param \Enbit\eBaySDK\ReturnManagement\Types\GetVersionRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getVersionAsync(\Enbit\eBaySDK\ReturnManagement\Types\GetVersionRequest $request)
    {
        return $this->callOperationAsync(
            'getVersion',
            $request,
            '\Enbit\eBaySDK\ReturnManagement\Types\GetVersionResponse'
        );
    }

    /**
     * @param \Enbit\eBaySDK\ReturnManagement\Types\GetUserReturnsRequest $request
     * @return \Enbit\eBaySDK\ReturnManagement\Types\GetUserReturnsResponse
     */
    public function getUserReturns(\Enbit\eBaySDK\ReturnManagement\Types\GetUserReturnsRequest $request)
    {
        return $this->getUserReturnsAsync($request)->wait();
    }

    /**
     * @param \Enbit\eBaySDK\ReturnManagement\Types\GetUserReturnsRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getUserReturnsAsync(\Enbit\eBaySDK\ReturnManagement\Types\GetUserReturnsRequest $request)
    {
        return $this->callOperationAsync(
            'getUserReturns',
            $request,
            '\Enbit\eBaySDK\ReturnManagement\Types\GetUserReturnsResponse'
        );
    }

    /**
     * @param \Enbit\eBaySDK\ReturnManagement\Types\GetReturnDetailRequest $request
     * @return \Enbit\eBaySDK\ReturnManagement\Types\GetReturnDetailResponse
     */
    public function getReturnDetail(\Enbit\eBaySDK\ReturnManagement\Types\GetReturnDetailRequest $request)
    {
        return $this->getReturnDetailAsync($request)->wait();
    }

    /**
     * @param \Enbit\eBaySDK\ReturnManagement\Types\GetReturnDetailRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getReturnDetailAsync(\Enbit\eBaySDK\ReturnManagement\Types\GetReturnDetailRequest $request)
    {
        return $this->callOperationAsync(
            'getReturnDetail',
            $request,
            '\Enbit\eBaySDK\ReturnManagement\Types\GetReturnDetailResponse'
        );
    }

    /**
     * @param \Enbit\eBaySDK\ReturnManagement\Types\GetActivityOptionsRequest $request
     * @return \Enbit\eBaySDK\ReturnManagement\Types\GetActivityOptionsResponse
     */
    public function getActivityOptions(\Enbit\eBaySDK\ReturnManagement\Types\GetActivityOptionsRequest $request)
    {
        return $this->getActivityOptionsAsync($request)->wait();
    }

    /**
     * @param \Enbit\eBaySDK\ReturnManagement\Types\GetActivityOptionsRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getActivityOptionsAsync(\Enbit\eBaySDK\ReturnManagement\Types\GetActivityOptionsRequest $request)
    {
        return $this->callOperationAsync(
            'getActivityOptions',
            $request,
            '\Enbit\eBaySDK\ReturnManagement\Types\GetActivityOptionsResponse'
        );
    }

    /**
     * @param \Enbit\eBaySDK\ReturnManagement\Types\IssueRefundRequest $request
     * @return \Enbit\eBaySDK\ReturnManagement\Types\IssueRefundResponse
     */
    public function issueRefund(\Enbit\eBaySDK\ReturnManagement\Types\IssueRefundRequest $request)
    {
        return $this->issueRefundAsync($request)->wait();
    }

    /**
     * @param \Enbit\eBaySDK\ReturnManagement\Types\IssueRefundRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function issueRefundAsync(\Enbit\eBaySDK\ReturnManagement\Types\IssueRefundRequest $request)
    {
        return $this->callOperationAsync(
            'issueRefund',
            $request,
            '\Enbit\eBaySDK\ReturnManagement\Types\IssueRefundResponse'
        );
    }

    /**
     * @param \Enbit\eBaySDK\ReturnManagement\Types\ProvideSellerInfoRequest $request
     * @return \Enbit\eBaySDK\ReturnManagement\Types\ProvideSellerInfoResponse
     */
    public function provideSellerInfo(\Enbit\eBaySDK\ReturnManagement\Types\ProvideSellerInfoRequest $request)
    {
        return $this->provideSellerInfoAsync($request)->wait();
    }

    /**
     * @param \Enbit\eBaySDK\ReturnManagement\Types\ProvideSellerInfoRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function provideSellerInfoAsync(\Enbit\eBaySDK\ReturnManagement\Types\ProvideSellerInfoRequest $request)
    {
        return $this->callOperationAsync(
            'provideSellerInfo',
            $request,
            '\Enbit\eBaySDK\ReturnManagement\Types\ProvideSellerInfoResponse'
        );
    }

    /**
     * @param \Enbit\eBaySDK\ReturnManagement\Types\GetReturnMetadataRequest $request
     * @return \Enbit\eBaySDK\ReturnManagement\Types\GetReturnMetadataResponse
     */
    public function getReturnMetadata(\Enbit\eBaySDK\ReturnManagement\Types\GetReturnMetadataRequest $request)
    {
        return $this->getReturnMetadataAsync($request)->wait();
    }

    /**
     * @param \Enbit\eBaySDK\ReturnManagement\Types\GetReturnMetadataRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getReturnMetadataAsync(\Enbit\eBaySDK\ReturnManagement\Types\GetReturnMetadataRequest $request)
    {
        return $this->callOperationAsync(
            'getReturnMetadata',
            $request,
            '\Enbit\eBaySDK\ReturnManagement\Types\GetReturnMetadataResponse'
        );
    }

    /**
     * @param \Enbit\eBaySDK\ReturnManagement\Types\ProvideTrackingInfoRequest $request
     * @return \Enbit\eBaySDK\ReturnManagement\Types\ProvideTrackingInfoResponse
     */
    public function provideTrackingInfo(\Enbit\eBaySDK\ReturnManagement\Types\ProvideTrackingInfoRequest $request)
    {
        return $this->provideTrackingInfoAsync($request)->wait();
    }

    /**
     * @param \Enbit\eBaySDK\ReturnManagement\Types\ProvideTrackingInfoRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function provideTrackingInfoAsync(\Enbit\eBaySDK\ReturnManagement\Types\ProvideTrackingInfoRequest $request)
    {
        return $this->callOperationAsync(
            'provideTrackingInfo',
            $request,
            '\Enbit\eBaySDK\ReturnManagement\Types\ProvideTrackingInfoResponse'
        );
    }

    /**
     * @param \Enbit\eBaySDK\ReturnManagement\Types\SetItemAsReceivedRequest $request
     * @return \Enbit\eBaySDK\ReturnManagement\Types\SetItemAsReceivedResponse
     */
    public function setItemAsReceived(\Enbit\eBaySDK\ReturnManagement\Types\SetItemAsReceivedRequest $request)
    {
        return $this->setItemAsReceivedAsync($request)->wait();
    }

    /**
     * @param \Enbit\eBaySDK\ReturnManagement\Types\SetItemAsReceivedRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function setItemAsReceivedAsync(\Enbit\eBaySDK\ReturnManagement\Types\SetItemAsReceivedRequest $request)
    {
        return $this->callOperationAsync(
            'setItemAsReceived',
            $request,
            '\Enbit\eBaySDK\ReturnManagement\Types\SetItemAsReceivedResponse'
        );
    }
}
