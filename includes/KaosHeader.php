<?php
require 'settings.php';
require 'classes/Connection.php';
include 'classes/Customers.php';
include 'classes/Orders.php';
include 'classes/Products.php';
include 'classes/Order_items.php';

$conobject = new Connection();
$connection = $conobject->getConnection();
$customers = new Customers($connection);
$customers_array = $customers->getAllCustomers();
$orders = new Orders($connection);
$orders_array = $orders->getAllOrders();
$products = new Products($connection);
$products_array = $products->getAllProducts();
$order_items = new Order_items($connection);
$order_items_array = $order_items->getAllOrder_items();


if ($connection === null) {
    die("Database connection is null.");
}
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>KaosTek</title> 
        <style>
            <?php include 'KaosMain.css'; ?>
        </style>
    </head>
    <body>
        <header>
            <div class="headergrid">
                <div class="headergriditem">
                    <a href="index.php">
                        <img src="assets/KaosTekLogo.png" alt="KaosTekLogo">
                    </a>
                </div>
                <div class="headergriditem">
                    <nav>
                        <a href="index.php?page=orders">ORDERS</a>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                        <a href="index.php?page=users">USERS</a>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                        <a href="index.php?page=products">PRODUCTS</a>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                        <a href="index.php?page=tables">TABLES</a>
                    </nav>
                </div>
            </div>
        </header>
<?php
///end of file!///