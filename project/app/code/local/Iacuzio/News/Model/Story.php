<?php
/**
 * Iacuzio News
 */

/**
 * Iacuzio News Model Story
 *
 * Story Model.
 * @method Iacuzio_News_Model_Story getTitle()
 * @method setTitle(string $title)
 * @method Iacuzio_News_Model_Story getContent()
 * @method setContent(string $content)
 * @method Iacuzio_News_Model_Story getCategoryID()
 * @method setCategoryID(int $categoryID)
 * @method Iacuzio_News_Model_Story getCreatedAt()
 * @method Iacuzio_News_Model_Story getUpdatedAt()
 * @method setUpdatedAt(string $updatedAt)
 * @author Francesco Iacuzio <ghosty.dev@gmail.com>
 * @version 0.2.0
 * @package Cms
 */
class Iacuzio_News_Model_Story extends Mage_Core_Model_Abstract
{
    /**
     * $_eventPrefix
     * @var string
     */
    protected $_eventPrefix = 'iacuzio_news_story';


    /**
     * $_eventObject
     * @var string
     */
    protected $_eventObject = 'story';

    /**
     * _construct
     */
    protected function _construct()
    {
        $this->_init('iacuzio_news/story');
    }

    /**
     * @return Mage_Core_Model_Abstract
     */
    protected function _beforeSave()
    {
        parent::_beforeSave();
        $this->setUpdatedAt(Mage::getSingleton('core/date')->gmtDate());
        return $this;
    }

    public function getCategory()
    {
        $category = Mage::getModel('iacuzio_news/category')->load($this->getData('category'));
        if($category && $category->getId())
        {
            return $category;
        }
        return false;
    }

    public function setCategory(Iacuzio_News_Model_Category $category)
    {
        $this->setData('category',$category->getId());
    }
}