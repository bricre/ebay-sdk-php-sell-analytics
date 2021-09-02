<?php

namespace Ebay\Sell\Analytics\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A complex type that defines the data records returned in the report.
 */
class MetadataRecord extends AbstractModel
{
    /**
     * A list of data in a row returned in the traffic report. The data in each of the
     * cells match the labels in headers of the report.
     *
     * @var \Ebay\Sell\Analytics\Model\Value[]
     */
    public $metadataValues = null;

    /**
     * The value of the key on which the report is based. For example, if the key is
     * the listing ID, the value of this container could be: &quot;value&quot;: {
     * &nbsp;&nbsp;&quot;value&quot;: &quot;142133954229&quot;,
     * &nbsp;&nbsp;&quot;applicable&quot;: true }.
     *
     * @var \Ebay\Sell\Analytics\Model\Value
     */
    public $value = null;
}
