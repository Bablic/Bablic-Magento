<?php

class Bablic_Localization_Block_Adminhtml_Localization_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        parent::__construct();
                 
        $this->_objectId = 'id';
        $this->_blockGroup = 'localization';
        $this->_controller = 'adminhtml_localization';
        
        $this->_updateButton('save', 'label', Mage::helper('localization')->__('Save Localization'));
        $this->_updateButton('delete', 'label', Mage::helper('localization')->__('Delete Localization'));
		
        $this->_addButton('saveandcontinue', array(
            'label'     => Mage::helper('adminhtml')->__('Save And Continue Edit'),
            'onclick'   => 'saveAndContinueEdit()',
            'class'     => 'save',
        ), -100);

        $this->_formScripts[] = "
            function toggleEditor() {
                if (tinyMCE.getInstanceById('localization_content') == null) {
                    tinyMCE.execCommand('mceAddControl', false, 'localization_content');
                } else {
                    tinyMCE.execCommand('mceRemoveControl', false, 'localization_content');
                }
            }

            function saveAndContinueEdit(){
                editForm.submit($('edit_form').action+'back/edit/');
            }
        ";
    }

    public function getHeaderText()
    {
        if( Mage::registry('localization_data') && Mage::registry('localization_data')->getId() ) {
			
            return Mage::helper('localization')->__("Edit Localization '%s'", $this->htmlEscape()); /*?><input type="hidden" name="filename" value="<?php  echo $this->htmlEscape(Mage::registry('localization_data')->getFilename());?>" /> <?php*/
        } else {
            return Mage::helper('localization')->__('Add Localization');
        }
    }
}