<?php

class Products {
    public $connection;
    public $id;
    public $name;
    public $price;
    public $status;
    
    public function __construct($connection) {
        $this->connection = $connection;
        //echo "database connection assigned.<br>";
    }
    public function getAllProducts() {
        $sql = "SELECT * FROM products ORDER BY price";
        $result = $this->connection->query($sql);
        
        if (!$result) {
            // Handle query error
            throw new Exception("Database query failed: " . $this->connection->error);
        }
        
        $allproducts = [];
        
        while ($row = $result->fetch_assoc()) {
            $allproducts[$row['id']] = $row;
        }
        return $allproducts;
    }
}