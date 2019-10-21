<?php

class AddProduct
{
  private $name;
  private $img;
  private $description;
  private $type;
  private $price;


  public function setName($name)
  {
    $this->name = $name;
  }
  public function setImg($img)
  {
    $this->img = $img;
  }
  public function setDescription($description)
  {
    $this->description = $description;
  }
  public function setType($type)
  {
    $this->type = $type;
  }
  public function setPrice($price)
  {
    $this->price = $price;
  }




  public function create()
  {
    $db = new DB();
    $db->open('localhost', 'root', '', 'pw2.2019', 'utf8');
      if (!empty($_POST) && !isset($_POST['submit'] )) {
        $product = $db->insert("
        INSERT INTO
                products    
            SET 
                name = '{$this->name}',
                img = '{$this->img}',
                description = '{$this->description}',
                type = '{$this->type}',
                price = '{$this->price}'
    ");
        return $product;
      }
  }
}