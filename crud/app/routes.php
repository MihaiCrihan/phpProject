<?php
use Bramus\Router\Router;
$router = new Router();
$router->get('/', function (){
  $this->handleRequest("Main", "index");
});
$router->get('/contact', function (){
  $this->handleRequest("Main", "contact");
});
$router->get('/auth/login', function (){
  $this->handleRequest("Auth", "login");
});
$router->post('/auth/login', function (){
  $this->handleRequest("Auth", "login");
});
$router->get('/products', function (){
  $this->handleRequest("Products", "index");
});
$router->get('/addProduct', function (){
  $this->handleRequest("AddProduct", "index");
});
$router->post('/addProduct', function (){
  $this->handleRequest("AddProduct", "index");
});
$router->get('/cart', function (){
  $this->handleRequest("Cart", "index");
});
$router->get('/cart/add/(\d+)', function ($id){
  $this->handleRequest("Cart", "add", ['id' => $id]);
});
$router->get('/cart/remove/(\d+)', function ($id){
  $this->handleRequest("Cart", "remove", ['id' => $id]);
});
$router->run();
