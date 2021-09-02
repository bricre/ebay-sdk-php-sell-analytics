<?php

namespace Ebay\Sell\Analytics\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This complex type defines a the customer service metrics and seller benchmark
 * performance related to a given dimension.
 */
class DimensionMetric extends AbstractModel
{
    /**
     * This type defines the &quot;dimension,&quot; or attributes, against which the
     * associated customer service metric values and benchmark ratings are based. The
     * dimensionKey value is set according to the customer_service_metric_type request
     * parameter and the values in the associated name/value pairs relate to the
     * dimensionKey that's being used to calculate the benchmark rating.
     *
     * @var \Ebay\Sell\Analytics\Model\Dimension
     */
    public $dimension = null;

    /**
     * This is a list of Metric elements where each element contains data and
     * information related to the transactions grouped by the associated dimension.
     *
     * @var \Ebay\Sell\Analytics\Model\Metric[]
     */
    public $metrics = null;
}
