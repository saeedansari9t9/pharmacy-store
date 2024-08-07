<?php
include("php/query.php");


if(isset($_POST["input"])){
    $input = $_POST["input"];

    // Use a prepared statement to prevent SQL injection
    $query = "SELECT * FROM product WHERE name LIKE :input";

    // Prepare and execute the statement
    $stmt = $pdo->prepare($query);
    $stmt->execute(['input' => $input . '%']);

    // Check if any rows were returned
    if($stmt->rowCount() > 0) {
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $id = $row["product_id"];
            $name = $row["name"];
            echo "<p>$name</p>"; // Display the product name
        }
    } else {
        echo "<h6 class='text-danger text-center mt-3'>No Data Found</h6>";
    }
} else {
    echo "<h6 class='text-danger text-center mt-3'>No Data Found</h6>";
}

?>