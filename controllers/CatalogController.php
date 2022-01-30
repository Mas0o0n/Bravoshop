<?php


class CatalogController
{
    public function actionIndex($page = 1)
    {
        $categories = [];
        $categories=Category::getCategoriesList();

      //  $latestProducts = [];
      //  $latestProducts = Product::getLatestProducts($page);
        $latestProducts = [];
        $latestProducts = Product::getLatestProductsList($page);

        $total = Product::getTotalProducts();

        //creating object Pagination - for page navigation

        $pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page-');
        require_once (ROOT . '/views/catalog/index.php');

        return true;

    }



    public function actionCategory($categoryId, $page = 1)
    {

        $categories = [];
        $categories = Category::getCategoriesList();

        $categoryProducts = [];
        $categoryProducts = Product::getProductsListByCategory($categoryId, $page);

        $total = Product::getTotalProductsInCategory($categoryId);

        //creating object Pagination - for page navigation

        $pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page-');

        require_once(ROOT . '/views/catalog/category.php');


        return true;
    }



}