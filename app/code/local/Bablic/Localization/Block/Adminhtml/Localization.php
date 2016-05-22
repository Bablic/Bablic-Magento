<?php
class Bablic_Localization_Block_Adminhtml_Localization extends Mage_Adminhtml_Block_Widget_Grid_Container
{
  public function __construct()
  {
    $this->_controller = 'adminhtml_localization';
    $this->_blockGroup = 'localization';
    $this->_headerText = Mage::helper('localization')->__('localization Manager');
    $this->_addButtonLabel = Mage::helper('localization')->__('Add localization Option');
    parent::__construct();
  }
}