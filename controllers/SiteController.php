<?php

class SiteController
{
   public function actionIndex()
   {
      $categories = [];
       $categories = Category::getCategoriesList();

      $latestProducts = [];
      $latestProducts = Product::getLatestProducts(8);


       require_once(ROOT . '/views/site/index.php');

       return true;


   }



}