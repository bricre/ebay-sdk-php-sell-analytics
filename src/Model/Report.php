<?php

namespace Ebay\Sell\Analytics\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The complex type that defines that defines the report.
 */
class Report extends AbstractModel
{
    /**
     * A complex type containing the header of the report and the type of data
     * containted in the rows of the report.
     *
     * @var \Ebay\Sell\Analytics\Model\Metadata[]
     */
    public $dimensionMetadata = null;

    /**
     * The time stamp is formatted as an ISO 8601 string, which is based on the 24-hour
     * Universal Coordinated Time (UTC) clock. If you specify an end date that is
     * beyond the lastUpdatedDate value, eBay returns a report that contains data only
     * up to the lastUpdateDate date. Format: [YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z
     * Example: 2018-08-20T07:09:00.000Z.
     *
     * @var string
     */
    public $endDate = null;

    /**
     * A complex type containing the header for the report.
     *
     * @var \Ebay\Sell\Analytics\Model\Header
     */
    public $header = null;

    /**
     * The date and time, in ISO 8601 format, that indicates the last time the data
     * returned in the report was updated.
     *
     * @var string
     */
    public $lastUpdatedDate = null;

    /**
     * A complex type containing the individual data records for the traffic report.
     *
     * @var \Ebay\Sell\Analytics\Model\Record[]
     */
    public $records = null;

    /**
     * The start date of the date range used to calculate the report, in ISO 8601
     * format.
     *
     * @var string
     */
    public $startDate = null;

    /**
     * An array of any process errors or warnings that were generated during the
     * processing of the call processing.
     *
     * @var \Ebay\Sell\Analytics\Model\Error[]
     */
    public $warnings = null;
}
