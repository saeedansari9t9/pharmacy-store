<?php
include("includes/header.php");

if(!isset($_SESSION["AdminEmail"])) {
    echo "<script>alert('Please Login First.....');
	location.assign('login.php') </script>";
}

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
                                <th scope="col">Edit Product</th>
                                <th scope="col">Delete Product</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                                // Modified query to join category and company tables
                                $query = $pdo->query("
                                    SELECT p.product_id, p.product_name, p.description, p.price, p.quantity, p.image,
                                           c.category_name, comp.company_name
                                    FROM product p
                                    JOIN category c ON p.category_id = c.category_id
                                    JOIN company comp ON p.company_id = comp.company_id
                                ");
                                
                                $row = $query->fetchAll(PDO::FETCH_ASSOC);
                                
                                foreach($row as $AllProducts){
                                    ?>

                                    <tr>
                                        <th scope="row"><?php echo $AllProducts["product_id"] ?></th>
                                        <td> <?php echo $AllProducts["product_name"] ?> </td>
                                        <td> <?php echo $AllProducts["description"] ?> </td>
                                        <td> <?php echo $AllProducts["price"] ?> </td>
                                        <td> <?php echo $AllProducts["quantity"] ?> </td>
                                        <td> <img src="assets/images/products-images/<?php echo $AllProducts["image"] ?>" width="50" alt=""> </td>
                                        <td> <?php echo $AllProducts["category_name"] ?> </td>
                                        <td> <?php echo $AllProducts["company_name"] ?> </td>
                                        <td><a href="edit-product.php?edit_product=<?php echo $AllProducts['product_id'] ?>" class="badge bg-primary-subtle text-primary">Edit</a></td>
                                        <td><a href="?del_product=<?php echo $AllProducts['product_id'] ?>" class="badge bg-danger-subtle text-danger">Delete</a></td>
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
