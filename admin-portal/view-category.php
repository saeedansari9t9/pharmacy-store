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
                                <th scope="col">Category Name</th>
                                <th scope="col">Category Image</th>
                                <th scope="col">Edit Category</th>
                                <th scope="col">Delete Category</th>
                            </tr>
                        </thead>


                        <tbody>
                            <?php
                                $query = $pdo->query("select * from category ");
                                $row = $query->fetchAll(PDO::FETCH_ASSOC);
                                foreach($row as $AllCategory){
                                    ?>

                                    <tr>
                                        <th scope="row"><?php echo $AllCategory["category_id"] ?></th>
                                        <td> <?php echo $AllCategory["category_name"] ?> </td>
                                        <td><img src="assets/images/category-images/<?php echo $AllCategory["category_image"] ?>" width="60px" alt=""></td>
                                        
                                        <td><a href="edit-category.php?edit_category=<?php echo $AllCategory['category_id']  ?>" class="badge bg-primary-subtle text-primary">Edit</a></td>
                                        <td><a href="?del_category=<?php echo $AllCategory['category_id'] ?>" class="badge bg-danger-subtle text-danger">Delete</a></td>
                                                        
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