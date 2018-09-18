<?php
/**
 * *
 *  Copyright © 2016 MW. All rights reserved.
 *  See COPYING.txt for license details.
 *
 */
namespace MW\MaximumCouponDiscount\Helper;

use Magento\Store\Model\ScopeInterface;
use Magento\Framework\App\Helper\Context;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    const XML_PATH_MAXIMUM_COUPON_DISCOUNT_ENABLE = 'maximumcoupondiscount/general/active';

    /**
     * Data constructor.
     * @param Context $context
     */
    public function __construct(
        Context $context
    ) {
        parent::__construct($context);
    }

    /**
     * @return bool
     */
    public function isEnabled()
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_MAXIMUM_COUPON_DISCOUNT_ENABLE,
            ScopeInterface::SCOPE_STORE
        );
    }
}
