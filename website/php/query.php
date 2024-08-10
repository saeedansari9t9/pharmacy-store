<?php
session_start();
// session_unset();
include("connection.php");


//Sign Up
if(isset($_POST['signup'])){

    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = $pdo->prepare('insert into users (Name,Username,Email,Password)  values(:pn,:pun,:pe,:pp)');
    
    $query->bindParam("pn",$name); 
    $query->bindParam("pun",$username); 
    $query->bindParam("pe",$email); 
    $query->bindParam("pp",$password); 
    $query->execute();

    echo "<script> alert('Sign Up Successfully....');
    location.assign('login.php') </script>"; 
}

//Sign In
if(isset($_POST["login"])){

    $username = $_POST['username']; 
    $password = $_POST['password'];
    $query = $pdo->prepare("select * from users WHERE Username = :pun and password = :pp");
    $query->bindParam(":pun", $username); 
    $query->bindParam(":pp", $password);
    $query->execute();
    $row = $query->fetch(PDO::FETCH_ASSOC);

    if($row){

        $_SESSION["UserId"] = $row["Id"];
        $_SESSION["UserName"] = $row["Name"];
        $_SESSION["UserUsername"] = $row["Username"];
        $_SESSION["UserEmail"] = $row["Email"];
        $_SESSION["UserPassword"] = $row["password"];

        echo "<script>alert('logged in successfully.');
         location.assign('index.php') </script>";
        
    } else {
        echo "<script>alert('Invalid username or password.');</script>";
    }
}

// this query for add to cart product by MK
if (isset($_POST['product_id']) && isset($_POST['product_name']) && isset($_POST['product_price']) && isset($_POST['product_image']) && isset($_POST['product_max_quantity'])) {
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $product_max_quantity = $_POST['product_max_quantity'];
    $product_quantity = isset($_POST['product_quantity']) ? intval($_POST['product_quantity']) : 1;
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }
    if (isset($_SESSION['cart'][$product_id])) {
        $_SESSION['cart'][$product_id]['quantity'] += $product_quantity;
    } else {
        $_SESSION['cart'][$product_id] = array(
            'id' => $product_id,
            'name' => $product_name,
            'price' => $product_price,
            'image' => $product_image,
            'quantity' => $product_quantity,
            'maxQuantity' => $product_max_quantity
        );
    }

    echo json_encode(array('status' => 'success', 'message' => "Product $product_name added to cart."));
} 

// this query for add to cart update quantity by MK
if (isset($_POST['item_id']) && isset($_POST['item_quantity'])) {
    $itemId = isset($_POST['item_id']) ? intval($_POST['item_id']) : 0;
    $quantity = isset($_POST['item_quantity']) ? intval($_POST['item_quantity']) : 0;
    if ($itemId > 0) {
        $_SESSION['cart'][$itemId]['quantity'] = $quantity;
        echo json_encode(['status' => 'success', 'message' => 'Item updated successfully']);
    }
} 

// this query for add to cart remove item by Mk
if (isset($_POST['item_id_2'])) {
    $itemId = isset($_POST['item_id_2']) ? intval($_POST['item_id_2']) : 0;
    if ($itemId > 0) {
        if (isset($_SESSION['cart']) && isset($_SESSION['cart'][$itemId])) {
            unset($_SESSION['cart'][$itemId]);
            $isEmpty = empty($_SESSION['cart']);
            echo json_encode(['status' => 'success', 'message' => 'Item removed successfully', 'isEmpty' => $isEmpty]);
        } 
    }
}

// Count Cart
$count = 0;

if(isset($_SESSION['cart'])){
    $count = count($_SESSION['cart']);
}
?>