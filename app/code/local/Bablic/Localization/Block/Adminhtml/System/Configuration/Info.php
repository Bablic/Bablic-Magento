<?php

class Bablic_Localization_Block_Adminhtml_System_Configuration_Info extends Mage_Adminhtml_Block_System_Config_Form_Field
{
    protected function _getElementHtml(Varien_Data_Form_Element_Abstract $element){
       // $layout  =  Mage::helper('bannerslider')->returnlayout();
        //$block = Mage::helper('bannerslider')->returnblock();
        //$text =  Mage::helper('bannerslider')->returntext();
       // $template = Mage::helper('bannerslider')->returntemplate();
        return '
<div >
<p class="text_bablic">' . ' Hello Admin  <span class="bablic_email">'.Mage::getStoreConfig('trans_email/ident_general/email').'</span><br> ' .  ' To activate bablic please paste the bablic snippet in the box below,then press "Save"</p>
<br>

</div>';
    }
}
