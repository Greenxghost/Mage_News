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
        $this->loadLayout();
        $this->renderLayout();
    }

    public function newAction()
    {
        $this->_forward('edit');
    }

    public function editAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }

    public function saveAction()
    {
        //prepare model
        if ($this->getRequest()->getParam('category_id')){
            $model = Mage::getModel('iacuzio_news/category')->load($this->getRequest()->getParam('category_id'));

            if(!$model || $model->getId()) {
                Mage::getSingleton('adminhtml/session')->addError($this->__('Error Found when loading category'));
                return $this->_redirect('*/*/');

            }
        } else {
            $model = Mage::getModel('iacuzio_news/category');
        }

        //verify code and name
        if (!$this->getRequest()->getParam('code') || !$this->getRequest()->getParam('name'))
        {Mage::getSingleton('adminhtml/session')->addError($this->__('Error Found when loading category'));
            return $this->_redirect('*/*/edit/', array('category_id'=>$this->getRequest()->getParam('category_id')));
        }

        try {
            $model->setCode($this->getRequest()->getParam('code'));
            $model->setName($this->getRequest()->getParam('name'));
            $model->setStatus($this->getRequest()->getParam('status') == 1 ? 1 :0);
            $model->save();
        } catch(Exception $e){
            Mage::logException($e);
            Mage::getSingleton('adminhtml/session')->addError($this->__('There was an errore when deleting the category'));
            return $this->_redirect('*/*/edit/', array('category_id'=>$this->getRequest()->getParam('category_id')));
        }
        Mage::getSingleton('adminhtml/session')->addSuccess($this->__('The category was successfully saved'));
        return $this->_redirect('*/*/');
    }

    public function deleteAction()
    {
     //load
        $category = Mage::getModel('iacuzio_news/category')->load($this->getRequest()->getParam('category_id'));

        if(!$category || !$category->getId()){
            Mage::getSingleton('adminhtml/session')->addError($this->__('Error Found when loading category'));
        return $this->_redirect('*/*/');
        }

        //delete the category
        try{
            $category->delete();
        } catch (Exception $e) {
            Mage::logException($e);
            Mage::getSingleton('adminhtml/session')->addError($this->__('There was an errore when deleting the category'));
        return $this->_redirect('*/*/');
        }
        Mage::getSingleton('adminhtml/session')->addSuccess($this->__('The category was successfully deleted'));
        return $this->_redirect('*/*/');
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