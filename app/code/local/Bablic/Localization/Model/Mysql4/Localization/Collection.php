<?php

class Bablic_Localization_Model_Mysql4_Localization_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('localization/localization');
    }
}