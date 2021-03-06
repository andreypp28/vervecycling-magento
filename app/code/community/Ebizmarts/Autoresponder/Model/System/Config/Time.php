<?php
/**
 * Author : Ebizmarts <info@ebizmarts.com>
 * Date   : 6/14/13
 * Time   : 4:15 PM
 * File   : Automatic.php
 * Module : Ebizmarts_Magemonkey
 */
class Ebizmarts_Autoresponder_Model_System_Config_Time
{
    /**
     * @return array
     */
    public function toOptionArray()
    {
        $options = array(
            array('value'=> 0, 'label' => Mage::helper('ebizmarts_autoresponder')->__('Immediate')),
            array('value'=> 2, 'label' => Mage::helper('ebizmarts_autoresponder')->__('2 seconds')),
            array('value'=> 5, 'label' => Mage::helper('ebizmarts_autoresponder')->__('5 seconds')),
            array('value'=> 10, 'label' => Mage::helper('ebizmarts_autoresponder')->__('10 seconds')),
            array('value'=> 20, 'label' => Mage::helper('ebizmarts_autoresponder')->__('20 seconds')),
            array('value'=> 30, 'label' => Mage::helper('ebizmarts_autoresponder')->__('30 seconds')),
            array('value'=> 60, 'label' => Mage::helper('ebizmarts_autoresponder')->__('1 minute')),
        );
        return $options;
    }
}