<?php
/*
* @Author : Credevator
*/
class Credevlabz_EasyWarehouse_Model_CatalogInventory_Stock extends Mage_CatalogInventory_Model_Stock
{
	public function getId(){
		return $this->getStoreId();
	}
	
	/**
     * Retrieve Store Id (product or current)
     *
     * @return int
     */
    public function getStoreId()
    {
        $storeId = $this->getData('store_id');
        if (is_null($storeId)) {
            $storeId = Mage::app()->getStore()->getId();
            $this->setData('store_id', $storeId);
        }
        return $this;
    }
}
		
