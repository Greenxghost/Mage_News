<?php
/**
 * Iacuzio News
 */

/**
 * Iacuzio News Model Resource Story Collection
 *
 * Story Resource Collection Model.
 * @author Francesco Iacuzio <ghosty.dev@gmail.com>
 * @version 0.2.0
 * @package Cms
 */
class Iacuzio_News_Model_Resource_Story_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    /**
     * _construct
     */
    protected function _construct()
    {
        $this->_init('iacuzio_news/story');
    }

}