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
                                <th scope="col">Username</th>
                                <th scope="col">Email</th>
                                <th scope="col">Password</th>
                                <th scope="col">Joining Date</th>
                                <th scope="col">Edit Product</th>
                                <th scope="col">Delete Product</th>
                            </tr>
                        </thead>


                        <tbody>
                            <?php
                                $query = $pdo->query("select * from users ");
                                $row = $query->fetchAll(PDO::FETCH_ASSOC);
                                foreach($row as $AllUsers){
                                    ?>

                                    <tr>
                                        <th scope="row"><?php echo $AllUsers["Id"] ?></th>
                                        <td> <?php echo $AllUsers["Name"] ?> </td>
                                        <td> <?php echo $AllUsers["Username"] ?> </td>
                                        <td> <?php echo $AllUsers["Email"] ?> </td>
                                        <td> <?php echo $AllUsers["Password"] ?> </td>
                                        <td> <?php echo $AllUsers["join_user"] ?> </td>
                                        <td><a href="edit-user.php?edit_user=<?php echo $AllUsers['Id']  ?>" class=" badge bg-primary-subtle text-primary">Edit</a></td>
                                        <td><a href="?del_user=<?php echo $AllUsers['Id'] ?>" class="badge bg-danger-subtle text-danger">Delete</a></td>
                                                        
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