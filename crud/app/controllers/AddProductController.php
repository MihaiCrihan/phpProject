<?php

namespace Controllers;
require_once 'app/core/View.php';
require_once 'app/models/AddProduct.php';
use AddProduct;
use View;

class AddProductController
{
  public function actionIndex (){
    $object = new AddProduct();

    $object->setName($_POST['name']);
    $object->setImg($_POST['img']);
    $object->setDescription($_POST['description']);
    $object->setType($_POST['type']);
    $object->setPrice($_POST['price']);

    return View::render('addProduct/index', $object->create());
  }

}