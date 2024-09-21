<?php
include("includes/header.php");

if(!isset($_SESSION["AdminEmail"])) {
    echo "<script>alert('Please Login First.....');
	location.assign('login.php') </script>";
}

if(isset($_GET['edit_company'])){
    $company_id = $_GET["edit_company"];
    $query = $pdo->prepare("select * from company where company_id = :cid");
    $query->bindParam("cid",$company_id);
    $query->execute();
    $company_data = $query->fetch(PDO::FETCH_ASSOC);
}

?>

<div class="container form-product">
    <!-- Start Content-->
    <div class="container-fluid form-product">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class=".card-title">Edit Company</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="">
                                <form method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?php echo $company_data['company_id'] ?>">
                                    <div class="mb-3">
                                        <label for="simpleinput" class="form-label">Company Name</label>
                                        <input type="text" name="name" id="simpleinput" value="<?php echo $company_data['company_name'] ?>" class="form-control">
                                    </div>

                                    
                                    <div class="mb-3">
                                        <label for="example-fileinput" class="form-label">Company Logo</label>
                                        <input type="file" name="image" id="example-fileinput" class="form-control">
                                        <img src="assets/images/products-images/<?php echo $company_data['company_logo'] ?>" width="200px" alt="">
                                    </div>
                                    <button type="submit" name="edit-company" class="btn btn-primary">Submit</button>
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
