<?php

namespace Ebay\Sell\Analytics\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * This complex type describes the start and end dates of the of the time period
 * over which the associated benchmark is computed. All timestamps are based on
 * Mountain Standard Time (MST). The timestamp is formatted as an ISO 8601 string,
 * which is based on the 24-hour Coordinated Universal Time (UTC) clock.
 */
class EvaluationCycle extends AbstractModel
{
    /**
     * End date and time of the transaction lookback range. All timestamps are based on
     * Mountain Standard Time (MST). The timestamp is formatted as an ISO 8601 string,
     * which is based on the 24-hour Coordinated Universal Time (UTC) clock.
     *
     * @var string
     */
    public $endDate = null;

    /**
     * The ISO-8601 date and time at which the seller was evaluated for this customer
     * service metric rating.
     *
     * @var string
     */
    public $evaluationDate = null;

    /**
     * This field specifies the transaction lookback period used for the evaluation.
     * The evaluation_type value specified in the request is returned in this field.
     * There are two possible values: CURRENT &ndash; A monthly evaluation that occurs
     * on the 20th of every month. PROJECTED &ndash; A daily evaluation that provides a
     * projection of how the seller is currently performing with regards to the
     * upcoming evaluation period. For implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/sell/analytics/types/api:EvaluationTypeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $evaluationType = null;

    /**
     * The start date and time of the transaction lookback range. All timestamps are
     * based on Mountain Standard Time (MST). The timestamp is formatted as an ISO 8601
     * string, which is based on the 24-hour Coordinated Universal Time (UTC) clock.
     * Format: [YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z Example: 2018-08-04T07:09:00.000Z.
     *
     * @var string
     */
    public $startDate = null;
}
