<?php
/**
 * Iacuzio News
 */

/**
 * Iacuzio News AdminHTml Controller
 *
 * Backend Category Controller,
 * @author Francesco Iacuzio <ghosty.dev@gmail.com>
 * @version 0.1.0
 * @package Cms
 */

class Iacuzio_News_Block_Adminhtml_Category_Grid_Renderer_Status extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract
{
    public function render(Varien_Object $row)
    {
        if ($row->getData('status' == 0)) {
            return '<span class="grid-severity-minor"><span>' . $this ->__('Disabled') . '</span></span>';
        }
        if ($row->getData('status' == 1)) {
            return '<span class="grid-severity-notice"><span>' . $this ->__('Ensabled') . '</span></span>';
        }
    }
}