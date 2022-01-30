<?php
class Category
{
    public static function getCategoriesList()
    {
        $db=Db::getConnection();
        $categoryList = [];
        $result = $db->query("SELECT id, name, img FROM category ORDER BY sort_order ASC");

        $i=0;

        while ($row = $result->fetch()) {
            $categoryList[$i]['id'] = $row['id'];
            $categoryList[$i]['name'] = $row['name'];
            $categoryList[$i]['img'] = $row['img'];
            $i++;

        }
        return $categoryList;

    }

    public static function getCategoriesListAdmin()
    {
        $db = Db::getConnection();

        $result = $db->query('SELECT id, name, sort_order, status FROM category ORDER BY sort_order ASC');

        //getting results back
        $categoryList = [];
        $i = 0;
        while ($row = $result->fetch()){
            $categoryList[$i]['id'] = $row['id'];
            $categoryList[$i]['name'] = $row['name'];
            $categoryList[$i]['sort_order'] = $row['sort_order'];
            $categoryList[$i]['status'] = $row['status'];
            $i++;
        }
        return $categoryList;
    }


}

