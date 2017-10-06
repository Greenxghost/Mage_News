<?php
/**
 * Iacuzio News
 */

/**
 * Iacuzio News Model Resource Story
 *
 * Story Resource Model.
 * @author Francesco Iacuzio <ghosty.dev@gmail.com>
 * @version 0.2.0
 * @package Cms
 */
class Iacuzio_News_Model_Resource_Story extends Mage_Core_Model_Resource_Db_Abstract
{
    /**
     * _construct
     */
    protected function _construct()
    {
        $this->_init('iacuzio_news/story', 'category_id');
    }

}