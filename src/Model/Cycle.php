<?php

namespace Ebay\Sell\Analytics\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A complex type that describes a program cycle.
 */
class Cycle extends AbstractModel
{
    /**
     * The cycle type, either CURRENT or PROJECTED. CURRENT means the profile's metrics
     * values are from the most recent official eBay monthly standards evaluation.
     * PROJECTED means the profile values were determined when the profile was
     * requested. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/analytics/types/ssp:CycleTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $cycleType = null;

    /**
     * The date and time at which the standard compliance values were determined for
     * the profile. The time stamp is formatted as an ISO 8601 string, which is based
     * on the 24-hour Universal Coordinated Time (UTC) clock. Format:
     * [YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z Example: 2018-08-04T07:09:00.000Z.
     *
     * @var string
     */
    public $evaluationDate = null;

    /**
     * The month in which the currently effective seller level was computed. The value
     * is always formatted as YYYY-MM. If the cycle is CURRENT, this value is the month
     * and year the of the last eBay compliance evaluation. If this is for a PROJECTED
     * cycle, the value is the month and year of the next scheduled evaluation. Because
     * eBay does official evaluations around the 20th of each month, a PROJECTED value
     * may indicate either the current or the next month.
     *
     * @var string
     */
    public $evaluationMonth = null;
}
