<?php

/**
 * Infinity Site Menu
 *
 * @category    Infinity
 * @package     Infinity_SiteMenu
 * @copyright   Copyright (c) 2011 Infinity Technologies (http://www.infinitytechnologies.com.au)
 * @author      Haydn.h, Bruce.z
 */
class Infinity_SiteMenu_Block_Adminhtml_Item_Edit extends Mage_Adminhtml_Block_Widget_Form_Container {

    public function __construct() {
        
        parent::__construct();
                 
        $this->_objectId = 'id';
        $this->_blockGroup = 'sitemenu';
        $this->_controller = 'adminhtml_item';
        
        $this->_updateButton( 'save', 'label', Mage::helper('core')->__('Save Item') );
        $this->_updateButton( 'delete', 'label', Mage::helper('core')->__('Delete Item') );
		
        $this->_addButton( 'saveandcontinue', array(
            'label'   => Mage::helper('adminhtml')->__('Save And Continue Edit'),
            'onclick' => 'saveAndContinueEdit()',
            'class'   => 'save',
        ), -100);

        $this->_formScripts[] = "
        function saveAndContinueEdit(){
            editForm.submit( $('edit_form').action + 'back/edit/');
        }
        ";
        
    }

    public function getHeaderText() {
        
        if ( Mage::registry('sitemenu_data') && Mage::registry('sitemenu_data')->getId() ) {
            return Mage::helper('core')->__( 'Edit Item `%s` (ID: %d)', $this->htmlEscape( Mage::registry('sitemenu_data')->getTitle() ), Mage::registry('sitemenu_data')->getId() );
        }
        else {
            return Mage::helper('core')->__('Add Item');
        }
        
    }

}
