<?php


class productController
{
   public $productDatabase;
   
   public function __construct()
   {
       $dataSourceName = 'mysql:host=127.0.0.1;dbname=products';
       $userName = 'root';
       $passWord = 'password';
       $connection = new DBconnect($dataSourceName, $userName, $passWord);
       $this->productDatabase = new productDB($connection->connect());
   }
   
   public function index()
   {
       $products = $this->productDatabase->getAll();
       include "view/list.php";
   }
    
    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            include "view/add.php";
        } else {
            $name = $_POST['name'];
            $type = $_POST['type'];
            $price = $_POST['price'];
            $amount = $_POST['amount'];
            $date_created = $_POST['date_created'];
            $infomation = $_POST['infomation'];
            
            $product = new product($name, $type, $price, $amount, $date_created,$infomation);
            $this->productDatabase->create($product);
            $message = 'Product created';
            include 'view/add.php';
        }
    }
   
 
}