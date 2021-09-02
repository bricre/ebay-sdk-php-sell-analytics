<?php

namespace Ebay\Sell\Analytics\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This complex data type defines the response data that is returned from a request
 * to getCustomerServiceMetric. The dimensionMetrics object contains the details of
 * the dimension being measured and the calculated customer service metric values.
 * The evaluationCycle defines the period used to calculate the metric values. The
 * marketplaceId is the eBay marketplace for which the metrics are being
 * considered.
 */
class GetCustomerServiceMetricResponse extends AbstractModel
{
    /**
     * This container provides a seller's customer service metric performance for a
     * given dimension. In the getCustomerServiceMetric request, specify values for the
     * following request parameters to control the returned dimension and the
     * associated metric values: customer_service_metric_type evaluation_type
     * evaluation_marketplace_id.
     *
     * @var \Ebay\Sell\Analytics\Model\DimensionMetric[]
     */
    public $dimensionMetrics = null;

    /**
     * This complex type defines the evaluation type (CURRENT or PROJECTED) and the
     * transaction lookback period used to calculate the seller's customer service
     * metric.
     *
     * @var \Ebay\Sell\Analytics\Model\EvaluationCycle
     */
    public $evaluationCycle = null;

    /**
     * The eBay marketplace ID of the marketplace upon which the customer service
     * metric evaluation is based. The customer_service_metric resource supports a
     * limited set of marketplaces. For a complete list of the supported marketplaces,
     * please see the Service metrics policy page. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/analytics/types/bas:MarketplaceIdEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $marketplaceId = null;
}
