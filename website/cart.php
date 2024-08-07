<?php
include("includes/header.php");
?>

<!-- Body main wrapper start -->
<main>
    <!-- Breadcrumb area start  -->
    <div class="head-cart">
        <h2>
            SHOPPING CART
        </h2>
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
                                    <th class="product-thumbnail">Images</th>
                                    <th class="cart-product-name">Product</th>
                                    <th class="product-price">Unit Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-subtotal">Total</th>
                                    <th class="product-remove">Remove</th>
                                </tr>
                            </thead>
                            <tbody id="cart-items">
                            <?php
                            if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                            foreach ($_SESSION['cart'] as $item) {
                            ?>
                            <tr>
                                <td class='product-thumbnail'>
                                    <a href='pharmacy-details.html'>
                                        <img src='../admin-portal/assets/images/products-images/<?php echo $item['image']; ?>' alt='img'>
                                    </a>
                                </td>
                                <td class='product-name'>
                                    <a href='pharmacy-details.html'>
                                        <?php echo $item['name']; ?>
                                    </a>
                                </td>
                                <td class='product-price'>
                                    <span class='amount'>
                                        <?php echo $item['price']; ?>
                                    </span>
                                </td>
                                <td class='product-quantity text-center'>
                                    <div class='product-quantity mt-10 mb-10'>
                                        <div class='product-quantity-form'>
                                            <form action='#'>
                                                <button class='cart-minus'>
                                                    <i class='far fa-minus'></i>
                                                </button>
                                                <input class='cart-input' type='text' value='<?php echo $item['quantity']; ?>' data-price='<?php echo $item['price']; ?>' data-item-id="<?php echo $item['id'] ?>" max="<?php echo $item['maxQuantity'] ?>">
                                                <button class='cart-plus'>
                                                    <i class='far fa-plus'></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                                <td class='product-subtotal'>
                                    <span class='amount'>
                                        <?php echo $item['price'] * $item['quantity']; ?>
                                    </span>
                                </td>
                                <td class='product-remove'>
                                    <button type="button" class="remove-item" data-item-id="<?php echo $item['id'] ?>">
                                    <i class="fa-solid fa-trash" style="color: #d60000;"></i>
                                    </button>
                                </td>
                            </tr>
                            <?php
                            }
                            } else {
                                echo "<tr><td colspan='6' class='text-center'>Your cart is empty.</td></tr>";
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- <div class="row">
                        <div class="col-12">
                            <div class="coupon-all">
                                <div class="coupon2">
                                    <button onclick="window.location.reload()" class="fill-btn" type="submit">
                                        <span class="fill-btn-inner">
                                            <span class="fill-btn-normal">Update cart</span>
                                            <span class="fill-btn-hover">Update cart</span>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="row">
                        <div class="col-lg-6 ml-auto">
                            <div class="cart-page-total">
                                <h2>Cart totals</h2>
                                <ul class="mb-20">
                                    <?php
                                    $subtotal = 0;
                                    if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                                        foreach ($_SESSION['cart'] as $item) {
                                            $subtotal += $item['price'] * $item['quantity'];
                                        }
                                    }
                                    ?>
                                       <li>Subtotal <span id="subtotal">Rs. <?php echo number_format($subtotal, 2); ?></span></li>
                                       <li>Total <span id="total">Rs. <?php echo number_format($subtotal, 2); ?></span></li>
                                </ul>
                                <a class="fill-btn" href="checkout.html">
                                    <span class="fill-btn-inner">
                                        <span class="fill-btn-normal">Proceed to checkout</span>
                                        <span class="fill-btn-hover">Proceed to checkout</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 ml-auto">
                            <div class="coupon-all">
                                <div class="coupon2">
                                    <button onclick="window.location.reload()" class="fill-btn" type="submit">
                                        <span class="fill-btn-inner">
                                            <span class="fill-btn-normal">Update cart</span>
                                            <span class="fill-btn-hover">Update cart</span>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
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