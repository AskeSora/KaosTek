<main>
    <section>
        <h2>Products:</h2>
        <div class="products">
            <?php foreach ($products_array as $product):?>
            <div class="product">
                <h3><?php echo $product['name'];?></h3>
                <p><?php echo $product['price']; ?> DKK</p>  
            </div>
            <?php endforeach;?>
        </div>
    </section>
</main>