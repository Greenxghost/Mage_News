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
class Iacuzio_News_Model_Source_Status
{
    public function toOptionArray()
    {
        return array(
            array('value'=>0, 'label' => Mage::helper('iacuzio_news')->__('Disabled')),
            array('value'=>1, 'label' => Mage::helper('iacuzio_news')->__('Enabled')),
        );
    }

    public function toGridArray()
    {
        foreach($this->ToOptionarray() as $option){
            $array[$option['value']] =$option['label'];
        }
        return $array;
    }
}

