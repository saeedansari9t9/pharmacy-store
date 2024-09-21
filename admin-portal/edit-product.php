<?php
include("includes/header.php");

if(!isset($_SESSION["AdminEmail"])) {
    echo "<script>alert('Please Login First.....');
	location.assign('login.php') </script>";
}

if(isset($_GET['edit_product'])){
    $product_id = $_GET["edit_product"];
    $query = $pdo->prepare("select * from product where product_id = :pid");
    $query->bindParam("pid",$product_id);
    $query->execute();
    $product_data = $query->fetch(PDO::FETCH_ASSOC);
}
?>

<div class="container form-product">
    <!-- Start Content-->
    <div class="container-fluid form-product">
        <div class="row">
            <div class="col-12">
                <div class="card  mb-5">
                    <div class="card-header">
                        <h2 class=".card-title">Edit Product</h2>
                    </div>
                    <div class="card-body">
                        <form method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-6">
                                <input type="hidden" name="product_id" value="<?php echo $product_data['product_id'] ?>">
                                    <div class="mb-3">
                                        <label for="simpleinput" class="form-label">Product Name</label>
                                        <input type="text" name="name" id="simpleinput" class="form-control" required value="<?php echo $product_data['product_name'] ?>">
                                    </div>

                                    <div class="mb-3">
                                        <label for="simpleinput" class="form-label">Product Price</label>
                                        <input type="number" name="price" id="simpleinput" class="form-control" required value="<?php echo $product_data['price'] ?>">
                                    </div>

                                    <div class="mb-3">
                                        <label for="example-select" class="form-label">Select Category</label>
                                        <select class="form-select" name="category_id" id="example-select" required>
                                            <option disabled>Select category</option>
                                            <?php
                                            $query = $pdo->query("select * from category");
                                            $all_data = $query->fetchAll(PDO::FETCH_ASSOC);
                                            foreach ($all_data as $category_data) {
                                                $selected = ($category_data['category_id'] == $product_data['category_id']) ? 'selected' : '';
                                                ?>
                                                <option value="<?php echo $category_data['category_id'] ?>" <?php echo $selected; ?>>
                                                    <?php echo $category_data['category_name'] ?>
                                                </option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>


                                    <div class="mb-3">
                                        <label for="example-fileinput" class="form-label">Product Image</label>
                                        <input type="file" name="image" id="example-fileinput" class="form-control" >
                                        <img src="assets/images/products-images/<?php echo $product_data['image'] ?>" alt="">
                                    </div>
                                </div> <!-- end col -->

                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="simpleinput" class="form-label">Product Description</label>
                                        <input type="text" name="description" id="simpleinput" class="form-control" required value="<?php echo $product_data['description'] ?>">
                                    </div>

                                    <div class="mb-3">
                                        <label for="simpleinput" class="form-label">Product Quantity</label>
                                        <input type="number" name="quantity" id="simpleinput" class="form-control" required value="<?php echo $product_data['quantity'] ?>">
                                    </div>

                                    <div class="mb-3">
                                        <label for="example-select" class="form-label">Select Company</label>
                                        <select class="form-select" name="company_id" id="example-select" required>
                                            <option disabled>Select company</option>
                                            <?php
                                            $query = $pdo->query("select * from company");
                                            $all_data = $query->fetchAll(PDO::FETCH_ASSOC);
                                            foreach ($all_data as $company_data) {
                                                $selected = ($company_data['company_id'] == $product_data['company_id']) ? 'selected' : '';
                                                ?>
                                                <option value="<?php echo $company_data['company_id'] ?>" <?php echo $selected; ?>>
                                                    <?php echo $company_data['company_name'] ?>
                                                </option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    </div>

                                </div> <!-- end col -->
                            </div> <!-- end row -->

                            <button type="submit" name="Edit-Product" class="btn btn-primary">Submit</button>
                        </form>
                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div> <!-- container -->
</div>


<?php 
include("includes/footer.php")
?>