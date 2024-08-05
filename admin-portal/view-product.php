<?php
include("includes/header.php")
?>



<div class="container form-product">
    <!-- Start Content-->
    <div class="container form-product">
        <div class="row">
        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <table id="basic-datatable" class="table table-striped dt-responsive nowrap w-100">
                                        <thead>
                                            <tr>
                                                <th scope="col">Id</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Description</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Quantity</th>
                                                <th scope="col">Image</th>
                                                <th scope="col">Category Name</th>
                                                <th scope="col">Company Name</th>
                                                <th scope="col" colspan="2">Status</th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                            <?php
                                                $query = $pdo->query("select * from product ");
                                                $row = $query->fetchAll(PDO::FETCH_ASSOC);
                                                foreach($row as $AllProducts){
                                                    ?>

                                                    <tr>
                                                        <th scope="row"><?php echo $AllProducts["product_id"] ?></th>
                                                        <td> <?php echo $AllProducts["name"] ?> </td>
                                                        <td> <?php echo $AllProducts["description"] ?> </td>
                                                        <td> <?php echo $AllProducts["price"] ?> </td>
                                                        <td> <?php echo $AllProducts["quantity"] ?> </td>
                                                        <td> <img src="assets/images/products-images/<?php echo $AllProducts["image"] ?>" width="50" alt=""> </td>
                                                        <td> <?php echo $AllProducts["category_id"] ?> </td>
                                                        <td> <?php echo $AllProducts["company_id"] ?> </td>
                                                        <td><a href="edit-product.php?edit_product=<?php echo $AllProducts['product_id']  ?>" class="itemm">Edit</a></td>
                                                        <td><a href="?del_product=<?php echo $AllProducts['product_id'] ?>" class="itemm">Delete</a></td>
                                                        
                                                    </tr>

                                                    <?php
                                                }
                                            ?>
                                        </tbody>
                                    </table>

                                </div> <!-- end card body-->
                            </div> <!-- end card -->
                        </div>
        </div><!-- end row -->
    </div> <!-- container -->
</div>




<?php
include("includes/footer.php")
?>