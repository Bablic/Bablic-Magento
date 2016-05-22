<?php

class Bablic_Localization_Block_Adminhtml_System_Configuration_Terms extends Mage_Adminhtml_Block_System_Config_Form_Field
{
  /* protected function _getElementHtml(Varien_Data_Form_Element_Abstract $element)
    {
        $html = "
       <input type='checkbox' name='groups[localization][fields][localization_terms][value]' id='localization_localization_terms' value='1'>";
        return $html;
    }*/
	
	
	
	
	const CONFIG_PATH = 'localization/localization/terms'; //put here the full path from the config to your element
    protected $_values = null;
    protected function _construct()
    {
        $this->setTemplate('Bablic_Localization/system/config/terms.phtml');
        return parent::_construct();
    }
    protected function _getElementHtml(Varien_Data_Form_Element_Abstract $element)
    {
        $this->setNamePrefix($element->getName())
            ->setHtmlId($element->getHtmlId());
        return $this->_toHtml();
    }
    public function getValues(){
        $values = array();
        //get the available values (use the source model from your question)
        foreach ($this->toOptionArray() as $value){
            $values[$value['value']] = $value['label'];
        }
        return $values;
    }
    public function getIsChecked($name){
        return in_array($name, $this->getCheckedValues());
    }
    public function getCheckedValues(){
        if (is_null($this->_values)){
            $data = $this->getConfigData();
            if (isset($data[self::CONFIG_PATH])){
                $data = $data[self::CONFIG_PATH];
            }
            else{
                $data = '';
            }
            $this->_values = explode(',', $data);
        }
        return $this->_values;
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
