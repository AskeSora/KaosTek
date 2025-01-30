<main>
    <section>
        <h2>Customers:</h2>
        <div class="users">
            <?php foreach ($customers_array as $customer):
                $ordercount = 0;
                foreach ($orders_array as $order):
                    if ($order['user_id'] == $customer['id']) {
                        $ordercount = $ordercount + 1;
                    }
                endforeach;?>
            <div class="user">
                <h3><?php echo $customer['username'];?></h3>
                <span class="ordercount"><?php echo $ordercount;?> Orders.</span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                <span class="orderstatus">Status: <?php echo $order['status'];?></span>
            </div>
            <?php endforeach;?>
        </div>
    </section>
</main>