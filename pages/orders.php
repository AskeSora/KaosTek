<main>
    <section>
        <h2>Orders:</h2>
        <div class="orders">
            <?php foreach ($orders_array as $order):?>
            <div class="order">
                <h3>Order No. <?php echo $order['id'];?></h3>
                <span class="orderdate">Order placed: <?php echo $order['order_date'];?></span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                <span class="orderstatus">Status: <?php echo $order['status'];?></span>
            </div>
            <?php endforeach;?>
        </div>
        
        <a href="products.php">See products-></a>
    </section>
</main>