<?php

include_once ROOT . '/models/category.php';
include_once ROOT . '/models/product.php';

class SiteController
{
   public function actionIndex()
   {
      $categories = array();
       $categories = Category::getCategoriesList();

      $latestProducts = array();
      $latestProducts = Product::getLatestProducts(8);


       require_once(ROOT . '/views/site/index.php');

       return true;


   }



}