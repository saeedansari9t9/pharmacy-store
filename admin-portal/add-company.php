<?php
include("includes/header.php");
?>

<div class="container form-product">
    <!-- Start Content-->
    <div class="container-fluid form-product">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class=".card-title">Add Company</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="">
                                <form method="post" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="simpleinput" class="form-label">Company Name</label>
                                        <input type="text" name="name" id="simpleinput" class="form-control">
                                    </div>

                                    
                                    <div class="mb-3">
                                        <label for="example-fileinput" class="form-label">Company Logo</label>
                                        <input type="file" name="image" id="example-fileinput" class="form-control">
                                    </div>
                                    <button type="submit" name="add-company" class="btn btn-primary">Submit</button>
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
