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
                                <th scope="col">Company Name</th>
                                <th scope="col">Company Logo</th>
                                <th scope="col">Edit Company</th>
                                <th scope="col">Delete Company</th>
                            </tr>
                        </thead>


                        <tbody>
                            <?php
                                $query = $pdo->query("select * from company ");
                                $row = $query->fetchAll(PDO::FETCH_ASSOC);
                                foreach($row as $AllComp){
                                    ?>

                                    <tr>
                                        <th scope="row"><?php echo $AllComp["company_id"] ?></th>
                                        <td> <?php echo $AllComp["company_name"] ?> </td>
                                        <td><img src="assets/images/company-logo/<?php echo $AllComp["company_logo"] ?>" width="50" alt=""></td>
                                        <td><a href="edit-company.php?edit_company=<?php echo $AllComp['company_id']  ?>" class="badge bg-primary-subtle text-primary">Edit</a></td>
                                        <td><a href="?del_company=<?php echo $AllComp['company_id'] ?>" class="badge bg-danger-subtle text-danger">Delete</a></td>
                                                        
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