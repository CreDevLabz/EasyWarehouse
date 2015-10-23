
<?php

	$installer = $this;
    $installer->startSetup();

    $installer->getConnection()
    ->dropForeignKey($installer->getTable('cataloginventory/stock_item'),'FK_CATINV_STOCK_ITEM_STOCK_ID_CATINV_STOCK_STOCK_ID' )
    ->dropForeignKey($installer->getTable('cataloginventory/stock_status'),'FK_CATINV_STOCK_STS_STOCK_ID_CATINV_STOCK_STOCK_ID' )
	->addForeignKey(
		$installer->getTable('cataloginventory/stock_item'),
        $installer->getFkName('cataloginventory/stock_item', 'stock_id', 'core/store', 'store_id'),
        'stock_id', $installer->getTable('core/store'), 'store_id',
        Varien_Db_Ddl_Table::ACTION_CASCADE, Varien_Db_Ddl_Table::ACTION_CASCADE
    )
	->addForeignKey(
		$installer->getTable('cataloginventory/stock_status'),
        $installer->getFkName('cataloginventory/stock_status', 'stock_id', 'core/store', 'store_id'),
        'stock_id', $installer->getTable('core/store'), 'store_id',
        Varien_Db_Ddl_Table::ACTION_CASCADE, Varien_Db_Ddl_Table::ACTION_CASCADE
    );   
    $installer->endSetup();
	 
