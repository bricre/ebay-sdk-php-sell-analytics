<?php

namespace Ebay\Sell\Analytics\Api;

use Ebay\Sell\Analytics\Model\FindSellerStandardsProfilesResponse as FindSellerStandardsProfilesResponse;
use Ebay\Sell\Analytics\Model\StandardsProfile as StandardsProfile;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class SellerStandardsProfile extends AbstractAPI
{
    /**
     * This call retrieves all the standards profiles for the associated seller. A
     * standards profile is a set of eBay seller metrics and the seller's associated
     * compliance values (either TOP_RATED, ABOVE_STANDARD, or BELOW_STANDARD). A
     * seller's multiple profiles are distinguished by two criteria, a
     * &quot;program&quot; and a &quot;cycle.&quot; A profile's program is one of three
     * regions where the seller may have done business, or PROGRAM_GLOBAL to indicate
     * all marketplaces where the seller has done business. The cycle value specifies
     * whether the standards compliance values were determined at the last official
     * eBay evaluation or at the time of the request.
     *
     * @return FindSellerStandardsProfilesResponse
     */
    public function finds(): FindSellerStandardsProfilesResponse
    {
        return $this->client->request('findSellerStandardsProfiles', 'GET', 'seller_standards_profile',
            [
            ]
        );
    }

    /**
     * This call retrieves a single standards profile for the associated seller. A
     * standards profile is a set of eBay seller metrics and the seller's associated
     * compliance values (either TOP_RATED, ABOVE_STANDARD, or BELOW_STANDARD). A
     * seller can have multiple profiles distinguished by two criteria, a
     * &quot;program&quot; and a &quot;cycle.&quot; A profile's program is one of three
     * regions where the seller may have done business, or PROGRAM_GLOBAL to indicate
     * all marketplaces where the seller has done business. The cycle value specifies
     * whether the standards compliance values were determined at the last official
     * eBay evaluation (CURRENT) or at the time of the request (PROJECTED). Both cycle
     * and a program values are required URI parameters for this method.
     *
     * @param string $cycle   The period covered by the returned standards profile
     *                        evaluation. Supply one of two values, CURRENT means the response reflects eBay's
     *                        most recent monthly standards evaluation and PROJECTED means the response
     *                        reflect the seller's projected monthly evaluation, as calculated at the time of
     *                        the request.
     * @param string $program This input value specifies the region used to determine
     *                        the seller's standards profile. Supply one of the four following values,
     *                        PROGRAM_DE, PROGRAM_UK, PROGRAM_US, or PROGRAM_GLOBAL.
     *
     * @return StandardsProfile
     */
    public function get(string $cycle, string $program): StandardsProfile
    {
        return $this->client->request('getSellerStandardsProfile', 'GET', "seller_standards_profile/{$program}/{$cycle}",
            [
            ]
        );
    }
}
