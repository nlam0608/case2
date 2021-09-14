

<div class="container mt-5">
    <div class="card" >
        <div class="card-header">
            Products list
        </div>
        <div class="card-body">
            <a href="index.php?page=product-create" type="button" class="btn btn-primary mb-3">Add New Product</a>


            <table class="table">
                <thead>

                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Type</th>
                    <th scope="col">Size</th>
                    <th scope="col">Origin</th>
                    <th scope="col">Material</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Insurance</th>
                    <th scope="col">Shipp</th>
                    <th scope="col" colspan="2">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($products as $product): ?>
                    <tr>
                        <th><?php echo $product['id'] ?></th>
                        <td><?php echo $product['name'] ?></td>
                        <td><?php echo $product['price'] ?></td>
                        <td><?php echo $product['type'] ?></td>
                        <td><?php echo $product['size'] ?></td>
                        <td><?php echo $product['origin'] ?></td>
                        <td><?php echo $product['material'] ?></td>
                        <td><?php echo $product['brand'] ?></td>
                        <td><?php echo $product['insurance'] ?></td>
                        <td><?php echo $product['shipp'] ?></td>
                        <td><a href="index.php?page=product-update&id=<?php echo $product['id']?>" type="button" class="btn btn-warning">Edit</a></td>
                        <td><a onclick="return confirm('Ban chac muon xoa ?')" href="index.php?page=product-delete&id=<?php echo $product['id']?>" type="button" class="btn btn-danger">Delete</a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
