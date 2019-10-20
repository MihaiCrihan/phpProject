<?php

class AddProduct
{
  private $name;
  private $img;
  private $description;
  private $type;
  private $price;


  public function getName()
  {
    return $this->name;
  }
  public function setName($name)
  {
    $this->name = $name;
  }

  public function getImg()
  {
    return $this->img;
  }
  public function setImg($img)
  {
    $this->img = $img;
  }

  public function getDescription()
  {
    return $this->description;
  }
  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getType()
  {
    return $this->type;
  }
  public function setType($type)
  {
    $this->type = $type;
  }

  public function getPrice()
  {
    return $this->price;
  }
  public function setPrice($price)
  {
    $this->price = $price;
  }




  public function create()
  {
    $db = new DB();
    $db->open('localhost', 'root', '', 'pw2.2019', 'utf8');
    $name = $_POST['name'];
    $img = $_POST['img'];
    $description = $_POST['description'];
    print_r ($_POST['description'], $_POST['name'] );
    $product = $db->insert('
           INSERT INTO 
            products 
            (name,img,description) values(($name),($img),($description))
        ');

    return $product;
  }
}
