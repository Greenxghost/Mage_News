<?php
class Iacuzio_News_Block_Adminhtml_Renderer_Thumbnail extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract
{

public function render(Varien_Object $row)
{
// control if file exists
$fullPathDir = Mage::getBaseDir(Mage_Core_Model_Store::URL_TYPE_MEDIA) . DS . Mage::helper('iacuzio_news')->getMediaFolder() . DS . $row->getThumbnailPath();
if (!$row->getThumbnailPath() || !file_exists($fullPathDir)) {
return '';
}
// prepare URL and return image HTML
$fullPath = Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_MEDIA) . Mage::helper('iacuzio_news')->getMediaFolder() . DS . $row->getThumbnailPath();
return '<img id="thumbnail-' . $this->getColumn()->getId() . '" src="' . $fullPath . '" class="grid-image" style="max-width:100px" />';
}
}