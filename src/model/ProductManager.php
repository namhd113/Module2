<?php


namespace app\model;


class ProductManager
{
    protected $database;

    public function __construct()
    {
        $db = new DBconnect();
        $this->database = $db->connectDB();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM products";
        $stmt = $this->database->query($sql);
        $result = $stmt->fetchAll();
        $array = [];
        foreach ($result as $items) {
            $product = new Product($items["name"], $items["type"], $items["price"], $items["count"], $items["note"]);
            $product->setId($items["id"]);
            array_push($array, $product);
        }
        return $array;
    }

    public function addProduct($product)
    {
        $sql = "INSERT INTO `products`(`name`, `type`, `price`, `count`, 
`date`, `note`) VALUES (:name, :type, :price, :count, :date, :note)";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":name", $product->getName());
        $stmt->bindParam(":type", $product->getType());
        $stmt->bindParam(":price", $product->getPrice());
        $stmt->bindParam(":count", $product->getCount());
        $stmt->bindParam(":date", $product->getDate());
        $stmt->bindParam(":note", $product->getNote());
        $stmt->execute();
    }

    public function getProductById($id)
    {
        $sql = "SELECT * FROM products WHERE id = :id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $data = $stmt->fetch();
        return $data;
    }

    public function deleteProduct($id)
    {
        $sql = "DELETE FROM products WHERE id = :id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }

    public function updateProduct($product)
    {
        {

            $sql = "UPDATE `products` SET `name`=:name,`type`=:type,
`price`=:price,`count`=:count,`date`=:date,`note`= :note WHERE id = :id";
            $stmt = $this->database->prepare($sql);
            $stmt->bindParam(":id", $product->getId());
            $stmt->bindParam(":name", $product->getName());
            $stmt->bindParam(":type", $product->getType());
            $stmt->bindParam(":price", $product->getPrice());
            $stmt->bindParam(":count", $product->getCount());
            $stmt->bindParam(":date", $product->getDate());
            $stmt->bindParam(":note", $product->getNote());
            $stmt->execute();
        }
    }

}