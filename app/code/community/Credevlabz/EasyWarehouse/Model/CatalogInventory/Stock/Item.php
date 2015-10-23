<?php
class Credevlabz_EasyWarehouse_Model_CatalogInventory_Stock_Item extends Mage_CatalogInventory_Model_Stock_Item
{

	protected $_stockId = 1;
	
	/**
	* Initialize resource model
	*
	*/
    protected function _construct()
    {
        $this->_init('cataloginventory/stock_item');
		  $this->setStockId();
    }
	
	/**
     * Retrieve stock identifier
     *
     * @todo multi stock
     * @return int
     */
    public function getStockId()
    {
        return $this->_stockId;
    }

	public function setStockId($stockId = NULL)
	{
		if(is_null($stockId)){
			$stockId = (Mage::app()->getStore()->getId()) ? Mage::app()->getStore()->getId() : Mage::helper('easywarehouse')->getStoreId();
		}
		$this->_stockId =$stockId;
		return $this;
	}
	
}
