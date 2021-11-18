<?php
include_once ROOT . '/models/category.php';
include_once ROOT . '/models/product.php';

class CatalogController
{
    public function actionIndex()
    {
        $categories = array();
        $categories=Category::getCategoriesList();

        $latestProducts = array ();
        $latestProducts = Product::getLatestProducts(6);


        require_once (ROOT . '/views/catalog/index.php');

        return true;

    }



    public function actionCategory($categoryId, $page = 1)
    {

        $categories = array();
        $categories = Category::getCategoriesList();

        $categoryProducts = array();
        $categoryProducts = Product::getProductsListByCategory($categoryId, $page);


        require_once(ROOT . '/views/catalog/category.php');

        return true;
    }



}