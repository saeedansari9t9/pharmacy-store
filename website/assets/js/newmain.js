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
       });
   });
});