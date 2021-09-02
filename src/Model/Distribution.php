<?php

namespace Ebay\Sell\Analytics\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This complex type defines of a piece of data that is grouped by the associated
 * basis. It contains the name for the data set and its associated value.
 */
class Distribution extends AbstractModel
{
    /**
     * The name of a distribution in which the seller is active.
     *
     * @var string
     */
    public $name = null;

    /**
     * This field contains the number of transactions the seller had in the
     * distribution (identified by the associated name field) during the metric
     * evaluationCycle.
     *
     * @var string
     */
    public $value = null;
}
