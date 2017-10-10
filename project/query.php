<?php

require_once('app/Mage.php');
Varien_profiler::enable();
Mage::setIsDeveloperMode(true);
ini_set('display_errors', 1);
umask(0);
Mage::app();

// create a category
//$category = Mage::getModel('iacuzio_news/category')->load(1);
//echo'Category<hr>';
//Zend_Debug::dump($category);
//echo'<hr>';
////create story
//$story = Mage::getModel('iacuzio_news/story');
//$story-> setTitle('La mia storia4');
//$story-> setContent ('Lorem Ipsum5');
//$story-> setStatus(true);
//$story-> setCategory($category);
//$story-> save();
//
//echo '<hr>';
//echo 'Category Name =' . $story->getCategory()->getName();
//
//Zend_Debug::dump($category);


//$resource=  Mage::getSingleton('core/resource');
//$read = $resource->getConnection('core/read');
//$write = $resource->getConnection('core/write');
//
////getting table name
//$table1 =$resource->getTableName('iacuzio_news/category');
//$table2 =$resource->getTableName('iacuzio_news/story');
//
