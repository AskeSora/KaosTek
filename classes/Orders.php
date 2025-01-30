<?php

class Orders {
    public $connection;
    public $id;
    public $user_id;
    public $status;
    public $order_date;
    
    public function __construct($connection) {
        $this->connection = $connection;
        //echo "database connection assigned.<br>";
    }
    public function getAllOrders() {
        $sql = "SELECT * FROM orders ORDER BY id";
        $result = $this->connection->query($sql);
        
        if (!$result) {
            // Handle query error
            throw new Exception("Database query failed: " . $this->connection->error);
        }
        
        $allorders = [];
        
        while ($row = $result->fetch_assoc()) {
            $allorders[$row['id']] = $row;
        }
        return $allorders;
    }
}

