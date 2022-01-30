<?php

class Order
{
    /**
     * Save the order
     * $param type $name
     * $param type $email
     * $param type $password
     * return type
     */
    public static function save ($userFName, $userLName, $userPhone, $userComment, $userId, $products)
    {
        $products = json_encode($products);

        $db = Db::getConnection();

        $sql = 'INSERT INTO product_order (first_name, last_name, user_phone, user_comment, user_id, products) VALUES (:user_fname, :user_lname, :user_phone, :user_comment, :user_id, :products)';


        $result = $db->prepare($sql);
        $result->bindParam(':user_fname', $userFName, PDO::PARAM_STR);
        $result->bindParam(':user_lname', $userLName, PDO::PARAM_STR);
        $result->bindParam(':user_phone', $userPhone, PDO::PARAM_STR);
        $result->bindParam(':user_comment', $userComment, PDO::PARAM_STR);
        $result->bindParam(':user_id', $userId, PDO::PARAM_INT);
        $result->bindParam(':products', $products, PDO::PARAM_STR);

      return $result->execute();

    }




}
