<?php

namespace Ebay\Commerce\Catalog;

use OpenAPI\Runtime\ResponseTypes as AbstractResponseTypes;

class ResponseTypes extends AbstractResponseTypes
{
    public static $types = [
        'getProduct' => [
            '200.' => 'Ebay\\Commerce\\Catalog\\Model\\Product',
        ],
        'search' => [
            '200.' => 'Ebay\\Commerce\\Catalog\\Model\\ProductSearchResponse',
        ],
    ];
}
