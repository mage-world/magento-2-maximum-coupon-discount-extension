<?php
/**
 * *
 *  Copyright © 2016 MW. All rights reserved.
 *  See COPYING.txt for license details.
 *
 */
namespace MW\MaximumCouponDiscount\Model;

/**
 * Class RulesApplier
 * @package Magento\SalesRule\Model\Validator
 */
class RulesApplier extends  \Magento\SalesRule\Model\RulesApplier
{
    /**
     * @param \Magento\Quote\Model\Quote\Item\AbstractItem $item
     * @param \Magento\SalesRule\Model\Rule $rule
     * @param \Magento\Quote\Model\Quote\Address $address
     * @param mixed $couponCode
     * @return $this
     */
    protected function applyRule($item, $rule, $address, $couponCode)
    {
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $dataHelper = $objectManager->create(\MW\MaximumCouponDiscount\Helper\Data::class);
        $isEnabled = $dataHelper->isEnabled();
        $discountData = $this->getDiscountData($item, $rule);

        $maxDiscount = $rule->getMaxDiscount();
        $simpleAction = $rule->getSimpleAction();
        $discountAmount = $rule->getDiscountAmount();
        $baseSubtotal = $address->getBaseSubtotal();
        if ($isEnabled && $discountData->getAmount() > 0 && $maxDiscount > 0 && $simpleAction == 'by_percent') {
            $discountTotalAmount = $baseSubtotal * $discountAmount/100;
            if ($discountTotalAmount >= $maxDiscount ) {
                $discount = $item->getRowTotal()* $maxDiscount/$baseSubtotal;
                $discountData->setAmount($discount) ;
                $discountData->setBaseAmount($discount) ;
                $currencySymbol = $objectManager->get(\Magento\Store\Model\StoreManagerInterface::class);
                $currency = $currencySymbol->getStore()->getCurrentCurrencyCode();
                $priceDiscount = $currency . ' ' .  $maxDiscount;
                $messageManager = $objectManager->create(\Magento\Framework\Message\ManagerInterface::class);
                $messageManager->addWarning(__('Maximum discount amount of %1 reached.',$priceDiscount));
            }
        }
        $this->setDiscountData($discountData, $item);
        $this->maintainAddressCouponCode($address, $rule, $couponCode);
        $this->addDiscountDescription($address, $rule);

        return $this;
    }
}
