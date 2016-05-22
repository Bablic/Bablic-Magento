<?php

class Bablic_Localization_Model_Localization extends Mage_Core_Model_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('localization/localization');
    }
	public function toOptionArray()
{
    return array('position' => 
        array('value' => 'left', 'label'=>Mage::helper('adminhtml')->__('Left')),
        array('value' => 'right', 'label'=>Mage::helper('adminhtml')->__('Right')),
        array('value' => 'top', 'label'=>Mage::helper('adminhtml')->__('Top')),
        array('value' => 'bottom', 'label'=>Mage::helper('adminhtml')->__('Bottom')),
    );
}
}