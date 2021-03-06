<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/common/extensions.proto

namespace Google\Ads\GoogleAds\V3\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents an App extension.
 *
 * Generated from protobuf message <code>google.ads.googleads.v3.common.AppFeedItem</code>
 */
class AppFeedItem extends \Google\Protobuf\Internal\Message
{
    /**
     * The visible text displayed when the link is rendered in an ad.
     * This string must not be empty, and the length of this string should
     * be between 1 and 25, inclusive.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue link_text = 1;</code>
     */
    protected $link_text = null;
    /**
     * The store-specific ID for the target application.
     * This string must not be empty.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue app_id = 2;</code>
     */
    protected $app_id = null;
    /**
     * The application store that the target application belongs to.
     * This field is required.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.AppStoreEnum.AppStore app_store = 3;</code>
     */
    protected $app_store = 0;
    /**
     * A list of possible final URLs after all cross domain redirects.
     * This list must not be empty.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue final_urls = 4;</code>
     */
    private $final_urls;
    /**
     * A list of possible final mobile URLs after all cross domain redirects.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue final_mobile_urls = 5;</code>
     */
    private $final_mobile_urls;
    /**
     * URL template for constructing a tracking URL. Default value is "{lpurl}".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue tracking_url_template = 6;</code>
     */
    protected $tracking_url_template = null;
    /**
     * A list of mappings to be used for substituting URL custom parameter tags in
     * the tracking_url_template, final_urls, and/or final_mobile_urls.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v3.common.CustomParameter url_custom_parameters = 7;</code>
     */
    private $url_custom_parameters;
    /**
     * URL template for appending params to landing page URLs served with parallel
     * tracking.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue final_url_suffix = 8;</code>
     */
    protected $final_url_suffix = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $link_text
     *           The visible text displayed when the link is rendered in an ad.
     *           This string must not be empty, and the length of this string should
     *           be between 1 and 25, inclusive.
     *     @type \Google\Protobuf\StringValue $app_id
     *           The store-specific ID for the target application.
     *           This string must not be empty.
     *     @type int $app_store
     *           The application store that the target application belongs to.
     *           This field is required.
     *     @type \Google\Protobuf\StringValue[]|\Google\Protobuf\Internal\RepeatedField $final_urls
     *           A list of possible final URLs after all cross domain redirects.
     *           This list must not be empty.
     *     @type \Google\Protobuf\StringValue[]|\Google\Protobuf\Internal\RepeatedField $final_mobile_urls
     *           A list of possible final mobile URLs after all cross domain redirects.
     *     @type \Google\Protobuf\StringValue $tracking_url_template
     *           URL template for constructing a tracking URL. Default value is "{lpurl}".
     *     @type \Google\Ads\GoogleAds\V3\Common\CustomParameter[]|\Google\Protobuf\Internal\RepeatedField $url_custom_parameters
     *           A list of mappings to be used for substituting URL custom parameter tags in
     *           the tracking_url_template, final_urls, and/or final_mobile_urls.
     *     @type \Google\Protobuf\StringValue $final_url_suffix
     *           URL template for appending params to landing page URLs served with parallel
     *           tracking.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V3\Common\Extensions::initOnce();
        parent::__construct($data);
    }

    /**
     * The visible text displayed when the link is rendered in an ad.
     * This string must not be empty, and the length of this string should
     * be between 1 and 25, inclusive.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue link_text = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getLinkText()
    {
        return $this->link_text;
    }

    /**
     * Returns the unboxed value from <code>getLinkText()</code>

     * The visible text displayed when the link is rendered in an ad.
     * This string must not be empty, and the length of this string should
     * be between 1 and 25, inclusive.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue link_text = 1;</code>
     * @return string|null
     */
    public function getLinkTextUnwrapped()
    {
        return $this->readWrapperValue("link_text");
    }

    /**
     * The visible text displayed when the link is rendered in an ad.
     * This string must not be empty, and the length of this string should
     * be between 1 and 25, inclusive.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue link_text = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setLinkText($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->link_text = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The visible text displayed when the link is rendered in an ad.
     * This string must not be empty, and the length of this string should
     * be between 1 and 25, inclusive.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue link_text = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setLinkTextUnwrapped($var)
    {
        $this->writeWrapperValue("link_text", $var);
        return $this;}

    /**
     * The store-specific ID for the target application.
     * This string must not be empty.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue app_id = 2;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getAppId()
    {
        return $this->app_id;
    }

    /**
     * Returns the unboxed value from <code>getAppId()</code>

     * The store-specific ID for the target application.
     * This string must not be empty.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue app_id = 2;</code>
     * @return string|null
     */
    public function getAppIdUnwrapped()
    {
        return $this->readWrapperValue("app_id");
    }

    /**
     * The store-specific ID for the target application.
     * This string must not be empty.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue app_id = 2;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setAppId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->app_id = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The store-specific ID for the target application.
     * This string must not be empty.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue app_id = 2;</code>
     * @param string|null $var
     * @return $this
     */
    public function setAppIdUnwrapped($var)
    {
        $this->writeWrapperValue("app_id", $var);
        return $this;}

    /**
     * The application store that the target application belongs to.
     * This field is required.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.AppStoreEnum.AppStore app_store = 3;</code>
     * @return int
     */
    public function getAppStore()
    {
        return $this->app_store;
    }

    /**
     * The application store that the target application belongs to.
     * This field is required.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.AppStoreEnum.AppStore app_store = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setAppStore($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V3\Enums\AppStoreEnum_AppStore::class);
        $this->app_store = $var;

        return $this;
    }

    /**
     * A list of possible final URLs after all cross domain redirects.
     * This list must not be empty.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue final_urls = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFinalUrls()
    {
        return $this->final_urls;
    }

    /**
     * A list of possible final URLs after all cross domain redirects.
     * This list must not be empty.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue final_urls = 4;</code>
     * @param \Google\Protobuf\StringValue[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFinalUrls($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\StringValue::class);
        $this->final_urls = $arr;

        return $this;
    }

    /**
     * A list of possible final mobile URLs after all cross domain redirects.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue final_mobile_urls = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFinalMobileUrls()
    {
        return $this->final_mobile_urls;
    }

    /**
     * A list of possible final mobile URLs after all cross domain redirects.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue final_mobile_urls = 5;</code>
     * @param \Google\Protobuf\StringValue[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFinalMobileUrls($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\StringValue::class);
        $this->final_mobile_urls = $arr;

        return $this;
    }

    /**
     * URL template for constructing a tracking URL. Default value is "{lpurl}".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue tracking_url_template = 6;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getTrackingUrlTemplate()
    {
        return $this->tracking_url_template;
    }

    /**
     * Returns the unboxed value from <code>getTrackingUrlTemplate()</code>

     * URL template for constructing a tracking URL. Default value is "{lpurl}".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue tracking_url_template = 6;</code>
     * @return string|null
     */
    public function getTrackingUrlTemplateUnwrapped()
    {
        return $this->readWrapperValue("tracking_url_template");
    }

    /**
     * URL template for constructing a tracking URL. Default value is "{lpurl}".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue tracking_url_template = 6;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setTrackingUrlTemplate($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->tracking_url_template = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * URL template for constructing a tracking URL. Default value is "{lpurl}".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue tracking_url_template = 6;</code>
     * @param string|null $var
     * @return $this
     */
    public function setTrackingUrlTemplateUnwrapped($var)
    {
        $this->writeWrapperValue("tracking_url_template", $var);
        return $this;}

    /**
     * A list of mappings to be used for substituting URL custom parameter tags in
     * the tracking_url_template, final_urls, and/or final_mobile_urls.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v3.common.CustomParameter url_custom_parameters = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUrlCustomParameters()
    {
        return $this->url_custom_parameters;
    }

    /**
     * A list of mappings to be used for substituting URL custom parameter tags in
     * the tracking_url_template, final_urls, and/or final_mobile_urls.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v3.common.CustomParameter url_custom_parameters = 7;</code>
     * @param \Google\Ads\GoogleAds\V3\Common\CustomParameter[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUrlCustomParameters($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V3\Common\CustomParameter::class);
        $this->url_custom_parameters = $arr;

        return $this;
    }

    /**
     * URL template for appending params to landing page URLs served with parallel
     * tracking.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue final_url_suffix = 8;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getFinalUrlSuffix()
    {
        return $this->final_url_suffix;
    }

    /**
     * Returns the unboxed value from <code>getFinalUrlSuffix()</code>

     * URL template for appending params to landing page URLs served with parallel
     * tracking.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue final_url_suffix = 8;</code>
     * @return string|null
     */
    public function getFinalUrlSuffixUnwrapped()
    {
        return $this->readWrapperValue("final_url_suffix");
    }

    /**
     * URL template for appending params to landing page URLs served with parallel
     * tracking.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue final_url_suffix = 8;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setFinalUrlSuffix($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->final_url_suffix = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * URL template for appending params to landing page URLs served with parallel
     * tracking.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue final_url_suffix = 8;</code>
     * @param string|null $var
     * @return $this
     */
    public function setFinalUrlSuffixUnwrapped($var)
    {
        $this->writeWrapperValue("final_url_suffix", $var);
        return $this;}

}

