<?php

class Bablic_Localization_Model_Mysql4_Localization extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {    
        // Note that the trousers_id refers to the key field in your database table.
        $this->_init('localization/localization', 'localization_id');
    }
}