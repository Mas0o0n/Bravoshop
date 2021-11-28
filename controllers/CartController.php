<?php

class CartController
{

    public function actionAdd($id)
    {
     //add product to cart by id
        Cart::addProduct($id);

        //return user to the page
        $referrer = $_SERVER ['HTTP_REFERER'];
        header("Location: $referrer");

    }
    public function actionAddAjax($id)
    {
        //add product to cart
        echo Cart::addProduct($id);
        return true;
    }

    public function actionIndex()
    {
        $categories = [];
        $categories = Category::getCategoriesList();

        $productsInCart = Cart::getProducts();
        if ($productsInCart) {
            //get data for the list
            $productsIds = array_keys($productsInCart);
            $products = Product::getProductsByIds($productsIds);

            //get total cost of products in the cart
            $totalPrice = Cart::getTotalPrice($products);
        }
        require_once(ROOT . '/views/cart/index.php');
        return true;
    }


}
