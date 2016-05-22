<?php

class Bablic_Localization_Block_Adminhtml_Localization_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{

  public function __construct()
  {
      parent::__construct();
      $this->setId('localization_tabs');
      $this->setDestElementId('edit_form');
      $this->setTitle(Mage::helper('localization')->__('Localization Information'));
  }

  protected function _beforeToHtml()
  {
      $this->addTab('form_section', array(
          'label'     => Mage::helper('localization')->__('localization'),
          'title'     => Mage::helper('localization')->__('localization'),
          'content'   => $this->getLayout()->createBlock('localization/adminhtml_localization_edit_tab_form')->toHtml(),
      ));
    
	  
     
      return parent::_beforeToHtml();
  }
}