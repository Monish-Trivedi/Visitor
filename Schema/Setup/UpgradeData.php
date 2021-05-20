<?php

namespace Visitor\Schema\Setup;

use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

/**
 * Upgrade Data script
 */

class UpgradeData implements UpgradeDataInterface
{
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();        
        if ($context->getVersion()
            && version_compare($context->getVersion(), '1.2.1') < 0
        ) {
            $table = $setup->getTable('visitor_example');
            $setup->getConnection()
                ->insertForce($table, ['name' => 'Michael']);

            $setup->getConnection()
                ->update($table, ['name' => 'Monish'],);
        }
        $setup->endSetup();
    }
}