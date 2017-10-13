<?php
/**
 * Iacuzio News
 */

/**
 * Iacuzio News Category Grid Block
 *
 * Adminhtml Category,
 * @author Francesco Iacuzio <ghosty.dev@gmail.com>
 * @version 0.2.0
 * @package Cms
 */

class Iacuzio_News_Block_Adminhtml_Category_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        $this->_objectId = 'category_id';
        $this->_blockGroup = 'iacuzio_news';
        $this->_controller = 'adminhtml_category';

        return parent::__construct();
    }

    public function getHeaderText()
    {
        return $this->__('Category Details');
    }
}