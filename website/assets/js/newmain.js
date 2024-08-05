document.addEventListener("DOMContentLoaded", function() {
   // Get all the product action buttons
   const productButtons = document.querySelectorAll('.product-action-btn');

   // Add click event listeners to each button
   productButtons.forEach(button => {
       button.addEventListener('click', function() {
           // Get product data from data attributes
           const productName = this.getAttribute('data-name');
           const productImage = this.getAttribute('data-image');
           const productPrice = this.getAttribute('data-price');
           const productCategory = this.getAttribute('data-category');
           const productDescription = this.getAttribute('data-description');

           // Update the modal content
           document.getElementById('modal-product-name').textContent = productName;
           document.getElementById('modal-product-image').src = "../admin-portal/assets/images/products-images/" + productImage;
           document.getElementById('modal-product-price').textContent = "Rs. " + productPrice;
           document.getElementById('modal-product-category').textContent = productCategory;
           document.getElementById('modal-product-description').textContent = productDescription;

           // Update the "Add to Cart" button data attribute
           document.getElementById('modal-add-to-cart').setAttribute('data-id', productId);
       });
   });
});


document.getElementById('modal-add-to-cart').addEventListener('click', function() {
    var button = this;
    var productId = button.getAttribute('data-id');
    var productName = button.getAttribute('data-name');
    var productPrice = button.getAttribute('data-price');
    
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'add_to_cart.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            alert('Product added to cart!');
            // Optionally, update the cart UI here
        }
    };
    xhr.send('id=' + productId + '&name=' + productName + '&price=' + productPrice);
});