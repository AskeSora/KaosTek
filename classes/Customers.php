<?php

class Customers {
    public $connection;
    public $id;
    public $username;
    public $address;
    
    public function __construct($connection) {
        $this->connection = $connection;
        //echo "database connection assigned.<br>";
    }
    public function getAllCustomers() {
        $sql = "SELECT * FROM users ORDER BY id";
        $result = $this->connection->query($sql);
        
        if (!$result) {
            // Handle query error
            throw new Exception("Database query failed: " . $this->connection->error);
        }
        
        $allusers = [];
        
        while ($row = $result->fetch_assoc()) {
            $allusers[$row['id']] = $row;
        }
        return $allusers;
    }
}
/*
*SELECT users.username, count(orders.id) AS count_of_orders FROM `users` 
*LEFT JOIN orders ON users.id = orders.user_id 
*GROUP BY users.username 
 */