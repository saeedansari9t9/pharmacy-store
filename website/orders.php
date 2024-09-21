<?php
include("includes/header.php");

// Check if the user is logged in
if (!isset($_SESSION['UserEmail'])) {
    echo "<script>
    alert('You need to log in to view your orders.');
    location.assign('login.php') </script>";
    exit;
}

$userEmail = $_SESSION['UserEmail'];

// Prepare the SQL query to filter orders based on the logged-in user's email
$query = $pdo->prepare("
    SELECT orders.*, product.product_name, product.image 
    FROM orders
    INNER JOIN product ON orders.prod_id = product.product_id
    INNER JOIN users ON orders.user_id = users.Id
    WHERE users.Email = :email
");
$query->execute(['email' => $userEmail]);
$row = $query->fetchAll(PDO::FETCH_ASSOC);
?>


?>
   <!-- Body main wrapper start -->
   <main>

      <!-- Breadcrumb area start  -->
      <div class="breadcrumb__area theme-bg-1 p-relative z-index-11 pt-95 pb-95">
         <div class="breadcrumb__thumb" data-background="assets/imgs/bg/breadcrumb-pharmacy.jpg"></div>
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-xxl-12">
                  <div class="breadcrumb__wrapper text-center">
                     <h2 class="breadcrumb__title">My Orders</h2>
                     <div class="breadcrumb__menu">
                        <nav>
                           <ul>
                              <li><span><a href="index.html">Home</a></span></li>
                              <li><span>Orders</span></li>
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Breadcrumb area start  -->

      <!-- Cart area start  -->
      <div class="cart-area section-space">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <div class="table-content table-responsive">
                     <table class="table">
                        <thead>
                           <tr>
                              <th class="product-thumbnail">Order Id</th>
                              <th class="product-thumbnail">Images</th>
                              <th class="cart-product-name">Product Name</th>
                              <!-- <th class="product-price">Price</th> -->
                              <th class="product-quantity">Quantity</th>
                              <th class="product-subtotal">Total Price</th>
                              <th class="product-remove">Status</th>
                           </tr>
                        </thead>
                        <tbody>
                        <?php
                                
                                foreach($row as $AllOrders){
                                    ?>
                                    
                                    <tr>
                                        <td><?php echo $AllOrders["order_id"] ?></td>
                              <td class="product-thumbnail">
                              <img src="../admin-portal/assets/images/products-images/<?php echo $AllOrders['image']; ?>" alt="Product Image">
                              </td>
                              <td class="product-name"><a href="pharmacy-details.html"><?php echo $AllOrders["product_name"] ?></a></td>
                              <td><?php echo $AllOrders["quantity"] ?></td>
                              <td class="product-subtotal"><span class="amount"><?php echo $AllOrders["total_price"] ?></span></td>
                              <td><?php echo $AllOrders["status"] ?></td>
                           </tr>


                                    <?php

                                }
                                    ?>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Cart area end  -->

   </main>
   <!-- Body main wrapper end -->

<?php
include("includes/footer.php");
?>