<?php
/**
 * Created by PhpStorm.
 * User: skaarl
 * Date: 12/10/17
 * Time: 13.57
 */
class Iacuzio_News_ListController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $this->loadLayout()->renderLayout();
    }
}