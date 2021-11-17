<?php
class Category
{
   public static function getCategoriesList()
   {
       $db=Db::getConnection();
       $categoryList = array();
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


}

