<?php
include("includes/header.php");

if(!isset($_SESSION["AdminEmail"])) {
    echo "<script>alert('Please Login First.....');
	location.assign('login.php') </script>";
}

if(isset($_GET['edit_category'])){
    $category_id = $_GET["edit_category"];
    $query = $pdo->prepare("select * from category where category_id = :cid");
    $query->bindParam("cid",$category_id);
    $query->execute();
    $category_data = $query->fetch(PDO::FETCH_ASSOC);
}

?>

<div class="container form-product">
    <!-- Start Content-->
    <div class="container-fluid form-product">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class=".card-title">Edit Category</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="">
                                <form method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="<?php echo $category_data['category_id'] ?>">
                                    <div class="mb-3">
                                        <label for="simpleinput" class="form-label">Category Name</label>
                                        <input type="text" name="name" id="simpleinput" class="form-control" value="<?php echo $category_data['category_name'] ?>">
                                    </div>

                                    
                                    <div class="mb-3">
                                        <label for="example-fileinput" class="form-label">Category Image</label>
                                        <input type="file" name="image" id="example-fileinput" class="form-control">
                                        <img src="assets/images/category-images/<?php echo $category_data['category_image']; ?>" width="200px" alt="">
                                    </div>
                                    <button type="submit" name="edit-category" class="btn btn-primary">Submit</button>
                                </form>
                            </div> <!-- end col -->
                            
                        </div>
                        <!-- end row-->
                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div> <!-- container -->
</div>




<?php
include("includes/footer.php")
?>
