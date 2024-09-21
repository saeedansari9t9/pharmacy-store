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
        <div class="col-lg-12">
            <div class="">
                <div class="">
                    <table id="basic-datatable" class="table table-striped dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">User Id</th>
                                <th scope="col">Username</th>
                                <th scope="col">Email</th>
                                <th scope="col">Address</th>
                                <th scope="col">Method</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Total Price</th>
                                <th scope="col">Status</th>
                                <th scope="col">Order Date</th>
                                <th scope="col">Edit Product</th>
                                <th scope="col">Delete Product</th>
                            </tr>
                        </thead>


                        <tbody>
                            <?php
                                $query = $pdo->query("select * from orders ");
                                $row = $query->fetchAll(PDO::FETCH_ASSOC);
                                foreach($row as $AllOrders){
                                    ?>

                                    <tr>
                                        <th scope="row"><?php echo $AllOrders["order_id"] ?></th>
                                        <td> <?php echo $AllOrders["user_id"] ?> </td>
                                        <td> <?php echo $AllOrders["name"] ?> </td>
                                        <td> <?php echo $AllOrders["email"] ?> </td>
                                        <td> <?php echo $AllOrders["address"] ?> </td>
                                        <td> <?php echo $AllOrders["method"] ?> </td>
                                        <td> <?php echo $AllOrders["prod_id"] ?> </td>
                                        <td> <?php echo $AllOrders["quantity"] ?> </td>
                                        <td> <?php echo $AllOrders["total_price"] ?> </td>
                                        <td> <?php echo $AllOrders["status"] ?> </td>
                                        <td> <?php echo $AllOrders["order_date"] ?> </td>
                                        <td><a href="edit-order.php?edit_order=<?php echo $AllOrders['order_id']  ?>" class=" badge bg-primary-subtle text-primary">Edit</a></td>
                                        <td><a href="?del_order=<?php echo $AllOrders['order_id'] ?>" class="badge bg-danger-subtle text-danger">Delete</a></td>
                                                        
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