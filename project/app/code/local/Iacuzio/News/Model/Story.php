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
}