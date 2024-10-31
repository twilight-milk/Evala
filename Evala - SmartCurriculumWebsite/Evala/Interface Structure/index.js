    // index.js
document.addEventListener('DOMContentLoaded', () => {
    const cartIcon = document.querySelector('.nav-item.cart');
    const cartModal = document.getElementById('cart-modal');
    const closeButton = document.querySelector('.cart-modal .close-button');

    cartIcon.addEventListener('click', () => {
        cartModal.classList.add('open');
    });

    closeButton.addEventListener('click', () => {
        cartModal.classList.remove('open');
    });

    // Close the modal if the user clicks outside of it
    window.addEventListener('click', (event) => {
        if (event.target === cartModal) {
            cartModal.classList.remove('open');
        }
    });
});
