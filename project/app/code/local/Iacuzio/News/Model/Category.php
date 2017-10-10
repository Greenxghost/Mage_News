<?php
/**
 * Iacuzio News
 */

/**
 * Iacuzio News Model Category
 *
 * Category Model.
 * @method Iacuzio_News_Model_Category getCode()
 * @method setCode(string $code)
 * @method Iacuzio_News_Model_Category getName()
 * @method setName(string $name)
 * @method Iacuzio_News_Model_Category getStatus()
 * @method setStatus(bool $status)
 * @method Iacuzio_News_Model_Category getCreatedAt()
 * @method Iacuzio_News_Model_Category getUpdatedAt()
 * @method setUpdatedAt(string $updatedAt)
 * @author Francesco Iacuzio <ghosty.dev@gmail.com>
 * @version 0.2.0
 * @package Cms
 */
class Iacuzio_News_Model_Category extends Mage_Core_Model_Abstract
{
    /**
     * $_eventPrefix
     * @var string
     */
    protected $_eventPrefix = 'iacuzio_news_category';


    /**
     * $_eventObject
     * @var string
     */
    protected $_eventObject = 'category';

    /**
     * _construct
     */
    protected function _construct()
    {
        $this->_init('iacuzio_news/category');
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