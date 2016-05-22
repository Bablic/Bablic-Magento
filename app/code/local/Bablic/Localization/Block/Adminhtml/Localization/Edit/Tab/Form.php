<?php

class Bablic_Localization_Block_Adminhtml_Localization_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
  protected function _prepareForm()
  {
      $form = new Varien_Data_Form();
	 
      $this->setForm($form);
      $fieldset = $form->addFieldset('localization_form', array('legend'=>Mage::helper('localization')->__('Item information')));
	
	$afterElementHtml = '<p class="text_bablic">' . ' Hello Admin  <span class="bablic_email">'.Mage::getStoreConfig('trans_email/ident_general/email').'</span><br> ' .  ' To activate bablic please paste the bablic snippet in the box below,then press "Save"</p>';
		 $fieldset->addField('status', 'checkbox', array(
            'name'      => 'status',
			 'checked'    => $this->getStatus()==1 ? 'checked' : '',
			'onclick' => 'this.value = this.checked ? 1 : 0;',  
            'label'     => Mage::helper('localization')->__('Active Bablic ON/OFF'),
         'tabindex' => 1 ,
		 'after_element_html' => $afterElementHtml,
        ));
	
	
	$fieldset->addField('localization_detail', 'editor', array(
            'name'      => 'localization_detail',
            'rows'      => '10',
            'cols'      => '30',
            'wysiwyg'   => false,
            'required'  => true,
        ));
		
	

    
    
      if ( Mage::getSingleton('adminhtml/session')->getLocalizationData() )
      {  
         $form->setValues(Mage::getSingleton('adminhtml/session')->getLocalizationData());
          Mage::getSingleton('adminhtml/session')->setLocalizationData(null);
      } elseif ( Mage::registry('localization_data') ) { 
          $form->setValues(Mage::registry('localization_data')->getData());
		   
		 
      }
      return parent::_prepareForm();
  }
}