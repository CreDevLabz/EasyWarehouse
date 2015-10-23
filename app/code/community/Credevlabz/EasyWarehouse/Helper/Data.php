<?php
class Credevlabz_EasyWarehouse_Helper_Data extends Mage_Core_Helper_Abstract
{
	public function getStoreId(){
		return Mage::app()->getRequest()->getParam('store');
	}
}
	 
