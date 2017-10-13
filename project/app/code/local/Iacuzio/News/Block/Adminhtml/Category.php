<?php
/**
 * Iacuzio News
 */

/**
 * Iacuzio News Category Block
 *
 * Backend Category Controller,
 * @author Francesco Iacuzio <ghosty.dev@gmail.com>
 * @version 0.1.0
 * @package Cms
 */

class Iacuzio_News_Block_Adminhtml_Category extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        $this->_blockGroup = 'iacuzio_news';
        $this->_controller = 'adminhtml_category';
        $this->_headerText = $this->__('News Categories');
        parent::__construct();
    }
}