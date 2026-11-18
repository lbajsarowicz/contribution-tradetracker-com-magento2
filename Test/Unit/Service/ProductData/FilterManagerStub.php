<?php
/**
 * Copyright © Magmodules.eu. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace TradeTracker\Connect\Test\Unit\Service\ProductData;

use Magento\Framework\Filter\FilterManager;

/**
 * Provides the removeTags filter normally dispatched through FilterManager::__call().
 */
class FilterManagerStub extends FilterManager
{
    public function __construct()
    {
    }

    public function removeTags(string $value): string
    {
        return strip_tags($value);
    }
}
