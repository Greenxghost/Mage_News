<?php

require_once('app/Mage.php');
Varien_profiler::enable();
Mage::setIsDeveloperMode(true);
ini_set('display_errors', 1);
umask(0);
Mage::app();

// create a category
$category = Mage::getModel('iacuzio_news/category');
$category->setCode('top');
$category->setName('Think Open');
$category->setStatus(true);
$category->save();

echo '<hr> here i am <hr><pre>';

Zend_Debug::dump($category);
