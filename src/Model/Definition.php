<?php

namespace Ebay\Sell\Analytics\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A complex type that defines a dimension key and metrics in a traffic report.
 */
class Definition extends AbstractModel
{
    /**
     * Indicates the data type of the returned dimension. For example, if the dimension
     * is day, the data type is DATE. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/analytics/types/ssp:DataTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $dataType = null;

    /**
     * The value the dimension or metric parameter as submitted in the request.
     *
     * @var string
     */
    public $key = null;

    /**
     * The localized name of the metric or dimension (translated into the language
     * specified in the Accept-Language HTTP request header). For example, if
     * Accept-Language is set to de-DE, the value &quot;day&quot; in the dimension
     * container is returned as &quot;tag&quot;, and a metric of TRANSACTION is
     * returned as &quot;Transaktionsanzahl&quot;.
     *
     * @var string
     */
    public $localizedName = null;
}
