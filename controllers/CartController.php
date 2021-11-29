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

    public function actionCheckout()
    {   // $categories = [];
       // $categories = Category::getCategoriesList();

        //successful order placement status

        $result = false;

        //was form send?

        if (isset($_POST['submit'])) {
            //was form send? - yes

            //reading form data
            $userFName = $_POST['userFName'];
            $userLName = $_POST['userLName'];
            $userPhone = $_POST['userPhone'];
            $userComment = $_POST['userComment'];

            //field's validation
            $errors = false;
            if (!User::checkFName($userFName))
                $errors[] = 'incorrect name';
            if (!User::checkLName($userLName))
                $errors[] = 'incorrect name';
           // if (!User::CheckPhone($userPhone))
             //   $errors[] = 'incorrect telephone';

            //was form correct?
            if ($errors == false) {
                //form is correct - yes
                //save the order at Db

                //get order data
                $productsInCart = Cart::getProducts();
                if (User::isGuest()) {
                    $userId = false;
                } else {
                    $userId = User::checkLogged();
                }
                //save the order into Db
                $result = Order::save($userFName, $userLName, $userPhone, $userComment, $userId, $productsInCart);

                if ($result) {
                    /**send email to admin
                    $adminEmail = 'BSadmin@gmail.com';
                    $message = 'bravoshop.com/admin/orders';
                    $subject = 'New order';
                    mail($adminEmail, $subject, $message);**/
                    Cart::clear();
                }
            } else {
                //is form correct? - no

                //Order results: Total cost, quantity
                $productsInCart = Cart::getProducts();
                $productsIds = array_keys($productsInCart);
                $products = Product::getProductsByIds($productsIds);
                $totalPrice = Cart::getTotalPrice($products);
                $totalQuantity = Cart::countItems();

            }
        } else {
            // was form send? - No

            //Get data from the cart
            $productsInCart = Cart::getProducts();

            //Are there products in the  cart?
            if ($productsInCart == false) {
                //Are there products in the  cart? -No
                // transmit user to main page
                header("Location: /");
            } else {
                //Are there products in the  cart? -Yes

                //results: total prise, quantity
                $productsIds = array_keys($productsInCart);
                $products = Product::getProductsByIds($productsIds);
                $totalPrice = Cart::getTotalPrice($products);
                $totalQuantity = Cart::countItems();

                $userFName = false;
                $userLName = false;
                $userPhone = false;
                $userComment = false;

                //is user authorized?
                if (User::isGuest()) {
                   //no
                    //form is empty
                } else {
                    //yes, authorized
                    //get user's data from Db by id
                    $userId = User::checkLogged();
                    $user = User::getUserById($userId);
                    //insert to the form
                    $userFName = $user['first_name'];
                    $userLName = $user['last_name'];
                }
            }

        }
        require_once(ROOT . '/views/cart/checkout.php');

        return true;
    }

}
