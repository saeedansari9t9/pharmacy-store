<?php
include("includes/header.php");

if(!isset($_SESSION["AdminEmail"])) {
    echo "<script>alert('Please Login First.....');
	location.assign('login.php') </script>";
}

if(isset($_GET['edit_user'])){
    $user_id = $_GET["edit_user"];
    $query = $pdo->prepare("select * from users where Id = :uid");
    $query->bindParam("uid",$user_id);
    $query->execute();
    $user_data = $query->fetch(PDO::FETCH_ASSOC);
}

?>

<div class="container form-product">
    <!-- Start Content-->
    <div class="container-fluid form-product">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class=".card-title">Edit user</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="">
                                <form method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="<?php echo $user_data['Id'] ?>">
                                    <div class="mb-3">
                                        <label for="simpleinput" class="form-label">Name</label>
                                        <input type="text" name="name" id="simpleinput" class="form-control" value="<?php echo $user_data['Name'] ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="simpleinput" class="form-label">User Name</label>
                                        <input type="text" name="username" id="simpleinput" class="form-control" value="<?php echo $user_data['Username'] ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="simpleinput" class="form-label">Email</label>
                                        <input type="text" name="email" id="simpleinput" class="form-control" value="<?php echo $user_data['Email'] ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="simpleinput" class="form-label">Password</label>
                                        <input type="password" name="password" id="simpleinput" class="form-control" value="<?php echo $user_data['Password'] ?>">
                                    </div>

                                    <button type="submit" name="edit-user" class="btn btn-primary">Submit</button>
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
