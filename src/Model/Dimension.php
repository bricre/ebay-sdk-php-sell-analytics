<?php

namespace Ebay\Sell\Analytics\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The fields in this complex type define the dimension, or attributes, by which
 * the associated customer service metric and benchmark data is measured. The value
 * of dimensionKey gets set according to the configuration of the input request.
 * The name and value pair further define dimension under the key.
 */
class Dimension extends AbstractModel
{
    /**
     * dimensionKey defines the basis against which the seller's customer service
     * metric is measured. The value of this field gets set according to the value of
     * the customer_service_metric_type input parameter. The following input
     * configurations return the responses shown: ITEM_NOT_AS_DESCRIBED &ndash; Returns
     * benchmark ratings based on L1 listing categories, so the result shows metrics
     * where the dimensionKey is set to LISTING_CATEGORY. ITEM_NOT_RECEIVED &ndash;
     * Returns benchmark ratings based on world shipping regions, so the result shows
     * metrics where the dimensionKey is set to SHIPPING_REGION. The shipping region is
     * indicated by the associated value field. For specifics on world shipping
     * regions, see the FAQ section on the following page: Monitor your service metrics
     * For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/analytics/types/api:DimensionTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $dimensionKey = null;

    /**
     * The dimension name returned in this field depends on the dimensionKey: If
     * dimensionKey is set to SHIPPING_REGION, this field is set to one of following
     * values, which represent established shipping corridors: Domestic International:
     * Mature region International: Emerging region If dimensionKey is set to
     * LISTING_CATEGORY, this field is set to the name of the primary (L1) category in
     * which the items being rated were listed.
     *
     * @var string
     */
    public $name = null;

    /**
     * The value returned in this field depends on the dimensionKey. If dimensionKey
     * equals LISTING_CATEGORY, the value returned in this field is the category ID of
     * the primary (L1) category in which the items being rated were listed. If
     * dimensionKey equals SHIPPING_REGION, one of the following values is returned:
     * DOMESTIC INTERNATIONAL_MATURED_REGION INTERNATIONAL_EMERGING_REGION.
     *
     * @var string
     */
    public $value = null;
}
