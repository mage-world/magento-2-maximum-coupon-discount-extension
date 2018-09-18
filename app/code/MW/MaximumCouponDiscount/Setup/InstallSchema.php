<?php
/**
 * *
 *  Copyright © 2016 MW. All rights reserved.
 *  See COPYING.txt for license details.
 *
 */
namespace MW\MaximumCouponDiscount\Setup;

use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

/**
 * @codeCoverageIgnore
 */
class InstallSchema implements InstallSchemaInterface
{
	/**
     * {@inheritdoc}
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
		$setup->startSetup();

		$setup->endSetup();
	}
}
