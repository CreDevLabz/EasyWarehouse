<?php
class Credevlabz_EasyWarehouse_Block_Adminhtml_Catalog_Product_Edit_Tab_Inventory extends Mage_Adminhtml_Block_Catalog_Product_Edit_Tab_Inventory
{
	public function __construct()
    {
        parent::__construct();
		//$this->getStockItem()->setStockId($this->getRequest()->getParam('store'));
        $this->setTemplate('catalog/product/tab/inventory.phtml');
    }

	/**
     * Retrieve Catalog Inventory  Stock Item Model
     *
     * @return Mage_CatalogInventory_Model_Stock_Item
     */
    public function getStockItem()
    {
        return $this->getProduct()
				->getStockItem()
				->setStockId(Mage::helper('easywarehouse')->getStoreId());
	}
}
