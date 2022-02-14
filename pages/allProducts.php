<?php include "pages/header.php"; ?>

<section class="py-5">
    <div class="container">
        <div class="row"> <!-- row Starts here-->
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Image</th>
                    <th scope="col">name</th>
                    <th scope="col">price</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Category</th>
                    <th scope="col">Description</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($products as $product) {?>
                    <tr>
                        <td scope="col"><?php echo isset($product['id'])? $product['id'] : ''; ?></td>
                        <td scope="col"><img src="<?php echo isset($product['image'])? $product['image'] : ''; ?>" alt="" class="h-50"></td>
                        <td scope="col"><?php echo isset($product['name'])? $product['name'] : ''; ?></td>
                        <td scope="col"><?php echo isset($product['price'])? 'Price: '.$product['price'] : ''; ?></td>
                        <td scope="col"><?php echo isset($product['brand'])? $product['brand'] : ''; ?></td>
                        <td scope="col"><?php echo isset($product['category'])? $product['category'] : ''; ?></td>
                        <td scope="col"><?php echo isset($product['description'])? $product['description'] : ''; ?></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div> <!-- row Ends-->

    </div>  <!-- Container Ends-->
</section>






<?php include "pages/footer.php"; ?>
