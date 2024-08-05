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


