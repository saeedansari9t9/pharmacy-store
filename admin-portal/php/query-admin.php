<?php
session_start();
// session_unset();
include("connection-admin.php");


//Sign Up
if(isset($_POST['signup'])){

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = $pdo->prepare('insert into admin (username,email,password)  values(:pun,:pe,:pp)');
    
    $query->bindParam("pun",$username); 
    $query->bindParam("pe",$email); 
    $query->bindParam("pp",$password); 
    $query->execute();

    echo "<script> alert('Sign Up Successfully....');
    location.assign('login.php') </script>"; 
}

//Sign In
if(isset($_POST["login"])){

    $email = $_POST['email']; 
    $password = $_POST['password'];
    $query = $pdo->prepare("select * from admin WHERE email = :pe and password = :pp");
    $query->bindParam(":pe", $email); 
    $query->bindParam(":pp", $password);
    $query->execute();
    $row = $query->fetch(PDO::FETCH_ASSOC);

    if($row){

        $_SESSION["AdminId"] = $row["admin-id"];
        $_SESSION["AdminUsername"] = $row["username"];
        $_SESSION["AdminEmail"] = $row["email"];
        $_SESSION["AdminPassword"] = $row["password"];

        echo "<script>alert('logged in successfully.');
         location.assign('index.php') </script>";
        
    } else {
        echo "<script>alert('Invalid email or password.');</script>";
    }
}

//Add Company
if(isset($_POST['add-company'])){

    $name = $_POST['name'];

    $image = $_FILES["image"]["name"];
    $tmp_name = $_FILES["image"]["tmp_name"];
    $extension = pathinfo($image, PATHINFO_EXTENSION);
    $designation = "assets/images/company-logo/" .$image;
    if($extension == "jpg" || $extension == "jpeg" || $extension == "png" || $extension == "webp"){
        if(move_uploaded_file($tmp_name,$designation)){
            $query = $pdo->prepare("insert into company (company_name,company_logo)  values(:pcn,:pcl)");
            $query->bindParam("pcn",$name);
            $query->bindParam("pcl",$image); 
            $query->execute();
            
            echo "<script> alert('Company Added Successfully....');
            location.assign('add-company.php') </script>";
        
        }
        else{
            echo "<script> alert('File Format Error...'); </script>";
        }
    }
    else{
        echo "<script> alert('Invalid file format.'); </script>";
    } 

}

//Add Category
if(isset($_POST['add-category'])){

    $name = $_POST['name'];
    $query = $pdo->prepare("insert into category (category_name)  values(:pcn)");
    $query->bindParam("pcn",$name);
    $query->execute();
            
    echo "<script> alert('Category Added Successfully....');
    location.assign('add-category.php') </script>";
        
}

//Add Product
if(isset($_POST['add-product'])){

    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $category_id = $_POST['category_id'];
    $company_id = $_POST['company_id'];

    $image = $_FILES["image"]["name"];
    $tmp_name = $_FILES["image"]["tmp_name"];
    $extension = pathinfo($image, PATHINFO_EXTENSION);
    $designation = "assets/images/products-images/" .$image;
    if($extension == "jpg" || $extension == "jpeg" || $extension == "png" || $extension == "webp"){
        if(move_uploaded_file($tmp_name,$designation)){
            $query = $pdo->prepare("insert into product (name,description,price,quantity,image,category_id,company_id)  values(:pn,:pd,:pp,:pq,:pi,:pcat,:pcom)");
            $query->bindParam("pn",$name); 
            $query->bindParam("pd",$description); 
            $query->bindParam("pp",$price); 
            $query->bindParam("pq",$quantity); 
            $query->bindParam("pi",$image); 
            $query->bindParam("pcat",$category_id); 
            $query->bindParam("pcom",$company_id); 
            $query->execute();
            
            echo "<script> alert('Product Added Successfully....');
            location.assign('add-product.php') </script>";
        
        }
        else{
            echo "<script> alert('File Format Error...'); </script>";
        }
    }
    else{
        echo "<script> alert('Invalid file format.'); </script>";
    } 

}

//Edit Product
if(isset($_POST["Edit-Product"])){

    $product_id = $_POST['product_id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $category_id = $_POST['category_id'];
    $company_id = $_POST['company_id'];

    if(!empty($_FILES["image"]["name"])){
        $image = $_FILES["image"]["name"];
        $tmp_name = $_FILES["image"]["tmp_name"];
        $extension = pathinfo($image, PATHINFO_EXTENSION);
        $designation = "assets/images/products-images/" .$image;
        if($extension == "jpg" || $extension == "jpeg" || $extension == "png" || $extension == "webp"){
        if(move_uploaded_file($tmp_name,$designation)){
            $query = $pdo->prepare("update product set name = :pn , description = :pd , price = :pp , quantity = :pq , category_id = :pcat , company_id = :pcom , image = :pim  where product_id = :pid");
            $query->bindParam("pid", $product_id);
            $query->bindParam("pn",$name); 
            $query->bindParam("pd",$description); 
            $query->bindParam("pp",$price); 
            $query->bindParam("pq",$quantity); 
            $query->bindParam("pcat",$category_id); 
            $query->bindParam("pcom",$company_id); 
            $query->bindParam("pim",$image); 
            $query->execute();
            echo "<script> alert('Product Detail Edited Successfully...');
            location.assign('view-product.php')</script>";
        
            }
        }else{
            echo "<script> alert('Not Acceptable') </script>";
        }
    }else{
        $query = $pdo->prepare("update product set name = :pn , description = :pd , price = :pp , quantity = :pq , category_id = :pcat , company_id = :pcom , image = :pim  where product_id = :pid");
            $query->bindParam("pid", $product_id);    
            $query->bindParam("pn",$name); 
            $query->bindParam("pd",$description); 
            $query->bindParam("pp",$price); 
            $query->bindParam("pq",$quantity); 
            $query->bindParam("pcat",$category_id); 
            $query->bindParam("pcom",$company_id); 
            $query->bindParam("pim",$image); 
            $query->execute();  
            echo "<script> alert('Product Details Edited Successfully...');
            location.assign('view-product.php')</script>";
    }
}

//Delete Product
if(isset($_GET['del_product'])){
    $delete_product = $_GET['del_product'];
    $query = $pdo->prepare("delete from product where product_id = :pid");
    $query->bindParam("pid",$delete_product);
    $query->execute();
    echo '<script>';
    echo 'if(confirm("Are you sure you want to delete this product?")) {';
    echo 'window.location.href = "view-product.php?product-delete=true&product_id='.$delete_product.'";';
    echo '} else {';
    echo 'window.location.href = "view-product.php";';
    echo '}';
    echo '</script>';
}
// After user confirms deletion
if(isset($_GET['product-delete']) && $_GET['product-delete'] === 'true') {
    $product_id = $_GET['product_id'];
    $query = $pdo->prepare("DELETE FROM product WHERE product_id = :id");
    $query->bindParam("id", $product_id);
    $query->execute();
    echo "<script> alert('Product Deleted') </script>";
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $productId = $_POST['id'];
    $productName = $_POST['name'];
    $productPrice = $_POST['price'];

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    $product = [
        'id' => $productId,
        'name' => $productName,
        'price' => $productPrice,
        'quantity' => 1
    ];

    // Check if product already in cart
    $found = false;
    foreach ($_SESSION['cart'] as &$item) {
        if ($item['id'] == $productId) {
            $item['quantity'] += 1;
            $found = true;
            break;
        }
    }

    if (!$found) {
        $_SESSION['cart'][] = $product;
    }

    echo json_encode($_SESSION['cart']);
}


if (isset($_GET['product_id'])) {
    $productId = $_GET['product_id'];

    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $key => $item) {
            if ($item['id'] == $productId) {
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart'] = array_values($_SESSION['cart']);
                break;
            }
        }
    }
}

header("Location: cart.php");
exit();
