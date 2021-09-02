<?php

namespace Ebay\Sell\Analytics\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Type that defines the metadata header fields.
 */
class MetadataHeader extends AbstractModel
{
    /**
     * The key value used for the report. For example: &quot;key&quot;:
     * &quot;LISTING_ID&quot;.
     *
     * @var string
     */
    public $key = null;

    /**
     * The list of dimension key values used for the report header. Each list element
     * contains the key name, its data type, and its localized name. For example:
     * &quot;metadataKeys&quot;: [ &nbsp;&nbsp;&quot;key&quot;:
     * &quot;LISTING_TITLE&quot;, &nbsp;&nbsp;&quot;localizedName&quot;: &quot;Listing
     * title&quot;, &nbsp;&nbsp;&quot;dataType&quot;: &quot;STRING&quot;.
     *
     * @var \Ebay\Sell\Analytics\Model\Definition[]
     */
    public $metadataKeys = null;
}
