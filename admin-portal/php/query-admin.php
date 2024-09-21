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

        $_SESSION["AdminId"] = $row["admin_id"];
        $_SESSION["AdminUsername"] = $row["username"];
        $_SESSION["AdminEmail"] = $row["email"];
        $_SESSION["AdminPassword"] = $row["password"];

        echo "<script>alert('logged in successfully.');
         location.assign('index.php') </script>";
        
    } else {
        echo "<script>alert('Invalid email or password.');</script>";
    }
}

if (isset($_POST['edit-user'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = $pdo->prepare("UPDATE users SET Name = :name, Username = :username, Email = :email, Password = :password WHERE Id = :id");
    $query->bindParam(':name', $name);
    $query->bindParam(':username', $username);
    $query->bindParam(':email', $email);
    $query->bindParam(':password', $password);
    $query->bindParam(':id', $id);

    if ($query->execute()) {
        echo "<script>alert('User details updated successfully!'); window.location.href = 'view-users.php';</script>";
    } else {
        echo "<script>alert('Error updating user details!');</script>";
    }

}

// Check if deletion is requested
if (isset($_GET['del_user'])) {
    $delete_user = $_GET['del_user'];
    echo '<script>';
    echo 'if(confirm("Are you sure you want to delete this user?")) {';
    echo 'window.location.href = "view-users.php?user-delete=true&Id='.$delete_user.'";';
    echo '} else {';
    echo 'window.location.href = "view-users.php";';
    echo '}';
    echo '</script>';
}

// After user confirms deletion
if (isset($_GET['user-delete']) && $_GET['user-delete'] === 'true') {
    $user_id = $_GET['Id'];
    $query = $pdo->prepare("DELETE FROM users WHERE Id = :id");
    $query->bindParam("id", $user_id);
    $query->execute();
    echo "<script> alert('User Deleted'); window.location.href = 'view-users.php'; </script>";
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
            location.assign('view-company.php') </script>";
        
        }
        else{
            echo "<script> alert('File Format Error...'); </script>";
        }
    }
    else{
        echo "<script> alert('Invalid file format.'); </script>";
    } 

}

// Edit Company
if(isset($_POST["edit-company"])){

    $comp_id = $_POST['id'];
    $comname = $_POST['name'];

    // Handle image upload
    if(!empty($_FILES["image"]["name"])){
        $image = $_FILES["image"]["name"];
        $tmp_name = $_FILES["image"]["tmp_name"];
        $extension = pathinfo($image, PATHINFO_EXTENSION);
        $designation = "assets/images/company-logo/" .$image;
        if($extension == "jpg" || $extension == "jpeg" || $extension == "png" || $extension == "webp"){
            if(move_uploaded_file($tmp_name,$designation)){
                // Update query including the image
                $query = $pdo->prepare("UPDATE company SET company_name = :pcn, company_logo = :pcl WHERE company_id = :pcid");
                $query->bindParam("pcl", $image);
            } else {
                echo "<script> alert('Image upload failed') </script>";
                exit;
            }
        } else {
            echo "<script> alert('Invalid image format') </script>";
            exit;
        }
    } else {
        // Update query without the image
        $query = $pdo->prepare("UPDATE company SET company_name = :pcn WHERE company_id = :pcid");
    }

    // Bind the remaining parameters
    $query->bindParam("pcid", $comp_id);
    $query->bindParam("pcn", $comname);
    // Execute the query
    $query->execute();

    echo "<script> alert('Company Edited Successfully...'); location.assign('view-company.php')</script>";
}

//Add Category
if(isset($_POST['add-category'])){

    $catname = $_POST['name'];

    $catimage = $_FILES["image"]["name"];
    $tmp_name = $_FILES["image"]["tmp_name"];
    $extension = pathinfo($catimage, PATHINFO_EXTENSION);
    $designation = "assets/images/category-images/" .$catimage;
    if($extension == "jpg" || $extension == "jpeg" || $extension == "png" || $extension == "webp"){
        if(move_uploaded_file($tmp_name,$designation)){
            $query = $pdo->prepare("insert into category (category_name,category_image)  values(:pcn,:pci)");
            $query->bindParam("pcn",$catname);
            $query->bindParam("pci",$catimage);
            $query->execute();
                    
            echo "<script> alert('Category Added Successfully....');
            location.assign('add-category.php') </script>";
        }else{
            echo "<script> alert('File Format Error...'); </script>";
        }
    }
    else{
        echo "<script> alert('Invalid file format.'); </script>";
    } 
}

// Edit Product
if(isset($_POST["edit-category"])){

    $cate_id = $_POST['id'];
    $catname = $_POST['name'];

    // Handle image upload
    if(!empty($_FILES["image"]["name"])){
        $image = $_FILES["image"]["name"];
        $tmp_name = $_FILES["image"]["tmp_name"];
        $extension = pathinfo($image, PATHINFO_EXTENSION);
        $designation = "assets/images/category-images/" .$image;
        if($extension == "jpg" || $extension == "jpeg" || $extension == "png" || $extension == "webp"){
            if(move_uploaded_file($tmp_name,$designation)){
                // Update query including the image
                $query = $pdo->prepare("UPDATE category SET category_name = :pcn, category_image = :pcim WHERE category_id = :pcid");
                $query->bindParam("pcim", $image);
            } else {
                echo "<script> alert('Image upload failed') </script>";
                exit;
            }
        } else {
            echo "<script> alert('Invalid image format') </script>";
            exit;
        }
    } else {
        // Update query without the image
        $query = $pdo->prepare("UPDATE category SET category_name = :pcn WHERE category_id = :pcid");
    }

    // Bind the remaining parameters
    $query->bindParam("pcid", $cate_id);
    $query->bindParam("pcn", $catname);
    // Execute the query
    $query->execute();

    echo "<script> alert('Category Edited Successfully...'); location.assign('view-category.php')</script>";
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
            $query = $pdo->prepare("insert into product (product_name,description,price,quantity,image,category_id,company_id)  values(:pn,:pd,:pp,:pq,:pi,:pcat,:pcom)");
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

// Edit Product
if(isset($_POST["Edit-Product"])){

    $product_id = $_POST['product_id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $category_id = $_POST['category_id'];
    $company_id = $_POST['company_id'];

    // Handle image upload
    if(!empty($_FILES["image"]["name"])){
        $image = $_FILES["image"]["name"];
        $tmp_name = $_FILES["image"]["tmp_name"];
        $extension = pathinfo($image, PATHINFO_EXTENSION);
        $designation = "assets/images/products-images/" .$image;
        if($extension == "jpg" || $extension == "jpeg" || $extension == "png" || $extension == "webp"){
            if(move_uploaded_file($tmp_name,$designation)){
                // Update query including the image
                $query = $pdo->prepare("UPDATE product SET product_name = :pn, description = :pd, price = :pp, quantity = :pq, category_id = :pcat, company_id = :pcom, image = :pim WHERE product_id = :pid");
                $query->bindParam("pim", $image); 
            } else {
                echo "<script> alert('Image upload failed') </script>";
                exit;
            }
        } else {
            echo "<script> alert('Invalid image format') </script>";
            exit;
        }
    } else {
        // Update query without the image
        $query = $pdo->prepare("UPDATE product SET product_name = :pn, description = :pd, price = :pp, quantity = :pq, category_id = :pcat, company_id = :pcom WHERE product_id = :pid");
    }

    // Bind the remaining parameters
    $query->bindParam("pid", $product_id);
    $query->bindParam("pn", $name); 
    $query->bindParam("pd", $description); 
    $query->bindParam("pp", $price); 
    $query->bindParam("pq", $quantity); 
    $query->bindParam("pcat", $category_id); 
    $query->bindParam("pcom", $company_id); 

    // Execute the query
    $query->execute();

    echo "<script> alert('Product Details Edited Successfully...'); location.assign('view-product.php')</script>";
}

//Delete Product
if(isset($_GET['del_product'])){
    $delete_product = $_GET['del_product'];
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

//Delete Category
if(isset($_GET['del_category'])){
    $delete_cat = $_GET['del_category'];
    echo '<script>';
    echo 'if(confirm("Are you sure you want to delete this category?")) {';
    echo 'window.location.href = "view-category.php?category-delete=true&category_id='.$delete_cat.'";';
    echo '} else {';
    echo 'window.location.href = "view-category.php";';
    echo '}';
    echo '</script>';
    
}
// After user confirms deletion
if(isset($_GET['category-delete']) && $_GET['category-delete'] === 'true') {
    $cate_id = $_GET['category_id'];
    $query = $pdo->prepare("DELETE FROM category WHERE category_id = :id");
    $query->bindParam("id", $cate_id);
    $query->execute();
    echo "<script> alert('Category Deleted'); window.location.href = 'view-category.php'; </script>";
}


//Delete Company
if(isset($_GET['del_company'])){
    $delete_comp = $_GET['del_company'];
    echo '<script>';
    echo 'if(confirm("Are you sure you want to delete this company?")) {';
    echo 'window.location.href = "view-company.php?company-delete=true&company_id='.$delete_comp.'";';
    echo '} else {';
    echo 'window.location.href = "view-company.php";';
    echo '}';
    echo '</script>';
    
}
// After user confirms deletion
if(isset($_GET['company-delete']) && $_GET['company-delete'] === 'true') {
    $comp_id = $_GET['company_id'];
    $query = $pdo->prepare("DELETE FROM company WHERE company_id = :id");
    $query->bindParam("id", $comp_id);
    $query->execute();
    echo "<script> alert('Company Deleted'); window.location.href = 'view-company.php'; </script>";
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


// if (isset($_GET['product_id'])) {
//     $productId = $_GET['product_id'];

//     if (isset($_SESSION['cart'])) {
//         foreach ($_SESSION['cart'] as $key => $item) {
//             if ($item['id'] == $productId) {
//                 unset($_SESSION['cart'][$key]);
//                 $_SESSION['cart'] = array_values($_SESSION['cart']);
//                 break;
//             }
//         }
//     }
// }

// header("Location: cart.php");
// exit();
