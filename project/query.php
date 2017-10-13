<?php

require_once('app/Mage.php');
Varien_profiler::enable();
Mage::setIsDeveloperMode(true);
ini_set('display_errors', 1);
umask(0);
Mage::app();
$categoryz = Mage::getModel('iacuzio_news/category');
$categoryz->setCode('top');
$categoryz->setName('Think Open');
$categoryz->setStatus(true);
$categoryz->save();

//
//$category = Mage::getModel('iacuzio_news/category')->load(1);
//echo'Category<hr>';
//Zend_Debug::dump($category);
//echo'<hr>';
////create story
//$story = Mage::getModel('iacuzio_news/story');
//$story-> setTitle('La mia storia');
//$story-> setContent ('Lorem Ipsum bla');
//$story-> setStatus(true);
//$story-> setCategory($category);
//$story-> save();
////
echo '<hr>';
echo 'Category Name =' . $story->getCategory()->getName();

Zend_Debug::dump($category);


//$resource=  Mage::getSingleton('core/resource');
//$read = $resource->getConnection('core/read');
//$write = $resource->getConnection('core/write');
//
////getting table name
//$table1 =$resource->getTableName('iacuzio_news/category');
//$table2 =$resource->getTableName('iacuzio_news/story');
//
