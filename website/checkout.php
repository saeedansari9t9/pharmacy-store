<?php
include("includes/header.php");

if (isset($_SESSION['UserId'])) {
    $user_id = $_SESSION['UserId'];
} else {
    $user_id = '';
    echo "<script> location.assign('login.php') </script>";
}

if (isset($_POST['place_order'])) {

    $name = filter_var($_POST['fname'] . ', ' . $_POST['lname'], FILTER_SANITIZE_STRING);
    $number = filter_var($_POST['number'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $method = filter_var($_POST['method'], FILTER_SANITIZE_STRING);
    $address = filter_var($_POST['address1'] . ', ' . $_POST['address2'], FILTER_SANITIZE_STRING);
    $total_price = filter_var($_POST['total_price'], FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

    // Check if cart is not empty
    if (!empty($_SESSION['cart'])) {

        if ($address == '') {
            $message[] = 'Please add your address!';
        } else {
            // Insert each product into the orders table
            foreach ($_SESSION['cart'] as $item) {
                $product_id = $item['id'];
                $product_name = $item['name'];
                $product_quantity = $item['quantity'];
                $product_price = $item['price'];
                $total_product_price = $product_price * $product_quantity;

                // Insert order into the database
                $insert_order = $pdo->prepare("INSERT INTO `orders`(user_id, name, number, email, method, address, prod_id, quantity, total_price) VALUES(?,?,?,?,?,?,?,?,?)");
                $insert_order->execute([$user_id, $name, $number, $email, $method, $address, $product_id, $product_quantity, $total_product_price]);
            }

            // Clear cart session after order is placed
            unset($_SESSION['cart']);

            // $message[] = 'Order placed successfully!';
            $_SESSION['order_message'] = 'Order placed successfully!';
            echo "<script> location.assign('product.php') </script>";
        }
    } else {
        $message[] = 'Your cart is empty';
    }
}





?>

<main>
    <!-- Checkout Area -->
    <section class="checkout-area section-space">
        <div class="container">
            <form action="" method="post">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="checkbox-form">
                            <h3 class="mb-15">Billing Details</h3>
                            <div class="row g-5">
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>First Name </label>
                                        <input type="text" name="fname" placeholder="Enter Your Name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Last Name </label>
                                        <input type="text" name="lname" placeholder="Enter Your Name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Number </label>
                                        <input type="number" name="number" placeholder="Enter Your Number" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Email</label>
                                        <input type="email" name="email" placeholder="Enter Your Email" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Address 1</label>
                                        <input type="text" name="address1" placeholder="Enter Your Address" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Address 2</label>
                                        <input type="text" name="address2" placeholder="Enter Your Address" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="country-select">
                                        <label>Payment Method</label>
                                        <select name="method" required>
                                            <option value="cash on delivery" disabled selected>Select Payment Method</option>
                                            <option value="cash on delivery">Cash On Delivery</option>
                                            <option value="easypaisa" disabled>Easypaisa</option>
                                            <option value="jazzcash" disabled>Jazzcash</option>
                                            <option value="bank account" disabled>Bank Account</option>
                                        </select>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="your-order">
                            <h3>Your order</h3>
                            <div class="your-order-table table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product-name">Product</th>
                                            <th class="product-total">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $grand_total = 0;
                                        $cart_items = [];
                                        if (!empty($_SESSION['cart'])) {
                                            foreach ($_SESSION['cart'] as $item) {
                                                $cart_items[] = $item['name'] . ' (' . $item['price'] . ' x ' . $item['quantity'] . ')';
                                                $total_products = implode($cart_items);
                                                $grand_total += ($item['price'] * $item['quantity']);
                                        ?>
                                                <tr class="cart_item">
                                                    <td class="product-name"><?= $item['name']; ?><strong class="product-quantity"> × <?= $item['quantity']; ?></strong></td>
                                                    <td class="product-total"><span class="amount">Rs. <?= $item['price']; ?></span></td>
                                                </tr>
                                        <?php
                                            }
                                        } else {
                                            echo '<tr><td colspan="2" class="empty">Your cart is empty!</td></tr>';
                                        }
                                        ?>
                                    </tbody>
                                    <tfoot>
                                        <tr class="cart-subtotal">
                                            <th>Cart Subtotal</th>
                                            <td><span class="amount">Rs. <?= $grand_total; ?></span></td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Order Total</th>
                                            <td><strong><span class="amount">Rs. <?= $grand_total; ?></span></strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <input type="hidden" name="total_products" value="<?= $total_products; ?>">
                            <input type="hidden" name="total_price" value="<?= $grand_total; ?>">
                            <div class="payment-method">
                                <div class="order-button-payment mt-20">
                                    <button class="fill-btn" type="submit" name="place_order">
                                        <span class="fill-btn-inner">
                                            <span class="fill-btn-normal">Place order</span>
                                            <span class="fill-btn-hover">Place order</span>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
</main>

<?php
include("includes/footer.php");
?>
