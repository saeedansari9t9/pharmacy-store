<?php
include("includes/header.php");

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
                        <h2 class="breadcrumb__title">Cart</h2>
                        <div class="breadcrumb__menu">
                            <nav>
                                <ul>
                                    <li><span><a href="index.html">Home</a></span></li>
                                    <li><span>Cart</span></li>
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
                                    <th class="product-thumbnail">Images</th>
                                    <th class="cart-product-name">Product</th>
                                    <th class="product-price">Unit Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-subtotal">Total</th>
                                    <th class="product-remove">Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                                    foreach ($_SESSION['cart'] as $item) {
                                        echo "<tr>
                                            <td class='product-thumbnail'><a href='pharmacy-details.html'><img src='assets/imgs/product/details/details-01.png' alt='img'></a></td>
                                            <td class='product-name'><a href='pharmacy-details.html'>{$item['name']}</a></td>
                                            <td class='product-price'><span class='amount'>{$item['price']}</span></td>
                                            <td class='product-quantity text-center'>
                                                <div class='product-quantity mt-10 mb-10'>
                                                    <div class='product-quantity-form'>
                                                        <form action='#'>
                                                            <button class='cart-minus'><i class='far fa-minus'></i></button>
                                                            <input class='cart-input' type='text' value='{$item['quantity']}'>
                                                            <button class='cart-plus'><i class='far fa-plus'></i></button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class='product-subtotal'><span class='amount'>" . ($item['price'] * $item['quantity']) . "</span></td>
                                            <td class='product-remove'><a href='remove_from_cart.php?id={$item['id']}'><i class='fa fa-times'></i></a></td>
                                        </tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='6' class='text-center'>Your cart is empty.</td></tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="coupon-all">
                                <div class="coupon d-flex align-items-center">
                                    <input id="coupon_code" class="input-text" name="coupon_code" placeholder="Coupon code" type="text">
                                    <button onclick="window.location.reload()" class="fill-btn" type="submit">
                                        <span class="fill-btn-inner">
                                            <span class="fill-btn-normal">apply coupon</span>
                                            <span class="fill-btn-hover">apply coupon</span>
                                        </span>
                                    </button>
                                </div>
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
                                    <li>Subtotal <span>$<?php echo number_format($subtotal, 2); ?></span></li>
                                    <li>Total <span>$<?php echo number_format($subtotal, 2); ?></span></li>
                                </ul>
                                <a class="fill-btn" href="checkout.html">
                                    <span class="fill-btn-inner">
                                        <span class="fill-btn-normal">Proceed to checkout</span>
                                        <span class="fill-btn-hover">Proceed to checkout</span>
                                    </span>
                                </a>
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
