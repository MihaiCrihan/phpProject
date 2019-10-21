<?php

class Product
{
    public function getList()
    {

        $db = new DB();
        $db->open('localhost', 'root', '', 'pw2.2019', 'utf8');
        $products = $db->select('
             SELECT
                id,
                name,
                price,
                img,
                description,
                type
            FROM
                products
        ');

        return $products;
    }
}
