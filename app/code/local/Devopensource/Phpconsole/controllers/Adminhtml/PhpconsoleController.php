<?php
/**
 * @category    Devopensource
 * @package		Devopensource_Phpconsole
 * @copyright   Copyright (c) 2012 Devopensource
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Devopensource_Phpconsole_Adminhtml_PhpconsoleController extends Mage_Adminhtml_Controller_Action
{
    function testbuttonAction(){
        Mage::helper('devopeconsole')->test();

        $this->_redirect('adminhtml/system_config/edit/section/devopeconsole');
    }
}