<?php
/**
 * @category    Devopensource
 * @package		Devopensource_Phpconsole
 * @copyright   Copyright (c) 2012 Devopensource
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Devopensource_Phpconsole_Helper_Data extends Mage_Core_Helper_Abstract
{
    function test(){
       Mage::getModel('devopeconsole/phpconsole')->phpconsole(
            "Test desde Magento ".uniqid(),
            Mage::getStoreConfig('devopeconsole/general/nickname')
        );

        return true;
    }
}