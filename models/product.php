<?php

class Product
{

    const SHOW_BY_DEFAULT = 6;

    /**
     * Returns an array of products
     */
    public static function getLatestProducts($count = self::SHOW_BY_DEFAULT)
    {
        $count = intval($count);
        $db = Db::getConnection();
        $productsList = array();

        $result = $db->query('SELECT id, name, code, price, image, is_new, category_id  FROM product 
            WHERE status = "1"
            ORDER BY id DESC 
            LIMIT ' . $count);

        $i = 0;
        while ($row = $result->fetch()) {
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['name'] = $row['name'];
            $productsList[$i]['image'] = $row['image'];
            $productsList[$i]['price'] = $row['price'];
            $productsList[$i]['is_new'] = $row['is_new'];
            $productsList[$i]['category_id'] = $row['category_id'];
            $i++;
        }

        return $productsList;
    }

    /**
     * Returns an array of products
     */
    public static function getProductsListByCategory($categoryId = false, $page = 1)
    {
        if ($categoryId) {

            $page = intval ($page);
            $offset = ($page - 1) * self::SHOW_BY_DEFAULT;

            $db = Db::getConnection();
            $products = array();
            $result = $db->query("SELECT id, name, price, image, is_new, category_id, description FROM product "
                . "WHERE status = '1' AND category_id = '$categoryId' "
                . "ORDER BY id ASC "
                . "LIMIT ".self::SHOW_BY_DEFAULT
                . " OFFSET ". $offset);

            $i = 0;

            while ($row = $result->fetch()) {
                $products[$i]['id'] = $row['id'];
                $products[$i]['name'] = $row['name'];
                $products[$i]['image'] = $row['image'];
                $products[$i]['price'] = $row['price'];
                $products[$i]['is_new'] = $row['is_new'];
                $products[$i]['category_id'] = $row['category_id'];
                $products[$i]['description'] = $row['description'];
                $i++;
            }

            return $products;
        }
    }


    /**
     * Returns product item by id
     * @param integer $id
     */
    public static function getProductById($id)
    {
        $id = intval($id);

        if ($id) {
            $db = Db::getConnection();

            $result = $db->query('SELECT * FROM product WHERE id=' . $id);
            $result->setFetchMode(PDO::FETCH_ASSOC);

            return $result->fetch();
        }
    }


    /**
     * Returns an array of recommended products
     *
     * public static function getRecommendedProducts()
     * {
     * $db = Db::getConnection();
     *
     * $productsList = array();
     *
     * $result = $db->query('SELECT id, name, price, image, is_new FROM product '
     * . 'WHERE status = "1" AND is_recommended = "1"'
     * . 'ORDER BY id DESC ');
     *
     * $i = 0;
     * while ($row = $result->fetch()) {
     * $productsList[$i]['id'] = $row['id'];
     * $productsList[$i]['name'] = $row['name'];
     * $productsList[$i]['image'] = $row['image'];
     * $productsList[$i]['price'] = $row['price'];
     * $productsList[$i]['is_new'] = $row['is_new'];
     * $i++;
     * }
     *
     * return $productsList;
     * }
     */

}