<?php

class Order_items {
    public $connection;
    public $order_id;
    public $product_id;
    public $quantity;
    
    public function __construct($connection) {
        $this->connection = $connection;
        //echo "database connection assigned.<br>";
    }
    public function getAllOrder_items() {
        $sql = "SELECT * FROM order_items";
        $result = $this->connection->query($sql);
        
        if (!$result) {
            // Handle query error
            throw new Exception("Database query failed: " . $this->connection->error);
        }
        
        $allorders = [];
        
        while ($row = $result->fetch_assoc()) {
            $allorders[$row['order_id']] = $row;
        }
        return $allorders;
    }
}