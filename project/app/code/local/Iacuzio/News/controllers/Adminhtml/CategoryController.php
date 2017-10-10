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
class Iacuzio_News_Adminhtml_CategoryController extends Mage_Adminhtml_Controller_Action
{
    /**
     * indexAction
     */
    public function indexAction()
    {
        echo'here i am'; die;
    }

    /**
     * _isAllowed
     * @return bool
     */
    protected function _isAllowed()
    {
        return Mage::getSingleton('admin/session')->isAllowed('iacuzio_news');
    }
}