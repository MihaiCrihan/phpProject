<?php

class AddProduct
{
  public function create()
  {

    $db = new DB();
    $db->open('localhost', 'root', '', 'pw2.2019', 'utf8');
    $product = $db->select('
            SELECT
                name
            FROM
                products
        ');

    return $product;
  }
}