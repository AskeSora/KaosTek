<main>
    <section>
        <h2>Customers:</h2>
        <table class="customertable">
            <tr>
                <th>Customer Name</th>
                <th>ID</th>
                <th>Address</th>
                <th>Number of Orders</th>
            </tr>
            <?php foreach ($customers_array as $customer):
                $ordercount = 0;
                foreach ($orders_array as $order):
                    if ($order['user_id'] == $customer['id']) {
                        $ordercount = $ordercount + 1;
                    }
                endforeach;?>
            <tr>
                <td><?php echo $customer['username'];?></td>
                <td><?php echo $customer['id'];?></td>
                <td><?php echo $customer['address'];?></td>
                <td><?php echo $ordercount;?></td>
            </tr>
            <?php endforeach;?>
        </table>
        <br><br>
        <h2>Products:</h2>
        <table class="producttable">
            <tr>
                <th>Product Name</th>
                <th>ID</th>
                <th>Price</th>
                <th>Status</th>
            </tr>
            <?php foreach ($products_array as $product):?>
            <tr>
                <td><?php echo $product['name'];?></td>
                <td><?php echo $product['id'];?></td>
                <td><?php echo $product['price'];?></td>
                <td><?php echo $product['status'];?></td>
            </tr>
            <?php endforeach;?>
        </table>
        <br><br>
        <h2>Order Details:</h2>
        <table class="order_itemtable">
            <tr>
                <th>Order ID</th>
                <th>Ordered By</th>
                <th>Product</th>
                <th>Quantity</th>
                <th>Order date</th>
                <th>Status</th>
            </tr>
            <?php foreach ($order_items_array as $order_detail):?>
            <tr>
                <td><?php echo $order_detail['order_id'];?></td>
                <td><?php foreach($orders_array as $order):
                    if ($order_detail['order_id'] === $order['id']) {
                       foreach ($customers_array as $customer):
                           if ($order['user_id'] === $customer['id']) {
                               echo $customer['username'];
                           }
                       endforeach; 
                    }
                endforeach;?>
                </td>
                <td><?php foreach ($products_array as $product):
                    if ($product['id'] === $order_detail['product_id']) {
                        echo $product['name'];
                    }
                endforeach;?>
                </td>
                <td><?php echo $order_detail['quantity'];?></td>
                <td><?php foreach ($orders_array as $order):
                    if ($order['id'] === $order_detail['order_id']) {
                        echo $order['order_date'];
                    }
                endforeach;?>    
                </td>
                <td><?php foreach ($orders_array as $order):
                    if ($order['id'] === $order_detail['order_id']) {
                        echo $order['status'];
                    }
                endforeach;?>    
                </td>
            </tr>
            <?php endforeach;?>
        </table>
    </section>
</main>