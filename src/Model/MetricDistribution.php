<?php

namespace Ebay\Sell\Analytics\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This complex data type describes the metric distribution by basis.
 */
class MetricDistribution extends AbstractModel
{
    /**
     * This field returns the basis, or the method, by which the metric rating is
     * calculated.
     *
     * @var string
     */
    public $basis = null;

    /**
     * This field returns a list of name/value pairs, where the name indicates the
     * distribution being rated and the value indicates the count of seller
     * transactions that meet the distribution criteria.
     *
     * @var \Ebay\Sell\Analytics\Model\Distribution[]
     */
    public $data = null;
}
