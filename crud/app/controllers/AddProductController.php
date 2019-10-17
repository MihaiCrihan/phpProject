<?php

namespace Controllers;
require_once 'app/core/View.php';
require_once 'app/models/AddProduct.php';
use AddProduct;
use View;

class AddProductController
{
  public function actionIndex (){
    $prod = new AddProduct();
    return View::render('addProduct/index', $prod->create());
  }
}