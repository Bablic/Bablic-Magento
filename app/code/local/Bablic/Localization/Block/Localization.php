<?php
class Bablic_Localization_Block_Localization extends Mage_Core_Block_Template
{
	public function _prepareLayout()
    {
		return parent::_prepareLayout();
    }
    
     public function getLocalization()     
     {
		 /*$LocalizationCollection = Mage::getModel('localization/localization')->getCollection()
                    ->addFieldToFilter('status', 1);
					
		if(count($LocalizationCollection) > 0)
		{
			$LocalizationCollection = $LocalizationCollection->getFirstItem();
		    return  $LocalizationCollection;
		}*/
		
		$ActiveValue = Mage::getStoreConfig('localization/localization/terms');
		
        if($ActiveValue == 1)
		{
			$scriptValue = Mage::getStoreConfig('localization/localization/localization_script');
			 return  $scriptValue;
		}
    }
}