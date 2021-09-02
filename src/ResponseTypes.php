<?php

namespace Ebay\Sell\Analytics;

use OpenAPI\Runtime\ResponseTypes as AbstractResponseTypes;

class ResponseTypes extends AbstractResponseTypes
{
    public static $types = [
        'getCustomerServiceMetric' => [
            '200.' => 'Ebay\\Sell\\Analytics\\Model\\GetCustomerServiceMetricResponse',
        ],
        'findSellerStandardsProfiles' => [
            '200.' => 'Ebay\\Sell\\Analytics\\Model\\FindSellerStandardsProfilesResponse',
        ],
        'getSellerStandardsProfile' => [
            '200.' => 'Ebay\\Sell\\Analytics\\Model\\StandardsProfile',
        ],
        'getTrafficReport' => [
            '200.' => 'Ebay\\Sell\\Analytics\\Model\\Report',
        ],
    ];
}
