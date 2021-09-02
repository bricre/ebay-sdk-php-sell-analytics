<?php

namespace Ebay\Sell\Analytics\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A complex type that contains a value, plus the veracity of that value.
 */
class Value extends AbstractModel
{
    /**
     * If set to true, this flag indicates the value in the value field is valid as
     * computed. A value of false indicates one or more of the values used to calculate
     * the value was invalid. The occurrence of this is a rare, however consider this
     * case: suppose a buyer navigates to a View Item page at 11:59 pm (the end of the
     * day) and purchases the item at 12:05am the next day. In this case, the item
     * would have been purchased with 0 views for the day.
     *
     * @var bool
     */
    public $applicable = null;

    /**
     * The value of the report data.
     *
     * @var object
     */
    public $value = null;
}
