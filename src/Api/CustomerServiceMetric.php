<?php

namespace Ebay\Sell\Analytics\Api;

use Ebay\Sell\Analytics\Model\GetCustomerServiceMetricResponse as GetCustomerServiceMetricResponse;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class CustomerServiceMetric extends AbstractAPI
{
    /**
     * Use this method to retrieve a seller's performance and rating for the customer
     * service metric. Control the response from the getCustomerServiceMetric method
     * using the following path and query parameters: customer_service_metric_type
     * controls the type of customer service transactions evaluated for the metric
     * rating. evaluation_type controls the period you want to review.
     * evaluation_marketplace_id specifies the target marketplace for the evaluation.
     * Currently, metric data is returned for only peer benchmarking. For more detail
     * on the workings of peer benchmarking, see Service metrics policy.
     *
     * @param string $customer_service_metric_type Use this path parameter to specify
     *                                             the type of customer service metrics and benchmark data you want returned for
     *                                             the seller. Supported types are: ITEM_NOT_AS_DESCRIBED ITEM_NOT_RECEIVED
     * @param string $evaluation_type              Use this path parameter to specify the type of
     *                                             the seller evaluation you want returned, either: CURRENT &ndash; A monthly
     *                                             evaluation that occurs on the 20th of every month. PROJECTED &ndash; A daily
     *                                             evaluation that provides a projection of how the seller is currently performing
     *                                             with regards to the upcoming evaluation period.
     * @param array  $queries                      options:
     *                                             'evaluation_marketplace_id'	string	Use this query parameter to specify the
     *                                             Marketplace ID to evaluate for the customer service metrics and benchmark data.
     *                                             For the list of supported marketplaces, see Analytics API requirements and
     *                                             restrictions. For implementation help, refer to eBay API documentation at
     *                                             https://developer.ebay.com/api-docs/sell/analytics/types/bas:MarketplaceIdEnum
     *
     * @return GetCustomerServiceMetricResponse
     */
    public function get(string $customer_service_metric_type, string $evaluation_type, array $queries = []): GetCustomerServiceMetricResponse
    {
        return $this->client->request('getCustomerServiceMetric', 'GET', "customer_service_metric/{$customer_service_metric_type}/{$evaluation_type}",
            [
                'query' => $queries,
            ]
        );
    }
}
