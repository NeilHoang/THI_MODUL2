<?php


class productDB
{
    public $connection;
    
    public function __construct($connection)
    {
        $this->connection = $connection;
    }
    
    public function getAll()
    {
        $structuredQueryLanguage = "SELECT * FROM product";
        $statement = $this->connection->prepare($structuredQueryLanguage);
        $statement->execute();
        $result = $statement->fetchAll();
        $products = [];
        foreach ($result as $row) {
            $product = new product($row['name'], $row['type'], $row['price'],$row['amount'],$row['date_created'],$row['infomation']);
            $product->id = $row["id"];
            array_push($products, $product);
        }
        return $products;
    }
    
    public function create($product)
    {
        $sql = "INSERT INTO product (name,type,price,amount,date_created,infomation) VALUES (?, ?, ?, ?, ?,?)";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(1, $product->name);
        $stmt->bindParam(2, $product->type);
        $stmt->bindParam(3, $product->price);
        $stmt->bindParam(4, $product->amount);
        $stmt->bindParam(5, $product->date_created);
        $stmt->bindParam(5, $product->infomation);
        return $stmt->execute();
    }
}