<?php

namespace Ebay\Sell\Analytics\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This complex type defines the benchmark data, which includes the average value
 * of the metric for the group (the benchmark) and the seller's overall rating when
 * compared to the benchmark.
 */
class MetricBenchmark extends AbstractModel
{
    /**
     * If this field is present, it indicates that the rating given to the seller was
     * &quot;adjusted&quot; for one reason or another. If eBay determines that the
     * normal rating of a seller is impacted by circumstances beyond their control,
     * they can issue an override to adjust the rating given to the seller. For
     * implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/analytics/types/api:RatingAdjustmentTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $adjustment = null;

    /**
     * This field returns the &quot;basis&quot; by which the benchmark is calculated
     * for the customer service metric type. Currently, the only supported basis is
     * PEER_BENCHMARK. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/analytics/types/api:BenchmarkTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $basis = null;

    /**
     * This field contains the benchmark data.
     *
     * @var \Ebay\Sell\Analytics\Model\BenchmarkMetadata
     */
    public $metadata = null;

    /**
     * This field returns seller's rating for the customer service metric. The rating
     * is set to a value that equals the relative deviation between the seller's metric
     * value and the benchmark value for the customer service metric. Deviation values
     * range from LOW to VERY HIGH, and the lower the deviation, the better the seller
     * rating. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/analytics/types/api:RatingTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $rating = null;
}
