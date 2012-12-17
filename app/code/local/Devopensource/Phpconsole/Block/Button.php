<?php
/**
 * @category    Devopensource
 * @package		Devopensource_Phpconsole
 * @copyright   Copyright (c) 2012 Devopensource
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Devopensource_Phpconsole_Block_Button extends Mage_Adminhtml_Block_System_Config_Form_Field
{
    protected function _getElementHtml(Varien_Data_Form_Element_Abstract $element)
    {
        $this->setElement($element);
        $url = $this->getUrl('adminhtml/phpconsole/testbutton');

        $html = $this->getLayout()->createBlock('adminhtml/widget_button')
            ->setType('button')
            ->setClass('scalable')
            ->setLabel('Test Now !')
            ->setOnClick("setLocation('$url')")
            ->toHtml();

        return $html;
    }
}